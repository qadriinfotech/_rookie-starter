<?php
/**
 * The sidebar containing the main widget area
 *
 * @package rookie
 * @author Abukwaik http://www.croti.com
 * @copyright Copyright (c) 2015, Rookie
 * @link http://www.croti.com
 * @since rookie 1.0
 *
 */
?>
<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<div id="sidebar" class="col-md-3"<?php Schema_Markup::schema_metadata( array( 'context' => 'sidebar' ) ); ?>>
		<div class="sidebar-padder clearfix">
			<aside class="widget-area">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</aside>
		</div>
	</div>
<?php } ?>