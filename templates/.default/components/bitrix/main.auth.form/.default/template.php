<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
if(empty($arResult)) die();


if ($arResult['ERRORS']):?>
    <div class="alert alert-danger">
        <? foreach ($arResult['ERRORS'] as $error)
        {
            echo $error;
        }
        ?>
    </div>
<?endif;?>
<div class="row login-form text-white d-flex flex-column align-items-center login-bg vh-95 pt-5">
    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Wesota logo">
    <p class="text-wrap text-center mt-2" style="width: 12rem;">Добро пожаловать  в международный проект  WESOTA</p>
    <p class="text-center small d-none" style="width: 12rem;">Вход не выполнен. Проверьте правильность введенных данных.</p>
    <form name="<?= $arResult['FORM_ID'];?>" class="d-flex flex-column align-items-stretch" action="#" enctype="application/x-www-form-urlencoded" method="POST">
        <input type="hidden" name="<?= $arResult['FIELDS']['remember'];?>" value="Y" />
        <div class="form-group">
            <label for="loginForm_loginInput">Логин</label>
            <input type="text" name="<?= $arResult['FIELDS']['login'];?>" class="form-control text-center" id="loginForm_loginInput">
        </div>
        <div class="form-group">
            <label for="loginForm_passwordInput">Пароль</label>
            <input type="password" name="<?= $arResult['FIELDS']['password'];?>" class="form-control text-center" id="loginForm_passwordInput">
        </div>
        <div class="form-group">
            <label for="loginForm_faSelect">Выберите 2FA</label>
            <select class="form-control" id="loginForm_faSelect">
                <option value="Telegram" selected>Telegram</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group d-none flex-column align-items-center">
            <input type="text" class="form-control text-center" id="faCode">
            <button type="submit" class="btn btn-light border shadow-sm">Подтвердить</button>
        </div>
        <button type="submit" name="<?= $arResult['FIELDS']['action'];?>" class="btn align-self-center btn-light border shadow-sm">Вход</button>
    </form>
</div>
</div>