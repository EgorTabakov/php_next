<?php

abstract class Products
{
    protected $coast;
    protected $name;

    function __construct($name, $coast)

    {
        $this->coast = $coast;
        $this->name = $name;

    }

    abstract protected function getCoast();

    abstract protected function getName();

    abstract protected function getSum();

}
