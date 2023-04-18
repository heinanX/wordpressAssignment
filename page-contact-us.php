<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">

                <?php while (have_posts()) : the_post(); ?>
  
                    <h1>
                        <?php the_title(); ?> <!-- Displays the page title -->
                    </h1>
                    <?php the_content(); //Display the post content
                        
                endwhile; ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> <!-- Include footer.php file -->