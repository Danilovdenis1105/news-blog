<?php


class User extends Database
{

    public function isAuthorized($login, $password)
    {
        $user = $this->getUser($login);
        $isAutho = password_verify($password, $user['password']);
        if ($isAutho) {
            return $user['id'];
        }
        return false;
    }

    public function getAllUsers()
    {
        $sql = "select login from users ;";
        $result = $this->dbConnect->query($sql);
        if ($result) {
            $users = [];
            while ($user = $result->fetch_assoc()) {
                $users[] = $user;
            }
            return $users;
        }
        return null;
    }

    public function getUser($login)
    {
        $sql = "select * from users where login like '$login' limit 1;";
        $result = $this->dbConnect->query($sql);
        if ($result) {
            return $result->fetch_assoc();
        }
        return null;
    }

    public function addUser($login, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (login, password) values ('$login','$password')";
        $this->dbConnect->query($sql);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE `users`.`id` = $id limit 1;";
        $this->dbConnect->query($sql);
    }
}