<?php
/**
 *
 * Include snippets to modify/add some features to this theme
 *
 * @package rookie option functions
 * @since rookie 1.0
 */


/* Add classes to body tag */
function ro_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';

	if( ($content_class = ro_get_option('main_content_style')) != 'default'){
		$classes[] = $content_class;
	}

	if( ($sidebar_class = ro_get_option('sidebar_style')) != 'default'){
		$classes[] = $sidebar_class;
	}

	return $classes;
}
add_filter('body_class','ro_body_class');

/* Delete category custom meta from database on category deletion */
function ro_delete_category_meta($term_id) {
	delete_option('_ro_category_'.$term_id);
}
add_action('delete_category', 'ro_delete_category_meta');

/* Set tag sizes in tag cloud widget */
function set_tag_cloud_sizes($args) {
	$args['smallest'] = 10;
	$args['largest'] = 20;
	return $args;
}
add_filter('widget_tag_cloud_args','set_tag_cloud_sizes');


/**
* Generate dynamic CSS for theme option and main style.css
* page speed score raised to 99 after this :)
* for compress_css_code see helpers.php
*
* @since rookie 1.0
*/

/* generate css */
function generate_dynamic_css(){
	ob_start();
	get_template_part('admin/dynamic-css');
	get_template_part('includes/css/style-css');
	$output = ob_get_contents();
	ob_end_clean();
	return compress_css_code($output);
}
/* add to head including favicons and custom css */
function rookie_wp_head(){
	// Add favicons
	if($favicon = ro_get_option_media('favicon')) {
		echo '<link rel="shortcut icon" href="'.$favicon.'" type="image/x-icon" />';
	}
	// Theme option and main style CSS output
	$dynamic_css = trim(preg_replace( '/\s+/', ' ', generate_dynamic_css()));
	if(!empty($dynamic_css)) {
		echo '<style type="text/css">'.$dynamic_css.'</style>';
	}
	// Custom CSS
	$additional_css = trim(preg_replace( '/\s+/', ' ', ro_get_option('additional_css')));
	if(!empty($additional_css)) {
		echo '<style type="text/css">'.$additional_css.'</style>';
	}
}
add_action('wp_head', 'rookie_wp_head', 99);

/* Generate dynamic stylesheets for Bootstrap */
function dynamic_bootstrap(){
	ob_start();
	get_template_part('includes/css/bootstrap-min');
	$output = ob_get_contents();
	ob_end_clean();
	return compress_css_code($output);
}
/* add to head */
function dynamic_bootstrap_output(){
	$load_bootstrap = trim(preg_replace( '/\s+/', ' ', dynamic_bootstrap()));
	if(!empty($load_bootstrap)) {
		echo '<style type="text/css">'.$load_bootstrap.'</style>';
	}
}
add_action('wp_head', 'dynamic_bootstrap_output', 98);


/* For advanced use - add some JS into theme footer if specified in theme options */
function rookie_wp_footer(){
	//Additional JS
	$additional_js = trim(preg_replace( '/\s+/', ' ', ro_get_option('additional_js')));
	if(!empty($additional_js)) {
		echo '<script type="text/javascript">
			/* <![CDATA[ */
				'.$additional_js.'
			/* ]]> */
			</script>';
	}

	//Google Analytics (tracking)
	if($ga = ro_get_option('ga')) {
		echo $ga;
	}
}
add_action('wp_footer', 'rookie_wp_footer', 99);

/**
	Custom login
*/
/* Add custom Login logo */
function rookie_login_logo() {
  $custom_login_logo = ro_get_option_media('custom_login_logo');
  $custom_login_bg = ro_get_option_media('custom_login_bg');
  if(!empty($custom_login_logo)) {
    echo '
    <style type="text/css">
      body.login #login h1 a { background: url('.esc_url($custom_login_logo).') no-repeat top transparent;
        height:10vh; width:100%; }
        body.login { background-image: url('.esc_url($custom_login_bg).');
        background-repeat: no-repeat; background-size: cover; }
        .login form { box-shadow: 0 1px 5px rgba(0, 0, 0, 0.20); }
    </style>';
  }
}
add_action('login_head', 'rookie_login_logo');

/* Add custom link to new Login logo */
function custom_login_url($url) {
  return home_url();
}
add_filter( 'login_headerurl', 'custom_login_url' );

/* Maintenance mode.*/
function default_maintenance_mode(){  
  if( ro_get_option ('maintenance_mode') ){  
    wp_die('Maintenance, please come back soon.', 'Maintenance - please come back soon.', array('response' => '503'));  
  }  
}
add_action('get_header', 'default_maintenance_mode');  