<?php

/**
 * 翻转字符串
 * @param $words
 * @return string
 */
function reverseWords($words)
{
    $length = strlen($words);
    $result = [];
    for($i = $length-1; $i>= 0; $i--)
    {
        array_push($result,$words[$i]);
    }

    $str_result = implode('',$result);

    return $str_result;
}

$str = 'sally';
$result = reverseWords($str);

var_dump($result);