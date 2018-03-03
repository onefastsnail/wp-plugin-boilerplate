<?php namespace Onefastsnail\MyPlugin\Front;

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.onefastsnail.com
 * @since      1.0.0
 *
 * @package    Logic
 * @subpackage Logic/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Logic
 * @subpackage Logic/public
 * @author     Paul Stewart <paul@onefastsnail.com>
 */
class Controller
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $pluginName    The ID of this plugin.
     */
    private $pluginName;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $pluginName       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($pluginName, $version)
    {
        $this->pluginName = $pluginName;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueueStyles()
    {
        //wp_enqueue_style( $this->pluginName, plugin_dir_url( __FILE__ ) . 'dist/css/bundle.css', array(), $this->version, 'all' );
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueueScripts()
    {
        //wp_enqueue_script( $this->pluginName, plugin_dir_url( __FILE__ ) . 'dist/js/bundle.js', array(), $this->version, true );
    }

    public function restApi()
    {
        add_action('rest_api_init', function () {
            register_rest_route('my-plugin/v1', '/posts', array(
                'methods' => 'GET',
                'callback' => 'Onefastsnail\MyPlugin\RestApi\posts',
            ));
        });
    }
}
