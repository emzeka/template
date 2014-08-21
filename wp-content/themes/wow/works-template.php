<div class="title"><span>Our works</span></div>
<?php if (have_posts()) : ?>
	<div class="list">
		<ul>
			<?php
				$my_posts = get_posts(array( 'posts_per_page' => 12, 'offset' => 0, 'category' => 3, 'orderby' => 'rand'));
				foreach ($my_posts as $post) :
			?>
			<li>
				<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
				<div class="description">
					<div class="bigimage">
						<?php echo do_shortcode( '[nggallery id=' . get_post_meta($post->ID, 'galley_id', true) . ' template="main"]' ); ?>
					</div>
					<div class="container">
						<span class="h4"><?php the_title(); ?></span>
						<span class="titleinner"><?php echo get_post_meta($post->ID, 'gallery_s_title', true) ?></span>
						<div class="descrtext"><?php the_content(); ?></div>
					</div>
				</div>
			</li>	
			<?php endforeach; ?>
		</ul>
	</div>
<?php else : ?>
<?php endif; ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/source/flexslider.css" type="text/css" media="screen" />

<script src="<?php bloginfo('template_url'); ?>/js/source/jquery.flexslider.js"></script>

<script type="text/javascript">
$(function(){
	SyntaxHighlighter.all();
});

$(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		useCSS: false,
		controlNav: "thumbnails",
		start: function(container) {
			var current_slide = $(container.controlNav[container.currentSlide]).parent();

            current_slide.parent().find('li').removeClass('active-slider').show(300);

            current_slide.attr('class', 'active-slider').hide(300);
		},
		after: function(container) {
			var current_slide = $(container.controlNav[container.currentSlide]).parent();

            current_slide.parent().find('li').removeClass('active-slider').show(300);

            current_slide.attr('class', 'active-slider').hide(300);
		}
	});
});
</script>

<!-- Modernizr -->
<script src="<?php bloginfo('template_url'); ?>/js/source/js/modernizr.js"></script>

<!-- Syntax Highlighter -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/source/js/shCore.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/source/js/shBrushXml.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/source/js/shBrushJScript.js"></script>

<!-- Optional FlexSlider Additions -->
<!--<script src="<?php bloginfo('template_url'); ?>/js/source/js/jquery.easing.js"></script>-->
<script src="<?php bloginfo('template_url'); ?>/js/source/js/jquery.mousewheel.js"></script>
