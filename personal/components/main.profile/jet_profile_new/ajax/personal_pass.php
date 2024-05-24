<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && check_bitrix_sessid()) {
	$arResult = array();

	$newPassword = $_POST['NEW_PASSWORD'];
	$confirmPassword = $_POST['NEW_PASSWORD_CONFIRM'];

	if (empty($newPassword) || empty($confirmPassword)) {
		$arResult['status'] = 'error';
		$arResult['message'] = 'Заполните все обязательные поля.';
	} elseif ($newPassword !== $confirmPassword) {
		$arResult['status'] = 'error';
		$arResult['message'] = 'Пароли не совпадают.';
	} else {

		// Сохранение пароля
		global $USER;
		$userId = $USER->GetID();
		$user = new CUser;
		$fields = array(
			'PASSWORD' => $newPassword,
			'CONFIRM_PASSWORD' => $confirmPassword,
		);

		if ($user->Update($userId, $fields)) {
			$arResult['status'] = 'success';
			$arResult['message'] = 'Пароль успешно изменен.';
		} else {
			$arResult['status'] = 'error';
			$arResult['message'] = 'Ошибка при изменении пароля: ' . $user->LAST_ERROR;
		}
	}
} else {
	$arResult['status'] = 'error';
	$arResult['message'] = 'Invalid Request: ' . print_r($_POST, true);

	if (!check_bitrix_sessid()) {
		$arResult['message'] .= "\nInvalid bitrix sessid.";
	}
}

header('Content-Type: application/json');
echo json_encode($arResult);

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');

?>
