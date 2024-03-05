<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="page-price layout-page-price">
    <div class="page-price__inner inner">
      <ul class="page-price__list">
        <?php
            // プランごとに配列にまとめる
            $plans = [
              1 => [
                'title' => SCF::get_option_meta('price-option','plan_1'),
                'group' => 'course-1',
                'course_key' => ['course_1','price_1']
              ],
              2 => [
                'title' => SCF::get_option_meta('price-option','plan_2'),
                'group' => 'course-2',
                'course_key' => ['course_2','price_2']
              ],
              3 => [
                'title' => SCF::get_option_meta('price-option','plan_3'),
                'group' => 'course-3',
                'course_key' => ['course_3','price_3']
              ],
              4 => [
                'title' => SCF::get_option_meta('price-option','plan_4'),
                'group' => 'course-4',
                'course_key' => ['course_4','price_4']
              ]
            ];
          ?>
        <?php foreach ($plans as $plan) : ?>
        <li class="page-price__item page-price-item" id="price-license">
          <h2 class="page-price-item__title">
            <span><?php echo $plan['title']; ?></span>
          </h2>
          <dl class="page-price-item__content">
            <?php
                  $course_group = SCF::get_option_meta('price-option', $plan['group']);
                  foreach ($course_group as $item) :
                ?>
            <div class="page-price-item__body">
              <dt class="page-price-item__course">
                <?php echo $item[$plan['course_key'][0]]; ?></dt>
              <dd class="page-price-item__price"><?php echo $item[$plan['course_key'][1]]; ?></dd>
            </div>
            <?php endforeach; ?>
          </dl>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>