<?php
/**
 * Theme Functions.
 */

/**
 * Theme Setup.
 */
function tuts_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tuts_setup' );

/**
 * Theme Scripts and Styles.
 */
function tuts_scripts() {
	wp_enqueue_style( 'tuts-style', get_stylesheet_uri(), [], '0.1.0' );
}
add_action( 'wp_enqueue_scripts', 'tuts_scripts' );

/**
 * Register.
 */
function tuts_register() {
	register_nav_menu( 'primary', 'Navigasi Utama' );
}
add_action( 'init', 'tuts_register' );