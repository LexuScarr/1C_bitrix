<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");

use Bitrix\Main\Loader;
use Bitrix\Main\Page\Asset;

//Asset::getInstance()->addCss('/test2/workapp.css');
//Asset::getInstance()->addCss('/test2/shop-item.css');
//Asset::getInstance()->addCss('/test2/aditional-service.css');
//Asset::getInstance()->addCss('/test2/style.css');
//Asset::getInstance()->addJs('/test2/vendor/select2/dist/js/select2.min.js');
//Asset::getInstance()->addJs('/test2/script.js');

?>

    <section class="user_profile">
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
							"bitrix:sale.personal.order",
							"personal_ord",
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ALLOW_INNER" => "N",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "3600",
								"CACHE_TYPE" => "A",
								"CUSTOM_SELECT_PROPS" => array(""),
								"DETAIL_HIDE_USER_INFO" => array("0"),
								"DISALLOW_CANCEL" => "N",
								"HISTORIC_STATUSES" => array(""),
								"NAV_TEMPLATE" => "",
								"ONLY_INNER_FULL" => "N",
								"ORDERS_PER_PAGE" => "20",
								"ORDER_DEFAULT_SORT" => "DATE_INSERT",
								"PATH_TO_BASKET" => "/personal/cart",
								"PATH_TO_CATALOG" => "/catalog/",
								"PATH_TO_PAYMENT" => "/personal/order/payment/",
								"PROP_1" => array(),
								"PROP_2" => array(),
								"REFRESH_PRICES" => "N",
								"RESTRICT_CHANGE_PAYSYSTEM" => array("0"),
								"SAVE_IN_SESSION" => "Y",
								"SEF_MODE" => "N",
								"SET_TITLE" => "Y",
								"STATUS_COLOR_DE" => "gray",
								"STATUS_COLOR_F" => "gray",
								"STATUS_COLOR_N" => "green",
								"STATUS_COLOR_PSEUDO_CANCELLED" => "red"
							)
						); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>