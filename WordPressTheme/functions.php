<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
wp_deregister_script('jquery');
// jQueryの読み込み
wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", '1.0.1');
// プラグイン
wp_enqueue_script( 'swiper', "//cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js", "7.0.0", true );
wp_enqueue_script( 'inview', get_theme_file_uri() . '/assets/js/jquery.inview.min.js', array(), '1.0.1');
wp_enqueue_script('script-js', get_theme_file_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
// Webフォントの読み込み
wp_enqueue_style('NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
wp_enqueue_style('Gotu', '//fonts.googleapis.com/css2?family=Gotu:wght@400;700&display=swap');
wp_enqueue_style('Lato', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
// css
wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css', array(), '7.0.0');
wp_enqueue_style('style-css', get_theme_file_uri() . '/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// body_classから特定のクラスを削除する
add_filter('body_class', function($classes){
unset($classes[array_search('blog', $classes)]);
return $classes;
});

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

//送信ボタン→thanksページに遷移
add_action('wp_footer', 'redirect_to_thanks_page');

function redirect_to_thanks_page()
{
  //トップページのurlを取得
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {

          //"/contact"以下は送信完了ページのurlに書き換える
          location = '{$homeUrl}/contact/thanks';
      }, false );
    </script>
  EOD;
}


function add_register_nav_menu() {
  register_nav_menu( 'menu-primary', 'メニュー プライマリ' ); // 任意の識別子, 説明
}
add_action( 'after_setup_theme', 'add_register_nav_menu' );
// メニューを追加
//add_action( 'after_setup_theme', 'register_menu' );
//function register_menu() {
 // register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
//}

// 404ページの場合、文字色を白に変更するスタイルを追加
function custom_breadcrumb_styles() {
  if (is_404()) {
    echo '<style>';
    echo '.breadcrumb .breadcrumb__inner span { color: white; }';
    echo '.breadcrumb .breadcrumb__inner .breadcrumb__arrow { color: white; }'; // 矢印の色も変更
    echo '</style>';
  }
}
add_action('wp_head', 'custom_breadcrumb_styles');