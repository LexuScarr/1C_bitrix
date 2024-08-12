<?php

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

IncludeModuleLangFile(__FILE__);

if ($APPLICATION->GetGroupRight("faq.module") > "D") {
	$moduleMenu = [
		[
			"parent_menu" => "global_menu_content",
			"section" => "faq",
			"sort" => 100,
			"text" => Loc::getMessage("FAQ_MENU_TEXT"),
			"title" => Loc::getMessage("FAQ_MENU_TITLE"),
			"url" => "faq_elements.php?lang=" . LANGUAGE_ID,
			"icon" => "iblock_menu_icon_types",
			"page_icon" => "iblock_menu_icon_types",
			"items_id" => "faq_items",
			"items" => []
		]
	];

	return $moduleMenu;
}

return false;
?>
