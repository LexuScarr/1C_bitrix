<?php
include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Iblock\ElementTable;

$iblockFromId = 17; // ID исходного инфоблока
$iblockToId = 24;   // ID целевого инфоблока
$sectionId = 165;   // ID раздела

$limit = 5;
$counter = 0;

$arFilter = [
	'IBLOCK_ID' => $iblockFromId,
	'SECTION_ID' => $sectionId,
	'ACTIVE' => 'Y'
];

// Получаем элементы 
$res = CIBlockElement::GetList([], $arFilter, false, false, ['ID', 'NAME', 'DETAIL_TEXT', 'PREVIEW_TEXT', 'DETAIL_PICTURE', 'PREVIEW_PICTURE', 'ACTIVE_FROM', 'PROPERTY_*']);

$el = new CIBlockElement();

while ($element = $res->Fetch()) {
	if ($counter >= $limit) {
		break;
	}

	// Собираем данные элемента
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

	// Создаём новый элемент в целевом инфоблоке
	if ($newElementId = $el->Add($fields)) {
		echo "Элемент с ID {$element['ID']} перенесён в новый инфоблок с новым ID: $newElementId<br>";
		$counter++;
	} else {
		echo "Ошибка переноса элемента с ID {$element['ID']}: " . $el->LAST_ERROR . "<br>";
	}
}

echo "Всего перенесено элементов: $counter<br>";
?>
