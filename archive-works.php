<?php
/*
Template Name: 制作実績
*/
?>

<?php get_header(); ?>

<div class="static-page-title inner fade-in-left">
    <div class="top-text">制作事例</div>
    <div class="bottom-text">WORKS</div>
</div>

<div class="works-tag-filter inner fade-in-left">
    <ul>
        <?php
        $current_tag = isset($_GET['works_tag']) ? $_GET['works_tag'] : '';
        // 「すべて」ボタン（クエリを確実に除去）
        echo '<li><a href="' . esc_url( remove_query_arg('works_tag') ) . '" class="' . ($current_tag == '' ? 'active' : '') . '">すべて</a></li>';

        // 表示したいタグのスラッグと表示名を配列で指定
        $show_tags = [
            'web'=> 'WEB制作・LP制作',
            'visual'=> 'ビジュアルデザイン制作',
            'logo'=> 'ロゴ制作',
        ];

        foreach ($show_tags as $slug => $name) {
            $active = ($current_tag === $slug) ? 'active' : '';
            $tag_url = add_query_arg( array( 'works_tag' => $slug ), remove_query_arg('paged') );
            echo '<li><a href="' . esc_url( $tag_url ) . '" class="' . $active . '">' . esc_html($name) . '</a></li>';
        }
        ?>
    </ul>
</div>

<div class="works-list">
    <?php
   $args = array(
    'post_type' => 'works',
        'posts_per_page' => -1
    );
    if ($current_tag) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'works_tag',
                'field'    => 'slug',
                'terms'    => $current_tag,
            ),
        );
    }
    $works_query = new WP_Query($args);
    if ($works_query->have_posts()):
        while ($works_query->have_posts()):
            $works_query->the_post();
            $work_name = get_field('item-name'); // ACF
            $work_place = get_field('item-place'); // ACF
            $image = get_field('item-img'); // ACF画像フィールド

            // 優先順のスラッグ配列
            $role_order = ['direction', 'design', 'coding', 'photo'];

            // 投稿に紐づく担当部分を取得
            $roles = get_the_terms(get_the_ID(), 'works_role');
            $roles_assoc = [];
            if ($roles && !is_wp_error($roles)) {
                foreach ($roles as $role) {
                    $roles_assoc[$role->slug] = $role;
                }
            }

            // アイコン画像のパスをスラッグごとに指定
            $role_icons = [
                'direction' => get_template_directory_uri() . '/assets/images/logo-direction.svg',
                'design'    => get_template_directory_uri() . '/assets/images/logo-design.svg',
                'coding'    => get_template_directory_uri() . '/assets/images/logo-code.svg',
                'photo'     => get_template_directory_uri() . '/assets/images/logo-camera.svg',
            ];
    ?>
        <div class="work-card">
            <div class="work-card__visual">
                <?php if ($image): ?>
                    <a href="<?php the_permalink(); ?>" class="work-thumb">
                        <?php echo wp_get_attachment_image($image['ID'], 'large'); ?>
                    </a>
                <?php endif; ?>
            </div>



            <div class="work-card__info">
                <div class="work-card__client"><?php echo esc_html($work_place); ?></div>
                <div class="work-card__title"><?php echo esc_html($work_name); ?></div>
                <?php if (!empty($roles_assoc)): ?>
                    <div class="work-card__tags">
                        <?php foreach ($role_order as $slug): ?>
                            <?php if (isset($roles_assoc[$slug])): ?>
                                <span class="work-tag work-tag--<?php echo esc_attr($slug); ?>">
                                    <?php echo esc_html($roles_assoc[$slug]->name); ?>
                                </span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>

<section class="cta">
    <div class="section-title">
      <div class="top-text">
        <p>お問い合わせ</p>
      </div>
      <div class="bottom-text">
        CONTACT
      </div>
    </div>
    <div class="contact-copy">
      「こんなことってお願いできる？」そんな段階でも大丈夫です。<br>
      ご相談・お見積もりはもちろん無料ですので、お気軽にお問い合わせください。
    </div>
    <div class="cta-buttons">
      <a href="<?php echo esc_url( home_url( '/estimate' ) );?>" class="sub-btn">
        無料見積もりをする
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) );?>" class="sub-btn">
        無料相談をする
      </a>
    </div>
</section>

<?php get_footer(); ?>