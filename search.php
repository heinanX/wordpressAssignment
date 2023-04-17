<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">

                    <?php if(have_posts()): ?>
                        <h1>Search Results for: <?php echo get_search_query(); ?></h1>
                        <div class="searchform-wrap">
                            <?php get_search_form(); ?>
                        </div>
                        
                        <?php while(have_posts()): the_post(); ?>
                        <article>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('my-custom-thumbnail'); ?>
                            <?php endif; ?>

                            <h2 class="title">
                                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <?php the_date();  ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>

                                </li>
                                <li>
                                    <i class="fa fa-tag"></i>
                                    <?php getCats(get_the_category()) ?>
                                </li>

                            </ul>
                            <p><?php the_content(); ?></p>
                        </article>
                    <?php endwhile; ?>
                    <nav class="navigation pagination">
                        <?php echo paginate_links(); ?> 
                    </nav>
                    
                    <?php else: ?>
                    <p>Sorry, no results were found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); 

function getCats($categories) {
    
    if ( ! empty( $categories ) ) {
        $last_category_key = end( array_keys( $categories ) );
        foreach ( $categories as $key => $category ) {
           echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
           if ( $key !== $last_category_key ) {
              echo ', ';
           }
        }
     }
}?>