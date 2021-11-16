<?php
// CSS、JavaScriptの読み込み
function st_enqueue_scripts()
{
  wp_enqueue_style('oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap', array() . '');
  wp_enqueue_style('robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '');
  wp_enqueue_style('mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '');
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
  wp_enqueue_style('fd', get_theme_file_uri() . '/css/style.css', array(), '1.0.0');
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', false);
  wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');
