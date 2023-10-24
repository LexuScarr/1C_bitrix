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
<div class="baner-left">
    <? foreach ($arResult['ITEMS'] as $item) { ?>
        <div class="baner-left__title title-text"><?= $item['PROPERTIES']['Zagolovok']['VALUE']['TEXT'] ?></div>
        <div class="baner-left__text normal-text"><?= $item['PROPERTIES']['Opisanie']['VALUE']['TEXT'] ?></div>
        <div class="baner-left-container">
            <div class="baner-left-item">
                <?php
                $logotipy_brendov = $item['PROPERTIES']['Logotipy_brendov']['VALUE'];
                $chunked_logotipy = array_chunk($logotipy_brendov, ceil(count($logotipy_brendov) / 2));

                foreach ($chunked_logotipy[0] as $imageID) {
                    $imageInfo = CFile::GetFileArray($imageID);
                    if ($imageInfo && $imageInfo['SRC']) {
                ?>
                        <div class="baner-left-item__logo">
                            <img src="<?= $imageInfo['SRC'] ?>" alt="">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="baner-left-item">
                <?php
                foreach ($chunked_logotipy[1] as $imageID) {
                    $imageInfo = CFile::GetFileArray($imageID);
                    if ($imageInfo && $imageInfo['SRC']) {
                ?>
                        <div class="baner-left-item__logo">
                            <img src="<?= $imageInfo['SRC'] ?>" alt="">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="baner-left-item">
                <a href="http://mlt.requestbitrix.ru/category/" class="baner-left-item__title">Перейти в каталог</a>
                <div class="baner-left-item__subtitle normal-text">
                    <? if (!empty($item['PROPERTIES']['podpis_chernaya']['VALUE']['TEXT'])) { ?>
                        <?= $item['PROPERTIES']['podpis_chernaya']['VALUE']['TEXT'] ?>
                    <? } ?>
                </div>
                <div class="baner-left-item__text normal-text">
                    <? if (!empty($item['PROPERTIES']['podpis_seraya']['VALUE']['TEXT'])) { ?>
                        <?= $item['PROPERTIES']['podpis_seraya']['VALUE']['TEXT'] ?>
                    <? } ?>
                </div>
            </div>
        </div>
</div>
<? } ?>
