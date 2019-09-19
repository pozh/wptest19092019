<?php

// Enqueue Stylesheets
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/styles/main.css' );
});
