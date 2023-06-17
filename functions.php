<?php

require_once 'inc-functions/cpt.php';
require_once 'inc-functions/register-menus.php';
require_once 'inc-functions/register-styles.php';
require_once 'inc-functions/register-scripts.php';
require_once 'inc-functions/acf-options-page.php';
require_once 'inc-functions/ajax-filter-type.php';

/**
 * Essential theme supports
 * */
add_action('after_setup_theme', 'fouetlocation_theme_setup');
function fouetlocation_theme_setup()
{
	/** tag-title **/
	add_theme_support('title-tag');

	/** post-thumnails **/
	add_theme_support('post-thumbnails');

	/** editor-styles **/
	add_theme_support('editor-styles');

	/** editor-styles-css **/
	add_editor_style('editor.css');

	/** Load block styles on frontend **/
	add_theme_support('wp-block-styles');

	/** Align wide **/
	add_theme_support('align-wide');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

/**
 * Add custom logo for admin login screen and link to homepage
 */
function fouetlocation_filter_login_head()
{

	if (has_custom_logo()) {
		$image = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
?>
		<style type="text/css">
			.login h1 a {
				background-image: url(<?php echo esc_url($image[0]); ?>);
				-webkit-background-size: contain;
				background-size: contain;
				height: 80px;
				width: 200px;
			}
		</style>
<?php
	}
}
add_action('login_head', 'fouetlocation_filter_login_head', 100);

function fouetlocation_new_wp_login_url()
{
	return home_url();
}
add_filter('login_headerurl', 'fouetlocation_new_wp_login_url');

function format_value($value)
{
	$formatted_value = strtolower(str_replace(' ', '_', $value));
	return $formatted_value;
}

function reformat_value($value)
{
	$formatted_value = ucfirst(str_replace('_', ' ', $value));
	return $formatted_value;
}


function include_card_with_id($id)
{
	get_template_part_custom('card/card.php', $id);
}


function get_template_part_custom($template_name, $id)
{
	ob_start();
	$template_path = get_template_directory() . '/template-parts/' . $template_name;
	if (file_exists($template_path)) {
		include $template_path;
	}
	ob_end_flush();
}

add_filter('wpcf7_autop_or_not', '__return_false');