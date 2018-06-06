<?php

$host = 'localhost';
$user = 'root';
$password = 'password';
$database = 'k3143_nuk';

$link = mysqli_connect($host, $user, $password, $database) 
    or die ("Ошибка подключения к базе данных" . mysqli_error());
