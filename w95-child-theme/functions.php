<?php
add_action( 'wp_enqueue_scripts', 'w95_enqueue_styles' );
function w95_enqueue_styles() {
	$parent_style = 'w95-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'w95-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}