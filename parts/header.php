<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en">
  <head>
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


  <?php if(is_front_page() ) { ?>
  <header>
  <?php } else { ?>
  <header class="headerSmall">
  <?php } ?>

    <div class="co12">

      <nav class="clearfix">
        <a href="#" id="pull">Hello World</a>
        <?php wp_nav_menu( array('menu' => 'Primary', 'container' => '', 'menu_class' => 'clearfix', 'menu_id' => 'wpNav', )); ?>
      </nav>

    </div>

  </header>