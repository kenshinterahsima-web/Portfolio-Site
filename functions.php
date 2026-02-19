<?php

// WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル
// --------------------------------------------------
define('WP_SCSS_ALWAYS_RECOMPILE', true);

// 管理バーを非表示にする
// --------------------------------------------------
add_filter('show_admin_bar', '__return_false');

// テーマのCSS・JS読み込み
// --------------------------------------------------
function theme_enqueue_assets() {
    $theme_url = get_template_directory_uri();

    // モバイルメニュー用JS
    wp_enqueue_script(
        'mobile-menu',
        $theme_url . '/assets/js/mobile-menu.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/mobile-menu.js'),
        true
    );
    // ポップアップ用JS
    wp_enqueue_script(
        'popup-js',
        $theme_url . '/assets/js/popup.js',
        array(),
        null,
        true
    );

    // スクロール時アニメーション
    wp_enqueue_script(
        'scroll-animate',
        $theme_url . '/assets/js/scroll-animate.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/scroll-animate.js'),
        true
    );

    // FAQアコーディオン
    wp_enqueue_script(
        'faq-accordion',
        $theme_url . '/assets/js/faq-accordion.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/faq-accordion.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

// 製作実績カスタム投稿タイプ
// --------------------------------------------------
function create_post_type_works() {
    register_post_type('works', array(
        'labels' => array(
            'name' => '制作実績',
            'singular_name' => '制作実績',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'create_post_type_works');

// 製作実績用タグ（カスタムタクソノミー）
// --------------------------------------------------
function create_works_taxonomies() {
    register_taxonomy(
        'works_tag',
        'works',
        array(
            'label' => 'タグ',
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
        )
    );
}
add_action('init', 'create_works_taxonomies');

// 担当部分（カスタムタクソノミー）の追加
function create_works_role_taxonomy() {
    register_taxonomy(
        'works_role', // タクソノミースラッグ
        'works',      // 紐付ける投稿タイプ
        array(
            'label' => '担当部分',
            'hierarchical' => true, // タグ型
            'public' => true,
            'show_ui' => true,
        )
    );
}
add_action('init', 'create_works_role_taxonomy');

// ACFフィールドグループの自動作成（ACFが有効な場合のみ）
// --------------------------------------------------
function create_works_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_works_info',
            'title' => '制作実績',
            'fields' => array(
                array(
                    'key' => 'field_item_place',
                    'label' => 'クライアント名',
                    'name' => 'item-place',
                    'type' => 'text',
                    'required' => 1,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array(
                    'key' => 'field_item_name',
                    'label' => '制作タイトル',
                    'name' => 'item-name',
                    'type' => 'text',
                    'required' => 1,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array(
                    'key' => 'field_item_img',
                    'label' => 'メイン画像',
                    'name' => 'item-img',
                    'type' => 'image',
                    'required' => 1,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array(
                    'key' => 'field_gallery_image_1',
                    'label' => 'サブ画像1',
                    'name' => 'gallery_image_1',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array(
                    'key' => 'field_gallery_image_2',
                    'label' => 'サブ画像2',
                    'name' => 'gallery_image_2',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'works',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ));
    }
}

function create_post_type_hundred_items() {
    register_post_type('hundred', array(
        'labels' => array(
            'name' => '私を構成する100',
            'singular_name' => '私を構成する100',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'create_post_type_hundred_items');

// Contact Form 7 送信完了後にサンキューページへリダイレクト
function my_cf7_redirect_to_thanks() {
    ?>
    <script>
      document.addEventListener('wpcf7mailsent', function(event) {
        // /contact または /estimate の送信成功時は常にサンクスへ
        if (location.pathname.match(/\/(contact|estimate)\/?$/)) {
          setTimeout(function() {
            window.location.href = "<?php echo home_url('/thanks/'); ?>";
          }, 1000);
        }
      }, false);
      
      // エラー時の処理も追加
      document.addEventListener('wpcf7invalid', function(event) {
        if (event.detail.contactFormId == 'd96e6a1') {
          console.log('フォームにエラーがあります');
        }
      }, false);
      
      document.addEventListener('wpcf7spam', function(event) {
        if (event.detail.contactFormId == 'd96e6a1') {
          console.log('スパムと判定されました');
        }
      }, false);
      
      document.addEventListener('wpcf7mailfailed', function(event) {
        if (event.detail.contactFormId == 'd96e6a1') {
          console.log('メール送信に失敗しました');
        }
      }, false);
    </script>
    <?php
  }
  add_action('wp_footer', 'my_cf7_redirect_to_thanks');

?>