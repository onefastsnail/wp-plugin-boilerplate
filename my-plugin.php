<?php namespace Onefastsnail\MyPlugin;

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
 * @package           My Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       My Plugin
 * Plugin URI:
 * Description:       Adding My Plugin to your website.
 * Version:           1.0.0
 * Author:            Paul Stewart
 * Author URI:        https://www.onefastsnail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       logic
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-logic-activator.php
 */
function activateLogic()
{
    require_once MY_PLUGIN_PATH . 'includes/classes/Activator.php';
    \Onefastsnail\MyPlugin\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/classes/Deactivator.php
 */
function deactivateLogic()
{
    require_once MY_PLUGIN_PATH . 'includes/classes/Deactivator.php';
    \Onefastsnail\MyPlugin\Deactivator::deactivate();
}

register_activation_hook(__FILE__, '\Onefastsnail\MyPlugin\activateLogic');
register_deactivation_hook(__FILE__, 'Onefastsnail\MyPlugin\deactivateLogic');


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require MY_PLUGIN_PATH . 'includes/classes/Main.php';

//functions
require MY_PLUGIN_PATH . 'includes/functions/main.php';
require MY_PLUGIN_PATH . 'includes/functions/custom-post-types.php';
require MY_PLUGIN_PATH . 'includes/functions/rest-api.php';
require MY_PLUGIN_PATH . 'includes/functions/mock-rest-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

function run()
{
    $plugin = new \Onefastsnail\MyPlugin\Main();
    $plugin->run();
}

\Onefastsnail\MyPlugin\run();
