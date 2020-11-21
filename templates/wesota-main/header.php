<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead()?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?$APPLICATION->ShowTitle()?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>css/style.css"><!---->

    <?#$APPLICATION->SetTemplateCSS('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css')?>
    <?#$APPLICATION->SetTemplateCSS('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap')?>
    <?#$APPLICATION->SetTemplateCSS(SITE_TEMPLATE_PATH . DIRECTORY_SEPARATOR . 'css/style.css')?>


</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="container-fluid">
    <?if(CURR_PAGE != 'login'):?>

    <header class="header sticky-top">
        <div class="row d-flex justify-content-between align-items-center py-2 px-3 wesota-bg">
          <div class="home cursor-pointer">
            <img src="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>icons/home.png" alt="icon: home" height="26px">
          </div>
          <div class="wesota-logo">
            <img src="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>img/logo.png" alt="Wesota logo" width="31px" height="33px">
            <span class="text-white font-weight-lighter h5">WESOTA</span>
          </div>
          <div class="icon-buttons d-flex">
            <div class="notif-btn icon-button mr-4 position-relative cursor-pointer">
              <span class="notification">5</span>
              <img src="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>icons/bell.png" alt="icon: bell" height="26px">
            </div>
            <div class="support-btn icon-button mr-4 cursor-pointer">
              <img src="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>icons/support.png" alt="icon: support" height="26px">
            </div>
            <div class="exit-btn icon-button cursor-pointer">
              <img src="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>icons/exit.png" alt="icon: exit" height="26px">
            </div>
          </div>
        </div>
      </header>
    <!--header-->
    <div class="row">

        <nav class="sidebar col-2 wesota-bg pt-3 d-flex flex-column align-items-stretch justify-content-around position-absolute">
			<div class="user-card d-none d-xl-block">
                <div class="user-info text-white d-flex flex-column align-items-center">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/photo.jpeg" alt="User avatar" class="user-avatar rounded-circle mb-3" width="120px" height="120px">
                    <p class="user-name my-0 h5">Павел</p>
                    <p class="user-surname my-0 h5">Канищев</p>
                    <p class="user-location text-md-center">
                        <span class="user-country">Россия,</span>
                        <span class="user-city">Москва</span>
                        <span class="country-icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/rus.png" alt="icon: country" width="15px" height="15px" class="rounded-circle"></span>
                    </p>
                </div>
                <div class="rewards d-flex justify-content-between mt-3 px-2 py-2 reward-border shadow">
                    <img src="<?=SITE_TEMPLATE_PATH?>/icons/achievement.png" alt="icon: achievement">
                    <img src="<?=SITE_TEMPLATE_PATH?>/icons/achievement.png" alt="icon: achievement">
                    <img src="<?=SITE_TEMPLATE_PATH?>/icons/achievement.png" alt="icon: achievement">
                </div>
</div>
            <!--user card-->
            <div class="sidebar-menu mt-xl-5 mb-5">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"wesota-menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
            </div>
            <!--navigation tabs-->
        </nav>
<?endif;?>
             <main class="col-10 offset-2 mb-5">
          <div class="tab-content">