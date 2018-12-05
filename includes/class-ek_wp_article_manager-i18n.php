<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://ekumar.com.np
 * @since      1.0.0
 *
 * @package    Ek_wp_article_manager
 * @subpackage Ek_wp_article_manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ek_wp_article_manager
 * @subpackage Ek_wp_article_manager/includes
 * @author     E Kumar <admin@ekumar.com.np>
 */
class Ek_wp_article_manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ek_wp_article_manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
