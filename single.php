<?php get_header(); ?>
<main class="l-main">

  <div class="p-hero--single" style="background-image:url( <?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);">
    <h1 class="p-hero__title"><?php the_title(); ?></h1>
  </div>

  <section class="p-content--single c-inner--common">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile;
    else : ?>
      <p>表示する記事がありません</p>
    <?php endif; ?>

  </section>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>