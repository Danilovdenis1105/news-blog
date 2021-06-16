<div class="bottonAdd">
    <a href="../pages/admin-edit-post.php">Add post</a>
</div>
<table>
    <caption>Posts</caption>
    <tr>
        <th>id</th>
        <th>Name_post</th>
        <th>Date</th>
        <th>Аuthor</th>
        <th></th>
    </tr>
    <?php if(count($this->posts)>0):?>
        <?php foreach ($this->posts as $post):?>
    <tr>
        <td><?=$post['id']?></td>
        <td><?=$post['text']?></td>
        <td><?=$post['date']?></td>
        <td><?=$post['users']?></td>
        <td class="delete">
            <form action="/admin.php" method="post">
                <input type="submit" value="del"/>
                <input type="hidden" name="id" value="<?=$post['id']?>"/>
            </form>
        </td>
    </tr>
    <?php endforeach;?>
    <?php endif;?>
</table>

