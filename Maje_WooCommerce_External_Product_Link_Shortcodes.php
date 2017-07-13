<?php

/*
Plugin Name: WooCommerce External/Affiliate Link Shortcode
Plugin URI: https://majemedia.com/plugins/woocommerce-external-product-link-shortcodes
Description: Link to an affiliate/external product's url from content without sending your user to the product page first.
Version: 1.0.4
Author: Maje Media LLC
Author URI: https://majemedia.com
Copyright: Maje Media LLC
Text Domain: mm-wc-epls
Domain Path: /lang
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/*
 * 
 */

class Maje_WooCommerce_External_Product_Link_Shortcodes {

	private static $instance;
	public static  $plugin_url;
	public static  $plugin_path;

	public static function get_instance() {

		if ( ! self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
	
	public function __construct() {
		
		$this->set_class_vars();
		
		require 'autoload.php';
		
		$this::actions();
		$this::filters();
		$this::shortcodes();
		
	}
	
	public function set_class_vars() {

		$this::$plugin_path = realpath( dirname( __FILE__ ) );
		$this::$plugin_url  = plugins_url( '', __FILE__ );
		
	}
	
	public static function actions() {
	
	}

	public static function filters() {

	}
	
	public static function shortcodes() {
		
		add_shortcode('wc_external_link', array('MMWCEPLS_ShortCodes','external_product_url'));
		
	}
	
}
$MMWCEPLS = Maje_WooCommerce_External_Product_Link_Shortcodes::get_instance();