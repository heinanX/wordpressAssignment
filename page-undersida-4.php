<?php get_header();  ?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-8 col-md-6">

                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-6">

                        <!-- If featured image > Get URL of featured image and store in variable -->
                        <?php if ( has_post_thumbnail() ) :
                                $thumbnail_url = get_the_post_thumbnail_url(); ?>
                            <img src="<?php echo $thumbnail_url; ?>"/>
                        <?php endif; ?>
                        
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>

</body>
</html>