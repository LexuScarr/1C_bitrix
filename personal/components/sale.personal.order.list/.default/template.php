<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

/** @var CBitrixPersonalOrderListComponent $component */
/** @var array $arParams */

/** @var array $arResult */

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

\Bitrix\Main\UI\Extension::load([
	'ui.design-tokens',
	'ui.fonts.opensans',
	'clipboard',
	'fx',
]);

Asset::getInstance()->addJs("/bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js");
Asset::getInstance()->addCss("/bitrix/components/bitrix/sale.order.payment.change/templates/.default/style.css");
$this->addExternalCss("/bitrix/css/main/bootstrap.css");

Loc::loadMessages(__FILE__);

if (!empty($arResult['ERRORS']['FATAL'])) {
	foreach ($arResult['ERRORS']['FATAL'] as $error) {
		ShowError($error);
	}
	$component = $this->__component;
	if ($arParams['AUTH_FORM_IN_TEMPLATE'] && isset($arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED])) {
		$APPLICATION->AuthForm('', false, false, 'N', false);
	}

} else {
	$filterHistory = ($_REQUEST['filter_history'] ?? '');
	$filterShowCanceled = ($_REQUEST["show_canceled"] ?? '');

	if (!empty($arResult['ERRORS']['NONFATAL'])) {
		foreach ($arResult['ERRORS']['NONFATAL'] as $error) {
			ShowError($error);
		}
	}
	if (empty($arResult['ORDERS'])) {
		if ($filterHistory === 'Y') {
			if ($filterShowCanceled === 'Y') {
				?>
                <h3><?= Loc::getMessage('SPOL_TPL_EMPTY_CANCELED_ORDER') ?></h3>
				<?
			} else {
				?>
                <h3><?= Loc::getMessage('SPOL_TPL_EMPTY_HISTORY_ORDER_LIST') ?></h3>
				<?
			}
		} else {
			?>
            <h3><?= Loc::getMessage('SPOL_TPL_EMPTY_ORDER_LIST') ?></h3>
			<?
		}
	}
	?>
    <h2>Мои заказы</h2>
    <div class="wa-order-card-list">

		<?php
		$orderHeaderStatus = null;
		foreach ($arResult['ORDERS'] as $key => $order) {
			if ($orderHeaderStatus !== $order['ORDER']['STATUS_ID'] && $arResult['SORT_TYPE'] == 'STATUS') {
				$orderHeaderStatus = $order['ORDER']['STATUS_ID'];
				?>
                <h1 class="sale-order-title">
					<?= Loc::getMessage('SPOL_TPL_ORDER_IN_STATUSES') ?>
                    &laquo;<?= htmlspecialcharsbx($arResult['INFO']['STATUS'][$orderHeaderStatus]['NAME']) ?>&raquo;
                </h1>
				<?php
			}
			?>

            <div class="wa-order-card-list__item">
                <div class="wa-order-card ">
                    <div class="wa-order-card__body">
                        <div class="wa-order-card__section wa-order-card__header" data-dropdown="toggler">
                            <svg class="wa-order-card__icon svg-ico svg-ico_no-fill" viewBox="0 0 18 11"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="m1 1 7.813 7.5L16.625 1"></path>
                            </svg>
                            <div class="wa-order-card__title">Заказ
                                №<?= htmlspecialcharsbx($order['ORDER']['ID']) ?></div>
                            <div class="wa-order-card__date">
                                от <?= htmlspecialcharsbx($order['ORDER']['DATE_INSERT']->format('d.m.y')) ?></div>
                        </div>
                        <div data-dropdown="content">
                            <div class="wa-order-card__section">
                                <div class="wa-order-card__status">
                                    Статус заказа: <br>
                                    <span class="wa-order-card__text-paid"><?= htmlspecialcharsbx($arResult['INFO']['STATUS'][$order['ORDER']['STATUS_ID']]['NAME']) ?></span>
                                </div>
                            </div>
                            <div class="wa-order-card__section">
								<?php foreach ($order['BASKET_ITEMS'] as $BASKET_ITEM): ?>

                                    <div class="wa-order-card__product">
                                        <div class="row">
                                            <div class="col-12 col-sm-8">
                                                <div class="wa-order-card__text-primary">
													<?= $BASKET_ITEM['NAME'] ?>
                                                </div>
                                                <div class="wa-order-card__text-secondary">
													<?php if (!empty($BASKET_ITEM['PROPERTIES']['VERSION'])): ?>
														<?= $BASKET_ITEM['PROPERTIES']['VERSION'] ?> <br>
													<?php endif; ?>
													<?php if (!empty($BASKET_ITEM['PROPERTIES']['PERIOD'])): ?>
														<?= $BASKET_ITEM['PROPERTIES']['PERIOD'] ?> <br>
													<?php endif; ?>
													<?php if (!empty($BASKET_ITEM['PROPERTIES']['USERS'])): ?>
														<?= $BASKET_ITEM['PROPERTIES']['USERS'] ?>
													<?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 text-sm-right">
                                                <div class="wa-order-card__price wa-order-card__text-primary">
                                                    <div class="wa-order-card__old-price">
														<?= number_format($BASKET_ITEM['BASE_PRICE'], 2, ',', ' ') ?>
                                                        руб.
                                                    </div>
													<?= number_format($BASKET_ITEM['PRICE'], 2, ',', ' ') ?> ₽
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								<?php endforeach; ?>
                                <div class="row wa-order-total-list__item">
                                    <div class="col-auto col-sm-8">
                                        <div class="wa-order-card__text-primary">
                                            Стоимость товаров
                                        </div>
                                    </div>
                                    <div class="col-auto col-sm-4 text-right">
                                        <div class="wa-order-card__text-primary">
											<?= SaleFormatCurrency($order['ORDER']['PRICE'], $order['ORDER']['CURRENCY']) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row wa-order-total-list__item">
                                    <div class="col-auto col-sm-8">
                                        <div class="wa-order-card__text-primary">Сумма
                                            скидки
                                        </div>
                                    </div>
                                    <div class="col-auto col-sm-4 text-right">
                                        <div class="wa-order-card__text-primary">
											<?= SaleFormatCurrency($order['ORDER']['DISCOUNT_VALUE'], $order['ORDER']['CURRENCY']) ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="wa-order-card__total row p-0">
                                    <div class="col-auto col-lg-8">
                                        Итого
                                    </div>
                                    <div class="col-auto col-lg-4 text-right">
										<?php
										$totalPrice = $order['ORDER']['PRICE'] - $order['ORDER']['DISCOUNT_VALUE'];
										?>
                                        <div class="wa-order-card__total-price">
											<?= SaleFormatCurrency($totalPrice, $order['ORDER']['CURRENCY']) ?>
                                        </div>
                                        <a href="#" class="wa-order-card__link wa-order-card__text-accent">
                                            Электронный чек
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Вывод информации о компании или покупателе -->
                            <div class="wa-order-card__section">
                                <div class="wa-order-company-list">
                                    <div class="wa-order-card-list">
										<?php foreach ($order['COMPANY_INFO'] as $item): ?>
                                            <div class="wa-order-company-list__item">
                                                <div class="wa-order-company-item">
                                                    <div class="wa-order-company-item__title">
														<?php
														echo htmlspecialcharsbx($item["NAME"]);
														?>
                                                    </div>
                                                    <!--<div class="wa-order-company-item__accent">
                                                        Регистрационный номер:
                                                    </div>-->
                                                    <div class="wa-order-company-item__text">
														<?php
														if (isset($item['ORDER_PROPERTIES']['F_INN'])) {
															echo "ИНН: " . htmlspecialcharsbx($item['ORDER_PROPERTIES']['F_INN']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['INN'])) {
															echo "ИНН: " . htmlspecialcharsbx($item['ORDER_PROPERTIES']['INN']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['CONTACT_PERSON'])) {
															echo htmlspecialcharsbx($item['ORDER_PROPERTIES']['CONTACT_PERSON']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['F_COMPANY_NAME'])) {
															echo htmlspecialcharsbx($item['ORDER_PROPERTIES']['F_COMPANY_NAME']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['F_ADDRESS_FULL'])) {
															echo htmlspecialcharsbx($item['ORDER_PROPERTIES']['F_ADDRESS_FULL']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['ADDRESS'])) {
															echo htmlspecialcharsbx($item['ORDER_PROPERTIES']['ADDRESS']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['INDEX'])) {
															echo htmlspecialcharsbx($item['ORDER_PROPERTIES']['INDEX']) . "<br>";
														}
														if (isset($item['ORDER_PROPERTIES']['F_KPP'])) {
															echo htmlspecialcharsbx($item['ORDER_PROPERTIES']['F_KPP']) . "<br>";
														}
														?>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<?php
		}
		?>
    </div>


    <div class="clearfix"></div>
	<?
	echo $arResult["NAV_STRING"];

	if ($filterHistory !== 'Y') {
		$javascriptParams = array(
			"url" => CUtil::JSEscape($this->__component->GetPath() . '/ajax.php'),
			"templateFolder" => CUtil::JSEscape($templateFolder),
			"templateName" => $this->__component->GetTemplateName(),
			"paymentList" => $paymentChangeData,
			"returnUrl" => CUtil::JSEscape($arResult["RETURN_URL"]),
		);
		$javascriptParams = CUtil::PhpToJSObject($javascriptParams);
		?>
        <script>
            BX.Sale.PersonalOrderComponent.PersonalOrderList.init(<?=$javascriptParams?>);
        </script>
		<?
	}
}
