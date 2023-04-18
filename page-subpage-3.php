<?php get_header();  ?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12">

                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>

                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

</body>
</html>