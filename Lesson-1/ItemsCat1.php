<?php

class ItemsCat1 extends Items
{
    protected $color;


    function __construct($name, $price, $color)

    {
        $this->color = $color;
        parent::__construct($name, $price);
    }

    public function render()
    {
        parent::render(); // TODO: Change the autogenerated stub
        echo '...Цвет: ' .$this->color. '<br/>';
    }
}