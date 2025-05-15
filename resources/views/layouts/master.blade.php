<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیا پلیر من | خانه موسیقی شما</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;200;300;400;500;600;700;800;900&display=swap');

        /* Updated Color Scheme */
        :root {
            --primary: #7c3aed; /* Vibrant purple */
            --primary-light: #a78bfa;
            --primary-dark: #6d28d9;
            --secondary: #ec4899; /* Bright pink */
            --accent: #22d3ee; /* Cyan accent */
            --light: #f8fafc; /* Softer light background */
            --gray-light: #e5e7eb;
            --dark: #1e293b; /* Deeper dark for footer */
            --text: #374151;
            --success: #10b981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--text);
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Enhanced Header */
        header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            transition: all 0.3s ease;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.8rem;
            color: white;
            text-decoration: none;
            background: linear-gradient(90deg, var(--accent) 0%, white 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo i {
            font-size: 2rem;
        }

        .nav-links {
            display: flex;
            gap: 32px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -6px;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }

        .nav-links a:hover:after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 16px;
        }

        .btn {
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--dark);
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .btn-primary:hover {
            background-color: #06b6d4;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid var(--accent);
        }

        .btn-secondary:hover {
            background-color: rgba(34, 211, 238, 0.1);
            transform: translateY(-2px);
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.8rem;
            color: white;
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            background-color: var(--primary-dark);
            padding: 24px;
            flex-direction: column;
            gap: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-100%);
            transition: transform 0.3s ease;
        }

        .mobile-menu.active {
            display: flex;
            transform: translateY(0);
        }

        .mobile-menu a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 12px;
            transition: all 0.3s ease;
        }

        .mobile-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Hero Section */
        .hero {
            padding-top: 120px;
            padding-bottom: 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            z-index: 10;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 24px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeInUp 0.8s ease forwards;
        }

        .hero p {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 32px;
            color: var(--text);
            animation: fadeInUp 1s ease forwards;
            animation-delay: 0.2s;
            opacity: 0;
        }

        .rotating-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--secondary);
            margin-bottom: 24px;
            height: 2rem;
            overflow: hidden;
        }

        .rotating-text span {
            display: block;
            animation: rotateText 9s infinite;
        }

        .cta-buttons {
            display: flex;
            gap: 24px;
            justify-content: center;
            margin-top: 48px;
            animation: fadeInUp 1.2s ease forwards;
            animation-delay: 0.4s;
            opacity: 0;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.2;
            filter: blur(50px);
            animation: float 10s infinite ease-in-out;
        }

        .circle-1 {
            width: 320px;
            height: 320px;
            background-color: var(--primary);
            top: -60px;
            right: -120px;
        }

        .circle-2 {
            width: 220px;
            height: 220px;
            background-color: var(--secondary);
            bottom: 60px;
            left: -60px;
            animation-delay: -2s;
        }

        .circle-3 {
            width: 280px;
            height: 280px;
            background-color: var(--accent);
            bottom: -120px;
            right: 15%;
            animation-delay: -4s;
        }

        .music-waves {
            display: flex;
            gap: 6px;
            height: 40px;
            align-items: center;
            margin: 32px auto;
            animation: fadeIn 1.5s ease forwards;
            animation-delay: 0.6s;
            opacity: 0;
        }

        .wave {
            width: 5px;
            height: 100%;
            background-color: var(--accent);
            border-radius: 3px;
            animation: wave 1.2s infinite ease-in-out;
        }

        .wave:nth-child(2) { animation-delay: 0.1s; }
        .wave:nth-child(3) { animation-delay: 0.2s; }
        .wave:nth-child(4) { animation-delay: 0.3s; }
        .wave:nth-child(5) { animation-delay: 0.4s; }
        .wave:nth-child(6) { animation-delay: 0.5s; }
        .wave:nth-child(7) { animation-delay: 0.6s; }

        /* Features Section */
        .features {
            padding: 100px 0;
            background-color: var(--gray-light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 64px;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .feature-card {
            background-color: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-align: center;
            opacity: 0;
            transform: translateY(24px);
        }

        .feature-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background-color: rgba(124, 58, 237, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .feature-icon i {
            font-size: 1.8rem;
            color: var(--primary);
        }

        .feature-card h3 {
            margin-bottom: 16px;
            font-size: 1.4rem;
            color: var(--dark);
        }

        .feature-card p {
            color: var(--text);
            line-height: 1.7;
        }

        /* Testimonial Section */
        .testimonials {
            padding: 100px 0;
            background-color: var(--light);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .testimonial-card p {
            color: var(--text);
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 16px;
            justify-content: center;
        }

        .author-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary) 0%, var(--accent) 100%);
        }

        .author-name {
            font-weight: 600;
            color: var(--dark);
        }

        /* Enhanced Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 64px 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 32px;
            align-items: start;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.8rem;
            color: white;
            text-decoration: none;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        .footer-social {
            display: flex;
            gap: 16px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: var(--accent);
            color: var(--dark);
        }

        .footer-newsletter {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .footer-newsletter h4 {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .newsletter-form {
            display: flex;
            gap: 8px;
        }

        .newsletter-input {
            padding: 12px;
            border-radius: 8px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            flex: 1;
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .newsletter-btn {
            padding: 12px 24px;
            background-color: var(--accent);
            color: var(--dark);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-btn:hover {
            background-color: #06b6d4;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 48px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }

        /* Device Mockup */
        .device-mockup {
            position: relative;
            margin: 64px auto;
            max-width: 100%;
            height: 480px;
            perspective: 1200px;
            animation: fadeIn 1.5s ease forwards;
            animation-delay: 0.8s;
            opacity: 0;
        }

        .device {
            width: 300px;
            height: 600px;
            background-color: white;
            border-radius: 36px;
            box-shadow: 0 24px 48px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotateY(12deg);
            transition: all 0.5s ease;
        }

        .device-screen {
            width: 280px;
            height: 580px;
            background: linear-gradient(135deg, #f6f8fb 0%, #e9edf5 100%);
            margin: 10px;
            border-radius: 30px;
            overflow: hidden;
        }

        .screen-content {
            padding: 12px;
        }

        .player-ui {
            padding: 24px 16px;
        }

        .song-info {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }

        .album-cover {
            width: 64px;
            height: 64px;
            background: linear-gradient(45deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 12px;
            margin-right: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .album-cover i {
            color: white;
            font-size: 1.6rem;
        }

        .song-details {
            flex: 1;
        }

        .song-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .artist {
            font-size: 0.9rem;
            color: var(--text);
        }

        .progress-bar {
            height: 5px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            margin-bottom: 12px;
            position: relative;
        }

        .progress {
            height: 100%;
            width: 40%;
            background-color: var(--accent);
            border-radius: 3px;
            position: relative;
        }

        .progress::after {
            content: '';
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: var(--accent);
            border-radius: 50%;
            top: 50%;
            right: -6px;
            transform: translateY(-50%);
        }

        .time {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: var(--text);
            margin-bottom: 24px;
        }

        .controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 24px;
        }

        .control-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
        }

        .control-btn:hover {
            transform: scale(1.1);
        }

        .control-btn.play {
            width: 56px;
            height: 56px;
            background-color: var(--primary);
            color: white;
        }

        .playlist {
            margin-top: 32px;
        }

        .playlist-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .playlist-item:hover {
            background-color: rgba(0, 0, 0, 0.03);
        }

        .track-number {
            width: 30px;
            text-align: center;
            color: var(--text);
            font-size: 0.9rem;
        }

        .track-info {
            flex: 1;
            padding-left: 12px;
        }

        .track-title {
            font-size: 1rem;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .track-artist {
            font-size: 0.8rem;
            color: var(--text);
        }

        .track-duration {
            font-size: 0.9rem;
            color: var(--text);
            padding-right: 12px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-24px);
            }
        }

        @keyframes wave {
            0%, 100% {
                height: 15%;
            }
            50% {
                height: 100%;
            }
        }

        @keyframes rotateText {
            0%, 25% { transform: translateY(0); }
            33%, 58% { transform: translateY(-2rem); }
            66%, 91% { transform: translateY(-4rem); }
            100% { transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 16px;
            }

            .nav-links,
            .auth-buttons {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-links,
            .footer-social,
            .footer-newsletter {
                align-items: center;
            }

            .device {
                width: 240px;
                height: 480px;
            }

            .device-screen {
                width: 220px;
                height: 460px;
            }
        }
    </style>
</head>
<body>

@include('layouts.header')

<section class="features">
    <div class="container">.
        
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

@include('layouts.footer')

<script>
    // Animate feature and testimonial cards on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.feature-card, .testimonial-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 150);
                }
            });
        }, { threshold: 0.2 });

        cards.forEach(card => {
            observer.observe(card);
        });

        // Header scroll effect
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            nav.style.padding = window.scrollY > 50 ? '12px 0' : '16px 0';
        });

        // Device mockup animation
        const device = document.querySelector('.device');
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;
            device.style.transform = `translate(-50%, -50%) rotateY(${mouseX * 12}deg) rotateX(${-mouseY * 12}deg)`;
        });

        // Hamburger menu toggle
        const hamburger = document.querySelector('.hamburger');
        const mobileMenu = document.querySelector('.mobile-menu');
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            hamburger.querySelector('i').classList.toggle('fa-bars');
            hamburger.querySelector('i').classList.toggle('fa-times');
        });
    });
</script>

</body>
</html>
