<?php
/**
 * Custom sinppets functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package rookie sinppets
 * @since 1.0
 * 
 */

// function to display number of posts.
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}

// function to count views.
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

// Add it to a column in WP-Admin
function posts_column_views($defaults){
  $defaults['post_views'] = __('Views', 'rookie');
  return $defaults;
}

function posts_custom_column_views($column_name, $id){
  if($column_name === 'post_views'){
    echo getPostViews(get_the_ID());
  }
} 
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);

// Editor CSS
  function custom_editor_style() {
    add_editor_style( CSS_URI . '/editor-style.css' );
  }
add_action( 'init', 'custom_editor_style' );


// Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
function rookie_enhanced_image_navigation( $url, $id ) {
  if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
   return $url;

 $image = get_post( $id );
 if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
   $url .= '#main';

 return $url;
}
add_filter( 'attachment_link', 'rookie_enhanced_image_navigation', 10, 2 );

// password protected post form 
function custom_password_form() {
  global $post;
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
  $o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post"><div class="row"><div class="col-lg-10">' . __( "<p>This post is password protected. To view it please enter your password below:</p>" ,'rookie') . '<label for="' . $label . '">' . __( "Password:" ,'rookie') . ' </label><div class="input-group"><input class="form-control" value="' . get_search_query() . '" name="post_password" id="' . $label . '" type="password"><span class="input-group-btn"><button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="' . esc_attr__( "Submit",'rookie' ) . '">' . __( "Submit" ,'rookie') . '</button></span></div></div></div></form>';
  return $o;
}
add_filter( 'the_password_form', 'custom_password_form' );

// Add Bootstrap classes for table
function add_custom_table_class( $content ) {
  return str_replace( '<table>', '<table class="table table-striped">', $content );
}
add_filter( 'the_content', 'add_custom_table_class' );

/**
 * Add Bootstrap thumbnail styling to images with captions
 * Use <figure> and <figcaption>
 * @link http://justintadlock.com/archives/2011/07/01/captions-in-wordpress
 */
   
function rookie_caption($output, $attr, $content) {
  if (is_feed()) {
    return $output;
  }

  $defaults = array(
    'id'      => '',
    'align'   => 'alignnone',
    'width'   => '',
    'caption' => ''
    );

  $attr = shortcode_atts($defaults, $attr);

  // If the width is less than 1 or there is no caption, return the content wrapped between the [caption] tags
  if ($attr['width'] < 1 || empty($attr['caption'])) {
    return $content;
  }

  // Set up the attributes for the caption <figure>
  $attributes  = (!empty($attr['id']) ? ' id="' . esc_attr($attr['id']) . '"' : '' );
  $attributes .= ' class="thumbnail wp-caption ' . esc_attr($attr['align']) . '"';
  $attributes .= ' style="width: ' . (esc_attr($attr['width']) + 10) . 'px"';

  $output  = '<figure' . $attributes .'>';
  $output .= do_shortcode($content);
  $output .= '<figcaption class="caption wp-caption-text">' . $attr['caption'] . '</figcaption>';
  $output .= '</figure>';

  return $output;
}
add_filter('img_caption_shortcode', 'rookie_caption', 10, 3);


// Add featured image to RSS feed
function featured_image_in_feed( $content ) {
  global $post;
  if( is_feed() ) {
    if ( has_post_thumbnail( $post->ID ) ){
      $output = get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'float:right; margin:0 0 10px 10px;' ) );
      $content = $output . $content;
    }
  }
  return $content;
}
add_filter( 'the_content', 'featured_image_in_feed' );


// if Disqus used:
// Stop Disqus from outputting JS on anything but single posts or pages
function custom_disqus_comments() {
  if ( is_singular( array( 'post', 'page' ) ) && comments_open() )
    return;
  remove_action( 'loop_end', 'dsq_loop_end' );
  remove_action( 'wp_footer', 'dsq_output_footer_comment_js' );
}
add_action( 'wp_head', 'custom_disqus_comments' );


// Highlight keywords in search results within the_excerpt and the_title
function search_excerpt_highlight() {
  $excerpt = get_the_excerpt();
  $keys = implode('|', explode(' ', get_search_query()));
  $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);
  echo '<p>' . $excerpt . '</p>';
}
add_filter('the_excerpt', 'search_excerpt_highlight');


// Include password protected posts in search results
function include_password_posts_in_search( $search ) {
  global $wpdb;
  if( !is_user_logged_in() ) {    
    $pattern = " AND ({$wpdb->prefix}posts.post_password = '')";
    $search = str_replace( $pattern, '', $search );
  }
  return $search;
}
add_filter( 'posts_search', 'include_password_posts_in_search' );


// set minimum comment length
function minimal_comment_length( $commentdata ) {
  $minimalCommentLength = 10; // minimum is 10 words
  if ( strlen( trim( $commentdata['comment_content'] ) ) < $minimalCommentLength ) {
    wp_die( 'All comments must be at least ' . $minimalCommentLength . ' characters long.' );
  }
  return $commentdata;
}
add_filter( 'preprocess_comment', 'minimal_comment_length' );


// Automatically spam comments with a long url
function url_spam_check( $approved , $commentdata ) {
  return ( strlen( $commentdata['comment_author_url'] ) > 40 ) ? 'spam' : $approved;
}
add_filter( 'pre_comment_approved', 'url_spam_check', 99, 2 );


// Add mp4, webm and ogv mimes for uploads
if(!function_exists('rookie_add_upload_mimes')) {
  function rookie_add_upload_mimes($mimes){ 
    return array_merge($mimes, array ('mp4' => 'video/mp4', 'ogv' => 'video/ogg', 'webm' => 'video/webm')); 
  }
}
add_filter('upload_mimes','rookie_add_upload_mimes');


// Add a span into the WP categories widget count
if ( ! function_exists( 'cat_count_span' ) ) {
  function cat_count_span($links) {
    $links = str_replace('</a> (', '</a> <span class="cat-count-span">(', $links);
    $links = str_replace(')', ')</span>', $links);
    return $links;
  } 
}
add_filter('wp_list_categories', 'cat_count_span');


// This function modifies the main WordPress query to remove pages from search results.
function exclude_search_pages( $query ) {
  if ( $query->is_search ) {
    $query->set( 'post_type', 'post' );
  }
  return $query;
}
add_filter( 'pre_get_posts', 'exclude_search_pages' );


// Defer parsing of JavaScript 
if (!(is_admin()) && ro_get_option ('cloudflare_compatibility')==false) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, "jquery.js" ) && !is_front_page()) return $url;
    else
    return "$url' defer='defer";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

// Add more time for slow connection. it doesn't work in some hosts
function theme_request_timeout(){
  return 600; // Change this to your desired timeout value in ms
}
add_filter( 'http_request_timeout', 'theme_request_timeout', 100 );

