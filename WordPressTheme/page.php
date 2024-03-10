<!DOCTYPE html>
<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="confirmation layout-confirmation">
    <div class="confirmation__inner inner">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="confirmation__container">
        <h2 class="confirmation__title"><?php the_title(); ?></h2>
        <div class="confirmation__content">
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>