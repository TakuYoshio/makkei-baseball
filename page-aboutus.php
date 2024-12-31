<!-- Header  -->
<?php get_header(); ?>

<!-- Main -->
<main>
  <section id="subpage-fkv">
    <div class="subpage-fkv-container">
      <div class="subpage-fkv-container-left">
        <img src="<?php echo get_theme_file_uri('images/SVG/Aboutus-fv.svg'); ?>" alt="About us" class="subpage-title-en">
      </div>
      <div class="subpage-fkv-container-right">
        <img src="<?php echo get_theme_file_uri('images/Aboutus/Aboutus-fkv.JPG'); ?>" alt="About us" class="subpage-fkv-container-right-image">
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
          <img src="<?php echo get_theme_file_uri('images/Aboutus/Makkei Baseball Academyとは.svg'); ?>" alt="">
        </h2>
        <div class="subpage-explanation-text subpage-border-bottom">
          <p class="text-center">
            「プロ野球選手になりたい」「試合でHRを打ちたい」「もっとたくさん練習がしたい」<br>
            スポーツを続ける中で誰しもが考える夢や希望。<br>
            この施設はそんなアスリート達をサポートするべく作られた専用の野球室内練習場です。<br><br>
            上のレベルで活躍するために、
            データを元にした①計測 ②現状把握 ③目標設定 ④課題克服、<br>
            この4つのサイクルをベースに、<br>
            1人でも多くのアスリートのパフォーマンスを上げることをmissionとして掲げております。
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
  <section id="profile">
    <div class="obj__inner">
      <div class="container">
        <div class="profile-container">
          <div class="profile-img">
            <img src="<?php echo get_theme_file_uri('images/Aboutus/profile-img.JPG'); ?>" alt="profile image">
          </div>
          <div class="profile-contents">
            <div class="profile-title">
              <h3>代表指導者</h3>
            </div>
            <div class="profile-item">
              <div class="profile-name">
                <h5 class="profile-name-jp">武田　浩紀</h5>
                <span class="profile-name-en">Hironori Takeda</span>
              </div>
              <div class="profile-text">
                <p class="text-s">
                  2022年11月より多くのアスリートを支援するべく同施設を創設。以来300名を超える選手が施設を訪れそれぞれに合わせた指導を提供している。年間を通して施設内で質の高い練習を行う事が出来るように国内・海外から様々なデータ計測機器やトレーニング機器を取り入れ随時導入している。
                </p>
              </div>
              <div class="profile-career">
                <p class="text-s">
                  ○MAKKEI BASEBAll ACADEMY代表<br>
                  ○中3硬式野球チーム<br>
                  ANTRACE監督<br>
                  ○Driveline Pitch Design認定資格保有<br>
                  鷹巣農林高等学校(現秋田北鷹)卒業
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="obj-01">
        <img src="<?php echo get_theme_file_uri('images/Aboutus//profile-obj-01.svg'); ?>" alt="Object">
      </div>
      <div class="obj-02">
        <img src="<?php echo get_theme_file_uri('images/Aboutus//profile-obj-02.svg'); ?>" alt="Object">
      </div>
      <div class="obj-03">
        <img src="<?php echo get_theme_file_uri('images/Aboutus//profile-obj-03.svg'); ?>" alt="Object">
      </div>
      <div class="obj-04">
        <img src="<?php echo get_theme_file_uri('images/Aboutus//profile-obj-04.svg'); ?>" alt="Object">
      </div>
    </div>
  </section>
  <section id="aboutus-rapsodo">
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
    <div class="container">
      <div class="about-rapsodo-container">
        <ul>
          <li class="about-rapsodo-item">
            <div class="about-rapsodo-item-images">
              <div class="about-rapsodo-item-images-img">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/バッティング.JPG'); ?>" alt="バッティング">
              </div>
              <div class="about-rapsodo-item-images-num">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/ラプソード01.svg'); ?>" alt="01">
              </div>
            </div>
            <div class="about-rapsodo-item-contents">
              <div class="about-rapsodo-item-contents-title">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/バッティング-rapsodo.svg'); ?>" alt="バッティング">
              </div>
              <div class="about-rapsodo-item-contents-text">
                <p>
                  打撃の質を科学的に向上させるためのツール、それが「Rapsodo Hitting」です。<br>
                  計測可能な打球速度、打球角度、飛距離、回転数、回転方向などのデータを通じて、自分のスイングの強みと課題を明確化。<br>
                  さらに、打球軌道の予測機能を活用することで、理想的な打球を目指すための具体的な改善点を発見できます。<br>
                  当施設では、このデータをもとにした個別指導を実施。<br>
                  感覚に頼らず、理論に基づいた練習で、あなたの打撃力を次のレベルへ引き上げます。
                </p>
              </div>
            </div>
          </li>
          <li class="about-rapsodo-item">
            <div class="about-rapsodo-item-images">
              <div class="about-rapsodo-item-images-img">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/ピッチング.JPG'); ?>" alt="バッティング">
              </div>
              <div class="about-rapsodo-item-images-num">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/ラプソード02.svg'); ?>" alt="01">
              </div>
            </div>
            <div class="about-rapsodo-item-contents">
              <div class="about-rapsodo-item-contents-title">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/ピッチング-rapsodo.svg'); ?>" alt="バッティング">
              </div>
              <div class="about-rapsodo-item-contents-text">
                <p>
                  投球を科学する、プロも認める「Rapsodo Pitching」。<br>
                  球速や回転数、縦横の変化量、回転軸の角度や効率、リリースポイントの位置や角度など、詳細なデータをリアルタイムで取得。<br>
                  これにより、理想的なボールの握り方や投げ方を具体的に理解し、実践的に改善することが可能です。<br>
                  また、投球軌道の予測機能を使うことで、自分の投球が打者にどのように見えるかを確認し、より戦略的な投球を目指せます。<br>
                  科学的なアプローチで、あなたのピッチングを進化させましょう。
                </p>
              </div>
            </div>
          </li>
          <li class="about-rapsodo-item">
            <div class="about-rapsodo-item-images">
              <div class="about-rapsodo-item-images-img">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/スローモーション.JPG'); ?>" alt="バッティング">
              </div>
              <div class="about-rapsodo-item-images-num">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/ラプソード03.svg'); ?>" alt="01">
              </div>
            </div>
            <div class="about-rapsodo-item-contents">
              <div class="about-rapsodo-item-contents-title">
                <img src="<?php echo get_theme_file_uri('images/Aboutus/スローモーション-rapsodo.svg'); ?>" alt="バッティング">
              </div>
              <div class="about-rapsodo-item-contents-text">
                <p>
                  ハイスピードカメラ「Insight」によるスローモーション映像解析で、細部まで見逃さない練習を実現。<br>
                  Rapsodoと連動して、変化球のリリース時の手の動きや、スイングの最適なタイミングを解明。<br>
                  瞬時に撮影される高解像度の映像が、これまで見えなかったフォームの課題を浮き彫りにします。<br>
                  プロ選手のような精密なフォーム改良を目指すなら、このスローモーション解析が鍵となります。
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="price">
    <div class="obj__inner">
      <div class="container">
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
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>