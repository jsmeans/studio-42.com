<?php

	$args = array(
		'post_type' => 'work',
		'cat'=> 6
	);
	
	$query = new WP_Query( $args );

?>

<section class="works container clearfix">

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="grid_4 category">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>
			<p><?php the_field('company'); ?></p>
			
			<p>
				<?php the_category(', '); ?>
			</p>
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>