<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

<div class="bx-auth-profile">

	<? ShowError($arResult["strProfileError"]); ?>
	<?
	if ($arResult['DATA_SAVED'] == 'Y')
		ShowNote(GetMessage('PROFILE_DATA_SAVED'));
	?>
    <script type="text/javascript">
        <!--
        var opened_sections = [<?
			$arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"] . "_user_profile_open"];
			$arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
			if (strlen($arResult["opened"]) > 0) {
				echo "'" . implode("', '", explode(",", $arResult["opened"])) . "'";
			} else {
				$arResult["opened"] = "reg";
				echo "'reg'";
			}
			?>];
        //-->

        var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
    </script>

    <div class="wa-tablist__content mt-lg-0 personal-content" data-tabpanel-target="">

        <form method="post" name="form_pers" id="form_pers"
              enctype="multipart/form-data">
			<?= $arResult["BX_SESSION_CHECK"] ?>
            <input type="hidden" name="lang" value="<?= LANG ?>"/>
            <input type="hidden" name="ID" value=<?= $arResult["ID"] ?>/>

            <h2>Личные данные</h2>
            <div class="personal-form__fields"
                 id="user_div_reg">
                <div class="personal-form__field">
                    <div class="wa-input">
                        <label for="personal-form-1_1" class="wa-input-label">Ваше имя</label>
                        <input id="personal-form-1_1" type="text" name="NAME" maxlength="50"
                               value="<?= htmlspecialchars($arResult["arUser"]["NAME"]) ?>" class="wa-input__input">
                    </div>
                </div>
                <div class="personal-form__field">
                    <div class="wa-input">
                        <label for="personal-form-1_2" class="wa-input-label">E-mail</label>
                        <input id="personal-form-1_2" type="email" name="EMAIL" maxlength="50"
                               value="<?= htmlspecialchars($arResult["arUser"]["EMAIL"]) ?>"
                               class="wa-input__input">
                    </div>
                </div>
                <div class="personal-form__field">
                    <div class="wa-input">
                        <label for="personal-form-1_3" class="wa-input-label">Телефон</label>
                        <input id="personal-form-1_3" type="tel" name="PERSONAL_PHONE"
                               value="<?= htmlspecialchars($arResult["arUser"]["PERSONAL_PHONE"]) ?>"
                               class="wa-input__input">
                    </div>
                </div>

            </div>
            <div class="personal-form__controls">
                <div class="personal-form__control">
                    <button type="button" name="save_pers"
                            value="<?= (($arResult["ID"] > 0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD")) ?>"
                            class="rf-btn rf-btn_secondary rf-btn_wa personal-form__btn">
                        Сохранить изменения
                    </button>
                </div>
                <div class="personal-form__control">
                    <button type="reset" class="rf-btn personal-form__btn rf-btn_wa-link">Отменить
                        все
                        изменения
                    </button>
                </div>
            </div>
        </form>

        <form method="post" name="form_pass" id="form_pass"
              enctype="multipart/form-data">
            <h2>Изменить пароль</h2>
            <div class="personal-form__fields">
                <div class="personal-form__field">

                    <div class="wa-input">
                        <label for="personal-form-1_1"
                               class="wa-input-label"><?= GetMessage('NEW_PASSWORD_REQ') ?></label>
                        <input id="personal-form-1_1" type="password" name="NEW_PASSWORD" maxlength="50"
                               value=""
                               autocomplete="off" class="wa-input__input">

						<? if ($arResult["SECURE_AUTH"]): ?>
                            <span class="bx-auth-secure" id="bx_auth_secure"
                                  title="<? echo GetMessage("AUTH_SECURE_NOTE") ?>" style="display:none">
                    <div class="bx-auth-secure-icon"></div>
                </span>
                            <noscript>
                    <span class="bx-auth-secure" title="<? echo GetMessage("AUTH_NONSECURE_NOTE") ?>">
                        <div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
                    </span>
                            </noscript>
                            <script type="text/javascript">
                                document.getElementById('bx_auth_secure').style.display = 'inline-block';
                            </script>
						<? endif ?>
                    </div>
                </div>
                <div class="personal-form__field">
                    <div class="wa-input">
                        <div class="wa-input">
                            <label for="personal-form-1_2"
                                   class="wa-input-label"><?= GetMessage('NEW_PASSWORD_CONFIRM') ?></label>
                            <input id="personal-form-1_2" type="password" name="NEW_PASSWORD_CONFIRM"
                                   maxlength="50"
                                   value="" autocomplete="off" class="wa-input__input">
                        </div>
                    </div>
                </div>
            </div>

			<? if ($arResult["TIME_ZONE_ENABLED"] == true): ?>
                <div class="personal-form__field">
                    <div class="wa-input">
                        <label for="auto_time_zone"
                               class="wa-input-label"><?= GetMessage("main_profile_time_zones_auto") ?></label>
                        <select id="auto_time_zone" name="AUTO_TIME_ZONE"
                                onchange="this.form.TIME_ZONE.disabled=(this.value != 'N')">
                            <option value=""><?= GetMessage("main_profile_time_zones_auto_def") ?></option>
                            <option value="Y"<?= ($arResult["arUser"]["AUTO_TIME_ZONE"] == "Y" ? ' SELECTED="SELECTED"' : '') ?>><?= GetMessage("main_profile_time_zones_auto_yes") ?></option>
                            <option value="N"<?= ($arResult["arUser"]["AUTO_TIME_ZONE"] == "N" ? ' SELECTED="SELECTED"' : '') ?>><?= GetMessage("main_profile_time_zones_auto_no") ?></option>
                        </select>
                    </div>
                </div>
                <div class="personal-form__field">
                    <div class="wa-input">
                        <label for="time_zone"
                               class="wa-input-label"><?= GetMessage("main_profile_time_zones_zones") ?></label>
                        <select id="time_zone"
                                name="TIME_ZONE" <? if ($arResult["arUser"]["AUTO_TIME_ZONE"] <> "N") echo ' disabled="disabled"' ?>>
							<? foreach ($arResult["TIME_ZONE_LIST"] as $tz => $tz_name): ?>
                                <option value="<?= htmlspecialcharsbx($tz) ?>"<?= ($arResult["arUser"]["TIME_ZONE"] == $tz ? ' SELECTED="SELECTED"' : '') ?>><?= htmlspecialcharsbx($tz_name) ?></option>
							<? endforeach ?>
                        </select>
                    </div>
                </div>
			<? endif ?>

            <div class="personal-form__controls">
                <div class="personal-form__control">
                    <button type="button" name="save_pass"
                            value="<?= (($arResult["ID"] > 0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD")) ?>"
                            class="rf-btn rf-btn_secondary rf-btn_wa personal-form__btn">
                        Сохранить изменения
                    </button>
                </div>
                <div class="personal-form__control">
                    <button type="reset" class="rf-btn personal-form__btn rf-btn_wa-link">Отменить
                        все
                        изменения
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>