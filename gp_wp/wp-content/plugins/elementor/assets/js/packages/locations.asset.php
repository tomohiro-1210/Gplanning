<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * This file is generated by Webpack, do not edit it directly.
 */
return [
	'handle' => 'elementor-packages-locations',
	'src' => plugins_url( '/', __FILE__ ) . 'locations{{MIN_SUFFIX}}.js',
	'i18n' => [
		'domain' => 'elementor',
		'replace_requested_file' => false,
	],
	'type' => 'util',
	'deps' => [
		'react',
	],
];
