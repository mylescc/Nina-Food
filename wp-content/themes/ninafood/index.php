<? get_header();?>


    <div class="container blog-thumbnails" id="blog">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>
                <span class="nav-previous pull-right"><?php next_posts_link( 'Older posts &rarr;' ); ?></span>
                <span class="nav-next pull-left"><?php previous_posts_link( '&larr; Newer posts' ); ?></span>
                </p>
            </div>
        </div>
        <hr/>
        <?php
        $counter = 1;

        while ( have_posts() ) : the_post();

        if ($counter == 1){?>
        <div class="row">
            <? } else if ($counter%4 == 0){?>
        </div>
        <div class="row">
            <?}
            $counter = $counter + 1;
            get_template_part( 'content', get_post_format() );

            endwhile; ?>
        </div>
        <hr/>
        <div class="row">
            <p>
            <span class="nav-previous pull-right"><?php next_posts_link( 'Older posts &rarr;' ); ?></span>
            <span class="nav-next pull-left"><?php previous_posts_link( '&larr; Newer posts' ); ?></span>
            </p>
        </div>
    </div>

<? get_footer();?>