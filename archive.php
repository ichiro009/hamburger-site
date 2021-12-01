<?php get_header(); ?>
<!-- archive.php -->
<main class="l-main">
  <div class="p-archive-hero">

    <h1 class="p-archive-hero__title">Menu:<span class="p-archive-hero__sub-title"><?php single_cat_title(); ?></span></h1>
  </div>
  <div class="c-inner--archive">
    <article class="p-intro">
      <h2 class="p-intro__title">小見出しが入ります</h2>
      <p class="p-intro__text">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </article>
    <!-- ここからp-archive-body -->
    <article class="p-archive-body">
      <ul class="p-archive-body__list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="p-archive-body__item">
              <figure class="p-card">
                <img class="p-card__img" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                <figcaption class="p-card__caption">
                  <h3 class="p-card__title--lv3"><?php the_title(); ?></h3>
                  <h4 class="p-card__title--lv4"><?php single_cat_title(); ?></h4>
                  <p class="p-card__text">
                    <?php echo get_the_excerpt(); ?>
                  </p>

                  <a class="c-btn--readmore" href="<?php the_permalink(); ?>">詳しく見る</a>
                </figcaption>
              </figure>
            </li>
          <?php endwhile;
        else : ?>
          <p>表示する記事がありません</p>
        <?php endif; ?>
      </ul>
    </article>
    <!--ここまで p-archive-body  -->
    <nav class="p-pager">
      <!-- spのみ表示 -->
      <!--  $wp_query -> max_num_pagesで最大ページ数を取得 -->
      <?php if ($wp_query->max_num_pages > 1) : ?>
        <ul class="p-pager__inner-sp u-disp--sp-only">
          <li class="p-pager__item-sp"><?php previous_posts_link('前へ'); ?></li>
          <li class="p-pager__item-sp"><?php next_posts_link('次へ'); ?></li>
        </ul>
      <?php endif; ?>
      <!-- spは非表示 tab/pcのみ表示 -->

      <!-- <div class="p-pager__inner u-disp--sp-none"> -->
       
        <?php  if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
          }
        ?>
    </nav>
    <!--p- pagerはここまで -->
  </div>
  <!-- c-inner--archiveここまで -->
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>