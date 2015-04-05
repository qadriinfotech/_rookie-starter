<?php
/**
 * Template Name: Full width
 * The template for displaying full-width pages with no sidebar.
 *
 * @package Rookie-starter
 * @since rookie 1.0
 */

get_header(); ?>
	<?php the_post(); ?>
	<?php the_content(); ?>
<?php get_footer(); ?>
