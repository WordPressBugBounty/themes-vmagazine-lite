<?php
/**
 * vmagazine Theme Customizer
 *
 * @package vmagazine-lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vmagazine_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->remove_section('header_image');

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'vmagazine_lite_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'vmagazine_lite_customize_partial_blogdescription',
		) );
	}

	/*------------------------------------------------------------------------------------*/
	/**
	 * Upgrade to Vmagazine
	*/
	// Register custom section types.
	$wp_customize->register_section_type( 'Vmagazine_Lite_Customize_Section_Pro' );

	// Register sections.
	$wp_customize->add_section(
	    new Vmagazine_Lite_Customize_Section_Pro(
	        $wp_customize,
	        'vmagazine-lite',
	        array(
	            'title'    => esc_html__( 'Free vs Pro Version', 'vmagazine-lite' ),
	            'pro_text' => esc_html__( 'Compare and Buy','vmagazine-lite' ),
	            'pro_url'  => admin_url( 'themes.php?page=welcome-page#free_vs_pro' ),
	            'priority' => 0,
	        )
	    )
	);
}
add_action( 'customize_register', 'vmagazine_lite_customize_register' );


if( ! function_exists('vmagazine_lite_widget_template_cus')){
	function vmagazine_lite_widget_template_cus($wp_customize){

	$wp_customize->add_setting('vmagazine_lite_template_layout_setting', array(
            'default'           => 'template-one',
            'sanitize_callback' => 'sanitize_text_field'
          )
       );
	$wp_customize->add_control('vmagazine_lite_template_layout_setting',array(
	        'section'      => 'vmagazine_lite_general_options',
	        'type'         => 'select',
	        'label'        => esc_html__( 'Choose Template', 'vmagazine-lite' ),
	        'description'  => esc_html__( 'change the template for widgets', 'vmagazine-lite' ),
	        'priority'     => 41,
	        'choices'      => array(
	          'template-one'    => esc_html__('Template One','vmagazine-lite'),
	          'template-three'    => esc_html__('Template Two','vmagazine-lite'),
	      )
	      )
	    ); 

	}
}

add_filter( 'vmagazine_lite_widget_template', 'vmagazine_lite_widget_template_cus' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function vmagazine_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function vmagazine_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vmagazine_lite_customize_preview_js() {
	wp_enqueue_script( 'vmagazine-lite-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'vmagazine_lite_customize_preview_js' );

/**
 * Added customizer scripts
 */
function vmagazine_lite_customizer_script() {
	
	wp_enqueue_script( 'jquery-ui-button' );

	wp_enqueue_style( 'juqery-ui', esc_url( get_template_directory_uri() . '/assets/css/jquery-ui.css' ) );


}
add_action( 'customize_controls_enqueue_scripts', 'vmagazine_lite_customizer_script' );



/** 
**Include Customizer option
**/

require get_template_directory().'/inc/customizer/vmagazine-lite-customizer.php';


/**
*
* Customizer repeaters
*
*/
require get_template_directory().'/inc/customizer/repeater-controller/customizer.php';


/** 
**Include sanatize functions
**/

require get_template_directory().'/inc/customizer/vmagazine-lite-sanatize.php';

/** 
**Include custom functions
**/

require get_template_directory().'/inc/customizer/vmagazine-lite-custom-class.php';


