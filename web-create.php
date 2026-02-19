<?php
/*
Template Name: WEB制作
*/
?>

<?php get_header(); ?>

<div class="service-top inner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back-icon.svg" alt="">
    <a href="<?php echo home_url('/#service'); ?>" class="back-copy" aria-label="サービス一覧へ戻る">SERVICE一覧</a>
</div>

<section class="web-create-main inner-small fade-in-left">
    <h1 class="web-create-title">
        <span class="jp">WEB制作</span>
        <span class="en">Website Development</span>
    </h1>
    <div class="web-create-desc">
    目的に合わせて、伝わるデザインと動線設計を。デザイン〜公開後サポートまで一貫して対応。<br>
    ただ見た目がきれいなだけでなく、伝えたい情報がしっかり届き、次のアクションにつながる構成を意識して制作します。<br>
    「誰に何を届けるか」を丁寧に考えながら、お客様と伴走するホームページをお作りします。
    </div>
</section>

<div class="web-create-image-area fade-in-left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-fv.jpg" alt="WEB制作イメージ">
</div>

<section class="web-create-copy inner-small">
    <div class="main-copy">
        <div class="copy top">お客様のビジネスの課題を</div>
        <div class="copy bottom">デザインを通して解決する伴走型クリエイティブ</div>
    </div>

    <div class="sub-copy">
        <p>ただホームページを作るだけでは、採用も問い合わせも自然とは増えません。<br>
        大切なのは「誰に」「何を」「どう伝えるか」。<br>
        課題の本質を見極め、デザインと戦略の両面から最適な形を伴走しながら共につくり上げていきます。<br>
        パートナーとして何でもご相談ください。
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
                        <div class="point-title">戦略設計の視点</div>
                        <p>ただデザインを整えるだけでなく、「なぜ作るのか」「誰に届けるのか」「どんな成果を出したいのか」といった目的や課題を明確にする戦略設計から関わります。
                        採用を強化したい、問い合わせを増やしたい、信頼感を高めたいなど、ビジネスのゴールを踏まえて、構成・導線・文章のトーンまで設計します。</p>
                    </div>
                </div>

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-1.svg" alt="">
                </div>
            </div>

            <!-- 2つ目 -->
            <div class="strongs-point__item">

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-2.svg" alt="">
                </div>

                <div class="left-copy">
                    <div class="num">02</div>
                    <div class="content-copy">
                        <div class="point-title">ユーザー視点のデザイン設計</div>
                        <p>訪れた人が「迷わず行動できる」「ストレスなく情報を得られる」ことを第一に考えたUI/UXデザインを行います。<br>
                        パソコン・スマホ・タブレットなど、あらゆる端末で心地よく閲覧できるレスポンシブ設計はもちろん、ユーザーの行動心理に沿ったデザインで、成果につながる体験を作ります。</p>
                    </div>
                </div>
            </div>

            <!-- 3つ目 -->
            <div class="strongs-point__item">
                <div class="left-copy">
                    <div class="num">03</div>
                    <div class="content-copy">
                        <div class="point-title">公開後までサポートあり</div>
                        <p>制作して終わりではなく、納品後の運用や更新にも伴走します。<br>
                        必要に応じて更新マニュアルを作成したり、運用フェーズでの相談にも対応。ご自身での更新が難しい方には、代行や改善提案なども可能です。長期的に価値を発揮するサイトづくりを、一緒に育てていくスタンスです。</p>
                    </div>
                </div>

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-3.svg" alt="">
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
                    'terms'    => 'web',
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