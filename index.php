<?php
get_header(); // Include header.php file

while (have_posts()) : the_post(); ?>

  <article><?php the_content(); ?></article> <!-- Display the post content -->

<?php endwhile;

get_footer(); // Include footer.php file
?>
