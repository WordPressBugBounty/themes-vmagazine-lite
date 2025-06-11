	<div class="theme-steps-list-wrap two-col">

		<div class="theme-steps col">
			<div class="step-1-right recommend-col">
				<h3><?php echo esc_html__('Links to Customizer Settings', 'vmagazine-lite'); ?></h3>
				<div class="item-wrap">
				<?php
				$data    = array(
				array(
					'icon' => 'dashicons-format-gallery',
					'text' => __( 'Upload Logo', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[section]' => 'title_tagline' ), admin_url( 'customize.php' ) ),
				),
				array(
					'icon' => 'dashicons-menu',
					'text' => __( 'Header Options', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[section]' => 'vmagazine_lite_header_option' ), admin_url( 'customize.php' ) ),
				),
				array(
					'icon' => 'dashicons-update',
					'text' => __( 'General Options', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[section]' => 'vmagazine_lite_general_options' ), admin_url( 'customize.php' ) ),
				),
				array(
					'icon' => 'dashicons-admin-appearance',
					'text' => __( 'Template Color', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[section]' => 'colors' ), admin_url( 'customize.php' ) ),
				),
				array(
					'icon' => 'dashicons-share',
					'text' => __( 'Social Icons', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[section]' => 'vmagazine_lite_header_icons' ), admin_url( 'customize.php' ) ),
				),
				array(
					'icon' => 'dashicons-align-center',
					'text' => __( 'Footer Options', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[panel]' => 'access_footer_settings_panel' ), admin_url( 'customize.php' ) ),
				),

				array(
					'icon' => 'dashicons-format-aside',
					'text' => __( 'Design Settings', 'vmagazine-lite' ),
					'link' => add_query_arg( array( 'autofocus[panel]' => 'vmagazine_lite_design_settings_panel' ), admin_url( 'customize.php' ) ),
				),
			); 
			foreach ( $data as $customizer_item ) {
				 ?>
				<div class="ti-customizer-item ">
					<i class="dashicons <?php echo esc_attr( $customizer_item['icon']); ?> "></i><a href="<?php echo esc_url( $customizer_item['link'] ); ?>"><?php echo wp_kses_post( $customizer_item['text'] ); ?></a>
				</div>
			<?php } ?>

			</div>
		</div>
		<div class="step-1-left">
			<h3><?php echo esc_html__('Step 1 - Checkout starter sites (Demos) ', 'vmagazine-lite'); ?></h3>
			<p><?php printf(esc_html__('%1$s now comes with a sites library with 5 starter sites to pick from. You can check theme out and decide which one to start with. However you can decide not to use any one of them and start building your site from scratch.', 'vmagazine-lite'),$this->theme_name); ?></p>
			<a class="nav-tab demo_import button" href="<?php echo esc_url(admin_url('/themes.php?page=welcome-page#demo_import')); ?>"><?php echo esc_html__('See Demos', 'vmagazine-lite'); ?></a>
		</div>
		
	</div>

	<div class="theme-steps col">
		<h3><?php echo esc_html__('Step 2 - Import demo of your choice ', 'vmagazine-lite'); ?></h3>
		<p><?php echo esc_html__('Once you chose one of the available starter sites (demos) - you can install it. Please be noted that once you install the demo, it will install all the required plugins too. It is not recommended to install demo on your existing content. A fresh WordPress installation would be required to install demo to replicate demo content exactly. ', 'vmagazine-lite'); ?></p>
		<a class=" nav-tab demo_import button" href="<?php echo esc_url(admin_url('/themes.php?page=welcome-page#demo_import')); ?>"><?php echo esc_html__('Install Demo', 'vmagazine-lite'); ?></a>
	</div>
	<div class="theme-steps col">
		<h3><?php echo esc_html__('Step 3 - Start editing the demo content and making your site! ', 'vmagazine-lite'); ?></h3>
		<p><?php echo esc_html__('Once you install the demo, you can start editing the content, replacing images etc.', 'vmagazine-lite'); ?></p>
	</div>
	<div class="theme-steps col">
		<h3><?php echo esc_html__('Step 4 - You \'re done! ', 'vmagazine-lite'); ?></h3>
		<p><?php echo esc_html__('Go live with the website and get some rest', 'vmagazine-lite'); ?></p>
	</div>
</div>