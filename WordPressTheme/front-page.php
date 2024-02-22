<?php get_header(); ?>
<main>
  <section class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__main-title">diving</h2>
        <p class="mv__sub-title">into&nbsp;the&nbsp;ocean</p>
      </div>
      <div class="mv__swiper mv-swiper swiper js-mv-swiper">
        <div class="mv-swiper__wrapper swiper-wrapper">

          <?php $fields = SCF::get('mv_image'); ?>
          <?php foreach ($fields as $field) : ?>
          <div class="mv-swiper__slide swiper-slide">
            <picture class="mv-swiper__image">
              <source srcset="<?php echo wp_get_attachment_url($field['mv_image_pc']); ?>" alt="" media=" (min-width:
                768px)" type="image/jpg">
              <img src="<?php echo wp_get_attachment_url($field['mv_image_sp']); ?>" alt="" loading="lazy">
            </picture>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="campaign layout-campaign">
    <div class="campaign__inner">
      <div class="campaign__swiper-button-wrap">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div class="campaign__title section-title">
        <p class="section-title__main">Campaign</p>
        <h2 class="section-title__sub">キャンペーン</h2>
      </div>
      <div class="campaign__content">
        <div class="campaign__swiper swiper js-campaign-swiper">

          <ul class="campaign__cards swiper-wrapper">
            <?php
            $args = array(
              "post_type" => "campaign",
              "posts_per_page" => 4,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="campaign__card campaign-card swiper-slide">
              <div class="campaign-card__item">
                <figure class="campaign-card__img">
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.jpg")); ?>"
                    alt="NoImage画像" loading="lazy">
                  <?php endif; ?>
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__category">
                    <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                      if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {
                        foreach ($taxonomy_terms as $taxonomy_term) {
                          echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                        }
                      } else {
                        echo '<span>No category</span>'; // タクソノミーが存在しない場合の処理を追加
                      }
                      ?>
                  </div>
                  <h2 class="campaign-card__title-main"><?php the_title(); ?></h2>
                  <p class="campaign-card__title-sub">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price">
                    <span>¥<?php the_field("price_before"); ?></span>¥<?php the_field("price_after"); ?>
                  </p>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button"><span>View&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <section class="about layout-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__main">About&nbsp;us</p>
        <h2 class="section-title__sub">私たちについて</h2>
      </div>
      <div class="about__main-image about-main-image">
        <div class="about-main-image__image">
          <picture class="about-main-image__image-left">
            <source srcset="<?php echo get_theme_file_uri() ?>/assets/images/common/about01-pc.jpg"
              media="(min-width: 768px)" type="image/jpg">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/about01.jpg" alt="屋根瓦の上に置かれた置物の画像"
              loading="lazy">
          </picture>
          <picture class="about-main-image__image-right">
            <source srcset="<?php echo get_theme_file_uri() ?>/assets/images/common/about02-pc.jpg"
              media="(min-width: 768px)" type="image/jpg">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/about02.jpg" alt="海中を泳ぐ色鮮やかなサカナの画像"
              loading="lazy">
          </picture>
        </div>
        <div class="about-main-image__body">
          <p class="about-main-image__body-title">Dive&nbsp;into<br>the&nbsp;Ocean</p>
          <div class="about-main-image__box">
            <p class="about-main-image__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span
                class="u-desktop">が入ります。</span>
            </p>
            <div class="about-main-image__button">
              <a href="<?php echo esc_url(home_url("/about")) ?>" class="button"><span>View&nbsp;more</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__main">Information</p>
        <h2 class="section-title__sub">ダイビング情報</h2>
      </div>
      <div class="information__card information-card">
        <figure class="information-card__img js-colorbox">
          <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/information.jpg"
            alt="海底のサンゴ群の上を優雅に泳ぐ色鮮やかなサカナの画像" loading="lazy">
        </figure>
        <div class="information-card__body">
          <p class="information-card__title">ライセンス講習</p>
          <p class="information-card__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="button"><span>View&nbsp;more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog">
    <div class="blog__inner">
      <div class="blog__title section-title">
        <p class="section-title__main section-title__main--blog">Blog</p>
        <h2 class="section-title__sub section-title__sub--blog">ブログ</h2>
      </div>
      <ul class="blog__cards blog-cards">
        <?php
        $args = array(
          "post_type" => "post",
          "posts_per_page" => 3,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="blog-cards__card blog-card">
          <a href="<?php the_permalink(); ?>">
            <div class="blog-card__item">
              <figure class="blog-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.jpg")); ?>"
                  alt="NoImage画像" loading="lazy">
                <?php endif; ?>
              </figure>
              <div class="blog-card__body">
                <time datetime="<?php the_time('c'); ?>" class="blog-card__date date"><?php the_time('Y.m/d'); ?></time>
                <h2 class="blog-card__title"><?php echo wp_trim_words(get_the_title(), 16, '…'); ?></h2>
                <p class="blog-card__text">
                  <?php echo wp_trim_words(get_the_content(), 90, '…'); ?>
                </p>
              </div>
            </div>
          </a>
        </li>
        <?php
          endwhile;
          wp_reset_postdata(); // メインクエリのリセット
        else :
          echo "<p>該当する投稿はありません。</p>"; // 投稿が見つからない場合のメッセージ
        endif;
        ?>
      </ul>
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url("/blog")) ?>" class="button"><span>View&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__main">Voice</p>
        <h2 class="section-title__sub">お客様の声</h2>
      </div>
      <ul class="voice__cards voice-cards">
        <?php
        $args = array(
          "post_type" => "voice",
          "posts_per_page" => 2,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="voice-cards__card voice-card">
          <a href="#">
            <div class="voice-card__item">
              <div class="voice-card__head">
                <div class="voice-card__content">
                  <div class="voice-card__box">
                    <span class="voice-card__info"><?php the_field('personal_info'); ?></span><br><span
                      class="voice-card__category">
                      <?php
                          $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                          if (!empty($taxonomy_terms)) {
                            foreach ($taxonomy_terms as $taxonomy_term) {
                              echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                            }
                          }
                          ?></span>
                  </div>
                  <h2 class="voice-card__title">
                    <?php echo wp_trim_words(get_the_title(), 20, '…'); ?>
                  </h2>
                </div>
                <figure class="voice-card__img js-colorbox">
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri("/images/common/noimage.jpg")); ?>" alt="NoImage画像"
                    loading="lazy">
                  <?php endif; ?>
                </figure>
              </div>
              <p class="voice-card__text">
                <?php echo wp_trim_words(get_the_content(), 170, '…'); ?>
              </p>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button"><span>View&nbsp;more</span></a>
      </div>
    </div>
  </section>

  <section class="price layout-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__main">Price</p>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__container">
        <div class="price__content">
          <picture class="price__image js-colorbox">
            <source srcset="<?php echo get_theme_file_uri() ?>/assets/images/common/price-pc.jpg"
              media="(min-width: 768px)" type="image/jpg">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/price.jpg"
              alt="海底の岩場にひしめくサンゴとその周りに群れる赤色の鮮やかな小魚の画像" loading="lazy">
          </picture>
          <ul class="price__list">
            <li class="price__item price-item">
              <h3 class="price-item__title">ライセンス講習</h3>
              <dl class="price-item__content">
                <?php
                $group_set = SCF::get('price_license', 115);
                foreach ($group_set as $field_name => $field_value) {
                ?>
                <div class="price-item__body">
                  <dt class="price-item__course">
                    <?php echo esc_html($field_value['license_course']); ?>
                  </dt>
                  <dd class="price-item__price">
                    ¥<?php echo esc_html($field_value['license_price']); ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
            <li class="price__item price-item">
              <h3 class="price-item__title">体験ダイビング</h3>
              <dl class="price-item__content">
                <?php
                $group_set = SCF::get('price_trial_diving', 115);
                foreach ($group_set as $field_name => $field_value) {
                ?>
                <div class="price-item__body">
                  <dt class="price-item__course">
                    <?php echo esc_html($field_value['trial_diving_course']); ?>
                  </dt>
                  <dd class="price-item__price">
                    ¥<?php echo esc_html($field_value['trial_diving_price']); ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
            <li class="price__item price-item">
              <h3 class="price-item__title">ファンダイビング</h3>
              <dl class="price-item__content">
                <?php
                $group_set = SCF::get('price_fun_diving', 115);
                foreach ($group_set as $field_name => $field_value) {
                ?>
                <div class="price-item__body">
                  <dt class="price-item__course">
                    <?php echo esc_html($field_value['fun_diving_course']); ?>
                  </dt>
                  <dd class="price-item__price">
                    ¥<?php echo esc_html($field_value['fun_diving_price']); ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
            <li class="price__item price-item">
              <h3 class="price-item__title">スペシャルダイビング</h3>
              <dl class="price-item__content">
                <?php
                $group_set = SCF::get('price_special_diving', 115);
                foreach ($group_set as $field_name => $field_value) {
                ?>
                <div class="price-item__body">
                  <dt class="price-item__course">
                    <?php echo esc_html($field_value['special_diving_course']); ?>
                  </dt>
                  <dd class="price-item__price">
                    ¥<?php echo esc_html($field_value['special_diving_price']); ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
          </ul>
        </div>
        <div class="price__button">
          <a href="<?php echo esc_url(home_url("/price")) ?>" class="button"><span>View&nbsp;more</span></a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>