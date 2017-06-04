
		</div><!-- /brand -->

		

		<div class="header-widget" id="header-sidebar2">
			<?php
				if(is_active_sidebar('header-widget-about')){
					dynamic_sidebar('header-widget-about');
				}
			?>
		</div>

		<!-- / header widget-->

	</div><!-- /container -->


		
</header><!-- #masthead .site-header -->

<main class="main-fluid"><!-- start the page containter -->
	<nav class="site-navigation main-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
	</nav><!-- .site-navigation .main-navigation -->
	
