<?php
get_header();
while (have_posts()) : the_post(); ?>

  <article><?php the_content(); ?></article>

<?php endwhile;
echo 'hej';
get_footer();
?>
