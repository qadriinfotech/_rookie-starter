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
		<h2 class="entry-title" itemprop="headline"><?php the_title(); ?></h2>
		<div class="entry-meta">
			<?php rookie_posted_on(); ?>
		</div>
	</header> <!-- entry-header -->

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
    	<?php if (ro_get_option ('post_socials')) { ?>
    	<?php rookie_startar_post_socials(); ?> 
    	<?php } ?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php rookie_entry_footer(); ?>
	</footer> <!-- entry-footer -->
</article>

<?php if(ro_get_option ('blog_author_bio')) { ?>
	<?php get_template_part( 'loop/content', 'author' ); ?>
<?php } ?>