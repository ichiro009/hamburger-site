<?php get_header(); ?>
    <!-- search.php -->
    <main class="l-main">
      <div class="p-archive-hero">  
        <h2 class="p-archive-hero__title">Menu:<span class="p-archive-hero__sub-title">
          <!-- $_GET['s']で検索ワードを取得して！否定で検索ワード未入力を検知 -->
          <?php if(!$_GET['s']){ ?>
            検索ワードが未入力です
            <?php }else{ ?>
              <?php the_search_query();?>
              <?php } ?>
        </span></h2>
      </div>
      <div class="c-inner--archive">
        <article class="p-intro">
          <h2 class="p-intro__title">小見出しが入ります</h2>
          <p class="p-intro__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </article>
        <!-- ここからp-archive-body -->
      <?php get_template_part('loop'); ?>
        <!--ここまで p-archive-body  -->
     <?php get_template_part('p-pager'); ?>
        <!--p- pagerはここまで -->
      </div>
      <!-- c-inner--archiveここまで -->
    </main>

 <?php get_sidebar(); ?>
<?php get_footer(); ?>