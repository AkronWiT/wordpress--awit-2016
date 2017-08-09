<?php

////////////////////////////////////////////////////////////////////////////////
// Add support for Sidebars
////////////////////////////////////////////////////////////////////////////////

register_sidebar();


////////////////////////////////////////////////////////////////////////////////
// Add support for Menus
////////////////////////////////////////////////////////////////////////////////

add_theme_support('menus');


////////////////////////////////////////////////////////////////////////////////
// Post Thumbnails!
////////////////////////////////////////////////////////////////////////////////

add_theme_support( 'post-thumbnails', array( 'post' ) );


////////////////////////////////////////////////////////////////////////////////
// Replace Excerpt End
////////////////////////////////////////////////////////////////////////////////

function custom_excerpt_more( $more ) {
return ' ...'; // nicer without the brackets, but not very useful.
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );


////////////////////////////////////////////////////////////////////////////////
// Custom Excerpt Length
////////////////////////////////////////////////////////////////////////////////

function custom_excerpt_length( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


////////////////////////////////////////////////////////////////////////////////
// WooCommerce Support
////////////////////////////////////////////////////////////////////////////////

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
