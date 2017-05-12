<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.onefastsnail.com
 * @since             1.0.0
 * @package           Theme_Logic
 *
 * @wordpress-plugin
 * Plugin Name:       Theme Logic
 * Plugin URI:        https://github.com/onefastsnail/wp-theme-logic-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Paul Stewart
 * Author URI:        https://www.onefastsnail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       theme-logic
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-theme-logic-activator.php
 */
function activate_theme_logic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-theme-logic-activator.php';
	Theme_Logic_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-theme-logic-deactivator.php
 */
function deactivate_theme_logic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-theme-logic-deactivator.php';
	Theme_Logic_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_theme_logic' );
register_deactivation_hook( __FILE__, 'deactivate_theme_logic' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-theme-logic.php';

//include our functions
require plugin_dir_path( __FILE__ ) . 'includes/functions/index.php';

//include our post types
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-types.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_theme_logic() {

	$plugin = new Theme_Logic();
	$plugin->run();

}
run_theme_logic();
