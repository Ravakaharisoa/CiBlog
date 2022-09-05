<div class="col-md-6 m-auto text-center">
	<h2><?= $post['title'] ?></h2>
	<small class="bg-secondary text-white p-2">Posted on: <?= $post['creat_at'] ?></small>
	<div class="mt-4">
		<img class="thumbnail" width="120" height="120"src="<?= site_url() ?>assets/images/posts/<?php echo $post['post_image']; ?>">
	</div>
	<div class="post-body mt-2">
		<?= $post['body'] ?>
	</div>
	<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
		<div class="col-md-4 d-flex m-auto">
			<?= form_open('/posts/delete/'.$post['id'] ) ?>
				<button class="btn btn-danger" type="submit">Delete</button>
			</form>
			<a class="btn btn-success ml-3" href="<?= base_url() ?>posts/edit/<?= $post['slug'] ?>">Edit</a>
		</div>
	<?php endif; ?>
</div>
<hr>
<div class="col-md-10 m-auto">
	<h3 class="text-primary">Comments</h3>
	<?php if ($comments): 
			foreach ($comments as $comment):
	?>
		<div class="well">
			<h5><?= $comment['body'] ?> [by <strong><?= $comment['name'] ?></strong></h5>
		</div>
		<?php endforeach ; 
		else: ?>
		<p>No Comments To Display</p>
	<?php endif ; ?>
</div>
<hr>
<div class="col-md-8 m-auto mt-2">
	<h4 class="text-primary text-center">Add Comment</h4>
	<span class="text-danger"><?= validation_errors() ?></span>
	<?= form_open('comments/create/'.$post['id']) ?>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea name="body" class="form-control" id="editor1"></textarea>
		</div>
		<input type="hidden" name="slug" value="<?=$post['slug']?>">
		<button class="btn btn-success btn-block">Submit</button>
	</form>
</div>