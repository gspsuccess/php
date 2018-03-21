<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/3/19
 * Time: 18:13
 */
function dbconn()
{
    $dsn="mysql:dbname=test;host=localhost";
    $db_user='root';
    $db_pass='root';
    try{
        $pdo=new PDO($dsn,$db_user,$db_pass);
        return $pdo;
    }catch(PDOException $e){
        die('数据库连接失败'.$e->getMessage());
    }
}

function select($where = 1)
{
    $pdo = dbconn();
    //查询
    $sql = 'select * from users where '.$where;
    $result = [];
    $resource = $pdo->query($sql);
    foreach($resource as $row){
        $result[] = $row;
    }
    $dbh = null;
    return $result;
}