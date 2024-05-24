<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");

use Bitrix\Main\Loader;
use Bitrix\Main\Page\Asset;

//Asset::getInstance()->addCss('/test2/workapp.css');
//Asset::getInstance()->addCss('/test2/shop-item.css');
//Asset::getInstance()->addCss('/test2/aditional-service.css');
//Asset::getInstance()->addCss('/test2/style.css');
//Asset::getInstance()->addJs('/test2/vendor/select2/dist/js/select2.min.js');
//Asset::getInstance()->addJs('/local/templates/it_jet_pro/js/personal_profile.js');

?>


<section class="rf-section rf-section_xl  mt-5">
    <div class="container">
        <div class="rf-section__head">
            <h1 class="rf-title rf-title-lg">Мой кабинет</h1>
        </div>
        <div class="wa-tablist wa-tablist_personal" data-tabpanel="123">
            <div class="row">
                <div class="col-12 col-lg-3">
		            <? $APPLICATION->IncludeComponent(
			            "bitrix:menu",
			            "personal-menu1",
			            array(
				            "ALLOW_MULTI_SELECT" => "N",
				            "CHILD_MENU_TYPE" => "left",
				            "DELAY" => "N",
				            "MAX_LEVEL" => "1",
				            "MENU_CACHE_GET_VARS" => array(""),
				            "MENU_CACHE_TIME" => "3600",
				            "MENU_CACHE_TYPE" => "N",
				            "MENU_CACHE_USE_GROUPS" => "Y",
				            "ROOT_MENU_TYPE" => "personal_left",
				            "USE_EXT" => "Y"
			            )
		            ); ?>
                </div>
                <div class="col-12 col-lg-9">
					<? $APPLICATION->IncludeComponent(
						"bitrix:sale.personal.profile",
						"",
						array()
					); ?>

                </div>

            </div>
        </div>
    </div>
</section>
