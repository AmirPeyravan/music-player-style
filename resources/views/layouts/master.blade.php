<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیا پلیر من | خانه موسیقی شما</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<script>
    // Animate feature and testimonial cards on scroll
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.feature-card, .testimonial-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 150);
                }
            });
        }, {threshold: 0.2});

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
