<?php get_header(); ?>
<div class="container_inner">
<a href="" class="go_back">Назад, ко всем галлереям</a>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		[nggallery id="<?php echo get_post_meta($post->ID, 'outside_description', true); ?>" template="main"]
	<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>