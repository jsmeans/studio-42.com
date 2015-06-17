<header class="header-main">

		<video class="header-vid" preload="none" loop autoplay>
			    <source id="mp4" src="http://Studio-42.com/wp-content/themes/studio-42/vid/iss.mp4">
		    </video>
		
		<section class="logo-wrapper">

	        <div id="logo">
	          <div id="dot1" alt="Studio 42 Logo" class="dot1"></div>
	          <div id="dot2" alt="Studio 42 Logo" class="dot2"></div>
	          <div id="dot3" alt="Studio 42 Logo" class="dot3"></div>
	          <div id="dot4" alt="Studio 42 Logo" class="dot4"></div>
	          <div id="dot5" alt="Studio 42 Logo" class="dot5"><img src="<?php bloginfo('template_directory'); ?>/img/power.png" class="start" style="opacity:0;"></div>
	          <div id="dot6" alt="Studio 42 Logo" class="dot6"><img src="<?php bloginfo('template_directory'); ?>/img/splat.png" class="splat"></div>
	          <img src="<?php bloginfo('template_directory'); ?>/img/logoname.png" id="dot7" alt="Studio 42 Logo" class="dot7">
	        </div>

	    </section>

	    <section class="logo-responsive" >
			<img src="<?php bloginfo('template_directory'); ?>/img/logosquare.png">
	    </section>

	     

	      <div class="slider">
        <div class="gamer" style="display:none;">
          <button class="up"></button>
          <button class="down"></button>
          <button class="left"></buton>
          <button class="right"></button>
      
          <div class="screen">
            <div class="marvin"></div>
            <div class="overlay"></div>
          </div>
        </div>
      </div>
      <div class="main-nav">
			<nav>
				<?php 
				$args = array(
					'menu' => 'main-menu',
					
				);
				wp_nav_menu( $args );
				?>
			</nav>
		</div>
	</header>