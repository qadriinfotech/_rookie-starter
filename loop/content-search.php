<?php
/**
 * @package rookie search
 * @since rookie 1.0
 *
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() && ! has_post_format( 'gallery' ) ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'rookie' ), the_title_attribute( 'echo=0' ) ); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'alignleft', 'title' => "" ) ); ?></a>
		<?php }

		// Show full content on certain post formats if it doesn't have an excerpt.
		if ( has_post_format( array( 'image', 'gallery', 'video', 'audio' ) )  && ! has_excerpt() ) {
			the_content( __( 'Continue Reading &raquo;', 'rookie' ) );

		// Show only excerpt on the rest.
		} else {
			the_excerpt(); ?>
		<?php }
            wp_link_pages( array(
                wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'rookie' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'rookie' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        </div>
        <footer class="entry-footer">
        	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

        		<?php $categories_list = get_the_category_list( __( ', ', 'rookie' ));
        		if ( $categories_list && rookie_categorized_blog() ) { ?>
        		<span class="cat-links">
        			<i class="fa fa-folder-open" title="<?php __( 'Categories', 'rookie' ); ?>"></i>
        			<?php printf( __( 'Categories %1$s ', 'rookie' ), $categories_list ); ?>
        		</span>
        		<?php } ?>

        		<?php $tags_list = get_the_tag_list( '', __( ', ', 'rookie' ));
        		if ( $tags_list ) { ?>
        		<span class="tags-links">
        			<i class="fa fa-tags" title="<?php __( 'Tags', 'rookie' ); ?>"></i>
        			<?php printf( __( 'Tagged in %1$s ', 'rookie' ), $tags_list ); ?>
        		</span>
        		<?php } ?>
        		<span>
        			<i class="fa fa-eye"></i>
        			<?php echo getPostViews(get_the_ID()); ?>
        		</span>
        	<?php endif; // End if 'post' == get_post_type() ?>

        	<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
        	<span class="comments-link"><i class="fa fa-comment"></i>
        		<?php comments_popup_link( __( 'Leave a comment ', 'rookie' ), __( '1 Comment', 'rookie' ), __( '% Comments ', 'rookie' ) ); ?>
        	</span>
        	<?php } ?>
        </footer>
</article>
