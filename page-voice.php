<!-- Header  -->
<?php get_header(); ?>

<!-- Main -->
<main>
  <section id="subpage-fkv">
    <div class="subpage-fkv-container">
      <div class="subpage-fkv-container-left">
        <img src="<?php echo get_theme_file_uri('images/SVG/UserVoice-fv.svg'); ?>" alt="User Voice" class="subpage-title-en">
      </div>
      <div class="subpage-fkv-container-right">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-fkv.jpg'); ?>" alt="User Voice" class="subpage-fkv-container-right-image">
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
          <img src="<?php echo get_theme_file_uri('images/Voice/利用者様の声-title.svg'); ?>" alt="">
        </h2>
        <div class="subpage-explanation-text">
          <p class="text-center">
            実際にご利用していただいたご利用者様、保護者様からの貴重なご感想を紹介いたします。
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
  <section id="voice">
    <div class="obj__inner">
      <div class="container">
        <div class="voice-container">
          <ul>
            <li class="voice-item">
              <div class="voice-item-contents">
                <h6 class="voice-item-contents-title">
                  数値化で見えた自分の足りない部分
                </h6>
                <p class="voice-item-contents-text">
                  アカデミーに通って感じたことは、まず色々な機械があって、野球の動きの数値化をできる素晴らしさです。<br>
                  実際に数値化した時に自分の目に見えない細かいところの身体の使い方など機械を通して知ることで、自分に足りないものなどを詳しく分析して自分に必要なものを取り入れていくといったことができます。<br>
                  このまま努力していって自分の目標に届くようにしたいです。
                </p>
                <p class="voice-item-contents-user">
                  選手Dさん(中学生)
                </p>
              </div>
              <div class="voice-item-icon">
                <img src="<?php echo get_theme_file_uri('images/Voice/Voice-a.svg'); ?>" alt="Voice user icon">
              </div>
            </li>
            <li class="voice-item">
              <div class="voice-item-contents">
                <h6 class="voice-item-contents-title">
                  弱点を知り、練習に活かす
                </h6>
                <p class="voice-item-contents-text">
                  通ってよかったと思ったことは、自分の力を具体的に数値に表すことで自分の弱点を知ることができどこを高めるべきか分かるところです。<br>
                  分かった弱点を自分の練習にも繋げることができました。<br>
                  他にも、普段一緒に野球をすることがない人たちと練習することで刺激を受けることができました。
                </p>
                <p class="voice-item-contents-user">
                  選手Aさん(中学生)
                </p>
              </div>
              <div class="voice-item-icon">
                <img src="<?php echo get_theme_file_uri('images/Voice/Voice-b.svg'); ?>" alt="Voice user icon">
              </div>
            </li>
            <li class="voice-item">
              <div class="voice-item-contents">
                <h6 class="voice-item-contents-title">
                  半年で球速7kmアップ！進化する自分
                </h6>
                <p class="voice-item-contents-text">
                  中3の硬式チームで武田さんに出会い、アカデミーに通い始め、球速は半年で7kmアップ、アカデミーに行くたびに自分の中の「野球」が書き換えられています！<br>
                  自分の成長に必要な最新機器やトレーニング設備、小学生〜大人まで幅広い年代のアカデミー生との交流に加え、誰よりも野球に対し情熱を持ち、日々アップグレードしていく武田さんの姿に刺激を受けてながら自身を高められる最高の環境だと思います！！
                </p>
                <p class="voice-item-contents-user">
                  選手Kさん（高校生）
                </p>
              </div>
              <div class="voice-item-icon">
                <img src="<?php echo get_theme_file_uri('images/Voice/Voice-a.svg'); ?>" alt="Voice user icon">
              </div>
            </li>
            <li class="voice-item">
              <div class="voice-item-contents">
                <h6 class="voice-item-contents-title">
                  数値化で目指すべき姿が明確に
                </h6>
                <p class="voice-item-contents-text">
                  フィジカルの大切さ…<br>
                  重要さ、野球をする為の体づくり、技術などトータルで指導してくださいます。<br>
                  今の自分を数値化して、具体的に出来ていること、出来ないことがみえてくるので、目指すところが見えてきます。<br>
                  今必要なトレーニングや練習を教えて頂いて、やるべき事が見えてきます。<br>
                  そして子供自身が変化を感じて、練習が楽しくなります。<br>
                  なりたい自分になる為に、今しなければならないことを細かく、丁寧に指導してくださいます。
                </p>
                <p class="voice-item-contents-user">
                  保護者Tさん
                </p>
              </div>
              <div class="voice-item-icon">
                <img src="<?php echo get_theme_file_uri('images/Voice/Voice-d.svg'); ?>" alt="Voice user icon">
              </div>
            </li>
            <li class="voice-item">
              <div class="voice-item-contents">
                <h6 class="voice-item-contents-title">
                  技術だけじゃない！全体的な体づくり
                </h6>
                <p class="voice-item-contents-text">
                  初めて施設に入った瞬間の感動は忘れられません！<br>
                  外見はパッと見ただの倉庫。中にはトレンドの最新機器やウエイト器具。<br>
                  モノだけではなく、それらを使いこなし選手それぞれにフィットさせた指導を提供する武田さん。<br>
                  地元大館にこのような施設があることに感謝です。<br>
                  また、技術だけでなく食事や睡眠を含めた体づくりが土台となるということも学ばさせていただきました。<br>
                  あんなにお菓子やジュース、エナジードリンクが好きだった我が子も今では一切口にせず毎朝納豆×2・目玉焼き×2を食べる習慣がつきました(笑)<br>
                  全野球選手へ通うことをオススメいたします！
                </p>
                <p class="voice-item-contents-user">
                  保護者Sさん
                </p>
              </div>
              <div class="voice-item-icon">
                <img src="<?php echo get_theme_file_uri('images/Voice/Voice-c.svg'); ?>" alt="Voice user icon">
              </div>
            </li>
            <li class="voice-item">
              <div class="voice-item-contents">
                <h6 class="voice-item-contents-title">
                  野球愛と多面的な指導が魅力
                </h6>
                <p class="voice-item-contents-text">
                  ラプソードに興味があり、県内で計測できる場所があると知り、このアカデミーの門を叩きました。<br>
                  野球が大好きな息子と娘を連れて行ってみて、本当に良かったと思えました。<br>
                  武田さんの印象は、元気、ポジティブ、優しい、そして物凄い野球愛の持ち主という印象です。<br>
                  野球は野球を大好きな人とやるのが一番楽しいと思っているので、遠方でなかなか行けなくても、時間を見つけて伺わせて頂いています。<br>
                  武田さんは、野球の技術に留まらず、栄養面やフィジカルの知識も深く、多面的な指導を受ける事ができます。<br>
                  ラプソードによるデータ解析では、豊富な知識から個性を活かした的確な指導やアドバイスを頂いています。<br>
                  このアカデミーは、若手選手の育成環境を提供する事で、秋田の野球の底上げになっている素晴らしい場であることに間違いありません！
                </p>
                <p class="voice-item-contents-user">
                  保護者Yさん
                </p>
              </div>
              <div class="voice-item-icon">
                <img src="<?php echo get_theme_file_uri('images/Voice/Voice-d.svg'); ?>" alt="Voice user icon">
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="voice-object-01">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-obj-01.svg'); ?>" alt="Object">
      </div>
      <div class="voice-object-02">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-obj-02.svg'); ?>" alt="Object">
      </div>
      <div class="voice-object-03">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-obj-03.svg'); ?>" alt="Object">
      </div>
      <div class="voice-object-04">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-obj-04.svg'); ?>" alt="Object">
      </div>
      <div class="voice-object-05">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-obj-05.svg'); ?>" alt="Object">
      </div>
      <div class="voice-object-06">
        <img src="<?php echo get_theme_file_uri('images/Voice/Voice-obj-06.svg'); ?>" alt="Object">
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>