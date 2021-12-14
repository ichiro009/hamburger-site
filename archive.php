<?php get_header(); ?>
<!-- archive.php -->
<main class="l-main">
  <div class="p-archive-hero">
    <h1 class="p-archive-hero__title">Menu:<span class="p-archive-hero__sub-title"><?php single_cat_title(); ?></span></h1>
  </div>
  <div class="c-inner--archive">
    <article class="p-intro">
      <h2 class="p-intro__title"><?php single_cat_title(); ?></h2>
      <p>
        <?php echo category_description(); ?>
      </p>


    </article>
    <!-- ここからp-archive-body -->
    <?php get_template_part('loop'); ?>
    <!--ここまで p-archive-body  -->

    <?php get_template_part('p-pager'); ?>
  </div>
  <!-- c-inner--archiveここまで -->
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>