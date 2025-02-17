# YouTube Video Manager for WordPress

A WordPress plugin that allows admins to upload videos directly to YouTube and sync videos from a YouTube channel into WordPress.

## ✅ Features
- **Upload videos to YouTube** from the WordPress Admin
- **Automatically save uploaded videos** in WordPress
- **Sync all videos** from your YouTube channel into WordPress
- **Manage & view videos** inside WordPress

## 🚀 Features Breakdown
- **Admin Video Upload**: Upload videos directly to YouTube (Unlisted)
- **YouTube Sync**: Fetch & store videos from your YouTube channel
- **Video Management**: View all uploaded & synced videos in WordPress
- **OAuth Authentication**: Secure YouTube API integration
- **AJAX Upload & Sync**: No page reloads, smooth performance

## 🔧 Installation
### 1️⃣ Download & Install the Plugin
#### Download or clone the repository:
```sh
git clone https://github.com/yourusername/youtube-video-manager.git
```
Upload the `youtube-video-manager/` folder to `wp-content/plugins/`

#### OR install via ZIP:
1. Compress `youtube-video-manager/` into `youtube-video-manager.zip`
2. Go to **WordPress Admin → Plugins → Add New**
3. Click **Upload Plugin** and select the ZIP file
4. Click **Install Now** and then **Activate**

## 🔑 YouTube API Setup
### 1️⃣ Create a Google Cloud Project
1. Go to **Google Cloud Console**
2. Click **Select a project → New Project**
3. Enter a Project Name (e.g., "WordPress YouTube Manager")
4. Click **Create**

### 2️⃣ Enable YouTube API
1. Go to **APIs & Services → Library**
2. Search for **YouTube Data API v3**
3. Click **Enable**

### 3️⃣ Create OAuth 2.0 Credentials
1. Go to **APIs & Services → Credentials**
2. Click **Create Credentials → OAuth Client ID**
3. Configure **Consent Screen** (for External User Type)
4. Set **Application Type**: "Web Application"
5. Set **Redirect URI**:
   ```
   https://yourwebsite.com/wp-admin/admin.php?page=youtube-auth
   ```
6. Click **Create** & Save your **Client ID & Secret**

## 🎬 How to Use
### 1️⃣ Configure API Keys in WordPress
1. Go to **WordPress Admin → Social Videos → YouTube Settings**
2. Enter your **Client ID & Client Secret**
3. Click **Save Changes**

### 2️⃣ Upload a Video to YouTube
1. Go to **WordPress Admin → Social Videos → Add Video**
2. Enter a video title and select a video file
3. Click **Upload** – The video will be uploaded to YouTube as **Unlisted**

### 3️⃣ Sync YouTube Videos to WordPress
1. Go to **WordPress Admin → Social Videos**
2. Click **Sync Videos**
3. All videos from your YouTube channel will be added to the database

## 🛠 Troubleshooting
### 🔹 Common Issues & Fixes
#### ❌ Error: `vendor/autoload.php` not found
✅ Fix:
```sh
cd wp-content/plugins/youtube-video-manager/
composer install
```

#### ❌ Error: Upload Failed: Invalid Credentials
✅ Fix:
- Ensure you entered the correct **Client ID & Secret**
- Reauthorize in **Google Cloud Console**

#### ❌ Error: YouTube API token expired
✅ Fix:
- Re-authenticate via **WordPress Admin → YouTube Settings**

## 👨‍💻 Contributing
We welcome contributions! If you’d like to improve the plugin, follow these steps:

1. **Fork the repository**
2. **Create a feature branch**
   ```sh
   git checkout -b feature-name
   ```
3. **Commit your changes**
   ```sh
   git commit -m "Add feature XYZ"
   ```
4. **Push to your branch**
   ```sh
   git push origin feature-name
   ```
5. **Open a Pull Request 🚀**

## ⚖️ License
This plugin is licensed under the **GPL v2 or later**.
Feel free to use and modify it as per your needs.

## 📞 Support
For support or feature requests, please open an issue in the repository.
🔗 **GitHub Issues**: [https://github.com/websmithbc/youtube-video-manager/issues](https://github.com/websmithbc/youtube-video-manager/issues)

