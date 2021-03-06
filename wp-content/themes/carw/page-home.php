<?php
/**
 * 	Template Name: Home Page
*/

get_header();

	while ( have_posts() ) : the_post();


	// get custom fields
	$heroBack = get_field('image_back');
	$heroMid = get_field('image_middle');
	$heroFront = get_field('image_front');
	$ctaTitle = get_field('cta_title');
	$ctaLink = get_field('cta_link');
	$ctaCopy = get_field('cta_copy');
	$carwBrief = get_field('carw_brief');
	$buttonLink = get_field('button_link');
	$fullScreenImage = get_field('full_screen_image');
	$getInvolvedTitle = get_field('get_involved_title');
	$getInvolvedText = get_field('get_involved_text');
	?>

	<header id="masthead" class="site-header homepage"<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'larger' );
	echo 'style="background-image: url('. esc_url( $thumbnail[0] ) .');"';
	endif; ?>>

		<div class="container">
			<?php if ($ctaTitle && $ctaLink): ?>
			<div class="header-widget" id="header-widget-home">
				<h3><?php echo $ctaTitle; ?></h3>
				<p><?php if ($ctaCopy) echo $ctaCopy; ?></p>
				<?php if ($ctaLink): ?>
				<p><a href="<?php echo $ctaLink['url']; ?>"><?php echo $ctaLink['title']; ?></a></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div><!-- /container -->

		<div id="scene" class="scene">
			<?php // if ($heroBack): ?>
			<div class="layer layer-1-dark" data-depth="0.15"><div style="background-image: url(<?php echo $heroBack['sizes']['larger'] ?>);"></div></div>
			<div class="layer layer-1" data-depth="0.1"><div style="background-image: url(<?php echo $heroBack['sizes']['larger']; ?>);"></div></div>
			<div class="layer layer-2-dark" data-depth="0.25"><div style="background-image: url(<?php echo $heroMid['sizes']['larger']; ?>);"></div></div>
			<div class="layer layer-2" data-depth="0.2"><div style="background-image: url(<?php echo $heroMid['sizes']['larger']; ?>)"></div></div>
			<div class="layer layer-3-dark" data-depth="0.35"><div style="background-image: url(<?php echo $heroFront['sizes']['larger']; ?>);"></div></div>
			<div class="layer layer-3" data-depth="0.3"><div style="background-image: url(<?php echo $heroFront['sizes']['larger']; ?>)"></div></div>
			<?php/*
 else: ?>
			<div class="layer layer-1-dark" data-depth="0"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
			<div class="layer layer-1" data-depth="0.1"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
			<div class="layer layer-2-dark" data-depth="0.20"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
			<div class="layer layer-2" data-depth="0.30"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
			<div class="layer layer-3-dark" data-depth="0.50"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
			<div class="layer layer-3" data-depth="0.10"><div style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);"></div></div>
			<?php endif;
*/ ?>
		</div>
		<script>

			// Pretty simple huh?
			var scene = document.getElementById('scene');
			var parallax = new Parallax(scene);

		</script>
	</header><!-- #masthead .site-header -->

		<section class="quote gold">
			<div class="wrap text-wrap centered">
				<h2><?php echo $carwBrief; ?></h2>
				<?php if ($buttonLink): ?>
				<div class="button-wrap">
					<a href="<?php echo $buttonLink['url']; ?>"><?php echo $buttonLink['title']; ?></a>
				</div>
				<?php endif; ?>
			</div>
		</section>

		<section class="full-image">
			<img src="<?php echo $fullScreenImage['sizes']['larger']; ?>" />
		</section>

		<section class="text">
			<div class="wrap text-wrap centered">
				<h2><?php echo $getInvolvedTitle; ?></h2>
				<?php echo $getInvolvedText; ?>
				<?php $getInvolvedURL = get_the_permalink( 10 ); ?>
				<ul class="page-links"><?php while (have_rows('sections', 10)): the_row();
					$title = get_sub_field('section_title');
					$anchor = get_sub_field('section_anchor'); ?>
					<li><a href="<?php echo $getInvolvedURL.'#'.$anchor; ?>"><?php echo $title; ?></a></li>
				<?php endwhile; ?></ul>
			</div>
		</section>

<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>