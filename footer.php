</div>
<!-- / 全体wrapper -->

<!-- フッターエリア -->
<footer id="footer">

<!-- フッターコンテンツ -->
<div class="footer-inner">

<!-- ウィジェットエリア（フッター２列枠） -->
<div class="row">
<article class="half">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター２列枠（左）') ) : ?>
<?php endif; ?>
</div>
</article>
<article class="half">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター２列枠（右）') ) : ?>
<?php endif; ?>
</div>
</article>
</div>
<!-- / ウィジェットエリア（フッター２列枠） -->
<div class="clear"></div>


</div>
<!-- / フッターコンテンツ -->

<!-- コピーライト表示 -->
<div id="copyright">
© <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>. / <a href="//minimalwp.com" target="_blank" rel="nofollow">WP Theme by Minimal WP</a>
</div>
<!-- /コピーライト表示 -->

</footer>
<!-- / フッターエリア -->

<?php wp_footer(); ?>


<!-- スマホ用ハンバーガーメニュー -->
<script type="text/javascript">
jQuery(document).ready(function(){
 jQuery(".hamburger").click(function () {
  jQuery("#nav").slideToggle();
 });
});
</script>

<div class="toggle">
<div class="hamburger hamburger--spin">
<div class="hamburger-box"><div class="hamburger-inner"></div></div>
</div>
</div>
<!-- / スマホ用ハンバーガーメニュー -->

<!-- ハンバーガーメニュー-->
<script>
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
 
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  forEach(hamburgers, function(hamburger) {
    hamburger.addEventListener("click", function() {
      this.classList.toggle("is-active");
    }, false);
  });
}
</script>
<!-- / ハンバーガーメニュー-->

<!-- doubleTapToGo Js -->
<?php if (wp_is_mobile()) :?>
<!-- モバイル端末のみ読み込み-->
<script src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/doubletaptogo.js" type="text/javascript"></script>
<script>
$( function()
 {
 $( '#nav li:has(ul)' ).doubleTapToGo();
 });
</script>
<!-- / モバイル端末のみ読み込み -->
<?php else: ?>
<?php endif; ?>
<!-- / doubleTapToGo Js -->

<!-- トップに戻る -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/scrolltopcontrol.js"></script>
<!-- / トップに戻る -->

</body>
</html>