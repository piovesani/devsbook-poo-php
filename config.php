<?php
session_start();
$base = 'http://localhost/php/devsbook';

$db_name = 'devsbook';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'R@2023!';

$maxWidth = 800;
$maxHeight = 800;

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);