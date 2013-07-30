<section>
<h2>クラウドソーシング特集記事</h2>
<?php
  if (have_posts()) : while (have_posts()): the_post();
?>
<div class="post clearfix">
  <?php the_post_thumbnail(); ?>
  <div id="contents_area">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="time"><?php the_time('Y年m月d日'); ?></div>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="continue">続きを読む&gt&gt</a>
  </div>
</div>
<?php
  endwhile;
  endif;
?>
</section>
