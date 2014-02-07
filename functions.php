<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Tweak p2
 */
add_action( 'init', 'korolyov_custom' );
function korolyov_custom() {
	remove_action( 'wp_enqueue_scripts', 'p2_iphone_style', 1000 );
	remove_action( 'wp_head', 'p2_hidden_sidebar_css' );
}

/**
 * Adjust custom header options.
 */
add_filter( 'p2_custom_header_args', 'korolyov_custom_header_args', 999 );

function korolyov_custom_header_args( $args ) {
	$args['width'] = 1600;
	$args['height'] = 320;
	return $args;
}


/**
 * Add the search widget to the nav
 */
function korolyov_new_nav_menu_items( $items, $args ) {
	if ( $args->theme_location == 'primary' ) {
		$homelink 	= the_widget( 'WP_Widget_Search' );
		$items 		= $items . $homelink;
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'korolyov_new_nav_menu_items', 10, 2 );


/**
 * Add js to the frontend
 */
add_action( 'wp_enqueue_scripts', 'korolyov_scripts', 999 );
function korolyov_scripts() {
	wp_enqueue_script( 'woo-p2-script', get_stylesheet_directory_uri() . '/js/script.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'fitvids', get_stylesheet_directory_uri() . '/js/fitvids.js', array( 'jquery' ), '', true );
	wp_dequeue_script( 'iphone' );
}


/**
 * Add viewport meta
 */
add_action( 'wp_head', 'korolyov_viewport_meta' );
function korolyov_viewport_meta() {
?>
	<!--  Mobile viewport scale | Disable user zooming as the layout is optimised -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
}


/**
 * Integrations
 * Include logic that integrates Korolyov with third party plugins
 */

/**
 * p2-likes
 * http://wordpress.org/plugins/p2-likes/
 */
if ( defined( 'P2LIKES_URL' ) ) {
	require_once( get_stylesheet_directory() . '/includes/integrations/p2-likes/p2-likes.php' );
}