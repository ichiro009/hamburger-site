<?php get_header(); ?>
<main class="l-main">

  <p>index.phpファイルを読み込んでいます。</p>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>

      <?php the_post_thumbnail('full'); ?>
      <p><?php the_content(); ?></p>

    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>