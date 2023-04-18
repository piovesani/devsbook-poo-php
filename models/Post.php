<?php
class Post{
    public $id;
    public $idUser;
    public $type;
    public $createdAt;
    public $body;
}

interface PostDAO {
    public function insert(Post $p);
    public function getHomeFeed($idUser);
}