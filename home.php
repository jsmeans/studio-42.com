<?php get_header(); ?>

<div class="container clearfix">

	<div class="grid_12 omega">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="title">
				<a href="<?php the_permalink() ;?>">
					<?php the_post_thumbnail('large'); ?>
				</a>
			</div>

			<h3 class="cat-page" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<ul class="info">
				<li>Posted in: <?php the_category(', '); ?></li>
				<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
				<li>On: <?php the_time('F j, Y'); ?></li>
			</ul>

			<div class="excerpt">

				<?php the_excerpt(); ?>
				<p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
			</div>

		<?php endwhile; endif; ?>  
		
	</div>

</div>

<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>