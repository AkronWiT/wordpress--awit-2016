<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" />
  <link href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="icon" type="image/png" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- HEADER -->
<div class="header clearfix">
	<div class="content">
    <!-- AWIT LOGO -->
		<a href="/" class="logo"><h1>Akron Women In Tech</h1></a>
    <!-- MAIN NAVIGATION -->
    <?php wp_nav_menu(array('menu' => 'main', 'menu_class' => 'menu--main')); ?>
	</div>
</div>
