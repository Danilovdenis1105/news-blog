<div>
    <?php foreach ($posts as $post):?>
        <div><a href="../pages/post.php"><h2><?=$post['name_post']?></h2></a></div>
        <div><a href="../pages/post.php"><?=$post['shot_post']?></a></div>
        <div><?=$post['date']?></div>
        <div><?=$post['user_name']?></div>
    <?php endforeach;?>
</div>