		

		<footer>

		<hr>

		<div class="footer-button container">
			<p>Extra Info</p>

		</div>

			<div class="footer-slider">
			<div class="grid_12 container clearfix">
				<div class="grid_4 footer_left">
				<?php if(dynamic_sidebar('footer_left')): ?>
					<?php else: ?>

					<h4>Twitter</h4>
					<p>Install the TwiGet Plugin for the left footer</p>
				<?php endif; ?>


				</div>
				<div class="grid_4 footer_middle">
				<?php if(dynamic_sidebar('footer_middle')): ?>
					<?php else: ?>
					<h4>Facebook</h4>
					<?php endif; ?>
				</div>
				<div class="grid_4 omega right-footer">
				<?php if(dynamic_sidebar('footer_right')): ?>
					<?php else: ?>
					<h4>Contact</h4>
					<?php endif; ?>
				</div>
			</div>
			</div>
			<div class="footer-bottom">

			<div id="copyright" class="container">
				<p>&copy;<?php echo date('Y'); ?> <a href="#"> - Studio 42</a></p>
			</div>

			</div>
		</footer>

		<?php wp_footer(); ?>
		
   
	</body>
</html>

