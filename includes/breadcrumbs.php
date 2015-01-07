<?php 

/**
 * Bootstrap Style Breadcrumbs
 * bbPress compatibility patch by Dan Smith
 *
 * @package rookie breadcrumb
 * @since rookie 1.0
 */

/**
    Bootstrap Style Breadcrumbs
**/

function rookie_breadcrumb_lists() {

  $chevron = '<span> / </span>';
    $name = __('Home','rookie'); //text for the 'Home' link
    $currentBefore = '<span class="current">';
    $currentAfter = '</span>';

    echo '<div class="breadcrumb-list">';
    global $post;
    $home = home_url();
    echo '<a href="' . $home . '">' . $name . '</a> ';
    if (!is_home())
      echo $chevron . ' ';
    if (is_category()) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0)
        echo(get_category_parents($parentCat, TRUE, ' ' . $chevron . ' '));
      echo $currentBefore . __('Archive by category &#39;','rookie'); 
      single_cat_title();
      echo '&#39;' . $currentAfter;
    } elseif (is_day()) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $chevron . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $chevron . ' ';
      echo $currentBefore . get_the_time('d') . $currentAfter;
    } elseif (is_month()) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $chevron . ' ';
      echo $currentBefore . get_the_time('F') . $currentAfter;
    } elseif (is_year()) {
      echo $currentBefore . get_the_time('Y') . $currentAfter;
    } elseif (is_single()) {
      $cat = get_the_category();
      $cat = $cat[0];
      echo $currentBefore;
      the_title();
      echo $currentAfter;
    } elseif (is_page() && !$post->post_parent) {
      echo $currentBefore;
      the_title();
      echo $currentAfter;
    } elseif (is_page() && $post->post_parent) {
      $parent_id = $post->post_parent;
      $breadcrumb_lists = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumb_lists[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id = $page->post_parent;
      }
      $breadcrumb_lists = array_reverse($breadcrumb_lists);
      foreach ($breadcrumb_lists as $crumb)
        echo $crumb . ' ' . $chevron . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
    } elseif (is_search()) {
      echo $currentBefore . __('Search results for &#39;','rookie') . get_search_query() . __('&#39;','rookie') . $currentAfter;
    } elseif (is_tag()) {
      echo $currentBefore . __('Posts tagged &#39;','rookie');
      single_tag_title();
      echo '&#39;' . $currentAfter;
    } elseif (is_author()) {
      global $author;
      $userdata = get_userdata($author);
      echo $currentBefore . __('Articles posted by ','rookie') . $userdata->display_name . $currentAfter;
    } elseif (is_404()) {
      echo $currentBefore . __('Error 404','rookie') . $currentAfter;
    }
    if (get_query_var('paged')) {
      if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
        echo ' (';
          echo __('/ &nbsp;Page','rookie') . ' ' . get_query_var('paged');
          if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            echo ')';
    }
    echo '</div>';
}
