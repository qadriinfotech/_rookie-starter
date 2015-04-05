<?php 

/**
* @package rookie enqueued scripts
* @author Abukwaik http://www.croti.com
* @copyright Copyright (c) 2015, Rookie
* @link http://www.croti.com
* @since rookie 1.0
*
*/

/**
    Load needed scripts
**/

function rookie_scripts() {

	wp_enqueue_script('modernizr',      ROOKIE_JS_URI . '/modernizr.min.js', 	array(), '', true);
	wp_enqueue_script('bootstrapjs',    ROOKIE_JS_URI . '/bootstrap.min.js', 	array('jquery'), '', true);
	wp_enqueue_script('plugins',        ROOKIE_JS_URI . '/plugins.min.js', 		array(), '', true);
	wp_enqueue_script('theme-script',   ROOKIE_JS_URI . '/scripts.min.js', 		array(), '', true);

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script('keyboard-image-navigation',   ROOKIE_JS_URI . '/keyboard-image-navigation.js');
	}

	if ( (!is_admin()) && is_singular() && comments_open() && !is_front_page() && get_option('thread_comments')) { 
		wp_enqueue_script( 'comment-reply' ); 
	}

	// We dont need these in Frontpage
	if (!is_front_page()) { 
		wp_enqueue_script('prettyphoto',     	ROOKIE_JS_URI 	. '/jquery.prettyPhoto.js',  array('jquery'), '', true );
		wp_enqueue_style ('prettyphoto-css',   	ROOKIE_CSS_URI . '/prettyPhoto.css');
	}
	// Animate.css and font-awesome
	wp_enqueue_style('all-css',   		ROOKIE_CSS_URI 	 . '/all.min.css');
	// wp_enqueue_style('bootstrap', 		ROOKIE_CSS_URI   . '/bootstrap.min.css');
	// wp_enqueue_style('style',     		ROOKIE_CSS_URI   . '/style-css.css');
}

add_action('wp_enqueue_scripts', 'rookie_scripts');

/**
* Generate a dynamic CSS for main style and bootstrap css files
* This technique made a huge improvement to page speed score, simply it raised to 95-99 after this
* But some guys call this "cheating" so i made a fallback option if you don't like that.
* Also it will disable automatically when child theme is activate
* 
* For ro_compress_css_code see admin/theme-options.php 
*
* @since rookie 1.0
*/

if (ro_get_option ('dynamiclly_load_css') ) {

	// Compress Bootstrap and Style.css
	function rookie_load_dynamic_css(){
		ob_start();
		get_template_part('includes/css/bootstrap.min');
		get_template_part('includes/css/style-css');
		$output = ob_get_contents();
		ob_end_clean();
		return ro_compress_css_code($output);
	}
	// Add them to header
	function rookie_dynamic_css_output(){
		$dynamic_css_output = trim(preg_replace( '/\s+/', ' ', rookie_load_dynamic_css()));
		if(!empty($dynamic_css_output)) {
			echo '<style media="all" type="text/css">' . $dynamic_css_output . '</style>';
		}
	}
	add_action('wp_head', 'rookie_dynamic_css_output', 98);
}

else {

	function rookie_stylesheets() {
		wp_enqueue_style('bootstrap', ROOKIE_CSS_URI   . '/bootstrap.min.css');
		wp_enqueue_style('style',     ROOKIE_CSS_URI   . '/style-css.css');
	}
	add_action('wp_enqueue_scripts', 'rookie_stylesheets', 40);
}

// add HTML5 Shim to header
function rookie_IE_support () {
	echo '<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->';
}

add_action('wp_head', 'rookie_IE_support');

// Load admin area custom style
function rookie_load_admin_scripts(){
	global $pagenow;
	wp_register_style('rookie_admin_css', ROOKIE_CSS_URI . '/admin.css', false, 'screen');
	wp_enqueue_style('rookie_admin_css');
}

add_action('admin_enqueue_scripts', 'rookie_load_admin_scripts');