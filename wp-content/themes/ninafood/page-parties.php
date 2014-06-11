<? get_header()?>

    <div class="container parties-container" >

        <div class="row">
            <div class="col-sm-12" id="parties">
                <div id="party-title">
                    <h1>Nina</h1>
                    <h2>Parties</h2>
                </div>
                <div id="details">
                    <?php while (have_posts()) : the_post();
                        the_content();
                    endwhile;?>

                </div>
            </div>
        </div>
    </div>

<? get_footer()?>