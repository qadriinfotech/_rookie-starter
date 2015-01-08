<?php
/**
 * @package Rookie Content single
 * @since 1.0
 *
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	$full_img = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full');
	$img_src= $full_img[0];
	?>
	<a href="<?php echo $img_src; ?>" data-gal="prettyPhoto">
		<?php the_post_thumbnail( 'rookie-featured', array( 'class' => 'single-featured' )); ?>
	</a>
	<div class="post-inner-content">
		<header class="entry-header">
			<h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="entry-title"><?php the_title(); ?></h2>
			<div class="entry-meta">
				<?php rookie_posted_on(); ?>
				<?php edit_post_link( __( 'Edit', 'rookie' ), '<span class="edit-link pull-right">', ' <i class="fa fa-pencil"></i></span>' ); ?>
			</div>
		</header>
		<div class="entry-content">
			<div class="the-content"<?php Schema_Markup::schema_metadata( array( 'context' => 'entry_content' ) ); ?>>
			<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before'            => '<div class="page-links">'.__( 'Pages:', 'rookie' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
		       		) );
		    	?>
	    	</div>
	    	<?php if (ro_get_option ('post_socials')) { ?>
	    	<?php social_media(); ?> 
	    	<?php } ?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'rookie' ) );
				if ( $categories_list && rookie_categorized_blog() ) :
					?>
				<span class="cat-links">
					<i class="fa fa-folder-open" title="<?php __( 'Categories', 'rookie' ); ?>"></i>
					<?php printf( __( 'Categories %1$s', 'rookie' ), $categories_list ); ?>
				</span>
			<?php endif; // End if categories ?>

			<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'rookie' ) );
			if ( $tags_list ) :
				?>
			<span class="tags-links">
				<i class="fa fa-tags" title="<?php __( 'Tags', 'rookie' ); ?>"></i>
				<?php printf( __( 'Tagged in %1$s', 'rookie' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link">
					<i class="fa fa-comment"></i>
					<?php comments_popup_link( __( 'Leave a comment &nbsp', 'rookie' ), __( '1 Comment', 'rookie' ), __( '% Comments ', 'rookie' ) ); ?>
				</span>
			<?php endif; ?>
			<span class="post-views">
				<i class="fa fa-eye"></i>
				<?php echo getPostViews(get_the_ID()); ?>
			</span>
		</footer>
	</div> <!-- post-inner-content -->
</article>
<?php if(ro_get_option ('blog_author_bio')) { ?>
	<?php get_template_part( 'loop/content', 'author' ); ?>
<?php } ?>





