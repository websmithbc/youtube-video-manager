
<?php
add_action('wp_ajax_youtube_video_upload', 'ytvm_upload_video');

function ytvm_upload_video() {
    $client = ytvm_get_youtube_client();
    $service = new Google_Service_YouTube($client);

    $video = new Google_Service_YouTube_Video();
    $video->setSnippet(new Google_Service_YouTube_VideoSnippet());
    $video->getSnippet()->setTitle(sanitize_text_field($_POST['video_title']));
    $video->getSnippet()->setPrivacyStatus('unlisted');

    $status = $service->videos->insert("snippet,status", $video, ['data' => file_get_contents($_FILES['video_file']['tmp_name']), 'uploadType' => 'multipart']);
    
    if ($status->id) {
        global $wpdb;
        $wpdb->insert($wpdb->prefix . 'social_videos', ['title' => $_POST['video_title'], 'youtube_url' => 'https://www.youtube.com/watch?v=' . $status->id]);
        wp_send_json_success("https://www.youtube.com/watch?v=" . $status->id);
    } else {
        wp_send_json_error('Upload failed');
    }
}
