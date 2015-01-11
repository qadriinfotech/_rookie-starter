<?php
/**
 * The template for displaying link post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div itemscope="itemscope" itemtype='http://schema.org/ImageObject'>
	  <a href="<?php the_permalink(); ?>" itemprop="contentUrl" title="<?php the_title_attribute(); ?>"></a>
	  <?php the_post_thumbnail( 'rookie-featured', array( 'class' => 'single-featured', 'itemprop' => 'thumbnailUrl' )); ?>
	</div>

	<header class="entry-header">
		<h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->
	<!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'rookie' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

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
	<!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'loop/content', 'author' );
		endif;
	?>

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
	<!-- .entry-footer -->

</article><!-- #post-## -->
