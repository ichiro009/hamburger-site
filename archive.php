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
                  
                  <button class="c-btn--readmore"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                </figcaption>
              </figure>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </article>
    <!--ここまで p-archive-body  -->
    <nav class="p-pager">
      <!-- spのみ表示 -->
      <ul class="p-pager__inner-sp u-disp--sp-only">
        <li class="p-pager__item-sp"><a class="p-pager__link-sp u-arrow--left" href="#">&ensp;前へ</a></li>
        <li class="p-pager__item-sp"><a class="p-pager__link-sp u-arrow--right" href="#">次へ&ensp;</a></li>
      </ul>
      <!-- spは非表示 tab/pcのみ表示 -->

      <div class="p-pager__inner u-disp--sp-none">
        <ul class="p-pager__list ">
          <li class="p-pager__item "><a class="p-pager__link u-arrow--left" href="#"></a></li>
          <li class="p-pager__item "><a class="p-pager__link" href="#">1</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">2</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">3</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">4</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">5</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">6</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">7</a></li>
          <li class="p-pager__item"><a class="p-pager__link" href="#">8</a></li>
          <li class="p-pager__item "><a class="p-pager__link " href="#">9</a></li>
          <li class="p-pager__item "><a class="p-pager__link u-arrow--right" href="#"></a></li>
        </ul>
      </div>
    </nav>
    <!--p- pagerはここまで -->
  </div>
  <!-- c-inner--archiveここまで -->
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>