<h2><?= $title ?></h2>
<span class="text-danger"><?= validation_errors() ?></span>
<?= form_open('posts/update') ?>
	<input type="hidden" name="id" value="<?= $post['id'] ?>">
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Add Title" value="<?= $post['title'] ?>">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea class="form-control" id="editor1" name="body" placeholder="Add Body">
			<?= $post['body'] ?>
		</textarea>
	</div>
	<div class="form-group">
		<label>Category</label>
		<select name="category_id" class="form-control">
			<?php foreach ($categories as $category): ?>
				<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<button type="submit" class="btn btn-success">Update</button>
</form>