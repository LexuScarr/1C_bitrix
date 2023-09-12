<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

?>

<?
function translit_sef($value)
{
    $converter = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
    );

    $value = mb_strtolower($value);
    $value = strtr($value, $converter);
    $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
    $value = mb_ereg_replace('[-]+', '-', $value);
    $value = trim($value, '-');

    return $value;
}
if (!empty($_POST['COMP'])) {
    $elementFilters = array(
        'IBLOCK_ID' => 12,
        'ACTIVE' => 'Y',
        'PROPERTY_COMP' => $_POST['COMP'],
    );

    $dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilters, false, false, array('ID', "IBLOCK_ID", 'PROPERTY_COMP'));

    while ($item = $dbElements->GetNext()) {
        $comp = $item;
    }
    $comp = $comp['ID'];
} else {
    $comp = '';
}

$el = new CIBlockElement;
$PROP = array(
    "TOVAR" => $_POST['id_prod'],
    "FIO" => $_POST['FIO'],
    "EMAIL" => $_POST['EMAIL'],
    "COMP" => $comp,
    "COMMENT" => $_POST['COMMENT'],
    "SCORE" => $_POST['SCORE'],
);

$name_full = "Отзыв на товар: " . $_POST['COMP'] . ' ' . date("Y-m-d-H:i:s");

$code_bit = translit_sef($name_full);


$arLoadOrder = array(
    "MODIFIED_BY"    =>  $GLOBALS['USER']->GetID(),
    "IBLOCK_SECTION_ID" => false,
    "IBLOCK_ID"      => 22,
    "PROPERTY_VALUES" => $PROP,
    "NAME"           => $name_full,
    "CODE"           => $code_bit,
    "ACTIVE"         => "Y",
);

$resid = $el->Add($arLoadOrder);

echo json_encode($resid);
