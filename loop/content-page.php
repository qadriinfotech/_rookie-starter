<?php
/**
 *
 * @package The template used for displaying page content in page.php
 * @since 1.0
 * 
 */
?>

<?php the_post_thumbnail( 'rookie-featured', array( 'class' => 'single-featured' )); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 	if ( is_single() || is_page() || is_attachment() ) :
		the_title( '<h2 class="page-title">', '</h2>' );
		else :
			the_title( '<h2 class="page-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		<?php if( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php rookie_posted_on(); ?>
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( 
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rookie' ),
				'after'  => '</div>',
				) 
			);
		?>
	</div>
</article>