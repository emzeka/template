<?php get_template_part( 'header-inner' ); ?>

<div class="c_wrapper">
	<div class="search_container">
		<?php if (have_posts()) : ?>
			<ul>
			<?php
			while (have_posts()) {
				the_post();	
				$cats = wp_get_post_categories(get_the_ID());
				
				if(count($cats) && in_array($cats[0], array('6', '8'))){
					$url = get_category_link($cats[0]);
				}else{
					$url = get_permalink();
				}
			?>
				<li>
					<a href="<?php the_permalink() ?>" class="title"><?php the_title() ?></a>
					<p><?php echo trim_text(get_the_content(), 450, false, true); ?></p>
				</li>
			<?php } ?>
			</ul>
		<?php endif; ?>
	</div>
</div>

<div class="clear"></div>

<?php get_footer(); ?>
