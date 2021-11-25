<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="RaiseTechの最終課題">
  <?php wp_head(); ?>
</head>

<body class="u-menu-filter">
  <?php wp_body_open(); ?>
  <div class="l-grid">
    <header class="l-header p-header">

      <!-- トップページならロゴをｈ1で出力する -->
      <!-- 違う場合div タグを出力 -->
      <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
      <<?php echo $html_tag; ?> class="p-header__title c-title--lv1">
        <a href="<?php echo esc_url(home_url()); ?>">
        <?php bloginfo( 'name' ); ?>
        </a>
        <!-- h1 or divの閉じタグを出力 -->
      </<?php echo $html_tag; ?>>
      <form class="p-form-box" action="archive-search.html">
        <input class="p-form-box__input" type="search" name="search" placeholder="注文内容を検索できます">
        <button class="p-form-box__submit" type="submit" name="submit">検索</button>
      </form>
      <!-- Menu はPCサイズのみ非表示、tab/sp は表示-->
      <button class="p-header__menu-btn c-menu-btn u-disp--pc-none">Menu</button>
    </header>