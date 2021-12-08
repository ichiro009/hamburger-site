<?php  

// 管理画面の「投稿」を「ショップメニュー」表記に変更
function ChangeAdminLabel() {
	global $menu;
	global $submenu;
	$name = 'ショップメニュー';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規追加';
}
function ChangeAdminObject() {
	global $wp_post_types;
	$name = 'ショップメニュー';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'ChangeAdminObject' );
add_action( 'admin_menu', 'ChangeAdminLabel' );


function ChangeAdminIcons() {
  ?>
  <style>
    .dashicons-admin-post:before { content: '\f513';}
  </style>
  <?php
}
add_action( 'admin_head', 'ChangeAdminIcons' );