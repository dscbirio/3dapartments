<?php
/**
 * WP-Gizmo
 *
 * @package           wp-codini
 * @author            Dariusz Scibior
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Search 3D Apartments
 * Plugin URI:        github.com/jacklowrie/wp-gizmo
 * Description:       Search apartments 3d
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Codini
 * Author URI:        https://codini.digital
 * Text Domain:       codini
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */
declare( strict_types = 1 );

require_once( __DIR__ . '/autoloader.php' );
Gizmo_Autoloader::register();

$gizmo = new Gizmo();
$gizmo->init();
