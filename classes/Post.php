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
}