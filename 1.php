<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/3/21
 * Time: 18:20
 */

/**
 * 1.多维数组排序
 * 数组分类并求和
 * @param $array
 * @return mixed
 */
function createNewArr($array)
{
    $pattern = '/(http:\/\/.*\/).*/';
    $pattern_replace = '${1}';

    $arr = [];
    foreach ($array as $k => &$v) {
        $v[0] = preg_replace($pattern, $pattern_replace, $v[0]);
        $key = $v[0];
        if (!isset($arr[$key])) {
            $arr[$key][0] = $key;
            $arr[$key][1] = $v[1];
            $arr[$key][2] = $v[2];
        } else {
            $arr[$key][1] += $v[1];
            $arr[$key][2] += $v[2];
        }
    }

    return $arr;
}

$items = array(
    array('http://www.abc.com/a/', 100, 120),
    array('http://www.abc.com/b/index.php', 50, 80),
    array('http://www.abc.com/a/index.html', 90, 100),
    array('http://www.abc.com/a/?id=12345', 200, 33),
    array('http://www.abc.com/c/index.html', 10, 20),
    array('http://www.abc.com/abc/', 10, 30)
);

$arr = createNewArr($items);

var_dump($arr);