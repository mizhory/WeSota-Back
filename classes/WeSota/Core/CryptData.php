<?php
namespace InformUnity\Core;

use Bitrix\Main\Application;

Class CryptData {
    private static $key = "unOAIUsf929rh1-()*qr8qh8w98fnAvbjbzxvq9r-hw08fgb8UIOU*QU8ghap8ubaiv8&VQb938qb9abvABOIVQ8qb-(H_(-(QrbAPVU IZV9ZIUPIXVBAISUFBSVJKNK";
    // Encrypt Function
    static function cc_encrypt($encrypt) {
        // init var encrypting
        $key = md5(self::$key);
        $var = base64_encode($encrypt);
        $rest = substr($var, 0, 10);
        $l = strlen($rest);
        $rests = substr($var, $l);

        $enc = $rest
            .$key
            .$rests;

        $enc = base64_encode($enc);

        return $enc;
    }

    // Decrypt Function
    static function cc_decrypt($decrypt) {
        $enc = base64_decode($decrypt);
        $key = md5(self::$key);
        $e = explode($key, $enc);

        $enc = $e[0]
            .$e[1];

        $enc = base64_decode($enc);
        return $enc;
    }
}
