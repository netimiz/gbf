<?php
//url leri seo haline getirme
function seoUrl($string, $wordLimit = 0){
    $separator = '-';

    if($wordLimit != 0){
        $wordArr = explode(' ', $string);
        $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
    }

    $quoteSeparator = preg_quote($separator, '#');

    $trans = array(
        '&.+?;'       => '',
        '[^\w\d _-]'  => '',
        'ş'  => 's',
        'Ş'  => 's',
        'I'  => 'i',
        'ı'  => 'i',
        'İ'  => 'i',
        'ğ'  => 'g',
        'Ğ'  => '',
        'Ü'  => 'u',
        'ü'  => 'u',
        'ö'  => 'o',
        'Ö'  => 'o',
        'Ç'  => 'c',
        'ç'  => 'c',
        '\s+'         => $separator,
        '('.$quoteSeparator.')+'=> $separator
    );

    $string = strip_tags($string);
    foreach ($trans as $key => $val){
        $string = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $string);
    }

    $string = strtolower($string);

    return trim(trim($string, $separator));
}
