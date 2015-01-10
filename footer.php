<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rookie footer
 * @since rookie 1.0
 */
?>
        </div> <!-- container -->
    </div><!--/.main-content-area-->
</main><!--/#content-->
<?php if(ro_get_option('footer_display')) : ?>
    <footer class="footer-wrapper">
        <div class="container-fluid clearfix">  
            <div class="footer-content">
                <?php dynamic_sidebar('footer-widget-1'); ?>
            </div>
        </div> 
    </footer>
<?php endif; ?>
<?php if(ro_get_option('enable_footer_social')) : ?>
    <?php footer_socials(); ?>
<?php endif; ?>
<?php if(ro_get_option('enable_copyright')) : ?>
    <footer class="footer-bottom-wrapper"<?php Schema_Markup::schema_metadata( array( 'context' => 'footer' ) ); ?>>
        <div class="container-fluid clearfix">
            <div class="row-fluid">         
                <div class="copyright-text col-md-6">
                    <?php echo ro_get_option('footer_copyright'); ?>
                </div> 
                <div class="footer-menu col-md-6">
                    <ul class="bottom-menu">
                        <?php if (has_nav_menu('footer-menu') && ro_get_option('enable_footer_menu')){
                            footer_nav(); 
                        }?>
                    </ul>
                </div>
            </div>     
        </div>
    </footer>
<?php endif; ?>
<?php if(ro_get_option('scroll_to_top')): ?>
    <a href="#" class="to-top"><i class="fa fa-arrow-up"></i></a>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>