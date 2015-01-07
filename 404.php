<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package rookie 404
 * @since rookie 1.0
 *
 */
get_header(); ?>
<div class="row-fluid">  
	<div id="primary" class="content-area">
		<section class="error-404 not-found">
			<div class="page-content">
				<div class="container clearfix">
					<div class="row">
						<div class="error-404-box">
							<div class="error-message"><?php echo __( 'Error 404', 'rookie' ); ?></div>
							<p class="lead"><?php echo __( 'It looks like nothing was found at this location.', 'rookie' ); ?></p>
							<input type="button" value="Go Back From Whence You Came!" onclick="history.back(-1)" />
							<br><br>
							<p class=""><?php echo __( 'Or maybe try one of the links below or a search?', 'rookie' ); ?></p>
						</div>
					</div>
				</div>
				<div class="container clearfix">
					<div class="row">
						<?php get_search_form(); ?>
					</div>
					<br>
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>