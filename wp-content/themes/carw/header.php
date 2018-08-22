<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" /> 
<meta name="viewport" content="width=device-width" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/fb-image.jpg" />
<meta property="og:description" content="<?php echo get_field('carw_brief', 46); ?>" />
<title>
	<?php bloginfo('name'); if (!is_front_page()) echo ' |'; ?>
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file,
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head();
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website.
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions.
// Move it if you like, but I would keep it around.
?>

</head>

<body <?php body_class(); ?>>

	<h1 class="logo<?php if (!is_front_page()) echo ' ready fixed'; ?>">
	<?php if (!is_front_page()) echo '<a href="'.site_url().'">'; ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo1.svg" alt="logo CARW Coalition for Anti Racist Whites" />
	<?php if (!is_front_page()) echo '</a>'; ?>
	</h1>

	<nav class="site-navigation main-navigation<?php if (is_front_page()) echo ' no-shadow'; ?>">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>

		<div class="donate-button">
			<a href="<?php the_field('donate_url', 'options'); ?>" target="_blanke">Donate</a>
		</div>
	</nav><!-- .site-navigation .main-navigation -->

	<div class="menu-button" id="menu-button">
		<i></i>
		<i></i>
		<i></i>
	</div>
