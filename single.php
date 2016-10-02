<?php get_header(); ?>

<div class="container module--primary clearfix">
  <div class="content">

    <h2><?php the_title(); ?></h2>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>

  </div>
</div>

<?php get_footer(); ?>
