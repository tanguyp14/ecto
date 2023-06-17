<?php
/**
 * Register Styles
 */

// Enqueue Styles
add_action( 'wp_enqueue_scripts', 'fouetlocation_styles' );
function fouetlocation_styles() {
	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
	wp_enqueue_style( 'app-styles',  get_template_directory_uri() . '/dist/css/main.css' );
}

// Enqueue Admin Styles
add_action( 'admin_enqueue_scripts', 'fouetlocation_admin_styles' );
function fouetlocation_admin_styles() {
	wp_enqueue_style( 'admin-styles', get_template_directory_uri() . '/assets/css/admin.css', false, '1.0.0' );
}

// Enqueue Block Editor styles
add_action('enqueue_block_editor_assets', 'fouetlocation_editor_styles');
function fouetlocation_editor_styles() {
    wp_enqueue_style('fouetlocation-editor-styles', get_template_directory_uri() . '/editor.css', array('wp-edit-blocks'));
}