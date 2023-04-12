<?php 
// Lägg till stöd för utvalda bilder
add_theme_support( 'post-thumbnails' );

// Lägg till stöd för menyer
add_theme_support( 'menus' );


add_action('wp_enqueue_scripts', 'my_scripts');

function my_scripts() {
    wp_register_style('style', get_template_directory_uri(). '/labb1-filer/css/style.css');
    wp_register_style('bootstrap', get_template_directory_uri(). '/labb1-filer/css/bootstrap.css');
    wp_register_style('fontAwesome', get_template_directory_uri(). '/labb1-filer/css/font-awesome.css');
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontAwesome');

}

function register_my_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'navigation' )
      )
    );
  }

  add_action( 'init', 'register_my_menus' );

?>


