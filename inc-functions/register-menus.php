<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'ectobar_register_nav_menu' ) ) {

	function ectobar_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'ectobar' ),
	    	'footer_menu'  => __( 'Footer Menu', 'ectobar' ),
		) );
	}
	add_action( 'after_setup_theme', 'ectobar_register_nav_menu', 0 );
}