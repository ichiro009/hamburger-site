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
        <article class="p-archive-body">
          <ul class="p-archive-body__list">
            <li class="p-archive-body__item">
              <figure class="p-card">
                <img class="p-card__img" src="./imges/archive/archive-card.jpg" alt="ボリュームたっぷりチーズバーガーの画像">
                <figcaption class="p-card__caption">
                  <h3 class="p-card__title--lv3">チーズバーガー</h3>
                  <h4 class="p-card__title--lv4">小見出しが入ります</h4>
                  <p class="p-card__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <button class="c-btn--readmore">詳しく見る</button>
                </figcaption>
              </figure>
            </li>
            <li class="p-archive-body__item">
              <figure class="p-card">
                <img class="p-card__img" src="./imges/archive/archive-card.jpg" alt="ボリュームたっぷりチーズバーガーの画像">
                <figcaption class="p-card__caption">
                  <h3 class="p-card__title--lv3">チーズバーガー</h3>
                  <h4 class="p-card__title--lv4">小見出しが入ります</h4>
                  <p class="p-card__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <button class="c-btn--readmore">詳しく見る</button>
                </figcaption>
              </figure>
            </li>
            <li class="p-archive-body__item">
              <figure class="p-card">
                <img class="p-card__img" src="./imges/archive/archive-card.jpg" alt="ボリュームたっぷりチーズバーガーの画像">
                <figcaption class="p-card__caption">
                  <h3 class="p-card__title--lv3">チーズバーガー</h3>
                  <h4 class="p-card__title--lv4">小見出しが入ります</h4>
                  <p class="p-card__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <button class="c-btn--readmore">詳しく見る</button>
                </figcaption>
              </figure>
            </li>
            </li>
            <li class="p-archive-body__item">
              <figure class="p-card">
                <img class="p-card__img" src="./imges/archive/archive-card.jpg" alt="ボリュームたっぷりチーズバーガーの画像">
                <figcaption class="p-card__caption">
                  <h3 class="p-card__title--lv3">チーズバーガー</h3>
                  <h4 class="p-card__title--lv4">小見出しが入ります</h4>
                  <p class="p-card__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <button class="c-btn--readmore">詳しく見る</button>
                </figcaption>
              </figure>
            </li>
            </li>
            <li class="p-archive-body__item">
              <figure class="p-card">
                <img class="p-card__img" src="./imges/archive/archive-card.jpg" alt="ボリュームたっぷりチーズバーガーの画像">
                <figcaption class="p-card__caption">
                  <h3 class="p-card__title--lv3">チーズバーガー</h3>
                  <h4 class="p-card__title--lv4">小見出しが入ります</h4>
                  <p class="p-card__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <button class="c-btn--readmore">詳しく見る</button>
                </figcaption>
              </figure>
            </li>
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