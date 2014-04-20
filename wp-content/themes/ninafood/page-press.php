<? get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="container press-gallery">
        <? the_content(); ?>
    </div>
<?php endwhile; ?>
<? get_footer();?>