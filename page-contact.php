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
      </div>
      <div class="obj-right">
        <img src="<?php echo get_theme_file_uri('images/Aboutus/explanation-right.svg'); ?>" alt="">
      </div>
      <div class="obj-left">
        <img src="<?php echo get_theme_file_uri('images/Aboutus/explanation-left.svg'); ?>" alt="">
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
          <?php echo do_shortcode( '[contact-form-7 id="54e8e08" title="MAKKEI BASEBALL ACADEMY-ContactFrom"]' ); ?>
          <!-- <dl>
            <dt class="label label-req">
              名前
              <span class="required">必須</span>
            </dt>
            <dd class="field field-req">
              <input type="text" id="name" name="お名前" placeholder="山田 太郎">
            </dd>
            <dt class="label label-req">
              メールアドレス
              <span class="required">必須</span>
            </dt>
            <dd class="field field-req">
              <input type="email" id="email" name="メールアドレス" placeholder="sample@sample.co.jp">
            </dd>
            <dt class="label">
              電話番号
            </dt>
            <dd  class="field">
              <input type="tel" id="tel" name="電話番号" placeholder="080-1111-1111">
            </dd>
            <dt class="label">
              お問い合わせ
            </dt>
            <dd class="field text-area">
              <textarea name="request" id="request"></textarea>
            </dd>
          </dl>
          <div class="submit-container">
            <input type="submit" class="submit-container-btn" value="送信する">
          </div> -->
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php get_footer(); ?>