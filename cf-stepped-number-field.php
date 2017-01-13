<?php
/**

 *
 * @wordpress-plugin
 *
 * Plugin Name:  Plugin Name: Caldera Forms Stepped Number Field
 * Plugin URI:
 * Description: Adds a proper number field to Caldera Forms with step/min/max
 * Version: 0.0.1
 * Author:      Josh Pollock
 * Author URI:  https://calderaforms.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

add_action( 'caldera_forms_get_field_types', function ( $fields ) {
	$fields[ 'stepped_number' ] = array(
		"field"       => __( 'Number field with step control' ),
		"description" => __( 'Good for money inputs' ),
		"file"        => __DIR__ . "/field.php",
		"category"    => __( 'Basic', 'caldera-forms' ),
		"setup"       => array(
			"template" =>__DIR__ . "/config.php",
			"preview"  => __DIR__ . "/preview.php"
		)
	);

	return $fields;
}, 23 );