<table>
    <caption>Users</caption>
    <tr>
        <th>id</th>
        <th>Login</th>
        <th></th>
    </tr>
        <?php if(count($this->users)>0):?>
            <?php foreach ($this->users as $user):?>
    <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['login']?></td>
        <td class="delete">
            <form action="/admin.php" method="post">
                <input type="submit" value="del"/>
                <input type="hidden" name="id" value="<?=$user['id']?>"/>
            </form>
        </td>
    </tr>
        <?php endforeach;?>
        <?php endif;?>
</table>
<div>
    <form action="/admin.php" method="post" >
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="user-add-repeat" placeholder="Repeat">
        <input type="submit" value="Sign Up">
    </form>
</div>

