<?php
/**
 * Register Scripts
 */

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'ectobar_scripts' );
function ectobar_scripts() {
	wp_enqueue_script('app-scripts', get_template_directory_uri() . '/dist/js/app.js', array( 'jquery' ), false, false);
}

// Enqueue Block Editor Script
add_action('enqueue_block_editor_assets', 'ectobar_block_enqueues');
function ectobar_block_enqueues() {
    wp_enqueue_script('pix-editor-scripts', get_template_directory_uri() . '/editor.js', array('wp-edit-post', 'wp-blocks', 'wp-dom-ready'), '', true);
}