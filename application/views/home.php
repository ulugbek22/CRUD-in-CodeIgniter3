
<?php if (isset($posts)): ?>

	<?php foreach ($posts as $post): ?>

		<h1><a href="post/<?= $post['id'] ?>"><?= $post['title'] ?></a></h1>

		<p><?= $post['body'] ?></p>

		<a href="post-edit/<?= $post['id'] ?>">Edit</a>

		<a href="post-delete/<?= $post['id'] ?>">Delete</a>

	<?php endforeach ?>

<?php else: ?>

	<h1>No posts yet.</h1>

<?php endif ?>
