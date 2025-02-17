<?php
if (!defined('ABSPATH')) exit;

function ytvm_create_db() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'social_videos';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        title varchar(255) NOT NULL,
        youtube_url varchar(255) NOT NULL,
        uploaded_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
