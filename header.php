<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo( 'charset' ); ?> />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php wp_title( ' :: ', true, 'right'); ?> <?php echo bloginfo('name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">

	<?php wp_head();  ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />

<!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo home_url(); ?>">
			<?php bloginfo('name'); ?>
		</a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<?php 
		wp_nav_menu( array( 
			'theme_location' => 'main',
			'container' => 'nav', 
		)); ?>
		
	</header>