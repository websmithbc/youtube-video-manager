<?php
/**
 * Plugin Name: YouTube Video Manager
 * Plugin URI:  https://websmithbc.com
 * Description: Upload videos to YouTube from WordPress & sync your YouTube channel.
 * Version:     1.0
 * Author:      Jason Cao
 * License:     GPL2
 */

if (!defined('ABSPATH')) {
    exit;
}

// Load dependencies
require_once plugin_dir_path(__FILE__) . 'includes/database.php';
require_once plugin_dir_path(__FILE__) . 'includes/youtube-api.php';
require_once plugin_dir_path(__FILE__) . 'includes/ajax-handlers.php';

// Activation Hook - Setup DB
register_activation_hook(__FILE__, 'ytvm_create_db');

// Add Admin Menu
add_action('admin_menu', 'ytvm_add_admin_menu');

function ytvm_add_admin_menu() {
    add_menu_page('Youtube Videos', 'Youtube Videos', 'manage_options', 'youtube-videos', 'ytvm_video_list', 'dashicons-video-alt3', 6);
    add_submenu_page('youtube-videos', 'Add Video', 'Add Video', 'manage_options', 'youtube-upload', 'ytvm_video_upload');
}

// Load Pages
function ytvm_video_list() {
    include plugin_dir_path(__FILE__) . 'admin/video-list.php';
}

function ytvm_video_upload() {
    include plugin_dir_path(__FILE__) . 'admin/video-upload.php';
}

// Load Scripts
add_action('admin_enqueue_scripts', 'ytvm_load_admin_scripts');
function ytvm_load_admin_scripts() {
    wp_enqueue_style('ytvm-admin-style', plugins_url('/assets/admin-style.css', __FILE__));
    wp_enqueue_script('ytvm-admin-script', plugins_url('/assets/admin-script.js', __FILE__), ['jquery'], null, true);
}
