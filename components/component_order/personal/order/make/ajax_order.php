<?php
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Sale;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
Loader::includeModule("sale");

$request = Context::getCurrent()->getRequest();
$action = $request->getPost("action");
$response = [];

switch ($action) {
	case 'apply':
		// Получаем купон из POST-параметра (сначала пытаемся получить 'coupon', затем 'COUPON')
		$coupon = trim($request->getPost("coupon") ?: $request->getPost("COUPON"));

		// Если купон не передан, возвращаем ошибку
		if (empty($coupon)) {
			$response = [
				"success" => false,
				"message" => "Промокод не передан"
			];
			echo json_encode($response);
			exit;
		}

		// Добавляем купон в систему скидок
		\Bitrix\Sale\DiscountCouponsManager::add($coupon);
		$errors = \Bitrix\Sale\DiscountCouponsManager::getErrors();
		if (!empty($errors)) {
			// Если возникли ошибки при добавлении купона, объединяем их и возвращаем ответ с ошибкой
			$errorMsg = implode('; ', $errors);
			$response = [
				"success" => false,
				"message" => $errorMsg
			];
			echo json_encode($response);
			exit;
		}

		// Загружаем корзину текущего пользователя
		$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), SITE_ID);
		if ($basket->isEmpty()) {
			$response = [
				"success" => false,
				"message" => "Корзина пуста"
			];
			echo json_encode($response);
			exit;
		}

		// Создаем объект заказа и устанавливаем для него корзину
		$order = Sale\Order::create(SITE_ID, Sale\Fuser::getId());
		$order->setBasket($basket);

		// Получаем объект скидок для заказа и выполняем расчет скидок
		$discounts = $order->getDiscount();
		$discounts->calculate();

		// Получаем итоговую сумму заказа с учетом примененных скидок
		$newTotalPrice = $order->getPrice();

		// Возвращаем успешный JSON-ответ с сообщением и новой суммой заказа
		$response = [
			"success" => true,
			"message" => "Промокод применён успешно",
			"new_total_price" => $newTotalPrice
		];
		echo json_encode($response);
		exit;

	case 'delete':
		$coupon = trim($request->getPost("COUPON"));
		if ($coupon !== '') {
			\Bitrix\Sale\DiscountCouponsManager::delete($coupon);
			$errors = \Bitrix\Sale\DiscountCouponsManager::getErrors();
			if (empty($errors)) {
				$response = [
					"success" => true,
					"message" => "Промокод удалён успешно"
				];
			} else {
				$response = [
					"success" => false,
					"message" => implode('; ', $errors)
				];
			}
		} else {
			$response = [
				"success" => false,
				"message" => "Промокод не указан"
			];
		}
		// Пересчитываем корзину после удаления купона
		$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), SITE_ID);
		if (!$basket->isEmpty()) {
			$basket->refreshData(['PRICE', 'DISCOUNT_PRICE', 'DISCOUNT']);
			$basket->save();
			CSaleBasket::UpdateBasketPrices(CSaleBasket::GetBasketUserID(), SITE_ID);
		}
		$order = Sale\Order::create(SITE_ID, Sale\Fuser::getId());
		$order->setBasket($basket);
		$discounts = $order->getDiscount();
		$discounts->calculate();
		$newTotalPrice = $order->getPrice();
		$response["new_total_price"] = $newTotalPrice;
		break;
	case 'list':
		$coupons = \Bitrix\Sale\DiscountCouponsManager::get();
		$response = [
			"success" => true,
			"coupons" => array_values($coupons)
		];
		break;
	default:
		$response = [
			"success" => false,
			"message" => "Неизвестное действие"
		];
		break;
}

echo json_encode($response);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
