<?php
get_template_part('functions/enqueue'); //読み込み系、
get_template_part('functions/sidebar_custom'); //サイドバーの×ボタンの位置調整
get_template_part('functions/pager'); //ページネーションの設定


add_theme_support('title-tag'); //タブ上のタイトルを管理画面から使えるようにする
add_theme_support('post-thumbnails'); //サムネイル画像を使用可能にする

register_nav_menu( 'sidebar-nav', ' sidebar-nav ' );
register_nav_menu( 'footer-nav', ' footer-nav ' );
add_theme_support('html5', $array = array(//HTML5 でのタグの出力
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption'
));



// 検索から固定ページを除外する
function SearchFilter($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
  $query->set( 'post_type', 'post' );
  }
  }
  add_action( 'pre_get_posts','SearchFilter' );


// タイトルからサイトの説明を除去
function remove_title_description ( $title ) {
  if ( is_home() || is_front_page() ) {
    unset( $title['tagline'] );
  }
  return $title;
}
add_filter( 'document_title_parts', 'remove_title_description', 10, 1 );