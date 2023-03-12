<?php

session_start();

$base = "http://localhost/php/devsbook";

$dbName = 'devsbook';
$host = 'localhost';
$user = 'root';
$password = '';

$pdo = new PDO("mysql:dbname=".$dbName.";host=".$host, $user, $password);
?>