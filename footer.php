<footer class="l-footer p-footer">
    <!-- <ul class="p-footer__nav">     
      <li class="p-footer__nav-item"><a href="<?php echo esc_url(home_url('/about-shop/')); ?>">ショップ情報</a></li>
      <li class="p-footer__nav-item"><a href="<?php echo esc_url(home_url('/history/')); ?>">ヒストリー</a></li>
    </ul> -->
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