<?php

/**
 * Rookie - setup functions and definitions
 * 
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 * 
 * @package rookie - Bootstrap Theme Class 2014 - 2015
 * @author 	Abukwaik
 * @copyright Copyright (c) 2014, Rookie
 * @since   rookie 1.0
 *
 */

$get_theme = wp_get_theme();

define('THEMENAME', $get_theme);
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME_NAME', 'Rookie');
define('THEME_SLUG', 'rookie');
define('THEME_VERSION', '1.0');
define('THEME_OPTIONS', 'ro_settings');
define('JS_URI',  THEME_URI . '/includes/js');
define('CSS_URI', THEME_URI . '/includes/css');
define('IMG_DIR', THEME_DIR . '/images');
define('IMG_URI', THEME_URI . '/images');

if ( ! isset( $content_width )) {
  $content_width = 669; 
}

// Set the content width for full width pages with no sidebar.
function rookie_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) || is_page_template( 'front-page.php' ) ) {
    global $content_width;
    $content_width = 1170; /* pixels */
  }
}
add_action( 'template_redirect', 'rookie_content_width' );


/**
    Theme setup
**/

if ( !function_exists( 'rookie_setup' ) ) {

  function rookie_setup() {
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats', array( 'audio', 'gallery', 'image', 'video' ));
    load_theme_textdomain( 'rookie', THEME_DIR . '/languages' );
    register_nav_menu( 'primary', 'Main Menu' );
    register_nav_menu( 'footer-menu', 'Footer Menu' );
    add_theme_support('post-thumbnails');

    // allows users to set a custom background.
    add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
      'default-color' => 'f5f5f5',
      )));

    //add image sizes
    if ( function_exists('add_image_size')) {
      add_image_size('featured_image', 669, 272, true);
      add_image_size('small-thumb',  50, 50, true);
      add_image_size('full-size', 9999, 9999, false);
    }
  }
}

add_action( 'after_setup_theme', 'rookie_setup' );


/**
    Getting post thumbnail url
 */
function rookie_get_thumb_url($pots_ID){
  return wp_get_attachment_url( get_post_thumbnail_id( $pots_ID ) );
}

/**
    Show welcome message and tips
*/
function rookie_welcome_msg() {
  if(!get_option('rookie_welcome_box_displayed')) { 
    update_option('rookie_theme_version',THEME_VERSION); ?>
    <div class="updated">
      <?php include_once(THEME_DIR.'/includes/welcome.php'); ?>
    </div> 
  <?php
  }
}

/** 
    Show admin notices
*/
function rookie_check_installation(){
  add_action( 'admin_notices', 'rookie_welcome_msg', 1 );
}
add_action( 'admin_init', 'rookie_check_installation' );


// Update latest theme version
add_action('wp_ajax_rookie_update_version', 'rookie_update_version');

function rookie_update_version(){
  update_option('rookie_theme_version', THEME_VERSION);
  die();
}

// Update latest theme version
add_action('wp_ajax_rookie_hide_welcome', 'rookie_hide_welcome');

function rookie_hide_welcome(){
  update_option('rookie_welcome_box_displayed', true);
  die();
}


/**
    Load Required Files
**/

// Theme options
if ( !class_exists( 'ReduxFramework' ) ) {
  require_once THEME_DIR . '/admin/redux-core/framework.php';
  require_once THEME_DIR . '/admin/redux-config.php';
}

require_once THEME_DIR . '/admin/options.php';
require_once THEME_DIR . '/admin/helpers.php';

// Importer
include_once THEME_DIR . '/admin/importer/importer.php';

// plugins required
require_once THEME_DIR . '/admin/plugins-included.php';

// Rookie Styles and Scripts 
require_once THEME_DIR . '/admin/core/scripts.php';

// Rookie Sidebars, widgets and menus
require_once THEME_DIR . '/admin/core/register.php';

// Custom functions & snippets
require_once THEME_DIR . '/admin/core/clean.php';
require_once THEME_DIR . '/admin/core/extra.php';
require_once THEME_DIR . '/admin/core/jetpack.php';

// Implement Custom Header features.
require_once THEME_DIR . '/admin/core/custom-header.php';

// Bootstrap Style Breadcrumbs
require_once THEME_DIR . '/includes/breadcrumbs.php';

// Bootstrap nav walker
require_once THEME_DIR . '/includes/bootstrap-walker.php';

// Bootstrap Pagination
require_once THEME_DIR . '/includes/bootstrap-pagination.php';

// Schema HTML markup
require_once THEME_DIR . '/includes/markup.php';

// Custom template tags
require_once THEME_DIR . '/includes/template-tags.php';

// Social share
require_once THEME_DIR . '/includes/social-share.php';