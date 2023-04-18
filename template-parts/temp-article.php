<?php while (have_posts()) : the_post(); ?> <!-- While loop if posts then ... -->
                
    <article>

        <?php if ( has_post_thumbnail() ) : ?> <!-- Checks for a thumbnail -->
            <?php the_post_thumbnail('my-custom-thumbnail'); ?> <!-- sets a customized thumbnail size from functions -->
        <?php endif; ?>

        <h2 class="title">
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> <!-- Retrieves the full permalink for the current post and turns it into a link-->
        </h2>
        <ul class="meta">
            <li>
                <i class="fa fa-calendar"></i> <!-- adds icon -->
                <?php the_date();  ?> <!-- function that retrieves and adds the post's date -->
            </li>
            <li>
                <i class="fa fa-user"></i> <!-- adds icon -->
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> <!-- Retrieves the URL to the author page for the user with the ID provided and turns it into a link. -->
            </li>
            <li>
                <i class="fa fa-tag"></i> <!-- adds icon -->
                <?php getCats(get_the_category()) ?> <!-- Function explained below -->
            </li>
        </ul>

        <p><?php the_content(); ?></p> <!-- function that retrieves and adds the post's content -->

    </article>

<?php endwhile; 

//Function that outputs a link of each category and separates them by a comma.
//It recieves the categories through the argument

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