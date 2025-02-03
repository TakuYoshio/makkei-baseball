<?php
/* ************************************************ 
*	JSファイル読み込み
* ************************************************ */
    function enqueue_theme_scripts() {
        // blog.js の登録
        wp_enqueue_script(
            'blog-script',
            get_template_directory_uri() . '/js/blog.js',
            array('jquery'),
            null,
            true
        );

        // Ajax URL を JavaScript に渡す
        wp_localize_script(
            'blog-script',
            'blogData',
            array(
                'ajaxUrl' => site_url('/wp-admin/admin-ajax.php'),
            )
        );

        // hamburger.js の登録
        wp_enqueue_script(
            'hamburger-menu',
            get_template_directory_uri() . '/js/hamburger.js',
            array(),
            '1.0',
            true
        );
    }
    add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

/* ************************************************ 
*	記事一覧表示
* ************************************************ */
function fetch_filtered_articles() {
    $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $args = array(
        'posts_per_page' => 15,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    if ($category_id !== 0) {
        $args['cat'] = $category_id;
    }

    $query = new WP_Query($args);
    ob_start(); // バッファリングを開始

    if ($query->have_posts()) {
        echo '<ul id="articles-list">';
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <li class="article-container-contents-item">
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
            <?php
        }
        echo '</ul>';

        // ページネーションリンク生成
        echo '<div class="article-container-pagination">';
        echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'format' => '?paged=%#%',
            'type' => 'plain',
            'prev_text' => '<img src="' . get_theme_file_uri('images/Blog/Pagination-prev.svg') . '" alt="Prev"> <span>Back</span>',
            'next_text' => '<span>Next</span> <img src="' . get_theme_file_uri('images/Blog/Pagination-next.svg') . '" alt="Next">',
        ));
        echo '</div>';
    } else {
        echo '<p>該当する記事が見つかりません。</p>';
    }

    wp_reset_postdata();
    $output = ob_get_clean(); // バッファリングした内容を取得
    wp_send_json_success($output); // 正常なJSONレスポンスを返す
}
add_action('wp_ajax_fetch_filtered_articles', 'fetch_filtered_articles');
add_action('wp_ajax_nopriv_fetch_filtered_articles', 'fetch_filtered_articles');

/* ************************************************ 
*	サムネイル画像の幅、高さの自動設定削除
* ************************************************ */
function dequeue_intrinsic_size_styles() {
    wp_dequeue_style('wp-block-library'); // ブロックエディタ関連のスタイルを削除
}
add_action('wp_enqueue_scripts', 'dequeue_intrinsic_size_styles', 20);

/* ************************************************ 
*	Contact Form 7で自動挿入されるPタグ、brタグを削除
* ************************************************ */
    add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
    function wpcf7_autop_return_false() {
    return false;
    } 
    add_action('wp_enqueue_scripts', function () {
        if (function_exists('wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
            wpcf7_enqueue_styles();
        }
    }, 15); // 優先度を設定して確実に読み込む
?>