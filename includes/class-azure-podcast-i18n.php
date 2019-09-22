<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mattschoeter.me
 * @since      1.0.0
 *
 * @package    Azure_Podcast
 * @subpackage Azure_Podcast/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Azure_Podcast
 * @subpackage Azure_Podcast/includes
 * @author     Matthew Schroeter <matt@thefancyrobot.com>
 */
class Azure_Podcast_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'azure-podcast',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
