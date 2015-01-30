<?php
/**
 * The top header area including text, phone, link and socials
 *
 * @package rookie top header
 * @author Abukwaik
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
                    <i class="fa fa-phone"></i><?php echo ro_get_option('phone_text'); ?>
                    </span> 
                    <?php } ?>
                    <?php $email_text = ro_get_option('email_text');
                    if (!empty ($email_text) && ro_get_option('email_text')) { ?>
                    <span <?php Schema_Markup::schema_metadata( array( 'context' => 'email' ) ); ?>>
                    <i class="fa fa-envelope"></i> <?php echo ro_get_option('email_text'); ?> 
                    </span>
                    <?php } ?>
                    <?php $url_text = ro_get_option('url_text');
                    if (!empty ($url_text) && ro_get_option('url_text')) { ?>         
                    <span class="external-link"<?php Schema_Markup::schema_metadata( array( 'context' => 'url' ) ); ?>>
                        <i class="fa fa-external-link"></i>
                        <?php echo ro_get_option('url_text'); ?>
                    </span>
                    <?php } ?>
                </div><!-- #top-bar-content -->

                <?php if (ro_get_option('header_socials')) { ?>
                <?php header_socials(); ?>
                <?php } ?>
            </div> <!-- .container -->
        </div> <!-- #top-bar -->
    </header>
<?php } ?>