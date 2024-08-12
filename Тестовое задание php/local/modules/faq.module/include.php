<?php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('faq.module', [
	'Faq\FaqTable' => 'lib/FaqTable.php',
]);
