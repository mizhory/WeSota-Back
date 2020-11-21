<?php
namespace WeSota\UserFields;


class CryptFields extends \CUserTypeString
{
    const USER_TYPE_ID = "iu_cryptstring";

    function GetUserTypeDescription()
    {
        return array(
            "USER_TYPE_ID" => static::USER_TYPE_ID,
            "CLASS_NAME" => __CLASS__,
            "DESCRIPTION" => 'Шифрованные данные',
            "BASE_TYPE" => \CUserTypeManager::BASE_TYPE_STRING,
        );
    }

}