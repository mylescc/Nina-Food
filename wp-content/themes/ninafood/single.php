<? get_header(); ?>

<article class="container" id="single-post">
    <div class="row">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content-single', get_post_format() ); ?>

            <?php if ( comments_open() || get_comments_number() ) {
                comments_template();
            } ?>
        <?php endwhile; ?>

    </div>
</article>

<? get_footer(); ?>
