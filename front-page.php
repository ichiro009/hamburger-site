<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="RaiseTechの最終課題">

  <!--ハンバーガーのファビコン -->
  <link rel="shortcut icon" href="icon/hamuburger.png" type="image/x-icon">
  <!-- リセットCSS ひとまずCDNで -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- 最後にCSSを読み込ませる -->
  <link rel="stylesheet" href="css/style.css">
  <!-- 半角カタカナは、エラーの原因になりうるので、全角に変更 -->
  <title>ハンバーガーサイト</title>
  <?php wp_head(); ?>
</head>
<body class="u-menu-filter">
<div class="l-grid">
  <header class="l-header p-header">
    <h1 class="p-header__title c-title--lv1">Hamburger</h1>
    <form class="p-form-box" action="archive-search.html">
      <input class="p-form-box__input" type="search" name="search" placeholder="注文内容を検索できます">
      <button class="p-form-box__submit" type="submit" name="submit">検索</button>
    </form>
    <!-- Menu はPCサイズのみ非表示、tab/sp は表示-->
    <button class="p-header__menu-btn c-menu-btn u-disp--pc-none">Menu</button>
  </header>
  <main class="l-main">
    <div class="p-main-visual">
      <h2 class="p-main-visual__title">ダミーサイト</h2>
    </div>

    <section class="p-branch">
      <ul class="p-branch__container">
        <!--Take Out  -->
        <li class="p-branch__list"><a href="page.html" class="p-branch__item--take-out">
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
        <li class="p-branch__list"><a href="page.html" class="p-branch__item--eat-in">
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

  <!-- ここからサイドバー -->
  <aside class="l-aside p-aside">
    <!--PCサイズは非表示,is-activeクラス付与時のみ表示 -->
    <button class="c-menu-btn--close u-disp--pc-none"></button>
    <!-- Menu はPCサイズのみ表示、tab/sp は非表示-->
    <h2 class="p-aside__title u-disp--pc-only">Menu</h2>
    <ul class="p-menu-list">
      <!-- バーガー -->
      <li class="p-menu-list__item">
        <h3 class="p-menu-list__title">バーガー</h3>
        <ul class="p-menu-sub-list">
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">ハンバーガー</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">チーズバーガー</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">テリヤキバーガー</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">アボカドバーガー</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">フィッシュバーガー</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">ベーコンバーガー</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">チキンバーガー</a></li>
        </ul>
      </li>
      <!-- サイド -->
      <li class="p-menu-list__item">
        <h3 class="p-menu-list__title">サイド</h3>
        <ul class="p-menu-sub-list">
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">ポテト</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">サラダ</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">ナゲット</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">コーン</a></li>
        </ul>
      </li>
      <!-- ドリンク -->
      <li class="p-menu-list__item">
        <h3 class="p-menu-list__title">ドリンク</h3>
        <ul class="p-menu-sub-list">
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">コーラ</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">ファンタ</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">オレンジ</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">アップル</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">紅茶（Ice/Hot）</a></li>
          <li class="p-menu-sub-list__item"><a class="p-menu-sub-list__link" href="archive.html">コーヒー（Ice/Hot）</a></li>
        </ul>
      </li>
    </ul>
  </aside>

  <footer class="l-footer p-footer">
    <ul class="p-footer__nav">
      <!-- 全角スペースは可読性の問題から非推奨なので特殊文字&emsp;に変更 -->
      <li class="p-footer__nav-item">ショップ情報&emsp;|</li>
      <li class="p-footer__nav-item">&emsp;ヒストリー</li>
    </ul>
    <p class="p-footer__copyright"><small>Copyright: RaiseTech</small></p>
  </footer>

</div>
<?php wp_footer(); ?>
</body>
</html>





