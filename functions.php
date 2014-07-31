<?php

if ( ! function_exists( 'nothin_setup' ) ) :
function nothin_setup{

  // ===============================================================
  // ADD THEME SUPPORTS
  // ===============================================================

  // Add dynamic menu support
  add_theme_support( 'menus' );

  // Add featured image support
  add_theme_support('post-thumbnails');

  // Add post format support
  add_theme_support( 'post-formats', 
    array( 
      'aside', 
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ) 
  );

  add_post_type_support( 'post', 'post-formats' );
  add_post_type_support( 'page', 'post-formats' );
  // and other custom post types if you have them


  // ===============================================================
  // REGISTER ALL THE THINGS
  // ===============================================================

  // Add a widget area for the footer
  register_sidebar(array(
    'name'          => 'Footer Widgets', 
    'id'            => '',  
    'description'   => 'A widgetable area displayed in the footer',
    'class'         => 'footer-widgets',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ););

  // ===============================================================
  // ENQUEUE STYLES AND SCRIPTS
  // ===============================================================

  function nothin_enqueues() {
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
    wp_enqueue_script( 'main-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' )); // Adds built in jQuery too!
  }
  add_action( 'wp_enqueue_scripts', 'nothin_enqueues' );

  // ===============================================================
  // EXTRA BITS AND BOBS
  // ===============================================================

  // Make custom post types searchable
  function searchable_post_types( $query ) {
   if ( $query->is_search ) { $query->set( 'post_type', array( 'site', 'plugin', 'theme', 'person' )); } 
   return $query;
  }
  add_filter( 'the_search_query', 'searchable_post_types' );

  // Show all errors, without having to go back to wp-config.php => COMMENT THIS OUT FOR PRODUCTION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

}
endif; // nothin_setup
add_action( 'after_setup_theme', 'nothin_setup' );

?>