<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");


$arEventFields = array(
    "PHONE" => $_POST['PHONE'],
);

CEvent::Send('PHONE_FEEDBACK', 's1', $arEventFields, $Duplicate = "N", '');


$el = new CIBlockElement;
$PROP = array();
$PROP['PHONE'] = $_POST['PHONE'];

$arLoadOrder = array(
    "MODIFIED_BY"    =>  $GLOBALS['USER']->GetID(), // элемент изменен текущим пользователем
    "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
    "IBLOCK_ID"      => 8,
    "PROPERTY_VALUES" => $PROP,
    "NAME"           => "Заявка от:" . date("Y-m-d-H:i:s"),
    "ACTIVE"         => "Y",            // активен
);

$resid = $el->Add($arLoadOrder);

echo json_encode($resid);
