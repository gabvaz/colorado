<?php

function enqueue_styles() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom-styles.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');

function setup_theme() 
{
	add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
			)
		);
}

add_action( 'after_setup_theme', 'setup_theme' );

/* 
 * add component exemple
include( get_stylesheet_directory() . '/components/home-banner.php' );
add_shortcode( 'home_banner', 'home_banner' );
*/

