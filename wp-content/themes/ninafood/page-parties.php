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
<!--                    <p class="text-center">FOR EVENT CATERING PLEASE CONTACT:</p>-->
<!--                    <p class="text-center"><a href="tel:00447867541571">+44 (0) 7867541571</a></p>-->
<!--                    <p class="text-center"><a href="mailto:ninaparker@hotmail.com">ninaafoodcompany@gmail.com</a></p>-->
                </div>
            </div>
        </div>
    </div>

<? get_footer()?>