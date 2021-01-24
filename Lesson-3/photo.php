<?php
require_once 'vendor\autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$img = $_GET['image'];

echo $twig->render('photo.twig', [
    'img' => $img,
]);