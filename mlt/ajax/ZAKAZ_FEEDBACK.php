<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

if (!empty($_POST['NAME']) && !empty($_POST['PHONE']) && !empty($_POST['EMAIL'])) {

    $arEventFields = array(
        "TOVAR" => $_POST['TOVAR'],
        "NAME" => $_POST['NAME'],
        "PHONE" => $_POST['PHONE'],
        "COMMENT" => $_POST['COMMENT'],
        "EMAIL" => $_POST['EMAIL'],
    );

    CEvent::Send('ZAKAZ_FEEDBACK', 's1', $arEventFields, $Duplicate = "N", '');


    $el = new CIBlockElement;
    $PROP = array();
    $PROP['TOVAR'] = $_POST['TOVAR'];
    $PROP['NAME'] = $_POST['NAME'];
    $PROP['PHONE'] = $_POST['PHONE'];
    $PROP['COMMENT'] = $_POST['COMMENT'];
    $PROP['EMAIL'] = $_POST['EMAIL'];

    $arLoadOrder = array(
        "MODIFIED_BY"    =>  $GLOBALS['USER']->GetID(), // элемент изменен текущим пользователем
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 10,
        "PROPERTY_VALUES" => $PROP,
        "NAME"           => "Заявка от:" . date("Y-m-d-H:i:s"),
        "ACTIVE"         => "Y",            // активен
    );

    $resid = $el->Add($arLoadOrder);

    echo json_encode($resid);
} else {
    echo json_encode("-1");
}
