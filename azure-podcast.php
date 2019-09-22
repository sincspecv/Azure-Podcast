<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mattschoeter.me
 * @since             1.0.0
 * @package           Azure_Podcast
 *
 * @wordpress-plugin
 * Plugin Name:       Azure Podcaster
 * Plugin URI:        https://thefancyrobot.com
 * Description:       This plugin allows you to host your podcast audio files on an Azure Blob and creates an RSS feed for aggregation.
 * Version:           0.1.0
 * Author:            Matthew Schroeter
 * Author URI:        https://mattschoeter.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       azure-podcast
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
define( 'AZURE_PODCAST_VERSION', '0.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-azure-podcast-activator.php
 */
function activate_azure_podcast() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-azure-podcast-activator.php';
	Azure_Podcast_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-azure-podcast-deactivator.php
 */
function deactivate_azure_podcast() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-azure-podcast-deactivator.php';
	Azure_Podcast_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_azure_podcast' );
register_deactivation_hook( __FILE__, 'deactivate_azure_podcast' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-azure-podcast.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_azure_podcast() {

	$plugin = new Azure_Podcast();
	$plugin->run();

}
run_azure_podcast();
