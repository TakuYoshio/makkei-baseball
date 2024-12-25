<?php
// パンくずリスト
function breadcrumb() {
    $home = '<li><a href="'.get_bloginfo('url').'" >HOME</a></li>';
  
    echo '<ul>';
    if ( is_front_page() ) {
        // トップページの場合は表示させない
    }
    // カテゴリページ
    else if ( is_category() ) {
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach($cat_list as $value){
            echo $value;
        }
        the_archive_title('<li>', '</li>');
    }
    // アーカイブ・タグページ
    else if ( is_archive() ) {
    echo $home;
    the_archive_title('<li>', '</li>');
    }
    // 投稿ページ
    else if ( is_single() ) {
    $cat = get_the_category();
        if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
        foreach($cat_list as $value){
            echo $value;
        }
        the_title('<li>', '</li>');
    }
    // 固定ページ
    else if( is_page() ) {
    echo $home;
    the_title('<li>', '</li>');
    }
    // 404ページの場合
    else if( is_404() ) {
    echo $home;
    echo '<li>ページが見つかりません</li>';
    }
    echo "</ul>";
}
// アーカイブのタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_month() ) {
        $title = single_month_title( '', false );
    }
    return $title;
});

/* ************************************************ 
*	コンテンツ幅
* ************************************************ */

if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

/* ************************************************ 
*	レスポンシブ埋め込み
* ************************************************ */

add_theme_support( 'responsive-embeds' );


/* ************************************************ 
*	タイトル表示
* ************************************************ */

add_theme_support( 'title-tag' );


/* ************************************************ 
*	カスタムメニュー
* ************************************************ */

register_nav_menus(array('primary' => 'グローバルメニュー'));


/* ************************************************ 
*	カスタム背景
* ************************************************ */

add_theme_support( 'custom-background' );


/* ************************************************ 
*	アイキャッチ画像
* ************************************************ */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 768, 512, true );
add_image_size('img-head',2000,1000);


/* ************************************************ 
*	テキストウィジェットでショートコードを使用
* ************************************************ */

add_filter('widget_text', 'do_shortcode' );


/* ************************************************ 
*	カテゴリー説明文でHTMLタグを使用
* ************************************************ */

remove_filter('pre_term_description', 'wp_filter_kses');


/* ************************************************ 
*	ウィジェット
* ************************************************ */

add_action( 'widgets_init', 'minimal_wp_widgets_init' );
function minimal_wp_widgets_init() {
register_sidebar(array(
'name'=>'カテゴリーページ最下部',
'id'  => 'sidebar-1',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'シングルページ記事下',
'id'  => 'sidebar-3',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="single-widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'シングルページCTA',
'id'  => 'sidebar-4',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s cta-minimal">',
'after_widget' => '</div>',
'before_title' => '<div class="cta-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'シングルページ最下部',
'id'  => 'sidebar-5',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="single-widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'フッター２列枠（左）',
'id'  => 'sidebar-6',
'description'   => 'PC表示時：横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'フッター２列枠（右）',
'id'  => 'sidebar-7',
'description'   => 'PC表示時：横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページヘッダー画像下（大）',
'id'  => 'sidebar-8',
'description'   => 'PC表示時：横幅960px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="top-widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ２列枠（左）',
'id'  => 'sidebar-9',
'description'   => 'PC表示時：横幅465px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ２列枠（右）',
'id'  => 'sidebar-10',
'description'   => 'PC表示時：横幅465px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title mincho">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ下部（大）',
'id'  => 'sidebar-11',
'description'   => 'PC表示時：横幅960px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title mincho">',
'after_title' => '</div>',
));
}

/* ************************************************ 
*	フィードリンク
* ************************************************ */

add_theme_support( 'automatic-feed-links' );


/* ************************************************ 
*	エディタ拡張
* ************************************************ */

/*** テキストエディタにボタンを追加 ***/
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
    QTags.addButton( 'youtube', 'YouTube', '<div class="youtube">', '</div>', '', 'YouTube tag', 201 );
    QTags.addButton( 'h1', 'H1', '<h1 class="blog-title">', '</h1>', '', 'h1 tag', 202 );
    QTags.addButton( 'h2', 'H2', '<h2>', '</h2>', '', 'h2 tag', 203 );
    QTags.addButton( 'h3', 'H3', '<h3>', '</h3>', '', 'h3 tag', 204 );
    QTags.addButton( 'h4', 'H4', '<h4>', '</h4>', '', 'h4 tag', 205 );
    QTags.addButton( 'button1', 'ボタン1', '<div class="bt-order"><a href="#">ボタン</a></div>', '', '', 'button1 tag', 206 );
    QTags.addButton( 'button2', 'ボタン2', '<div class="bt-order2"><a href="#">ボタン</a></div>', '', '', 'button2 tag', 207 );
    QTags.addButton( 'kakoi1', '囲みライン直線', '<div class="line-kakoi">テキスト</div>', '', '', 'kakoi1 tag', 208 );
    QTags.addButton( 'kakoi2', '囲みライン点線', '<div class="line-kakoi2">テキスト</div>', '', '', 'kakoi2 tag', 209 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );


/*** ヴィジュアルエディタにボタンを追加 ***/
function ilc_mce_buttons($buttons){
array_push($buttons, "backcolor", "copy", "cut", "paste", "fontsizeselect", "cleanup");
return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");


/*** ビジュアルエディターにスタイルを適用する ***/
add_editor_style();


/* ************************************************ 
*	Minimal WPカスタムの設定
* ************************************************ */

function options_admin_menu() {
add_theme_page("Minimal WPテーマ設定", "Minimal WPカスタム", 'edit_themes', basename(__FILE__), 'options_page');
}
add_action('admin_menu', 'options_admin_menu');

function options_page() {
$update_options = (isset($_POST['update_options'])) ? $_POST['update_options'] : null;
if ($update_options == 'true') { options_update(); }
?>


<div class="wrap">

<h2>ロゴ画像の変更</h2>
<p>ロゴ画像をアップロードして、画像ファイルのURLを指定すると、サイトのロゴが変更されます。</p>
<form method="post" action="">
<input type="hidden" name="update_options" value="true" />
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="logo_url"><?php _e('◎ロゴ画像のURL', 'minimalcafe'); ?></label></th>
<td><input type="text" name="logo_url" id="logo_url" size="50" value="<?php echo get_option('logo_url'); ?>"/>　（例：http://example.com/uploads/xxxxxx.gif）<br/>
<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/media-new.php" target="_blank">ロゴ画像をアップロード</a><br />
＊推奨ファイル：gif、jpg、png<br />
<br />
＜変更方法＞<br />
1 - WordPressの<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/upload.php" target="_blank">メディアライブラリー（メディア＞新規追加）</a>に画像をアップロード<br />
2 - 画像ファイルの「URL」をコピー<br />
3 - 上のボックスに画像ファイルのURLをペースト<br />
4 - ページ一番下の「設定を保存ボタン」を押す<br/>
＊削除する場合は空欄にして保存ボタンを押してください。初期設定のロゴに戻ります。<br />
<br/>
＜現在の画像＞<br />
<img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() . '/images/logo.gif' ?>"
alt=""/></td>
</tr>
</table>

<hr style="margin:30px 0">

<h2>イメージヘッダー画像の変更</h2>
<p>画像をアップロードするとTOPページのイメージヘッダー画像が変更されます。</p>
<form method="post" action="">
<input type="hidden" name="update_options" value="true" />
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="slideshow1"><?php _e('◎スイメージヘッダー画像のURL', 'minimalcafe'); ?></label></th>
<td><input type="text" name="slideshow1" id="slideshow1" size="50" value="<?php echo get_option('slideshow1'); ?>"/>　（例：http://example.com/uploads/xxxxxx.jpg）<br/>
<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/media-new.php" target="_blank">イメージヘッダー画像をアップロード</a><br />
＊推奨サイズ：横幅2000px程度（デモサイトは横幅2000px/高さ1333px）<br />
＊推奨ファイル：jpg、gif、png<br />
<br />
＜変更方法＞<br />
1 - WordPressの<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/upload.php" target="_blank">メディアライブラリー</a>に画像をアップロード<br />
2 - 画像ファイルの「URL」をコピー<br />
3 - 上のボックスに画像ファイルのURLをペースト<br />
4 - ページ一番下の「設定を保存ボタン」を押す<br/>
＊削除する場合は空欄にして保存ボタンを押してください。初期設定の画像に戻ります。<br />
<br/>
＜現在の画像＞<br />
<img src="<?php echo (get_option('slideshow1')) ? get_option('slideshow1') : get_template_directory_uri() . '/images/main_01.jpg' ?>" alt="" width="100%" /></td>
</tr>
</table>

<p><input type="submit" value="設定を保存" class="button button-primary" /></p>
</form>

</div>

<?php
}
// Update options
function options_update() {
update_option('logo_url', $_POST['logo_url']);
update_option('slideshow1', $_POST['slideshow1']);
}
?>