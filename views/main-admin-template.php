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
                        <?php echo $this->user['login'] ?>
                    </span>
                <form action="../admin.php" method="post">
                    <input type="hidden" value="true" name="logout">
                    <button type="submit" class="exit">Exit</button>
                </form>
            </div>
        <? endif; ?>
    </div>
</header>

<main>
    <nav class="data-list">
        <ul>
            <li><a href="../admin.php"><?= NAV_HOME ?></a></li>
            <li><a href="../pages/admin-all-users.php">All User</a></li>
            <li><a href="../pages/admin-all-posts.php">All Post</a></li>
            <li><a href="../pages/admin-edit-post.php">Add Post</a></li>
            <li><a href="../pages/admin-addUser.php">Add User</a></li>
        </ul>
    </nav>
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
