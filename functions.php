<?php
  add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

  function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  }

  /* Theme setup */
  add_action( 'after_setup_theme', 'wpt_setup' );
  if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
      register_nav_menu( 'primary', __( 'Primary', 'wptuts' ) );
    } endif;

  function wpt_register_js() {
    wp_register_script('jquery.ui.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js', array('jquery'));
    wp_enqueue_script('jquery.ui.js');
    wp_register_script('jquery.bootstrap.min', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'));
    wp_enqueue_script('jquery.bootstrap.min');
    wp_register_script('weownit', get_stylesheet_directory_uri() . '/js/weownit.js', array('jquery'));
    wp_enqueue_script('weownit');
  }
  add_action( 'init', 'wpt_register_js' );

  function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
    wp_register_style('fontawesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    wp_enqueue_style( 'fontawesome.min' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

  // Register custom navigation walker
  require_once('wp-bootstrap-navwalker.php');
?>