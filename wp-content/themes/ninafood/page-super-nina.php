<?php get_header(); ?>

<div class="container parties-container">
    <div class="row">
        <div class="col-sm-12">
            <div id="super-nina">
            <div id="party-title">
                <h1>Super nina</h1>
                <h2 class="smaller">Gluten-free, Vegetarian, Vegan, Dairy-free, Sugar-free</h2>
            </div>
                <?php while (have_posts()) : the_post();
                    the_content();
                endwhile;?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>