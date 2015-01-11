<?php
/**
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package rookie
 * @since rookie 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
var cb = function() {
var l = document.createElement('link'); l.rel = 'stylesheet';
l.href = '<?php echo CSS_URI ?>/all.css';
var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);};
var raf = requestAnimationFrame || mozRequestAnimationFrame ||
webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) raf(cb);
else window.addEventListener('load', cb);
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?><?php Schema_Markup::schema_metadata( array('context' => 'body' )); ?>>
<?php $logo_url = ro_get_option('logo_custom_url') ? ro_get_option('logo_custom_url') : home_url( '/' ); $logo = ro_get_option('logo') ?>
<?php get_template_part( 'loop/top-header' ); ?>
<?php if (ro_get_option('sticky_header')) { ?>
<header id="wrap">
    <?php } ?> 
    <nav class="navbar navbar-default" >
        <div class="container clearfix">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="navbar-brand">
                    <div class="logo">
                        <?php $logo_width = ro_get_option( 'logo_width', '110' ); $logo_height = ro_get_option( 'logo_height', '30' ); ?>        
                        <a href="<?php echo esc_url( $logo_url ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
                            <?php if(!empty($logo['url'])) : ?>
                            <img width="<?php echo $logo_width; ?>" height="<?php echo $logo_height; ?>" src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" />
                        </a>                    
                        <?php else: ?>
                            <h2 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                            <?php if (ro_get_option('header_description')) { ?>                              
                            <small class="site-desc"><?php echo get_bloginfo('description'); ?></small>
                            <?php } ?>
                        <?php endif; ?>
                    </div> <!-- Logo -->
                </div> <!-- navbar-brand -->
            </div> <!-- navbar-header -->
            <?php main_nav(); ?>
        </div>  <!-- navbar navbar-default -->
    </nav> <!-- container -->
</header>  <!-- wrap -->
<?php if( !is_front_page()) { ?>
<?php get_template_part( 'loop/sub-header'); ?>
<?php } ?>
    <main id="content" class="site-content" <?php Schema_Markup::schema_metadata( array( 'context' => 'content' ) ); ?>> 
        <div class="main-content-area">
            <div class="container-fluid clearfix">

