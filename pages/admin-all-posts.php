<table>
    <caption>Posts</caption>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Date</th>
        <th>Аuthor</th>
        <th></th>
    </tr>
    <?php if(count($this->posts)>0):?>
        <?php foreach ($this->posts as $post):?>
    <tr>
        <td><?=$post['id']?></td>
        <td><?=$post['name']?></td>
        <td><?=$post['date']?></td>
        <td><?=$post['author']?></td>
        <td><a href="">Delete</a></td>
    </tr>
    <?php endforeach;?>
    <?php endif;?>
</table>

