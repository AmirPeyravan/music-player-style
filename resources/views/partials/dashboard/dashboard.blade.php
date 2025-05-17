<!-- Dashboard Tab -->
<div id="dashboard" class="tab-content active">
    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon icon-songs">
                <i class="fas fa-music"></i>
            </div>
            <div class="stat-value">124</div>
            <div class="stat-label">آهنگ‌ها</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-albums">
                <i class="fas fa-compact-disc"></i>
            </div>
            <div class="stat-value">28</div>
            <div class="stat-label">آلبوم‌ها</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-playlists">
                <i class="fas fa-list"></i>
            </div>
            <div class="stat-value">15</div>
            <div class="stat-label">پلی‌لیست‌ها</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-favorites">
                <i class="fas fa-heart"></i>
            </div>
            <div class="stat-value">46</div>
            <div class="stat-label">علاقه‌مندی‌ها</div>
        </div>
    </div>

    <div class="content-section">
        <div class="section-header">
            <h2 class="section-title">آخرین آهنگ‌های اضافه شده</h2>
            <a href="#" class="btn btn-secondary" onclick="openTab('songs')">
                <span>مشاهده همه</span>
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>

        <div class="songs-list">
            <div class="songs-header">
                <div>#</div>
                <div>عنوان</div>
                <div>هنرمند</div>
                <div>آلبوم</div>
                <div>مدت زمان</div>
                <div>عملیات</div>
            </div>

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

            <div class="song-item" onclick="playMusic(2)">
                <div class="song-cover">
                    <i class="fas fa-music"></i>
                </div>
                <div class="song-title">دلبر</div>
                <div class="song-artist">سیروان خسروی</div>
                <div class="song-album">جاده رویاها</div>
                <div class="song-duration">4:12</div>
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

            <div class="song-item" onclick="playMusic(3)">
                <div class="song-cover">
                    <i class="fas fa-music"></i>
                </div>
                <div class="song-title">یکی هست</div>
                <div class="song-artist">علی زند وکیلی</div>
                <div class="song-album">ساعت</div>
                <div class="song-duration">5:01</div>
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
        </div>
    </div>

    <div class="content-section">
        <div class="section-header">
            <h2 class="section-title">پلی‌لیست‌های شما</h2>
            <a href="#" class="btn btn-secondary" onclick="openTab('playlists')">
                <span>مشاهده همه</span>
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>

        <div class="playlists-grid">
            <div class="playlist-card">
                <div class="playlist-cover">
                    <i class="fas fa-list"></i>
                </div>
                <div class="playlist-info">
                    <div class="playlist-title">بهترین‌های پاپ</div>
                    <div class="playlist-count">۲۸ آهنگ</div>
                </div>
            </div>

            <div class="playlist-card">
                <div class="playlist-cover">
                    <i class="fas fa-list"></i>
                </div>
                <div class="playlist-info">
                    <div class="playlist-title">موسیقی سنتی</div>
                    <div class="playlist-count">۱۵ آهنگ</div>
                </div>
            </div>

            <div class="playlist-card">
                <div class="playlist-cover">
                    <i class="fas fa-list"></i>
                </div>
                <div class="playlist-info">
                    <div class="playlist-title">برای مطالعه</div>
                    <div class="playlist-count">۲۰ آهنگ</div>
                </div>
            </div>

            <div class="playlist-card">
                <div class="playlist-cover">
                    <i class="fas fa-list"></i>
                </div>
                <div class="playlist-info">
                    <div class="playlist-title">انگیزشی</div>
                    <div class="playlist-count">۱۲ آهنگ</div>
                </div>
            </div>
        </div>
    </div>
</div>
