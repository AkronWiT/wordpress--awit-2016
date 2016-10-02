<?php get_header(); ?>

<div class="container module--primary clearfix">
  <div class="content">
    <h2>Next Event</h2>
  </div>
</div>

<div class="container module--secondary clearfix">
  <div class="content">
    <img src="<?php bloginfo('template_url'); ?>/img/photo--meetup.png" class="size-5 fl">
    <div class="size-6 fr">
      <h2>Who We Are</h2>
    <?php if ( get_post_meta($post->ID, 'what_we_do', true) ) { ?>
      <p><?php the_field('what_we_do'); ?></p>
    <?php } ?>
    <?php wp_reset_query(); ?>
    </div>
  </div>
</div>

<div class="container post--wrapper module--tertiary clearfix">
  <div class="content">
    <h2>News</h2>
  <?php
    $args = array( 'posts_per_page' => 3 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
    <div class="post fl">
      <a href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) { ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="thumb">
    <?php } else { ?>
        <span class="thumb thumb--blank"></span>
    <?php } ?>
      </a>
      <small class="text-caps text-subdued text-bold"><?php the_time('M j Y'); ?></small>
      <h3 class="post--heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" role="button" class="btn--secondary fl">LEARN MORE</a>
    </div>
  <?php endwhile; ?>
  </div>
</div>

<div class="container clearfix">
  <div class="content">
    <h2 class="text-hide">Testimony</h2>
  </div>
</div>

<div class="container module--secondary clearfix">
  <div class="content">
    <h2>Sponsors</h2>
    <img src="https://placeholdit.imgix.net/~text?txtsize=21&txt=220%C3%97140&w=380&h=285" class="size-3 fl">
    <img src="https://placeholdit.imgix.net/~text?txtsize=21&txt=220%C3%97140&w=380&h=285" class="size-3 fl">
    <img src="https://placeholdit.imgix.net/~text?txtsize=21&txt=220%C3%97140&w=380&h=285" class="size-3 fl">
    <img src="https://placeholdit.imgix.net/~text?txtsize=21&txt=220%C3%97140&w=380&h=285" class="size-3 fl">
  </div>
</div>


<?php get_footer(); ?>
