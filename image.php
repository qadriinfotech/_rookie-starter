<?php
/**
 * The template for displaying image attachments.
 *
 * @package rookie image
 * @since rookie 1.0
 */

get_header(); ?>
<div class="row-fluid">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="post-inner-content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-meta">
					<?php rookie_posted_on(); ?>
					<?php 
					$metadata = wp_get_attachment_metadata();
					$size_link = sprintf( '<span class="attachment-meta full-size-link"><a href="%1$s" title="%2$s">%3$s (%4$s &times; %5$s)</a></span>',
						esc_url( wp_get_attachment_url() ),
						esc_attr__( 'Link to full-size image', 'rookie' ),
						__( 'Full resolution', 'rookie' ),
						$metadata['width'],
						$metadata['height']
						); ?>
					<?php echo $size_link; ?>
				</div><!-- .entry-meta -->
				<nav role="navigation" id="image-navigation" class="image-navigation">
					<ul class="pager">
						<li><?php previous_image_link( false, __( '<i class="fa fa-chevron-left"></i> Previous', 'rookie' ) ); ?></li>
						<li><?php next_image_link( false, __( 'Next <i class="fa fa-chevron-right"></i>', 'rookie' ) ); ?></li>
					</ul>
				</nav> <!-- #image-navigation -->
			</header><!-- .entry-header -->
				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
							<?php rookie_the_attached_image(); ?>
						</div><!-- .attachment -->
						<?php if ( ! empty( $post->post_excerpt ) ) : ?>
							<div class="entry-caption">
								<?php the_excerpt(); ?>
							</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->
					<?php the_content(); ?>
					<?php wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'rookie' ),
						'after'  => '</div>',
						) );
						?>
				</div><!-- .entry-content -->
			<footer class="entry-meta">
					<?php
					if ( comments_open() && pings_open() ) : // Comments and trackbacks open
					printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'rookie' ), get_trackback_url() );

					elseif ( ! comments_open() && pings_open() ) : // Only trackbacks open
					printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'rookie' ), get_trackback_url() );

					elseif ( comments_open() && ! pings_open() ) : // Only comments open
					_e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'rookie' );

					elseif ( ! comments_open() && ! pings_open() ) : // Comments and trackbacks closed
					_e( 'Both comments and trackbacks are currently closed.', 'rookie' );

					endif;
					edit_post_link( __( 'Edit', 'rookie' ), ' <span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- article -->
	</div>
	<?php comments_template(); ?>
<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>