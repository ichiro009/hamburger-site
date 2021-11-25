<?php  
// 管理バーと重なるので、ログイン時のみ✖ボタンの位置を調節 

function sidebar_custom() {
  if ( is_user_logged_in() ) :
    echo '<style type="text/css">
        aside .c-menu-btn--close.is-active {
      top: 60px;
    }
  </style>';
  endif;
}
add_action( 'wp_head', 'sidebar_custom');