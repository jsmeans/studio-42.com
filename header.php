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
	<header class="header grid_12 omega">
		<div class="container clearfix">
			
			<div class="logo">

				<a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>

			</div>
			
			<div class='menu'>
				<nav>
					<?php 
					$args = array(
						'menu' => 'main-menu',
						
					);
					wp_nav_menu( $args );
					?>
				</nav>
			</div>
		</div>	
	</header>
	<div class="spacer">

	</div>
	