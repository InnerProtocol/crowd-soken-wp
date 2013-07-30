<?php

// side barの設定
$args = array(
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h3 class=widgettitle"">',
  'after_title'   => '</h3>'
);
register_sidebar($args); 

/*
// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'papers', 
    array(
      'labels' => array(
        'name' => __( '論文' ),
        'singular_name' => __( '論文' )
      ),
      'public'        => true,
      'menu_position' => 5,
    )
  );
}
*/

// アイキャッチ画像
add_theme_support('post-thumbnails');

?>
