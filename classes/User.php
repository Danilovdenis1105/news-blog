<?php


class User extends Database
{
    public function addUser($login, $password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (login, password) values ('$login','$password')";
        $this->dbConnect->query($sql);
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE `users`.`id` = $id limit 1;";
        $this->dbConnect->query($sql);
    }
}