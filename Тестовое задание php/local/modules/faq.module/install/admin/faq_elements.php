<?php

use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use Bitrix\Iblock;

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_before.php');

Loader::includeModule('iblock');

$POST_RIGHT = $APPLICATION->GetGroupRight("faq.module");
if ($POST_RIGHT == "D") {
	$APPLICATION->AuthForm("Доступ запрещен");
}

// Получаем ID инфоблока и выбранные поля из настроек
$iblockId = Option::get('faq.module', 'IBLOCK_ID', '');
$selectedFields = explode(',', Option::get('faq.module', 'FIELDS', ''));

// Проверяем, установлен ли инфоблок и выбраны ли поля
if (empty($iblockId) || empty($selectedFields)) {
	echo "Инфоблок или поля не выбраны. Пожалуйста, настройте модуль.";
	return;
}

// Подготовка к получению элементов инфоблока
$arSelect = array_merge(['ID', 'NAME'], array_map(fn($field) => 'PROPERTY_' . $field, $selectedFields));

// Получаем список элементов инфоблока
$elements = [];
$res = CIBlockElement::GetList([], ['IBLOCK_ID' => $iblockId], false, false, $arSelect);
while ($element = $res->Fetch()) {
	$elements[] = $element;
}

// Подключаем пролог административной панели
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

// Получаем названия полей
$fieldNames = [];
$properties = CIBlockProperty::GetList(["SORT" => "ASC"], ["IBLOCK_ID" => $iblockId]);
while ($prop = $properties->Fetch()) {
	if (in_array($prop['CODE'], $selectedFields)) {
		$fieldNames[$prop['CODE']] = $prop['NAME'];
	}
}

// Проверяем, существует ли элемент для редактирования
$element = null;
if (!empty($_GET['ID'])) {
	$elementId = intval($_GET['ID']);
	$element = CIBlockElement::GetList([], ['IBLOCK_ID' => $iblockId, 'ID' => $elementId], false, false, $arSelect)->GetNext();
}

// Обработка формы добавления/редактирования элемента
if ($_SERVER['REQUEST_METHOD'] == 'POST' && check_bitrix_sessid()) {
	$el = new CIBlockElement;

	$fields = [
		"IBLOCK_ID" => $iblockId,
		"NAME" => $_POST['NAME'], // Используем NAME из формы
		"PROPERTY_VALUES" => []
	];

	// Устанавливаем значения для свойств
	foreach ($selectedFields as $fieldCode) {
		$fields['PROPERTY_VALUES'][$fieldCode] = $_POST[$fieldCode];
	}

	if (!empty($_POST['ID'])) {
		// Редактирование
		$el->Update($_POST['ID'], $fields);
	} else {
		// Добавление
		if ($el->Add($fields)) {
			LocalRedirect($APPLICATION->GetCurPageParam("", ["ID", "action"]));
		} else {
			echo 'Ошибка добавления: ' . $el->LAST_ERROR;
		}
	}
}

?>

<form method="POST">
	<?= bitrix_sessid_post() ?>
    <table class="adm-detail-content-table edit-table">
        <tr>
            <td>Имя:</td>
            <td><input type="text" name="NAME" value="<?= htmlspecialcharsbx($element['NAME'] ?? '') ?>" size="50" /></td>
        </tr>
		<?php foreach ($selectedFields as $fieldCode): ?>
            <tr>
                <td><?= htmlspecialcharsbx($fieldNames[$fieldCode]) ?>:</td>
                <td><input type="text" name="<?= htmlspecialcharsbx($fieldCode) ?>" value="<?= htmlspecialcharsbx($element['PROPERTY_' . $fieldCode . '_VALUE'] ?? '') ?>" size="50" /></td>
            </tr>
		<?php endforeach; ?>
    </table>
    <input type="hidden" name="ID" value="<?= $_GET['ID'] ?>" />
    <input type="submit" value="<?= (!empty($element) ? "Сохранить" : "Добавить") ?>" />
</form>

<table class="adm-list-table" style="margin-top: 20px;">
    <thead>
    <tr class="adm-list-table-header">
        <th class="adm-list-table-cell">ID</th>
        <th class="adm-list-table-cell">Имя</th>
		<?php foreach ($selectedFields as $fieldCode): ?>
            <th class="adm-list-table-cell"><?= htmlspecialcharsbx($fieldNames[$fieldCode]) ?></th>
		<?php endforeach; ?>
        <th class="adm-list-table-cell">Действия</th>
    </tr>
    </thead>
    <tbody>
	<?php foreach ($elements as $element): ?>
        <tr class="adm-list-table-row">
            <td class="adm-list-table-cell"><?= $element['ID'] ?></td>
            <td class="adm-list-table-cell"><?= htmlspecialcharsbx($element['NAME']) ?></td>
			<?php foreach ($selectedFields as $fieldCode): ?>
                <td class="adm-list-table-cell"><?= htmlspecialcharsbx($element['PROPERTY_' . $fieldCode . '_VALUE']) ?></td>
			<?php endforeach; ?>
            <td class="adm-list-table-cell">
                <a href="?ID=<?= $element['ID'] ?>&lang=ru">Редактировать</a>
                <a href="?action=delete&ID=<?= $element['ID'] ?>&lang=ru&<?= bitrix_sessid_get() ?>" onclick="return confirm('Вы уверены, что хотите удалить этот элемент?')">Удалить</a>
            </td>
        </tr>
	<?php endforeach; ?>
    </tbody>
</table>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
?>
