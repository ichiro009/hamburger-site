<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="RaiseTechの最終課題">
  <!-- 半角カタカナは、エラーの原因になりうるので、全角に変更 -->
  <title>ハンバーガーサイト</title>
  <!--管理バーと重なるので、ログイン時のみ✖ボタンの位置を調節 -->
  <?php if (is_user_logged_in()) : ?>
    <style type="text/css">
      aside .c-menu-btn--close.is-active {
        top: 60px;
      }
    </style>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body class="u-menu-filter">
  <div class="l-grid">
    <header class="l-header p-header">
      <h1 class="p-header__title c-title--lv1">Hamburger</h1>
      <form class="p-form-box" action="archive-search.html">
        <input class="p-form-box__input" type="search" name="search" placeholder="注文内容を検索できます">
        <button class="p-form-box__submit" type="submit" name="submit">検索</button>
      </form>
      <!-- Menu はPCサイズのみ非表示、tab/sp は表示-->
      <button class="p-header__menu-btn c-menu-btn u-disp--pc-none">Menu</button>
    </header>