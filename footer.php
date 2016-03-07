		</div>
		<footer>
			<div class="footerTop">
				<div class="footerWidgetWrapper">
					<?php dynamic_sidebar('footer-widget-area'); ?>	
				</div><!--/.footerWidgetWrapper -->
			</div><!-- /.footerTop -->
		 	<div class="footerBottom">
			 	<div class="copyright">
			 	  <p>&copy; Unmi <?php echo date('Y'); ?></p>
			 	</div> <!-- /Copyright -->
		  	 </div> <!-- /Footer Bottom -->
		</footer>
	</div>
	<script>
	// scripts.js, plugins.js and jquery are enqueued in functions.php
	/* Google Analytics! */
	 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
	 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	 s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>

	<?php wp_footer(); ?>
</body>
</html>