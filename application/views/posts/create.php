<h2><?= $title ?></h2>
<span class="text-danger"><?= validation_errors() ?></span>
<?= form_open_multipart('posts/create') ?>
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Add Title">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
	</div>
	<div class="form-group">
		<label>Category</label>
		<select name="category_id" class="form-control">
			<?php foreach ($categories as $category): ?>
				<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Upload Image</label>
		<input type="file" name="userfile" size="20" class="form-control">
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>