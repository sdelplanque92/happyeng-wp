<?php

/**
 * Bootstrap CDN
 *
 * @return void
 */
function enqueue_bootstrap_cdn() {
	wp_enqueue_script(
		'bootstrap-js',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);

	wp_enqueue_style(
		'bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
		array(),
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_cdn' );

/**
 * He specific menus
 *
 * @return void
 */
function he_menus() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'he_menus' );