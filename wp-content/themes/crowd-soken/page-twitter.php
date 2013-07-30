<?php
/*
Template Name: twitter 
*/
?>
<?php get_header(); ?>
<div id="main" class="clearfix">
<section id="twitter">
<h2>クラウドソーシング関連ツイート</h2>
<?php

require_once(TEMPLATEPATH . '/twitteroauth/twitteroauth.php');
require_once(TEMPLATEPATH . '/twitter_text/Autolink.php');

$key     = "クラウドソーシング";

$options = array('q' => $key, 'count' => 20, 'lang' => 'ja');

$consumerKey    = 'NteqgpEioB404DmM1vYUZw';
$consumerSecret = 'FjnlUA80vktI6vZLlzdU1wJZy8JAXxzDheQ1S6qEE';
$accessToken    = '122867501-S6H13lXYC6rfWuyube7IArxUoLfXdtET8MWW6QXz';
$accessSecret   = 'Qxlf5fnBjuTjuQKcpibrKCGMdqzjm7Dz8ROKklAo4s';

$twObj = new TwitterOAuth(
  $consumerKey,
  $consumerSecret,
  $accessToken,
  $accessSecret
);

$json = $twObj->OAuthRequest(
  'https://api.twitter.com/1.1/search/tweets.json',
  'GET',
  $options
);

$jset = json_decode($json, true);

$tmpHtml = "";

foreach ($jset['statuses'] as $result){
  $id   = $result['id'];
  $name = $result['user']['name'];
  $screen = $result['user']['screen_name'];
  $uri  = "http://twitter.com/" . $screen;
  $link = $result['user']['profile_image_url'];
  $content = Twitter_Autolink::create($result['text'])->setNoFollow(false)->addLinks();
  $updated = $result['created_at'];
  $jptime  = strtotime($updated);
  $timestamp = $jptime + 9 * 60 * 60;
  $timestamp = date('Y-m-d H:i:s', $timestamp);
  
  if (preg_match("/全員フォロー/", $content) === 0) {
    $tmpHtml .= '<div class="tw_post">';
    $tmpHtml .= '<div class="tw_header clearfix">';
    $tmpHtml .= '<img src="'.$link.'" class="thumb">';
    $tmpHtml .= '<a href="'.$uri.'" target="_blank"><div class="name">'. $name .'</div></a>';
    $tmpHtml .= '<a href="'.$uri.'" target="_blank"><div class="id">@'. $screen .'</div></a>';
    $tmpHtml .= '</div>';
    $tmpHtml .= '<div class="text">' . $content . '</div>';
    $tmpHtml .= '<div class="time">'.$timestamp.'</div>';
    $tmpHtml .= '</div>';
  }
}

print_r($tmpHtml);
?>
</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
