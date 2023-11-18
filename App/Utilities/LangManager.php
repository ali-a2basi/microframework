<?php

namespace App\Utilities;


class LangManager{

    protected $faNumbers = ['۰', '١', '۲'. '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    protected $enNumber = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    public function __construct($faNumbers, $enNumber)
    {

        $this->faNumbers = $faNumbers;
        $this->enNumber = $enNumber;

    }


    public static function persian_numbers($input)
    {
        $faNumbers = ['۰', '١', '۲'. '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $enNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($enNumbers, $faNumbers, $input);
        
    }


    public static function latin_numbers($input)
    {
        $faNumbers = ['۰', '١', '۲'. '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $enNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($faNumbers, $enNumbers, $input);
    }
}