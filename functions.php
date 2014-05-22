<?php
/**
 * My Development Theme Functions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 * 
 * TODO: Add favicon
 */
 
 /**
 * Enqueues scripts and styles for front end.
 */
function custom_theme_styles() 
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '20120208', 'all' );
  wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '20140409', 'all' );

  // enqueing:
  wp_enqueue_style( 'custom-style' );
  wp_enqueue_style('normalize' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );