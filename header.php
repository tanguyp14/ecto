<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/safari-pinned-tab.svg" color="#ff316f">
	<meta name="msapplication-TileColor" content="#ffeec1">
	<meta name="theme-color" content="#ffeec1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text sr-only" href="#main-content"><?php esc_html_e('Aller au contenu', 'ectobar'); ?></a>

		<header id="masthead" class="header" role="banner">
		<?php get_template_part('template-parts/navigation/primary'); ?>

			<h1>ECTO</h1>
			<div class="roll-container">
			<div class="roll back"></div>
			<div class="roll"><span>bières&thinsp;-&thinsp;cocktails&thinsp;-&thinsp;saucissons&thinsp;-&thinsp;</span><span>bières&thinsp;-&thinsp;cocktails&thinsp;-&thinsp;saucissons&thinsp;-&thinsp;</span></div>
			</div>
		</header><!-- #masthead -->
		
		<main id="main-content" role="main">