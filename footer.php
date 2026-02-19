<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__top">
      <div class="footer__brand">
        <div class="footer__logo">
          <a href="/#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="Kenshin Terashima"></a>
        </div>
        <p class="footer__tagline">Webデザイナー / UIUXデザイナー</p>
      </div>

      <div class="footer__content">
        <div class="footer__nav-section">
          <ul class="footer__nav">
            <li><a href="/works/">実績</a></li>
            <li><a href="/#price">料金</a></li>
            <li><a href="/#about">自己紹介</a></li>
            <li><a href="/#service">サービス</a></li>
            <li><a href="/#faq">よくある質問</a></li>
          </ul>
        </div>

        <div class="footer__contact-section">
          <div class="footer__contact-info">
            <a href="mailto:info@kenshin-terashima.com" class="footer__email">info@kenshin-terashima.com</a>
            <a href="https://x.com/kenshin_design_" target="_blank" rel="noopener" class="footer__email">X：@kenshin_designer_</a>
          </div>
        </div>

        <div class="footer__cta-section">
          <div class="footer__cta-buttons">
            <a href="/estimate/" class="footer__cta-btn">無料見積もりをする</a>
            <a href="/contact/" class="footer__cta-btn footer__cta-btn--secondary">カジュアル相談をする</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__bottom">
      <span class="footer__copyright">© <?php echo date('Y'); ?> Kenshin Terashima. All rights reserved.</span>
      <a href="/privacy-policy/" class="footer__privacy">プライバシーポリシー</a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popup.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mobile-menu.js"></script>
</body>
</html>