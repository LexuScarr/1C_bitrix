<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

if (!empty($_POST['NAME']) && !empty($_POST['PHONE'])) {
    $arEventFields = array(
        "NAME" => $_POST['NAME'],
        "PHONE" => $_POST['PHONE'],
        "EMAIL" => $_POST['EMAIL'],
        "MESSAGE" => $_POST['MESSAGE'],
    );

    CEvent::Send('KONTAKTY_FEEDBACK', 's1', $arEventFields, $Duplicate = "N", '');


    $el = new CIBlockElement;
    $PROP = array();
    $PROP['NAME'] = $_POST['NAME'];
    $PROP['PHONE'] = $_POST['PHONE'];
    $PROP['EMAIL'] = $_POST['EMAIL'];
    $PROP['MESSAGE'] = $_POST['MESSAGE'];


    $arLoadOrder = array(
        "MODIFIED_BY"    =>  $GLOBALS['USER']->GetID(), // элемент изменен текущим пользователем
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 17,
        "PROPERTY_VALUES" => $PROP,
        "NAME"           => "Заявка от:" . date("Y-m-d-H:i:s"),
        "ACTIVE"         => "Y",            // активен
    );

    $resid = $el->Add($arLoadOrder);

    echo json_encode($resid);
} else {
    echo json_encode("Заполните все поля");
}
