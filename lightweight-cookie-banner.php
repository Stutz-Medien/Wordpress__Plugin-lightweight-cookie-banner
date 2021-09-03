<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://stutz-medien.ch/
 * @since             1.0.0
 * @package           Lightweight_Cookie_Banner
 *
 * @wordpress-plugin
 * Plugin Name:       Lightweight Cookie Banner
 * Plugin URI:        https://github.com/Stutz-Medien/Wordpress__Plugin-lightweight-cookie-banner
 * Description:       This is a lightweight plugin for a cookie banner.
 * Version:           1.0.0
 * Author:            Stutz Medien AG
 * Author URI:        https://stutz-medien.ch/
 * License:           The MIT License (MIT)
 * License URI:       https://mit-license.org/
 * Text Domain:       lightweight-cookie-banner
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LIGHTWEIGHT_COOKIE_BANNER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_lightweight_cookie_banner() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lightweight-cookie-banner-activator.php';
	Lightweight_Cookie_Banner_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_lightweight_cookie_banner() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lightweight-cookie-banner-deactivator.php';
	Lightweight_Cookie_Banner_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lightweight_cookie_banner' );
register_deactivation_hook( __FILE__, 'deactivate_lightweight_cookie_banner' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lightweight-cookie-banner.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lightweight_cookie_banner() {

	$plugin = new Lightweight_Cookie_Banner();
	$plugin->run();

}
run_lightweight_cookie_banner();