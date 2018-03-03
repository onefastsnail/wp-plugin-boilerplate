<?php namespace Onefastsnail\MyPlugin\Admin;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.onefastsnail.com
 * @since      1.0.0
 *
 * @package    Logic
 * @subpackage Logic/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Logic
 * @subpackage Logic/admin
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

    protected $settings = array();

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $pluginName       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($pluginName, $version)
    {
        $this->pluginName = $pluginName;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueueStyles()
    {

        //wp_enqueue_style( $this->pluginName, plugin_dir_url( __FILE__ ) . 'css/logic-admin.css', array(), $this->version, 'all' );
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueueScripts()
    {

        //wp_enqueue_script( $this->pluginName, plugin_dir_url( __FILE__ ) . 'js/logic-admin.js', array( 'jquery' ), $this->version, false );
    }

    public function setupGeneralSettings()
    {
        $this->settings['title'] = 'My Plugin';
        $this->settings['prefix'] = 'myplugin_';
        $this->settings['group'] = 'my-plugin-settings-group';
        $this->settings['capability'] = 'administrator';

        // configure our settings
        $this->settings['fields'] = array(
            'Something' => [
                'field' => $this->settings['prefix'].'something',
                'required' => true,
                'type' => 'text'
            ]
        );

        if (empty($this->settings['fields'])) {
            return false;
        }

        // create new top-level menu
        add_submenu_page('options-general.php', $this->settings['title'], $this->settings['title'], $this->settings['capability'], sanitize_key($this->settings['title']), array($this, 'displayGeneralSettingsPage'));

        // call register settings function
        add_action('admin_init', array($this, 'registerGeneralSettingsForSaving'));
    }

    public function registerGeneralSettingsForSaving()
    {
        if (empty($this->settings['fields'])) {
            return false;
        }

        // register our settings
        foreach ($this->settings['fields'] as $k => $v) {
            register_setting($this->settings['group'], $v['field']);
        }
    }

    public function displayGeneralSettingsPage()
    {
        if (empty($this->settings['fields'])) {
            return false;
        }

        $settings = $this->settings;
        include(MY_PLUGIN_PATH . 'admin/templates/general-settings.php');
    }
}
