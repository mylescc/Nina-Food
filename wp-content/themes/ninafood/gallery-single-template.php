<?php get_header(); ?>
    <div  class="container">
        <?php
        global $post, $wp_query;
        $args = array(
            'post_type'					=> 'gallery',
            'post_status'				=> 'publish',
            'name'							=> $wp_query->query_vars['name'],
            'posts_per_page'		=> 1
        );
        $second_query = new WP_Query( $args );
        $gllr_options = get_option( 'gllr_options' );
        if ($second_query->have_posts()) : while ($second_query->have_posts()) : $second_query->the_post(); ?>

            <?php the_content();
            $posts = get_posts(array(
                "showposts"			=> -1,
                "what_to_show"	=> "posts",
                "post_status"		=> "inherit",
                "post_type"			=> "attachment",
                "orderby"				=> $gllr_options['order_by'],
                "order"					=> $gllr_options['order'],
                "post_mime_type"=> "image/jpeg,image/gif,image/jpg,image/png",
                "post_parent"		=> $post->ID
            ));
            if( count( $posts ) > 0 ) {
                $count_image_block = 1; ?>

                <?php foreach( $posts as $attachment ) {
                    $key = "gllr_image_text";
                    $link_key = "gllr_link_url";
                    $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'photo-thumb' );
                    $image_attributes_large = wp_get_attachment_image_src( $attachment->ID, 'large' );
                    $image_attributes_full = wp_get_attachment_image_src( $attachment->ID, 'full' );

                    if( $count_image_block % 3 == 1 ) { ?>
                        <div class="row">
                    <?php } ?>
                    <?php $url = get_post_meta( $attachment->ID, $link_key, true ) ?>
                    <div class="col-sm-4">
                        <p>Hello why isn't this showing</p>
                        <a  href="<?php echo $image_attributes_large[0]; ?>" title="<?php echo get_post_meta( $attachment->ID, $key, true ); ?>" target="_blank">
                            <img  style="width: 100%;height:auto;" alt="" title="<?php echo get_post_meta( $attachment->ID, $key, true ); ?>" src="<?php echo $image_attributes[0]; ?>" rel="<?php echo $image_attributes_full[0]; ?>" />
                        </a>

                    </div>
                    <?php if( $count_image_block %3 == 0 ) { ?>
                        </div>
                    <?php }


                    $count_image_block++;
                }
            } ?>

        <?php endwhile; else: ?>
            <div class="gallery_box_single">
                <p class="not_found"><?php _e('Sorry, nothing found.', 'gallery'); ?></p>
            </div>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>