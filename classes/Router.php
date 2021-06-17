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

            else if (isset($getParams['logout'])) {
                $_SESSION['login'] = 'no';
                //TODO добавить удаление сессии и сделать перезагрузку страницы
            }

            if (isset($getParams['addPost'])) {
                $view = new View('main-admin-template.php', 'admin-addPost.php');
                $view->render();
            }

            if (isset($getParams['post_id'])) {
                $post = $postObj->getPostbyId($getParams['post_id'], $_SESSION['user_id']);
                if ($post) {
                    $postObj->deletePost($getParams['post_id']);
                } else {
                    var_dump("Вы не можете удалить данную запись");
                }

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

            if (isset($getParams['user_id'])) {
                $userForDel = $getParams['user_id'];
                if ($userForDel === $_SESSION['user_id']) {
                    var_dump("Вы не можете удалить сами себя");
                    //TODO вывод ошибки про невозможность удаления себя же
                } else {
                    $userObj->deleteUser($getParams['user_id']);
                }
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
            $getPostParams = filter_input_array(INPUT_POST);

            if (count($getPostParams) === 2 && isset($getPostParams['login']) && isset($getPostParams['password'])) {
                $userId = $userObj->isAuthorized($getPostParams['login'], $getPostParams['password']);
                if ($userId) {
                    $_SESSION['login'] = 'yes';
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['user_login'] = $getPostParams['login'];
                    $view = new View('main-admin-template.php', 'main-admin.php');
                    $view->user = $getPostParams;
                    $view->render();
                }
            }

            if (isset($getPostParams['post_name']) && isset($getPostParams['post_description'])) {
                $postObj->addPost($getPostParams['post_name'], $getPostParams['post_description'], $_SESSION['user_id']);
            }


            else if (isset($getPostParams['login']) && isset($getPostParams['password']) && isset($getPostParams['confirm']) && count($getPostParams) === 3) {
                $view = new View('main-admin-template.php', 'admin-addUser.php');
                $view->render();
                if ($getPostParams['password'] === $getPostParams['confirm']) {
                    if ($userObj->getUser($getPostParams['login'])) {
                        var_dump('Такой юзер уже есть');
                        //TODO вывод ошибки такой юзер уже существует
                    } else {
                        $userObj->addUser($getPostParams['login'], $getPostParams['password']);
                    }

                }
            }


        }

    }

    static public function redirect($path = 'admin.php')
    {
        header($path);
    }
}