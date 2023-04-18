<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <?php while (have_posts()) : the_post(); ?>
                    <div class="hero">

                        <?php if ( has_post_thumbnail() ) : ?> <!-- Check if post has a featured image -->
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>  <!-- Display the featured image -->
                        <?php endif; ?>
                        <div class="text">

                            <?php the_content(); ?> <!-- Display the post content -->

                        </div>
                        <?php endwhile; ?>

                    </div>
                </div>
                    
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> <!-- Include footer.php file -->