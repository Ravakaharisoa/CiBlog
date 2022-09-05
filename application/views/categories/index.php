<h2 class="text-info"><?= $title ?></h2>
<ul class="list-group">
	<?php foreach ($categories as $category): ?>
	<li class="list-group-item d-flex">
		<a href="<?= site_url('/categories/posts/'.$category['id']) ?>"><?= $category['name'] ?></a>
		<?php if($this->session->userdata('user_id') == $category['user_id']): ?>
			<form class="cat-delete" action="categories/delete/<?= $category['id'] ?>" method="POST">
				<button class="btn-link text-danger ml-3" type="submit" ><i class="fa fa-times"></i></button>
			</form>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>