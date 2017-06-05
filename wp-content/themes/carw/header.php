<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
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

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>

<?php if ( is_front_page() ) : ?>


	<header id="masthead" class="site-header homepage">

	<div class="container">
		<div id="brand">
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"> 
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="logo CARW Coalition for Anti Racist Whites" />
				</a>
			</h1>

	<?php get_template_part( 'partials/header', 'page' ); ?>
	<?php $description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description mobile"><?php echo $description; ?></p>
		<?php endif; ?>

<?php else: ?>
	<?php if ( has_post_thumbnail() ) :
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image' );
?>
	<header id="masthead" class="site-header" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">

	<?php else: ?>
	<header id="masthead" class="site-header">

	<?php endif; ?>

	<div class="container">
		<div id="brand">
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"> 
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="logo CARW Coalition for Anti Racist Whites" />
				</a>
			</h1>


	<?php get_template_part( 'partials/general', 'page' ); ?>

<?php endif; ?>
</header><!-- #masthead .site-header -->

<main class="main-fluid"><!-- start the page containter -->
	<nav class="site-navigation main-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
	</nav><!-- .site-navigation .main-navigation -->
	

