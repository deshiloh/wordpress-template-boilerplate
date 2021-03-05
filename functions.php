<?php
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main_style', get_template_directory_uri().'/dist/css/app.css');

	wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/app.js', [], 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action('after_setup_theme','theme_setup');