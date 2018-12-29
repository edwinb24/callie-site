<?php
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all' );
}
function my_theme_enqueue_script() {
	wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/assets/js/libs.js', array(), '1.0', 'all'  );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_script' );
