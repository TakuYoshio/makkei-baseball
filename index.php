<!-- Header -->
<?php get_header(); ?>

  <main>
    <section id="fkv">
      <div class="fkv__inner">
        <div class="fkv-img">
          <img src="<?php echo get_theme_file_uri('images/2x/FKV-image-left.jpg'); ?>" alt="FKV">
          <img src="<?php echo get_theme_file_uri('images/2x/FKV-image-right.jpg'); ?>" alt="FKV">
        </div>
        <div class="fkv-text">
          <h1>秋田県大館市の野球教室</h1>
        </div>
        <div class="fkv-copy">
          <img src="<?php echo get_theme_file_uri('images/SVG/FKV-text.svg'); ?>" alt="fkv-text">
        </div>
        <div class="businessHours">
          <img src="<?php echo get_theme_file_uri('images/SVG/24-7.svg'); ?>" alt="Business Hours">
        </div>
        <div class="academy-name">
          <img src="<?php echo get_theme_file_uri('images/SVG/Makkei-baseball-academy.svg'); ?>" alt="Makkei Baseball Academy">
        </div>
      </div>
    </section>
    <section id="aboutus">
      <div class="obj__inner">
        <div class="container">
          <div class="aboutus-wrapper diagonal-layout">
            <div class="image-left aboutus-image">
              <div class="image-left__inner">
                <img src="<?php echo get_theme_file_uri('images/2x/AboutUs.jpg'); ?>" alt="About us image">
              </div>
            </div>
            <div class="aboutus-contents">
              <h2 class="aboutus-heading2">
                <img src="<?php echo get_theme_file_uri('images/SVG/aboutus-text.svg'); ?>" alt="">
              </h2>
              <div>
                <h3 class="aboutus-heading3">
                  県内初ラプソード導入した <br>
                  パーソナルベースボールアカデミー
                </h3>
                <p class="p-text">
                  「プロ野球選手になりたい」「試合でHRを打ちたい」「もっとたくさん練習がしたい」スポーツを続ける中で誰しもが考える夢や希望。この施設はそんなアスリート達をサポートするべく作られた専用の野球室内練習場です。<br>
                  上のレベルで活躍するために、データを元にした①計測 ②現状把握 ③目標設定 ④課題克服、この4つのサイクルをベースに、1人でも多くのアスリートのパフォーマンスを上げることをmissionとして掲げております。
                </p>
                <div class="btn-area">
                  <a href="<?php echo esc_url(home_url('/aboutus/')); ?>" class="primary-btn">
                    <div class="primary-btn-text">詳しく見る</div>
                    <div class="primary-btn-icon">
                      <img src="<?php echo get_theme_file_uri('images/SVG/Arrow.svg'); ?>" alt="Button icon">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aboutus-obj-right">
          <img src="<?php echo get_theme_file_uri('images/SVG/aboutus-obj-right.svg'); ?>" alt="">
        </div>
        <div class="aboutus-obj-left">
          <img src="<?php echo get_theme_file_uri('images/SVG/aboutus-obj-left.svg'); ?>" alt="">
        </div>
      </div>
    </section>
    <section id="rapsodo">
      <div class="rapsodo-title back-line">
        <div class="title-contents">
          <div class="title-contents-image">
            <img src="<?php echo get_theme_file_uri('images/SVG/3つのラプソード.svg'); ?>" alt="title">
          </div>
          <div class="title-contents-text">
            <p>
            Rapsodoとは投球や打球を計測・分析するシステムです。投球や打球の速度、回転数、軸の傾き、変化量などを計測し、専用のアプリに詳細なデータが表示されます。<br>
            弊施設にはピッチング・ヒッティングが各一台。それと連動するスローモーションカメラが導入されております。
            </p>
          </div>
        </div>
      </div>
      <div class="rapsodo-contents">
        <ul>
          <li>
            <img class="rapsodo-contents-background" src="<?php echo get_theme_file_uri('images/2x/バッティング.JPG'); ?>" alt="バッティング">
            <img class="rapsodo-contents-text" src="<?php echo get_theme_file_uri('images/SVG/バッティング-text.svg'); ?>" alt="バッティング">
          </li>
          <li>
            <img class="rapsodo-contents-background" src="<?php echo get_theme_file_uri('images/2x/ピッチング.JPG'); ?>" alt="ピッチング">
            <img class="rapsodo-contents-text" src="<?php echo get_theme_file_uri('images/SVG/ピッチング-text.svg'); ?>" alt="ピッチング">
          </li>
          <li>
            <img class="rapsodo-contents-background" src="<?php echo get_theme_file_uri('images/2x/スローモーション.JPG'); ?>" alt="スローモーション">
            <img class="rapsodo-contents-text" src="<?php echo get_theme_file_uri('images/SVG/スローモーション-text.svg'); ?>" alt="スローモーション">
          </li>
        </ul>
      </div>
      <div class="rapsodo-btn">
        <a href="<?php echo esc_url(home_url('/aboutus/')); ?>" class="secondary-btn">
          <div class="secondary-btn-text">ラプソードについてもっと知る</div>
          <div class="secondary-btn-icon">
            <img src="<?php echo get_theme_file_uri('images/SVG/Arrow.svg'); ?>" alt="Button icon">
          </div>
        </a>
      </div>
    </section>
    <section id="price">
      <div class="obj__inner">
        <div class="container">
          <div class="price-wrapper diagonal-layout">
            <div class="image-right price-image">
              <div class="image-right__inner">
                <img src="<?php echo get_theme_file_uri('images/2x/Price.jpg'); ?>" alt="Price image">
              </div>
            </div>
            <div class="price-contents">
              <h2 class="price-heading2">
                <img src="<?php echo get_theme_file_uri('images/SVG/price-h2.svg'); ?>" alt="Price title">
              </h2>
              <div>
                <h3 class="price-heading3">
                  幅広いプランで <br>
                  あなたに合った練習環境を
                </h3>
                <p class="p-text">
                  グループレッスンやパーソナルレッスン、施設オープン利用、ビジター利用など、さまざまなプランをご用意しています。また、ラプソードを活用したチーム計測、複数名でのパーソナルレッスン、チームフィジカルテスト、ウエイトトレーニングのみの施設利用など、幅広いニーズに対応しております。
                  料金の詳細は以下のボタンからご確認いただけます。お気軽にご相談ください。
                </p>
                <div class="btn-area">
                  <a href="<?php echo esc_url(home_url('/price/')); ?>" class="primary-btn">
                    <div class="primary-btn-text">詳しく見る</div>
                    <div class="primary-btn-icon">
                      <img src="<?php echo get_theme_file_uri('images/SVG/Arrow.svg'); ?>" alt="Button icon">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="price-obj-left">
          <img src="<?php echo get_theme_file_uri('images/SVG/obj-l.svg'); ?>" alt="Object">
        </div>
        <div class="price-obj-top">
          <img src="<?php echo get_theme_file_uri('images/SVG/obj-t.svg'); ?>" alt="Object">
        </div>
        <div class="price-obj-bottom">
          <img src="<?php echo get_theme_file_uri('images/SVG/obj-b.svg'); ?>" alt="Object">
        </div>
        <div class="price-obj-right">
          <img src="<?php echo get_theme_file_uri('images/SVG/obj-rb.svg'); ?>" alt="Object">
        </div>
      </div>
    </section>
<!-- Footer -->
<?php get_footer(); ?>