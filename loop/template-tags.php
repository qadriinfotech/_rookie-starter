<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package rookie template tags
 * @since rookie 1.0
 */


if ( ! function_exists( 'rookie_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function rookie_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';

	?>
	<nav <?php Schema_Markup::schema_metadata( array( 'context' => 'nav' ) ); ?> id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
		<ul class="pager">

			<?php if ( is_single() ) : // navigation links for single posts ?>

				<?php previous_post_link( '<li class="nav-previous previous">%link</li>', '<span class="meta-nav">' . _x( '<i class="fa fa-chevron-left"></i>', 'Previous post link', 'rookie' ) . '</span> %title' ); ?>
				<?php next_post_link( '<li class="nav-next next">%link</li>', '%title <span class="meta-nav">' . _x( '<i class="fa fa-chevron-right"></i>', 'Next post link', 'rookie' ) . '</span>' ); ?>

			<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

				<?php if ( get_next_posts_link() ) : ?>
					<li class="nav-previous previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'rookie' ) ); ?></li>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
					<li class="nav-next next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'rookie' ) ); ?></li>
				<?php endif; ?>

			<?php endif; ?>

		</ul>
	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // rookie_content_nav


if ( ! function_exists( 'rookie_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @return void
 */
function rookie_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" <?php Schema_Markup::schema_metadata( array( 'context' => 'nav' ) ); ?>>
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'rookie' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<i class="fa fa-chevron-left"></i> %title', 'Previous post link', 'rookie' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title <i class="fa fa-chevron-right"></i>', 'Next post link',     'rookie' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;


if ( ! function_exists( 'rookie_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function rookie_posted_on() {
	$time_string = '<time class="entry-date published" '.Schema_Markup::schema_metadata( array( 'context' => 'entry_time', 'echo' => false )).'>%2$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	// $time_string = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
	// 	esc_url( get_permalink() ),
	// 	esc_attr( get_the_time() ),
	// 	$time_string
	// );

	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ){
		$time_string_update = '<time class="updated" datetime="%1$s">%2$s</time>';
		$time_string_update = sprintf( $time_string_update,
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$time_string_update = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			$time_string_update
		);
		$time_string .= __(', <span class="updated-on"><i class="fa fa-refresh"></i> updated on</span>', 'rookie') . $time_string_update;
	}

	printf( __( '<span class="posted-on"><i class="fa fa-calendar"></i> Published on %1$s</span><span class="byline"> by <i class="fa fa-user"></i> %2$s</span>', 'rookie' ),
		$time_string,
		sprintf( '<span class="author vcard"'.Schema_Markup::schema_metadata( array( 'context' => 'author_name', 'echo' => false )).'><a class="url fn n" rel="author" href="%1$s" title="%2$s">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'rookie' ), get_the_author() ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;


if ( ! function_exists( 'rookie_link_format_helper' ) ) :
/**
 * Returns the first post link and/or post content without the link.
 * Used for the "Link" post format.
 *
 * @since 1.0.1
 * @param string $output "link" or "post_content"
 * @return string Link or Post Content without link.
 */
function rookie_link_format_helper( $output = false ) {

	if ( ! $output )
		_doing_it_wrong( __FUNCTION__, __( 'You must specify the output you want - either "link" or "post_content".', 'rookie' ), '1.0.1' );

	$post_content = get_the_content();
	$link_start = stristr( $post_content, "http" );
	$link_end = stristr( $link_start, "\n" );

	if ( ! strlen( $link_end ) == 0 ) {
		$link_url = substr( $link_start, 0, -( strlen( $link_end ) + 1 ) );
	} else {
		$link_url = $link_start;
	}

	$post_content = substr( $post_content, strlen( $link_url ) );

	// Return the first link in the post content
	if ( 'link' == $output )
		return $link_url;

	// Return the post content without the first link
	if ( 'post_content' == $output )
		return $post_content;
}
endif;


if ( ! function_exists( 'rookie_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since rookie 1.0
 *
 * @return void
 */
function rookie_the_attached_image() {
	$post = get_post();
	/**
	 * Filter the default attachment size.
	 *
	 * @since rookie 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'rookie_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;


/**
 * Returns true if a blog has more than 1 category.
 */
function rookie_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so rookie_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so rookie_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in rookie_categorized_blog.
 */
function rookie_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'rookie_category_transient_flusher' );
add_action( 'save_post',     'rookie_category_transient_flusher' );
