<?php
	/**
	 * Welcome Page Initiation
	*/

	include get_template_directory() . '/inc/welcome/welcome.php';

	/** Plugins **/
	$th_plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'accesspress-twitter-feed' => array(
					'slug' => 'accesspress-twitter-feed',
					'filename' => 'accesspress-twitter-feed.php',
					'class' => 'APTF_Class'
				),
				'siteorigin-panels' => array(
					'slug' => 'siteorigin-panels',
					'filename' => 'siteorigin-panels.php',
					'class' => 'SiteOrigin_Panels'
				),
				'contact-form-7' => array(
					'slug' => 'contact-form-7',
					'filename' => 'wp-contact-form-7.php',
					'class' => 'WPCF7'
				)
			),

			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'vmagazine-lite'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'vmagazine-lite'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(

		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'VMagazine Lite', 'vmagazine-lite' ),
		'theme_short_description' => esc_html__( 'VMagazine is a responsive free multi layout news magazine WordPress theme. The theme is perfect for all newspaper, magazines and blog websites. In fact, this is one of the quickest and simplest way to create a news magazine website. The theme is also highly configurable, uses SiteOrigin Page Builder, has 8 built in widgets, 4 elegantly designed demo layouts that can be imported with just one click and the flexibility to place your ads as you desire.', 'vmagazine-lite' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'vmagazine-lite'),
		'deactivate' 			=> esc_html__('Deactivate', 'vmagazine-lite'),
		'activate' 				=> esc_html__('Activate', 'vmagazine-lite'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'vmagazine-lite'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'vmagazine-lite'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/vmagazine-lite/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'vmagazine-lite' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'vmagazine-lite'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'vmagazine-lite' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'vmagazine-lite' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'vmagazine-lite' ),

		

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'vmagazine-lite'),
		'installed_btn' 	=> esc_html__('Activated', 'vmagazine-lite'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'vmagazine-lite'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'vmagazine-lite'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'vmagazine-lite'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'vmagazine-lite' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'vmagazine-lite' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'vmagazine-lite' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'vmagazine-lite' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'vmagazine-lite' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Vmagazine_Lite_Welcome( $th_plugins, $strings );


	