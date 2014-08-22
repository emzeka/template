<div class="col-md-12 second-data">
    <div class="col-md-6">
        <h4 class="title-h4">Профессии</h4>
        <div class="item">
            <a href="<?php the_permalink(); ?>">
                <div class="thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="article">
                    <div class="description">
                        <?php do_excerpt(get_the_excerpt(), 25); ?>
                    </div>
                    <div class="helped-line">
                        <?php the_date(); ?> • 28 комментариев
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6 addons">
        <h4 class="title-h4">Аддоны</h4>
        <div class="item">
            <a href="<?php the_permalink(); ?>">
                <div class="thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="article">
                    <div class="description">
                        <?php do_excerpt(get_the_excerpt(), 25); ?>
                    </div>
                    <div class="helped-line">
                        <?php the_date(); ?> • 28 комментариев
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>