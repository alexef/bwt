<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); ?></title>
    <meta type="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	  <a class="brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	  <div class="nav-collapse collapse">
		<?php
			wp_nav_menu(array('menu_class'=>'nav', 'menu'=>'main_nav', 'container'=>false
					)
			); 
		?>
	  </div>
	</div>
	</div>
  </div>

  <div class="container">
