<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/custom_style/custom_css.css',array('parent-style') );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    
    wp_enqueue_script( 'custom-css', get_stylesheet_directory_uri() . '/custom_style/custom_js.js');
}
//
// Your code goes below
//

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
//This snippet will remove the notice that shows the number of results.

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30 );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );