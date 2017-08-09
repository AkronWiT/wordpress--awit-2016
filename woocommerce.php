<?php get_header(); ?>

<div class="container module--primary clearfix">
  <div class="content">

    <div class="size-9 fl">
      <h2><?php the_title(); ?></h2>

      <?php woocommerce_content(); ?>
    </div>

    <div class="size-3 fr">
    <?php get_sidebar(); ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>
