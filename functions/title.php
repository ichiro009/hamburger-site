<?php  

// タイトルからサイトの説明を除去
function remove_title_description ( $title ) {
  if ( is_home() || is_front_page() ) {
    unset( $title['tagline'] );
  }
  return $title;
}
add_filter( 'document_title_parts', 'remove_title_description', 10, 1 );