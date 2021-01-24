<?php
require_once 'vendor\autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

require 'connect.php';

$result = mysqli_query($link, "SELECT * FROM image LEFT JOIN image_count ON id_count = id ORDER BY count DESC");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $myImage[] = $row;
    }
}


echo $twig->render('indexDb.twig', [
    'result' => $myImage,
]);
mysqli_close($link);