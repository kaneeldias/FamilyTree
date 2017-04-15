<?php

class Validators{

    public static function isEmpty($s){
        $string = str_replace(" ", "", $s);
        return $string == "";
    }

    public static function isAlpha($s){
        return preg_match('/^[a-zA-Z]+$/', $s);
    }

    public static function validGender($g){
        return ($g == "M" || $g == "F");
    }

}