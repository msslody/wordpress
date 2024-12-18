<?php
/**
 * Block Patterns
 *
 * @package cafe_eatery
 * @since 1.0
 */

function cafe_eatery_register_block_patterns() {
	$block_pattern_categories = array(
		'cafe-eatery' => array( 'label' => esc_html__( 'Cafe Eatery', 'cafe-eatery' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'cafe-eatery' ) ),
	);

	$block_pattern_categories = apply_filters( 'cafe_eatery_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'cafe_eatery_register_block_patterns', 9 );