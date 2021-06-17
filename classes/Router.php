<?php


class Router
{
    static public function init()
    {
        $userObj = new User();
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ($_SESSION['login'] === 'yes') {
                $view = new View('main-admin-template.php', 'main-admin.php');
                $view->render();
            }
            $view = new View('main-admin-template.php', 'authorization.php');
            $view->render();
        }









        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = filter_input_array(INPUT_POST);


            if ( count($user) === 2 && isset($user['login']) && isset($user['password'])) {
                $isAuth = $userObj->isAuthorized($user['login'], $user['password']);
                if ($isAuth) {
                    $_SESSION['login'] = 'yes';
                    $view = new View('main-admin-template.php', 'main-admin.php');
                    $view->user = $user;
                    $view->render();
                }
            }


            else if(isset($user['logout'])){
                $_SESSION['login'] = 'no';
                self::redirect();
            }


            else if(isset($user['login']) && isset($user['password']) && isset($user['confirm']) && count($user) === 3){
                var_dump('add');
                $view = new View('main-admin-template.php', 'admin-addUser.php');
                $view->render();
                if($user['password'] === $user['confirm']){
                    if($userObj->getUser($user['login'])){
                        /*var_dump('no');*/
                    }else{
                        $userObj->addUser($user['login'], $user['password']);
                        /*var_dump('ок');*/
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