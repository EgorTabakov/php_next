<?php
require 'Items.php';
require 'ItemsCat1.php';
require 'ItemsCat2.php';

$items = [
    new Items('Карта', 13),
    new Items('Ручка', 125),
    new ItemsCat1('Карандаш', 125, 'black'),
    new ItemsCat2('Фартук', 165, 'XL')
];
$sum = 0;
foreach ($items as $item) {
    $item->render();
    $sum += $item->getPrice();
}
echo 'Sum = ' . $sum;
