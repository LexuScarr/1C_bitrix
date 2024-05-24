<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

if ($arResult["ERROR_MESSAGE"] <> '') {
	ShowError($arResult["ERROR_MESSAGE"]);
}
if ($arResult["NAV_STRING"] <> '') {
	?>
    <p><?= $arResult["NAV_STRING"] ?></p>
	<?
}

if (is_array($arResult["PROFILES"]) && !empty($arResult["PROFILES"])) {
	?>

    <div class="wa-tablist__content mt-lg-0 personal-content" data-tabpanel-target="">
        <h2>Мои компании</h2>
        <div class="company-form-modal" id="addCompany">
            <form class="company-form" id="addCompanyForm" >
                <h2 class="company-form__title">Добавить новую компанию</h2>
                <div>
                </div>
                <div class="company-form__text">
                    Сохраняйте информацию о своих компаниях для удобства оформления новых заказов
                </div>
                <div class="company-form__fields">
                    <div class="company-form__field">
                        <div class="wa-input">
                            <label for="company-form-1_1" class="wa-input-label">ИНН <span
                                        style="color:#ff1130">*</span></label>
                            <input id="company-form-1_1" type="number" name="INN" class="wa-input__input">
                        </div>
                    </div>
                    <div class="company-form__field">
                        <div class="wa-input">
                            <div class="wa-input">
                                <label for="company-form-1_2" class="wa-input-label">Название
                                    организации</label>
                                <input id="company-form-1_2" type="text" name="COMPANY_NAME" class="wa-input__input">
                            </div>
                        </div>
                    </div>
                    <div class="company-form__field">
                        <h3 class="company-form__subtitle">Организационная форма: <span
                                    style="color:#ff1130">*</span></h3>
                        <div class="wa-form-check">
                            <input type="radio" class="wa-form-check__input" id="tst-input-1"
                                   name="PERSON_TYPE" value="2"
                                   data-product-form="additional-select" tabindex="0">
                            <label for="tst-input-1" class="wa-form-check__label"><span
                                        class="wa-form-check__checkbox"></span>ООО, ОАО и тд</label>
                        </div>
                    </div>
                    <div class="company-form__field">
                        <div class="wa-form-check">
                            <input type="radio" class="wa-form-check__input" id="tst-input-2"
                                   name="PERSON_TYPE" value="2"
                                   data-product-form="additional-select" tabindex="0">
                            <label for="tst-input-2" class="wa-form-check__label"><span
                                        class="wa-form-check__checkbox"></span>ИП</label>
                        </div>
                    </div>
                    <div class="company-form__field">
                        <div class="wa-form-check">
                            <input type="radio" class="wa-form-check__input" id="tst-input-3"
                                   name="PERSON_TYPE" value="1"
                                   data-product-form="additional-select" tabindex="0">
                            <label for="tst-input-3" class="wa-form-check__label"><span
                                        class="wa-form-check__checkbox"></span>Самозанятый (Физическое
                                лицо)</label>
                        </div>
                    </div>
                    <div class="company-form__field">
                        <div class="wa-input">
                            <div class="wa-input">
                                <label for="company-form-1_3" class="wa-input-label">Укажите фактический
                                    адрес
                                    компании</label>
                                <input id="company-form-1_3" type="text" name="ADDRESS" class="wa-input__input">
                            </div>
                        </div>
                    </div>
                    <div class="company-form__field">
                        <div class="wa-input">
                            <div class="wa-input">
                                <label for="company-form-1_4" class="wa-input-label">Укажите почтовый
                                    индекс
                                    компании</label>
                                <input id="company-form-1_4" type="number" name="POSTAL_CODE" class="wa-input__input">
                            </div>
                        </div>
                    </div>
                    <div class="company-form__field">
                        <div class="wa-form-check">
                            <input type="checkbox" class="wa-form-check__input" id="tst-input-4"
                                   data-product-form="additional-select" tabindex="0" required="true">
                            <label for="tst-input-4" class="wa-form-check__label"><span
                                        class="wa-form-check__checkbox"></span><span>Я соглашаюсь с <a
                                            href="#"
                                            class="rf-btn company-form__btn rf-btn_wa-link d-inline">условиями</a>  обработки данных</span></label>
                        </div>
                    </div>
                </div>
                <div class="company-form__controls">
                    <div class="company-form__control">
                        <button type="button" id="submitCompanyForm" class="rf-btn rf-btn_secondary rf-btn_wa">
                            Сохранить
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row personal-company-list">
            <div class="col-12 col-md-6 col-xl-4 personal-company-list__item">
                <a href="#addCompany" class="personal-company-card personal-company-card_add"
                   data-popup>
                    <div class="personal-company-card__body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none">
                            <path fill="currentColor"
                                  d="M10.5.313A9.686 9.686 0 0 1 20.188 10a9.686 9.686 0 0 1-9.688 9.688A9.686 9.686 0 0 1 .812 10 9.686 9.686 0 0 1 10.5.312Zm5.625 10.78V8.907a.504.504 0 0 0-.469-.469h-3.594V4.845a.504.504 0 0 0-.468-.469H9.406a.475.475 0 0 0-.469.469v3.593H5.345a.475.475 0 0 0-.469.47v2.187c0 .273.195.469.469.469h3.593v3.593c0 .274.196.469.47.469h2.187a.475.475 0 0 0 .469-.469v-3.594h3.593a.475.475 0 0 0 .469-.468Z"/>
                        </svg>
                        Добавить компанию
                    </div>
                </a>
            </div>
			<? foreach ($arResult["PROFILES"] as $val) {
				?>
                <div class="col-12 col-md-6 col-xl-4 personal-company-list__item">
                    <div class="personal-company-card">
                        <div class="personal-company-card__body">
                            <div class="personal-company-card__controls">
                                <div class="personal-company-card__control">
                                    <button type="button" class="personal-company-card__btn" onclick="location.href='<?= $val["URL_TO_DETAIL"] ?>'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                             fill="none">
                                            <path fill="currentColor"
                                                  d="m8.93 3.32 3.5 3.5-7.602 7.602-3.117.328A.636.636 0 0 1 1 14.04l.328-3.118L8.93 3.32Zm5.66-.52c.52.493.52 1.34 0 1.86l-1.531 1.531-3.5-3.5 1.53-1.53c.52-.52 1.368-.52 1.86 0l1.64 1.64Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="personal-company-card__control">
                                    <a class="sale-personal-profile-list-close-button"
                                       title="<?= Loc::getMessage("SALE_DELETE_DESCR") ?>"
                                       href="javascript:if(confirm('<?= Loc::getMessage("STPPL_DELETE_CONFIRM") ?>')) window.location='<?= $val["URL_TO_DETELE"] ?>'">
		                                <?= Loc::getMessage("SALE_DELETE") ?>
                                    </a>
                                </div>
                            </div>
                            <div class="personal-company-card__title"><?= htmlspecialchars($val["NAME"]) ?></div>
	                        <?php if (!empty($val["PROPERTIES"])): ?>
		                        <?php
		                        // Проверяем тип лица
		                        $isLegalEntity = ($val["PERSON_TYPE_ID"] == 2);
		                        ?>
		                        <?php if (!$isLegalEntity): // Физические лица ?>
                                <? if (isset($val["PROPERTIES"]["INN"]["VALUE"])) { ?>
                                    <div class="personal-company-card__text">ИНН: <?= htmlspecialchars($val["PROPERTIES"]["INN"]["VALUE"]) ?></div>
                                    <? } ?>
                                    <div class="personal-company-card__text"><?= htmlspecialchars($val["PROPERTIES"]["ADDRESS"]["VALUE"]) ?></div>
                                    <div class="personal-company-card__text"><?= htmlspecialchars($val["PROPERTIES"]["INDEX"]["VALUE"]) ?></div>
		                        <?php else: // Юридические лица ?>
                                <? if (isset($val["PROPERTIES"]["F_INN"]["VALUE"])) { ?>
                                    <div class="personal-company-card__text">ИНН: <?= htmlspecialchars($val["PROPERTIES"]["F_INN"]["VALUE"]) ?></div>
                                    <? } ?>
                                    <div class="personal-company-card__text"><?= htmlspecialchars($val["PROPERTIES"]["F_ADDRESS_FULL"]["VALUE"]) ?></div>
                                    <div class="personal-company-card__text"><?= htmlspecialchars($val["PROPERTIES"]["F_KPP"]["VALUE"]) ?></div>
		                        <?php endif; ?>
	                        <?php endif; ?>
                        </div>
                    </div>
                </div>
				<?
			} ?>
        </div>
    </div>

	<?
	if ($arResult["NAV_STRING"] <> '') {
		?>
        <p><?= $arResult["NAV_STRING"] ?></p>
		<?
	}
} elseif ($arResult['USER_IS_NOT_AUTHORIZED'] !== 'Y') {
	?>
    <h3><?= Loc::getMessage("STPPL_EMPTY_PROFILE_LIST") ?></h3>
	<?
}
?>
