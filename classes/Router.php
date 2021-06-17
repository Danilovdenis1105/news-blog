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
                $view = new View('main-admin-template.php', 'main-admin.php');
                $view->render();
            }
        }

    }

    static public function redirect()
    {
        header("Location: index.php");
    }
}