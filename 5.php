<?php

class Person implements ArrayAccess
{
    private $container = array();

    public function offsetSet($offset, $value)
    {
        if (isset($offset)) {
            $this->container[$offset] = $value;
        } else {
            $this->container[] = $value;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);

    }

    public function offsetGet($offset)
    {
        return (isset($this->container[$offset])) ? $this->container[$offset] : 'sorry';
    }
}

$person = new Person();
$person['name'] = 'sally';

var_dump($person);