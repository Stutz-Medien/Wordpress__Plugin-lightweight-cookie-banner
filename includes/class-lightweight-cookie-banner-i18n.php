<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://stutz-medien.ch/
 * @since      1.0.0
 *
 * @package    Lightweight_Cookie_Banner
 * @subpackage Lightweight_Cookie_Banner/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lightweight_Cookie_Banner
 * @subpackage Lightweight_Cookie_Banner/includes
 * @author     Stutz Medien AG <rafik@stutz-medien.ch>
 */
class Lightweight_Cookie_Banner_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-name',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}