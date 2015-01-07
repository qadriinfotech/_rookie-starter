<?php
/**
 * @package Rookie plugin included
 * @since rookie 1.0
 * 
 */

get_template_part( 'admin/tgm-plugin-activation' );

add_action( 'tgmpa_register', 'rookie_register_required_plugins' );

/*Register the required plugins for rookie theme.*/
function rookie_register_required_plugins() {

	$plugins = array(
		array(
			'name'	 				=> 'Rookie Core', // The plugin name
			'slug'	 				=> 'rookie-core', // The plugin slug (typically the folder name)
			'source'   				=> THEME_DIR . '/admin/plugins/rookie-core.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
	);

	$config = array(
		'domain'          	=> 'rookie',          
		'default_path'    	=> '',                         
		'parent_menu_slug'  => 'themes.php',        
		'parent_url_slug'   => 'themes.php',        
		'menu'            	=> 'install-required-plugins',
		'has_notices'       => true,                    
		'is_automatic'      => true,         
		'message'       	=> '<br />1. Select all plugins checkbox to the left of "Plugin" <br />2. Click "Bulk Actions" and then Install <br />3. Click "Apply" button',              
		'strings'         	=> array(
			'page_title'                            => __( 'Rookie Plugin Integration', 'rookie' ),
			'menu_title'                            => __( 'Plugin Integration', 'rookie' ),
			'installing'                            => __( 'Installing Plugin: %s', 'rookie' ), // %1$s = plugin name
			'oops'                                  => __( 'Something went wrong with the plugin API.', 'rookie' ),
			'notice_can_install_required'           => __( 'Rookie theme requires the following plugin: %1$s.', 'rookie' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'      	=> __( 'Rookie theme recommends the following plugin: %1$s.', 'rookie' ),  // %1$s = plugin name(s)
			'notice_cannot_install'          	 	=> __( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.',  'rookie' ),  // %1$s = plugin name(s)
			'notice_can_activate_required'          => __( 'The following required plugin is currently inactive: %1$s.',  'rookie' ),  // %1$s = plugin name(s)
			'notice_can_activate_recommended'     	=> __( 'The following recommended plugin is currently inactive: %1$s.', 'rookie' ),  // %1$s = plugin name(s)
			'notice_cannot_activate'          		=> __( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.','rookie' ),  // %1$s = plugin name(s)
			'notice_ask_to_update'           		=> __( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with rookie theme: %1$s.', 'rookie' ), // %1$s = plugin name(s)
			'notice_cannot_update'            		=> __( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'rookie' ), // %1$s = plugin name(s)
			'install_link'                  		=> __( 'Begin installing plugin', 'rookie' ),
			'activate_link'                 		=> __( 'Activate installed plugin', 'rookie' ),
			'return'                                => __( 'Return to Required Plugins Installer', 'rookie' ),
			'plugin_activated'                      => __( 'Plugin activated successfully.', 'rookie' ),
			'complete'                  			=> __( 'All plugins installed and activated successfully. %s', 'rookie' ), // %1$s = dashboard link
			'nag_type'                 				=> 'updated' 
		)
	); 
	
  tgmpa( $plugins, $config );
}

?>