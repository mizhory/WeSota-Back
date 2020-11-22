<? if(!$ASSETS || !isset($ASSETS)) $ASSETS = $GLOBALS['ASSETS']?$GLOBALS['ASSETS']:Bitrix\Main\Page\Asset::getInstance();
/**
 * used
$ASSETS->addJs('PATH TO JS FILE');
 */


$ASSETS->addJs('https://code.jquery.com/jquery-3.5.1.slim.min.js');
$ASSETS->addJs("https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js");
$ASSETS->addJs("https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js");
$ASSETS->addJs(SITE_TEMPLATE_PATH . "/js/jquery.mask.min.js");
$ASSETS->addJs(SITE_TEMPLATE_PATH . "/js/progress.js");
$ASSETS->addJs(SITE_TEMPLATE_PATH . "/js/modals.js");
$ASSETS->addJs(SITE_TEMPLATE_PATH . "/js/main.js");