<?php
/**
 * The template for displaying archive pages.
 *
 * @package rookie archive
 * @author Abukwaik http://www.croti.com
 * @copyright Copyright (c) 2015, Rookie
 * @link http://www.croti.com
 * @since rookie 1.0
 */

get_header(); 

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
} ?>

<div class="row-fluid">        
	<div id="primary" class="content-area <?php echo $col; ?>" role="main">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'loop/content', get_post_format()); ?>
		<?php endwhile; ?>
		<?php echo rookie_pagination(); ?>
		<?php else : ?>
		<?php get_template_part( 'loop/content', 'none' ); ?>
		<?php endif; ?>
	</div> <!--/#content -->
	<?php get_sidebar(); ?>
</div> <!--/.row -->
<?php get_footer();

