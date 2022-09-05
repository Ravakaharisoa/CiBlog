<!DOCTYPE html>
<html>
<head>
	<title>ciBlog</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Plugin/bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Plugin/font-awesome-4.7.0/css/font-awesome.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
	<script src="<?= base_url('assets/ckeditor/ckeditor.js')?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-info navbar-info">
		<div class="container">
		  	<ul class="navbar-nav">
				<li class="nav-item active">
				    <a class="nav-link text-white" href="<?= base_url();?>">ciBlog</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>about">About</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>posts">Blog</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>categories">Categories</a>
				</li>
		 	</ul>
		 	<ul class="nav navbar-nav nav-right">
		 	<?php if($this->session->userdata('user_loggedout')): ?>
		 		<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>users/login">Login</a>
				</li>
		 		<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>users/register">Register</a>
				</li>
			<?php endif; ?>
			<?php if($this->session->userdata('logged_in')): ?>
		 		<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>posts/create">Create post</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>categories/create">Create Category</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link text-white" href="<?= base_url(); ?>users/logout">Logout</a>
				</li>
			<?php endif; ?>
		 	</ul>
		 </div>
 	</nav>
	<div class="container mt-3">
		<!---Flash messages --->
		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('user_registered').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_created')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('post_created').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_updated')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('post_updated').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_created')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('category_created').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('post_deleted').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo'<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_delete')): ?>
			<?php echo'<div class="alert alert-success">'.$this->session->flashdata('category_delete').'</div>'; ?>
		<?php endif; ?>
