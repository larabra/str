<?php

use Illuminate\Support\Str;
use Larabra\Metaphone\PortugueseMetaphone;

if(!function_exists('str_sanitize_name')){
    /**
     * Sanitize names removing diacritics, changing to uppercase and removing duplicate blank spaces
     *
     * @param string $string
     * @return string 
     */ 
    function str_sanitize_name($string){
        // Remove Diacritics (non ASCII characters)
        $string = Str::ascii($string);

        // To Uppercase
        $string = Str::upper($string);

        // Remove double spaces
        return preg_replace('/\s+/', ' ', trim($string));
    }
}

if(!function_exists('str_sanitize_number')){
    /**
     * Sanitize numbers removing non-numeric characters
     *
     * @param string $string
     * @return string 
     */ 
    function str_sanitize_number($string){
        return preg_replace('/\D/', '', $string);
    }
}

if(!function_exists('str_metaphone')){
    /**
     * Metaphone
     *
     * @param string $string
     * @return string 
     */ 
    function str_metaphone($string){
        return PortugueseMetaphone::getPhraseMetaphone(str_sanitize_name($string));
    }
}