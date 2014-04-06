<?php
add_theme_support( 'post-thumbnails' );
add_image_size('blog_thumbnail', 360, 200,true);
add_image_size('blog_header', 750, 400,true);
add_image_size('home_blog_link',360,247,true);
function custom_excerpt_length() {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>
