<?php
$link = mysqli_connect("localhost", "root", "root", "gb_php_gallery", "3306");
if (!$link) {
    echo "Ошибка подключения";
    echo mysqli_connect_error() . "<br/>";
}