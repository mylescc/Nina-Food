<? get_header()?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center">MY 70's CITROEN VAN IS AVAILABLE FOR EVENTS, PLEASE CONTACT ME FOR MORE DETAILS</p>
            </div>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
            <? the_content(); ?>
        <?php endwhile; ?>
    </div>

<? get_footer()?>