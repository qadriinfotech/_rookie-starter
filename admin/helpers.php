<?php
/**
 *
 * Helpers and utils functions related to redux theme option
 *
 * @package rookie
 * @since rookie 1.0
 */

// remove tracking class from redux framework
if ( class_exists( 'ReduxFramework' ) ) {
	return;
}
class Redux_Tracking {
	public $options = array();
	public $parent;
	private static $instance = null;
	public static function get_instance() {
		if ( null == self::$instance ) {self::$instance = new self;}
		return self::$instance;
	}
	function __construct() {}
	public function load( $parent ) {}
	function _enqueue_tracking() {}
	function _enqueue_newsletter() {}
	function tracking_request() {}
	function newsletter_request() {}
	function print_scripts( $selector, $options, $button1, $button2 = false, $button2_function = '', $button1_function = '' ) { ?>
	<?php
}

function tracking() { }
}

Redux_Tracking::get_instance();

/* 	Get theme option function */ 
function ro_get_option($option){
	global $ro_settings;
	if(isset($ro_settings[$option])){
		return $ro_settings[$option];
	} else {
		return false;
	}
}

/* 	Update theme option function */ 
function ro_update_option($key = false, $value = false){
	global $Redux_Options;
	if(!empty($key)){
		$Redux_Options->set($key, $value);
	} 
}

/* Convert hexdec color string to rgba */
function ro_hex2rgba($color, $opacity = false) {
	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
		return $default;

	//Sanitize $color if "#" is provided
	if ($color[0] == '#' ) {
		$color = substr( $color, 1 );
	}

  //Check if color has 6 or 3 characters and get values
	if (strlen($color) == 6) {
		$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	} elseif ( strlen( $color ) == 3 ) {
		$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	} else {
		return $default;
	}

  //Convert hexadec to rgb
	$rgb = array_map('hexdec', $hex);

  //Check if opacity is set(rgba or rgb)
	if($opacity){
		if(abs($opacity) > 1){ $opacity = 1.0; }
		$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
	} else {
		$output = 'rgb('.implode(",",$rgb).')';
	}

  //Return rgb(a) color string
	return $output;
}

/* Compress CSS Code */
function compress_css_code($code) {
	// Remove Comments
	$code = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $code);

	// Remove tabs, spaces, newlines, etc.
	$code = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $code);
	return $code;
}

/* Get image option url */
function ro_get_option_media($option){
	$media = ro_get_option($option);
	if(isset($media['url']) && !empty($media['url'])){
		return $media['url'];
	}
	return false;
}

