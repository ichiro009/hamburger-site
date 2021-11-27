<?php get_header(); ?>
  <main class="l-main">
    <div class="p-main-visual">
      <h2 class="p-main-visual__title">ダミーサイト</h2>
    </div>

    <section class="p-branch">
      <ul class="p-branch__container">
        <!--Take Out  -->
        <li class="p-branch__list"><a href="<?php echo esc_url(home_url('/category/takeout/')); ?>" class="p-branch__item--take-out">
            <!-- TakeOut とEat INとでh2の色が違うので注意 -->
            <h2 class="p-branch__title--take-out">Take Out</h2>
            <div class="p-branch__bottom-box">
              <dl class="p-branch__bottom-box__list">
                <dt class="p-branch__bottom-box__dt">Take OUT</dt>
                <dd class="p-branch__bottom-box__dd">当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
              <dl class="p-branch__bottom-box__list">
                <dt class="p-branch__bottom-box__dt">Take OUT</dt>
                <dd class="p-branch__bottom-box__dd">当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
            </div>
          </a>
        </li>
      <!--Take Outここまで  -->
      <!--Eat In  -->
        <li class="p-branch__list"><a href="<?php echo esc_url(home_url('/category/eatin/')); ?>" class="p-branch__item--eat-in">
            <!-- TakeOut とEat INとでh2の色が違うので注意 -->
            <h2 class="p-branch__title--eat-in">Eat In</h2>
            <div class="p-branch__bottom-box">
              <dl class="p-branch__bottom-box__list">
                <dt class="p-branch__bottom-box__dt">Eat In</dt>
                <dd class="p-branch__bottom-box__dd">当店のイートインで利用できる商品を掲載しています</dd>
              </dl>
              <dl class="p-branch__bottom-box__list">
                <dt class="p-branch__bottom-box__dt">Eat In</dt>
                <dd class="p-branch__bottom-box__dd">当店のイートインで利用できる商品を掲載しています</dd>
              </dl>
            </div>
          </a>
        </li>
        <!-- Eat Inここまで -->
      </ul>
    </section>
<!-- sec/p-branchは、ここまで -->
    <section class="p-map">
      <iframe class="p-map__g-map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.2336063151333!2d135.4971705111739!3d34.67405315905201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x146eede70b2a89eb!2sCRITTERS%20BURGER!5e0!3m2!1sja!2sjp!4v1630566388000!5m2!1sja!2sjp"
         style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
      <!-- フィルターの範囲がサイズによって異なるので注意 -->
      <div class="p-map__filter">
      </div>

      <div class="p-map__text-wrap">
        <h2 class="p-map__title">見出しが入ります</h2>
        <p class="p-map__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </section>
  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>





