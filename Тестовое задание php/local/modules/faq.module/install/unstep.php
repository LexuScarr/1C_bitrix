<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (!check_bitrix_sessid()) {
	return;
}

echo(CAdminMessage::ShowNote(Loc::getMessage("FAQ_MODULE_UNSTEP_BEFORE") . " " . Loc::getMessage("FAQ_MODULE_UNSTEP_AFTER")));
?>

<form action="<?php echo($APPLICATION->GetCurPage()); ?>">
    <input type="hidden" name="lang" value="<?php echo(LANG); ?>" />
    <input type="submit" value="<?php echo(Loc::getMessage("FAQ_MODULE_UNSTEP_SUBMIT_BACK")); ?>">
</form>
