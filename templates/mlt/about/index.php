<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>
<main>
    <section class="about-us">
        <div class="container revers">
            <?
            $SUBresultAbout = CIBlockElement::GetByID(60); // id элемента
            $ar_res = $SUBresultAbout->GetNextElement();
            $arProps = $ar_res->GetProperties();
            ?>
            <div class="about-us-left">
                <div class="about-us-left__title title-text"><?= $arProps['ZAGOLOVOK']['VALUE'] ?></div>
                <div class="about-us-left__text normal-text mobile"><?= $arProps['TEXT_RIGHT']['VALUE']['TEXT'] ?></div>
                <div class="about-us-left__img">
                    <img src="<?= CFile::GetPath($arProps['IMAGE_LEFT']['VALUE']) ?>" alt="">
                </div>
                <div class="about-us-left-container">
                    <?php
                    foreach ($arProps['BLOCK_ZAGOLOVOK']['VALUE'] as $index => $blockTitle) {
                        $blockText = $arProps['BLOCK_TEXT']['VALUE'][$index];
                    ?>
                        <div class="about-us-left__item">
                            <div class="about-us-left__item-title title-text"><?= $blockTitle ?></div>
                            <div class="about-us-left__item-text normal-text"><?= $blockText ?></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="about-us-right">
                <div class="about-us-right__text normal-text desktop"><?= $arProps['TEXT_RIGHT']['VALUE']['TEXT'] ?></div>
                <div class="about-us-right__img">
                    <img src="<?= CFile::GetPath($arProps['IMAGE_RIGHT']['VALUE']) ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="working">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "info_block",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "3",
                "IBLOCK_TYPE" => "main",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("nazvanie", "opisanie", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>
    </section>

    <section class="order">
        <?
        $SUBresult = CIBlockElement::GetByID(13); // id элемента
        $ar_res = $SUBresult->GetNextElement();
        $arPropsOrd = $ar_res->GetProperties();
        ?>
        <div class="container">
            <div class="order-left">
                <div class="order-left__title">
                    <?= $arPropsOrd['ZAGOLOVOK']['VALUE'] ?>
                </div>
                <div class="order-left__text normal-text">
                    <?= $arPropsOrd['TEKST']['VALUE']['TEXT'] ?>
                </div>
                <form class="order-left__form" id="form1">
                    <input type="tel" class="input" placeholder="+7 (999) 999 99-99" name="PHONE">
                    <button type="button" class="order-left__btn" onclick="submitForm()">
                        Заказать звонок
                    </button>
                </form>
            </div>
            <div class="order-right">
                <img src="<?= CFile::GetPath($arPropsOrd['FILE']['VALUE']) ?>" alt="">
            </div>
        </div>

        <script>
            function submitForm() {
                var form = $('#form1')[0];
                var formData = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: '/ajax/PHONE_FEEDBACK.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'json', // Указываем, что ожидаем JSON-ответ
                    success: function(response) {
                        console.log(response);
                        form.reset();
                    },
                    error: function(response) {
                        // Обработка ошибки
                        console.log(response);
                    }
                });
            }
        </script>
    </section>

</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
