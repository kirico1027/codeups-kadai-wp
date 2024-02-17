<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="page-campaign layout-page-campaign">
    <div class="page-campaign__inner inner">

      <div class="page-campaign__category-list category-list">
        <?php
        $current_term_id = 0; // デフォルトで0をセットしておくか、エラー時のデフォルト値を設定
        // 現在のクエリに関連するオブジェクトを取得
        $queried_object = get_queried_object();
        $terms = get_terms(array(
          'taxonomy' => 'campaign_category',
          'orderby' => 'name',
          'order' => 'ASC',
          'number' => 3
        ));
        ?>
        <ul class="category-list__items">
          <li class="category-list__item <?php echo (is_post_type_archive()) ? 'is-active' : ''; ?>">
            <a href="<?php echo esc_url(home_url('campaign')); ?>">ALL</a>
          </li>

          <?php
          if ($terms) {
            foreach ($terms as $term) {
              $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
          ?>
          <li class="category-list__item <?php echo esc_attr($term_class); ?>">
            <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>">
              <?php echo esc_html($term->name); ?>
            </a>
          </li>
          <?php
            }
          }
          ?>
        </ul>
      </div>

      <ul class="page-campaign__cards">
        <?php
        $args = array(
          "post_type" => "campaign",
          "posts_per_page" => 4,
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <li class="page-campaign__card page-campaign-card">
          <figure class="page-campaign-card__img">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
            <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.jpg")); ?>" alt="NoImage画像"
              loading="lazy">
            <?php endif; ?>
          </figure>
          <div class="page-campaign-card__body">
            <div class="page-campaign-card__category">
              <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                  if (!empty($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span
                      >' . esc_html($taxonomy_term->name) . '</span>';
                    }
                  }
                  ?>
            </div>
            <h2 class="page-campaign-card__title-main"><?php the_title(); ?></h2>
            <p class="page-campaign-card__title-sub">全部コミコミ(お一人様)</p>
            <p class="page-campaign-card__price">
              <span>¥<?php the_field("price_before"); ?></span>¥<?php the_field("price_after"); ?>
            </p>
            <p class="page-campaign-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="page-campaign-card__info">
              <p class="page-campaign-card__period">2023/6/1-9/30</p>
              <p>ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="page-campaign-card__button">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button"><span>Contact&nbsp;us</span></a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
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