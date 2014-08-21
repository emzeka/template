<?php get_header(); ?>
<section class="container">
		<div class="inner">
			<ul>			
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div class="thumbnail"><?php echo the_post_thumbnail(); ?></div>
								<div class="description"><?php the_title(); ?></div>
							</a>
						</li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<div class="loadmore">
				<a>Загрузить еще</a>
			</div>
		</div>
		<div class="hfooter"></div>
		<div class="footerline">
			<ul>
				<li>+ 38 067 789 09 89 </li>
				<li><a href="mailto:masha@redset.com.ua">masha@redset.com.ua</a></li>
				<li><a href="facebook.com/redset">facebook.com/redset</a></li>
			</ul>
		</div>
	</section>
</div>
</body>
</html>