<?= form_open('users/login') ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 m-auto">
			<h1 class="text-center text-info"><?= $title ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button class="btn btn-success btn-block" type="submit">Login</button>
		</div>
	</div>
<?= form_close() ?>