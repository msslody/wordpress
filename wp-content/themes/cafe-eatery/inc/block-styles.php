<?php
/**
 * Block Styles
 *
 * @package cafe_eatery
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function cafe_eatery_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'cafe-eatery-padding-0',
				'label' => esc_html__( 'No Padding', 'cafe-eatery' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'cafe-eatery-post-author-card',
				'label' => esc_html__( 'Theme Style', 'cafe-eatery' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'cafe-eatery-button',
				'label'        => esc_html__( 'Plain', 'cafe-eatery' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'cafe-eatery-post-comments',
				'label'        => esc_html__( 'Theme Style', 'cafe-eatery' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'cafe-eatery-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'cafe-eatery' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'cafe-eatery-wp-table',
				'label'        => esc_html__( 'Theme Style', 'cafe-eatery' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'cafe-eatery-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'cafe-eatery' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'cafe-eatery-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'cafe-eatery' ),
			)
		);
	}
	add_action( 'init', 'cafe_eatery_register_block_styles' );
}
