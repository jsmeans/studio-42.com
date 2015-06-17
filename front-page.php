<!DOCTYPE html>
<html>
<head>
	<title>
	<?php 


wp_title( '-' , true, 'right' );

bloginfo( 'name' )

	?>


	</title>
	<meta name="viewport" content="width=device-width, intial-scale = 1.0">
	<?php wp_head(); ?>

</head>

<body>

	<?php get_template_part('content', 'header'); ?>

	<div id="featured"  class="container clearfix flexslider">
	<ul class="slides">

<?php

	$args = array(
		'post_type' => 'work',
		'category_name' => 'featured',

	);
	
	$query = new WP_Query( $args );

?>

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<li class="works">

			<div class="grid_12 container category">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>
			<p><?php the_field('company'); ?></p>
			<p>
				<?php the_category(', '); ?>
			</p>
		</div>

		</li>

	<?php endwhile; endif; ?>


</ul>
</div>
		


	<?php get_template_part('content', 'capa_intro'); ?>

	<div class="grid_12 container clearfix">
	<h5>Recent Blog Post</h5>
			<div class="three">
								<?php 

					$args= array(
						'post_type' => 'post',
			
						'posts_per_page' => 3
						);

					$the_query = new WP_Query( $args );

					?>

					<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
						<div class="grid_4 recent-post">

						<?php get_template_part('content', 'post'); ?>

						</div>

					<?php endwhile; endif; ?>

		
	</div>	

</div>


<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>