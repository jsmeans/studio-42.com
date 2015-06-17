<?php get_header(); ?>

<div class="container clearfix">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="grid_4 alpha">
	<h1><?php the_field('company'); ?></h1>
	<p><?php the_field('description'); ?></p>
	<a href="<?php the_field('siteurl'); ?>">Visit Site</a>
	</div>


	<div class="grid_8 omega">

	   <img src="<?php the_field('image'); ?>">

	</div>

	<div class="grid_12" style="clear:both; text-align:center;">
		<?php previous_post_link(); ?> - 
		<a href="<?php bloginfo('url'); ?>/portfolio">Back to Work</a> -
		<?php next_post_link(); ?>
	</div>

<?php endwhile; else: ?>  

<p>There are no posts or pages</p>

<?php endif; ?>
</div>

<div class="container">
<?php get_template_part('content', 'testimonials'); ?>
</div>

<?php get_footer(); ?>