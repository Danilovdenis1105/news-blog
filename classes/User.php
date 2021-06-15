<?php


class User
{
    public $datebase;
    public  function __construct()
    {
        $this->datebase = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    public function getAllUsers(){
        $sql = "SELECT*FROM users;";
        $result = $this->datebase->query($sql);
        if($result){
            $users=[];
            while ($user = $result->fetch_assoc()){
                $users[]=$user;
            }
            return $users;
        }
        return null;
    }
    public function getUserByLogin($login){
        $sql = "SELECT * FROM users where login like '$login' limit 1;";
        $result = $this->datebase->query($sql);
        if($result){
            $result->fetch_assoc();
        }
        return null;
    }
    public  function addUser($login, $password, $email){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql= "INSERT INTO users (login, password) VALUES ('$login','$password')";
        $this->datebase->query($sql);

    }
    public  function  delUser ($id){
        $sql= "DELETE  FROM users WHERE users.id = $id";
        $this->datebase->query($sql);
    }

}