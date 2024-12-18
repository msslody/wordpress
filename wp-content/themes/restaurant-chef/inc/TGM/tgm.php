<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function restaurant_chef_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'restaurant-chef' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	restaurant_chef_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'restaurant_chef_register_recommended_plugins' );