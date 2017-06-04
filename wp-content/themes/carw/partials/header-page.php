


	
			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description desktop"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- /brand -->


		<div class="header-widget" id="header-widget-home">
		<?php
			if(is_active_sidebar('header-widget-home')){
				dynamic_sidebar('header-widget-home');
			}
		?>
		</div>
		

		<!-- / header widget-->

	</div><!-- /container -->



	<div id="scene" class="scene">
		<div class="layer layer-1-dark" data-depth="0"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
		<div class="layer layer-1" data-depth="0.1"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
		<div class="layer layer-2-dark" data-depth="0.20"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
		<div class="layer layer-2" data-depth="0.30"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
		<div class="layer layer-3-dark" data-depth="0.50"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
		<div class="layer layer-3" data-depth="0.10"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
	</div>
	<script>

		// Pretty simple huh?
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);

	</script>

		
</header><!-- #masthead .site-header -->

<main class="main-fluid"><!-- start the page containter -->
	<nav class="site-navigation main-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
	</nav><!-- .site-navigation .main-navigation -->
	
