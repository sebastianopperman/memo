<?php

// Add styles to theme
function add_styles(){
  wp_enqueue_style('main_css', get_template_directory_uri() . '/dist/css/bundle.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

// Add scripts to theme
function add_scripts(){
  wp_deregister_script('wp-embed.min.js');
  wp_deregister_script('wp-embed');
  wp_deregister_script('embed');
  wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0.1', true);
  wp_localize_script( 'bundle', 'BlogInfo', array('url' => get_bloginfo('template_directory').'/', 'site' => get_bloginfo('wpurl'), 'ajax_url' => admin_url( 'admin-ajax.php' )));
}
add_action('wp_enqueue_scripts', 'add_scripts');

// Image support for all CPTs
add_theme_support( 'post-thumbnails' );

// Disable WordPress comments
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action('init', 'remove_comment_support', 100);
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

// Register Menus
function menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'menus' );