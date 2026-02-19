<?php
/*
Template Name: Component
*/
?>
<?php get_header(); ?>
<div class="inner">
<div class="section-title">
    <div class="top-text">
        <p>製作事例</p>
    </div>
    <div class="bottom-text">
        WORKS
    </div>
</div>

<div class="static-page-title">
    <div class="top-text">制作事例</div>
    <div class="bottom-text">WORKS</div>
</div>
  
<a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="main-btn">
    くわしくみる
</a>

<a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="sub-btn">
    くわしくみる
</a>

<div class="service-fv">
    <div class="service-fv__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-hand-drawn.png" alt="セールスプロモーション" />
    </div>
    <div class="service-fv__text">
        <div class="title">
            <div class="en">・Hand-lettering & Illustration</div>
            <div class="ja">書き文字・イラスト</div>
        </div>
        <div class="brief">
            職人の手によるレタリング技術を活かし、看板や壁面などに直接文字やイラストを描きます。<br>
            人間だからこそ出せる温かみや個性が魅力で、店舗の雰囲気づくりやアイキャッチに効果的です。
        </div>
    </div>
</div>

<div class="label-list">
    <ul class="label-list-inner">
        <li><a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="label-btn-all">すべて</a></li>
        <li><a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="label-btn-all">書き文字・イラスト</a></li>
        <li><a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="label-btn-all">木看板・立体看板</a></li>
        <li><a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="label-btn-all">エアブラシ・レタリング・ピンスト</a></li>
        <li><a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="label-btn-all">一般看板</a></li>
    </ul>
</div>

<div class="info-list company-info">
    <div class="row">
        <div class="label">会社名</div>
        <div class="value">株式会社ゼニソ / Zenithor Inc.</div>
    </div>

    <div class="row">
        <div class="label">所在地</div>
        <div class="value">
            〒461-0004<br>
            愛知県名古屋市東区葵一丁目7-12
        </div>
    </div>
    <div class="row">
        <div class="label">設立</div>
        <div class="value">2024年6月6日</div>
    </div>
    <div class="row">
        <div class="label">代表者</div>
        <div class="value">倉掛 鷹斗</div>
    </div>
    <div class="row">
        <div class="label">資本金</div>
        <div class="value">500,000円</div>
    </div>
    <div class="row">
        <div class="label">従業員数</div>
        <div class="value">6名</div>
    </div>
    <div class="row">
        <div class="label">主要取引先</div>
            <div class="value">
                <ul>
                    <li>株式会社クロップス</li>
                    <li>株式会社グラスト</li>
                    <li>株式会社 FitFounder</li>
                </ul>
            </div>
        </div>
            <div class="row">
                <div class="label">事業内容</div>
                <div class="value">
                    <ul>
                    <li>セールスプロモーション事業</li>
                    <li>コンサルティング事業</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="label">連絡先</div>
                <div class="value">
                    <ul>
                    <li>Email : zenithor.6@gmail.com</li>
                    <li>TEL : 080-2646-3794</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="label">URL</div>
                <div class="value">
                    https://www.zenithor.com
                </div>
            </div>
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

</div>


<section class="news inner">


        <div class="news__body inner-mid">
            <div class="section-title">
                <div class="ja">お知らせ</div>
                <div class="en">News</div>
            </div>
            <ul class="news__list">
                <?php
                $news_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                ?>
                        <article class="news__item">
                            <time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="news__date">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                            <a href="<?php the_permalink(); ?>" class="news__title"><?php the_title(); ?></a>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>
        <a href="<?php echo esc_url( home_url( '/news' ) );?>"  class="main-btn">
            くわしくみる
            <div class="icon-arrow"></div>                              
        </a>
</section>

