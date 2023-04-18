<?php
require_once 'models/Post.php';
require_once 'dao/UserRelationDaoMysql.php';
require_once 'dao/UserDaoMysql.php';

class PostDaoMysql implements PostDAO {
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    
    public function insert(Post $p) {
        $sql = $this->pdo->prepare("INSERT INTO posts(
                id_user, type, created_at, body
        ) VALUES (
            :id_user, :type, :created_at, :body
        )");

        $sql->bindValue(':id_user', $p->idUser);
        $sql->bindValue(':type', $p->type);
        $sql->bindValue(':created_at', $p->createdAt);
        $sql->bindValue(':body', $p->body);
        $sql->execute();
        
    }

    function getHomeFeed($idUser){

        $array = [];

        //get list
        $urDao = new UserRelationDaoMysql($this->pdo);
        $userList = $urDao->getRelationsFrom($idUser);

        //get posts
        $sql = $this->pdo->query("SELECT * FROM posts WHERE id_user 
        IN (".implode(',', $userList).") ORDER BY created_at DESC");

        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            //transform results
            $array = $this->_postListToObject($data, $idUser);
        }

        return $array;
    }

    private function _postListToObject($postList, $idUser){
        $posts = [];

        $userDao = new UserDaoMysql($this->pdo);

        foreach($postList as $postItem){
            $newPost = new Post();
            $newPost->id = $postItem['id'];
            $newPost->type = $postItem['type'];
            $newPost->createdAt = $postItem['created_at'];
            $newPost->body = $postItem['body'];
            $newPost->mine = false;

            if($postItem['id_user'] == $idUser){
                $newPost->mine = true;
            }

            //get user info
            $newPost->user = $userDao->findById($postItem['id_user']);

            //info likes
            $newPost->likeCount = 0;
            $newPost->liked = false;

            //info comments
            $newPost->comments = [];
            
            $posts[] = $newPost;
        }

        return $posts;
    }
}