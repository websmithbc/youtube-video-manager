<?php
require_once plugin_dir_path(__FILE__) . '../vendor/autoload.php';

function ytvm_get_youtube_client() {
    $client = new Google_Client();
    $client->setClientId(get_option('youtube_client_id'));
    $client->setClientSecret(get_option('youtube_client_secret'));
    $client->setRedirectUri('YOUR_REDIRECT_URI');
    $client->addScope('https://www.googleapis.com/auth/youtube.upload');
    return $client;
}
