<?php
/**
 * 	Template Name: About
*/

get_header();

while ( have_posts() ) : the_post();
	$visionTitle = get_field('vision_title');
	$visionCopy = get_field('vision_copy');
	?>

	<header id="masthead" class="site-header"<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'larger' );
	echo 'style="background-image: url('. esc_url( $thumbnail[0] ) .');"';
	endif; ?>></header>


		<section class="gold page-intro">
			<div class="wrap centered">
				<menu>
					<h2><?php the_title(); ?></h2>
					<ul class="page-links"><?php while (have_rows('sections')): the_row();
						$title = get_sub_field('section_title');
						$anchor = get_sub_field('section_anchor'); ?>
						<li><a href="#<?php echo $anchor; ?>"><?php echo $title; ?></a></li>
					<?php endwhile; ?></ul>
				</menu>
			</div>
		</section>
	
	<!--
	<section class="gold" id="vision">
		<div class="wrap text-wrap centered">
			<h2><?php echo $visionTitle; ?></h2>
			<?php echo $visionCopy; ?>
		</div>
	</section>
	-->

	<?php $i = 1; // start a counter
	while (have_rows('sections')): the_row();
		$title = get_sub_field('section_title');
		$intro = get_sub_field('section_intro');
		$image = get_sub_field('section_image');
		$colorize = get_sub_field('colorize_image');
		$anchor = get_sub_field('section_anchor');
		$color = 'natural';
		if ($i % 2 === 0) $color = 'gray'; // alternating natural/gray, making all even rows natural
		// if ($i === 1) $color = 'gold'; // first row gold
		// else if ($i % 2 !== 0) $color = 'gray'; // alternating natural/gray, making all even rows natural
		?>
		<section class="<?php echo $color; ?>" id="<?php echo $anchor; ?>">
			<div class="wrap text-wrap">
				<h2><?php echo $title; ?></h2>
				<?php if ($intro) echo $intro; ?>
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
		<?php if ($image): ?>
		<section class="natural full-image">
			<img src="<?php echo $image['sizes']['larger']; ?>"<?php if ($colorize) echo ' class="colorized"'; ?> />
		</section>
		<?php endif;
		$i++;
	endwhile;


endwhile; // OK, let's stop the page loop once we've displayed it

get_footer(); // This fxn gets the footer.php file and renders it ?>