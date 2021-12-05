<footer class="l-footer p-footer">

  <?php
  wp_nav_menu(array(
    'menu' => 'footer-menu', //ここに作ったメニュー名が入ります。
    'menu_class' => 'p-footer__nav',
    'theme_location' => 'footer-nav',
    'container' => false,
  ));
  ?>
  <p class="p-footer__copyright"><small>Copyright: RaiseTech</small></p>
</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>