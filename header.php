<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <title><?php bloginfo( 'name' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" />
  <link href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="icon" type="image/png" />

  <?php wp_head(); ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64003940-1', 'auto');
    ga('send', 'pageview');
  </script>
	
  <!--<script src="<?php bloginfo('template_url'); ?>/js/meetup.js"></script>-->
	<script type="text/javascript" defer src="https://donorbox.org/install-popup-button.js"></script>
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
	
		