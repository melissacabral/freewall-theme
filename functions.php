<?php 
add_theme_support('post-thumbnails' );
add_image_size('img-small', 200, 100, true );
add_image_size('img-large', 400, 200, true );
add_image_size('img-skinny', 600, 100, true );


/**
 * Queue scripts
 */
add_action('wp_enqueue_scripts', 'freewall_scripts' );
function freewall_scripts(){
	wp_enqueue_script('jquery' );

	$fw = get_stylesheet_directory_uri() . '/js/freewall.js';
	wp_enqueue_script('freewall', $fw, 'jquery');

	$custom = get_stylesheet_directory_uri() . '/js/custom.js';
	wp_enqueue_script('custom-js', $custom, 'freewall', false, true);

}