<?php

// Enqueue Stylesheets
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/styles/main.css' );
});

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );       // No hard-coded <title> in the doc's head, WordPress handles it for us.
	add_theme_support( 'post-thumbnails' ); // Enable Post Thumbnails on posts and pages.
	register_nav_menus(
		array(
			'header-menu' => __( 'Main' ),
		)
	);
} );
