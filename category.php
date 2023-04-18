<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <?php
                        // Outputs the name of the current category in an H1 tag
                        echo '<h1>' . get_queried_object()->name . '</h1>';

                        get_template_part( 'template-parts/temp-article' ); //gets the loop with article content
                        get_template_part( 'template-parts/temp-pagination' );  // gets pagination function
                    ?>

                </div>
                <?php get_sidebar(); ?> <!-- gets sidebar code -->
                
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> <!-- Include footer.php file -->
