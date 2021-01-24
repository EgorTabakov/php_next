<?php
require_once 'vendor\autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$images = scandir('img');
$images = \array_diff($images, [".", ".."]);

echo $twig->render('index.twig', [
    'dir' => 'img',
    'images' => $images,
    'path' => 'img/',
]);