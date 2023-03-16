<?php
class Post{
    public $idUser;
    public $type;
    public $createdAt;
    public $body;
}

interface PostDAO {
    public function insert(Post $p);
}