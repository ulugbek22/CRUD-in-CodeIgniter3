
<?php if (isset($post)): ?>

	<h1><?= $post['title'] ?></h1>

	<p><?= $post['body'] ?></p>

<?php else: ?>

	<h1>No post selected</h1>

<?php endif ?>