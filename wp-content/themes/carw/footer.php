<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

		<section class="mailing-list">
			<div class="wrap text-wrap centered">
				<h2><?php the_field('signup_title', 'options'); ?></h2>
				<p><?php the_field('mailing_list_text', 'options'); ?></p>
				<input type="text" placeholder="First Name" />
				<input type="text" placeholder="Last Name" />
				<input type="email" placeholder="Email Address *" />
				<div class="button-wrap">
					<button>Sign Up</button>
				</div>
			</div>
		</section>

	</main><!-- / end page container, begun in each page/post below header -->

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

	<div class="land">
		<div class="land-notice">
			<?php the_field('land_text', 'options'); ?>
			<p><a href="<?php the_field('land_link', 'options'); ?>"><?php the_field('land_link_title', 'options'); ?></a></p>
		</div>
	</div>

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

</body>
</html>
