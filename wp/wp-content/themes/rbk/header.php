<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo get_bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<style>
		<?php if ( get_theme_mod( 'theme_background_image' ) ) : ?>
			body {
				background-image: url(<?php echo get_theme_mod( 'theme_background_image' ); ?>);		
			}
		<?php endif; ?>
	</style>
</head>
<body>
<div id="page-container">
<header id="header">
	<div class="wrap">
		<h1 class="site-title">
			<a href="<?php echo home_url(); ?>">
				<?php echo get_bloginfo('name'); ?>
			</a>
		</h1>
<!-- 		<nav id="primary-navigation">
			<div id="menu-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul id="menu-main">
				<?php wp_list_pages("title_li="); ?>
			</ul>
		</nav> -->
	</div>
</header>
<div id="content">
