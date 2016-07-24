<?php

$host = 'localhosts';
$username = 'shop_user';
$password = 'password';
$db_name = 'Sklep_internetowy';

$conn = new mysqli($host, $username, $password, $db_name);

if($conn->connect_error){
    die('Nieudane polaczenie. Blad: ' .$conn->connect_error);
}

echo 'Polaczenie udane.';

$conn->close();
$conn = null;