<?php
/**
 *
 * @package The template used for displaying page content in page.php
 * @since 1.0
 * 
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

	<div class="entry-content" <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_content' ) ); ?>>
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

	<?php edit_post_link( __( 'Edit', 'rookie' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
