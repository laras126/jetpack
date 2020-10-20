<?php
/**
 * Bootstrap file for the autoloader test suite.
 *
 * @package automattic/jetpack-autoloader
 */

// Make sure its easy to reference the test files.
define( 'TEST_PACKAGE_PATH', dirname( dirname( dirname( __FILE__ ) ) ) );
define( 'TEST_DATA_PATH', __DIR__ . '/data' );

// Load any of the test utilities.
require_once __DIR__ . '/lib/functions-wordpress.php';

// Load all of the classes for the autoloader.
// We include these files manually both in the autoloader and here to avoid having them show up in the manifests.
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/functions.php';
require_once __DIR__ . '/../../src/class-autoloader-locator.php';
require_once __DIR__ . '/../../src/class-plugins-handler.php';
require_once __DIR__ . '/../../src/class-version-selector.php';
require_once __DIR__ . '/../../src/class-manifest-handler.php';
require_once __DIR__ . '/../../src/class-version-loader.php';
require_once __DIR__ . '/../../src/class-autoloader-handler.php';
require_once __DIR__ . '/../../src/class-plugin-locator.php';
require_once __DIR__ . '/../../src/class-cache-handler.php';
require_once __DIR__ . '/../../src/class-hook-manager.php';
