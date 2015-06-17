<?php 
/*
Template Name: Work Page
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
				<li id="broadcast"><a href="javascript:void(0)" id="broadlink" class="open active">Broadcast</a><div class="box" style="display:block;"><?php get_template_part('content', 'broadcast'); ?></div></li>
				<li id="interactive"><a href="javascript:void(0)" id="interlink" class="open">Interactive</a><div class="box"><?php get_template_part('content', 'interactive'); ?></div></li>
				<li id="print"><a href="javascript:void(0)" id="printlink" class="open">Print</a><div class="box"><?php get_template_part('content', 'print'); ?></div></li>
				<li id="branding"><a href="javascript:void(0)" id="brandlink" class="open">Branding</a><div class="box"><?php get_template_part('content', 'branding'); ?></div></li>
				</ul>
		</div>
	</div>
	
	
</div>

</div>


<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>