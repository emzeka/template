<?php get_header(); ?>
        <div class="main-container">
            <?php echo get_template_part( 'carousel', 'template' ); ?>
        </div>
    </div>

    <div class="col-lg-12 news-container">
        <div class="main-container">
            <?php echo get_template_part( 'news', 'template' ); ?>
        </div>
    </div>

    <div class="col-lg-12 client-box">
        <div class="main-container">
            <span class="h3">Клієнти</span>
            <div class="row">
                <?php
                    $page = get_page(13);
                    echo apply_filters('the_content', $page->post_content);
                ?>
            </div>
        </div>
<?php get_footer(); ?>