<!-- archive.php とsearch.php のテンプレートファイル -->
   
  <nav class="p-pager">
      <!-- spのみ表示 -->
      <!--  $wp_query -> max_num_pagesで最大ページ数を取得 -->
      <?php if ($wp_query->max_num_pages > 1) : ?>
        <ul class="p-pager__inner-sp u-disp--sp-only">
          <li class="p-pager__item-sp"><?php previous_posts_link('前へ'); ?></li>
          <li class="p-pager__item-sp"><?php next_posts_link('次へ'); ?></li>
        </ul>
      <?php endif; ?>
      <!-- tab/pcのみ表示のページャー -->     
        <?php  if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
          }
        ?>
    </nav>
 