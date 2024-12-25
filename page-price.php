<!-- Header  -->
<?php get_header(); ?>

<!-- Main -->
<main>
  <section id="subpage-fkv">
    <div class="subpage-fkv-container">
      <div class="subpage-fkv-container-left">
        <img src="<?php echo get_theme_file_uri('images/SVG/Price-fv.svg'); ?>" alt="About us" class="subpage-title-en">
      </div>
      <div class="subpage-fkv-container-right">
        <img src="<?php echo get_theme_file_uri('images/Price/Aboutus-fkv.jpg'); ?>" alt="About us" class="subpage-fkv-container-right-image">
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
  <section id="subpage-explanation" class="aboutus">
    <div class="obj__inner">
      <div class="container">
        <h2 class="subpage-explanation-title">
          <img src="<?php echo get_theme_file_uri('images/Price/料金について.svg'); ?>" alt="">
        </h2>
        <div class="subpage-explanation-text">
          <p class="text-center">
            グループレッスンやパーソナルレッスン、施設オープン利用、ビジター利用など、さまざまなプランをご用意しています。また、ラプソードを活用したチーム計測、複数名でのパーソナルレッスン、チームフィジカルテスト、ウエイトトレーニングのみの施設利用など、幅広いニーズに対応しております。 料金の詳細は以下のボタンからご確認いただけます。お気軽にご相談ください。
          </p>
        </div>
      </div>
      <div class="obj-right">
        <img src="<?php echo get_theme_file_uri('images/Aboutus/explanation-right.svg'); ?>" alt="">
      </div>
      <div class="obj-left">
        <img src="<?php echo get_theme_file_uri('images/Aboutus/explanation-left.svg'); ?>" alt="">
      </div>
    </div>
  </section>
  <section id="lesson">
    <div class="obj__inner">
      <div class="container">
        <div class="lesson-container diagonal-layout">
          <div class="image-left">
            <div class="image-left__inner">
              <img src="<?php echo get_theme_file_uri('images/Price/レッスンについて.JPG'); ?>" alt="レッスンについて">
            </div>
          </div>
          <div class="lesson-contents">
            <div class="lesson-contents-title">
              <h3>
                <img src="<?php echo get_theme_file_uri('images/Price/グループレッスン-タイトル.svg'); ?>" alt="レッスンタイトル">
              </h3>
            </div>
            <div class="lesson-contents-price">
              <span>月額　¥10,000</span>
            </div>
            <div class="lesson-contents-text">
              週1回の技術指導<br>
              施設24時間365日使い放題<br>
              限定グラブ販売<br>
              月1回のフィジカルテスト実施<br>
              inBodyによる体組成チェック<br>
              サプリメント飲み放題<br>
              YouTubeの限定動画閲覧可能<br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>