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
          <!-- 【タブ切り替え】 -->
          <div class="article-container-tab">
            <ul>
              <li class="article-container-tab-item" data-category-id="all">すべて</li>
              <?php
              $categories = get_categories();
              foreach ($categories as $category) :
              ?>
                <li class="article-container-tab-item" data-category-id="<?php echo $category->term_id; ?>">
                    <?php echo $category->name; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <!-- 【タブ切り替え】 -->
          <!-- 【記事一覧】 -->
          <div class="article-container-contents">
            <ul id="articles-list">
              <?php
              $all_posts = get_posts(array(
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'DESC',
              ));
              foreach ($all_posts as $post) :
                  setup_postdata($post);
              ?>
                <li class="article-container-contents-item" data-category-ids="<?php echo implode(',', wp_list_pluck(get_the_category($post->ID), 'term_id')); ?>">
                  <div class="article-container-contents-item-thumbnail">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="article-container-contents-item-text">
                    <p class="article-container-contents-item-text-date"><?php the_time('Y.m.d'); ?></p>
                    <h6 class="article-container-contents-item-text-title"><?php the_title(); ?></h6>
                    <p class="article-container-contents-item-text-desc"><?php echo wp_strip_all_tags(get_the_excerpt()); ?></p>
                  </div>
                </li>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          </div>
          <!-- 【記事一覧】 -->
          <!-- 【ページネーション】 -->
          <div class="article-container-pagination">
            <div class="page-nation prev">
              <a href="">
                <img src="<?php echo get_theme_file_uri('images/Blog/Pagination-prev.svg'); ?>" alt="Prev">
                <span>Back</span>
              </a>
            </div>
            <ul>
              <li class="article-container-pagination-item current">
                1
              </li>
              <li class="article-container-pagination-item">
                <a href="">2</a>
              </li>
              <li class="article-container-pagination-item">
                <a href="">3</a>
              </li>
              <li class="article-container-pagination-item">
                <a href="">4</a>
              </li>
              <li class="article-container-pagination-item">
                <a href="">5</a>
              </li>
            </ul>
            <div class="page-nation next">
              <a href="">
                <span>Next</span>
                <img src="<?php echo get_theme_file_uri('images/Blog/Pagination-next.svg'); ?>" alt="Next">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>


<!-- 【タブ切り替え】 -->
          <!-- <div class="article-container-tab">
            <ul>
              <li class="article-container-tab-item">すべて</li>
              <li class="article-container-tab-item">投球理論</li>
              <li class="article-container-tab-item">変化球</li>
              <li class="article-container-tab-item">打撃理論</li>
              <li class="article-container-tab-item">食事とトレーニング</li>
            </ul>
          </div> -->
<!-- 【記事一覧】】 -->
          <!-- <div class="article-container-contents">
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
          </div> -->