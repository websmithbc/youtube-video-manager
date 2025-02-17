<div class="wrap">
    <h1>Upload Video to YouTube</h1>
    <form id="youtube-upload-form" enctype="multipart/form-data">
        <table class="form-table">
            <tr>
                <th><label for="video_title">Video Title</label></th>
                <td><input type="text" name="video_title" id="video_title" class="regular-text" required></td>
            </tr>
            <tr>
                <th><label for="video_file">Upload Video</label></th>
                <td><input type="file" name="video_file" id="video_file" accept="video/*" required></td>
            </tr>
        </table>
        <p><button type="submit" class="button button-primary">Upload</button></p>
    </form>
    <div id="upload-result"></div>
</div>
