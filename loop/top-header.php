<?php
/**
 * The top header area including text, phone, link and socials
 *
 * @package rookie top header
 * @since rookie 1.0
 */
?>


<?php if (ro_get_option('hide_top_header')) { ?>
    <header id="top-bar-wrap" <?php Schema_Markup::schema_metadata( array( 'context' => 'header' ) ); ?>>
        <div id="top-bar" <?php Schema_Markup::schema_metadata( array( 'context' => 'ContactPoint' ) ); ?>> 
            <div class="container clearfix">
                <div class="top-bar-left" id="top-bar-content" itemprop="contactType">
                    <?php $phone_text = ro_get_option('phone_text');
                    if (!empty ($phone_text) && ro_get_option('phone_text')) { ?>
                    <span <?php Schema_Markup::schema_metadata( array( 'context' => 'telephone' ) ); ?>>
                    <i style="margin-right: 5px;" class="fa fa-phone"></i><?php echo ro_get_option('phone_text'); ?>
                    </span> 
                    <?php } ?>
                    <?php $email_text = ro_get_option('email_text');
                    if (!empty ($email_text) && ro_get_option('email_text')) { ?>
                    <span <?php Schema_Markup::schema_metadata( array( 'context' => 'email' ) ); ?>>
                    <i style="margin-left: 15px;margin-right: 5px;" class="fa fa-envelope"></i> <?php echo ro_get_option('email_text'); ?> 
                    </span>
                    <?php } ?>
                    <?php $url_text = ro_get_option('url_text');
                    if (!empty ($url_text) && ro_get_option('url_text')) { ?>         
                    <span class="external-link"<?php Schema_Markup::schema_metadata( array( 'context' => 'url' ) ); ?>>
                        <i style="margin-left: 15px;margin-right: 5px;" class="fa fa-external-link"></i>
                        <?php echo ro_get_option('url_text'); ?>
                    </span>
                    <?php } ?>
                </div><!-- #top-bar-content -->

                <?php if (ro_get_option('header_socials')) { ?>
                <div class="top-bar-right social-style-font_icons" id="top-bar-social">
                    <?php $twitter = ro_get_option('twitter'); 
                    if (!empty ($twitter) && ro_get_option('twitter')) { ?>
                    <a target="_blank" title="twitter" href="<?php echo $twitter; ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <?php } ?>
                    <?php $facebook = ro_get_option('facebook'); 
                    if (!empty ($facebook) && ro_get_option('facebook')) { ?>
                    <a target="_blank" title="facebook" href="<?php echo $facebook; ?>">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <?php } ?>
                    <?php $google_plus = ro_get_option('google_plus'); 
                    if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
                    <a target="_blank" title="google+" href="<?php echo $google_plus; ?>">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <?php } ?>
                    <?php $pinterest = ro_get_option('pinterest'); 
                    if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
                    <a target="_blank" title="pinterest" href="<?php echo $pinterest; ?>">
                        <i class="fa fa-pinterest"></i>
                    </a>
                    <?php } ?>
                    <?php $dribbble = ro_get_option('dribbble'); 
                    if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
                    <a target="_blank" title="dribbble" href="<?php echo $dribbble; ?>">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <?php } ?>
                    <?php $linkedin = ro_get_option('linkedin'); 
                    if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
                    <a target="_blank" title="linkedin" href="<?php echo $linkedin; ?>">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <?php } ?>
                    <?php $flickr = ro_get_option('flickr'); 
                    if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
                    <a target="_blank" title="flickr" href="<?php echo $flickr; ?>">
                        <i class="fa fa-flickr"></i>
                    </a>
                    <?php } ?>
                    <?php $vimeo = ro_get_option('vimeo'); 
                    if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
                    <a target="_blank" title="vimeo" href="<?php echo $vimeo; ?>">
                        <i class="fa fa-vimeo-square"></i>
                    </a>
                    <?php } ?>
                    <?php $rss = ro_get_option('rss'); 
                    if (!empty ($rss) && ro_get_option('rss')) { ?>
                    <a target="_blank" title="rss" href="<?php echo $rss; ?>">
                        <i class="fa fa-rss"></i>
                    </a>
                    <?php } ?>
                </div><!-- #top-bar-social -->
                <?php } ?>
            </div> <!-- .container -->
        </div> <!-- #top-bar -->
    </header>
<?php } ?>