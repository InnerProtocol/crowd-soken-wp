<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?><?php if ( is_single() ){ ?> » Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
</head>
<body>
<header>
  <div id="header_in" class="clearfix">
    <a href="<?php echo home_url(); ?>" class="title">
      <h1>クラウド総研</h1>
    </a>
    <h2>-クラウドソーシング総合研究所-</h2>
    <ul id="global_menu">
      <a href="<?php echo home_url(); ?>">
        <li>特集</li>
      </a>
      <a href="<?php echo get_page_link(8); ?>">
        <li>関連記事</li>
      </a>
      <a href="<?php echo get_page_link(15); ?>">
        <li>関連ツイート</li>
      </a>
      <a href="<?php echo get_page_link(2); ?>">
        <li class="last">クラウド総研とは</li>
      </a>
    </ul>
  </div>
</header>
