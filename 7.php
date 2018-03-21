<?php

/**
 * 使用serialize序列化一个对象，并使用__sleep和__wakeup方法。
 * Class User
 */
class User
{
    public $name;
    public $id;

    function __construct()
    {
        $this->id = uniqid();
    }

    //不串行化id，只串行化name
    function __sleep()
    {
        return(array("name"));
    }

    //再次获取id，此处只作演示，实际情况可能是从数据库中获取
    function __wakeup()
    {
        $this->id = uniqid();
    }
}

$user = new User;
$user->name = "sally";

$user_s = serialize($user);
$user_u = unserialize($user_s);

var_dump($user_s);
var_dump($user_u);