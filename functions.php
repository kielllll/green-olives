<?php
/**
 * Green Olives functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GreenOlives
 * @subpackage Green_Olives
 * @since Green Olives 1.0
 */

// Registers pattern categories.
if ( ! function_exists( 'greenolives_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function greenolives_pattern_categories() {
    
		register_block_pattern_category(
			'greenolives_page',
			array(
				'label'       => __( 'Pages', 'greenolives' ),
				'description' => __( 'A collection of full page layouts.', 'greenolives' ),
			)
		);

		register_block_pattern_category(
			'greenolives_post-format',
			array(
				'label'       => __( 'Post formats', 'greenolives' ),
				'description' => __( 'A collection of post format patterns.', 'greenolives' ),
			)
		);
	}
endif;