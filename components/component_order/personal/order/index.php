<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
global $USER;
if (!$USER->IsAdmin()) {

	LocalRedirect("/404.php");
	exit;
}
?><?
LocalRedirect('/personal/');
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>