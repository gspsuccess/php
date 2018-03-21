<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/3/21
 * Time: 18:22
 */

/**
 * 2.一群猴子排成一圈，按1，2，...，n依次编号。然后从第1只开始数，数到第m只,把它踢出圈， 从它
 * 后面再开始数，再数 * 到第m只，在把它踢出去...，如此不停的进行下去，直到最后只剩下一只猴子为
 * 止，那只猴子就叫做大王。要求编程模拟 * 此过程，输入m、n, 输出最后那个大王的编号。
 *
 * 约瑟夫环问题
 * @param $n
 * @param $m
 * @return array
 */
function joseph($n, $m)
{
    $i = 0;
    //创建:含有 n 个值的数组
    $arr = range(1, $n);
    while (count($arr) >= $m) {
        ++$i;
        //不断出队(即删除数组的第一个元素)
        $item = array_shift($arr);
        if ($i % $m <> 0) {
            //报到 m 就自杀(从队列中踢出),否则等待下一次的审判(再次添加到队尾)
            array_push($arr, $item);
        }
    }

    return $arr;
}

$result = joseph(100,4);

var_dump($result);