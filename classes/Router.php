<?php


class Router
{
    static public function init()
    {
        $userObj = new User();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = filter_input_array(INPUT_POST);
            $isAuth = $userObj->isAuthorized($user['login'], $user['password']);
            if ($isAuth) {
                var_dump('Enter please!');
            }
        }

    }
}