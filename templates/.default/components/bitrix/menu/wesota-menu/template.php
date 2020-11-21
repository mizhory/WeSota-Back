<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<ul class="nav nav-tabs d-flex flex-column">
    <?foreach($arResult as $k=>$arItem):?>
	<?list($none, $name) = explode("#", $arItem['LINK']);?>
    <li class="nav-item my-1 d-xl-none d-block w-100">
        <a class="<?=$name?>-link nav-link text-white text-xl-left pl-0 pl-xl-4 text-center" data-toggle="tab" href="<?print($arItem['LINK'])?>">
            <img src="<?=SITE_TEMPLATE_PATH.DIRECTORY_SEPARATOR?>icons/menu-white/<?=$name?>.png" alt="icon: <?=$name?>" class="menu-icon <?=$name?> <?=$name?>-icon mr-xl-1 mr-1">
            <span class="position-relative h-xl-6 font-weight-lighter d-block d-xl-inline"><?print($arItem['TEXT'])?></span>
        </a>
    </li>
    <?endforeach;?>
</ul>