<?php
use Bitrix\Main\Loader;
use Bitrix\Sale;
use Bitrix\Sale\Order;
use Bitrix\Iblock;

Loader::includeModule('sale');
Loader::includeModule('iblock');

foreach ($arResult['ORDERS'] as $key => $orderData) {
	$order = Order::load($orderData['ORDER']['ID']);
	$basket = $order->getBasket();
	$propertyCollection = $order->getPropertyCollection();

	$arResult['ORDERS'][$key]['COMPANY_INFO'] = [];
	$arResult['ORDERS'][$key]['BASKET_ITEMS'] = [];

	foreach ($basket as $basketItem) {
		// Свойства товара
		$productProperties = [];
		$productResult = CIBlockElement::GetByID($basketItem->getProductId());
		if ($product = $productResult->GetNextElement()) {
			$props = $product->GetProperties();
			$productProperties = [
				'VERSION' => $props['CML_VERSION']['VALUE'] ?? $props['VERSION']['VALUE'],
				'PERIOD' => $props['CML_PERIOD']['VALUE'] ?? $props['PERIOD']['VALUE'],
				'USERS' => $props['CML_USERS']['VALUE'] ?? $props['USERS']['VALUE']
			];
		}

		// Добавление товаров в массив
		$arResult['ORDERS'][$key]['BASKET_ITEMS'][] = [
			'PRODUCT_ID' => $basketItem->getProductId(),
			'NAME' => $basketItem->getField('NAME'),
			'QUANTITY' => $basketItem->getQuantity(),
			'PRICE' => $basketItem->getPrice(),
			'BASE_PRICE' => $basketItem->getBasePrice(),
			'PROPERTIES' => $productProperties
		];

		// Свойства заказа
		$itemProps = $basketItem->getPropertyCollection()->getPropertyValues();
		$orderProps = [];
		foreach ($propertyCollection as $property) {
			if (!empty($property->getValue())) {
				$orderProps[$property->getField('CODE')] = $property->getValue();
			}
		}

		// Добавление информации о компании в массив
		$arResult['ORDERS'][$key]['COMPANY_INFO'][] = [
			'NAME' => $basketItem->getField('NAME'),
			'PROPERTIES' => $itemProps,
			'ORDER_PROPERTIES' => $orderProps
		];
	}
}
