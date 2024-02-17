<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="page-price layout-page-price">
    <div class="page-price__inner inner">
      <ul class="page-price__list">
        <li class="page-price__item page-price-item">
          <h2 class="page-price-item__title"><span>ライセンス講習</span></h2>
          <dl class="page-price-item__content">
            <?php
            $field = SCF::get('price_license');
            foreach ($field as $fields) :
            ?>
            <div class="page-price-item__body">
              <dt class="page-price-item__course">
                <?php echo esc_html($fields['license_course']); ?>
              </dt>
              <dd class="page-price-item__price">¥<?php echo esc_html($fields['license_price']); ?></dd>
            </div>
            <?php endforeach ?>
          </dl>
        </li>
        <li class="page-price__item page-price-item">
          <h2 class="page-price-item__title"><span>体験ダイビング</span></h2>
          <dl class="page-price-item__content">
            <?php
            $field = SCF::get('price_trial_diving');
            foreach ($field as $fields) :
            ?>
            <div class="page-price-item__body">
              <dt class="page-price-item__course">
                <?php echo esc_html($fields['trial_diving_course']); ?>
              </dt>
              <dd class="page-price-item__price">¥<?php echo esc_html($fields['trial_diving_price']); ?></dd>
            </div>
            <?php endforeach ?>
          </dl>
        </li>
        <li class="page-price__item page-price-item">
          <h2 class="page-price-item__title"><span>ファンダイビング</span></h2>
          <dl class="page-price-item__content">
            <?php
            $field = SCF::get('price_fun_diving');
            foreach ($field as $fields) :
            ?>
            <div class="page-price-item__body">
              <dt class="page-price-item__course">
                <?php echo esc_html($fields['fun_diving_course']); ?>
              </dt>
              <dd class="page-price-item__price">¥<?php echo esc_html($fields['fun_diving_price']); ?></dd>
            </div>
            <?php endforeach ?>
          </dl>
        </li>
        <li class="page-price__item page-price-item">
          <h2 class="page-price-item__title"><span>スペシャルダイビング</span></h2>
          <dl class="page-price-item__content">
            <?php
            $field = SCF::get('price_special_diving');
            foreach ($field as $fields) :
            ?>
            <div class="page-price-item__body">
              <dt class="page-price-item__course">
                <?php echo esc_html($fields['special_diving_course']); ?>
              </dt>
              <dd class="page-price-item__price">¥<?php echo esc_html($fields['special_diving_price']); ?></dd>
            </div>
            <?php endforeach ?>
          </dl>
        </li>
      </ul>
    </div>
  </div>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>