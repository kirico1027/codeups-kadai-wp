<?php get_header(); ?>
<main>

  <?php get_template_part('template-parts/sub-mv'); ?>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <section class="page-info layout-page-info">
    <div class="page-info__inner inner">
      <div class="page-info__tab tab">
        <ul class="tab__menu tab-menu">
          <li class="tab-menu__item js-tab-menu" data-number="tab01"><span>ライセンス<br class="u-mobile">講習</span></li>
          <li class="tab-menu__item js-tab-menu" data-number="tab02"><span>ファン<br class="u-mobile">ダイビング</span></li>
          <li class="tab-menu__item js-tab-menu" data-number="tab03"><span>体験<br class="u-mobile">ダイビング</span></li>
        </ul>
        <ul class="tab__content tab-content">
          <li id="tab01" class="tab-content__item js-tab-content is-active">
            <div class="tab-content__box">
              <div class="tab-content__body">
                <h2 class="tab-content__title">ライセンス講習</h2>
                <p class="tab-content__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
              <figure class="tab-content__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-info01.jpg"
                  alt="エメラルドグリーンの海に浮かぶ5人のダイバーたちの画像" loading="lazy">
              </figure>
            </div>
          </li>
          <li id="tab02" class="tab-content__item js-tab-content">
            <div class="tab-content__box">
              <div class="tab-content__body">
                <h2 class="tab-content__title">ファンダイビング</h2>
                <p class="tab-content__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <figure class="tab-content__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-info02.jpg"
                  alt="海底の巨大なサンゴの上を泳ぐ無数のサカナの画像" loading="lazy">
              </figure>
            </div>
          </li>
          <li id="tab03" class="tab-content__item js-tab-content">
            <div class="tab-content__box">
              <div class="tab-content__body">
                <h2 class="tab-content__title">体験ダイビング</h2>
                <p class="tab-content__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <figure class="tab-content__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-info03.jpg"
                  alt="海底を泳ぐ鮮やかな黄色のサカナの画像" loading="lazy">
              </figure>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/cta-contact'); ?>

</main>
<?php get_footer(); ?>