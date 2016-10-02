<?php get_header(); ?>

<!-- NEWS -->
<div class="container module--primary clearfix">
  <div class="content">
    <h2>Next Event</h2>
  </div>
</div>

<!-- WHO WE ARE -->
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

<!-- NEWS -->
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
  <?php wp_reset_query(); ?>
  </div>
</div>

<!-- SOCIAL PROOFS -->
<div class="container clearfix">
  <div class="content">
    <h2>What Our Members Say</h2>

    <div class="testimony--wrapper size-6 fl clearfix">
    <!-- TESTIMONY 1 -->
      <?php if ( get_post_meta($post->ID, 'testimony_quote_1', true) ) { ?>
        <span class="testimony--photo" style="background-image: url('<?php the_field('testimony_photo_1'); ?>');"></span>
        <p class="size-full"><?php the_field('testimony_quote_1'); ?></p>
        <p class="size-full">- <?php the_field('testimony_name_1'); ?></p>
      <?php } ?>
    </div>

    <div class="testimony--wrapper size-6 fr clearfix">
      <!-- TESTIMONY 2 -->
      <?php if ( get_post_meta($post->ID, 'testimony_quote_2', true) ) { ?>
        <span class="testimony--photo" style="background-image: url('<?php the_field('testimony_photo_2'); ?>');"></span>
        <p class="size-full"><?php the_field('testimony_quote_2'); ?></p>
        <p class="size-full">- <?php the_field('testimony_name_2'); ?></p>
      <?php } ?>
    </div>

  </div>
</div>

<!-- SPONSORS -->
<div class="container sponsors--wrapper module--secondary clearfix">
  <div class="content">
    <h2>Sponsors</h2>
    <?php if( have_rows('sponsor_logos') ): ?>
      <?php while ( have_rows('sponsor_logos') ) : the_row(); ?>
      <div class="sponsors--sponsor">
        <a href="<?php the_sub_field('url'); ?>" target="_blank" title="<?php the_sub_field('name'); ?>"><img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('name'); ?> Logo"></a>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
