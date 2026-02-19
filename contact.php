<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
<section class="contact">

    <div class="static-page-title inner">
        <div class="top-text">お問い合わせ</div>
        <div class="bottom-text">CONTACT</div>
    </div>

    <div class="contact-main inner">
        <div class="contact-info">
            <div class="mail">
                <div class="mail-copy">
                    <p>Mail</p>
                </div>
                <div class="e-mail">
                    <a href="mailto:kenshin.terahsima@gmail.com">kenshin.terahsima@gmail.com</a>
                </div>
            </div>
            <div class="social">
                <div class="social-copy">
                    <p>Social</p>
                </div>
                <div class="x">
                    <a href="https://x.com/kenshin_design_" target="_blank" rel="noopener">X：@kenshin_designer_</a>
                </div>
            </div>
        </div>

        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="f43cf68" title="コンタクトフォーム"]'); ?>  
        </div>
    </div>

</section>

<?php get_footer(); ?>