<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <section class="page-about-lead layout-page-about-lead">
    <div class="page-about-lead__inner inner">
      <div class="page-about-lead__content-sp">
        <div class="page-about-lead__image">
          <figure class="page-about-lead__image-right">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/about02.jpg"
              alt="屋根瓦の上に置かれた置物と海中を泳ぐ色鮮やかなサカナの画像" loading="lazy">
          </figure>
          <h2 class="page-about-lead__body-title">Dive&nbsp;into<br>the&nbsp;Ocean</h2>
        </div>
        <div class="page-about-lead__box">
          <p class="page-about-lead__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
      <div class="page-about-lead__content-pc about-main-image">
        <div class="about-main-image__image">
          <figure class="about-main-image__image-left">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/about01-pc.jpg"
              alt="屋根瓦の上に置かれた置物と海中を泳ぐ色鮮やかなサカナの画像" loading="lazy">
          </figure>
          <figure class="about-main-image__image-right">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/about02-pc.jpg"
              alt="屋根瓦の上に置かれた置物と海中を泳ぐ色鮮やかなサカナの画像" loading="lazy">
          </figure>
        </div>
        <div class="about-main-image__body">
          <h2 class="about-main-image__body-title">Dive&nbsp;into<br>the&nbsp;Ocean</h2>
          <div class="about-main-image__box">
            <p class="about-main-image__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              <span class="u-desktop">が入ります。</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-about-gallery layout-page-about-gallery">
    <div class="page-about-gallery__inner inner">
      <div class="page-about-gallery__title section-title">
        <p class="section-title__main">Gallery</p>
        <h2 class="section-title__sub">フォト</h2>
      </div>
      <div class="page-about-gallery__container">
        <?php
        $gallery_group = SCF::get_option_meta('gallery-option', 'about-us_gallery');
        if ($gallery_group) :
          foreach ($gallery_group as $item) :
        ?>
        <div class="page-about-gallery__image">
          <img src="<?php echo wp_get_attachment_url($item['gallery_image']); ?>" alt="">
        </div>
        <?php
          endforeach;
        else :
          ?>
        <p>No images found.</p>
        <?php endif; ?>
      </div>

      <div class="page-about-gallery__modal modal-image"></div>
    </div>
  </section>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>