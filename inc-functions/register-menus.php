<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'fouetlocation_register_nav_menu' ) ) {

	function fouetlocation_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'fouetlocation' ),
	    	'footer_menu'  => __( 'Footer Menu', 'fouetlocation' ),
		) );
	}
	add_action( 'after_setup_theme', 'fouetlocation_register_nav_menu', 0 );
}