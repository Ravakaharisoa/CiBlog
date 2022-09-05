<h2 class="text-info"><?= $title ?></h2>

<span class="text-danger"><?= validation_errors() ?></span>
<?= form_open_multipart('categories/create') ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div>
	<button class="btn btn-success" type="submit">Submit</button>
</form>