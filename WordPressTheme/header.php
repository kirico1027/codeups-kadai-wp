<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
      <h1 class="header__logo">
        <?php else : ?>
        <div class="header__logo">
          <?php endif; ?>
          <a href="<?php echo $home; ?>">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/logo.svg" alt="CodeUps">
          </a>
          <?php if (is_front_page()) : ?>
      </h1>
      <?php else : ?>
    </div>
    <?php endif; ?>

    <nav class="header__nav">
      <ul class="header__nav-items">
        <li class="header__nav-item">
          <a href="<?php echo $campaign; ?>">Campaign<span>キャンペーン</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $about; ?>">About&nbsp;us<span>私たちについて</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $information; ?>">Information<span>ダイビング情報</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $blog; ?>">Blog<span>ブログ</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $voice; ?>">Voice<span>お客様の声</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $price; ?>">Price<span>料金一覧</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $faq; ?>">FAQ<span>よくある質問</span></a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo $contact; ?>">Contact<span>お問い合わせ</span></a>
        </li>
      </ul>
    </nav>
    <div class="header__hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="header__drawer js-drawer">
      <div class="header__drawer-wrapper">
        <nav class="header__drawer-nav">
          <div class="header__drawer-items">
            <div class="header__drawer-content">
              <div class="header__drawer-block">
                <div class="header__drawer-item header__drawer-item--main">
                  <a href="<?php echo $campaign; ?>">キャンペーン</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $campaign_category_license; ?>">ライセンス講習</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $campaign_category_trial_diving; ?>">体験ダイビング</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $campaign_category_fun_diving; ?>">ファンダイビング</a>
                </div>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $about; ?>">私たちについて</a>
              </div>
              <div class="header__drawer-block">
                <div class="header__drawer-item header__drawer-item--main">
                  <a href="<?php echo $information; ?>">ダイビング情報</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $information; ?>?tab=tab01">ライセンス講習</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $information; ?>?tab=tab03">体験ダイビング</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $information; ?>?tab=tab02">ファンダイビング</a>
                </div>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $blog; ?>">ブログ</a>
              </div>
            </div>
            <div class="header__drawer-content">
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $voice; ?>">お客様の声</a>
              </div>
              <div class="header__drawer-block">
                <div class="header__drawer-item header__drawer-item--main">
                  <a href="<?php echo $price; ?>">料金一覧</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $price; ?>#price-license">ライセンス講習</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $price; ?>#price-trial">体験ダイビング</a>
                </div>
                <div class="header__drawer-item">
                  <a href="<?php echo $price; ?>#price-fun">ファンダイビング</a>
                </div>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $faq; ?>">よくある質問</a>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $privacypolicy; ?>">プライバシー<br>ポリシー</a>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $terms_of_service; ?>">利用規約</a>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </div>
              <div class="header__drawer-item header__drawer-item--main">
                <a href="<?php echo $sitemap; ?>">サイトマップ</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>