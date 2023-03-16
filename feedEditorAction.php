<?php
require 'config.php';
require 'models/Auth.php';
require 'dao/PostDaoMysql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

$body = filter_input(INPUT_POST, 'body');

if($body) {
    $postDao = new PostDaoMysql($pdo);

    $newPost = new Post();
    $newPost->idUser = $userInfo->id;
    $newPost->type = 'text';
    $newPost->createdAt = date('Y-m-d H:i:s');
    $newPost->body = $body;

    $postDao->insert($newPost);
}

header("Location: ".$base);
exit;