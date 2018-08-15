<?php
/**
 * 	Template Name: Groups
*/

get_header();

while ( have_posts() ) : the_post();
	$intro = get_field('intro');
	?>

	<header id="masthead" class="site-header"<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'larger' );
	echo 'style="background-image: url('. esc_url( $thumbnail[0] ) .');"';
	endif; ?>>
		<section class="text">
			<div class="wrap text-wrap centered">
				<menu>
					<h2><?php the_title(); ?></h2>
					<?php if ($intro) echo $intro; ?>
					<ul class="page-links"><?php while (have_rows('sections')): the_row();
						$title = get_sub_field('section_title');
						$anchor = get_sub_field('section_anchor'); ?>
						<li><a href="#<?php echo $anchor; ?>"><?php echo $title; ?></a></li>
					<?php endwhile; ?></ul>
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
		$colorize = get_sub_field('colorize_image');
		$color = 'natural';
		if ($i % 2 === 0) $color = 'gray'; // alternating natural/gray, making all even rows natural
		?>
		<section class="<?php echo $color; ?>" id="<?php echo $anchor; ?>">
			<div class="wrap text-wrap">
				<h2><?php echo $title; ?></h2>
				<?php if ($text) echo $text; ?>
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