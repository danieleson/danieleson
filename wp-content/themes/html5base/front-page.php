<?php get_header() ?>

<div class="section gray"><div>

	<h1><?php the_title() ?></h1>
	<?php # include TEMPLATEPATH . '/modules/posts-intro.php' ?>

</div></div>

<div class="section"><div>

	<?php include TEMPLATEPATH . '/modules/post-content.php' ?>
	<?php # include TEMPLATEPATH . '/modules/post-content.php' ?>

</div></div>

<aside id="aside" class="section light-blue"><div>

	<?php dynamic_sidebar('aside') ?>

</div></aside>

<?php get_footer() ?>
