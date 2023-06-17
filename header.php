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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text sr-only" href="#main-content"><?php esc_html_e('Aller au contenu', 'fouetlocation'); ?></a>

		<header id="masthead" class="header" role="banner">
			<div class="container">
				<div class="site-branding">
					<?php the_custom_logo() ?>
				</div><!-- .site-branding -->

				<?php get_template_part('template-parts/navigation/primary'); ?>

		</header><!-- #masthead -->
		<?php $struct = get_field('background-site', 'option');
		extract($struct); ?>
		<main id="main-content" role="main">
			<img class="background-site" src="<?php echo $background_image['url'] ?>">
			<div class="sections_wrapper">