<?php

class Items
{
    protected $name;
    protected $price;
    private $num;
    public static $count=0;

    function __construct($name, $price)

    {
        $this->price = $price;
        $this->name = $name;
        self::$count++;
        $this->num = self::$count;
    }


    public function getPrice()
    {
        return $this->price;
    }
    public static function getNum()
    {
        return self::$count;
    }

    public function render()
    {
        echo '#' . $this->num . ':' .$this->name . ' цена: ' . $this->price . '<br/>';
    }

}