<?php
/*
Template Name: 制作物シングルページ
*/
?>

<?php get_header(''); ?>


<div class="single-works inner">
    <div class="single-works__header">
        <div class="single-works__header_left">

            <div class="single-works__client">
                <?php
                $work_place = get_field('item-place');
                if ($work_place) {
                    echo esc_html($work_place);
                }
                ?>
            </div>

            <div class="single-works__title">
                <h1><?php echo esc_html(get_field('item-name')); ?></h1>
            </div>

            <div class="single-works__roles">
                <?php
                // 優先順のスラッグ配列
                $role_order = ['direction', 'design', 'coding', 'photo'];
                // 担当範囲（works_role）を取得
                $roles = get_the_terms(get_the_ID(), 'works_role');
                $roles_assoc = [];
                if ($roles && !is_wp_error($roles)) {
                    foreach ($roles as $role) {
                        $roles_assoc[$role->slug] = $role;
                    }
                    foreach ($role_order as $slug) {
                        if (isset($roles_assoc[$slug])) {
                            echo '<span class="work-tag work-tag--' . esc_attr($slug) . '">' . esc_html($roles_assoc[$slug]->name) . '</span>';
                        }
                    }
                }
                ?>
            </div>

        </div>
        
        <div class="single-works__header_right">
            
        </div>

        

    </div>

    <?php
    $image = get_field('item-img');
    if ($image):
    ?>
        <div class="single-works__image">
            <?php echo wp_get_attachment_image($image['ID'], 'large'); ?>
        </div>
    <?php endif; ?>

    <div class="single-works__body">
        <div class="single-works__row">

            <div class="section-title">
                <div class="top-text">
                    <p>制作概要</p>
                </div>
                <div class="bottom-text">
                    OVERVIEW
                </div>
            </div>

            <div class="single-works__text">
                <?php echo nl2br(esc_html(get_field('item-overview'))); ?>
            </div>
        </div>

        <div class="gallery">
            <?php
                $main_video = get_field('main_video');
                if ($main_video) {
                    if (is_array($main_video) && isset($main_video['url'])) {
                        $video_url = $main_video['url'];
                    } else {
                        $video_url = $main_video;
                    }
                    echo '<video src="' . esc_url($video_url) . '" autoplay muted playsinline loop></video>';
                }
            ?>
            <div class="sub-images">
                <?php
                $gallery_images = [];
                $gallery_image_1 = get_field('gallery_image_1');
                $gallery_image_2 = get_field('gallery_image_2');
                $gallery_images[] = $gallery_image_1;
                $gallery_images[] = $gallery_image_2;
                foreach ($gallery_images as $img) {
                    if ($img) {
                        echo '<div class="image1">';
                        if (is_array($img) && isset($img['url'])) {
                            // 画像配列
                            echo '<img src="' . esc_url($img['url']) . '" alt="">';
                        } elseif (is_numeric($img)) {
                            // 画像ID
                            echo wp_get_attachment_image($img, 'large');
                        } elseif (is_string($img)) {
                            // 画像URL
                            echo '<img src="' . esc_url($img) . '" alt="">';
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
    <a href="javascript:history.back();" class="main-btn">
        一覧へ戻る
    </a>
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