<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Статья");
?>
<?php
if (isset($_GET['ELEMENT_CODE'])) {
    $elementCode = $_GET['ELEMENT_CODE'];

    $arFilter = array('IBLOCK_ID' => 11, 'CODE' => $elementCode, 'ACTIVE' => 'Y');
    $dbElement = CIBlockElement::GetList(array(), $arFilter, false, false, array('ID', 'NAME', 'PROPERTY_DATE', 'PROPERTY_IMAGE', 'PROPERTY_PREWIEW_TEKST', 'PROPERTY_TEKST', 'PROPERTY_OPISANIE'));

    if ($arArtElement = $dbElement->GetNext()) {
?>
        <section class="article-page">
            <div class="container">
                <div class="article-page-left">
                    <div class="article-page-left__top">
                        <div class="article-page-left__top-title title-text"><?= $arArtElement['NAME'] ?></div>
                        <div class="article-page-left__top-date normal-text"><?= $arArtElement['PROPERTY_DATE_VALUE'] ?></div>
                    </div>
                    <div class="article-page-left__img">
                        <img src="<?= CFile::GetPath($arArtElement['PROPERTY_IMAGE_VALUE']) ?>" alt="">
                    </div>
                    <div class="article-page-left__subtitle"><?= $arArtElement['PROPERTY_TEKST_VALUE']['TEXT'] ?></div>
                    <div class="article-page-left__text normal-text"><?= $arArtElement['~PROPERTY_OPISANIE_VALUE']['TEXT'] ?></div>
                </div>
                <?
                $sectionID = isset($_GET['section_id']) ? intval($_GET['section_id']) : 0;
                $elementFilter = array(
                    'IBLOCK_ID' => 11,
                    'SECTION_ID' => $sectionID,
                    'ACTIVE' => 'Y',
                );
                $dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilter, false, false, array('ID', 'NAME', 'PROPERTY_IMAGE', 'CODE', 'PROPERTY_DATE', 'PROPERTY_PREWIEW_TEKST'));
                ?>
                <div class="article-page-right">
                    <div class="swiper article-page-swiper white">
                        <div class="swiper-wrapper">
                            <? while ($arElement = $dbElements->GetNext()) { ?>
                                <div class="swiper-slide">
                                    <a href="/article/<?= $arElement['CODE'] ?>" class="article-page-slide">
                                        <div class="article-page-slide-top mobile">
                                            <div class="article-page-slide__title"><?= $arElement['NAME'] ?></div>
                                            <div class="article-page-slide__date normal-text"><?= $arElement['PROPERTY_DATE_VALUE'] ?></div>
                                        </div>
                                        <div class="article-page-slide__img">
                                            <img src="<?= CFile::GetPath($arElement['PROPERTY_IMAGE_VALUE']) ?>" alt="">
                                        </div>
                                        <div class="article-page-slide__date normal-text desktop"><?= $arElement['PROPERTY_DATE_VALUE'] ?></div>
                                        <div class="article-page-slide__bottom">
                                            <div class="article-page-slide__title desktop"><?= $arElement['NAME'] ?></div>
                                            <div class="article-page-slide__text normal-text mobile">><?= $arElement['PROPERTY_PREWIEW_TEKST_VALUE']['TEXT'] ?></div>
                                            <div class="article-page-slide__btn"></div>
                                        </div>
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                        <div class="swiper-button-prev article-page-button-prev"></div>
                        <div class="swiper-button-next article-page-button-next"></div>
                        <div class="swiper-pagination article-page-pagination article-page-swiper__number"></div>
                    </div>
                </div>
            </div>
        </section>
<?
    }
}
?>
</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
