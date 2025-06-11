<?php
/**
 * Include all required files
 *
 * @package AccessPress Themes
 * @subpackage vmagazine-lite
 * @since 1.0.0
 */



/** 
**Include vmagazine functions
**/

require get_template_directory().'/inc/vmagazine-lite-functions.php';

/** 
**Include vmagazine hooks
**/

require get_template_directory().'/inc/etc/hooks.php';


/** 
**Include vmagazine breadcrumb,shortcode,mega-menu
**/

require get_template_directory().'/inc/etc/vmagazine-lite-breadcrumbs.php';

/** 
**Include vmagazine widgets
**/

require get_template_directory().'/inc/widgets/widget-functions.php';

/**
*
* Include ajax functions for home blocks
*/
require get_template_directory().'/inc/vmagazine-lite-ajax-functions.php';


/**
*
* Dynamic CSS
*/
require get_template_directory().'/inc/etc/dynamic-css.php';

/**
* Load WooCommerce compatibility file.
*/
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory().'/inc/etc/woocommerce-hooks.php';
}
/**
* Theme welcome page
*
*/
if( file_exists (get_stylesheet_directory().'/inc/welcome/welcome-config.php')){
	require get_theme_file_path().'/inc/welcome/welcome-config.php';
}else{
	require get_template_directory().'/inc/welcome/welcome-config.php';
}

	// require get_template_directory().'/inc/welcome/welcome-config.php';
