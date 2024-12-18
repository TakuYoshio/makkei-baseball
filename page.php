<?php get_header(); ?>

<!-- イメージヘッダー -->
<div class="head-img">
<?php echo get_the_post_thumbnail($post->ID, 'img-head'); ?>
</div>
<!-- / イメージヘッダー -->

<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="pagetitle  mincho"><?php the_title(); ?></h1>

<div class="page-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>

<?php endwhile; else: ?>
<div class="kekka-nowords"><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></div>
<?php endif; ?>

</div>
<!-- / メインwrap -->

<?php get_footer(); ?>