<?php
function trabajando_site_theme_enqueue_styles() {
    wp_enqueue_style( 'custom_styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all' );
}
function trabajando_site_theme_enqueue_script() {
	 wp_enqueue_script( 'custom_script', get_stylesheet_directory_uri() . '/assets/js/libs.js', array(), '1.0', 'all'  );
}

add_action( 'wp_enqueue_scripts', 'trabajando_site_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'trabajando_site_theme_enqueue_script' );

function trabajando_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary','Primary Header Navigation');
}

//init make the function run before theme setup, so before styles & scripts
add_action('init','trabajando_theme_setup');
