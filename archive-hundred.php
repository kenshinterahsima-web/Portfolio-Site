<?php
/*
Template Name: 私を構成する100のコト
*/
?>

<?php get_header(); ?>
<div class="section-title me">
    <div class="top-text">
        <p>私を構成する</p>
    </div>
    <div class="bottom-text">
        100のコト
    </div>
</div>

<div class="hundred-list inner">
  <?php
    $args = array(
      'post_type' => 'hundred',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'ASC'
    );
    $hundred_query = new WP_Query($args);
    if ($hundred_query->have_posts()):
      while ($hundred_query->have_posts()): $hundred_query->the_post();
        $image = get_field('image');
        $comment = get_field('comment');
  ?>
    <div class="hundred-item">
      <img src="<?php echo esc_url($image['sizes']['medium']); ?>"
           alt=""
           class="popup-image"
           data-comment="<?php echo esc_attr($comment); ?>"
           data-img="<?php echo esc_url($image['sizes']['large']); ?>">
    </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
</div>

<div id="popup">
  <div id="popup-image"></div>
  <div id="popup-content"></div>
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