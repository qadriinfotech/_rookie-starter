<?php
/**
 *
 * @package rookie sub header
 * @author Abukwaik
 * @since rookie 1.0
 */
?>
<?php if (ro_get_option('hide_sub_header')) { ?>
    <div id="sub-header" itemscope itemtype="http://schema.org/WebPage">
        <div class="container clearfix">
            <div class="row-fluid">
                <div class="sub-header-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php if (ro_get_option('hide_breadcrumb')) { ?>
                    <?php rookie_breadcrumb_lists(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
