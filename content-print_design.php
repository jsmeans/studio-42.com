<?php

	$args = array(
		'post_type' => 'capabilities',
		'cat'=> 5
	);
	
	$query = new WP_Query( $args );

?>

<section class="capability container clearfix">

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="grid_6 category">
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('description'); ?></p>
			</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>