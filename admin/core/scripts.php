<?php 

/**
* @package rookie enqueued scripts
* @since rookie 1.0
*
*/

/**
    Load needed scripts
**/

function rookie_scripts() {

	wp_enqueue_script('modernizr',      	JS_URI . '/modernizr.min.js', 		array(), '', true);
	wp_enqueue_script('bootstrapjs',    	JS_URI . '/bootstrap.min.js', 		array('jquery'), '', true);
	wp_enqueue_script('plugins',        	JS_URI . '/plugins.min.js', 		array(), '', true);
	wp_enqueue_script('theme-script',   	JS_URI . '/scripts.min.js', 		array(), '', true);

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script('keyboard-image-navigation',   JS_URI . '/keyboard-image-navigation.js');
	}

	if ( (!is_admin()) && is_singular() && comments_open() && !is_front_page() && get_option('thread_comments')) { 
		wp_enqueue_script( 'comment-reply' ); 
	}

	/**
	* Style.css and bootstrap are loaded dynamicly. See admin/options.php
	* Animate.css and fontawesome are combined into all.css and deferred loading. See header.php
	* This technique made a huge improvements to page speed score 
	* @since rookie 1.0
	*/

  	//wp_enqueue_style('style',       		THEME_URI . '/style.css');
	//wp_enqueue_style('bootstrap',       	CSS_URI   . '/bootstrap.min.css');
	//wp_enqueue_style('animate',       	CSS_URI   . '/animate.min.css');
	//wp_enqueue_style('fontawesome',     	CSS_URI   . '/font-awesome.min.css');

	// We dont need these in Frontpage
	if (!is_front_page()) { 
		wp_enqueue_script('prettyphoto',     	JS_URI 	. '/jquery.prettyPhoto.js',  array('jquery'), '', true );
		wp_enqueue_style ('prettyphoto-css',   	CSS_URI . '/prettyPhoto.css');
	}

	wp_localize_script('theme-script', 'rookie', array(
	    'ajaxurl'	=> admin_url( 'admin-ajax.php' ),
	    'nonce' 	=> wp_create_nonce( 'rookie-ajax' )
	));
}
add_action('wp_enqueue_scripts', 'rookie_scripts');


// add HTML5Shim to header
function IE_support () {
	echo '<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->';
}

add_action('wp_head', 'IE_support');

// Load admin style
function load_admin_scripts(){
	global $pagenow;
	wp_register_style('rookie_admin_css', CSS_URI . '/admin.css', false, 'screen');
	wp_enqueue_style('rookie_admin_css');
}

add_action('admin_enqueue_scripts', 'load_admin_scripts');

