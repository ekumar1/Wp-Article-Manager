<?php

/**
 
 *
 * @link              http://ekumar.com.np
 * @since             1.0.0
 * @package           Ek_wp_article_manager
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Article Manager
 * Plugin URI:        http://ekumar.com.np/wp/plugins/ek_wp_article_manager
 * Description:       This Plugin used for article news manager page sidebar widget.
 * Version:           1.0.0
 * Author:            E Kumar
 * Author URI:        http://ekumar.com.np
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ek_wp_article_manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version. 
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ek_wp_article_manager-activator.php
 */
function activate_ek_wp_article_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ek_wp_article_manager-activator.php';
	Ek_wp_article_manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ek_wp_article_manager-deactivator.php
 */
function deactivate_ek_wp_article_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ek_wp_article_manager-deactivator.php';
	Ek_wp_article_manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ek_wp_article_manager' );
register_deactivation_hook( __FILE__, 'deactivate_ek_wp_article_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ek_wp_article_manager.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ek_wp_article_manager() {

	$plugin = new Ek_wp_article_manager();
	$plugin->run();

}


	

run_ek_wp_article_manager();
