<?php get_header(); ?>

    <div class="container parties-container">
        <div class="row">
            <div class="col-sm-12">
                <div id="super-nina">
                    <div id="party-title">
                        <h1>Super nina</h1>
                        <h2 >Gluten-free, Vegetarian, Vegan<br/>, Dairy-free, Sugar-free</h2>
                    </div>
                    <div id="details">
                        <?php while (have_posts()) : the_post();
                            the_content();
                        endwhile;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>