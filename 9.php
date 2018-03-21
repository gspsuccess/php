<?php
/**
 * 组合枚举
 * @param $arr
 * @param $n
 * @param $res
 * @param array $pre
 */
function c($arr, $n, &$res, $pre = array())
{
    if ($n == 0)
    {
        $res[] = $pre;
    }
    else
    {
        $count = count($arr);
        for ($i = 0; $i < $count - $n + 1; $i++)
        {
            $temp = array_shift($arr);
            c($arr, $n - 1, $res, array_merge($pre, array(
                $temp
            )));
        }
    }
}

$arr = array(11, 18, 12, 1, -2, 20, 8, 10, 7, 6, 12, 6, 6, 6, -6 );
$sum = 18;

$count = count($arr);

for ($i = 1; $i <= $count; $i++)
{
    $res = array();
    c($arr, $i, $res);
    foreach ($res as $val)
    {
        if (array_sum($val) == $sum)
        {
            echo implode(' + ', $val), ' = ', $sum, PHP_EOL;
        }
    }
}