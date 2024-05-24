<?php
if (CModule::IncludeModule("sale")) {
	foreach ($arResult["PROFILES"] as $key => $profile) {
		$db_vals = CSaleOrderUserPropsValue::GetList(
			array("SORT" => "ASC"),
			array("USER_PROPS_ID" => $profile["ID"])
		);
		while ($prop_vals = $db_vals->Fetch()) {
			$arResult["PROFILES"][$key]["PROPERTIES"][$prop_vals["PROP_CODE"]] = $prop_vals;
			// Сохраняем тип лица
			$arResult["PROFILES"][$key]["PERSON_TYPE_ID"] = $prop_vals["PROP_PERSON_TYPE_ID"];
		}
	}
}

?>
