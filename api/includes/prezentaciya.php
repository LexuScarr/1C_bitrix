<section class="section contacts-info">
    <?
    $SUBresultPres = CIBlockElement::GetByID(170);
    $ar_res1 = $SUBresultPres->GetNextElement();
    $arPropsPres = $ar_res1->GetProperties();
    ?>
    <div class="container">
        <div class="section__title">
            <?= $arPropsPres['ZAGOLOVOK']['VALUE'] ?>
        </div>
        <div class="contacts-info__container">
            <div class="contacts-info__left">
                <div class="contacts-info__title">
                    <?= $arPropsPres['ZAGOLOVOK_BLOCK1']['VALUE'] ?>
                </div>
                <ul class="contacts-info__list">
                    <?= $arPropsPres['TEXT_BLOCK1']['~VALUE']['TEXT'] ?>
                </ul>
                <div class="contacts-info__title">
                    <?= $arPropsPres['ZAGOLOVOK_BLOCK2']['VALUE'] ?>
                </div>
                <ul class="contacts-info__list">
                    <?= $arPropsPres['TEXT_BLOCK2']['~VALUE']['TEXT'] ?>
                </ul>
                <div class="contacts-info__title">
                    <?= $arPropsPres['ZAGOLOVOK_BLOCK3']['VALUE'] ?>
                </div>
                <ul class="contacts-info__list">
                    <?= $arPropsPres['TEXT_BLOCK3']['~VALUE']['TEXT'] ?>
                </ul>
                <div class="contacts-info__title">
                    <?= $arPropsPres['ZAGOLOVOK_BLOCK4']['VALUE'] ?>
                </div>
                <ul class="contacts-info__list">
                    <?= $arPropsPres['TEXT_BLOCK4']['~VALUE']['TEXT'] ?>
                </ul>
                <form class="form" id="form_prezentaciya">
                    <label class="form__item">
                        <input class="input" type="email" name="EMAIL">
                        <span class="placeholder">E-mail</span>
                    </label>
                    <div class="form__bottom">
                        <div class="btn" style="cursor: pointer;" type="submit" id="SEND_PREZENTACIYA">
                            Запросить презентацию
                        </div>
                    </div>
                </form>
            </div>
            <div class="contacts-info__right">
                <div class="contacts-info__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
