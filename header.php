<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
  <!-- Style CSS 適用 -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/common.css'); ?>">
  <?php /*?>トップページの場合<?php */?>
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">
  <?php endif; ?>
  <?php /*?>固定ページの場合<?php */?>
  <?php if ( is_page('aboutus') ): ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/aboutus.css'); ?>">
  <?php endif; ?>
  <?php if ( is_page('price') ): ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/price.css'); ?>">
  <?php endif; ?>

  <!-- font style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <!-- font style -->
  
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <header id="header" class="header">
    <div class="logo">
      <a href="/" class="logo-link">
        <img src="<?php echo get_theme_file_uri('images/2x/Logo.png'); ?>" alt="Logo" class="logo-mark">
        <img src="<?php echo get_theme_file_uri('images/SVG/Logo-font.svg'); ?>" alt="Logo type" class="logo-type">
      </a>
    </div>
    <nav class="to-pc">
      <div class="main-menu-container">
        <ul class="menu">
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/aboutus/')); ?>" class="menu-link">Makkei Baseball Academyとは</a>
          </li>
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/price/')); ?>" class="menu-link">料金プラン</a>
          </li>
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="menu-link">利用者の声</a>
          </li>
        </ul>
      </div>
      <div class="cta-button">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
          <img src="<?php echo get_theme_file_uri('images/SVG/CTA-button.svg'); ?>" alt="CTA button">
        </a>
      </div>
    </nav>
  </header>
  <!-- パンクズリスト -->
  <!-- <?php breadcrumb(); ?> -->