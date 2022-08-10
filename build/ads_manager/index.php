<?php
/**
 * Main file for WordPress.
 *
 * @wordpress-plugin
 * Plugin Name: 	ads_manager
 * Plugin URI:		
 * Description: 	
 * Author:          dearvn
 * Author URI:		
 * Version: 		1.0.0
 * Text Domain:		ads_manager
 * Domain Path:		/languages
 */

defined('ABSPATH') or die( 'No script kiddies please!' ); // Avoid direct file request

/**
 * Plugin constants. This file is procedural coding style for initialization of
 * the plugin core and definition of plugin configuration.
 */
if (defined('ADS_MANAGER_PATH')) {
    return;
}
define('ADS_MANAGER_FILE', __FILE__);
define('ADS_MANAGER_PATH', dirname(ADS_MANAGER_FILE));
define('ADS_MANAGER_ROOT_SLUG', 'wpplugins');
define('ADS_MANAGER_SLUG', basename(ADS_MANAGER_PATH));
define('ADS_MANAGER_INC', trailingslashit(path_join(ADS_MANAGER_PATH, 'inc')));
define('ADS_MANAGER_MIN_PHP', '7.0.0'); // Minimum of PHP 5.3 required for autoloading and namespacing
define('ADS_MANAGER_MIN_WP', '5.2.0'); // Minimum of WordPress 5.0 required
define('ADS_MANAGER_NS', 'Dearvn\\Ads_manager');
define('ADS_MANAGER_DB_PREFIX', 'ads_manager'); // The table name prefix wp_{prefix}
define('ADS_MANAGER_OPT_PREFIX', 'ads_manager'); // The option name prefix in wp_options
define('ADS_MANAGER_SLUG_CAMELCASE', lcfirst(str_replace('-', '', ucwords(ADS_MANAGER_SLUG, '-'))));
//define('ADS_MANAGER_TD', ''); This constant is defined in the core class. Use this constant in all your __() methods
//define('ADS_MANAGER_VERSION', ''); This constant is defined in the core class
//define('ADS_MANAGER_DEBUG', true); This constant should be defined in wp-config.php to enable the Base#debug() method

// Check PHP Version and print notice if minimum not reached, otherwise start the plugin core
require_once ADS_MANAGER_INC .
    'base/others/' .
    (version_compare(phpversion(), ADS_MANAGER_MIN_PHP, '>=') ? 'start.php' : 'fallback-php-version.php');
