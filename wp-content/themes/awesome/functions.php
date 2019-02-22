<?php
  /*
  ==========================
   Include Script and Style
  ==========================
  */
  function awesome_script_enqueue() {
    wp_enqueue_style('style_aboveportfolio',get_template_directory_uri(). '/css/above_portfolio.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_bootstrap_style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_font', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_plugin_style', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_tab_style', get_template_directory_uri() . '/css/tabpanel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_gallery_style', get_template_directory_uri() . '/css/gallery.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_creative_style', get_template_directory_uri() . '/css/creative.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_agency_style', get_template_directory_uri() . '/css/creative.min.css', array(), '1.0.0', 'all');
    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.0.0', true); // true it means print the script in the footer of the page.It defaults false.
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('pluing_js', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), '1.0.0', true);
    wp_enqueue_script('pluing_scroll_js', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array(), '1.0.0', true);
    wp_enqueue_script('pluing_magnific_js', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/creative.min.js', array(), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

  /*
  ==========================
   Activate Menu
  ==========================
  */
  function awesome_theme_setup() {
  
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
  
}
add_action('init', 'awesome_theme_setup');

  /*
  ==========================
   Theme Support Function
  ==========================
  */
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats',array('aside','image','video'));
  add_theme_support('html5', array('search-form'));
/*
  ==========================
   Dynamic Sidebar
  ==========================
  */
  function awesome_widget_setup() {
    register_sidebar(
      array(  
        'name'  => 'Sidebar',
        'id'  => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
      )
    );
    
    }
  add_action('widgets_init','awesome_widget_setup');

?>