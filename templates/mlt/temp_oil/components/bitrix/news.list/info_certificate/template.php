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
<div class="container">
    <?php foreach ($arResult['ITEMS'] as $index => $item) { ?>
        <div class="dealer-left">
            <div class="dealer-left__title title-text">
                <? if (!empty($item['PROPERTIES']['zagolovok']['VALUE']['TEXT'])) { ?>
                    <?= $item['PROPERTIES']['zagolovok']['VALUE']['TEXT'] ?>
                <? } ?>
            </div>
            <div class="dealer-left__text normal-text">
                <? if (!empty($item['PROPERTIES']['opisanie']['VALUE']['TEXT'])) { ?>
                    <?= $item['PROPERTIES']['opisanie']['~VALUE']['TEXT'] ?>
                <? } ?>
            </div>
            <div class="title-text-italic">
                <? if (!empty($item['PROPERTIES']['Tekst_pod_opisaniem']['VALUE'])) { ?>
                    <?= $item['PROPERTIES']['Tekst_pod_opisaniem']['VALUE'] ?>
                <? } ?>
            </div>
        </div>
        <div class="dealer-right">
            <div class="dealer-right-container">
                <?
                $imageID1 = $item['PROPERTIES']['Certificate1']['VALUE'];
                $imageInfo1 = CFile::GetFileArray($imageID1); ?>
                <div class="dealer-right__img">
                    <? if (!empty($imageInfo1 && $imageInfo1['SRC'])) {
                    ?>
                        <img src="<?= $imageInfo1['SRC'] ?>" alt="">
                    <? } ?>
                </div>
                <?
                $imageID2 = $item['PROPERTIES']['Certificate2']['VALUE'];
                $imageInfo2 = CFile::GetFileArray($imageID2); ?>
                <div class="dealer-right__img">
                    <? if (!empty($imageInfo2 && $imageInfo2['SRC'])) {
                    ?>
                        <img src="<?= $imageInfo2['SRC'] ?>" alt="">
                    <? } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
