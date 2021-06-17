<?php
include_once '../config_example.php';
$posts = [];//TODO
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TODO logic   -->
    <link rel="stylesheet" href="../css/main-index-template.css">
    <style>
        /*div{*/
        /*    padding: 10px 70px;*/
        /*    display: block;*/
        /*    min-width: 100%;*/
        /*    text-decoration: none;*/
        /*    transition-property: background-color;*/
        /*    transition-duration: .3s;*/
        /*    border: 1px solid #f0f3f6;*/
        /*    text-align: center;*/
        /*}*/
        /*.cont{*/
        /*    display: flex;*/
        /*    flex-direction: row;*/
        /*    justify-content: center;*/
        /*}*/
    </style>
    <title>Document</title>
</head>
<body>
<header>
    <img class = "logo" src="<?=H_LOGO?>" alt="<?=H_ALT?>">
</header>
<nav><a href="../index.php"><?=NAV_HOME?></a></nav>
<main>
    <div>
        <div class="cont">
            <!--        --><?php //foreach ($posts as $post):?>
            <div><a href="#">прапрарапра
                    <!--                    --><?//=$post['name_post']?>
                </a></div>
            <div><a href="#">вапвпвпвапвпвпвпвп
                    впвпвпвпвпвпвпhgjgjjghjgjghjgjgjgjвпвп
                    <!--                    --><?//=$post['shot_post']?>
                </a></div>
            <div>31/12/2021
                <!--                --><?//=$post['date']?>
            </div>
            <div>Гук
                <!--                --><?//=$post['user_name']?>
            </div>
            <!--        --><?php //endforeach;?>
        </div>
        <div class="cont">
            <!--        --><?php //foreach ($posts as $post):?>
            <div><a href="#">прапрарапра
                    <!--                    --><?//=$post['name_post']?>
                </a></div>
            <div><a href="#">вапвпвпвапвпвпвпвп
                    впвпвпвпвпвпвпhgjgjjghjgjghjgjgjgjвпвп
                    <!--                    --><?//=$post['shot_post']?>
                </a></div>
            <div>31/12/2021
                <!--                --><?//=$post['date']?>
            </div>
            <div>Гук
                <!--                --><?//=$post['user_name']?>
            </div>
            <!--        --><?php //endforeach;?>
        </div>
        <div class="cont">
            <!--        --><?php //foreach ($posts as $post):?>
            <div><a href="#">прапрарапра
                    <!--                    --><?//=$post['name_post']?>
                </a></div>
            <div><a href="#">вапвпвпвапвпвпвпвп
                    впвпвпвпвпвпвпhgjgjjghjgjghjgjgjgjвпвп
                    <!--                    --><?//=$post['shot_post']?>
                </a></div>
            <div>31/12/2021
                <!--                --><?//=$post['date']?>
            </div>
            <div>Гук
                <!--                --><?//=$post['user_name']?>
            </div>
            <!--        --><?php //endforeach;?>
        </div>
        <div class="cont">
            <!--        --><?php //foreach ($posts as $post):?>
            <div><a href="#">прапрарапра
                    <!--                    --><?//=$post['name_post']?>
                </a></div>
            <div><a href="#">вапвпвпвапвпвпвпвп
                    впвпвпвпвпвпвпhgjgjjghjgjghjgjgjgjвпвп
                    <!--                    --><?//=$post['shot_post']?>
                </a></div>
            <div>31/12/2021
                <!--                --><?//=$post['date']?>
            </div>
            <div>Гук
                <!--                --><?//=$post['user_name']?>
            </div>
            <!--        --><?php //endforeach;?>
        </div>
    </div>

</main>
<footer><span>"October studio" 2021 &copy;</span></footer>
</body>
</html>



