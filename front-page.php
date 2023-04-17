<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <?php while (have_posts()) : the_post(); ?>
                    <div class="hero">

                        <?php if ( has_post_thumbnail() ) :
                                $thumbnail_url = get_the_post_thumbnail_url(); ?>
                            <img src="<?php echo $thumbnail_url; ?>"/>
                        <?php endif; ?>
                        <div class="text">

                            <?php the_content(); ?>

                        </div>
                        <?php endwhile; ?>

                    </div>
                </div>
                    
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

</body>
</html>