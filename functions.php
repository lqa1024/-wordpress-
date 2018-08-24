<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
//添加文章缩略图功能
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
//缩略图
function get_first_image() {
      global $post;
      $first_img = '';
      ob_start();
      ob_end_clean();
      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $first_img = $matches [1] [0];      if(empty($first_img)){ //Defines a default image        $first_img = bloginfo('template_url') . "/images/default.jpg";
      };
return $first_img;
}

?>
