<?php 
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
/**
 * Theme Init 
 */
add_action('init', 'freewall_init' );
function freewall_init(){
	add_theme_support('post-thumbnails' );
	add_image_size('img-small', 200, 200, true );
	add_image_size('img-large', 400, 300, true );
	add_image_size('img-skinny', 600, 100, true );
	register_nav_menus( array( 'main' => 'Main Menu' ) );		
	if ( ! isset( $content_width ) ) $content_width = 1024;
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "custom-background" );
	add_editor_style();	
}
add_action( 'widgets_init', 'freewall_sidebars' );
function freewall_sidebars(){
	register_sidebar( array(
		'name'          => 'Footer Widgets',
		'id'            => 'footer-widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
		)
	);
}