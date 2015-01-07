<?php
/**
 * The Sub-title area
 *
 * @package rookie sub header
 * @since rookie 1.0
 */
?>
<?php if (ro_get_option('hide_sub_header')) { ?>
    <div id="sub-header">
        <div class="container clearfix">
            <div class="row-fluid">
                <div class="sub-header-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php if (ro_get_option('hide_breadcrumb')) { ?>
                <div class="breadcrumb">
                    <?php rookie_breadcrumb_lists(); ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
