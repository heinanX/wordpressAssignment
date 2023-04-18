<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">

                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-8 col-md-6">

                        <h1><?php the_title(); ?></h1>  <!-- Display the post title -->
                        <p><?php the_content(); ?></p>  <!-- Display the post content -->
                    
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-6">

                        <!-- gets url of thumbnail -->
                        <img src="<?php echo get_the_post_thumbnail_url() ?>"/>
                        
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>  <!-- Include footer.php file -->

</body>
</html>