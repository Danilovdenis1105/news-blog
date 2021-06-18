<form action="/admin.php" method="post">
    <input type="hidden" name="post_id" value="<?=$this->postForEdit['news_id']?>">
    <label>Post name:  <input type="text" name="post_name" value="<?=$this->postForEdit['name']?>"></label>
    <label>Post description:  <textarea name="post_description"><?=$this->postForEdit['description']?></textarea></label>
    <input type="submit" value="Edit" name="edit">
</form>