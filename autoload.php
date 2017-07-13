<?php

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

// Slash in front
$files_to_load = array(
	'/classes/MMWCEPLS_ShortCodes.php',
);

if( ! empty( $files_to_load ) ) {
    foreach ( $files_to_load as $file ) {
	    require realpath( dirname( __FILE__ ) ) . $file;
    }
}