<?php

/**
 * Rookie - setup functions and definitions
 * 
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 * 
 * @package Rookie Startar
 * @author Abukwaik http://www.croti.com
 * @copyright Copyright (c) 2015, Rookie
 * @license http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @since rookie 1.0
 *
 */

define('ROOKIE_THEME_DIR', get_template_directory());
define('ROOKIE_THEME_URI', get_template_directory_uri());
define('ROOKIE_THEME_NAME', 'Rookie Starter');
define('ROOKIE_THEME_SLUG', 'rookie starter');
define('ROOKIE_THEME_VERSION', '1.0.3');
define('ROOKIE_THEME_OPTIONS', 'ro_settings');
define('ROOKIE_JS_URI',  ROOKIE_THEME_URI . '/includes/js');
define('ROOKIE_CSS_URI', ROOKIE_THEME_URI . '/includes/css');
define('ROOKIE_IMG_DIR', ROOKIE_THEME_DIR . '/images');
define('ROOKIE_IMG_URI', ROOKIE_THEME_URI . '/images');

if ( ! isset( $content_width )) {
  $content_width = 669; 
}

// Set the content width for full width pages with no sidebar.
function rookie_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) || is_page_template( 'front-page.php' ) ) {
    global $content_width;
    $content_width = 1170;
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
    add_theme_support( 'post-thumbnails');
    load_theme_textdomain( 'rookie-startar', ROOKIE_THEME_DIR . '/languages' );
    add_editor_style( ROOKIE_CSS_URI . '/editor-style.css' );

    // Register Menus
    register_nav_menus(
      array(
        'primary'     => __( 'Primary', 'rookie-startar' ),
        'footer-menu' => __( 'Footer Menu', 'rookie-startar' ),
        ) 
      );

    // allows users to set a custom background.
    add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
      'default-color' => 'f5f5f5',
      )));

    //add image sizes
    add_image_size('rookie-startar-featured_image', 669, 272, true);
    add_image_size('rookie-startar-small-thumb',  50, 50, true);
    add_image_size('rookie-startar-full-size', 9999, 9999, false);
  }
}

add_action( 'after_setup_theme', 'rookie_setup' );

/**
  Title backwards compatibility for old WP versions
*/
if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
  }
  add_action( 'wp_head', 'theme_slug_render_title' );
}

/**
    Getting post thumbnail url
 */
function rookie_get_thumb_url($pots_ID){
  return wp_get_attachment_url( get_post_thumbnail_id( $pots_ID ) );
}


/**
    Load Required Files
**/
// Load Redux framework admin panel
if ( !class_exists( 'ReduxFramework' ) ) {
  require_once ROOKIE_THEME_DIR . '/admin/ReduxCore/framework.php';
  require_once ROOKIE_THEME_DIR . '/admin/ReduxCore/redux-config.php';
}

// Required Redux framework functions
require_once ROOKIE_THEME_DIR . '/admin/theme-options.php';

// Rookie Styles and Scripts 
require_once ROOKIE_THEME_DIR . '/admin/core/scripts.php';

// Rookie Sidebars, widgets and menus
require_once ROOKIE_THEME_DIR . '/admin/core/register.php';

// Custom functions & snippets
require_once ROOKIE_THEME_DIR . '/admin/core/clean.php';
require_once ROOKIE_THEME_DIR . '/admin/core/snippets.php';
require_once ROOKIE_THEME_DIR . '/admin/core/jetpack.php';

// Bootstrap Style Breadcrumbs
require_once ROOKIE_THEME_DIR . '/includes/breadcrumbs.php';

// Bootstrap nav walker
require_once ROOKIE_THEME_DIR . '/includes/bootstrap-walker.php';

// Bootstrap Pagination
require_once ROOKIE_THEME_DIR . '/includes/bootstrap-pagination.php';

// Custom template tags
require_once ROOKIE_THEME_DIR . '/includes/template-tags.php';

// Implement Custom Header features.
require_once ROOKIE_THEME_DIR . '/includes/custom-header.php';

// Social share
require_once ROOKIE_THEME_DIR . '/includes/social-share.php';