<?php get_header(); ?>

<div id="main" class="clearfix">
<section>
<?php
  if (have_posts()) : while (have_posts()): the_post();
?>
<div class="post_single">
  <h2><?php the_title(); ?></a></h2>
  <div class="time"><?php the_time('Y年m月d日'); ?></div>
  <?php the_post_thumbnail(); ?>
  <?php the_content(); ?>
  <div class="social"><?php if(function_exists("wp_social_bookmarking_light_output_e")) {wp_social_bookmarking_light_output_e();} ?></div>
  <div class="prevnext clearfix">
    <div class="prev">
      <?php if(get_previous_post()): ?>
        <?php previous_post_link(); ?>
      <?php else: ?>
        最初の記事です
      <?php endif; ?>
    </div>
    <div class="next">
      <?php if(get_next_post()): ?>
        <?php next_post_link(); ?>
      <?php else: ?>
        最新の記事です
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
  endwhile;
  endif;
?>
</section>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

