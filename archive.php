<?php get_header(); ?>  <!-- gets header -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php the_archive_title(); ?> </h1> <!-- built in function that returns archive title -->

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

<?php get_footer(); ?> <!-- gets footer -->