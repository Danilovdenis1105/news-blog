<form action="/admin.php" method="post" >
    <label>Enter post name</label>
    <input type="text" name="name_post">
    <label>Enter date</label>
    <input type="date" name="date">
    <label>Enter post</label>
    <textarea name="post" rows="12"></textarea>
    <input type="hidden" name="user_name" value="<?=$_SESSION['username']?>">
    <input type="submit" value="Sign Up">
</form>



