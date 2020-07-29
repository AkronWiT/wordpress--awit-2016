<?php get_header(); ?>

<!-- NEWS -->
<div class="container events--wrapper module--primary clearfix">
  <div class="content">
    <div id="nextEvent" class="events--up-next">
      <h2 class="h3">Next Event</h2>

      <h3 class="h2"><a href="#" class="js-current-title js-current-url"><!--Loading...--></a></h3>
      <p class="events--current-description js-current-desc"><!--Loading...--></p>
      <a href="#" role="button" class="btn--secondary fl js-current-url">LEARN MORE</a>
    </div>
	  
    <div id="upcommingEvent" class="events--upcomming">
      <h2 class="h3">Upcoming Events</h2>
      <ul class="events--list">
		<!--
        <li class="events--event"><a href="#" target="_blank" class="js-next-link-1">Loading...</a></li>
        <li class="events--event"><a href="#" target="_blank" class="js-next-link-2">Loading...</a></li>
        <li class="events--event"><a href="#" target="_blank" class="js-next-link-3">Loading...</a></li>
        <li class="events--event"><a href="#" target="_blank" class="js-next-link-4">Loading...</a></li>
		-->
      </ul>
    </div>
  </div>
</div>

<!-- Mission -->
<div class="container clearfix">
  <div class="content">
	  <h2>
		  Our Mission
	  </h2>
      <p><?php $output = get_post(391);
		  echo apply_filters( 'the_content', $output->post_content )
		  ?></p>
    <?php wp_reset_query(); ?>
    </div>
  </div>

<!-- WHO WE ARE -->
<div class="container who-we-are--wrapper module--secondary clearfix">
  <div class="content">
    <img src="<?php bloginfo('template_url'); ?>/img/photo--meetup.png" class="who-we-are--photo">
    <div class="who-we-are--description">
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
    <h2>Blog</h2>
  <?php
    $args = array( 'posts_per_page' => 3 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
    <div class="post">
      <a href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) { ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="post--thumb">
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

    <div class="testimony--wrapper">
      <!-- TESTIMONY 1 -->
      <?php if ( get_post_meta($post->ID, 'testimony_quote_1', true) ) { ?>
        <span class="testimony--photo" style="background-image: url('<?php the_field('testimony_photo_1'); ?>');"></span>
        <p class="size-full"><?php the_field('testimony_quote_1'); ?></p>
        <p class="size-full">- <?php the_field('testimony_name_1'); ?></p>
      <?php } ?>
    </div>

    <div class="testimony--wrapper">
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

<!-- Thank You
<div class="container sponsors--wrapper module--secondary clearfix">
  <div class="content">
    <h2>Thank You Donors</h2>
    <?php if( have_rows('thank_you!') ): ?>
      <?php while ( have_rows('thank_you!') ) : the_row(); ?>
      <div class="sponsors--sponsor">
        <p><?php the_sub_field('donor_name'); ?></p>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
-->

<script>
  updateContent();
</script>

<?php get_footer(); ?>
