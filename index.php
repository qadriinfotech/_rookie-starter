<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package rookie index
 * @since rookie 1.0
 */

get_header();

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
} ?>

<div class="row-fluid">      
	<div id="primary" class="content-area <?php echo $col; ?>">
		<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			/* Include the Post-Format-specific template for the content.
			* If you want to overload this in a child theme then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			get_template_part( 'loop/content', get_post_format() );
		?>
		<?php endwhile; ?>
		<?php echo rookie_pagination(); ?>
		<?php else : ?>
		<?php get_template_part( 'loob/content', 'none' ); ?>
		<?php endif; ?>
    	</div><!-- #primary -->
    <?php get_sidebar(); ?>
</div> <!-- row-fluid -->
<?php get_footer(); ?>