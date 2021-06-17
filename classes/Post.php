<?php


class Post extends Database
{
    public function addPost($name, $description, $user_id){
        $sql = "INSERT INTO news (name, description,user_id) values ('$name','$description','$user_id')";
        $this->dbConnect->query($sql);
    }
    public function deletePost($id){
        $sql = "DELETE FROM news WHERE `news`.`id` = $id limit 1;";
        $this->dbConnect->query($sql);
    }

    public function editPost($id, $name, $description){
        $sql = "UPDATE `news` SET `name` = '$name', `description` = '$description' WHERE `news`.`id` = '$id';";
    }
    public function getAllPosts(){
        $sql = "SELECT news.id as id, news.name as name, news.date_of_creating as date,users.login as author from news inner join users on news.user_id = users.id";
        $result = $this->dbConnect->query($sql);
        if ($result) {
            $posts = [];
            while ($post = $result->fetch_assoc()) {
                $posts[] = $post;
            }
            return $posts;
        }
        return null;
    }
}