<!-- Header  -->
<?php get_header(); ?>

<!-- Main -->
<main>
  <section id="subpage-fkv">
    <div class="subpage-fkv-container">
      <div class="subpage-fkv-container-left">
        <img src="<?php echo get_theme_file_uri('images/SVG/Contact-fv.svg'); ?>" alt="Contact" class="subpage-title-en">
      </div>
      <div class="subpage-fkv-container-right">
        <img src="<?php echo get_theme_file_uri('images/Contact/Contact-fkv.jpg'); ?>" alt="Blog" class="subpage-fkv-container-right-image">
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
          <img src="<?php echo get_theme_file_uri('images/Contact/お問い合わせ-title.svg'); ?>" alt="">
        </h2>
        <div class="subpage-explanation-text">
          <p class="text-center">
            ご予約はお電話または下記の予約フォームより、<br>
            またお問い合わせはお電話もしくはお問い合わせフォームよりお気軽にご連絡ください。<br>
            なお、お問い合わせには2～3営業日以内に返信いたしますが、<br>
            万が一返信がない場合は、フォームが正常に送信されていない可能性がございますので、<br>
            大変お手数ですが再度フォームから送信いただくか、お電話にてご連絡ください。
          </p>
        </div>
        <div class="phone">
          <div class="phone-icon">
            <img src="<?php echo get_theme_file_uri('images/Contact/phone-icon.svg'); ?>" alt="tel-icon">
          </div>
          <div class="phone-text">
            <div class="phone-text-businessHour">受付時間：9時〜20時</div>
            <a href="tel:080-3328-8217" class="phone-text-number">080-3328-8217</a>
          </div>
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
  <section class="reservation">
    <div class="obj__inner">
      <div class="container">
        <div>
          <h4 class="contact-form-title">予約フォーム</h4>
        </div>
        <!-- Begin TimeRex Widget -->
          <div id="timerex_calendar" data-url="https://timerex.net/s/makkeibaseball_8ab5/b0bdcb14"></div>
    
          <script id="timerex_embed" src="https://asset.timerex.net/js/embed.js"></script>
    
          <script type="text/javascript">
            TimerexCalendar();
          </script>
        <!-- End TimeRex Widget -->
      </div>
    </div>
  </section>
  <section id="contact-form">
    <div class="obj__inner">
      <div class="container">
        <div>
          <h4 class="contact-form-title">お問い合わせフォーム</h4>
        </div>
        <div class="contact-form">
          <!-- ローカル環境 （iMac） -->
          <!-- <?php echo do_shortcode( '[contact-form-7 id="54e8e08" title="MAKKEI BASEBALL ACADEMY-ContactFrom"]' ); ?> -->
          <!-- 本番環境 -->
          <?php echo do_shortcode( '[contact-form-7 id="b57eb88" title="MAKKEI BASEBALL ACADEMY-ContactFrom"]' ); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>