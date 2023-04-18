<?php get_header(); ?> <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">

                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12">

                        <h1><?php the_title(); ?></h1> <!-- Display the post title -->
                        <p><?php the_content(); ?></p> <!-- Display the post content -->

                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> <!-- Include footer.php file -->

</body>
</html>