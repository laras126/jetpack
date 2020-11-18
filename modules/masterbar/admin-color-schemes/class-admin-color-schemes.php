<?php
/**
 * Unifies admin color scheme selection across WP.com sites.
 *
 * @package Jetpack
 */

namespace Automattic\Jetpack\Dashboard_Customizations;

/**
 * Unifies admin color scheme selection across WP.com sites.
 */
class Admin_Color_Schemes {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'admin_init', array( $this, 'init' ) );
	}
	/**
	 * Init.
	 */
	public function init() {

		wp_admin_css_color(
			'aquatic',
			__( 'Aquatic', 'jetpack' ),
			plugins_url( 'colors/aquatic/colors.css', __FILE__ ),
			array( '#135e96', '#043959', '#ffffff', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'classic-blue',
			__( 'Classic Blue', 'jetpack' ),
			plugins_url( 'colors/classic-blue/colors.css', __FILE__ ),
			array( '#135e96', '#dcdcde', '#ffffff', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'classic-bright',
			__( 'Classic Bright', 'jetpack' ),
			plugins_url( 'colors/classic-bright/colors.css', __FILE__ ),
			array( '#135e96', '#c9256e', '#ffffff', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'classic-dark',
			__( 'Classic Dark', 'jetpack' ),
			plugins_url( 'colors/classic-dark/colors.css', __FILE__ ),
			array( '#101517', '#23282d', '#ffffff', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

	}
}
