<?php
/**
 * @package Rookie Aside post format
 * @author Abukwaik
 * @since Rookie 1.0
 *
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php rookie_post_thumbnail(); ?>

	<header class="entry-header">
		<h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-meta">
			<?php rookie_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content" <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_content' ) ); ?>>
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

    	<?php if (ro_get_option ('post_socials')) { ?>
    	<?php post_socials(); ?> 
    	<?php } ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php rookie_entry_footer(); ?>
	</footer> <!-- entry-footer -->
</article><!-- #post-## -->
