<?php
require 'Products.php';
require 'PieceProduct.php';
require 'DigitalProduct.php';
require 'WeightProduct.php';
$coast = 1000;

$items = [
    new PieceProduct('Продукт', $coast, 3),
    new DigitalProduct('Цифровой продукт', $coast, 3),
    new WeightProduct('Весовой продукт', 220, 3),

];
$sum = 0;
foreach ($items as $item) {
    $item->render();

//    $sum += $item->getPrice();
}







