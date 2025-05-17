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