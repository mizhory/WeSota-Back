<?php
namespace WeSota\Helpers;

Class TplHelper {
    const HEADER_FILE = 'header.php';
    const FOOTER_FILE = 'footer.php';
    private static $index_page = false;
    public static function checkTpl() {
        if(!file_exists(TPL_DIR . self::HEADER_FILE))
            return false;

        if(!file_exists(TPL_DIR . self::FOOTER_FILE))
            return false;

        return true;
    }
    public static function IsIndex($ip = '')
    {
        if($ip != '' && is_bool($ip))
            self::$index_page = $ip;
        
        return self::$index_page;
    }
}