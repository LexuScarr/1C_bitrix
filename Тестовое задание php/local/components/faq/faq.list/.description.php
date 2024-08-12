<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
	"NAME" => Loc::getMessage("FAQ_COMPONENT_NAME"),
	"DESCRIPTION" => Loc::getMessage("FAQ_COMPONENT_DESCRIPTION"),
	"COMPLEX" => "N",
	"PATH" => [
		"ID" => "content",
		"CHILD" => [
			"ID" => "faq",
			"NAME" => Loc::getMessage("FAQ_COMPONENT_CATEGORY")
		]
	],
];
