
<div class="blog-post col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <? the_post_thumbnail('blog_header'); ?>
    <h3><? the_title(); ?></h3>
    <p class="date"><? the_time('jS F Y'); ?></p>
    <? the_content() ?>
    <hr/>
    <p>
    <span class="nav-previous pull-left"><?php next_post_link( '%link','&larr; Newer post'); ?></span>
    <span class="nav-next pull-right"><?php previous_post_link( '%link','Previous Post &rarr;' ); ?></span>
    </p>
</div>
