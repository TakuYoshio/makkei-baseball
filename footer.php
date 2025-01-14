<section id="voice-blog" class="display-none">
  <div class="voice-blog-wrapper">
    <div class="voice-blog-contents voice">
      <h3 class="voice-blog-heading3">利用者様の声</h3>
      <p class="voice-blog-text">
        スクールでの体験談や成果をご紹介！
      </p>
      <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="tertiary-btn">
        <div class="tertiary-btn-text">詳しく見る</div>
        <div class="tertiary-btn-icon">
          <img src="<?php echo get_theme_file_uri('images/SVG/Arrow-teriary.svg'); ?>" alt="Button icon">
        </div>
      </a>
    </div>
    <div class="voice-blog-contents blog">
      <h3 class="voice-blog-heading3">タメになるブログ</h3>
      <p class="voice-blog-text">
        指導内容を公開！特殊変化球や練習ギアの使い方も解説
      </p>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="tertiary-btn">
        <div class="tertiary-btn-text">詳しく見る</div>
        <div class="tertiary-btn-icon">
          <img src="<?php echo get_theme_file_uri('images/SVG/Arrow-teriary.svg'); ?>" alt="Button icon">
        </div>
      </a>
    </div>
  </div>
</section>

<section id="cta">
      <div class="obj__inner">
        <div class="container">
          <div class="cta-contents">
            <div class="cta-title">
              <img src="<?php echo get_theme_file_uri('images/SVG/CTA-title.svg'); ?>" alt="CTA title">
            </div>
            <p class="cta-text">
              経験者でも未経験でも<br>
              丁寧に正確な指導をいたします。<br>
              楽しく正しく成長する、<br>
              マッケイベースボールアカデミーへ<br>
              お気軽にご連絡ください。
            </p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="tertiary-btn">
              <div class="tertiary-btn-text">詳しく見る</div>
              <div class="tertiary-btn-icon">
                <img src="<?php echo get_theme_file_uri('images/SVG/Arrow-teriary.svg'); ?>" alt="Button icon">
              </div>
            </a>
          </div>
        </div>
        <div class="cta-object-top">
          <img src="<?php echo get_theme_file_uri('images/SVG/cta-obj-top.svg'); ?>" alt="Object">
        </div>
        <div class="cta-object-right">
          <img src="<?php echo get_theme_file_uri('images/SVG/cta-obj-right.svg'); ?>" alt="Object">
        </div>
        <div class="cta-object-bottom">
          <img src="<?php echo get_theme_file_uri('images/SVG/cta-obj-bottom.svg'); ?>" alt="Object">
        </div>
        <div class="cta-object-left">
          <img src="<?php echo get_theme_file_uri('images/SVG/cta-obj-left.svg'); ?>" alt="Object">
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-logo-info">
          <a href="/" class="logo-link">
            <img src="<?php echo get_theme_file_uri('images/2x/Logo.png'); ?>" alt="Logo" class="logo-mark">
            <img src="<?php echo get_theme_file_uri('images/SVG/Logo-font.svg'); ?>" alt="Logo type" class="logo-type">
          </a>
          <div class="info">
            <p>〒017-0863</p>
            <p>秋田県大館市根下戸町9-48</p>
            <p>TEL. 080-3328-8217</p>
          </div>
        </div>
        <div class="footer-nav">
          <ul class="footer-menu">
            <li class="footer-menu-item">
              <a href="<?php echo esc_url(home_url('/aboutus/')); ?>" class="menu-link">Makkei Baseball Academyとは</a>
            </li>
            <li class="footer-menu-item">
              <a href="<?php echo esc_url(home_url('/price/')); ?>" class="menu-link">料金プラン</a>
            </li>
            <li class="footer-menu-item">
              <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="menu-link">利用者の声</a>
            </li>
            <li class="footer-menu-item">
              <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="menu-link">お問い合わせ</a>
            </li>
          </ul>
        </div>
        <div class="footer-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.3285024956995!2d140.53544807678995!3d40.268452371463816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9ac68feea3e2b3%3A0x3182512f0fda1d9f!2z44CSMDE3LTA4NjMg56eL55Sw55yM5aSn6aSo5biC5qC55LiL5oi455S677yZ4oiS77yU77yY!5e0!3m2!1sja!2sjp!4v1734874936306!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div class="copyright">
      <small>&copy; 2024 MAKKEI BASEBALL ACADEMY</small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>