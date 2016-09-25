<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- HEADER -->
<div class="header clearfix">
	<div class="content">
    <!-- AWIT LOGO -->
		<h1 class="logo"><a href="/">Akron Women In Tech</a></h1>
    <!-- MAIN NAVIGATION -->
    <?php wp_nav_menu(array('menu' => 'main', 'menu_class' => 'menu--main')); ?>
	</div>
</div>
