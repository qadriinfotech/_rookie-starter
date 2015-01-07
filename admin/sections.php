<?php
/**
 * @package Rookie theme option sections
 * @since rookie 1.0
 */

/* General */
$this->sections[] = array(
    'icon'      => 'el-icon-cog',
    'title'     => __('General', 'rookie'),
    'fields'    => array(
        array(
            'id'    => 'info_success',
            'type'  => 'info',
            'style' => 'success',
            'title' => __('Welcome to Rookie Theme Option Panel', 'rookie'),
            'icon'  => 'el-icon-smiley',
            'desc'  => __( 'From here you can config your theme in the way you like.', 'rookie')
            ),
        array(
            'id'        => 'theme_demo',
            'type'      => 'info',
            'style'     => 'normal',
            'title'     => __('Install Demo Data<br>', 'rookie'),
            'desc'      => 'Importing demo content will give you sliders, pages, posts, widgets, sidebars and other settings It can also take a couple of minutes to complete depending on your server speed.<br><br><button href="'.admin_url('themes.php?page=rookie_options'). "&import_data_content=true" .'" class="button-primary" type="button">Import Demo Content</button>',
            'url'       => '',
            ),
        array(
            'id' => 'favicon',
            'type' => 'media',
            'url' => true,
            'title' => __('Favicon', 'rookie'), 
            'subtitle' => __('Upload your favicon here', 'rookie'),
            'desc' => __('Should be 16 x 16 px. Supported formats: .ico .gif .png', 'rookie'),
            'default'   => array( 'url' => THEME_URI .'/favicon.ico' ),
            ),
        array(
            'id'        => 'scroll_to_top',
            'type'      => 'switch',
            'title'     => __('Scroll to top button', 'rookie'),
            'subtitle'  => __('Check if you want to disable scroll to top button', 'rookie'),
            'default'   => true
            ),
        array(
            'id'       => 'cloudflare_compatibility',
            'type'     => 'switch',
            'title'    => __('Cloudflare Compatibility', 'rookie'),
            'subtitle' => __('If you going to use CouldFlare check this off', 'rookie'),
            'desc'     => __('This will disable our <a href="'. esc_url('https://developers.google.com/speed/docs/insights/BlockingJS') .'" target="_blank">JavaScript Asynchronous</a> which is conflicted with Cloudflare (Rocket Loader).', 'rookie'),
            'default'  => false
            ),
        array(
            'id'       => 'ga',
            'type'     => 'ace_editor',
            'title'    => __('Google Analytics tracking code', 'rookie'),
            'subtitle' => __('Paste your google analytics tracking code (or any other javascript related tracking code)', 'rookie'),
            'mode'     => 'text',
            'theme'    => 'monokai',
            'default'  => ''
            )
    )
);

/* Header */
$this->sections[] = array(
    'icon'      => 'el-icon-user',
    'title'     => __('Header', 'rookie'),
    'desc'      => __('These are options to modify and style your header area', 'rookie'),
    'fields'    => array(
        array(
            'id'        => 'logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Logo', 'rookie'),
            'subtitle'  => __('Upload your logo image here, or leave empty to show website title instead', 'rookie'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'rookie'),
            'default'   => array('url' => IMG_URI .'/logo.png'),
            ),
        array(
            'id'        =>'logo_width',
            'type'      => 'slider',       
            'title'     => __('Logo Width', 'rookie'), 
            'subtitle'  => __('Specify your logo width.', 'rookie'),
            'validate'  => 'numeric',
            "min"       => "50",
            "step"      => "1",
            "max"       => "300",
            'default'   => "110"          
            ),
        array(
            'id'        =>'logo_height',
            'type'      => 'slider',       
            'title'     => __('Logo Height', 'rookie'), 
            'subtitle'  => __('Specify your logo height.', 'rookie'),
            'validate'  => 'numeric',
            "min"       => "10",
            "step"      => "1",
            "max"       => "300",
            'default'   => "30"          
            ),    
        array(
            'id'        => 'header_description',
            'type'      => 'switch',
            'title'     => __('Display site description', 'rookie'),
            'subtitle'  => __('Check if you want to display site description.', 'rookie'),
            'desc'      => __('Note: It will apply only if You remove logo image. You can change your site description inside <a href="'.admin_url('options-general.php').'">Settings / General</a>', 'rookie'),
            'default'   => false,
            ),
        array(
            'id'        => 'sticky_header',
            'type'      => 'switch',
            'title'     => __('Sticky header', 'rookie'),
            'subtitle'  => __('Check if you want to disable sticky navigation.', 'rookie'),
            'default'   => true,
            ), 
        array(
            'id'        => 'navbar_search',
            'type'      => 'switch',
            'title'     => __('Show Menu Search', 'rookie'),
            'subtitle'  => __('Check if you want to disable search from nav menu.', 'rookie'),
            'default'   => true,
            ), 
        array(
            'id'        => 'top_header_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Top Header </h4>'),
            ),
        array(
            'id'        => 'hide_top_header',
            'type'      => 'switch',
            'title'     => __('Show Top Header Area', 'rookie'),
            'subtitle'  => __('Check if you want to remove top bar.', 'rookie'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_txt',
            'type'      => 'color',
            'title'     => __('Header Text color', 'rookie'),
            'subtitle'  => __('Specify header Text color', 'rookie'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),              
        array(
            'id'        => 'color_header_bg',
            'type'      => 'color',
            'title'     => __('Header Background color', 'rookie'),
            'subtitle'  => __('Specify header background color', 'rookie'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#eee'
            ),      
        array(
            'id'        => 'header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Header Background Image', 'rookie'),
            'subtitle'  => __('Upload a custom background for your header.', 'rookie'),
            'default'   => '',
            'required'  => array('hide_top_header', '=', true),
            ),
        array(
            'id'        => 'header_bg_style',
            'type'      => 'select',
            'title'     => __( 'Background Image Style', 'rookie' ), 
            'required'  => array('hide_top_header', '=', true),
            'subtitle'  => __( 'Select your header background style.', 'rookie' ),
            'options'   => array(
                'no-repeat'     => __( 'no-repeat', 'rookie' ),
                'repeat-x'      => __( 'repeat-x', 'rookie' ),
                'repeat-y'      => __( 'repeat-y', 'rookie' ),
                'repeat'        => __( 'repeat', 'rookie' ),
                ),
            'default'   => 'no-repeat'
            ),
        array(
            'id'        => 'top_header_text_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Top Header Text</h4>'),
            'required'  => array('hide_top_header', '=', true),
            ),                     
        array(
            'id'        =>'phone_text',
            'type'      => 'text',      
            'title'     => __('Header Phone Number', 'rookie'), 
            'subtitle'  => __('Insert your phone number here.', 'rookie'),
            'desc'      => __('Leave it empty to hide it.', 'rookie'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => "1-800-987-654"          
            ),
        array(
            'id'        =>'email_text',
            'type'      => 'text',      
            'title'     => __('Header Email Address', 'rookie'), 
            'subtitle'  => __('Insert your email address here.', 'rookie'),
            'desc'      => __('Leave it empty to hide it.', 'rookie'),
            'default'   => "info@rookie.com",
            'required' => array('hide_top_header', '=', true),
            'validate'  => 'email'
            ),
        array(
            'id'        =>'url_text',
            'type'      => 'text',      
            'title'     => __('Custom Header Link', 'rookie'), 
            'subtitle'  => __('Insert your optional text or link here. <br>Note: HTML is required for links.', 'rookie'),
            'desc'      => __('Leave it empty to hide it.', 'rookie'),
            'validate'  => 'html',
            'required' => array('hide_top_header', '=', true),
            'default'   => '<a href="#">Rookie Link</a>'
            ),                                                                             
        array(
            'id'        => 'a_color_header_txt',
            'type'      => 'color',
            'title'     => __('Custom Link color', 'rookie'),
            'subtitle'  => __('Change the custom link color.', 'rookie'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),
        array(
            'id'        => 'a_color_header_hov',
            'type'      => 'color',
            'title'     => __('Custom Link color hover', 'rookie'),
            'subtitle'  => __('custom link color hover.', 'rookie'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#908dbd'
            ),
        array(
            'id'        => 'sub_header_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Sub Header </h4>'),
            ),
        array(
            'id'        => 'hide_sub_header',
            'type'      => 'switch',
            'title'     => __('Show Sub Header Area', 'rookie'),
            'subtitle'  => __('Check if you want to remove sub header area including breadcrumbs.', 'rookie'),
            'desc'      => __('Note: You can hide breadcrumbs separately in Body section.', 'rookie'),
            'default'   => true,
            ),
        array(
            'id'        => 'hide_breadcrumb',
            'type'      => 'switch',
            'title'     => __('Show Breadcrumb ', 'rookie'),
            'subtitle'  => __('Check if you want to remove breadcrumb from pages', 'rookie'),
            'default'   => true
            ),                      
        array(
            'id'        => 'color_sub_header_bg',
            'type'      => 'color',
            'title'     => __('Sub Header Background color', 'rookie'),
            'subtitle'  => __('Specify the sub header background color', 'rookie'),
            'transparent' => false,
            'desc'      => __('If there is no BG image the default value is #615e95.', 'rookie'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#644c80'
            ),
        array(
            'id'        => 'color_sub_header_txt',
            'type'      => 'color',
            'title'     => __('Sub Header color', 'rookie'),
            'subtitle'  => __('Change the default sub-header text color.', 'rookie'),
            'transparent' => false,
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#fff'
            ),                   
        array(
            'id'        => 'sub_header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Sub Header background pattern', 'rookie'),
            'subtitle'  => __('Choose sub header background pattern or image.', 'rookie'),
            'default'   => array('url' => IMG_URI .'/bg-section.jpg'),
            'required'  => array('hide_sub_header', '=', true),
            ),                                         
    )
);

/* Body */
$this->sections[] = array(
    'icon'      => 'el-icon-screen',
    'title'     => __('Body', 'rookie'),
    'desc'     => __('These are options to modify and style your body area', 'rookie'),
    'fields'    => array(
        array(
            'id'        => 'comments_on_pages',
            'type'      => 'switch',
            'title'     => __('Comments on pages', 'rookie'),
            'subtitle'  => __('turn off comments on pages', 'rookie'),
            'default'   => true
            ),                    
        array(
            'id'        => 'body_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Body background Image', 'rookie'),
            'subtitle'  => __('Choose body background pattern or image.', 'rookie'),
            'default'   => array('url' => ''),
            ),
        array(
            'id'        => 'body_bg_style',
            'type'      => 'background',
            'background-image' => false,
            'title'     => __( 'Background Style', 'rookie' ), 
            'subtitle'  => __( 'Select your body background style.', 'rookie' ),
            'transparent' => false,
            'preview' => false,
            'default'  => array(
                'background-color' => '#f3f3f3')
            ),
        array(
            'id' => 'color_a_text',
            'type' => 'color',
            'title' => __('a link color', 'rookie'),
            'subtitle' => __('Color for a links', 'rookie'),
            'transparent' => false,
            'default' => '#908dbd'
            ),         
        array(
            'id' => 'color_a_hov',
            'type' => 'color',
            'title' => __('a link color hover', 'rookie'),
            'subtitle' => __('Hover color for a links', 'rookie'),
            'transparent' => false,
            'default' => '#b2afe8'
            ),                

    )
);

/* Content */
$this->sections[] = array(
    'icon'      => 'el-icon-blogger',
    'title'     => __('Blog', 'rookie'),
    'desc'     => __('These are options to modify and style your main content area only', 'rookie'),
    'fields'    => array(
        array(
            'id'        =>'excerpt_length_count',
            'type'      => 'slider',       
            'title'     => __('Excerpt Length Limits', 'rookie'), 
            'subtitle'  => __('Enter the number of excerpt length limit to display.', 'rookie'),
            'validate'  => 'numeric',
            "min"       => "10",
            "step"      => "10",
            "max"       => "100",
            'default'   => "50"          
            ), 
        array(
            'id'        => 'blog_author_bio',
            'type'      => 'switch',
            'title'     => __('Enable author bio', 'rookie'),
            'subtitle'  => __('Enable / Disable author block', 'rookie'),
            'default'   => true,
            ),   
        array(
            'id'        => 'post_socials',
            'type'      => 'switch',
            'title'     => __('Post Social Share', 'rookie'),
            'subtitle'  => __('Check if you want to remove social share on single posts', 'rookie'),
            'default'   => true,
            ),
        array(
            'id'        =>'post_socials_text',
            'type'      => 'text',      
            'title'     => __('Post Social Text', 'rookie'), 
            'subtitle'  => __('Change post social text here.', 'rookie'),
            'required'  => array('post_socials', '=', true),
            'default'   => "You feel socially?"          
            ),       
        array(
            'id'        => 'post_navigation',
            'type'      => 'switch',
            'title'     => __('Show post navigation', 'rookie'),
            'subtitle'  => __('Check if you want to remove post navigation on single post', 'rookie'),
            'default'   => true,
            ),
        array(
            'id'        => 'post_content_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Single Post style</h4>'),
            ),                                                      
        array(
            'id' => 'color_content_bg',
            'type' => 'color',
            'title' => __('Background color', 'rookie'),
            'subtitle' => __('Specify content area background color', 'rookie'),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_content_txt_h',
            'type' => 'color',
            'title' => __('Post title color', 'rookie'),
            'subtitle' => __('This color will apply to post title heading, which is (H2) by default.', 'rookie'),
            'transparent' => false,
            'default' => '#212121'
            ),       
        array(
            'id' => 'color_content_txt',
            'type' => 'color',
            'title' => __('Content text color', 'rookie'),
            'subtitle' => __('This color will apply to text color in the content area only', 'rookie'),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_content_meta',
            'type' => 'color',
            'title' => __('Meta text color', 'rookie'),
            'subtitle' => __('This color will apply to your meta data (secondary text)', 'rookie'),
            'transparent' => false,
            'default' => '#888888'
            )
    )
);

/* Sidebar */
$this->sections[] = array(
    'icon'      => 'el-icon-lines',
    'title'     => __('Sidebar', 'rookie'),
    'desc'      => __('These are global styling settings for the sidebar area', 'rookie'),
    'fields'    => array(
        array(
            'id' => 'color_sidebar_bg',
            'type' => 'color',
            'title' => __('Background color', 'rookie'),
            'subtitle' => __('Specify sidebar background color', 'rookie'),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_sidebar_txt_h',
            'type' => 'color',
            'title' => __('Sidebar titles color', 'rookie'),
            'subtitle' => __('This color will apply to your sidebar titles.', 'rookie'),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_sidebar_txt',
            'type' => 'color',
            'title' => __('a links color', 'rookie'),
            'subtitle' => __('This color will apply to sidebar links.', 'rookie'),
            'transparent' => false,
            'default' => '#908dbd'
            ),       
        array(
            'id' => 'color_sidebar_txt_hov',
            'type' => 'color',
            'title' => __('a links color hover', 'rookie'),
            'subtitle' => __('This color will apply to sidebar links hover.', 'rookie'),
            'transparent' => false,
            'default' => '#b2afe8'
            ),
        array(
            'id'        => 'default_widgets',
            'type'      => 'switch',
            'title'     => __('Hide Default Widgets', 'rookie'),
            'subtitle'  => __('Check if you want to show the default widgets', 'rookie'),
            'default'   => true,
            )
    )
);

/* Footer */
$this->sections[] = array(
    'icon'      => 'el-icon-bookmark',
    'title'     => __('Footer', 'rookie'),
    'desc'      => __('Manage settings for footer area', 'rookie'),
    'fields'    => array(

         array(
            'id'        => 'footer_display',
            'type'      => 'switch',
            'switch'    => true,
            'title'     => __('Enable Footer', 'rookie'),
            'subtitle'  => __('Check if you want to include footer area in your theme.', 'rookie'),
            'default'   => true
            ),
        array(
            'id'        => 'footer_col',
            'type'      => 'image_select',
            'compiler'  => true,
            'title'     => __('Footer Widget Columns', 'rookie'),
            'subtitle'  => __('Choose columns you want for your footer widgets.', 'rookie'),
            'desc'      => __('You can manage footer area content in <a href="'.admin_url('widgets.php').'">Apperance / Widgets</a> settings.', 'rookie'),
            'options'   => array(
                '1' => array('alt' => '1 Column ', 'img' => THEME_URI . '/admin/img/1column.png'),
                '2' => array('alt' => '2 Column ', 'img' => THEME_URI . '/admin/img/2columns.png'),
                '3' => array('alt' => '3 Column ', 'img' => THEME_URI . '/admin/img/3columns.png'),
                '4' => array('alt' => '4 Column ', 'img' => THEME_URI . '/admin/img/4columns.png')
                ),
            'required'  => array('footer_display', '=', true),
            'default'   => '4',
            
            ),
        array(
            'id'        => 'color_footer_bg',
            'type'      => 'color',
            'title'     => __('Background color', 'rookie'),
            'subtitle'  => __('Specify the footer background color', 'rookie'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#222222',
            ),
        array(
            'id'        => 'color_footer_txt_h',
            'type'      => 'color',
            'title'     => __('Footer titles color', 'rookie'),
            'subtitle'  => __('This color will apply to your footer titles.', 'rookie'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#ffffff'
            ),
        array(
            'id'        => 'color_footer_txt',
            'type'      => 'color',
            'title'     => __('Footer a links color', 'rookie'),
            'subtitle'  => __('This color will apply to footer links.', 'rookie'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#908dbd'
            ),       
        array(
            'id'        => 'color_footer_txt_hov',
            'type'      => 'color',
            'title'     => __('Footer a links color hover', 'rookie'),
            'subtitle'  => __('This color will apply to footer links hover.', 'rookie'),
            'transparent' => false,
            'required'  => array('footer_display', '=', true),
            'default'   => '#b2afe8'
            ),
         array(
            'id'        => 'enable_footer_social',
            'type'      => 'switch',
            'title'     => __('Enable Footer Socials', 'rookie'),
            'subtitle'  => __('Check if you want to hide footer socials bar','rookie'),
            'required'  => array('footer_display', '=', true),
            'default'   => true
            ),
        array(
            'id'        =>'footer_socials_text',
            'type'      => 'text',      
            'title'     => __('Footer Social Text', 'rookie'), 
            'subtitle'  => __('Change post social text here.', 'rookie'),
            'required'  => array('footer_display', '=', true),
            'default'   => "Follow us: "          
            ),
         array(
            'id'        => 'enable_copyright',
            'type'      => 'switch',
            'title'     => __('Enable Copyright Area', 'rookie'),
            'subtitle'  => __('Check if you want to include copyright area below footer','rookie'),
            'default'   => true
            ),
         array(
            'id'        => 'footer_copyright',
            'type'      => 'editor',
            'title'     => __('Copyright', 'rookie'),
            'subtitle'  => __('Specify some copyright text to show at the bottom of the website', 'rookie'),
            'default'   => __('&copy; Copyright 2015 <a href="'. home_url() .'">rookie</a>. All Rights Reserved.', 'rookie'),
            'args'      => array(
                'textarea_rows'    => 3                            ),
            'required'  => array('enable_copyright', '=', true)
            ),
         array(
            'id'        => 'enable_footer_menu',
            'type'      => 'switch',
            'title'     => __('Enable Footer Menu', 'rookie'),
            'subtitle'  => __('Check if you want to show footer menu inside copyright area', 'rookie'),
            'desc'  => __('Note: you need to set footer menu inside <a href="'.admin_url('nav-menus.php').'">Apperance / Menu</a>', 'rookie'),
            'default'   => true,
            'required'  => array('enable_copyright', '=', true)
            )

    )
);

/* Typography */
$this->sections[] = array(
    'icon'      => 'el-icon-font',
    'title'     => __('Typography', 'rookie'),
    'desc'     => __('Manage fonts and typography settings', 'rookie'),
    'fields'    => array(

        array(
            'id'          => 'main_font',
            'type'        => 'typography', 
            'title'       => __('Main text font', 'rookie'),
            'google'      => true, 
            'compiler'    => true,
            'font-backup' => false,
            'font-size'   => true,
            'color'       => true,
            'subsets'     => false,
            'line-height' => false,
            'text-align'  => false,
            'units'       =>'px',
            'subtitle'    => __('Typography option with each property can be called individually.', 'rookie'),
            'default'     => array(
                'google'        => true,
                'font-weight'   => '300', 
                'font-family'   => 'Open Sans',
                'font-size'     => '14px',
                ),
            'preview' => array(
                'always_display'=> true,
                'font-size'     => '14px',
                'text'          => 'We think that readibility is very important part of any WordPress theme. This is actually a rough example of how simple paragpraph of text will look like on your website so you have a simple preview here.'
                )
            ),

        array(
            'id'        => 'Heading_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Heading Style</h4>'),
            ),
        array(
            'id'          => 'h1_font',
            'type'        => 'typography', 
            'title'       => __('H1 font', 'rookie'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H1 tag font properties.', 'rookie'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '36px',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '36px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h2_font',
            'type'        => 'typography', 
            'title'       => __('H2 font', 'rookie'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H2 tag font properties.', 'rookie'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '30px',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '30px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h3_font',
            'type'        => 'typography', 
            'title'       => __('H3 font', 'rookie'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H3 tag font properties.', 'rookie'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '24px',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '24px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h4_font',
            'type'        => 'typography', 
            'title'       => __('H4 font', 'rookie'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H4 tag font properties.', 'rookie'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '18px',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '18px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h5_font',
            'type'        => 'typography', 
            'title'       => __('H5 font', 'rookie'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H5 tag font properties.', 'rookie'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '14px',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '14px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h6_font',
            'type'        => 'typography', 
            'title'       => __('H6 font', 'rookie'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H6 tag font properties.', 'rookie'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '12px',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '12px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'            => 'nav_font',
            'type'          => 'typography', 
            'title'         => __('Navigation font', 'rookie'),
            'google'        => true, 
            'compiler'      => true,
            'font-backup'   => false,
            'font-size'     => true,
            'color'         => false,
            'line-height'   => false,
            'text-align'    => false,
            'subsets'       => false,
            'units'         =>'px',
            'subtitle'      => __('Typography option with each property can be called individually.', 'rookie'),
            'default'       => array(
                'google'        => true,
                'font-weight'   => '300', 
                'font-family'   => 'Open Sans',
                'font-size' => '14px',
                ),

            'preview' => array(
                'always_display' => true,
                'font-size'      => '14px',
                'text'           => 'Home &nbsp;&nbsp;About &nbsp;&nbsp;Blog &nbsp;&nbsp;Contact'
                )

            ),                
    )
);

/* Social */
$this->sections[] = array(
    'icon' => 'el-icon-group',
    'icon_class' => 'el-icon-large',
    'title' => __('Social Networks', 'rookie'),
    'desc'     => __('Manage your social settings', 'rookie'),
    'fields' => array(
        array(
            'id'        => 'header_socials',
            'type'      => 'switch',
            'title'     => __('Show header social Icons', 'rookie'),
            'subtitle'  => __('Check if you want to remove header social icons.', 'rookie'),
            'desc'      => __('Note: You can set your social links in socials section.', 'rookie'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_socials',
            'type'      => 'color',
            'title'     => __('Header socials icons color.', 'rookie'),
            'subtitle'  => __('Change header socials icons color.', 'rookie'),
            'transparent' => false,
            'required'  => array('header_socials', '=', true),
            'default'   => '#666666'
            ),
        array(
            'id'    => 'info_warning',
            'icon'  => 'el-icon-info-sign',
            'type'  => 'info',
            'title' => __('NOTE!', 'rookie'),
            'style' => 'warning',
            'required'  => array('header_socials', '=', true),
            'desc'  => __('If you leave any field empty, icon will not show.<br> Please note that these icons are used for footer social bar as well.', 'rookie')
            ),     
        array(
            'id'        =>'facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'rookie'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'rookie'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'dribbble',
            'type'      => 'text',      
            'title'     => __('Dribbble', 'rookie'), 
            'subtitle'  => __('Insert your Dribbble URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'rookie'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'pinterest',
            'type'      => 'text',      
            'title'     => __('Pinterest', 'rookie'), 
            'subtitle'  => __('Insert your Pinterest URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'flickr',
            'type'      => 'text',      
            'title'     => __('Flickr', 'rookie'), 
            'subtitle'  => __('Insert your Flickr URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'instagram',
            'type'      => 'text',      
            'title'     => __('Instagram', 'rookie'), 
            'subtitle'  => __('Insert your Instagram URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'vimeo',
            'type'      => 'text',      
            'title'     => __('Vimeo', 'rookie'), 
            'subtitle'  => __('Insert your Vimeo URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'rss',
            'type'      => 'text',      
            'title'     => __('Rss', 'rookie'), 
            'subtitle'  => __('Insert your Rss URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),                                                    
        array(
            'id'        =>'linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'rookie'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'rookie'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Custom CSS - jS */
$this->sections[] = array(
    'icon' => 'el-icon-css',
    'icon_class' => 'el-icon-large',
    'title' => __('Custom Code', 'rookie'),
    'desc'     => __('Add your custom code here', 'rookie'),
    'fields' => array(
        array(
            'id'       => 'additional_css',
            'type'     => 'ace_editor',
            'title'    => __('Additional CSS', 'rookie'),
            'subtitle' => __('Use this field to write or paste CSS code and modify default theme styling', 'rookie'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'default' => ".example {\nmargin: 0 auto;\n}"
            ),
        array(
            'id'       => 'additional_js',
            'type'     => 'ace_editor',
            'title'    => __('Additional JavaScript', 'rookie'),
            'subtitle' => __('Use this field to write or paste additional JavaScript code to this theme', 'rookie'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default' => "jQuery(document).ready(function(){\n\n});"
            ),
    )
);

/* Custom Login */
$this->sections[] = array(
    'icon'      => 'el-icon-user',
    'title'     => __('Custom Login', 'rookie'),
    'desc'     => __('Manage login page', 'rookie'),
    'fields'    => array(
        array(
            'id'        => 'custom_login_logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Custom Login Logo', 'rookie'),
            'subtitle'  => __('Upload your custom login logo image here', 'rookie'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'rookie'),
            'default'   => array('url' => IMG_URI .'/login-logo.png'),
            ), 
        array(
            'id'        => 'custom_login_bg',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Custom Login Background', 'rookie'),
            'subtitle'  => __('Upload your custom background image here', 'rookie'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'rookie'),
            'default'   => array('url' => IMG_URI .'/login-bg.jpg'),
            ), 
        )
);


/* maintenance */
$this->sections[] = array(
    'icon'      => 'el-icon-warning-sign',
    'title'     => __('Maintenance Mode', 'rookie'),
    'desc'      => __('Basic maintenance mode', 'rookie'),
    'fields'    => array(
        array(
            'id'        => 'maintenance_mode',
            'type'      => 'switch',
            'title'     => __('Maintenance mode', 'rookie'),
            'subtitle'  => __('Enable maintenance mode.', 'rookie'),
             'desc'  => __('Check if you want to enable the default wordpress maintenance mode.', 'rookie'),
            'default'   => false,
            ),
        )
);


?>