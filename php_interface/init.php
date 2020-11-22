<?php

define('LOCAL_DIR', $_SERVER['DOCUMENT_ROOT'] . '/local/');
define('CONFIG_DIR', LOCAL_DIR . 'config/');
define('PHP_INTERFACE_DIR', LOCAL_DIR . 'php_interface/');
define('ASSETS_DIR',PHP_INTERFACE_DIR . 'assets_handler/');



require_once PHP_INTERFACE_DIR . 'autoload.php';
require_once CONFIG_DIR . 'main.php';
require_once ASSETS_DIR . 'loader.php';

$wesotaCore = WeSota\Core\Main::getInstance();
$wesotaCore->init();

$GLOBALS['WESOTACORE'] = $wesotaCore;

define('CURR_PAGE', $wesotaCore->GetApplication()->getCurPage(false));
WeSota\Handlers\EventHandler::init();