<?php

class ItemsCat2 extends Items
{
    protected $size;


    function __construct($name, $price, $size)

    {
        $this->size = $size;
        parent::__construct($name, $price);
    }

    public function render()
    {
        parent::render(); // TODO: Change the autogenerated stub
        echo '...Размер: ' .$this->size. '<br/>';
    }
}