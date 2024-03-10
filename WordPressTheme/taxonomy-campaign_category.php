<?php get_header(); ?>
<main>
  <section class="sub-mv">
    <picture class="sub-mv__picture">
      <source srcset="<?php echo get_theme_file_uri() ?>/assets/images/common/sub-mv-campaign-pc.jpg"
        media="(min-width: 768px)" type="image/jpg">
      <img src="<?php echo get_theme_file_uri() ?>/assets/images/common/sub-mv-campaign.jpg"
        alt="深海に漂う二匹の色鮮やかな黄色のサカナたちの画像" loading="lazy">
    </picture>
    <?php
    $cat = get_queried_object();
    $cat_name = $cat->name;
    ?>
    <h1 class="sub-mv__title">
      <?php echo esc_html($cat_name); ?>
    </h1>

  </section>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class=" page-campaign layout-page-campaign">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__category-list category-list">
        <?php
        $current_term_id = 0;
        $queried_object = get_queried_object();
        $terms = get_terms(array(
          'taxonomy' => 'campaign_category',
          'orderby' => 'name',
          'order' => 'ASC',
          'number' => 10
        ));
        ?>
        <ul class="category-list__items">
          <li class="category-list__item">
            <a href="<?php echo esc_url(home_url('campaign')); ?>">ALL</a>
          </li>

          <?php
          if ($terms) :
            foreach ($terms as $term) :
              $term_class = ($cat_name === $term->name) ? 'is-active' : '';
          ?>
          <li class="category-list__item <?php echo esc_attr($term_class); ?>">
            <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>">
              <?php echo esc_html($term->name); ?>
            </a>
          </li>
          <?php
            endforeach;
          endif;
        ?>
        </ul>
      </div>
      <ul class="page-campaign__cards">
        <?php
        $genre_slug = get_query_var('campaign_category');
        $args = array(
          "post_type" => "campaign",
          "posts_per_page" => 4,
          'tax_query' => array(
            array(
              'taxonomy' => 'campaign_category',
              'field'    => 'slug',
              'terms'    => $genre_slug,
            ),
          ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="page-campaign__card page-campaign-card">
          <figure class="page-campaign-card__img">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/common/noimage.jpg")); ?>" alt="NoImage画像"
              loading="lazy">
            <?php endif; ?>
          </figure>
          <div class="page-campaign-card__body">
            <div>
              <div class="page-campaign-card__category">
                <?php
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'campaign_category');
                    if (!empty($taxonomy_terms)) {
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                      }
                    }
                    ?>
              </div>
              <h2 class="page-campaign-card__title-main"><?php the_title(); ?></h2>
            </div>
            <p class="page-campaign-card__title-sub">全部コミコミ(お一人様)</p>
            <?php
                    $priceGroup = get_field('price_group');
                    if ($priceGroup) :
                    ?>
            <p class="page-campaign-card__price">
              <?php if (!empty($priceGroup['price_before'])) : ?>
              <span>¥<?php echo $priceGroup['price_before']; ?></span>
              <?php endif; ?>
              <?php if (!empty($priceGroup['price_after'])) : ?>
              ¥<?php echo $priceGroup['price_after']; ?>
              <?php endif; ?>
            </p>
            <?php endif; ?>
            <p class="page-campaign-card__text">
              <?php
                  $campaign_text = get_field("campaign_text");
                  if (mb_strlen($campaign_text) > 200) {
                    echo mb_substr($campaign_text, 0, 200, 'UTF-8') . '...';
                  } else {
                    echo $campaign_text;
                  }
                  ?>
            </p>
            <div class="page-campaign-card__info">
              <?php
                  $termGroup = get_field('term_group');
                  if ($termGroup) :
                  ?>
              <p class="page-campaign-card__period">
                <?php echo $termGroup['term_start']; ?>-<?php echo $termGroup['term_end']; ?></p>
              <?php endif; ?>
              <p>ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="page-campaign-card__button">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button"><span>Contact&nbsp;us</span></a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>

  <div class="page-campaign__pagenavi pagenavi">
    <div class="pagenavi__inner">
      <div class="pagination">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>