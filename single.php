<!-- Header -->
<?php get_header(); ?>

<main>
  <section id="subpage-fkv">
    <div class="subpage-fkv-container">
      <div class="subpage-fkv-container-left">
        <img src="<?php echo get_theme_file_uri('images/SVG/Blog-fv.svg'); ?>" alt="Blog" class="subpage-title-en">
      </div>
      <div class="subpage-fkv-container-right">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-fkv.jpg'); ?>" alt="Blog" class="subpage-fkv-container-right-image">
        <img src="<?php echo get_theme_file_uri('images/SVG/kasou-academy-name.svg'); ?>" alt="name" class="subpage-fkv-container-right-name">
      </div>
    </div>
    <div class="subpage-fkv-text">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <section id="blog-content">
    <div class="obj__inner">
      <div class="container">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          
          <!-- カテゴリー表示 -->
          <p>カテゴリー：<?php the_category(" / "); ?></p>
          
          <!-- タグ表示 -->
          <p>タグ：<?php the_tags('', ' / ', ''); ?></p>
          
          <!-- アーカイブ（投稿日）表示 -->
          <p>投稿日：<?php echo get_the_date(); ?></p>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>
