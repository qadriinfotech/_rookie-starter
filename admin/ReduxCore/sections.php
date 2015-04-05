<?php
/**
 * @package Rookie Startar
 * @author Abukwaik http://www.croti.com
 * @since rookie 1.0
 */

/* General */
$this->sections[] = array(
    'icon'      => 'el el-icon-cog',
    'title'     => __('General', 'rookie-startar'),
    'fields'    => array(
        array(
            'id'    => 'info_success',
            'type'  => 'info',
            'style' => 'success',
            'title' => __('Welcome to Rookie Theme Option Panel', 'rookie-startar'),
            'icon'  => 'el el-icon-smiley',
            'desc'  => __( 'From here you can config your theme in the way you like.', 'rookie-startar')
            ),
        array(
            'id' => 'favicon',
            'type' => 'media',
            'url' => true,
            'title' => __('Favicon', 'rookie-startar'), 
            'subtitle' => __('Upload your favicon here', 'rookie-startar'),
            'desc' => __('Should be 16 x 16px Supported formats: .ico .gif .png', 'rookie-startar'),
            'default'   => array( 'url' => ROOKIE_IMG_URI .'/favicon.ico' ),
            ),

        array(
            'id' => 'apple_touch_icon',
            'type' => 'media',
            'url' => true,
            'title' => __('Apple Touch Icon', 'rookie-startar'), 
            'subtitle' => __('Upload icon for the Apple touch', 'rookie-startar'),
            'desc' => __('Size: 57 x 57px Supported formats: .ico .gif .png', 'rookie-startar'),
            'default'   => array( 'url' => ROOKIE_IMG_URI .'/apple-touch-icon.png' ),
            ),

        array(
            'id'        => 'scroll_to_top',
            'type'      => 'switch',
            'title'     => __('Scroll to top button', 'rookie-startar'),
            'subtitle'  => __('Check if you want to disable scroll to top button', 'rookie-startar'),
            'default'   => true
            ),
        array(
            'id'       => 'ga',
            'type'     => 'ace_editor',
            'title'    => __('Tracking Code', 'rookie-startar'),
            'subtitle' => __('Paste your google analytics tracking code or any other javascript related tracking code', 'rookie-startar'),
            'desc'  => __( 'This will be placed into the footer.', 'rookie-startar'),
            'mode'     => 'text',
            'theme'    => 'monokai',
            'default'  => ''
            )
    )
);

/* Header */
$this->sections[] = array(
    'icon'      => 'el el-icon-user',
    'title'     => __('Header', 'rookie-startar'),
    'desc'      => __('These are options to modify and style your header area', 'rookie-startar'),
    'fields'    => array(
        array(
            'id'        => 'logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Logo', 'rookie-startar'),
            'subtitle'  => __('Upload your logo image here, or leave empty to show website title instead', 'rookie-startar'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'rookie-startar'),
            'default'   => array('url' => ROOKIE_IMG_URI .'/logo.png'),
            ),
        array(
            'id'        =>'logo_width',
            'type'      => 'slider',       
            'title'     => __('Logo Width', 'rookie-startar'), 
            'subtitle'  => __('Specify your logo width.', 'rookie-startar'),
            'validate'  => 'numeric',
            "min"       => "50",
            "step"      => "1",
            "max"       => "300",
            'default'   => "110"          
            ),
        array(
            'id'        =>'logo_height',
            'type'      => 'slider',       
            'title'     => __('Logo Height', 'rookie-startar'), 
            'subtitle'  => __('Specify your logo height.', 'rookie-startar'),
            'validate'  => 'numeric',
            "min"       => "10",
            "step"      => "1",
            "max"       => "300",
            'default'   => "30"          
            ),    
        array(
            'id'        => 'header_description',
            'type'      => 'switch',
            'title'     => __('Display site description', 'rookie-startar'),
            'subtitle'  => __('Check if you want to display site description.', 'rookie-startar'),
            'desc'      => __('Note: It will apply only if You remove logo image. You can change your site description inside <array href="'.admin_url('options-general.php').'">Settings / General</a>', 'rookie-startar'),
            'default'   => false,
            ),
        array(
            'id'        => 'sticky_header',
            'type'      => 'switch',
            'title'     => __('Sticky header', 'rookie-startar'),
            'subtitle'  => __('Check if you want to disable sticky navigation.', 'rookie-startar'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_nav_bg',
            'type'      => 'color',
            'title'     => __('Menu Background color', 'rookie'),
            'subtitle'  => __('Specify menu background color', 'rookie'),
            'transparent' => false,
            'default'   => '#b2afe8'
            ), 
        array(
            'id'        => 'color_nav_a',
            'type'      => 'color',
            'title'     => __('Menu Link color', 'rookie'),
            'subtitle'  => __('Specify menu link color', 'rookie'),
            'transparent' => false,
            'default'   => '#fff'
            ), 
        array(
            'id'        => 'navbar_search',
            'type'      => 'switch',
            'title'     => __('Show Menu Search', 'rookie-startar'),
            'subtitle'  => __('Check if you want to disable search from nav menu.', 'rookie-startar'),
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
            'title'     => __('Show Top Header Area', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove top bar.', 'rookie-startar'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_txt',
            'type'      => 'color',
            'title'     => __('Header Text color', 'rookie-startar'),
            'subtitle'  => __('Specify header Text color', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),              
        array(
            'id'        => 'color_header_bg',
            'type'      => 'color',
            'title'     => __('Header Background color', 'rookie-startar'),
            'subtitle'  => __('Specify header background color', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#eee'
            ),      
        array(
            'id'        => 'header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Header Background Image', 'rookie-startar'),
            'subtitle'  => __('Upload a custom background for your header.', 'rookie-startar'),
            'default'   => '',
            'required'  => array('hide_top_header', '=', true),
            ),
        array(
            'id'        => 'header_bg_style',
            'type'      => 'select',
            'title'     => __( 'Background Image Style', 'rookie-startar' ), 
            'required'  => array('hide_top_header', '=', true),
            'subtitle'  => __( 'Select your header background style.', 'rookie-startar' ),
            'options'   => array(
                'no-repeat'     => __( 'no-repeat', 'rookie-startar' ),
                'repeat-x'      => __( 'repeat-x', 'rookie-startar' ),
                'repeat-y'      => __( 'repeat-y', 'rookie-startar' ),
                'repeat'        => __( 'repeat', 'rookie-startar' ),
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
            'title'     => __('Header Phone Number', 'rookie-startar'), 
            'subtitle'  => __('Insert your phone number here.', 'rookie-startar'),
            'desc'      => __('Leave it empty to hide it.', 'rookie-startar'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => "1-800-987-654"          
            ),
        array(
            'id'        =>'email_text',
            'type'      => 'text',      
            'title'     => __('Header Email Address', 'rookie-startar'), 
            'subtitle'  => __('Insert your email address here.', 'rookie-startar'),
            'desc'      => __('Leave it empty to hide it.', 'rookie-startar'),
            'default'   => "info@rookie.com",
            'required' => array('hide_top_header', '=', true),
            'validate'  => 'email'
            ),
        array(
            'id'        =>'url_text',
            'type'      => 'text',      
            'title'     => __('Custom Header Link', 'rookie-startar'), 
            'subtitle'  => __('Insert your custom link here.', 'rookie-startar'),
            'desc'      => __('Leave it empty to hide it.', 'rookie-startar'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => 'custom link'
            ),
        array(
            'id'        =>'custom_text_url',
            'type'      => 'text',      
            'title'     => __('Custom Header Link URL', 'rookie-startar'), 
            'subtitle'  => __('Insert your custom link url here.', 'rookie-startar'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#'
            ),                                                                              
        array(
            'id'        => 'a_color_header_txt',
            'type'      => 'color',
            'title'     => __('Custom Link color', 'rookie-startar'),
            'subtitle'  => __('Change the custom link color.', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),
        array(
            'id'        => 'a_color_header_hov',
            'type'      => 'color',
            'title'     => __('Custom Link color hover', 'rookie-startar'),
            'subtitle'  => __('custom link color hover.', 'rookie-startar'),
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
            'title'     => __('Show Sub Header Area', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove sub header area including breadcrumbs.', 'rookie-startar'),
            'desc'      => __('Note: You can hide breadcrumbs separately in Body section.', 'rookie-startar'),
            'default'   => true,
            ),
        array(
            'id'        => 'sub_header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Sub Header background pattern', 'rookie-startar'),
            'subtitle'  => __('Choose sub header background pattern or image.', 'rookie-startar'),
            'default'   => array('url' => ROOKIE_IMG_URI .'/bg-section.jpg'),
            'required'  => array('hide_sub_header', '=', true),
            ),                          
        array(
            'id'        => 'sub_header_bg_color',
            'type'      => 'color',
            'title'     => __('Sub Header Background color', 'rookie-startar'),
            'subtitle'  => __('Specify the sub header background color', 'rookie-startar'),
            'transparent' => false,
            'desc'      => __('If there is no Background image the default value is #615e95.', 'rookie-startar'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#644c80'
            ),
        array(
            'id'        => 'color_sub_header_txt',
            'type'      => 'color',
            'title'     => __('Sub Header Text Color', 'rookie-startar'),
            'subtitle'  => __('Change the default sub-header text color.', 'rookie-startar'),
            'desc'      => __('Note: this will be applied on breadcrumbs text color too.', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'hide_breadcrumb',
            'type'      => 'switch',
            'title'     => __('Show Breadcrumb ', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove breadcrumb from pages', 'rookie-startar'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => true
            ),        
        array(
            'id'        => 'color_breadcrumbs_txt_a',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Color', 'rookie-startar'),
            'subtitle'  => __('Change the default breadcrumbs link color.', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => ''
            ),
        array(
            'id'        => 'color_breadcrumbs_txt_a_hover',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Hover Color', 'rookie-startar'),
            'subtitle'  => __('Change the default breadcrumbs link hover color.', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => ''
            ),                                        
    )
);

/* Body */
$this->sections[] = array(
    'icon'      => 'el el-icon-screen',
    'title'     => __('Body', 'rookie-startar'),
    'desc'     => __('These are options to modify and style your body area', 'rookie-startar'),
    'fields'    => array(
        array(
            'id'        => 'comments_on_pages',
            'type'      => 'switch',
            'title'     => __('Comments on pages', 'rookie-startar'),
            'subtitle'  => __('turn off comments on pages', 'rookie-startar'),
            'default'   => true
            ),                    
        array(
            'id'        => 'body_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Body background Image', 'rookie-startar'),
            'subtitle'  => __('Choose body background pattern or image.', 'rookie-startar'),
            'default'   => array('url' => ''),
            ),
        array(
            'id'        => 'body_bg_style',
            'type'      => 'background',
            'background-image' => false,
            'title'     => __( 'Background Style', 'rookie-startar' ), 
            'subtitle'  => __( 'Select your body background style.', 'rookie-startar' ),
            'transparent' => false,
            'preview' => false,
            'default'  => array(
                'background-color' => '#f3f3f3')
            ),
        array(
            'id' => 'color_a_text',
            'type' => 'color',
            'title' => __('a link color', 'rookie-startar'),
            'subtitle' => __('Color for a links', 'rookie-startar'),
            'transparent' => false,
            'default' => '#908dbd'
            ),         
        array(
            'id' => 'color_a_hov',
            'type' => 'color',
            'title' => __('a link color hover', 'rookie-startar'),
            'subtitle' => __('Hover color for a links', 'rookie-startar'),
            'transparent' => false,
            'default' => '#b2afe8'
            ),                

    )
);

/* Content */
$this->sections[] = array(
    'icon'      => 'el el-icon-blogger',
    'title'     => __('Blog', 'rookie-startar'),
    'desc'     => __('These are options to modify and style your main content area only', 'rookie-startar'),
    'fields'    => array(
        array(
            'id'        =>'excerpt_length_count',
            'type'      => 'slider',       
            'title'     => __('Excerpt Length Limits', 'rookie-startar'), 
            'subtitle'  => __('Enter the number of excerpt length limit to display.', 'rookie-startar'),
            'validate'  => 'numeric',
            "min"       => "5",
            "step"      => "5",
            "max"       => "100",
            'default'   => "55"          
            ),
        array(
            'id'        => 'post_views',
            'type'      => 'switch',
            'title'     => __('Enable Post Views', 'rookie-startar'),
            'subtitle'  => __('Enable / Disable post views count', 'rookie-startar'),
            'default'   => true,
            ),  
        array(
            'id'        => 'post_socials',
            'type'      => 'switch',
            'title'     => __('Post Social Share', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove social share on single posts', 'rookie-startar'),
            'default'   => true,
            ),
        array(
            'id'        =>'post_socials_text',
            'type'      => 'text',      
            'title'     => __('Post Social Text', 'rookie-startar'), 
            'subtitle'  => __('Change post social text here.', 'rookie-startar'),
            'required'  => array('post_socials', '=', true),
            'desc'      => __('Leave it empty to hide it.', 'rookie-startar'),
            'default'   => __("You feel socially?", "rookie"),    
            ),       
        array(
            'id'        => 'post_navigation',
            'type'      => 'switch',
            'title'     => __('Show post navigation', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove post navigation on single post', 'rookie-startar'),
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
            'title' => __('Background color', 'rookie-startar'),
            'subtitle' => __('Specify content area background color', 'rookie-startar'),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_content_txt_h',
            'type' => 'color',
            'title' => __('Post title color', 'rookie-startar'),
            'subtitle' => __('This color will apply to post title heading, which is (H2) by default.', 'rookie-startar'),
            'transparent' => false,
            'default' => '#212121'
            ),       
        array(
            'id' => 'color_content_txt',
            'type' => 'color',
            'title' => __('Content text color', 'rookie-startar'),
            'subtitle' => __('This color will apply to text color in the content area only', 'rookie-startar'),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_content_meta',
            'type' => 'color',
            'title' => __('Meta text color', 'rookie-startar'),
            'subtitle' => __('This color will apply to your meta data (secondary text)', 'rookie-startar'),
            'transparent' => false,
            'default' => '#888888'
            ),

        array(
            'id'        => 'author_content_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Author Box</h4>'),
            ),
        array(
            'id'        => 'blog_author_bio',
            'type'      => 'switch',
            'title'     => __('Enable author Bio', 'rookie-startar'),
            'subtitle'  => __('Enable / Disable author box', 'rookie-startar'),
            'default'   => true,
            ),  
        array(
            'id' => 'author_bg_color',
            'type' => 'color',
            'title' => __('Background color', 'rookie-startar'),
            'subtitle' => __('Specify content area background color', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#352041',
            ),
        array(
            'id' => 'author_txt_color',
            'type' => 'color',
            'title' => __('Content text color', 'rookie-startar'),
            'subtitle' => __('This color will apply to text color in the content area only', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#fff'
            ),      
        array(
            'id'        => 'author_socials',
            'type'      => 'switch',
            'title'     => __('Author Social Share', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove social share from author box', 'rookie-startar'),
            'required'  => array('blog_author_bio', '=', true),
            'default'   => true,
            ),
        array(
            'id'        =>'author_socials_text',
            'type'      => 'text',      
            'title'     => __('Author Social Text', 'rookie-startar'), 
            'subtitle'  => __('Change post social text here.', 'rookie-startar'),
            'required'  => array('author_socials', '=', true),
            'desc'      => 'Leave it empty to hide it.',
            'default'   => "Follow me"          
            ), 
        array(
            'id'        =>'author_facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'rookie-startar'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'rookie-startar'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'rookie-startar'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'rookie-startar'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'rookie-startar'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'rookie-startar'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'author_google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'rookie-startar'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'rookie-startar'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Sidebar */
$this->sections[] = array(
    'icon'      => 'el el-icon-lines',
    'title'     => __('Sidebar', 'rookie-startar'),
    'desc'      => __('These are global styling settings for the sidebar area', 'rookie-startar'),
    'fields'    => array(
        array(
            'id' => 'color_sidebar_bg',
            'type' => 'color',
            'title' => __('Background color', 'rookie-startar'),
            'subtitle' => __('Specify sidebar background color', 'rookie-startar'),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_sidebar_txt_h',
            'type' => 'color',
            'title' => __('Sidebar titles color', 'rookie-startar'),
            'subtitle' => __('This color will apply to your sidebar titles.', 'rookie-startar'),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_sidebar_txt',
            'type' => 'color',
            'title' => __('a links color', 'rookie-startar'),
            'subtitle' => __('This color will apply to sidebar links.', 'rookie-startar'),
            'transparent' => false,
            'default' => '#908dbd'
            ),       
        array(
            'id' => 'color_sidebar_txt_hov',
            'type' => 'color',
            'title' => __('a links color hover', 'rookie-startar'),
            'subtitle' => __('This color will apply to sidebar links hover.', 'rookie-startar'),
            'transparent' => false,
            'default' => '#b2afe8'
            ),
        array(
            'id'        => 'default_widgets',
            'type'      => 'switch',
            'title'     => __('Hide Default Widgets', 'rookie-startar'),
            'subtitle'  => __('Check if you want to show the default widgets', 'rookie-startar'),
            'default'   => false,
            )
    )
);

/* Footer */
$this->sections[] = array(
    'icon'      => 'el el-icon-bookmark',
    'title'     => __('Footer', 'rookie-startar'),
    'desc'      => __('Manage settings for footer area', 'rookie-startar'),
    'fields'    => array(

         array(
            'id'        => 'footer_display',
            'type'      => 'switch',
            'switch'    => true,
            'title'     => __('Enable Footer', 'rookie-startar'),
            'subtitle'  => __('Check if you want to include footer area in your theme.', 'rookie-startar'),
            'default'   => true
            ),
        array(
            'id'        => 'footer_col',
            'type'      => 'image_select',
            'compiler'  => true,
            'title'     => __('Footer Widget Columns', 'rookie-startar'),
            'subtitle'  => __('Choose columns you want for your footer widgets.', 'rookie-startar'),
            'desc'      => __('You can manage footer area content in <a href="'.admin_url('widgets.php').'">Apperance / Widgets</a> settings.', 'rookie-startar'),
            'options'   => array(
                '1' => array('alt' => '1 Column ', 'img' => ROOKIE_IMG_URI . '/1column.png'),
                '2' => array('alt' => '2 Column ', 'img' => ROOKIE_IMG_URI . '/2columns.png'),
                '3' => array('alt' => '3 Column ', 'img' => ROOKIE_IMG_URI . '/3columns.png'),
                '4' => array('alt' => '4 Column ', 'img' => ROOKIE_IMG_URI . '/4columns.png')
                ),
            'required'  => array('footer_display', '=', true),
            'default'   => '4',
            
            ),
        array(
            'id'        => 'color_footer_bg',
            'type'      => 'color',
            'title'     => __('Background color', 'rookie-startar'),
            'subtitle'  => __('Specify the footer background color', 'rookie-startar'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#222222',
            ),
        array(
            'id'        => 'color_footer_txt_h',
            'type'      => 'color',
            'title'     => __('Footer titles color', 'rookie-startar'),
            'subtitle'  => __('This color will apply to your footer titles.', 'rookie-startar'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'color_footer_txt',
            'type'      => 'color',
            'title'     => __('Footer Text color', 'rookie-startar'),
            'subtitle'  => __('This color will apply to footer text.', 'rookie-startar'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#777'
            ),      
        array(
            'id'        => 'color_footer_txt_a',
            'type'      => 'color',
            'title'     => __('Footer a links color', 'rookie-startar'),
            'subtitle'  => __('This color will apply to footer links.', 'rookie-startar'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#aaa'
            ),       
        array(
            'id'        => 'color_footer_txt_hov',
            'type'      => 'color',
            'title'     => __('Footer a links color hover', 'rookie-startar'),
            'subtitle'  => __('This color will apply to footer links hover.', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('footer_display', '=', true),
            'default'   => '#b2afe8'
            ),
         array(
            'id'        => 'enable_footer_social',
            'type'      => 'switch',
            'title'     => __('Enable Footer Socials', 'rookie-startar'),
            'subtitle'  => __('Check if you want to hide footer socials bar','rookie-startar'),
            'required'  => array('footer_display', '=', true),
            'default'   => true
            ),
        array(
            'id'        =>'footer_socials_text',
            'type'      => 'text',      
            'title'     => __('Footer Social Text', 'rookie-startar'), 
            'subtitle'  => __('Change post social text here.', 'rookie-startar'),
            'required'  => array('footer_display', '=', true),
            'default'   => "Follow us: "          
            ),
         array(
            'id'        => 'enable_copyright',
            'type'      => 'switch',
            'title'     => __('Enable Copyright Area', 'rookie-startar'),
            'subtitle'  => __('Check if you want to include copyright area below footer','rookie-startar'),
            'default'   => true
            ),
         array(
            'id'        => 'enable_footer_menu',
            'type'      => 'switch',
            'title'     => __('Enable Footer Menu', 'rookie-startar'),
            'subtitle'  => __('Check if you want to show footer menu inside copyright area', 'rookie-startar'),
            'desc'  => __('Note: you need to set footer menu inside <a href="'.admin_url('nav-menus.php').'">Apperance / Menu</a>', 'rookie'),
            'default'   => true,
            'required'  => array('enable_copyright', '=', true)
            )

    )
);

/* Typography */
$this->sections[] = array(
    'icon'      => 'el el-icon-font',
    'title'     => __('Typography', 'rookie-startar'),
    'desc'     => __('Manage fonts and typography settings', 'rookie-startar'),
    'fields'    => array(

        array(
            'id'          => 'main_font',
            'type'        => 'typography', 
            'title'       => __('Main text font', 'rookie-startar'),
            'google'      => true, 
            'compiler'    => true,
            'font-backup' => false,
            'font-size'   => true,
            'color'       => true,
            'subsets'     => false,
            'line-height' => false,
            'text-align'  => false,
            'units'       =>'px',
            'subtitle'    => __('Typography option with each property can be called individually.', 'rookie-startar'),
            'default'     => array(
                'google'        => true,
                'font-weight'   => '300', 
                'font-family'   => 'Open Sans',
                'font-size'     => '',
                'color'     => '',
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
            'title'       => __('H1 font', 'rookie-startar'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H1 tag font properties.', 'rookie-startar'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
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
            'title'       => __('H2 font', 'rookie-startar'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H2 tag font properties.', 'rookie-startar'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
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
            'title'       => __('H3 font', 'rookie-startar'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H3 tag font properties.', 'rookie-startar'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
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
            'title'       => __('H4 font', 'rookie-startar'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H4 tag font properties.', 'rookie-startar'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
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
            'title'       => __('H5 font', 'rookie-startar'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H5 tag font properties.', 'rookie-startar'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
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
            'title'       => __('H6 font', 'rookie-startar'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H6 tag font properties.', 'rookie-startar'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
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
            'title'         => __('Navigation font', 'rookie-startar'),
            'google'        => true, 
            'compiler'      => true,
            'font-backup'   => false,
            'font-size'     => true,
            'color'         => false,
            'line-height'   => false,
            'text-align'    => false,
            'subsets'       => false,
            'units'         =>'px',
            'subtitle'      => __('Typography option with each property can be called individually.', 'rookie-startar'),
            'default'       => array(
                'google'        => true,
                'font-weight'   => '300', 
                'font-family'   => 'Open Sans',
                'font-size' => '',
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
    'icon' => 'el el-icon-group',
    'icon_class' => 'el el-icon-large',
    'title' => __('Social Networks', 'rookie-startar'),
    'desc'     => __('Manage your social settings', 'rookie-startar'),
    'fields' => array(
        array(
            'id'        => 'header_socials',
            'type'      => 'switch',
            'title'     => __('Show header social Icons', 'rookie-startar'),
            'subtitle'  => __('Check if you want to remove header social icons.', 'rookie-startar'),
            'desc'      => __('Note: You can set your social links in socials section.', 'rookie-startar'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_socials',
            'type'      => 'color',
            'title'     => __('Header socials icons color.', 'rookie-startar'),
            'subtitle'  => __('Change header socials icons color.', 'rookie-startar'),
            'transparent' => false,
            'required'  => array('header_socials', '=', true),
            'default'   => '#666666'
            ),
        array(
            'id'    => 'info_warning',
            'icon'  => 'el el-info-circle',
            'type'  => 'info',
            'title' => __('NOTE!', 'rookie-startar'),
            'style' => 'warning',
            'required'  => array('header_socials', '=', true),
            'desc'  => __('If you leave any field empty, icon will not show.<br> Please note that these icons are used for footer social bar as well.', 'rookie-startar')
            ),     
        array(
            'id'        =>'facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'rookie-startar'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'rookie-startar'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'dribbble',
            'type'      => 'text',      
            'title'     => __('Dribbble', 'rookie-startar'), 
            'subtitle'  => __('Insert your Dribbble URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'rookie-startar'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'pinterest',
            'type'      => 'text',      
            'title'     => __('Pinterest', 'rookie-startar'), 
            'subtitle'  => __('Insert your Pinterest URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'flickr',
            'type'      => 'text',      
            'title'     => __('Flickr', 'rookie-startar'), 
            'subtitle'  => __('Insert your Flickr URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'instagram',
            'type'      => 'text',      
            'title'     => __('Instagram', 'rookie-startar'), 
            'subtitle'  => __('Insert your Instagram URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'vimeo',
            'type'      => 'text',      
            'title'     => __('Vimeo', 'rookie-startar'), 
            'subtitle'  => __('Insert your Vimeo URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'rss',
            'type'      => 'text',      
            'title'     => __('Rss', 'rookie-startar'), 
            'subtitle'  => __('Insert your Rss URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),                                                    
        array(
            'id'        =>'linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'rookie-startar'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'rookie-startar'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Advanced options */
$this->sections[] = array(
    'icon' => 'el el-icon-cogs',
    'icon_class' => 'el el-icon-large',
    'title' => __('Advanced Options', 'rookie-startar'),
    'desc'     => __('Advanced options for avanced users here', 'rookie-startar'),
    'fields' => array(

        array(
            'id'        => 'speed_optimization_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Page Speed Optimization</h4>'),
            ),
        array(
            'id'       => 'dynamiclly_load_css',
            'type'     => 'switch',
            'title'    => __('Dynamic Stylesheets', 'rookie-startar'),
            'subtitle' => __('Disable dynamic CSS loading', 'rookie-startar'),
            'desc'     => __('My best solution to <a href="'. esc_url('https://developers.google.com/speed/docs/insights/OptimizeCSSDelivery') .'" target="_blank">Optimize CSS delivery</a> was dynamically generate the CSS for bootstrap and main stylesheet, If you dont like that, just disable this so it will back to the default wp enqueue method', 'rookie-startar'),
            'default'  => false
            ),   
        array(
            'id'       => 'defer_loading_js',
            'type'     => 'switch',
            'title'    => __('Defer loading of JavaScript', 'rookie-startar'),
            'subtitle' => __('Enable defer parsing for javascript', 'rookie-startar'),
            'desc'     => __('Improve your page speed loading time by allawing <a href="'. esc_url('https://developers.google.com/speed/docs/insights/BlockingJS') .'" target="_blank">JavaScript Asynchronous</a> This option will automatically adding "defer" attribute to all .js files. If it causes any issues, then disable it', 'rookie-startar'),
            'default'  => true
            ),
        array(
            'id'        => 'additional_codes',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Custom Codes</h4>'),
            ),
        array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => __('Additional CSS', 'rookie-startar'),
            'subtitle' => __('Use this field to write or paste CSS code and modify default theme styling', 'rookie-startar'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'default' => ".example {\nmargin: 0 auto;\n}"
            ),
        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __('Additional JavaScript', 'rookie-startar'),
            'subtitle' => __('Use this field to write or paste additional JavaScript code to this theme', 'rookie-startar'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default' => "jQuery(document).ready(function(){\n\n});"
            ),
    )
);

/* Custom Login */
$this->sections[] = array(
    'icon'      => 'el el-icon-user',
    'title'     => __('Custom Login', 'rookie-startar'),
    'desc'     => __('Manage login page', 'rookie-startar'),
    'fields'    => array(
        array(
            'id'        => 'custom_login_logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Custom Login Logo', 'rookie-startar'),
            'subtitle'  => __('Upload your custom login logo image here', 'rookie-startar'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'rookie-startar'),
            'default'   => array('url' => ROOKIE_IMG_URI .'/login-logo.png'),
            ), 
        array(
            'id'        => 'custom_login_bg',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Custom Login Background', 'rookie-startar'),
            'subtitle'  => __('Upload your custom background image here', 'rookie-startar'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'rookie-startar'),
            'default'   => array('url' => ROOKIE_IMG_URI .'/login-bg.jpg'),
            ), 
        )
);

/* maintenance */
$this->sections[] = array(
    'icon'      => 'el el-icon-warning-sign',
    'title'     => __('Maintenance Mode', 'rookie-startar'),
    'desc'      => __('Basic maintenance mode', 'rookie-startar'),
    'fields'    => array(
        array(
            'id'        => 'maintenance_mode',
            'type'      => 'switch',
            'title'     => __('Maintenance mode', 'rookie-startar'),
            'subtitle'  => __('Enable maintenance mode.', 'rookie-startar'),
             'desc'  => __('Check if you want to enable the default wordpress maintenance mode.', 'rookie-startar'),
            'default'   => false,
            ),
        )
);


?>