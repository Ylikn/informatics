﻿<?php

$host = 'localhost';
$user = 'root';
$password = '22336699';
$database = 'k3143_nuk';

$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
$link = mysqli_connect($host, $user, $password, $database) 
    or die ("Ошибка подключения к базе данных" . mysqli_error());
echo "Вы подключились!<br>";

?>