<?php
/**
 * @package Rookie Author Box
 * @since 1.0
 * 
 */
?>

<div class="about_author"><?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>  <?php the_author_posts_link(); ?><br />
  <?php the_author_meta('description'); ?>
</div>