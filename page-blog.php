<!-- Header  -->
<?php get_header(); ?>

<!-- Main -->
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
  <section id="subpage-explanation">
    <div class="obj__inner">
      <div class="container">
        <h2 class="subpage-explanation-title">
          <img src="<?php echo get_theme_file_uri('images/Blog/ブログ-title.svg'); ?>" alt="">
        </h2>
        <div class="subpage-explanation-text">
          <p class="text-center">
            施設で行っている指導をテキスト化したものになります。<br>
            特殊変化球の取得・練習ギアの使い方・栄養と睡眠の考え方など。<br>
            このブログ内容を元にパーソナルレッスンを行うことも可能です。
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
  <section id="blog-contents">
    <div class="obj_inner">
      <div class="container">
        <div class="article-container">
          <div class="article-container-tab">
            <ul>
              <li class="article-container-tab-item">すべて</li>
              <li class="article-container-tab-item">投球理論</li>
              <li class="article-container-tab-item">変化球</li>
              <li class="article-container-tab-item">打撃理論</li>
              <li class="article-container-tab-item">食事とトレーニング</li>
            </ul>
          </div>
          <div class="article-container-contents">
            <ul>
              <li class="article-container-contents-item">
                <div class="article-container-contents-item-thumbnail">
                  <img src="<?php echo get_theme_file_uri('images/Blog/blog-thumbnail.jpg'); ?>" alt="サムネイル">
                </div>
                <div class="article-container-contents-item-text">
                  <p class="article-container-contents-item-text-date">
                    2024.00.00
                  </p>
                  <h6 class="article-container-contents-item-text-title">
                    ブログタイトル
                  </h6>
                  <p class="article-container-contents-item-text-desc">
                    内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。
                  </p>
                </div>
              </li>
              <li class="article-container-contents-item">
                <div class="article-container-contents-item-thumbnail">
                  <img src="<?php echo get_theme_file_uri('images/Blog/blog-thumbnail.jpg'); ?>" alt="サムネイル">
                </div>
                <div class="article-container-contents-item-text">
                  <p class="article-container-contents-item-text-date">
                    2024.00.00
                  </p>
                  <h6 class="article-container-contents-item-text-title">
                    ブログタイトル
                  </h6>
                  <p class="article-container-contents-item-text-desc">
                    内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。
                  </p>
                </div>
              </li>
              <li class="article-container-contents-item">
                <div class="article-container-contents-item-thumbnail">
                  <img src="<?php echo get_theme_file_uri('images/Blog/blog-thumbnail.jpg'); ?>" alt="サムネイル">
                </div>
                <div class="article-container-contents-item-text">
                  <p class="article-container-contents-item-text-date">
                    2024.00.00
                  </p>
                  <h6 class="article-container-contents-item-text-title">
                    ブログタイトル
                  </h6>
                  <p class="article-container-contents-item-text-desc">
                    内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。
                  </p>
                </div>
              </li>
              <li class="article-container-contents-item">
                <div class="article-container-contents-item-thumbnail">
                  <img src="<?php echo get_theme_file_uri('images/Blog/blog-thumbnail.jpg'); ?>" alt="サムネイル">
                </div>
                <div class="article-container-contents-item-text">
                  <p class="article-container-contents-item-text-date">
                    2024.00.00
                  </p>
                  <h6 class="article-container-contents-item-text-title">
                    ブログタイトル
                  </h6>
                  <p class="article-container-contents-item-text-desc">
                    内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。
                  </p>
                </div>
              </li>
              <li class="article-container-contents-item">
                <div class="article-container-contents-item-thumbnail">
                  <img src="<?php echo get_theme_file_uri('images/Blog/blog-thumbnail.jpg'); ?>" alt="サムネイル">
                </div>
                <div class="article-container-contents-item-text">
                  <p class="article-container-contents-item-text-date">
                    2024.00.00
                  </p>
                  <h6 class="article-container-contents-item-text-title">
                    ブログタイトル
                  </h6>
                  <p class="article-container-contents-item-text-desc">
                    内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。
                  </p>
                </div>
              </li>
              <li class="article-container-contents-item">
                <div class="article-container-contents-item-thumbnail">
                  <img src="<?php echo get_theme_file_uri('images/Blog/blog-thumbnail.jpg'); ?>" alt="サムネイル">
                </div>
                <div class="article-container-contents-item-text">
                  <p class="article-container-contents-item-text-date">
                    2024.00.00
                  </p>
                  <h6 class="article-container-contents-item-text-title">
                    ブログタイトル
                  </h6>
                  <p class="article-container-contents-item-text-desc">
                    内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。内容を表示する。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>