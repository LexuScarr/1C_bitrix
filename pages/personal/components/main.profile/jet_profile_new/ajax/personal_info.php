<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && check_bitrix_sessid()) {
	$arResult["ID"] = intval($USER->GetID());
	$arResult["GROUP_POLICY"] = CUser::GetGroupPolicy($arResult["ID"]);

	$name = htmlspecialcharsbx($_POST["NAME"]);
	$email = htmlspecialcharsbx($_POST["EMAIL"]);
	$phone = htmlspecialcharsbx($_POST["PERSONAL_PHONE"]);

	if (empty($name) || empty($email) || empty($phone)) {
		echo json_encode(['status' => 'error', 'message' => 'Заполните все обязательные поля.']);
		exit;
	}

	if (!check_email($email)) {
		echo json_encode(['status' => 'error', 'message' => 'Введите корректный email.']);
		exit;
	}

	$arFields = array(
		"NAME" => $name,
		"EMAIL" => $email,
		"PERSONAL_PHONE" => $phone,
	);

	if ($USER->Update($arResult["ID"], $arFields)) {
		echo json_encode(['status' => 'success', 'message' => 'Данные успешно сохранены']);
		exit;
	} else {
		echo json_encode(['status' => 'error', 'message' => $USER->LAST_ERROR]);
		exit;
	}
}

echo json_encode(['status' => 'error', 'message' => 'Неверные данные или отсутствие сессии']);
exit;
?>
