<?php
/*
 * Plugin Name: uiXpress
 * Plugin URI: https://uipress.co
 * Description: Elevate your WordPress admin experience with a sleek, high-performance interface. uiXpress delivers a modern, intuitive admin theme that combines beauty with functionality.
 * Version: 1.2.21
 * Author: uipress
 * Text Domain: uixpress
 * Domain Path: /languages/
 * Requires PHP: 7.4
 * Requires at least: 5.5
 * Update URI: https://accounts.uipress.co/api/v1/uixpress/update
 * License: GPLv2 or later
 * License URI: licence.txt
 */

// If this file is called directly, abort.
!defined("ABSPATH") ? exit() : "";

if (!defined("uixpress_plugin_version")) {
  define("uixpress_plugin_version", "1.2.21");
}

if (!defined("uixpress_plugin_path")) {
  define("uixpress_plugin_path", plugin_dir_path(__FILE__));
}

require_once uixpress_plugin_path . "admin/vendor/autoload.php";

// Load custom field helper functions (global functions for theme developers)
require_once uixpress_plugin_path . "admin/src/Rest/CustomFields/FieldHelpers.php";

// Start app
new UiXpress\App\UiXpress();
