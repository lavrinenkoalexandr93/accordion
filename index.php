<?php
/**
 * Plugin Name:       Accordion
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       A plugin for adding accordion blocks to your theme
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Oleksandr Lavrinenko
 * Author URI:        https://github.com/lavrinenkoalexandr93/
 * Text Domain:       accordion
 * Domain Path:       /languages
 */

if(!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident';
    exit;
 }

  // Setup
  define('AC_PLUGIN_DIR', plugin_dir_path(__FILE__));

 // Includes
 include(AC_PLUGIN_DIR . 'includes/register-blocks.php');
 // Hooks
add_action( 'init', 'ac_register_blocks');
