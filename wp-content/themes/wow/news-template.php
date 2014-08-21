<?php if (have_posts()) : ?>
    <?php $my_posts = get_posts(array( 'posts_per_page' => 2, 'offset' => 0 , 'category'=>1));
    foreach ($my_posts as $post) : ?>
        <div class="col-lg-6">
            <div class="thumbnail">
                <?php the_post_thumbnail(); ?>
                <span class="corner"></span>
            </div>
            <div class="content">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php do_excerpt(get_the_excerpt(), 25); ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>