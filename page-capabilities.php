
<?php 
/*
Template Name: Capabilities Page
*/
?>

<?php get_header(); ?>
<div class="container clearfix">

<div class="work grid_12 omega">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3>   <?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>
	<hr>

<?php endwhile; endif; ?>



<div class="clearfix whendoyou">
	
	<div class="holder">
		<div class="grid_12 omega boxes">
			<ul>
				<li id="broadcast"><a href="javascript:void(0)" id="broadlink" class="open active">Websites</a><div class="box" style="display:block;"><?php get_template_part('content', 'digital'); ?></div></li>
				<li id="interactive"><a href="javascript:void(0)" id="interlink" class="open">Videography</a><div class="box"><?php get_template_part('content', 'videography'); ?></div></li>
				<li id="branding"><a href="javascript:void(0)" id="brandlink" class="open">Photography</a><div class="box"><?php get_template_part('content', 'photography'); ?></div></li>
				<li id="print"><a href="javascript:void(0)" id="printlink" class="open">Design</a><div class="box"><?php get_template_part('content', 'print_design'); ?></div></li>
				
				</ul>
		</div>
	</div>
	
	
</div>
</div>
</div>


<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>