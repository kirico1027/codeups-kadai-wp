  <footer class="footer layout-footer">
    <div class="footer__inner inner">
      <div class="footer__content">

        <?php
        $home = esc_url(home_url("/"));
        $campaign = esc_url(home_url("/campaign"));
        $about = esc_url(home_url("/about-us"));
        $information = esc_url(home_url("/information"));
        $blog = esc_url(home_url("/blog"));
        $voice = esc_url(home_url("/voice"));
        $price = esc_url(home_url("/price"));
        $faq = esc_url(home_url("/faq"));
        $contact = esc_url(home_url("/contact"));
        $campaign_category_license = esc_url(home_url("/campaign_category/license"));
        $campaign_category_trial_diving = esc_url(home_url("/campaign_category/trial_diving"));
        $campaign_category_fun_diving = esc_url(home_url("/campaign_category/fun_diving"));
        $privacypolicy = esc_url(home_url("/privacypolicy"));
        $terms_of_service = esc_url(home_url("/terms-of-service"));
        $sitemap = esc_url(home_url("/sitemap"));
        ?>

        <div class="footer__head-box">
          <div class="footer__logo">
            <a href="<?php echo $home; ?>">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/logo.svg" alt="CodeUps">
            </a>
          </div>

          <div class="footer__sns">
            <a class="footer__sns-icon" href="https://www.facebook.com" target="_blank" rel="noopener">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/facebook.svg" alt="facebook">
            </a>
            <a class="footer__sns-icon" href="https://www.instagram.com" target="_blank" rel="noopener">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/instagram.svg" alt="instagram">
            </a>
          </div>
        </div>
        <nav class="footer__nav">
          <div class="footer__nav-items">
            <div class="footer__nav-container">
              <div class="footer__nav-content">
                <div class="footer__nav-block">
                  <div class="footer__nav-item footer__nav-item--main">
                    <a href="<?php echo $campaign; ?>">キャンペーン</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $campaign_category_license; ?>">ライセンス講習</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $campaign_category_trial_diving; ?>">体験ダイビング</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $campaign_category_fun_diving; ?>">ファンダイビング</a>
                  </div>
                </div>
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $about; ?>">私たちについて</a>
                </div>
              </div>
              <div class="footer__nav-content">
                <div class="footer__nav-block">
                  <div class="footer__nav-item footer__nav-item--main">
                    <a href="<?php echo $information; ?>">ダイビング情報</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $information; ?>?tab=tab01">ライセンス講習</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $information; ?>?tab=tab03">体験ダイビング</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $information; ?>?tab=tab02">ファンダイビング</a>
                  </div>
                </div>
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $blog; ?>">ブログ</a>
                </div>
              </div>
            </div>
            <div class="footer__nav-container">
              <div class="footer__nav-content footer__nav-content--second">
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $voice; ?>">お客様の声</a>
                </div>
                <div class="footer__nav-block">
                  <div class="footer__nav-item footer__nav-item--main">
                    <a href="<?php echo $price; ?>">料金一覧</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $price; ?>#price-license">ライセンス講習</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $price; ?>#price-trial">体験ダイビング</a>
                  </div>
                  <div class="footer__nav-item">
                    <a href="<?php echo $price; ?>#price-fun">ファンダイビング</a>
                  </div>
                </div>
              </div>
              <div class="footer__nav-content footer__nav-content--second">
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $faq; ?>">よくある質問</a>
                </div>
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile">ポリシー</a>
                </div>
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $terms_of_service; ?>">利用規約</a>
                </div>
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $contact; ?>">お問い合わせ</a>
                </div>
                <div class="footer__nav-item footer__nav-item--main">
                  <a href="<?php echo $sitemap; ?>">サイトマップ</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <small
          class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;<?php echo wp_date("Y"); ?>&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
      </div>
    </div>
  </footer>
  <a href="#" class="layout-page-top page-top js-page-top"></a>
  <?php wp_footer(); ?>
  </body>

  </html>