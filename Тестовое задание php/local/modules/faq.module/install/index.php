<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Config\Option;
use Bitrix\Main\EventManager;
use Bitrix\Main\Application;
use Bitrix\Main\IO\Directory;

Loc::loadMessages(__FILE__);

if (class_exists('faq_module')) {
	return;
}

class faq_module extends CModule
{
	public $MODULE_ID = 'faq.module';
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;
	public $PARTNER_NAME;
	public $PARTNER_URI;

	public function __construct()
	{
		if (file_exists(__DIR__ . "/version.php")) {
			$arModuleVersion = array();
			include_once(__DIR__ . "/version.php");
			$this->MODULE_ID = str_replace("_", ".", get_class($this));
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
			$this->MODULE_NAME = Loc::getMessage('FAQ_MODULE_NAME');
			$this->MODULE_DESCRIPTION = Loc::getMessage('FAQ_MODULE_DESC');
			$this->PARTNER_NAME = Loc::getMessage('FAQ_MODULE_PARTNER_NAME');
			$this->PARTNER_URI = Loc::getMessage('FAQ_MODULE_PARTNER_URI');
		}

		return false;
	}

	public function DoInstall()
	{
		global $APPLICATION;

		if (CheckVersion(ModuleManager::getVersion("main"), "14.00.00")) {
			$this->InstallFiles();
			$this->InstallDB();
			ModuleManager::registerModule($this->MODULE_ID);
			$this->InstallEvents();

			// Регистрация файла меню
			CopyDirFiles(
				__DIR__ . "/admin",
				$_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin",
				true,
				true
			);

			RegisterModuleDependences(
				"main",
				"OnBuildGlobalMenu",
				$this->MODULE_ID,
				"",
				"",
				100
			);
		} else {
			$APPLICATION->ThrowException(
				Loc::getMessage("FAQ_MODULE_INSTALL_ERROR_VERSION")
			);
		}

		$APPLICATION->IncludeAdminFile(
			Loc::getMessage("FAQ_MODULE_INSTALL_TITLE") . " \"" . Loc::getMessage("FAQ_MODULE_NAME") . "\"",
			__DIR__ . "/step.php"
		);

		return false;
	}

	public function InstallFiles()
	{
		CopyDirFiles(
			__DIR__."/admin",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/admin",
			true,
			true
		);


		return false;
	}

	public function InstallDB()
	{
		$connection = \Bitrix\Main\Application::getConnection();
		$connection->queryExecute(
			"CREATE TABLE IF NOT EXISTS b_faq (
            ID INT AUTO_INCREMENT PRIMARY KEY,
            QUESTION VARCHAR(255) NOT NULL,
            ANSWER TEXT NOT NULL,
            CATEGORY VARCHAR(255),
            DATE_CREATED DATETIME DEFAULT CURRENT_TIMESTAMP
        );"
		);

		return false;
	}


	public function InstallEvents()
	{
		EventManager::getInstance()->registerEventHandler(
			"main",
			"OnBeforeEndBufferContent",
			$this->MODULE_ID,
			"Faq\\Main",
			"appendScriptsToPage"
		);

		return false;
	}

	public function DoUninstall()
	{
		global $APPLICATION;

		$this->UnInstallFiles();
		$this->UnInstallDB();
		$this->UnInstallEvents();
		ModuleManager::unRegisterModule($this->MODULE_ID);

		$APPLICATION->IncludeAdminFile(
			Loc::getMessage("FAQ_MODULE_UNINSTALL_TITLE") . " \"" . Loc::getMessage("FAQ_MODULE_NAME") . "\"",
			__DIR__ . "/unstep.php"
		);

		return false;
	}

	public function UnInstallFiles()
	{

		DeleteDirFiles(
			__DIR__."/admin",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/admin"
		);


		return false;
	}

	public function UnInstallDB()
	{
		$connection = Application::getConnection();
		$connection->queryExecute("DROP TABLE IF EXISTS b_faq");

		Option::delete($this->MODULE_ID);

		return false;
	}


	public function UnInstallEvents()
	{
		EventManager::getInstance()->unRegisterEventHandler(
			"main",
			"OnBeforeEndBufferContent",
			$this->MODULE_ID,
			"Faq\\Main",
			"appendScriptsToPage"
		);

		return false;
	}
}
?>
