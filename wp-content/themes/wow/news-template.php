<?php if (have_posts()) : ?>
    <div class="col-lg-12 latest-news">
        <h2 class="h2-title">Последние новости</h2>
        <?php $my_posts = get_posts(array( 'posts_per_page' => 4, 'offset' => 0 , 'category'=>1));
        foreach ($my_posts as $post) : ?>
            <div class="col-lg-6">
                <div class="content">
                    <a href="<?php the_permalink(); ?>"></a>
                    <?php do_excerpt(get_the_excerpt(), 25); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="h3"><?php the_title(); ?></a>
                <div class="description">
                    <?php do_excerpt(get_the_excerpt(), 25); ?>
                </div>
                <div class="col-lg-12">
                    <span class="date"><?php the_date(); ?></span>
                    <a href="<?php the_permalink(); ?>" class="more">Подробнее -></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>