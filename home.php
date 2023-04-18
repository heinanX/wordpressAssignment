<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php echo single_post_title(); ?></h1>

                    <?php
                        get_template_part( 'template-parts/temp-article' ); //gets the loop with article content
                        get_template_part( 'template-parts/temp-pagination' ); // gets pagination function
                    ?>
                    
                </div>

                <?php get_sidebar(); ?> <!-- gets sidebar code -->

            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?> <!-- Include footer.php file -->