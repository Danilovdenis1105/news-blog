<?php


class Post
{
    public $datebase;
    public  function __construct()
    {
        $this->datebase = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    public function getAllPosts(){
        $sql = "SELECT*FROM news;";
        $result = $this->datebase->query($sql);
        if($result){
            $posts=[];
            while ($post = $result->fetch_assoc()){
                $posts[]=$post;
            }
            return $posts;
        }
        return null;
    }
    public  function addPost($name, $textPost, $date, $user_id){
        $sql= "INSERT INTO news (name, text, date, user_id) VALUES ('$name','$textPost',$date, $user_id)";
        $this->datebase->query($sql);
    }
    public  function  delPost ($id){
        $sql= "DELETE  FROM news WHERE news.id = $id";
        $this->datebase->query($sql);
    }

}