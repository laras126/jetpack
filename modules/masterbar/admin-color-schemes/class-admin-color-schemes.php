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
			array( '#135e96', '#007e65', '#043959', '#c5d9ed' ),
			array(
				'base'    => '#c5d9ed',
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

		wp_admin_css_color(
			'contrast',
			__( 'Contrast', 'jetpack' ),
			plugins_url( 'colors/contrast/colors.css', __FILE__ ),
			array( '#101517', '#ffffff', '#1d2327', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'nightfall',
			__( 'Nightfall', 'jetpack' ),
			plugins_url( 'colors/nightfall/colors.css', __FILE__ ),
			array( '#00131c', '#043959', '#ffffff', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'powder-snow',
			__( 'Powder Snow', 'jetpack' ),
			plugins_url( 'colors/powder-snow/colors.css', __FILE__ ),
			array( '#101517', '#dcdcde', '#2c3338', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'sakura',
			__( 'Sakura', 'jetpack' ),
			plugins_url( 'colors/sakura/colors.css', __FILE__ ),
			array( '#005042', '#f2ceda', '#700f3b', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

		wp_admin_css_color(
			'sunset',
			__( 'Sunset', 'jetpack' ),
			plugins_url( 'colors/sunset/colors.css', __FILE__ ),
			array( '#691c1c', '#8a2424', '#ffffff', '#646970' ),
			array(
				'base'    => '#646970',
				'focus'   => '#fff',
				'current' => '#fff',
			)
		);

	}
}
