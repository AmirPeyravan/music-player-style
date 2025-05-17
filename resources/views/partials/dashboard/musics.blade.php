<!-- Songs Tab -->
<div id="songs" class="tab-content">
    <div class="tab-container">
        <div class="tabs">
            <div class="tab active" onclick="showTabContent('allSongs')">همه آهنگ‌ها</div>
            <div class="tab" onclick="showTabContent('recentSongs')">اخیراً پخش شده</div>
            <div class="tab" onclick="showTabContent('downloadedSongs')">دانلود شده</div>
        </div>

        <div id="allSongs" class="tab-content active">
            <div class="songs-list">
                <div class="songs-header">
                    <div>#</div>
                    <div>عنوان</div>
                    <div>هنرمند</div>
                    <div>آلبوم</div>
                    <div>مدت زمان</div>
                    <div>عملیات</div>
                </div>

                <!-- Song items will be repeated here -->
                <div class="song-item" onclick="playMusic(1)">
                    <div class="song-cover">
                        <i class="fas fa-music"></i>
                    </div>
                    <div class="song-title">خاطرات تو</div>
                    <div class="song-artist">محسن یگانه</div>
                    <div class="song-album">نگاه</div>
                    <div class="song-duration">3:45</div>
                    <div class="song-actions">
                        <button class="action-btn">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- More song items... -->
            </div>
        </div>

        <div id="recentSongs" class="tab-content">
            <p>محتوای اخیراً پخش شده در اینجا نمایش داده می‌شود.</p>
        </div>

        <div id="downloadedSongs" class="tab-content">
            <p>محتوای دانلود شده در اینجا نمایش داده می‌شود.</p>
        </div>
    </div>
</div>
