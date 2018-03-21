<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/3/21
 * Time: 18:23
 */

/**
 * 3、得分计算，已知道选题提交的答案是
 * $commits= 'A,B,B,A,C,C,D,A,B,C,D,C,C,C,D,A,B,C,D,A';
 * 实际的答案是：
 * $answers= 'A,A,B,A,D,C,D,A,A,C,C,D,C,D,A,B,C,D,C,D'
 * 每题得分是5分，那么这个同学得分是多少？
 *
 * 方法：根据正确答案及自已提交的答案确定得分
 * @param $arr_correct //正确答案
 * @param $arr_self //自己提交的答案
 * @param $score //每道题的分数
 * @return int           //最后得分
 */
function getResult($arr_correct, $arr_self, $score)
{
    $arr_result = array_intersect_assoc($arr_correct, $arr_self);
    $score_sum = count($arr_result) * $score;

    return $score_sum;
}

$commits= 'A,B,B,A,C,C,D,A,B,C,D,C,C,C,D,A,B,C,D,A';
$answers= 'A,A,B,A,D,C,D,A,A,C,C,D,C,D,A,B,C,D,C,D';

$commits_arr = explode(',',$commits);
$answers_arr = explode(',',$answers);

$result = getResult($commits_arr,$answers_arr);

var_dump($result);