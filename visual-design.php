<?php
/*
Template Name: ビジュアルデザイン制作
*/
?>

<?php get_header(); ?>

<div class="service-top inner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back-icon.svg" alt="">
    <a href="<?php echo home_url('/#service'); ?>" class="back-copy" aria-label="サービス一覧へ戻る">SERVICE一覧</a>
</div>

<section class="web-create-main inner-small fade-in-left">
    <h1 class="web-create-title">
        <span class="jp">ビジュアルデザイン制作</span>
        <span class="en">Visual Design</span>
    </h1>
    <div class="web-create-desc">
    「わかりやすさ」と「伝える力」にこだわった資料づくり。<br>
    名刺・会社紹介・営業資料・社内マニュアルなど、情報を整理し、視覚的にも理解しやすいデザインで仕上げます。<br>
    「内容はあるけど、伝え方に悩んでいる」という方に、企画段階から丁寧に寄り添います。
    </div>
</section>

<div class="web-create-image-area fade-in-left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual-fv.jpg" alt="WEB制作イメージ">
</div>

<section class="web-create-copy inner-small">
    <div class="main-copy">
        <div class="copy top">あらゆるビジネス資料を</div>
        <div class="copy bottom">"わかりやすく、すぐ伝わる"かたちに整理・再構築</div>
    </div>

    <div class="sub-copy">
        <p>内容はあるけれど伝え方に悩んでいる――<br>
        そんな方に、企画段階から寄り添い、情報設計・構成・デザインまで一貫してサポートします。<br>
        単なる装飾ではなく、見る人に届く・動かすためのビジュアルデザインをご提案します。
        </p>
    </div>
</section>

<section class="strongs-point-section">
  <div class="strongs-point inner-small">
        <div class="section-title">
            <div class="top-text">
                <p>制作ポイント</p>
            </div>
            <div class="bottom-text">
                STRONG POINT
            </div>
        </div>

        <div class="strongs-point__list">
            <!-- 1つ目 -->
            <div class="strongs-point__item">
                <div class="left-copy">
                    <div class="num">01</div>
                    <div class="content-copy">
                        <div class="point-title">情報を整理する力</div>
                        <p>内容を正しく伝えるために、まず「構造」を整える。<br>
                            伝えたいことが複雑だったり情報量が多くても、見やすく・伝わりやすく整理することで、資料全体の説得力は大きく変わります。<br>
                            単なる装飾ではなく、「何をどう見せるか」から設計し、要点が自然と伝わる資料づくりを心がけています。
                        </p>
                    </div>
                </div>

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual-1.svg" alt="">
                </div>
            </div>

            <!-- 2つ目 -->
            <div class="strongs-point__item">

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual-2.svg" alt="">
                </div>

                <div class="left-copy">
                    <div class="num">02</div>
                    <div class="content-copy">
                        <div class="point-title">伝え方から一緒に考える</div>
                        <p>「デザインする前」の段階から伴走。<br>
                            内容はあるけど、どう構成していいかわからない…そんな状態でも大丈夫です。<br>
                            ヒアリングを通して、情報の優先順位や伝えるべき相手のことを一緒に整理し、「伝えるべきこと」を軸にした資料づくりをサポートします。
                    </div>
                </div>
            </div>

            <!-- 3つ目 -->
            <div class="strongs-point__item">
                <div class="left-copy">
                    <div class="num">03</div>
                    <div class="content-copy">
                        <div class="point-title">視覚的に理解しやすいデザイン</div>
                        <p>
                        見た目で直感的に伝わる、だから理解される。<br>
                        グラフ、図解、レイアウト、余白、フォントなど、視覚的要素にこだわり、読み手の理解を助けるデザインに仕上げます。<br>
                        特に、初見でも内容がスッと入ってくるような構成や、目線の流れを意識した設計で、相手に伝わる・動かす資料を目指します。</p>
                    </div>
                </div>

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual-3.svg" alt="">
                </div>
            </div>

        </div>
    
  </div>
</section>

<section class="related-work inner-small">
    <div class="section-title">
        <div class="top-text">
            <p>関連する実例集</p>
        </div>
            <div class="bottom-text">
                RELATED WORK
            </div>
    </div>

    <div class="related-list">
        <?php
        $args = array(
            'post_type' => 'works',
            'posts_per_page' => 2,
            'tax_query' => array(
                array(
                    'taxonomy' => 'works_tag',
                    'field'    => 'slug',
                    'terms'    => 'visual',
                ),
            ),
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $related_query = new WP_Query($args);
        if ($related_query->have_posts()):
            while ($related_query->have_posts()): $related_query->the_post();
                $work_name = get_field('item-name');
                $work_place = get_field('item-place');
                $image = get_field('item-img');
                $roles = get_the_terms(get_the_ID(), 'works_role');
        ?>
    <a href="<?php the_permalink(); ?>" class="work-card">
        <div class="work-card__visual">
            <?php if ($image): ?>
                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="" />
            <?php endif; ?>
        </div>
        <div class="work-card__info">
            <div class="work-card__client"><?php echo esc_html($work_place); ?></div>
            <div class="work-card__title"><?php echo esc_html($work_name); ?></div>
            <?php if ($roles): ?>
                <div class="work-card__tags">
                    <?php foreach ($roles as $role): ?>
                        <span class="work-tag"><?php echo esc_html($role->name); ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </a>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
</div>

</section>

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