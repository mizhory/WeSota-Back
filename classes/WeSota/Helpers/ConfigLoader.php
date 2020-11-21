<?php
namespace WeSota\Helpers;

Class ConfigLoader {
    public static function getLocalConfig($name = false) {
        if(!$name) return;

        require_once CONFIG_DIR . $name . '.config.php';
    }
}