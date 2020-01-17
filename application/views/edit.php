
<form action="post-edit" method="POST">

	<input type="hidden" name="id" value="<?= $post['id'] ?>">

	<input type="text" name="title" value="<?= $post['title'] ?>"><br>
	
	<textarea name="body"><?= $post['body'] ?></textarea><br>
	
	<input type="submit" value="Update Post">

</form>