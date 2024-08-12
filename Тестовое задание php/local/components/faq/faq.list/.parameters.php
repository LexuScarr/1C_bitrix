<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;

if (!\Bitrix\Main\Loader::includeModule('iblock')) {
	return;
}

$arIBlocks = [];
$dbIBlock = Iblock\IblockTable::getList([
	'select' => ['ID', 'NAME'],
	'order' => ['SORT' => 'ASC']
]);
while ($arIBlock = $dbIBlock->fetch()) {
	$arIBlocks[$arIBlock['ID']] = "[" . $arIBlock['ID'] . "] " . $arIBlock['NAME'];
}

$arComponentParameters = [
	"PARAMETERS" => [
		"IBLOCK_ID" => [
			"PARENT" => "BASE",
			"NAME" => Loc::getMessage("FAQ_MODULE_IBLOCK_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"REFRESH" => "Y",
		],
		"ITEMS_PER_PAGE" => [
			"PARENT" => "BASE",
			"NAME" => Loc::getMessage("FAQ_MODULE_ITEMS_PER_PAGE"),
			"TYPE" => "STRING",
			"DEFAULT" => "10",
		],
	],
];
