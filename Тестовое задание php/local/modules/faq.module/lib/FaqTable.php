<?php

namespace Faq;

use Bitrix\Main\Entity;
use Bitrix\Main\Type;

class FaqTable extends Entity\DataManager
{
	public static function getTableName()
	{
		return 'b_faq';
	}

	public static function getMap()
	{
		return [
			new Entity\IntegerField('ID', [
				'primary' => true,
				'autocomplete' => true,
			]),
			new Entity\StringField('QUESTION', [
				'required' => true,
			]),
			new Entity\TextField('ANSWER', [
				'required' => true,
			]),
			new Entity\StringField('CATEGORY', [
				'required' => false,
			]),
			new Entity\DatetimeField('DATE_CREATED', [
				'default_value' => new Type\DateTime(),
			]),
		];
	}
}
