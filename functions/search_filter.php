<?php
// 検索から固定ページを除外する
function SearchFilter($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_search()) {
    $query->set('post_type', 'post');
  }
}
add_action('pre_get_posts', 'SearchFilter');
