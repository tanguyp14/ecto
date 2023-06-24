<?php

require_once 'inc-functions/cpt.php';
require_once 'inc-functions/register-menus.php';
require_once 'inc-functions/register-styles.php';
require_once 'inc-functions/register-scripts.php';
require_once 'inc-functions/acf-options-page.php';

/**
 * Essential theme supports
 * */
add_action('after_setup_theme', 'ectobar_theme_setup');
function ectobar_theme_setup()
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
function ectobar_filter_login_head()
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
add_action('login_head', 'ectobar_filter_login_head', 100);

function ectobar_new_wp_login_url()
{
	return home_url();
}
add_filter('login_headerurl', 'ectobar_new_wp_login_url');

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

add_filter('wpcf7_autop_or_not', '__return_false');

add_theme_support( 'editor-color-palette', array(
	array(
		'name' => __( 'Jaune', 'textdomain' ),
		'slug' => 'jaune',
		'color' => '#FAC840', 
	),
	array(
		'name' => __( 'Bleu_Clair', 'textdomain' ),
		'slug' => 'bleu-clair',
		'color' => '#3e67ed', 
	),
	array(
		'name' => __( 'Rose', 'textdomain' ),
		'slug' => 'rose',
		'color' => '#ff316f', 
	),
	array(
		'name' => __( 'Vert', 'textdomain' ),
		'slug' => 'vert',
		'color' => '#9BDD50', 
	),
	array(
		'name' => __( 'Blanc', 'textdomain' ),
		'slug' => 'blanc',
		'color' => '#fff', 
	),
	array(
		'name' => __( 'Bleu', 'textdomain' ),
		'slug' => 'bleu',
		'color' => '#231c4d', 
	),
) );

add_action('acf/input/admin_footer', 'prefix_acf_color_picker_from_theme_palette');
function prefix_acf_color_picker_from_theme_palette() {

    $colors = '';
    // Get colors palette registerd in theme support
	$color_palette = get_theme_support( 'editor-color-palette' );
    if ( ! empty( $color_palette ) ) {
		// Get each 'color' value (hex code)
		$colors = array_column( $color_palette[ 0 ], 'color' );
    }

    // Try to get color palette from theme.json
    if ( false === $color_palette && class_exists( 'WP_Theme_JSON_Resolver' ) ) {
        $settings = WP_Theme_JSON_Resolver::get_theme_data()->get_settings();
        if ( isset( $settings['color']['palette']['theme'] ) ) {
            $color_palette = $settings['color']['palette']['theme'];
            if ( ! empty( $color_palette ) ) {
                // Get each 'color' value (hex code)
                $colors = array_column( $color_palette, 'color' );
            }
        }
    }

    if ( ! empty( $colors ) ) {
		?>
		<script type="text/javascript">
		acf.add_filter('color_picker_args', function( args, field ){
		    // do something to args
		    args.palettes = <?php echo json_encode( $colors ); ?>;
		    // return
		    return args;
		});
		</script>
		<?php
	}

}