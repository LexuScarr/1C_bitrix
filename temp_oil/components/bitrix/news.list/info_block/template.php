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
    <div class="working-left">
        <div class="working__title title-text">Как мы работаем:</div>
        <div class="working-container">
            <?php foreach ($arResult['ITEMS'] as $index => $item) {
                if ($item['IBLOCK_SECTION_ID'] == 1) { ?>
                    <div class="working-item">
                        <div class="working-item__number normal-text"><?= $index ?></div>
                        <div class="working-item__icon">
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
                        <div class="working-item__title title-text-italic">
                            <? if (!empty($item['PROPERTIES']['nazvanie']['VALUE'])) { ?>
                                <?= $item['PROPERTIES']['nazvanie']['VALUE'] ?>
                            <? } ?>
                        </div>
                        <div class="working-item__text normal-text">
                            <? if (!empty($item['PROPERTIES']['opisanie']['VALUE']['TEXT'])) { ?>
                                <?= $item['PROPERTIES']['opisanie']['VALUE']['TEXT'] ?>
                            <? } ?>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="working-right">
        <?php
        foreach ($arResult['ITEMS'] as $item) {
            if (!empty($item['PREVIEW_PICTURE']['SRC'])) {
                $imgSrc = $item['PREVIEW_PICTURE']['SRC'];
        ?>
                <img src="<?= $imgSrc ?>" alt="<?= $item['NAME'] ?>">
        <?php
                break;
            }
        }
        ?>
    </div>
</div>
