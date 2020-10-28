<?php
/**
 * Module Name: WordPress.com Toolbar and Dashboard customizations
 * Module Description: Replaces the admin bar with a useful toolbar to quickly manage your site via WordPress.com. Also adds additional customizations to the WPAdmin dashboard experience for better compatibility with WP.com.
 * Sort Order: 38
 * Recommendation Order: 16
 * First Introduced: 4.8
 * Requires Connection: No
 * Auto Activate: No
 * Module Tags: General
 * Additional Search Queries: adminbar, masterbar, colorschemes
 *
 * @package Jetpack
 */

namespace Automattic\Jetpack\Dashboard_Customizations;

use Automattic\Jetpack\Admin_Menu;

require dirname( __FILE__ ) . '/masterbar/masterbar/masterbar.php';
require dirname( __FILE__ ) . '/masterbar/admin-color-schemes/admin-color-schemes.php';

new Masterbar();
new Admin_Color_Schemes();

if ( apply_filters( 'jetpack_load_admin_menu_class', ( defined( 'IS_WPCOM' ) && IS_WPCOM ) || jetpack_is_atomic_site() ) ) {
	require_once __DIR__ . '/masterbar/class-admin-menu.php';
	Admin_Menu::get_instance();
}
