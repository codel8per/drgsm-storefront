<?php
/**
 * Plugin Name: Dr GSM Storefront Core
 * Description: Setup pages, menus, categories and Iran store defaults for Dr GSM.
 * Version: 1.3.0
 * Requires PHP: 8.1
 * Requires at least: 6.6
 * Text Domain: mgsm-rebuild
 */

defined('ABSPATH') || exit;

add_action('admin_menu', function () {
  add_management_page('Dr GSM Setup', 'راه‌اندازی Dr GSM', 'manage_options', 'mgsm-setup', 'mgsm_setup_page');
});
