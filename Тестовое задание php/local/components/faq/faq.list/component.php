<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Faq\FaqTable;

class FaqListComponent extends CBitrixComponent
{
	public function executeComponent()
	{
		if (!Loader::includeModule('faq.module')) {
			return;
		}

		$result = FaqTable::getList([
			'select' => ['ID', 'QUESTION', 'ANSWER', 'DATE_CREATE'],
			'order' => ['DATE_CREATE' => 'DESC']
		]);

		$this->arResult['ITEMS'] = $result->fetchAll();
		$this->includeComponentTemplate();
	}
}

