<?php get_header(); ?>

    <div class="col-md-8 content">
        <?php if (have_posts()) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <h2 class="h2-title"><?php get_categories(); ?></h2>

                <div class="col-md-12 item">
                    <div class="thumb">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="article">
                        <div class="helped-line">
                            <?php the_date(); ?> • 28 комментариев
                        </div>
                        <h3><a href="<?php the_permalink(); ?>" class="h3"><?php the_title(); ?></a></h3>
                        <div class="description">
                            <?php do_excerpt(get_the_excerpt(), 225); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Читать полностью</a>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>