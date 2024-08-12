<?php

use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;
use \Bitrix\Iblock;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class FaqListComponent extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{
		$result = [
			"ITEMS_PER_PAGE" => intval($arParams["ITEMS_PER_PAGE"]) > 0 ? intval($arParams["ITEMS_PER_PAGE"]) : 10,
			"IBLOCK_ID" => intval($arParams["IBLOCK_ID"]), // ID инфоблока
		];

		return $result;
	}

	public function executeComponent()
	{
		if (!Loader::includeModule('iblock')) {
			ShowError('Модуль Инфоблоков не установлен');
			return;
		}

		$request = Application::getInstance()->getContext()->getRequest();
		$page = $request->getQuery("page") ?: 1;

		$params = $this->arParams;

		// Получаем элементы инфоблока
		$res = \CIBlockElement::GetList(
			['DATE_ACTIVE_FROM' => 'DESC'],
			['IBLOCK_ID' => $params['IBLOCK_ID'], 'ACTIVE' => 'Y'],
			false,
			['nPageSize' => $params['ITEMS_PER_PAGE'], 'iNumPage' => $page],
			['ID', 'NAME', 'PROPERTY_QUESTION', 'PROPERTY_ANSWER', 'PROPERTY_CATEGORY']
		);

		$faqList = [];
		while ($item = $res->Fetch()) {
			$faqList[] = [
				'ID' => $item['ID'],
				'QUESTION' => $item['PROPERTY_QUESTION_VALUE'],
				'ANSWER' => $item['PROPERTY_ANSWER_VALUE'],
				'CATEGORY' => $item['PROPERTY_CATEGORY_VALUE'],
			];
		}

		$this->arResult['FAQ'] = $faqList;

		$this->includeComponentTemplate();
	}
}
?>
