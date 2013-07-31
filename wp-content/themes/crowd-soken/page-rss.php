<?php
/*
Template Name: rss
*/
?>
<?php get_header(); ?>
<div id="main" class="clearfix">
<section>
<h2>クラウドソーシング関連記事</h2>
<div id="feed">
</div>
</section>
<?php get_sidebar(); ?>
</div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("feeds", "1");
function initialize() {
  var feedurl = "http://crowdsourcing.jpn.com/feed/";
  var feed    = new google.feeds.Feed(feedurl);
  feed.setNumEntries(10);
  feed.load(function(result){
    if(!result.error){
      for(var i=0; i< result.feed.entries.length; i++){
        var entry  = result.feed.entries[i];
        var div    = '<div class="post_rss">';
        var title  = '<h3><a href="' + entry.link + '" target="_blank">' + entry.title + '</a></h3>';
        var enddiv = '</div>';
        $('#feed').append(div + title + enddiv);
      }
    }
  });
}
google.setOnLoadCallback(initialize);
</script>
<?php get_footer(); ?>
