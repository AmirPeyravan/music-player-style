@extends('layouts.master')

@section('content')
    <section class="features">
        <div class="container">

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>آپلود اختصاصی</h3>
                    <p>موسیقی‌های مورد علاقه خود را آپلود کنید و در هر زمان و مکان به آن‌ها دسترسی داشته باشید.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <h3>پلی‌لیست‌های شخصی</h3>
                    <p>پلی‌لیست‌های سفارشی بسازید، مدیریت کنید و موسیقی‌های خود را بر اساس سلیقه شخصی سازماندهی کنید.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-folder"></i>
                    </div>
                    <h3>دسته‌بندی هوشمند</h3>
                    <p>موسیقی‌های خود را دسته‌بندی کنید و به راحتی آهنگ‌های مورد نظر خود را پیدا کنید.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">نظرات کاربران</h2>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p>"مدیا پلیر من بهترین راه برای مدیریت موسیقی‌های من است. استفاده از آن بسیار ساده و لذت‌بخش است!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-name">علی محمدی</div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <p>"عاشق قابلیت آپلود و دسته‌بندی هوشمندم. حالا همه آهنگ‌های مورد علاقه‌ام در یک جا هستند."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-name">سارا احمدی</div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <p>"این برنامه زندگی موسیقایی من رو تغییر داد. پلی‌لیست‌های شخصی‌سازی شده عالی هستند!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-name">رضا حسینی</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

