<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/3/21
 * Time: 18:25
 */

require 'db.php';

$data = file_get_contents('php://input');
$dic = require 'dic.php';

if(array_key_exists($data,$dic))
{
    $result = $dic[$data];

    var_dump($result);
}
else
{
    $sql = str_replace('&',' and ',$data);
    if($arr = select($sql))
    {
        $dic[$data] = $arr;
        $res = "<?php return ".var_export($dic,true).";";
        file_put_contents('dic.php',$res);
    }
}