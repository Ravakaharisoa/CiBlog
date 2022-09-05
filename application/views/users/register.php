<h2 class="text-info text-center"><?= $title ?></h2>
<span class="text-danger"><?= validation_errors() ?></span>
<?= form_open('users/register') ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 m-auto">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Name">
		</div>
		<div class="form-group">
			<label>Zipcode</label>
			<input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="password" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Confirm Password</label>
			<input type="password" name="password2" class="form-control" placeholder="Confirm Password">
		</div>
		<button class="btn btn-success btn-block" type="submit">Submit</button>
	</div>
</div>
<?= form_close() ?>