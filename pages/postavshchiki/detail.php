<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
<?
$elementFilters = array(
	'IBLOCK_ID' => 12,
	'SECTION_ID' => 48,
	'ACTIVE' => 'Y',
	'PROPERTY_COMP_TRANS' => $_REQUEST['CODE']
);
$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilters, false, false, array('ID', "IBLOCK_ID", 'CODE', 'NAME', 'PREVIEW_PICTURE', 'PROPERTY_COMP', 'PROPERTY_COMP_TRANS'));

while ($arElement = $dbElements->GetNext()) {
	$code_comp = $arElement['CODE'];
} ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"postavshchiki_detail", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $code_comp,
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "USERS",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "email",
			1 => "admin",
			2 => "dolj",
			3 => "inn",
			4 => "cat",
			5 => "comp",
			6 => "okved",
			7 => "okpd2",
			8 => "desc",
			9 => "otdel",
			10 => "pass",
			11 => "add_req",
			12 => "phone",
			13 => "fio",
			14 => "sertif",
			15 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "postavshchiki_detail"
	),
	false
); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
