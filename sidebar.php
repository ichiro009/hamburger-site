  <!-- ここからサイドバー -->
  <aside class="l-aside p-aside">
    <!--PCサイズは非表示,is-activeクラス付与時のみ表示 -->
    <button class="c-menu-btn--close u-disp--pc-none"></button>
    <!-- Menu はPCサイズのみ表示、tab/sp は非表示-->
    <h2 class="p-aside__title u-disp--pc-only">Menu</h2>
    <?php
    wp_nav_menu(array(
      'menu' => 'category-menu', //ここに作ったメニュー名が入ります。
      'menu_class' => 'p-menu-list',
      'theme_location' => 'sidebar-nav',
      'container' => false,
    ));
    ?>
  </aside>