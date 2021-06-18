<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TODO logic   -->
    <link rel="stylesheet" href="../css/main-admin-template.css">
    <title>Document</title>
</head>
<body>
<header>
    <img class="logo" src="<?= H_LOGO ?>" alt="<?= H_ALT ?>">
    <div class="header__content">
        <?php if ($_SESSION['login'] === 'yes'): ?>
            <div class="user-info">
                    <span class="user-name">
                        <?php echo $_SESSION['user_login'] ?>
                    </span>
                <a href="../admin.php?logout='exit'">Exit</a>
            </div>
        <? endif; ?>
    </div>
</header>

<main>
    <?php if ($_SESSION['login'] === 'yes'): ?>
        <nav class="data-list">
            <ul>
                <li><a href="../admin.php"><?= NAV_HOME ?></a></li>
                <li><a href="../admin.php?allUsers='show'">All Users</a></li>
                <li><a href="../admin.php?allPosts='show'"">All Posts</a></li>
                <li><a href="../admin.php?addUser='add'">Add User</a></li>
                <li><a href="../admin.php?addPost='add'">Add Post</a></li>
            </ul>
        </nav>
    <? endif; ?>
    <div class="content">
        <div class="container">
            <section>
                <?php include_once 'pages' . DIRECTORY_SEPARATOR . $this->page ?>
            </section>
        </div>
    </div>
</main>
<footer><span>"October studio" 2021 &copy;</span></footer>
</body>
</html>
