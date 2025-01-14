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
    <div class="obj__inner">
      <div class="container">
        <div class="article-container">
          <!-- 【タブ切り替え】 -->
          <div class="article-container-tab">
            <ul>
              <li class="article-container-tab-item active" data-category-id="all">すべて</li>
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
          <!-- 【記事一覧】 -->
          <div class="article-container-contents">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query_args = array(
                'posts_per_page' => 15,
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WP_Query($query_args);
            if ($query->have_posts()) : ?>
                <ul id="articles-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="article-container-contents-item" data-category-ids="<?php echo implode(',', wp_list_pluck(get_the_category($post->ID), 'term_id')); ?>">
                          <a href="<?php the_permalink(); ?>" class="article-link">
                            <div class="article-container-contents-item-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="article-container-contents-item-text">
                                <p class="article-container-contents-item-text-date"><?php the_time('Y.m.d'); ?></p>
                                <h6 class="article-container-contents-item-text-title"><?php the_title(); ?></h6>
                                <p class="article-container-contents-item-text-desc"><?php echo wp_strip_all_tags(get_the_excerpt()); ?></p>
                            </div>
                          </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <!-- 【ページネーション】 -->
                <div class="article-container-pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                        'prev_text' => '<img src="' . get_theme_file_uri('images/Blog/Pagination-prev.svg') . '" alt="Prev"> <span>Back</span>',
                        'next_text' => '<span>Next</span> <img src="' . get_theme_file_uri('images/Blog/Pagination-next.svg') . '" alt="Next">',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
      <div class="blog-object-01">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-obj-01.svg'); ?>" alt="Object">
      </div>
      <div class="blog-object-02">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-obj-02.svg'); ?>" alt="Object">
      </div>
      <div class="blog-object-03">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-obj-03.svg'); ?>" alt="Object">
      </div>
      <div class="blog-object-04">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-obj-04.svg'); ?>" alt="Object">
      </div>
      <div class="blog-object-05">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-obj-05.svg'); ?>" alt="Object">
      </div>
      <div class="blog-object-06">
        <img src="<?php echo get_theme_file_uri('images/Blog/Blog-obj-06.svg'); ?>" alt="Object">
      </div>
    </div>
</section>

</main>

<!-- Footer -->
<?php get_footer(); ?>