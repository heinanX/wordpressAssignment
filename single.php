<?php get_header(); ?>  <!-- Include header.php file -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <?php if ( has_post_thumbnail() ) : ?> <!-- Checks for a thumbnail -->
                                <?php the_post_thumbnail('my-custom-thumbnail'); ?>  <!-- sets a customized thumbnail size from functions -->
                        <?php endif; ?>

                        <h2 class="title">
                            <?php the_title(); ?> <!-- displays title -->
                        </h2>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> <!-- adds icon -->
                                <?php the_date();  ?>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <!-- adds icon -->
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> <!-- Retrieves the URL to the author page for the user with the ID provided and turns it into a link. -->
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <!-- adds icon -->
                                <?php getCats(get_the_category()) ?>  <!-- Function explained below -->
                            </li>

                        </ul>
                        <p><?php the_content(); ?></p> <!-- displays the content -->
                    </article>
                    <?php endwhile; ?>

                </div>
                <?php get_sidebar(); ?>  <!-- gets sidebar code -->
            </div>
        </div>
    </section>
</main>


<?php get_footer();

function getCats($categories) {
    
    $last_category_key = end( array_keys( $categories ) ); // stores last item from array inside a variable

    foreach ( $categories as $key => $category ) {
    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>'; // outputs a link of a category
    if ( $key !== $last_category_key ) { //if current item is not last item ...
        echo ', '; //add a comma
    }
    }
    
}
?>