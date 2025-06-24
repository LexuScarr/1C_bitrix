<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Iblock\ElementTable;

$iblockFromId = 17; // ID исходного инфоблока (новости)
$iblockToId = 24;   // ID целевого инфоблока (акции)
$elementId = 1401;  // ID конкретного элемента для переноса

$arFilter = [
	'IBLOCK_ID' => $iblockFromId,
	'ID' => $elementId,
	'ACTIVE' => 'Y'
];

// Получаем элемент по его ID
$res = CIBlockElement::GetList([], $arFilter, false, false, ['ID', 'NAME', 'DETAIL_TEXT', 'PREVIEW_TEXT', 'DETAIL_PICTURE', 'PREVIEW_PICTURE', 'ACTIVE_FROM', 'PROPERTY_*']);

$el = new CIBlockElement();

if ($element = $res->Fetch()) {

	$fields = [
		"IBLOCK_ID"      => $iblockToId, // ID целевого инфоблока
		"NAME"           => $element["NAME"], // Название
		"PREVIEW_TEXT"   => $element["PREVIEW_TEXT"], // Текст анонса
		"DETAIL_TEXT"    => $element["DETAIL_TEXT"], // Детальный текст
		"ACTIVE"         => "Y", // Активный элемент
		"ACTIVE_FROM"    => $element["ACTIVE_FROM"] ? $element["ACTIVE_FROM"] : ConvertTimeStamp(time(), "FULL"), // Копируем дату активности или ставим текущую
		"CODE"           => CUtil::translit($element['NAME'], "ru", array("replace_space" => "-", "replace_other" => "-")), // Символьный код
		"PREVIEW_PICTURE"=> \CFile::MakeFileArray($element["PREVIEW_PICTURE"]), // Картинка анонса
		"DETAIL_PICTURE" => \CFile::MakeFileArray($element["DETAIL_PICTURE"]) // Детальная картинка
	];

	// Переносим свойства
	$properties = [];
	$db_props = CIBlockElement::GetProperty($iblockFromId, $element['ID'], [], []);
	while ($prop = $db_props->Fetch()) {
		$properties[$prop['CODE']] = $prop['VALUE'];
	}

	$fields["PROPERTY_VALUES"] = $properties;

	// Создаём новый элемент в инфоблоке
	if ($newElementId = $el->Add($fields)) {
		echo "Элемент с ID {$element['ID']} перенесён в новый инфоблок с новым ID: $newElementId<br>";
	} else {
		echo "Ошибка переноса элемента с ID {$element['ID']}: " . $el->LAST_ERROR . "<br>";
	}
} else {
	echo "Элемент с ID {$elementId} не найден<br>";
}
?>
