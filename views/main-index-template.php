<?php
include_once '../config_example.php'
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
    <title>Document</title>
</head>
<body>
    <header>
        <img class = "logo" src="<?=H_LOGO?>" alt="<?=H_ALT?>">
    </header>
    <nav><a href="../index.php"><?=NAV_HOME?></a></nav>
    <main>

        <div>
            <?php include_once 'views'.DIRECTORY_SEPARATOR.$this->page?>
        </div>
    </main>
<footer><span>"October studio" 2021 &copy;</span></footer>
</body>
</html>