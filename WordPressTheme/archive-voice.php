<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="archive-voice layout-archive-voice">
    <div class="archive-voice__inner inner">
      <div class="archive-voice__category-list category-list">

        <?php
        $current_term_id = 0;
        $queried_object = get_queried_object();
        $terms = get_terms(array(
          'taxonomy' => 'voice_category',
          'orderby' => 'name',
          'order' => 'ASC',
          'number' => 3,
        ));
        ?>

        <ul class="category-list__items">
          <li class="category-list__item <?php echo (is_post_type_archive()) ? 'is-active' : ''; ?>">
            <a href="<?php echo esc_url(home_url('voice')); ?>">ALL</a>
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

      <ul class="archive-voice__cards voice-cards">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <li class="voice-cards__card voice-card">
          <a href="#">
            <div class="voice-card__item">
              <div class="voice-card__head">
                <div class="voice-card__content">
                  <div class="voice-card__box">
                    <span class="voice-card__info"><?php the_field('personal_info'); ?></span><br><span
                      class="voice-card__category"><?php
                  $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                  if (!empty($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                    }
                  }
                  ?></span>
                  </div>
                  <h2 class="voice-card__title">
                    <?php echo wp_trim_words( get_the_title(), 20, '…' ); ?>
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
                <?php the_content(); ?>
              </p>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>

      <div class="page-campaign__pagenavi pagenavi">
        <div class="pagenavi__inner">
          <div class="pagination">
            <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>