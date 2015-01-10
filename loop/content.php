<?php
/**
 * @package Rookie Content
 * @since 1.0
 * 
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-item-wrap">
		<a <?php Schema_Markup::schema_metadata( array( 'context' => 'url' ) ); ?> href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail( 'rookie-featured', array( 'class' => 'single-featured', 'itemtype' => 'http://schema.org/ImageObject', 'itemscope' => 'itemscope' )); ?>
		</a>
		<div class="post-inner-content">
			<?php if ( 'post' == get_post_type() ) : ?>
				<header class="entry-header">
					<h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-meta">
							<span class="sticky-star"><i class="fa fa-star" style="color:"></i><?php echo __( 'sticky post', 'rookie' ); ?></span>
							<?php rookie_posted_on(); ?>
							<?php edit_post_link( __( 'Edit', 'rookie' ), '<span class="edit-link pull-right">', ' <i class="fa fa-pencil"></i></span>' ); ?>
						</div>
				</header><!-- .entry-header -->

				<?php if ( is_search() ) { ?>
				    <div class="entry-summary">
				        <?php the_excerpt(); ?>
				    </div>
				<?php } else { ?>
				    <div class="entry-content"<?php Schema_Markup::schema_metadata( array( 'context' => 'entry_content' ) ); ?>>
				        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rookie' ) ); ?>
				    </div>
				<?php } // is_search?>

			    <footer class="entry-footer">
			    	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			    		<?php $categories_list = get_the_category_list( __( ', ', 'rookie' ));
			    		if ( $categories_list && rookie_categorized_blog()) { ?>
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
			    	<?php endif; // End footer get_post_type() ?>

			    	<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
				    	<span class="comments-link"><i class="fa fa-comment"></i>
				    		<?php comments_popup_link( __( 'Leave a comment ', 'rookie' ), __( '1 Comment', 'rookie' ), __( '% Comments ', 'rookie' ) ); ?>
				    	</span>
			    	<?php } ?>
			    </footer> <!-- entry-footer -->
			<?php endif; // get_post_type() ?>
		</div> <!-- post-inner-content -->
	</div> <!-- blog-item-wrap -->
</article>
