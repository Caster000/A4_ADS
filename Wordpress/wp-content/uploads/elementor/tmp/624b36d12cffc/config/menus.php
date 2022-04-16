<?php
/**
 * Menus configuration.
 *
 * @package Interium
 */

add_action( 'after_setup_theme', 'interium_register_menus', 5 );
function interium_register_menus() {

	register_nav_menus( array(
		'main'   => esc_html__( 'Main', 'interium' ),
		'footer' => esc_html__( 'Footer', 'interium' ),
		'social' => esc_html__( 'Social', 'interium' ),
	) );
}
