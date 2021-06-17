<?php


class Router
{
    static public function init()
    {
        $userObj = new User();
        $postObj = new Post();
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $getParams = filter_input_array(INPUT_GET);

            if (isset($getParams['addUser'])) {
                $view = new View('main-admin-template.php', 'admin-addUser.php');
                $view->render();
            }

            if (isset($getParams['allPosts'])) {
                $posts = $postObj->getAllPosts();
                $view = new View('main-admin-template.php', 'admin-all-posts.php');
                $view->posts = $posts;
                $view->render();
            }

            if (isset($getParams['allUsers'])) {
                $users = $userObj->getAllUsers();
                $view = new View('main-admin-template.php', 'admin-all-users.php');
                $view->users = $users;
                $view->render();
            }

            if ($_SESSION['login'] === 'yes') {
                $view = new View('main-admin-template.php', 'main-admin.php');
                $view->render();
            } else {
                $view = new View('main-admin-template.php', 'authorization.php');
                $view->render();
            }


        }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = filter_input_array(INPUT_POST);


            if (count($user) === 2 && isset($user['login']) && isset($user['password'])) {
                $userId = $userObj->isAuthorized($user['login'], $user['password']);
                if ($userId) {
                    $_SESSION['login'] = 'yes';
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['user_login'] = $user['login'];
                    $view = new View('main-admin-template.php', 'main-admin.php');
                    $view->user = $user;
                    $view->render();
                }
            } else if (isset($user['logout'])) {
                $_SESSION['login'] = 'no';
                self::redirect();
            } else if (isset($user['login']) && isset($user['password']) && isset($user['confirm']) && count($user) === 3) {
                $view = new View('main-admin-template.php', 'admin-addUser.php');
                $view->render();
                if ($user['password'] === $user['confirm']) {
                    if ($userObj->getUser($user['login'])) {
                        var_dump('Такой юзер уже есть');
                        //TODO вывод ошибки такой юзер уже существует
                    } else {
                        $userObj->addUser($user['login'], $user['password']);
                    }

                }
            }


        }

    }

    static public function redirect()
    {
        header("Location: admin.php");
    }
}