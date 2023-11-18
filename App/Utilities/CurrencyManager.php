<?php
namespace App\Utilities;


class CurrencyManager {


    public static function priceInRial($amount): int
    {
        return $amount * 10;
        
    }

    public static function priceInHezarToman($amount): int
    {
        return $amount / 1000;
        
    }

    public static function priceInToman($amount): int
    {
        return $amount;
        
    }
}