<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<ul class="nav nav-tabs d-flex flex-column">
    <?foreach($arResult as $k=>$arItem):?>
    <li class="nav-item my-1 d-xl-none d-block w-100">
        <a class="profile-link nav-link text-white text-xl-left pl-0 pl-xl-4 text-center" data-toggle="tab" href="<?print($arItem['LINK'])?>">
            <!-- <img src="icons/menu-white/profile.png" alt="icon: profile" class="menu-icon profile mr-1"> -->
            <span class="position-relative h-xl-6 font-weight-lighter d-block d-xl-inline"><?print($arItem['TEXT'])?></span>
        </a>
    </li>
    <?endforeach;?>
</ul>