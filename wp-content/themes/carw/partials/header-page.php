

			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description desktop"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- /brand -->

		<div class="header-widget" id="header-widget-home">
				<?php the_meta(); ?>

		</div>
		

		<!-- / header widget-->

	</div><!-- /container -->

<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image' ); ?>

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

		