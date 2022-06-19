<?php
header("Content-Type: text/html;charset=UTF-8");

$server = 'localhost';

$user = 'root';

$password = '';

$database = 'rent_car';

$baglanti = mysqli_connect($server, $user, $password, $database);

$baglanti->set_charset("utf8");


if (!$baglanti) {

    echo "MySQL sunucu ile baglanti kurulamadi! </br>";

    echo "HATA: " . mysqli_connect_error();

    exit;
}
