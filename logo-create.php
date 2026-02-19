<?php
/*
Template Name: ロゴ制作
*/
?>

<?php get_header(); ?>

<div class="service-top inner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back-icon.svg" alt="">
    <a href="<?php echo home_url('/#service'); ?>" class="back-copy" aria-label="サービス一覧へ戻る">SERVICE一覧</a>
</div>

<section class="web-create-main inner-small fade-in-left">
    <h1 class="web-create-title">
        <span class="jp">ロゴ制作</span>
        <span class="en">Logo Creation</span>
    </h1>
    <div class="web-create-desc">
    想いをかたちにし、ブランドの“らしさ”を引き出します。<br>
    ヒアリングをもとに、事業やサービスの本質をデザインに落とし込みます。<br>
    シンボル・タイポグラフィ・色などのバランスを考えながら、長く使えるロゴをご提案します。名刺やWebでの展開も想定し、使いやすさにも配慮しています。
    </div>
</section>

<div class="web-create-image-area fade-in-left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fv.jpg" alt="WEB制作イメージ">
</div>

<section class="web-create-copy inner-small">
    <div class="main-copy">
        <div class="copy top">想いをかたちにし、</div>
        <div class="copy bottom">ブランドの“らしさ”を引き出すロゴを制作。</div>
    </div>

    <div class="sub-copy">
        <p>ヒアリングを通して、事業やサービスの核となる想いや強みを丁寧に言語化し、シンボル・書体・色のバランスを考慮したデザインに落とし込みます。<br>
            名刺・Web・SNSなど、さまざまなシーンで使われることを想定し、視認性・汎用性・展開力にもこだわって設計。<br>
            長く愛され、使い続けられるロゴを一緒に作っていきます。
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
                        <div class="point-title">ブランドの本質を掘り下げるヒアリング</div>
                        <p>見た目だけでなく、“らしさ”を言語化してからデザイン。<br>
                            事業の特徴や想い、なぜこのサービスをやっているのか──そうした「言葉になっていない部分」まで丁寧にヒアリングします。<br>
                            表面的なデザインではなく、ブランドの根っこにある価値観を表現できるロゴをご提案します。
                    </div>
                </div>

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-1.svg" alt="">
                </div>
            </div>

            <!-- 2つ目 -->
            <div class="strongs-point__item">

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.svg" alt="">
                </div>

                <div class="left-copy">
                    <div class="num">02</div>
                    <div class="content-copy">
                        <div class="point-title">バランス設計と汎用性の追求</div>
                        <p>使いやすさ・展開のしやすさもロゴの大切な要素。<br>
                            Webや名刺、SNSアイコン、看板など、さまざまな場面で使用されることを前提に、サイズや背景に左右されにくい設計を意識。<br>
                            文字とマークの組み合わせ、色の再現性、縮小時の視認性など、実務で“困らない”ロゴに仕上げます。</p>
                    </div>
                </div>
            </div>

            <!-- 3つ目 -->
            <div class="strongs-point__item">
                <div class="left-copy">
                    <div class="num">03</div>
                    <div class="content-copy">
                        <div class="point-title">長く愛される、シンプルな強さ</div>
                        <p>一過性のトレンドよりも、普遍的な“らしさ”を。<br>
                            流行に左右されすぎない、シンプルで記憶に残るロゴデザインを重視しています。<br>
                            長く使い続けられることを前提に、何年経っても愛着が持てる“その会社らしさ”を象徴するロゴを目指します。</p>
                    </div>
                </div>

                <div class="right-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-3.svg" alt="">
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
                    'terms'    => 'logo',
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