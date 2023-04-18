<?php get_header(); ?>  <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>  <!-- Display the post title -->
                    <p><?php the_content(); ?></p>  <!-- Display the post content -->
                    <?php endwhile; ?>

                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">

                    <?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'container' => 'ul', 'menu_class' => 'side-menu' ) ); ?>  <!-- gets the navigation menu for sub pages -->
                
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>  <!-- Include footer.php file -->

</body>
</html>