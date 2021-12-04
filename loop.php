<!-- archive.php とsearch.php のテンプレートファイル -->
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
                    <?php echo esc_html(get_the_excerpt()); ?>
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