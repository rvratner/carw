<?php

/* Template Name: Redirect */

get_header();

while (have_posts()) : the_post();

	$redirectURL = get_field('redirect_url'); ?>

	<style> body { opacity: 0 !important } </style>
	<script type="text/javascript">
    	window.location = "<?php echo $redirectURL; ?>";
	</script>

<?php endwhile;

get_footer(); ?>
