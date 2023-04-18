<?php 
// add supports to thumbnails and widgets
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

// add supports to menu
add_action('after_setup_theme', 'register_my_menus');
add_action('after_setup_theme', 'my_theme_setup');
add_action('wp_enqueue_scripts', 'my_scripts');

/* Function that adds the script files and css files */
function my_scripts() {
  // Loads script.js-file that's dependant on jQuery
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/labb1-filer/js/script.js', array('jquery'), '1.0.0', true);

  wp_register_style('style', get_template_directory_uri(). '/labb1-filer/css/style.css');
  wp_register_style('bootstrap', get_template_directory_uri(). '/labb1-filer/css/bootstrap.css');
  wp_register_style('fontAwesome', get_template_directory_uri(). '/labb1-filer/css/font-awesome.css');
 
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('fontAwesome');
  wp_enqueue_style('style');

  wp_register_script('script', get_template_directory_uri(). '/labb1-filer/js/script.js');
  wp_enqueue_script('script');

  wp_register_script('jquery', get_template_directory_uri(). '/labb1-filer/js/jquery.js');
  wp_enqueue_script('jquery');
}

/* registers my menus */
function register_my_menus() {
  register_nav_menus(
    array(
      'navigation' => 'Navigation',
      'side-menu' => 'Side Menu',
      'page-nav' => 'Page Nav'
    )
  );
}

// sets a custom thumbnail size:
function my_theme_setup() {
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'my-custom-thumbnail', 600, 400, true );
}

// sidebar search widget area
register_sidebar( [
  'name' => 'copyrightWidget',
  'description' => 'copyright widget',
  'id' => 'copyright',
  'before_widget' => ''
]);
// sidebar widget area
register_sidebar( [
  'name' => 'sidebarWidget',
  'description' => 'sidebar widget',
  'id' => 'sidebar',
  'before_widget' => '<li>',
  'after_widget'  => '</li>'
]);
// footer widget area
register_sidebar( [
  'name' => 'footerWidget',
  'description' => 'footer widget',
  'id' => 'footer',
  'before_widget' => ''
]);

// sets get_the_archive_title to 'Archive: Month Year'

add_filter( 'get_the_archive_title', function ( $title ) {
  if ( is_archive() ) {
      $title = 'Archive: ' . single_month_title( ' ', false );
  }
  return $title;
});

?>


