<?php
/**
 * @package Rookie Author Box
 * @since 1.0
 * 
 */
?>
<div id="author-info" class="clearfix">
	<h4 class="recent-title"><?php echo __('About the Author', 'rookie'); ?></h4>
	<div <?php Schema_Markup::schema_metadata( array( 'context' => 'author' ) ); ?> class="about_author">
		<?php echo get_avatar(get_the_author_meta('ID') , '60'); ?><span <?php Schema_Markup::schema_metadata( array( 'context' => 'author_name' ) ); ?>><?php the_author_posts_link(); ?></span><br />
		<p <?php Schema_Markup::schema_metadata( array( 'context' => 'author_description' ) ); ?> class="author-description">
			<?php echo get_the_author_meta('description'); ?>
		</p>
	</div> <!-- end author -->
</div> <!-- author-info -->