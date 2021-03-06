<?php
/**
 * @package Rookie Startar
 * @author Abukwaik http://www.croti.com
 * @since rookie 1.0
 * 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/BlogPosting" itemscope="itemscope">

	<?php rookie_post_thumbnail(); ?>

	<header class="entry-header">
		<h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content clearfix">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'rookie-startar' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'rookie-startar' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'current_before' => '',
				'current_after'  => '',
				'pagelink'    	 => '%',
			) );
		?>
	</div>

	<?php edit_post_link( __( 'Edit', 'rookie-startar' ), '<footer class="entry-footer"><span class="edit-link">', ' <i class="fa fa-pencil"></i></span></footer>' ); ?>

</article><!-- #post-## -->
