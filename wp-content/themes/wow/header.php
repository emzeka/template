<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo( 'title' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css"  />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css" type="text/css" />
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<body>
<section class="top-navigation">
    <div class="container">
        <a href="" class="logo">wow guide</a>
        <div class="navigation">
            <?php
            $defaults = array(
                'theme_location' => '',
                'menu' => 'top-navigation',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            );
            wp_nav_menu($defaults);
            ?>
        </div>
    </div>
</section>
<header class="header">
    <div class="container">
        <div class="main-text">
            <?php echo category_description(); ?>
        </div>
    </div>
</header>
<section class="main-navigation">
    <div class="container">
        <a href="" class="logo">Logo</a>
        <nav class="navigation">
            <?php
            $defaults = array(
                'theme_location' => '',
                'menu' => 'main-navigation',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
            );
            wp_nav_menu($defaults);
            ?>
        </nav>
    </div>
</section>
<section class="wrapper">
    <div class="container">
        <div class="col-lg-12">
            <div class="advert-long">
                Рекламное место свободно
            </div>
            <div class="search-box">
                <input type="text" placeholder="Поиск по сайту..."/>
                <input type="submit" />
            </div>
        </div>
