<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it

while ( have_posts() ) : the_post();
?>

	<header id="masthead" class="site-header"<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image' );
	echo 'style="background-image: url('. esc_url( $thumbnail[0] ) .');"';
	endif; ?>></header>

	<section>
		<div class="wrap text-wrap">
			<h2><?php the_title(); ?></h2>

			<div class="the-content">
				<?php the_content();
				// This call the main content of the page, the stuff in the main text box while composing.
				// This will wrap everything in p tags
				?>
			</div><!-- the-content -->
		</div>
	</section>

<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>