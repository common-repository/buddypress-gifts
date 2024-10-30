<?php

/**
 * NOTE: You should always use the wp_enqueue_script() and wp_enqueue_style() functions to include
 * javascript and css files.
 */

/**
 * bp_gifts_add_js()
 *
 * This function will enqueue the components javascript file, so that you can make
 * use of any javascript you bundle with your component within your interface screens.
 */
function bp_gifts_add_js() {
	global $bp;

	if ( $bp->current_component == $bp->gifts->slug ) {

		wp_enqueue_script( 'bpgift-jquery', plugins_url('/buddypress-gifts/includes/js/jquery-1.2.3.pack.js'));
		wp_enqueue_script( 'bpgift-general', plugins_url( '/buddypress-gifts/includes/js/general.js' ), 'jquery' );
		wp_enqueue_script( 'bpgift-jcarousel', plugins_url( '/buddypress-gifts/includes/js/jquery.jcarousel.pack.js' ) );
		
		wp_enqueue_style( 'bpgift-jcarousel', plugins_url( '/buddypress-gifts/includes/templates/css/jquery.jcarousel.css' ) );
		wp_enqueue_style( 'bpgift-jcarousel-skin', plugins_url( '/buddypress-gifts/includes/templates/css/skin.css' ) );

	}
}
add_action( 'template_redirect', 'bp_gifts_add_js', 1 );

?>