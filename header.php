<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

	<?php wp_head();  ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />

<!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="home">
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo home_url(); ?>">
			<?php bloginfo('name'); ?>
		</a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		
	</header>