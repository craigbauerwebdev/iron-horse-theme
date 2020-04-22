<?php
// Load themes CSS
	function theme_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    /* Compiled CSS */
    wp_enqueue_style( 'base', get_template_directory_uri() . '/css/index.css' );
    //wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' );
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,700;1,400&display=swap' );
	}

// Load Javascript here
    function theme_js() {
        // Register first then enqueue on certain pages with a conditional
        wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
        wp_enqueue_script( 'theme' );
    }

// Add above Functions (css and js)

add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );
//enable custom menues
add_theme_support( 'menus');
function register_my_menus() {
  register_nav_menus(
    array(
      'main' => __( 'Main Menu' ),
      'mobile' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Enable Featured image
add_theme_support( 'post-thumbnails' );

//Register widgetized areas and sidebars
if (function_exists('register_sidebar')) {  
     register_sidebar(array(  
      'name' => 'Sidebar Widgets',  
      'id'   => 'sidebar-widgets',  
      'description'   => 'Widget Area',  
      'before_widget' => '<div id="sidebar-widget" class="sidebar-widget">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h2>',  
      'after_title'   => '</h2>'  
     ));  
    }

if (function_exists('register_sidebar')) {  
     register_sidebar(array(  
      'name' => 'Footer1',  
      'id'   => 'footer1',  
      'description'   => 'Widget Area',  
      'before_widget' => '<div id="footer-widget" class="footer-widget">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h2>',  
      'after_title'   => '</h2>'  
     ));  
    }

if (function_exists('register_sidebar')) {  
     register_sidebar(array(  
      'name' => 'Footer2',  
      'id'   => 'footer2',  
      'description'   => 'Widget Area',  
      'before_widget' => '<div id="footer-widget" class="footer-widget">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h2>',  
      'after_title'   => '</h2>'  
     ));  
    }

?>