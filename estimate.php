<?php
/*
Template Name: お見積もり
*/
?>

<?php get_header(); ?>

<section class="estimate">

    <div class="estimate-wrapper inner">
        <div class="static-page-title">
            <div class="top-text">無料お見積もり</div>
            <div class="bottom-text">ESTIMATE</div>
        </div>

        <div class="estimate-main">
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="903c96d" title="見積もり"]'); ?>  
            </div>
        </div>
    </div>

</section>

<section class="estimate-faq">
    <div class="inner">
        <div class="section-title">
            <div class="top-text">
                <p>よくある質問</p>
            </div>
            <div class="bottom-text">
                FAQ
            </div>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>制作期間はどのくらいかかりますか？</h3>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>プロジェクトの規模や内容により異なりますが、一般的にコーポレートサイトの場合、約2〜3ヶ月程度かかります。詳細なスケジュールについては、お見積もりの際にご相談いただけます。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>修正回数に制限はありますか？</h3>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>デザイン修正は3回まで無料で対応いたします。それ以上のご希望がある場合は、別途お見積もりをご提示いたします。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>公開後のサポートはありますか？</h3>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>はい、公開後のサポートにも対応しております。月々の保守費用をご用意しておりますので、詳細についてはお気軽にお問い合わせください。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>WordPressを使わない場合も対応できますか？</h3>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>はい、静的HTMLサイトも対応可能です。お客様のご要望に合わせて最適な方法をご提案いたします。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>