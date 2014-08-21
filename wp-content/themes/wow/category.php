<?php get_header(); ?>
<script>
$(function() {
  $('.container .inner .loadmore a').on('click', function(){    				
		var offset = parseInt($('.ourHolder > li').size())+1;
		$.ajax({
            type: "POST",
            url: "/category/ajaxloading",
            data: {ofset: offset},
            dataType: "html",
            beforeSend: function(e) {

            },
            success: function(json) {	
				$('.container .ourHolder').append(json);
				filter();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
   
  });
});
</script>
<section class="container">
		<div class="inner">
			<ul class="ourHolder">			
				<?php
				$my_posts = get_posts(array( 'posts_per_page' => 9, 'offset' => 0 , 'category'=>1));
				foreach ($my_posts as $post) :
				setup_postdata($post);
				?>
					<?php
					$posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
						echo '<li data-id="id-' . $tag->term_id . '" data-type="' . $tag->name . '">';
					  }
					}
					?>
							<a href="<?php the_permalink(); ?>">
								<div class="thumbnail"><?php echo the_post_thumbnail(); ?></div>
								<div class="description"><?php the_title(); ?></div>
							</a>
						</li>
				<?php endforeach; ?>
			</ul>
			<div class="loadmore">
				<a>Загрузить еще</a>
			</div>
		</div>
		<div class="hfooter"></div>
		<div class="footerline">
			<ul>
				<li>+ 38 067 269 33 23</li>
				<li><a href="mailto:masha@redset.com.ua">masha@redset.com.ua</a></li>
				<li><a href="http://www.facebook.com/REDSETdesign">facebook.com/REDSETdesign</a></li>
			</ul>
		</div>
	</section>
</div>
</body>
</html>