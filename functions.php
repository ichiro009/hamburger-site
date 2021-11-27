<?php
get_template_part('functions/enqueue'); //読み込み系、
get_template_part('functions/sidebar_custom'); //サイドバーの×ボタンの位置調整


add_theme_support('title-tag'); //タブ上のタイトルを管理画面から使えるようにする
add_theme_support('post-thumbnails'); //サムネイル画像を使用可能にする

register_nav_menu( 'sidebar-nav', ' sidebar-nav ' );
add_theme_support('html5', $array = array(//HTML5 でのタグの出力
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption'
));

