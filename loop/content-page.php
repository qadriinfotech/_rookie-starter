<?php
/**
 *
 * @package The template used for displaying page content in page.php
 * @since 1.0
 * 
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php rookie_post_thumbnail(); ?>

	<header class="entry-header">
		<h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="page-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content clearfix"<?php Schema_Markup::schema_metadata( array( 'context' => 'entry_content' ) ); ?>>
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
				'current_before' => '',
				'current_after' => '',
				'pagelink'    => '%',
			) );
		?>
	</div>

	<?php edit_post_link( __( 'Edit', 'rookie' ), '<footer class="entry-footer"><span class="edit-link">', ' <i class="fa fa-pencil"></i></span></footer>' ); ?>

</article><!-- #post-## -->
