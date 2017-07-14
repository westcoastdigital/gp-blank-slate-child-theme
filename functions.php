<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */
 
// Diasbles all of GP's styles and scripts, do not rename function
function generate_scripts() {
	
	wp_enqueue_style( 'project', get_stylesheet_directory_uri() . '/assets/css/project.css' );
	
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' );
	
}
add_action( 'wp_enqueue_scripts', 'generate_scripts' );

// Disable all dashboard widgets
function generate_remove_dashboard_widgets() {
	
	global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);
	
}
add_action('wp_dashboard_setup', 'generate_remove_dashboard_widgets' );
remove_action('welcome_panel', 'wp_welcome_panel');

// Disable premium addon notifications
function generate_addons_available() {
    return false;
}

// Make pages full width
function generate_add_body_class( $classes ) {
  $classes[] = 'full-width-content';
  return $classes;
}
add_filter( 'body_class','generate_add_body_class' );

// Remove footer widgets
function generate_remove_footer_widgets() {
    return '0';
}
add_filter('generate_footer_widgets','generate_remove_footer_widgets');

// Disable all sidebars
function generate_remove_sidebars(){
	unregister_sidebar( 'header' );
	unregister_sidebar( 'sidebar-1' );
	unregister_sidebar( 'sidebar-2' );
	unregister_sidebar( 'top-bar' );
	unregister_sidebar( 'footer-bar' );
	unregister_sidebar( 'footer-1' );
	unregister_sidebar( 'footer-2' );
	unregister_sidebar( 'footer-3' );
	unregister_sidebar( 'footer-4' );
	unregister_sidebar( 'footer-5' );
}
add_action( 'widgets_init', 'generate_remove_sidebars', 11 );

// Make pages and posts have no sidebar by default
function generate_remove_sidebar_layout( $layout ) {
    return 'no-sidebar';
 }
add_filter( 'generate_sidebar_layout','generate_remove_sidebar_layout' );

// Remove page title from all pages
function generate_remove_page_titles() {
  if ( is_page() ) :
    return false;
  endif;
  
  return true;
}
add_filter( 'generate_show_title','generate_remove_page_titles', 20 );

// Removes layout metabox on posts/pages, do not rename function
function generate_add_layout_meta_box() {
	
}

// Removes footer metabox on posts/pages, do not rename function
function generate_add_footer_widget_meta_box() {
	
}

// Removes page builder metabox on posts/pages, do not rename function
function generate_add_page_builder_meta_box() {
	
}

// Removes disable elements metabox on posts/pages, do not rename function
function generate_add_de_meta_box() {
	
}