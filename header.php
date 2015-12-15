<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="app">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js"><</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-controller="MainCtrl">
<div id="page" class="container-fluid">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rohan-portfolio' ); ?></a>

<div id="headerWrapper">
	<header id="masthead" class="site-header" role="banner">
		<h1>
			<a href="<?php bloginfo('url'); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<p>
			<?php bloginfo('description'); ?>
		</p>
		<?php wp_nav_menu('primary'); ?>
	</header><!-- #masthead -->
</div><!-- #headerWrapper -->

<div id="content" class="container-fluid">
