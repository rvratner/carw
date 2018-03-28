<?php
/**
 * 	Template Name: Resources
*/

get_header();

	while ( have_posts() ) : the_post(); ?>

	<header id="masthead" class="site-header"<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'larger' );
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
		$color = 'natural';
		if ($i === 1) $color = 'gold'; // first row gold
		else if ($i % 2 !== 0) $color = 'gray'; // alternating natural/gray, making all even rows natural
		?>
		<section class="<?php echo $color; ?>" id="<?php echo $anchor; ?>">
			<div class="wrap text-wrap">
				<h2><?php echo $title; ?></h2>
				<?php echo $text; ?>
				<?php if (have_rows('rows')): ?>
				<div class="accordion">
				<?php while (have_rows('rows')): the_row();
					$rowTitle = get_sub_field('title');
					$rowContent = get_sub_field('content'); ?>
					<div class="accordion-section">
						<h3 class="accordion-title"><?php echo $rowTitle; ?></h3>
						<div class="accordion-content">
							<?php echo $rowContent; ?>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</section>
		<?php $i++;
	endwhile; ?>

<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>