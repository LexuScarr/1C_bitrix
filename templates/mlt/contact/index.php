<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<main>
    <section class="contacts">
        <div class="container">
            <div class="contacts-left">
                <?
                $SUBresultCon = CIBlockElement::GetByID(11); // id элемента
                $ar_res = $SUBresultCon->GetNextElement();
                $arProps = $ar_res->GetProperties();
                ?>
                <div class="contacts-left__title title-text">Контакты</div>
                <div class="contacts-left-container">
                    <div class="contacts-left__info">
                        <div class="contacts-left__info-icon">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/location.svg" alt="">
                        </div>
                        <div class="contacts-left__info-text normal-text"><?= $arProps['ADRESS']['VALUE'] ?></div>
                    </div>
                    <div class="contacts-left__info">
                        <div class="contacts-left__info-icon">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/mail.svg" alt="">
                        </div>
                        <div class="contacts-left__info-text normal-text"><?= $arProps['EMAIL']['VALUE'] ?></div>
                    </div>
                    <div class="contacts-left__info">
                        <div class="contacts-left__info-icon">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/phone-yellow.svg" alt="">
                        </div>
                        <div class="contacts-left__info-text normal-text">+<?= $arProps['phone']['VALUE'] ?></div>
                    </div>
                    <div class="contacts-left__contacts">
                        <a href="<?= $arProps['telegram']['VALUE'] ?>" class="contacts-left__contact">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/telegram.svg" alt="">
                        </a>
                        <a href="<?= $arProps['whatsapp']['VALUE'] ?>" class="contacts-left__contact">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/telephone.svg" alt="">
                        </a>
                    </div>
                    <div class="contacts-left__info-text normal-text"><?= $arProps['INN']['VALUE'] ?></div>
                </div>
                <div class="contacts-left-container">
                    <div class="contacts-left__info-text grey normal-text">Коммерческое подразделение</div>
                    <div class="contacts-left__info">
                        <div class="contacts-left__info-icon">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/phone-yellow.svg" alt="">
                        </div>
                        <div class="contacts-left__info-text normal-text">+<?= $arProps['com_phone']['VALUE'] ?></div>
                    </div>
                    <div class="contacts-left__info">
                        <div class="contacts-left__info-icon">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/mail.svg" alt="">
                        </div>
                        <div class="contacts-left__info-text normal-text"><?= $arProps['com_email']['VALUE'] ?></div>
                    </div>
                    <div class="contacts-left__contacts">
                        <a href="<?= $arProps['com_telegram']['VALUE'] ?>" class="contacts-left__contact">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/telegram.svg" alt="">
                        </a>
                        <a href="<?= $arProps['com_whatsapp']['VALUE'] ?>" class="contacts-left__contact">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/telephone.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="contacts-right">
                <?
                // Разбиваем координаты яндекс карты на X и Y координату
                $Yandex = explode(",", $arProps['MAP']['VALUE']);
                $Yandex_X = $Yandex[0];
                $Yandex_Y = $Yandex[1];
                ?>
                <div id="map_<?= $arProps['MAP']['VALUE'] ?>" class="contacts-right__map"></div>
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script type="text/javascript">
                    ymaps.ready(function() {
                        var myMap = new ymaps.Map('map_<?= $arProps['MAP']['VALUE'] ?>', {
                            center: [<?= $Yandex_X ?>, <?= $Yandex_Y ?>],
                            zoom: 16
                        });

                        myMap.geoObjects.add(new ymaps.Placemark([<?= $Yandex_X ?>, <?= $Yandex_Y ?>], {
                            balloonContent: '<?= $arProps['ADRESS']['VALUE'] ?>'
                        }, {
                            iconLayout: 'default#image',
                            iconImageHref: '<?= SITE_TEMPLATE_PATH ?>/img/icon/location-black.svg',
                            iconImageSize: [32, 32],
                            iconImageOffset: [-16, -32],
                        }));
                    });
                </script>
            </div>
        </div>
    </section>

    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "standard.php",
            "PATH" => SITE_TEMPLATE_PATH . '/includes/order.php'
        )
    ); ?>


</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
