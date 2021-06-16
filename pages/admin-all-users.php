<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin-all-users.css">
    <title>Document</title>
</head>
<body>

<table>
    <caption>Users</caption>
    <tr>
        <th>id</th>
        <th>Login</th>
        <th></th>
    </tr>
    <!--    --><?php //if(count($this->users)>0):?>
    <!--        --><?php //foreach ($this->users as $user):?>
    <tr>
        <td>1
            <!--            --><?//=$user['id']?>
        </td>
        <td>2
            <!--            --><?//=$user['login']?>
        </td>
        <td class="delete">
            <form action="/admin.php" method="post">
                <input type="submit" value="del"/>
                <input type="hidden" name="id" value="<?=$user['id']?>"/>
            </form>
        </td>
    </tr>
    <!--    --><?php //endforeach;?>
    <!--    --><?php //endif;?>
</table>
<div>
    <form action="/admin.php" method="post" >
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="user-add-repeat" placeholder="Repeat">
        <input type="submit" value="Sign Up">
    </form>
</div>

