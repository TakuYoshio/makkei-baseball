<?php get_header(); ?>

<!-- トップヘッダー画像 -->
<div class="top-header">
<img src="<?php echo (get_option('slideshow1')) ? get_option('slideshow1') : get_template_directory_uri() . '/images/main_01.jpg' ?>" alt="<?php bloginfo('name'); ?>" />
</div>
<!-- / トップヘッダー画像 -->


<!-- ウィジェットエリア（トップページヘッダー画像下（大）） -->
<div class="row">
<div class="top-wide-contents">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページヘッダー画像下（大）') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（トップページヘッダー画像下（大）） -->


<!-- 全体warapper -->
<div class="wrapper">


<!-- メインwrap -->
<div id="main">

<!-- コンテンツブロック -->
<div class="row">

<!-- ウィジェットエリア（トップページ２列枠） -->
<div class="row">
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ２列枠（左）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ２列枠（右）') ) : ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- / ウィジェットエリア（トップページ２列枠） -->


<!-- ウィジェットエリア（トップページ下部（大）） -->
<div class="row">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ下部（大）') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（トップページ下部（大）） -->


</div>
<!-- / コンテンツブロック -->


</div>
<!-- / メインwrap -->


<?php get_footer(); ?>