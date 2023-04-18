<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">

                    <?php if(have_posts()): ?>
                        <h1>Search Results for: <?php echo get_search_query(); ?></h1> <!-- function stores the searched term and returns it -->
                        <div class="searchform-wrap">
                            <?php get_search_form(); ?> <!-- Wp built in function for search form -->
                        </div>
                        
                        <?php
                            get_template_part( 'template-parts/temp-article' ); //gets the loop with article content
                            get_template_part( 'template-parts/temp-pagination' ); // gets pagination function
                        ?>
                    
                    <?php else: ?>
                    <p>Sorry, no results were found.</p> <!-- Returns this message if search is unsuccessful -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>   <!-- Include footer.php file -->