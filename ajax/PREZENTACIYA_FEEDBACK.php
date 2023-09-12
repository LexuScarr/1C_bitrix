<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

if (!empty($_POST['EMAIL'])) {
    $arEventFields = array(
        "EMAIL" => $_POST['EMAIL'],
    );

    CEvent::Send('PREZENTACIYA_FEEDBACK', 's1', $arEventFields, $Duplicate = "N", '');


    $el = new CIBlockElement;
    $PROP = array();
    $PROP['EMAIL'] = $_POST['EMAIL'];

    $arLoadOrder = array(
        "MODIFIED_BY"    =>  $GLOBALS['USER']->GetID(),
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => 18,
        "PROPERTY_VALUES" => $PROP,
        "NAME"           => "Заявка от:" .  ' ' . $_POST['EMAIL'] . ' ' . date("Y-m-d-H:i:s"),
        "ACTIVE"         => "Y",
    );

    $resid = $el->Add($arLoadOrder);

    echo json_encode($resid);
} else {
    echo json_encode("Заполните все поля");
}
