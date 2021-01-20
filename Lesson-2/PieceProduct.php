<?php

class PieceProduct extends Products
{
    protected $quantity;
    function __construct($name, $coast, $quantity)

    {
        parent::__construct($name, $coast);
        $this->quantity = $quantity;
    }

    protected function getCoast()
    {
        return $this->coast;
    }

    protected function getName()
    {
        return $this->name;
    }

    protected function getQuantity()
    {
        return $this->quantity;
    }

    protected function getSum()
    {
        return $this->quantity * $this->getCoast();
    }

    function render()
    {
        echo $this->getName() . " " . " цена: " . $this->getCoast() . " Количество: " .
            $this->getQuantity() . " Сумма : " . $this->getSum() . "<br/>";
    }

}
