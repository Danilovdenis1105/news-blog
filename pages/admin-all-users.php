<table>
    <caption>Users</caption>
    <tr>
        <th>id</th>
        <th>Login</th>
        <th></th>
    </tr>
    <?php
    if (count($this->users) > 0):?>
        <?php foreach ($this->users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['login'] ?></td>
                <td><a href="../admin.php?id=<?= $user['id']
                    //TODO изменить на user_id?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

