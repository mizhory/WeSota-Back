<?php
namespace WeSota\Handlers;

use InformUnity\Core\CryptData;
Class EventHandler {
    public static function init() {
        AddEventHandler("main",
            "OnUserTypeBuildList",
            [
                'WeSota\UserFields\CryptFields',
                'GetUserTypeDescription'
            ]
        );
    }
}
