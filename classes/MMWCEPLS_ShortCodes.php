<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/*
 * 
 */

class MMWCEPLS_ShortCodes {

	public function __construct() {

	}

	public static function external_product_url( $atts, $content = '' ) {

		global $MMWCEPLS;

		$atts = shortcode_atts( array(
			                        'product_id' => NULL,
			                        'new_window' => FALSE,
			                        'link_title' => FALSE,
			                        'link_rel'   => FALSE,
		                        ), $atts, 'wc_external_link' );

		$return = '';

		$product_url     = self::get_product_url( $atts[ 'product_id' ] );
		$link_target_prop = ( $atts[ 'new_window' ] === 'true' ) ? 'target="_blank"' : '';
		$link_title_prop = ( $atts[ 'link_title' ] ) ? 'title="' . esc_html( $atts[ 'link_title' ] ) . '"' : '';
		$link_rel_prop   = ( $atts[ 'link_rel' ] ) ? 'rel="' . esc_html( $atts[ 'link_rel' ] ) . '"' : '';

		include( $MMWCEPLS::$plugin_path . '/templates/external_product_url.php' );

		return $return;

	}

	private static function get_product_url( $product_id ) {

		if ( ! empty( $product_id ) ) {
			$product_url = get_post_meta( $product_id, '_product_url', TRUE );
		}
		else {
			$product_url = '#';
		}

		return $product_url;

	}

}