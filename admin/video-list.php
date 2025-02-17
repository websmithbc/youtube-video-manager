<?php
if (!defined('ABSPATH')) exit;

global $wpdb;
$table_name = $wpdb->prefix . 'social_videos';
$videos = $wpdb->get_results("SELECT * FROM $table_name ORDER BY uploaded_at DESC");

?>
<div class="wrap">
    <h1>Social Videos <button id="sync-videos" class="button button-primary">Sync Videos</button></h1>
    <div id="sync-result"></div>
    <table class="wp-list-table widefat fixed striped">
        <thead><tr><th>ID</th><th>Title</th><th>YouTube Link</th><th>Uploaded At</th></tr></thead>
        <tbody>
            <?php foreach ($videos as $video): ?>
            <tr>
                <td><?= esc_html($video->id); ?></td>
                <td><?= esc_html($video->title); ?></td>
                <td><a href="<?= esc_url($video->youtube_url); ?>" target="_blank">Watch</a></td>
                <td><?= esc_html($video->uploaded_at); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
