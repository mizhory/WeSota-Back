<?php
use Bitrix\Main\Page\Asset;

$GLOBALS['ASSETS'] = $ASSETS = Asset::getInstance();

require_once './js.php';
require_once './css.php';

if(file_exists($etc = 'other.php')) {
    require_once $etc;
}