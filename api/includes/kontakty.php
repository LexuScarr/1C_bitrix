<section class="section contacts">
    <?
    $SUBresultCon = CIBlockElement::GetByID(169); // id элемента
    $ar_res = $SUBresultCon->GetNextElement();
    $arPropsCon = $ar_res->GetProperties();
    ?>
    <div class="modal-box modal-request modal-contacts">
        <div class="modal-box__container">
            <button class="modal-box__close" type="button">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="section__title center">
                Обратная связь
            </div>           
            <div class="section__text">
                Ваше сообщение успешно отправлено!
            </div>
            <div class="modal-request__btns">
                <button class="btn btn__close">
                    Вернуться
                </button>
            </div>
        </div>
    </div>
    <div class="lines">
        <img src="<?= SITE_TEMPLATE_PATH ?>/images/lines.svg" alt="lines.svg">
    </div>
    <div class="container">
        <div class="section__title">
            Контакты
        </div>
        <div class="contacts__us">
            <div class="contact__us gradient_border">
                <div class="contact__us-circle"></div>
                <div class="contact__us-icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/call.svg" alt="">
                </div>
                <div class="contact__us-inner">
                    <div class="contact__us-title">
                        Номер телефона
                    </div>
                    <div class="contact__us-text">
                        <?= $arPropsCon['PHONE']['VALUE'] ?>
                    </div>
                </div>
            </div>
            <div class="contact__us gradient_border">
                <div class="contact__us-circle"></div>
                <div class="contact__us-icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/mail.svg" alt="">
                </div>
                <div class="contact__us-inner">
                    <div class="contact__us-title">
                        Электронная почта
                    </div>
                    <div class="contact__us-text">
                        <?= $arPropsCon['EMAIL']['VALUE'] ?>
                    </div>
                </div>
            </div>
            <div class="contact__us gradient_border">
                <div class="contact__us-circle"></div>
                <div class="contact__us-icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/location.svg" alt="">
                </div>
                <div class="contact__us-inner">
                    <div class="contact__us-title">
                        Локация
                    </div>
                    <div class="contact__us-text">
                        <?= $arPropsCon['LOCATION']['VALUE'] ?>
                    </div>
                </div>
            </div>
            <div class="contact__us gradient_border">
                <form class="form form_login form_validation" id="form_kontakty">
                    <div class="contact__us-title">
                        Обратная связь
                    </div>
                    <label class="form__item">
                        <input class="input" type="text" name="NAME">
                        <span class="placeholder">Ваше имя</span>
                    </label>
                    <label class="form__item">
                        <input class="input" type="tel" name="PHONE">
                        <span class="placeholder">Номер телефона</span>
                    </label>
                    <label class="form__item">
                        <input class="input" type="email" name="EMAIL">
                        <span class="placeholder">E-mail</span>
                    </label>
                    <label class="form__item">
                        <textarea class="textarea" name="MESSAGE"></textarea>
                        <span class="placeholder">Сообщение</span>
                    </label>
                    <div class="form__bottom">
                        <div class="btn" style="cursor: pointer;" type="submit" id="SEND_KONTAKTY">
                            Отправить
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
