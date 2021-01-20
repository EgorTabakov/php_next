<?php


class WeightProduct extends Products
{
    protected $weight;

    function __construct($name, $coast, $weight)

    {
        parent::__construct($name, $coast);
        $this->weight = $weight;
    }

    protected function getCoast()
    {
        return $this->coast;
    }

    protected function getName()
    {
        return $this->name;
    }

    protected function getWeight()
    {
        return $this->weight;
    }

    protected function getSum()
    {
        return $this->weight * $this->getCoast();
    }

    function render()
    {
        echo $this->getName() . " " . " цена: " . $this->getCoast() . " Количество: " .
            $this->getWeight() . " Сумма : " . $this->getSum() . "<br/>";
    }
}