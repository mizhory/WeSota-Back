<?php
namespace WeSota\Helpers;
use WeSota\Entity\PayeerTable;
Class AccountHelper {
    private static $USER, $APPLICATION;

    public static function checkAccess($uid = null) {
        self::init();
        
        if(!self::$APPLICATION || !self::$USER)
            return false;
        
        if(!self::$USER->isAuthorized())
            return false;
        
        self::checkPayeer();
    }
    private static function init() {
        self::$APPLICATION = $GLOBALS['WESOTACORE']->getApplication();
        self::$USER = $GLOBALS['WESOTACORE']->getUser();
        
    }
    public static function checkPayeer($uid = null) {
        
    }
}