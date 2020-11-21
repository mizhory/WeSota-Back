<?php
namespace WeSota\Core;

use WeSota\Payeer\CPayeer,
    WeSota\Helpers\TplHelper,
    Bitrix\Main\Application as BApp;

final class Main {
    public
        $USER,
        $APPLICATION;
    private static $instance = null;
    /*private static $singleton = false;

    public static function init(){
        global $USER, $APPLICATION;
        if(!$USER) $USER = $GLOBALS['USER'];
        if(!$APPLICATION) $APPLICATION = Application::getInstance();

        $singleton = new self();
        $singleton->APPLICATION = $APPLICATION;
        $singleton->USER = $USER;
        self::$singleton = $singleton;

        if(!TplHelper::checkTpl())
            self::$singleton->APPLICATION->ThrowException('Шаблон не найден!');

        return $singleton;
    }
    public function __call($name, $arguments)
    {
        if(!self::$singleton) return false;
        else
            self::$singleton->$name($$arguments);
        // TODO: Implement __call() method.
    }*/
    public function getApplication() {
        if(!is_object($this->APPLICATION))
            return false;
        
        return $this->APPLICATION;
    }
    public function getUser() {
        if(!is_object($this->USER))
            return false;

        return $this->USER;
    }
    public function init() {
        $this->APPLICATION = !$GLOBALS['APPLICATION']?BApp::getInstance():$GLOBALS['APPLICATION'];
        $this->USER = $GLOBALS['USER'];
        //if(!TplHelper::checkTpl())
        //    self::$instance->APPLICATION->ThrowException('Шаблон не найден!');
    }
    public static function getInstance()
    {
        //
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}