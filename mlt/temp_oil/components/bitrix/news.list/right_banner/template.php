<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="baner-right">
    <div class="swiper baner-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-1c071b10d31a5baa7" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
            <?php foreach ($arResult['ITEMS'] as $index => $item) { ?>
                <div class="swiper-slide" style="width: 472px;" role="group" aria-label="<?= ($index + 1) . ' / ' . count($arResult['ITEMS']) ?>" data-swiper-slide-index="<?= $index ?>">
                    <div class="baner-slide">
                        <div class="baner-slide__img">
                            <?php
                            $imageID = $item['PROPERTIES']['FILE']['VALUE'];
                            $imageInfo = CFile::GetFileArray($imageID);
                            if ($imageInfo && $imageInfo['SRC']) {
                            ?>
                                <img src="<?= $imageInfo['SRC'] ?>" alt="">
                            <?php
                            }
                            ?>
                        </div>
                        <div class="baner-slide__logo baner-slide__logo-with-img desktop">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/logo.svg" alt="">
                        </div>
                        <div class="baner-slide__info-img">
                            <?php
                            $imageID = $item['PROPERTIES']['FILE']['VALUE'];
                            $imageInfo = CFile::GetFileArray($imageID);
                            if ($imageInfo && $imageInfo['SRC']) {
                            ?>
                                <img src="<?= $imageInfo['SRC'] ?>" alt="">
                            <?php
                            }
                            ?>
                        </div>
                        <div class="baner-slide__title title-text">
                            <? if (!empty($item['PROPERTIES']['zagolovok']['VALUE']['TEXT'])) { ?>
                                <?= $item['PROPERTIES']['zagolovok']['VALUE']['TEXT'] ?>
                            <? } ?>
                        </div>
                        <div class="baner-slide__title title-text">
                            <? if (!empty($item['PROPERTIES']['zagolovok']['VALUE']['TEXT'])) { ?>
                                <?= $item['PROPERTIES']['zagolovok']['VALUE']['TEXT'] ?>
                            <? } ?>
                        </div>
                        <a class="baner-slide__link">
                            <? if (!empty($item['PROPERTIES']['opisanie']['VALUE']['TEXT'])) { ?>
                                <?= $item['PROPERTIES']['opisanie']['VALUE']['TEXT'] ?>
                            <? } ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev baner-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1c071b10d31a5baa7" aria-disabled="true"></div>
        <div class="swiper-button-next baner-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1c071b10d31a5baa7" aria-disabled="false"></div>
        <div class="baner-swiper__number">
            <span class="baner-swiper__number-now">1</span>
            <span class="baner-swiper__number-all">5</span>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</div>
