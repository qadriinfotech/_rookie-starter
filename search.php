<?php
/**
 * The template for displaying search results pages.
 *
 * @package rookie search
 * @since rookie 1.0
 */


get_header(); 

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
} ?>
	<div class="row-fluid">        
		<div id="primary" class="content-area <?php echo $col; ?>" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="entry-header">
					<h2 class="page-title"><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count;  echo $count . ' '; wp_reset_query(); ?><?php printf( __( ' Search Results found for <span class="text-muted"> %s</span>', 'rookie' ), get_search_query() ); ?></h2>
				</header>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop/content', 'search' ); ?>
				<?php endwhile; ?>
				<?php else : ?>
				<?php get_template_part( 'loop/content', 'none' ); ?>
			<?php endif; ?>
		</div> <!--#primary -->
	<?php get_sidebar(); ?>
	</div> <!-- .row-fluid -->
<?php get_footer();