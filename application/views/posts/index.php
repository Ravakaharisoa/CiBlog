<h2><?= $title ?></h2>
<?php foreach ($posts as  $post) : ?>
	<h3 class="text-info"><?= $post['title'] ?></h3>
	<div class="row">
		<div class="col-md-3 text-center">
			<img class="thumbnail" width="120" height="120"src="<?= site_url() ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<small class="bg-secondary text-white p-2">Posted on: <?= $post['creat_at'] ?> in <strong> <?= $post['name'] ?></strong></small>
	<p class="mt-3"><?= word_limiter($post['body'], 50) ?></p>
	<p><a class="btn btn-secondary" href="<?= site_url('/posts/'.$post['slug'])?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination_links">
	<?= $this->pagination->create_links(); ?>
</div>