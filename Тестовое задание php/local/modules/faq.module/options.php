<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\HttpApplication;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use Bitrix\Iblock;

Loc::loadMessages(__FILE__);

$request = HttpApplication::getInstance()->getContext()->getRequest();
$module_id = htmlspecialcharsbx($request["mid"] != "" ? $request["mid"] : $request["id"]);

Loader::includeModule($module_id);
Loader::includeModule('iblock');


$arIBlocks = [];
$dbIBlock = Iblock\IblockTable::getList([
	'select' => ['ID', 'NAME'],
	'order' => ['SORT' => 'ASC']
]);
while ($arIBlock = $dbIBlock->fetch()) {
	$arIBlocks[$arIBlock['ID']] = "[" . $arIBlock['ID'] . "] " . $arIBlock['NAME'];
}

// Получаем текущий выбранный инфоблок
$currentIBlockId = Option::get($module_id, 'IBLOCK_ID', '');

// Получаем список полей для выбранного инфоблока
$arFields = [];
if (!empty($currentIBlockId)) {
	$properties = CIBlockProperty::GetList(["SORT" => "ASC"], ["IBLOCK_ID" => $currentIBlockId]);
	while ($prop = $properties->Fetch()) {
		$arFields[$prop['CODE']] = $prop['NAME'];
	}
}

// Определение параметров
$aTabs = array(
	array(
		"DIV" => "edit",
		"TAB" => Loc::getMessage("FAQ_MODULE_OPTIONS_TAB_NAME"),
		"TITLE" => Loc::getMessage("FAQ_MODULE_OPTIONS_TAB_NAME"),
		"OPTIONS" => array(
			Loc::getMessage("FAQ_MODULE_OPTIONS_TAB_COMMON"),
			array(
				"IBLOCK_ID",
				Loc::getMessage("FAQ_SELECT_IBLOCK"),
				"",
				array("selectbox", $arIBlocks) // Опция выбора инфоблока
			),
			array(
				"FIELDS",
				Loc::getMessage("FAQ_SELECT_FIELDS"),
				"",
				array("multiselectbox", $arFields) // Опция выбора полей
			),
			array(
				"faq_items_per_page",
				Loc::getMessage("FAQ_MODULE_OPTIONS_ITEMS_PER_PAGE"),
				"10",
				array("text", 5)
			),
		)
	)
);

if ($request->isPost() && check_bitrix_sessid()) {
	foreach ($aTabs as $aTab) {
		foreach ($aTab["OPTIONS"] as $arOption) {
			if (!is_array($arOption)) {
				continue;
			}
			if ($arOption["note"]) {
				continue;
			}
			if ($request["apply"]) {
				$optionValue = $request->getPost($arOption[0]);
				Option::set($module_id, $arOption[0], is_array($optionValue) ? implode(",", $optionValue) : $optionValue);
			} elseif ($request["default"]) {
				Option::set($module_id, $arOption[0], $arOption[2]);
			}
		}
	}
	LocalRedirect($APPLICATION->GetCurPage() . "?mid=" . $module_id . "&lang=" . LANG);
}

$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();
?>

<form action="<?php echo $APPLICATION->GetCurPage(); ?>?mid=<?php echo $module_id; ?>&lang=<?php echo LANG; ?>" method="post">
	<?php
	foreach ($aTabs as $aTab) {
		if ($aTab["OPTIONS"]) {
			$tabControl->BeginNextTab();
			__AdmSettingsDrawList($module_id, $aTab["OPTIONS"]);
		}
	}

	$tabControl->Buttons();
	?>
    <input type="submit" name="apply" value="<?php echo Loc::GetMessage("FAQ_MODULE_OPTIONS_INPUT_APPLY"); ?>" class="adm-btn-save" />
    <input type="submit" name="default" value="<?php echo Loc::GetMessage("FAQ_MODULE_OPTIONS_INPUT_DEFAULT"); ?>" />

	<?php echo bitrix_sessid_post(); ?>
</form>

<?php
$tabControl->End();
?>
