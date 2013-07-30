<?php
/*
Template Name: rss
*/
?>
<?php get_header(); ?>
<div id="main" class="clearfix">
<section>
<h2>クラウドソーシング関連記事</h2>
<? 

include_once(ABSPATH . WPINC . '/feed.php'); 

$rss = fetch_feed(
  array(
    'http://crowdsourcing.jpn.com/feed/',
    )
);
if(!is_wp_error($rss)){
  $rss->set_cache_duration(1800);
  $rss->init();
  $maxitems  = $rss->get_item_quantity(10);
  $rss_items = $rss->get_items(0, $maxitems);
  date_default_timezone_set('Asia/Tokyo');
}

if($maxitems == 0){
  echo '<p>更新情報がありません。</p>';
} else {
  foreach ($rss_items as $item) {
    echo '<div class="post_rss">';
    echo '<h3><a href="'.$item->get_permalink().'" target="_blank">' . $item->get_title() . '</a></h3>';
    echo '</div>';
  }
}

?>
</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
