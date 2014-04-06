
<a href="<?php the_permalink(); ?>" id="post-<? the_ID(); ?>" class="article-thumbnail col-sm-4">
    <div class="inner-thumbnail">
        <? the_post_thumbnail('blog_thumbnail'); ?>
        <h3><? the_title(); ?></h3>
        <p class="date"><? the_time('jS F Y'); ?> </p>
        <? the_excerpt(); ?>
        <span class="fake"> View &rarr;</span>
    </div>
</a>
