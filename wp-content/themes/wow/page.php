<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="main-container contact">
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>