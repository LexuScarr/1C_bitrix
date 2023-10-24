<section class="order">
    <?
    $SUBresult = CIBlockElement::GetByID(13); // id элемента
    $ar_res = $SUBresult->GetNextElement();
    $arProps = $ar_res->GetProperties();
    ?>
    <div class="container">
        <div class="order-left">
            <div class="order-left__title">
                <?= $arProps['ZAGOLOVOK']['VALUE'] ?>
            </div>
            <div class="order-left__text normal-text">
                <? if (!empty($arProps['TEKST']['VALUE'])) { ?>
                    <?= $arProps['TEKST']['VALUE']['TEXT'] ?>
                <? } ?>
            </div>
            <form class="order-left__form" id="form1">
                <input type="tel" class="input" placeholder="+7 (999) 999 99-99" name="PHONE">
                <button type="button" class="order-left__btn" onclick="submitForm()">
                    Заказать звонок
                </button>
            </form>
        </div>
        <div class="order-right">
            <? if (!empty($arProps['FILE']['VALUE'])) { ?>
                <img src="<?= CFile::GetPath($arProps['FILE']['VALUE']) ?>" alt="">
            <? } ?>
        </div>
    </div>
</section>
