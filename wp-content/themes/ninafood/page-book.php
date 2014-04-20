<? get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-5 visible-xs">
                <p>
                    <?php the_post_thumbnail('full') ?>
                </p>
            </div>
            <div class="col-sm-7">
                <?php the_content(); ?>
            </div>
            <div class="col-sm-5 hidden-xs">
                <?php the_post_thumbnail('full') ?>
            </div>
        </div>
    </div>

<?php endwhile; ?>
<? get_footer(); ?>
