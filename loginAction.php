<?php

session_start();

require("config.php");
require("models/Auth.php");

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($email && $password) {
    echo 'funciona';
    //$auth = new Auth($pdo, $base);

    //if($auth->validateLogin($email, $password)) {
    //    header("Location: ".$base);
    //    exit;
    //}

}

$_SESSION['alert'] = 'Email e/ou senha errados';
header("Location: ".$base."/login.php");
exit;

?>