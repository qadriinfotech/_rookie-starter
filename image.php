<?php
/**
 * The template for displaying image attachments.
 *
 * @package rookie image
 * @since rookie 1.0
 */

get_header(); ?>
<div class="row-fluid">
	<div class="col-ms-12">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-meta">
						<?php rookie_posted_on(); ?>
						<?php 
							$metadata = wp_get_attachment_metadata();
							$size_link = sprintf ( 
								'<span class="attachment-meta full-size-link"><a href="%1$s" title="%2$s">%3$s (%4$s &times; %5$s)</a></span>',
								esc_url( wp_get_attachment_url() ),
								esc_attr__( 'Link to full-size image', 'rookie' ),
								__( 'Full resolution', 'rookie' ),
								$metadata['width'],
								$metadata['height']
								); 
						?>
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
							<?php rookie_the_attached_image(); ?>
							<?php if ( ! empty( $post->post_excerpt ) ) : ?>
								<div class="entry-caption">
									<?php the_excerpt(); ?>
								</div><!-- .entry-caption -->
							<?php endif; ?>
						</div><!-- .entry-attachment -->
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'rookie' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'rookie' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
								) );
						?>
				</div><!-- .entry-content -->
			</article><!-- article -->
		<?php comments_template(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>