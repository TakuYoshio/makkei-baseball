<!-- Header  -->
<?php get_header(); ?>

<!-- Main -->
<main>
  <section id="subpage-fkv">
    <div class="subpage-fkv-container">
      <div class="subpage-fkv-container-left">
        <img src="<?php echo get_theme_file_uri('images/SVG/Price-fv.svg'); ?>" alt="Price" class="subpage-title-en">
      </div>
      <div class="subpage-fkv-container-right">
        <img src="<?php echo get_theme_file_uri('images/Price/Aboutus-fkv.jpg'); ?>" alt="Price" class="subpage-fkv-container-right-image">
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
              月1回のフィジカルテスト実施<br>
              inBodyによる体組成チェック<br>
              サプリメント飲み放題<br>
              YouTubeの限定動画閲覧可能<br>
            </div>
          </div>
        </div>
      </div>
      <div class="price-object-topLeft">
        <img src="<?php echo get_theme_file_uri('images/Price/price-lesson-topLeft.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-topRight">
        <img src="<?php echo get_theme_file_uri('images/Price/price-lesson-topRight_1.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-bottomLeft">
        <img src="<?php echo get_theme_file_uri('images/Price/price-lesson-bottomLeft.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-bottomRight">
        <img src="<?php echo get_theme_file_uri('images/Price/price-lesson-bottomRight.svg'); ?>" alt="Object">
      </div>
    </div>
  </section>
  <section id="schedule">
    <div class="obj__inner">
      <div class="container">
        <div class="schedule-title">
          <div class="schedule-title-en">
            <img src="<?php echo get_theme_file_uri('images/Price/スケジュールタイトル-en.svg'); ?>" alt="スケジュールタイトル 英語">
          </div>
          <div class="schedule-title-jp">
            <img src="<?php echo get_theme_file_uri('images/Price/スケジュールタイトル-jp.svg'); ?>" alt="スケジュールタイトル 日本語">
          </div>
        </div>
        <div class="week-schedule">
          <img src="<?php echo get_theme_file_uri('images/Price/スケジュール.jpg'); ?>" alt="スケジュール">
        </div>
        <div class="reservation">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="primary-btn">
            <div class="primary-btn-text">詳しく見る</div>
            <div class="primary-btn-icon">
              <img src="<?php echo get_theme_file_uri('images/SVG/Arrow.svg'); ?>" alt="Button icon">
            </div>
          </a>
        </div>
      </div>
      <div class="schedule-object-bottomRight">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-01.svg'); ?>" alt="Object">
      </div>
    </div>
  </section>
  <section id="price">
    <div class="obj__inner">
      <div class="container">
        <div class="price-container">
          <ul>
            <li class="price-item">
              <div class="price-item-image">
                <img src="<?php echo get_theme_file_uri('images/Price/パーソナルレッスン.jpg'); ?>" alt="パーソナルトレーニング">
              </div>
              <div class="price-item-text">
                <h4 class="price-item-text-title">
                  パーソナルレッスン
                </h4>
                <p class="price-item-text-dsc">
                  <span class="emphasis">1回　¥5,000</span>
                  投球指導はRapsodo pitting使用<br>
                  打撃指導はRapsodo hitting使用
                </p>
              </div>
            </li>
            <li class="price-item">
              <div class="price-item-image">
                <img src="<?php echo get_theme_file_uri('images/Price/施設オープン.jpg'); ?>" alt="施設オープン利用">
              </div>
              <div class="price-item-text">
                <h4 class="price-item-text-title">
                  施設オープン利用
                </h4>
                <p class="price-item-text-dsc">
                  <span class="emphasis">
                    月額　¥5,000<br>
                    施設24時間365日使い放題
                  </span>
                  <span class="caution-note">
                    ※パーソナルレッスン＆グループレッスンが入ってる場合はそちらを優先いたします
                  </span>
                </p>
              </div>
            </li>
            <li class="price-item">
              <div class="price-item-image">
                <img src="<?php echo get_theme_file_uri('images/Price/ビジター利用.jpg'); ?>" alt="ビジター利用">
              </div>
              <div class="price-item-text">
                <h4 class="price-item-text-title">
                  ビジター利用
                </h4>
                <p class="price-item-text-dsc">
                  <span class="emphasis">1h　¥2,000</span>
                  <span class="caution-note">
                    ※パーソナルレッスン＆グループレッスンが入ってる場合はそちらを優先いたします
                  </span>
                </p>
              </div>
            </li>
            <li class="price-item">
              <div class="price-item-image">
                <img src="<?php echo get_theme_file_uri('images/Price/ラプソードチーム計測.jpg'); ?>" alt="ラプソードチーム計測">
              </div>
              <div class="price-item-text">
                <h4 class="price-item-text-title">
                  ラプソードチーム計測
                </h4>
                <p class="price-item-text-dsc">
                  チーム計測
                  <span class="emphasis linking">¥15,000<span>何名でも可</span></span>
                  その他フィジカルテストも対応可能
                  <span class="caution-note">
                    ※遠方の場合は別途交通費が発生します
                  </span>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="price-object-01">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-01.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-02">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-02.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-03">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-03.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-04">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-04.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-05">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-05.svg'); ?>" alt="Object">
      </div>
      <div class="price-object-06">
        <img src="<?php echo get_theme_file_uri('images/Price/Plan-obj-06.svg'); ?>" alt="Object">
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>