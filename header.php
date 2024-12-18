<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/responsive.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1');
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ヘッダー -->
<header id="header">

<!-- ヘッダー中身 -->    
<div class="header-inner">

<!-- ロゴ -->
<?php if ( is_home() || is_front_page() ) : ?>
<!-- トップページだけ -->
<h1 class="logo">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() .'/images/logo.gif' ?>" alt="<?php bloginfo('name'); ?>" /></a>
</h1>
<?php else : ?>
<!-- トップページ以外 -->
<div class="logo">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() .'/images/logo.gif' ?>" alt="<?php bloginfo('name'); ?>" /></a>
</div>
<?php endif; ?>
<!-- / ロゴ -->

</div>    
<!-- / ヘッダー中身 -->    

</header>
<!-- / ヘッダー -->  
<div class="clear"></div>

<!-- トップナビゲーション -->
<nav id="nav" class="main-navigation  mincho" role="navigation">
<?php wp_nav_menu( array( 'menu' => 'topnav', 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</nav>

<!-- / トップナビゲーション -->
<div class="clear"></div>  