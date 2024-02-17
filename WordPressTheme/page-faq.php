<?php get_header(); ?>

<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="page-faq layout-page-faq">
    <div class="page-faq__inner inner">
      <ul class="page-faq__list">
        <?php
            $field = SCF::get('faq');
            foreach ($field as $fields) :
            ?>
        <li class="page-faq__item faq-item">
          <h2 class="faq-item__question js-faq-question"><?php echo esc_html($fields['faq_question']); ?></h2>
          <p class="faq-item__answer">
            <?php echo esc_html($fields['faq_answer']); ?>
          </p>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>