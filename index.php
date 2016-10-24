<?php get_header(); ?>

<div class="container post--wrapper clearfix">
  <div class="content">

    <h2>News</h2>

  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : the_post(); ?>

    <div class="post post--full">

      <div class="post--media fl">
        <!-- POST THUMBNAIL -->
        <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) { ?>
          <img src="<?php the_post_thumbnail_url(); ?>" class="post--thumb fl">
      <?php } else { ?>
          <span class="thumb thumb--blank"></span>
      <?php } ?>
        </a>

        <!-- POST DATE -->
        <small class="post--date text-caps text-subdued text-bold fl"><?php the_time('M j Y'); ?></small>

      </div>

      <div class="post--text fr">

        <!-- POST TITLE -->
        <h3 class="post--heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <!-- POST EXCERPT -->
        <?php the_excerpt(); ?>

        <!-- POST CALL TO ACTION -->
        <a href="<?php the_permalink(); ?>" role="button" class="btn--secondary">LEARN MORE</a>

      </div>

    </div>

  	<?php endwhile; ?>
  <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
