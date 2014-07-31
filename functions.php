<?php

function nothin_setup{

  // ========================
  // ADD THEME SUPPORTS
  // ========================

  // Add dynamic menu support
  add_theme_support( 'menus' );

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

}

?>