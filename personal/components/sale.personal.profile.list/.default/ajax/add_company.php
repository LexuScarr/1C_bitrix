<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (CModule::IncludeModule("sale") && $_SERVER['REQUEST_METHOD'] == 'POST') {
	$inn = $_POST['INN'];
	$companyName = $_POST['COMPANY_NAME'];
	$companyAddress = $_POST['ADDRESS'];
	$companyIndex = $_POST['POSTAL_CODE'];
	$personType = $_POST['PERSON_TYPE'];

	$arFields = array(
		"NAME" => $companyName,
		"USER_ID" => $USER->GetID(),
		"PERSON_TYPE_ID" => $personType
	);

	$profileID = CSaleOrderUserProps::Add($arFields);
	if ($profileID) {
		if ($personType == '1') {
			$properties = array(
				array("USER_PROPS_ID" => $profileID, "ORDER_PROPS_ID" => 18, "NAME" => "INN", "VALUE" => $inn),
				array("USER_PROPS_ID" => $profileID, "ORDER_PROPS_ID" => 5, "NAME" => "ADDRESS", "VALUE" => $companyAddress),
				array("USER_PROPS_ID" => $profileID, "ORDER_PROPS_ID" => 4, "NAME" => "INDEX", "VALUE" => $companyIndex)
			);
		} elseif ($personType == '2') {
			$properties = array(
				array("USER_PROPS_ID" => $profileID, "ORDER_PROPS_ID" => 15, "NAME" => "F_INN", "VALUE" => $inn),
				array("USER_PROPS_ID" => $profileID, "ORDER_PROPS_ID" => 8, "NAME" => "F_ADDRESS_FULL", "VALUE" => $companyAddress),
				array("USER_PROPS_ID" => $profileID, "ORDER_PROPS_ID" => 16, "NAME" => "F_KPP", "VALUE" => $companyIndex)
			);
		}
		foreach ($properties as $property) {
			CSaleOrderUserPropsValue::Add($property);
		}
		echo "Профиль успешно добавлен";
	} else {
		echo "Ошибка при добавлении профиля";
	}
}
?>
