<?php
$image_pc = '';
$image_sp = '';
$mv_title = '';

if (is_page('about-us')) {
  $image_pc = '/assets/images/common/sub-mv-about-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-about.jpg';
  $mv_title = 'About us';
} elseif (is_post_type_archive('voice')) {
  $image_pc = '/assets/images/common/sub-mv-voice-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-voice.jpg';
  $mv_title = 'Voice';
} elseif (is_page('information')) {
  $image_pc = '/assets/images/common/sub-mv-information-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-information.jpg';
  $mv_title = 'Information';
} elseif (is_page('price')) {
  $image_pc = '/assets/images/common/sub-mv-price-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-price.jpg';
  $mv_title = 'Price';
} elseif (is_page('faq')) {
  $image_pc = '/assets/images/common/sub-mv-faq-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-faq.jpg';
  $mv_title = 'FAQ';
} elseif (is_page('contact') || is_page('contact/thanks')) {
  $image_pc = '/assets/images/common/sub-mv-contact-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-contact.jpg';
  $mv_title = 'Contact';
} elseif (is_post_type_archive('campaign')) {
  $image_pc = '/assets/images/common/sub-mv-campaign-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-campaign.jpg';
  $mv_title = 'Campaign';
} elseif (is_home() || is_single()) {
  $image_pc = '/assets/images/common/sub-mv-blog-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-blog.jpg';
  $mv_title = 'Blog';
} elseif (is_page('terms-of-service')) {
  $image_pc = '/assets/images/common/sub-mv-others-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-others.jpg';
  $mv_title = 'Terms of Service';
} elseif (is_page('privacypolicy')) {
  $image_pc = '/assets/images/common/sub-mv-others-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-others.jpg';
  $mv_title = 'Privacy Policy';
} else {
  $image_pc = '/assets/images/common/sub-mv-others-pc.jpg';
  $image_sp = '/assets/images/common/sub-mv-others.jpg';
  $mv_title = 'Site MAP';
}
?>

<section class="sub-mv">
  <picture class="sub-mv__picture">
    <source srcset="<?php echo esc_url(get_theme_file_uri($image_pc)); ?>" media="(min-width: 768px)" type="image/jpg">
    <img src="<?php echo esc_url(get_theme_file_uri($image_sp)); ?>" alt="">
  </picture>
  <h1 class="sub-mv__title"><?php echo esc_html($mv_title); ?></h1>
</section>