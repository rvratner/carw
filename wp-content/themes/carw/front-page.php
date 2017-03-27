<?php 
/**
 * 	Template Name: Home Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/

// https://codex.wordpress.org/Creating_a_Static_Front_Page

get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main">
			<?php if ( have_posts() ) : 
			// Do we have any posts/pages in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>

					<article class="front-page">
										
						<div class="the-content">
							<?php the_content(); 
							// This call the main content of the page, the stuff in the main text box while composing.
							// This will wrap everything in paragraph tags
							?>
						</div><!-- the-content -->
						<div class="take-action">
							<?php

								// The Query
								$query1 = new WP_Query( array( 'category_name' => 'front-page-take-action' ) );

								if ( $query1->have_posts() ) {
									// The Loop
									while ( $query1->have_posts() ) {
										$query1->the_post();
										echo '<li>' . get_the_title() . '</li>';
									}
									
									/* Restore original Post Data 
									 * NB: Because we are using new WP_Query we aren't stomping on the 
									 * original $wp_query and it does not need to be reset with 
									 * wp_reset_query(). We just need to set the post data back up with
									 * wp_reset_postdata().
									 */
									wp_reset_postdata();
								}
							?>
						</div>

						<div class="get-involved">
							<?php
								/* The 2nd Query (without global var) */
								$query2 = new WP_Query( array( 'category_name' => 'front-page-get-involved' ) );

								if ( $query2->have_posts() ) {
									// The 2nd Loop
									while ( $query2->have_posts() ) {
										$query2->the_post();
										echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
									}

									// Restore original Post Data
									wp_reset_postdata();
								}
							?>
						</div>

						<div class="learn-more">
							<?php
								/* The 2nd Query (without global var) */
								$query2 = new WP_Query( array( 'category_name' => 'front-page-learn-more' ) );

								if ( $query2->have_posts() ) {
									// The 2nd Loop
									while ( $query2->have_posts() ) {
										$query2->the_post();
										echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
									}

									// Restore original Post Data
									wp_reset_postdata();
								}
							?>
						</div>
						
						<div class="front-page-general">
							<?php
								/* The 2nd Query (without global var) */
								$query2 = new WP_Query( array( 'category_name' => 'front-page' ) );

								if ( $query2->have_posts() ) {
									// The 2nd Loop
									while ( $query2->have_posts() ) {
										$query2->the_post();
										echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
									}

									// Restore original Post Data
									wp_reset_postdata();
								}
							?>
						</div>

					</article>

				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>