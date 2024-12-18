<?php
/**
 * Restaurant Chef: Block Patterns
 *
 * @since Restaurant Chef 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Restaurant Chef 1.0
 *
 * @return void
 */
function restaurant_chef_register_block_patterns() {
	$block_pattern_categories = array(
		'restaurant-chef'    => array( 'label' => __( 'Restaurant Chef', 'restaurant-chef' ) ),
	);

	$block_pattern_categories = apply_filters( 'restaurant_chef_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'restaurant_chef_register_block_patterns', 9 );
