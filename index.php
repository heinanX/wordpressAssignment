<?php
get_header();
while (have_posts()) : the_post(); ?>

  <article><?php the_content(); ?></article>

<?php endwhile;
get_footer();
?>
