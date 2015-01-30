<?php
/**
 * @package rookie search
 * @author Abukwaik
 * @since rookie 1.0
 *
 */
?>

<article <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 <?php Schema_Markup::schema_metadata( array( 'context' => 'entry_title' ) ); ?> class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta">
            <?php rookie_posted_on(); ?>
        </div>
    </header><!-- .entry-header -->
	<div class="entry-content clearfix">
		<?php the_excerpt(); ?>
    </div>
    <footer class="entry-footer">
        <?php rookie_entry_footer(); ?>
    </footer>
</article>

