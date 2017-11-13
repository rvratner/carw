<?php
/**
 * 	Template Name: Get Involved
*/

get_header();

	while ( have_posts() ) : the_post(); ?>

	<header id="masthead" class="site-header"<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image' );
	echo 'style="background-image: url('. esc_url( $thumbnail[0] ) .');"';
	endif; ?>>
		<section class="text">
			<div class="wrap text-wrap centered">
				<menu>
					<h2><?php the_title(); ?></h2>
					<p><?php while (have_rows('sections')): the_row();
						$title = get_sub_field('section_title');
						$anchor = get_sub_field('section_anchor'); ?>
						<a href="#<?php echo $anchor; ?>"><?php echo $title; ?></a>
					<?php endwhile; ?></p>
				</menu>
			</div>
		</section>
	</header>

	<?php $i = 1; // start a counter
	while (have_rows('sections')): the_row();
		$title = get_sub_field('section_title');
		$anchor = get_sub_field('section_anchor');
		$text = get_sub_field('section_text');
		$image = get_sub_field('section_image');
		$buttonText = get_sub_field('section_button_text');
		$buttonLink = get_sub_field('section_button_link');
		$color = 'natural';
		if ($i === 1) $color = 'gold';
		else if ($i % 2 !== 0) $color = 'gray';
		?>
		<section class="text-image <?php echo $color; ?>" id="<?php echo $anchor; ?>">
			<div class="wrap">
				<div class="content-wrap">
					<div class="section-content">
						<h2><?php echo $title; ?></h2>
						<?php echo $text; ?>
						<div class="button-wrap">
							<a href="<?php echo $buttonLink; ?>"><?php echo $buttonText; ?></a>
						</div>
					</div>
					<div class="section-image">
						<img src="<?php echo $image['sizes']['small']; ?>" />
					</div>
				</div>
			</div>
		</section>
		<?php $i++;
	endwhile; ?>

<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>