<?php
/*
Plugin Name: Social Media Buttons
Plugin URI: https://wordpress.org/plugins/social-media-button
Description: A WordPress plugin that displays various social media button at Wordpress widgets area.
Version: 1.1.0
Author: Sayful Islam
Author URI: http://sayful.net
Text Domain: smbuttons
Domain Path: /languages/
License: GPLv2 or later
*/
if (!class_exists('Social_Media_Button')):

class Social_Media_Button {	

	/**
	* @var string
	*/
	public $plugin_url;
	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	public function __construct(){
		add_action('wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action('admin_enqueue_scripts', array( $this, 'color_picker' ) );

		$this->includes();
	}

	/**
	 * Return an instance of this class.
	 *
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * enqueue styles and scripts
	 */
	public function enqueue_scripts(){
		if ( is_active_widget( '', '', 'sm_buttons_widget', true ) ) {

			wp_enqueue_style( 'font-awesome', $this->plugin_url() . '/font-awesome/css/font-awesome.min.css' , array(), '4.3.0', 'all' );
		}
	}

	public function color_picker( $hook_suffix ) {
	    wp_enqueue_style( 'wp-color-picker' );
	    wp_enqueue_script( 'social-media-button-admin', $this->plugin_url() . '/js/color.js', array( 'wp-color-picker' ), false, true );
	}

	/**
	 * Plugin url.
	 *
	 * @return string Plugin url
	 */
	public function plugin_url() {
		if ( $this->plugin_url ) return $this->plugin_url;
		return $this->plugin_url = untrailingslashit( plugins_url( '/', __FILE__ ) );
	}

	/**
	 * include widget file
	 */
	public function includes(){
		include_once( 'widget-social-media-link.php' );
	}
}

add_action( 'plugins_loaded', array( 'Social_Media_Button', 'get_instance' ), 0 );
endif;
