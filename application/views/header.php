<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav>
		<h1><a href="<?= base_url() ?>">The Blog</a></h1>

		<?php if ($this->session->has_userdata('username')): ?>

			<a href="<?= base_url() ?>post-add">Add New Post</a>

			<a href="logout">Logout</a>

		<?php else: ?>

			<a href="<?= base_url() ?>login">Login</a>
			
			<a href="<?= base_url() ?>register">Register</a>

		<?php endif ?>
	</nav>

	<?php if ($this->session->has_userdata('message')): ?>

		<p><?= $this->session->message ?></p>

		<?php $this->session->message = '' ?>

	<?php endif ?>