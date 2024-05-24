<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");

use Bitrix\Main\Loader;
use Bitrix\Main\Page\Asset;

//Asset::getInstance()->addCss('/test2/workapp.css');
//Asset::getInstance()->addCss('/test2/style.css');

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
						"bitrix:main.profile",
						"jet_profile_new",
						array(
							"CHECK_RIGHTS" => "N",
							"SEND_INFO" => "N",
							"SET_TITLE" => "Y",
							"USER_PROPERTY" => "",
							"USER_PROPERTY_NAME" => ""
						)
					); ?>
                </div>
            </div>
        </div>
    </div>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>