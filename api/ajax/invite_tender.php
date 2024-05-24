<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$filePro = array(
    "name" => $_FILES['FILE']['name'],
    "size" => $_FILES['FILE']['size'],
    "tmp_name" => $_FILES['FILE']['tmp_name'],
    "type" => $_FILES['FILE']['type']
);
$iFileId = CFile::SaveFile($filePro, 'main', false, false);

$arEventFields = array(
    "NAME" => htmlspecialcharsbx($_POST['FIO']),
    "EMAIL" => htmlspecialcharsbx($_POST['EMAIL']),
    "TELEPHONE" => htmlspecialcharsbx($_POST['TELEPHONE']),
    "MESSAGE" => htmlspecialcharsbx($_POST['MESSAGE'])
);

CEvent::Send('TENDER_FEEDBACK', 's1', $arEventFields, $Duplicate = "N",'', [$iFileId])


$el = new CIBlockElement;
$PROP = array();
$PROP['NAME'] =$_POST['FIO'];
$PROP['TELEPHONE'] = $_POST['TELEPHONE'];
$PROP['EMAIL'] = $_POST['EMAIL'];
$PROP['MESSAGE'] = $_POST['MESSAGE'];
$PROP['DOCUMENT'] = $_FILES['FILE'];

$arLoadOrder = Array(
    "MODIFIED_BY"    =>  $GLOBALS['USER']->GetID(), // элемент изменен текущим пользователем
    "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
    "IBLOCK_ID"      => 25,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => "Заявка от:" .date("Y-m-d-H:i:s"),
    "ACTIVE"         => "Y",            // активен
);

$el ->Add($arLoadOrder);

die();

?>