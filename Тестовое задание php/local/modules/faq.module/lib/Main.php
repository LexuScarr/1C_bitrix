<?php

namespace Faq;

use Bitrix\Main\Config\Option;
use Bitrix\Main\Page\Asset;

class Main
{
	public function appendScriptsToPage()
	{
		// Проверяем, что мы не в административной части сайта
		if (!defined("ADMIN_SECTION") && ADMIN_SECTION !== true) {

			// Получаем ID модуля
			$module_id = pathinfo(dirname(__DIR__))["basename"];

			// Добавляем настройки в виде JSON в HEAD страницы
			Asset::getInstance()->addString(
				"<script id=\"" . str_replace(".", "_", $module_id) . "-params\" data-params='" . json_encode(
					array(
						"switch_on" => Option::get($module_id, "switch_on", "Y"),
						"width" => Option::get($module_id, "width", "50"),
						"height" => Option::get($module_id, "height", "50"),
						"radius" => Option::get($module_id, "radius", "50"),
						"color" => Option::get($module_id, "color", "#bf3030"),
						"side" => Option::get($module_id, "side", "left"),
						"indent_bottom" => Option::get($module_id, "indent_bottom", "10"),
						"indent_side" => Option::get($module_id, "indent_side", "10"),
						"speed" => Option::get($module_id, "speed", "normal")
					)
				) . "'></script>",
				true
			);

			Asset::getInstance()->addJs("/local/modules/faq.module/install/assets/js/script.min.js");
			Asset::getInstance()->addCss("/local/modules/faq.module/install/assets/css/style.min.css");

		}

		return false;
	}

}
?>
