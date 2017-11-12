<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer class="site-footer">
	<div id="footer-sidebar" class="container">
		<div class="footer-widget" id="footer-sidebar1">
		<?php
			if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
			}
		?>
		</div>
		<div class="footer-widget" id="footer-sidebar2">
			<?php
				if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
				}
			?>
		</div>
		<div class="footer-widget" id="footer-sidebar3">
			<?php
				if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
				}
			?>
		</div>
		<p class="copywrite">© CARW 2017</p>
	</div>
	<img style="width:100%" src="<?php bloginfo('stylesheet_directory'); ?>/img/Footer.jpg" alt="footer image"/>
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
