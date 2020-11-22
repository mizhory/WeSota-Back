<? if(!$ASSETS || !isset($ASSETS)) $ASSETS = $GLOBALS['ASSETS']?$GLOBALS['ASSETS']:Bitrix\Main\Page\Asset::getInstance();
/**
 * used
$ASSETS->addCss('PATH TO CSS FILE');
 */

$ASSETS->addCss("https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css");
$ASSETS->addCss("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");
$ASSETS->addCss(SITE_TEMPLATE_PATH . "/css/style.css");