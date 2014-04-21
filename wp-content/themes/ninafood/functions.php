<?php
add_theme_support( 'post-thumbnails' );
add_image_size('blog_thumbnail', 360, 200,true);
add_image_size('blog_header', 750, 400,true);
add_image_size('home_blog_link',360,247,true);
add_image_size('food_images_nina',600,0,false);
add_image_size('facebook_thumbnail',1200,630,true);
function custom_excerpt_length() {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// For the Images in the food Gallery
add_shortcode('gallery', 'my_gallery_shortcode');
function my_gallery_shortcode($attr) {
    $post = get_post();

    static $instance = 0;
    $instance++;

    if ( ! empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) )
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }

// Allow plugins/themes to override the default gallery template.
    $output = apply_filters('post_gallery', '', $attr);
    if ( $output != '' )
        return $output;

// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'dl',
        'icontag'    => 'dt',
        'captiontag' => 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $columns = intval($columns);

    $gallery_div = "<div class='row'>";
    $output = $gallery_div;

    $i = 1;
    foreach ( $attachments as $id => $attachment ) {
        $link = wp_get_attachment_image($id, 'food_images_nina', false, false);

        $output .= "<div class='col-sm-".(12/$columns)."'>";

        $output .= $link;

        $output .= "<p>".  wptexturize($attachment->post_excerpt) . "</p>";

        $output .= "</div>";

        if ($i % $columns == 0) {
            $output .= ".</div><div class='row'> ";
        }
        $i++;
    }

    $output .= "

    </div>\n";

    return $output;
}



?>
