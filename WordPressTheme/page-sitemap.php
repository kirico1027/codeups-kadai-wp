<?php get_header(); ?>

<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="page-sitemap layout-page-sitemap">
    <div class="page-sitemap__inner inner">

      <nav class="page-sitemap__nav sitemap-nav">
        <div class="sitemap-nav__items">

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
          ?>

          <div class="sitemap-nav__container">
            <div class="sitemap-nav__content">
              <div class="sitemap-nav__block">
                <div class="sitemap-nav__item sitemap-nav__item--main">
                  <a href="<?php echo $campaign; ?>">キャンペーン</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $campaign_category_license; ?>">ライセンス講習</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $campaign_category_trial_diving; ?>">体験ダイビング</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $campaign_category_fun_diving; ?>">ファンダイビング</a>
                </div>
              </div>
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $about; ?>">私たちについて</a>
              </div>
            </div>
            <div class="sitemap-nav__content">
              <div class="sitemap-nav__block">
                <div class="sitemap-nav__item sitemap-nav__item--main">
                  <a href="<?php echo $information; ?>">ダイビング情報</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $information; ?>?tab=tab01">ライセンス講習</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $information; ?>?tab=tab03">体験ダイビング</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $information; ?>?tab=tab02">ファンダイビング</a>
                </div>
              </div>
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $blog; ?>">ブログ</a>
              </div>
            </div>
          </div>
          <div class="sitemap-nav__container">
            <div class="sitemap-nav__content sitemap-nav__content--second">
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $voice; ?>">お客様の声</a>
              </div>
              <div class="sitemap-nav__block">
                <div class="sitemap-nav__item sitemap-nav__item--main">
                  <a href="<?php echo $price; ?>">料金一覧</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $price; ?>#price-license">ライセンス講習</a>
                </div>
                <div class="sitemap-nav__item">
                  <a href="<?php echo $price; ?>#price-trial">体験ダイビング</a>
                </div>
                <div class=" sitemap-nav__item">
                  <a href="<?php echo $price; ?>#price-fun">ファンダイビング</a>
                </div>
              </div>
            </div>
            <div class="sitemap-nav__content sitemap-nav__content--second">
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $faq; ?>">よくある質問</a>
              </div>
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile">ポリシー</a>
              </div>
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $terms_of_service; ?>">利用規約</a>
              </div>
              <div class="sitemap-nav__item sitemap-nav__item--main">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </div>
            </div>
          </div>
        </div>
      </nav>

    </div>
  </div>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>