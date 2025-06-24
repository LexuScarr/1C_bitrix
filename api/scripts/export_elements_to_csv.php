<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule('iblock');

// Параметры выборки
$arSelect = ['ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_CITY'];
$arFilter = [
	'IBLOCK_ID' => 8, // Замените на ID инфоблока старого сайта
	'SECTION_ID' => 1743, // Замените на ID раздела старого сайта
	'INCLUDE_SUBSECTIONS' => 'Y',
	'ACTIVE' => 'Y'
];
$arNavParams = false; // Без ограничения на количество
$elements = CIBlockElement::GetList([], $arFilter, false, $arNavParams, $arSelect);

// Открываем поток для вывода данных в CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=export_data.csv');
$output = fopen('php://output', 'w');

// Записываем заголовки столбцов
fputcsv($output, ['Название', 'Города']);

while ($element = $elements->GetNext()) {
	$articleName = $element['NAME'];
	$cityIDs = $element['PROPERTY_CITY_VALUE'];

	// Получаем названия городов по их ID
	$cityNames = [];
	if (!is_array($cityIDs)) {
		$cityIDs = [$cityIDs];
	}

	foreach ($cityIDs as $cityID) {
		$cityRes = CIBlockElement::GetByID($cityID);
		if ($city = $cityRes->GetNext()) {
			$cityNames[] = $city['NAME'];
		}
	}

	// Преобразуем массив городов в строку через запятую
	$citiesList = implode(', ', array_unique($cityNames));

	// Записываем строку в CSV
	fputcsv($output, [$articleName, $citiesList]);
}

fclose($output);
exit();
?>
