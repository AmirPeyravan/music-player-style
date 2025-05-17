<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد کاربری | مدیا پلیر من</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>

@include('partials.dashboard.slidebar')

<!-- Main Content -->
<div class="main-content">
    <div class="top-bar">
        <h1 class="page-title">داشبورد</h1>
        <div class="action-buttons">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="جستجو...">
            </div>
            <a href="#" class="btn btn-primary" onclick="openModal('addSongModal')">
                <i class="fas fa-plus"></i>
                <span>افزودن آهنگ</span>
            </a>
        </div>
    </div>

    @include('partials.dashboard.dashboard')

    @include('partials.dashboard.musics')

    @include('partials.dashboard.albums')

    @include('partials.dashboard.playList')

    @include('partials.dashboard.favorite')

    @include('partials.dashboard.genres')
</div>

<!-- Music Player -->
<div class="music-player">
    <div class="player-song-info">
        <div class="player-cover">
            <i class="fas fa-music"></i>
        </div>
        <div class="player-details">
            <div class="player-title">خاطرات تو</div>
            <div class="player-artist">محسن یگانه</div>
        </div>
    </div>

    <div class="player-progress">
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <div class="progress-time">
            <div class="current-time">1:23</div>
            <div class="total-time">3:45</div>
        </div>
    </div>

    <div class="player-controls">
        <div class="player-btn prev">
            <i class="fas fa-step-backward"></i>
        </div>
        <div class="player-btn play">
            <i class="fas fa-pause"></i>
        </div>
        <div class="player-btn next">
            <i class="fas fa-step-forward"></i>
        </div>
    </div>

    <div class="player-volume">
        <div class="volume-icon">
            <i class="fas fa-volume-up"></i>
        </div>
        <div class="volume-slider">
            <div class="volume-level"></div>
        </div>
    </div>
</div>

<!-- Add Song Modal -->
<div id="addSongModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">افزودن آهنگ جدید</h2>
        </div>
        <div class="modal-body">
            <div class="upload-area">
                <div class="upload-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="upload-text">فایل آهنگ را در اینجا رها کنید یا کلیک کنید</div>
                <div class="upload-hint">پشتیبانی از فرمت‌های MP3، WAV، FLAC</div>
            </div>

            <div class="form-group">
                <label class="form-label">نام آهنگ</label>
                <input type="text" class="form-control" placeholder="نام آهنگ را وارد کنید">
            </div>

            <div class="form-group">
                <label class="form-label">نام هنرمند</label>
                <input type="text" class="form-control" placeholder="نام هنرمند را وارد کنید">
            </div>

            <div class="form-group">
                <label class="form-label">آلبوم</label>
                <input type="text" class="form-control" placeholder="نام آلبوم را وارد کنید">
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-cancel" onclick="closeModal('addSongModal')">انصراف</button>
            <button class="btn btn-primary">افزودن</button>
        </div>
    </div>
</div>

<script>
    // Function to open a tab
    function openTab(tabId) {
        // Hide all tab contents
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        // Show the selected tab content
        document.getElementById(tabId).classList.add('active');

        // Update active state for nav items
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.classList.remove('active');
        });

        // Add active class to the clicked nav item
        event.currentTarget.classList.add('active');

        // Update page title
        document.querySelector('.page-title').textContent = event.currentTarget.querySelector('span').textContent;
    }

    // Function to show tab content
    function showTabContent(contentId) {
        // Hide all tab contents
        const tabContents = document.querySelectorAll('#songs .tab-content');
        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        // Show the selected tab content
        document.getElementById(contentId).classList.add('active');

        // Update active state for tabs
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Add active class to the clicked tab
        event.currentTarget.classList.add('active');
    }

    // Function to open modal
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    // Function to close modal
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Function to play music
    function playMusic(songId) {
        const musicPlayer = document.querySelector('.music-player');
        musicPlayer.classList.add('active');

        // Here you would normally handle the actual music playback
        console.log('Playing song ID:', songId);
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }
</script>
</body>
</html>
