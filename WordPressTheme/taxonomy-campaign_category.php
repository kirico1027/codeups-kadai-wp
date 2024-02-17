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
    $term_name = '';
    if (is_tax()) {
      $term = get_queried_object();
      if ($term && $term->name) {
        $term_name = $term->name;
      }
    }
    ?>
    <h1 class="sub-mv__title">
      <?php echo esc_html($term_name); ?>
    </h1>

  </section>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class=" page-campaign layout-page-campaign">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__category-list category-list">
        <ul class="category-list__items">
          <?php
          $current_post_type = get_post_type();
          $post_type_archive_class = ($current_post_type === 'campaign' && !is_tax()) ? 'is-active' : '';
          $post_type_archive_link = sprintf(
            '<li class="category-list__item %s"><a href="%s" alt="%s">ALL</a></li>',
            $post_type_archive_class,
            esc_url(home_url('/campaign')),
            esc_attr(__('View all posts', 'textdomain'))
          );
          echo sprintf(esc_html__('%s', 'textdomain'), $post_type_archive_link);

          $current_term_id = get_queried_object_id();
          $terms = get_terms(array(
            'taxonomy' => 'campaign_category',
            'orderby' => 'name',
            'order' => 'ASC',
            'number' => 5
          ));

          if ($terms) {
            foreach ($terms as $term) {
              $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
              $term_link = sprintf(
                '<li class="category-list__item %s"><a href="%s" alt="%s">%s</a></li>',
                $term_class,
                esc_url(get_term_link($term->term_id)),
                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                esc_html($term->name)
              );
              echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
            }
          }
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
              // タクソノミーのスラッグを指定
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
            <div class="page-campaign-card__category">
              <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                  if (!empty($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                    }
                  }
                  ?>
            </div>
            <h2 class="page-campaign-card__title-main"><?php the_title(); ?></h2>
            <p class="page-campaign-card__title-sub">全部コミコミ(お一人様)</p>
            <p class="page-campaign-card__price">
              <span>¥56,000</span>¥46,000
            </p>
            <p class="page-campaign-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="page-campaign-card__info">
              <p class="page-campaign-card__period">2023/6/1-9/30</p>
              <p>ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="page-campaign-card__button">
              <a href="page-contact.html" class="button"><span>Contact&nbsp;us</span></a>
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