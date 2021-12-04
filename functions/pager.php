<?php 
//ページャー前へ・次へのaタグにclassを付与する
function add_prev_posts_link_class() {
  return 'class="prev-link"';
}
add_filter( 'previous_posts_link_attributes', 'add_prev_posts_link_class' );

function add_next_posts_link_class() {
  return 'class="next-link"';
}
add_filter( 'next_posts_link_attributes', 'add_next_posts_link_class' );

//tab/pcのページネーション設定
// $range の数を増やせばぺージネーションの表示数を増やせる
function pagination($pages = '', $range = 5) {
  $showitems = ($range * 1) + 1;//ここの数値が最大表示数となる

  // 現在のページ数
  // $paged「カテゴリーページ」「タグページ」などの現在のページ番号を取得できるグローバル変数
  // pagedの初期値は0 だと2ページ目はpage/2というurlがつけられて、
  //ページネーションに都合が悪くなるので「pagedの値が0の場合は１代入する
  global $paged;
  if(empty($paged)) {
    $paged = 1;
  }
  // 全ページ数
  if($pages == '') {
    global $wp_query;
    // ここで総ページ数を定義
    $pages = $wp_query->max_num_pages;
    // $pages が０ならば
    if(!$pages) {
      $pages = 1;
     
    }
  }
  // ページ数が2ぺージ以上の場合のみ、ページネーションを表示させる
  if(1 != $pages) {
    echo '<div class="p-pager__inner u-disp--sp-none">';
    echo '<ul class="p-pager__list">';
    echo '<li class="p-pager__count">page&nbsp;'.$paged.'/'.$pages.'</li>'; //page 現在のページ/最大ページ
    // ２以上のページなら、「前のページ」リンクを表示
    if($paged > 1) {
      // $paged - 1 つまり、現在のページ-1 ＝前のページとなる
      echo '<li class="prev"><a class="prev-link" href="' . esc_url(get_pagenum_link($paged - 1)) . '"></a></li>';
    }

    // ページ番号を表示（現在のページはリンクにしない）
    // 最大ページ数の数だけforループを回す$i にページ数（1~ページの数）割り振られ最大ページでループ
    for ($i=1; $i <= $pages; $i++) {
      // この条件分岐が複雑 1 != $pages && →総ページ数が２以上でなおかつ
      //!($i >= $paged+$range+1 || $i <= $paged-$range-1)どちら条件が成立する場合除外
      // つまり範囲内のみ条件に合致するようなもの
      // $pages <= $showitems 最大ページ数が最大表示数以下
      if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        // 現在のページがループの回数と同じつまり現在のページなら
        if ($paged == $i) {
          // 現在のページに付与するスタイル
          echo '<li class="p-pager__item--active">' .$i. '</li>';
        } else {
          // 現在のページ以外つまり遷移するページに付与するスタイル
          echo '<li class="p-pager__item"><a class="p-pager__link" href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>';
        }
      }
    }

    // 最終ページでなければ、「次のページ」リンクを表示、次のページは現在のページ＋１
    if ($paged < $pages) {
      echo '<li class="next"><a class="next-link" href="' . esc_url(get_pagenum_link($paged + 1)) . '"></a></li>';
    }
    // 閉じタグを出力
    echo '</ul>';
    echo '</div>';
  }
}