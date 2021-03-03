<?php
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main_style', get_template_directory_uri().'/dist/css/app.css');

	wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/app.js', [], 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );