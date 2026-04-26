<!DOCTYPE html>

<html class="" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#7ECBB5",
                        "primary-dim": "#6ab9a2",
                        "primary-container": "#55a68f",
                        "secondary": "#F5A84B",
                        "secondary-dim": "#e8963a",
                        "secondary-container": "#d4832a",
                        "tertiary": "#E8524A",
                        "tertiary-dim": "#d4433b",
                        "background": "#F5F0D8",
                        "surface": "#F5F0D8",
                        "surface-dim": "#ede8cf",
                        "surface-bright": "#faf7ec",
                        "surface-container": "#ede8cf",
                        "surface-container-low": "#f0ecda",
                        "surface-container-high": "#e5e0c8",
                        "surface-container-highest": "#ddd8c0",
                        "on-primary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-background": "#1a1a1a",
                        "on-surface": "#1a1a1a",
                        "on-surface-variant": "#5a5040",
                        "outline": "#a09880",
                        "outline-variant": "#ccc5aa"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Plus Jakarta Sans"],
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* removed material-symbols styles */

        .glass-panel {
            background: rgba(245, 240, 216, 0.85);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(126, 203, 181, 0.4);
        }

        .neon-glow-primary {
            box-shadow: 0px 20px 50px rgba(126, 203, 181, 0.5);
        }

        .neon-glow-secondary {
            box-shadow: 0px 20px 50px rgba(245, 168, 75, 0.5);
        }

        .cyber-grid {
            background-image: radial-gradient(circle at 2px 2px, rgba(126, 203, 181, 0.15) 1px, transparent 0);
            background-size: 40px 40px;
        }

        @media (max-width: 768px) {
            .cyber-grid {
                background-size: 24px 24px;
            }
        }

        /* Loading Screen Animations */
        .splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            animation: fadeOutSplash 0.8s ease-in-out 4s forwards;
        }

        .splash-container {
            position: relative;
            width: 400px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Circular text container */
        .circular-text-wrapper {
            position: absolute;
            width: 350px;
            height: 350px;
            animation: rotateCircularText 2s linear forwards;
        }

        .circular-text {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .circular-text span {
            position: absolute;
            left: 50%;
            top: 50%;
            font-size: 24px;
            font-weight: 900;
            letter-spacing: 3px;
            color: #7ECBB5;
            text-shadow: 0 0 30px rgba(126, 203, 181, 0.8);
            white-space: nowrap;
        }

        /* ERP word - flies to left */
        .erp-word {
            position: absolute;
            font-size: 32px;
            font-weight: 900;
            color: #7ECBB5;
            text-shadow: 0 0 40px rgba(126, 203, 181, 1);
            opacity: 0;
            animation: flyLeftScatter 1.5s ease-out 2s forwards;
        }

        /* SYSTEM word - flies to right */
        .system-word {
            position: absolute;
            font-size: 32px;
            font-weight: 900;
            color: #F5A84B;
            text-shadow: 0 0 40px rgba(245, 168, 75, 1);
            opacity: 0;
            animation: flyRightScatter 1.5s ease-out 2s forwards;
        }

        .lok-logo {
            position: absolute;
            font-size: 64px;
            font-weight: 900;
            color: #7ECBB5;
            text-shadow: 0 0 50px rgba(126, 203, 181, 1);
            animation: logoZoomBig 4s ease-in-out forwards;
            z-index: 10;
        }

        @keyframes rotateCircularText {
            0% {
                transform: rotate(0deg);
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                transform: rotate(360deg);
                opacity: 0;
            }
        }

        @keyframes flyLeftScatter {
            0% {
                transform: translate(0, 0) scale(1);
                opacity: 1;
            }
            50% {
                transform: translate(-200px, -50px) scale(0.8) rotate(-15deg);
                opacity: 0.6;
            }
            100% {
                transform: translate(-400px, -100px) scale(0.3) rotate(-30deg);
                opacity: 0;
            }
        }

        @keyframes flyRightScatter {
            0% {
                transform: translate(0, 0) scale(1);
                opacity: 1;
            }
            50% {
                transform: translate(200px, 50px) scale(0.8) rotate(15deg);
                opacity: 0.6;
            }
            100% {
                transform: translate(400px, 100px) scale(0.3) rotate(30deg);
                opacity: 0;
            }
        }

        @keyframes logoZoomBig {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }
            15% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1);
                opacity: 1;
            }
            75% {
                transform: scale(2.5);
                opacity: 1;
            }
            100% {
                transform: scale(3);
                opacity: 0;
            }
        }

        @keyframes fadeOutSplash {
            0% {
                opacity: 1;
                visibility: visible;
            }
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        body.splash-active {
            overflow: hidden;
        }

        /* Hero Section Animations */
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) translateX(0px);
            }
            33% {
                transform: translateY(-20px) translateX(10px);
            }
            66% {
                transform: translateY(10px) translateX(-10px);
            }
        }

        @keyframes float-delayed {
            0%, 100% {
                transform: translateY(0px) translateX(0px);
            }
            33% {
                transform: translateY(15px) translateX(-15px);
            }
            66% {
                transform: translateY(-10px) translateX(10px);
            }
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.3;
                transform: scale(1);
            }
            50% {
                opacity: 0.5;
                transform: scale(1.1);
            }
        }

        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradient-x {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.8s ease-out forwards;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 3s ease infinite;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
        }

        .animation-delay-600 {
            animation-delay: 0.6s;
        }

        .animation-delay-800 {
            animation-delay: 0.8s;
        }

        /* ===== Scroll Reveal Animations ===== */
        [data-reveal] { opacity: 0; will-change: transform, opacity; }
        [data-reveal="up"]    { transform: translateY(60px); }
        [data-reveal="down"]  { transform: translateY(-60px); }
        [data-reveal="left"]  { transform: translateX(80px); }
        [data-reveal="right"] { transform: translateX(-80px); }
        [data-reveal="scale"] { transform: scale(0.8); }
        [data-reveal="fade"]  { transform: none; }
        [data-reveal-delay="100"] { transition-delay: 0.1s; }
        [data-reveal-delay="200"] { transition-delay: 0.2s; }
        [data-reveal-delay="300"] { transition-delay: 0.3s; }
        [data-reveal-delay="400"] { transition-delay: 0.4s; }
        [data-reveal-delay="500"] { transition-delay: 0.5s; }
        [data-reveal-delay="600"] { transition-delay: 0.6s; }
        :root {
            --bs-primary: #7ECBB5;
            --bs-secondary: #F5A84B;
            --bs-link-color: #7ECBB5;
            --bs-link-hover-color: #6ab9a2;
        }
        a { color: inherit; }
        /* Force Tailwind color classes to override Bootstrap */
        .text-primary   { color: #7ECBB5 !important; }
        .text-secondary { color: #F5A84B !important; }
        .text-tertiary  { color: #E8524A !important; }
        .text-primary-dim { color: #6ab9a2 !important; }
        .bg-primary     { background-color: #7ECBB5 !important; }
        .bg-secondary   { background-color: #F5A84B !important; }
        .border-primary { border-color: #7ECBB5 !important; }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #ede8cf;
        }

        ::-webkit-scrollbar-thumb {
            background: #7ECBB5;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #6ab9a2;
        }

        /* Marquee Animation */
        .marquee-wrapper {
            overflow: hidden;
            position: relative;
        }

        .marquee-content {
            display: flex;
            animation: marquee 40s linear infinite;
            will-change: transform;
        }

        .marquee-content:hover {
            animation-play-state: paused;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary selection:text-on-primary overflow-x-hidden splash-active">
    <!-- Splash Screen -->
    <div class="splash-screen">
        <div class="splash-container">
            <!-- Circular Text (ERP SYSTEM) on circle border -->
            <div class="circular-text-wrapper">
                <div class="circular-text">
                    <!-- E -->
                    <span style="transform: translate(-50%, -50%) rotate(0deg) translateY(-175px) rotate(0deg);">E</span>
                    <!-- R -->
                    <span style="transform: translate(-50%, -50%) rotate(20deg) translateY(-175px) rotate(-20deg);">R</span>
                    <!-- P -->
                    <span style="transform: translate(-50%, -50%) rotate(40deg) translateY(-175px) rotate(-40deg);">P</span>
                    <!-- · -->
                    <span style="transform: translate(-50%, -50%) rotate(60deg) translateY(-175px) rotate(-60deg); font-size: 28px;">·</span>
                    <!-- S -->
                    <span style="transform: translate(-50%, -50%) rotate(80deg) translateY(-175px) rotate(-80deg);">S</span>
                    <!-- Y -->
                    <span style="transform: translate(-50%, -50%) rotate(100deg) translateY(-175px) rotate(-100deg);">Y</span>
                    <!-- S -->
                    <span style="transform: translate(-50%, -50%) rotate(120deg) translateY(-175px) rotate(-120deg);">S</span>
                    <!-- T -->
                    <span style="transform: translate(-50%, -50%) rotate(140deg) translateY(-175px) rotate(-140deg);">T</span>
                    <!-- E -->
                    <span style="transform: translate(-50%, -50%) rotate(160deg) translateY(-175px) rotate(-160deg);">E</span>
                    <!-- M -->
                    <span style="transform: translate(-50%, -50%) rotate(180deg) translateY(-175px) rotate(-180deg);">M</span>
                </div>
            </div>
            
            <!-- ERP word flying left -->
            <div class="erp-word">ERP</div>
            
            <!-- SYSTEM word flying right -->
            <div class="system-word">SYSTEM</div>
            
            <!-- LOK Logo in center -->
            <div class="lok-logo">LOK</div>
        </div>
    </div>

    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-primary/20 shadow-[0_4px_20px_rgba(126,203,181,0.15)]">
        <div class="px-4 md:px-12 py-4 max-w-7xl mx-auto">
            <div class="flex justify-between items-center">

                <!-- Hamburger (mobile only) -->
                <button onclick="openDrawer()" class="flex md:hidden items-center justify-center w-10 h-10 rounded-lg border border-primary/20 text-primary bg-transparent">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- Desktop: Left Links -->
                <div class="hidden md:flex items-center gap-2 flex-1">
                    <a href="#home"     class="font-bold text-sm text-on-surface hover:text-secondary transition-colors uppercase tracking-widest no-underline px-3">الرئيسية</a>
                    <a href="#features" class="font-bold text-sm text-on-surface-variant hover:text-secondary transition-colors uppercase tracking-widest no-underline px-3">المميزات</a>
                </div>

                <!-- Center Logo -->
                <div class="flex-shrink-0 mx-auto md:mx-0">
                    <a href="#home" class="no-underline">
                        <span class="text-2xl md:text-3xl font-extrabold tracking-tighter italic text-primary">LOK ERP</span>
                    </a>
                </div>

                <!-- Desktop: Right Links -->
                <div class="hidden md:flex items-center gap-2 flex-1 justify-end">
                    <a href="#solutions" class="font-bold text-sm text-on-surface-variant hover:text-secondary transition-colors uppercase tracking-widest no-underline px-3">الحلول</a>
                    <a href="#contact"   class="font-bold text-sm text-on-surface-variant hover:text-secondary transition-colors uppercase tracking-widest no-underline px-3">تواصل معنا</a>
                </div>

                <!-- Spacer mobile -->
                <div class="w-10 md:hidden"></div>
            </div>
        </div>
    </nav>

    <!-- Mobile Drawer Overlay -->
    <div id="drawerOverlay" onclick="closeDrawer()" class="fixed inset-0 bg-black/50 z-[998] hidden" style="backdrop-filter:blur(2px);"></div>

    <!-- Mobile Drawer (slides from right) -->
    <div id="mobileDrawer" class="fixed top-0 right-0 h-full w-72 bg-white z-[999] shadow-2xl flex flex-col" style="transform:translateX(100%); transition:transform 0.35s cubic-bezier(0.4,0,0.2,1);">
        <!-- Drawer Header -->
        <div class="flex items-center justify-between px-6 py-5 border-b border-primary/10">
            <span class="text-2xl font-extrabold tracking-tighter italic text-primary">LOK ERP</span>
            <button onclick="closeDrawer()" class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:text-primary hover:border-primary transition-all">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Drawer Links -->
        <nav class="flex flex-col gap-1 px-4 py-6 flex-1">
            <a href="#home"      onclick="closeDrawer()" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm text-on-surface hover:text-secondary hover:bg-primary/8 transition-all no-underline group">
                <i class="fa-solid fa-house text-primary/60 group-hover:text-secondary text-xl transition-colors"></i>
                الرئيسية
            </a>
            <a href="#features"  onclick="closeDrawer()" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm text-on-surface-variant hover:text-secondary hover:bg-primary/8 transition-all no-underline group">
                <i class="fa-solid fa-star text-primary/60 group-hover:text-secondary text-xl transition-colors"></i>
                المميزات
            </a>
            <a href="#solutions" onclick="closeDrawer()" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm text-on-surface-variant hover:text-secondary hover:bg-primary/8 transition-all no-underline group">
                <i class="fa-solid fa-grip text-primary/60 group-hover:text-secondary text-xl transition-colors"></i>
                الحلول
            </a>
            <a href="#contact"   onclick="closeDrawer()" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm text-on-surface-variant hover:text-secondary hover:bg-primary/8 transition-all no-underline group">
                <i class="fa-solid fa-envelope text-primary/60 group-hover:text-secondary text-xl transition-colors"></i>
                تواصل معنا
            </a>
        </nav>

        <!-- Drawer CTA -->
        <div class="px-4 pb-8">
            <a href="#contact" onclick="closeDrawer()" class="block w-full py-3 bg-primary text-on-primary font-bold text-center rounded-xl no-underline hover:bg-primary-dim transition-colors">
                ابدأ الآن مجاناً
            </a>
        </div>
    </div>
    <main class="cyber-grid pt-24">
        <!-- Hero Section -->
        <section id="home" class="relative min-h-[85vh] flex items-center justify-center overflow-hidden px-4 md:px-8 py-12 md:py-16">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <!-- Floating Orbs -->
                <div class="absolute top-20 left-10 w-72 h-72 bg-primary/30 rounded-full blur-[100px] animate-float"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-secondary/20 rounded-full blur-[120px] animate-float-delayed"></div>
                <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-tertiary/20 rounded-full blur-[80px] animate-pulse-slow"></div>
                
                <!-- Grid Lines -->
                <div class="absolute inset-0 bg-[linear-gradient(rgba(111,220,140,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(111,220,140,0.03)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_50%,black,transparent)]"></div>
            </div>

            <div class="container mx-auto relative z-10">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 md:px-6 py-2 md:py-3 rounded-full bg-primary/10 border border-primary/30 mb-6 md:mb-8 animate-fade-in-down">
                        <span class="w-2 h-2 bg-primary rounded-full animate-ping"></span>
                        <span class="text-primary font-bold text-xs md:text-sm tracking-wider">الجيل القادم من أنظمة ERP</span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="text-4xl md:text-7xl lg:text-8xl font-black mb-6 leading-tight animate-fade-in-up">
                        <span class="inline-block bg-gradient-to-r from-primary via-secondary to-tertiary bg-clip-text text-transparent animate-gradient-x">
                            نظام LOK ERP
                        </span>
                    </h1>

                    <!-- Subheading -->
                    <p class="text-lg md:text-3xl font-bold text-on-surface mb-4 animate-fade-in-up animation-delay-200">
                       Logistics Of Knowledge
                    </p>

                    <!-- Description -->
                    <p class="text-sm md:text-lg text-on-surface-variant max-w-3xl mx-auto mb-8 md:mb-12 leading-relaxed animate-fade-in-up animation-delay-400 px-2">
                        منصة متكاملة تجمع بين الذكاء الاصطناعي والأتمتة المتقدمة لتحويل عملياتك التشغيلية إلى تجربة سلسة وفعالة
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex justify-center mb-10 md:mb-16 animate-fade-in-up animation-delay-600 px-4 sm:px-0">
                        <a href="#contact" class="group relative px-6 md:px-10 py-3 md:py-5 bg-primary text-on-primary font-bold rounded-xl overflow-hidden transition-all hover:scale-105 hover:shadow-[0_0_40px_rgba(111,220,140,0.6)] no-underline inline-flex items-center gap-3">
                            ابدأ الآن مجاناً
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-[-4px] transition-transform"></i>
                            <div class="absolute inset-0 bg-gradient-to-r from-primary-dim to-primary-container opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </a>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6 max-w-4xl mx-auto animate-fade-in-up animation-delay-800">
                        <div class="glass-panel p-3 md:p-6 rounded-xl border border-primary/20 hover:border-primary/50 transition-all hover:scale-105 group text-center md:text-right">
                            <div class="text-2xl md:text-4xl font-black text-primary mb-1 md:mb-2 group-hover:scale-110 transition-transform">5000+</div>
                            <div class="text-xs md:text-sm text-on-surface-variant">شركة تثق بنا</div>
                        </div>
                        <div class="glass-panel p-3 md:p-6 rounded-xl border border-secondary/20 hover:border-secondary/50 transition-all hover:scale-105 group text-center md:text-right">
                            <div class="text-2xl md:text-4xl font-black text-secondary mb-1 md:mb-2 group-hover:scale-110 transition-transform">99.9%</div>
                            <div class="text-xs md:text-sm text-on-surface-variant">وقت التشغيل</div>
                        </div>
                        <div class="glass-panel p-3 md:p-6 rounded-xl border border-tertiary/20 hover:border-tertiary/50 transition-all hover:scale-105 group text-center md:text-right">
                            <div class="text-2xl md:text-4xl font-black text-tertiary mb-1 md:mb-2 group-hover:scale-110 transition-transform">24/7</div>
                            <div class="text-xs md:text-sm text-on-surface-variant">دعم فني</div>
                        </div>
                        <div class="glass-panel p-3 md:p-6 rounded-xl border border-primary-dim/20 hover:border-primary-dim/50 transition-all hover:scale-105 group text-center md:text-right">
                            <div class="text-2xl md:text-4xl font-black text-primary-dim mb-1 md:mb-2 group-hover:scale-110 transition-transform">40%</div>
                            <div class="text-xs md:text-sm text-on-surface-variant">توفير في التكاليف</div>
                        </div>
                    </div>
                </div>

                <!-- Floating Feature Cards -->
                <div class="absolute top-1/4 left-0 hidden xl:block animate-float">
                    <div class="glass-panel p-4 rounded-xl border border-primary/30 shadow-[0_0_30px_rgba(111,220,140,0.2)] max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-primary/20 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-gauge-high text-primary text-xl"></i>
                            </div>
                            <div>
                                <div class="text-xs text-on-surface-variant">سرعة معالجة</div>
                                <div class="text-lg font-bold text-primary">10x أسرع</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute top-1/3 right-0 hidden xl:block animate-float-delayed">
                    <div class="glass-panel p-4 rounded-xl border border-secondary/30 shadow-[0_0_30px_rgba(255,138,128,0.2)] max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-secondary/20 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-shield-halved text-secondary text-xl"></i>
                            </div>
                            <div>
                                <div class="text-xs text-on-surface-variant">أمان متقدم</div>
                                <div class="text-lg font-bold text-secondary">AES-256</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-1/4 left-1/4 hidden xl:block animate-float">
                    <div class="glass-panel p-4 rounded-xl border border-tertiary/30 shadow-[0_0_30px_rgba(255,213,79,0.2)] max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-tertiary/20 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-brain text-tertiary text-xl"></i>
                            </div>
                            <div>
                                <div class="text-xs text-on-surface-variant">اكثر من دول</div>
                                <div class="text-lg font-bold text-tertiary">6 +</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Solutions -->
        <section id="features" class="py-10 md:py-16 px-4 md:px-8 overflow-hidden ">
            <div class="container mx-auto">
                <div class="mb-10 text-center" data-reveal="up">
                    <h2 class="text-4xl font-bold mb-4">حلول مصممة لنموك</h2>
                    <p class="text-on-surface-variant text-lg max-w-2xl mx-auto mb-4">
                        نوفر أنظمة متكاملة تغطي كل جوانب عملك من إدارة العملاء إلى الموارد البشرية
                    </p>
                    <div class="h-1 w-24 bg-primary mx-auto rounded-full"></div>
                </div>
                
                <!-- Marquee Container -->
                <div class="relative">
                    <!-- Gradient Overlays -->
                    <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-background to-transparent z-10 pointer-events-none"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-background to-transparent z-10 pointer-events-none"></div>
                    
                    <!-- Marquee Wrapper -->
                    <div class="marquee-wrapper">
                        <div class="marquee-content">
                            <!-- First Set -->
                            <div class="inline-flex gap-8 px-4">
                    <!-- CRM -->
                    <div class="glass-panel p-6 rounded-xl border border-outline-variant/20 hover:border-primary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(111,220,140,0.3)] w-[350px] flex-shrink-0">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary/20 to-primary/10 rounded-xl flex items-center justify-center mb-4 text-primary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fa-solid fa-magnifying-glass-arrow-right text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-on-surface">نظام CRM</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed mb-3">
                            إدارة علاقات العملاء بذكاء - تتبع التفاعلات، تحليل السلوك، وزيادة المبيعات من خلال منصة موحدة
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">تتبع العملاء</span>
                            <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">إدارة المبيعات</span>
                            <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">تقارير ذكية</span>
                        </div>
                    </div>

                    <!-- HR -->
                    <div class="glass-panel p-6 rounded-xl border border-outline-variant/20 hover:border-secondary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,138,128,0.3)] w-[350px] flex-shrink-0">
                        <div class="w-14 h-14 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-xl flex items-center justify-center mb-4 text-secondary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fa-solid fa-id-badge text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-on-surface">نظام HR</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed mb-3">
                            إدارة الموارد البشرية الشاملة - من التوظيف والحضور إلى الرواتب والتقييم الوظيفي بكل سهولة
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">إدارة الحضور</span>
                            <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">الرواتب</span>
                            <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">التوظيف</span>
                        </div>
                    </div>

                    <!-- Finance -->
                    <div class="glass-panel p-6 rounded-xl border border-outline-variant/20 hover:border-tertiary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,213,79,0.3)] w-[350px] flex-shrink-0">
                        <div class="w-14 h-14 bg-gradient-to-br from-tertiary/20 to-tertiary/10 rounded-xl flex items-center justify-center mb-4 text-tertiary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fa-solid fa-building-columns text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-on-surface">الإدارة المالية</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed mb-3">
                            أتمتة كاملة للمحاسبة والتقارير المالية - من الفواتير إلى التقارير الضريبية بدقة عالية
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-tertiary/10 text-on-tertiary rounded-full">المحاسبة</span>
                            <span class="text-xs px-3 py-1 bg-tertiary/10 text-on-tertiary rounded-full">الفواتير</span>
                            <span class="text-xs px-3 py-1 bg-tertiary/10 text-on-tertiary rounded-full">التقارير</span>
                        </div>
                    </div>

                    <!-- Inventory -->
                    <div class="glass-panel p-6 rounded-xl border border-outline-variant/20 hover:border-primary-dim/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(91,201,120,0.3)] w-[350px] flex-shrink-0">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary-dim/20 to-primary-dim/10 rounded-xl flex items-center justify-center mb-4 text-primary-dim group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fa-solid fa-boxes-stacked text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-on-surface">إدارة المخزون</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed mb-3">
                            تحكم كامل في المخزون والمشتريات - تتبع المنتجات، إدارة الموردين، وتحسين سلسلة الإمداد
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-primary-dim/10 text-primary-dim rounded-full">المخازن</span>
                            <span class="text-xs px-3 py-1 bg-primary-dim/10 text-primary-dim rounded-full">المشتريات</span>
                            <span class="text-xs px-3 py-1 bg-primary-dim/10 text-primary-dim rounded-full">الموردين</span>
                        </div>
                    </div>

                    <!-- Analytics -->
                    <div class="glass-panel p-6 rounded-xl border border-outline-variant/20 hover:border-primary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(111,220,140,0.3)] w-[350px] flex-shrink-0">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary/20 to-primary/10 rounded-xl flex items-center justify-center mb-4 text-primary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fa-solid fa-chart-line text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-on-surface">تقارير ذكية</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed mb-3">
                            لوحة تحكم تعطيك رؤية شاملة عن أداء الشركة، المبيعات، والأرباح بضغطة زر واحدة
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">أداء الشركة</span>
                            <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">المبيعات</span>
                            <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">الأرباح</span>
                        </div>
                    </div>

                    <!-- Project Management -->
                    <div class="glass-panel p-6 rounded-xl border border-outline-variant/20 hover:border-secondary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,138,128,0.3)] w-[350px] flex-shrink-0">
                        <div class="w-14 h-14 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-xl flex items-center justify-center mb-4 text-secondary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            <i class="fa-solid fa-list-check text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-on-surface">إدارة المشاريع</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed mb-3">
                            تخطيط وتنفيذ المشاريع بكفاءة - تتبع المهام، إدارة الفرق، ومراقبة التقدم في الوقت الفعلي
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">المهام</span>
                            <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">الجدولة</span>
                            <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">التعاون</span>
                        </div>
                    </div>
                            </div>
                            
                            <!-- Duplicate Set for Seamless Loop -->
                            <div class="inline-flex gap-8 px-4">
                                <!-- Repeat all 6 cards here for seamless loop -->
                                <div class="glass-panel p-8 rounded-xl border border-outline-variant/20 hover:border-primary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(111,220,140,0.3)] w-[380px] flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-primary/20 to-primary/10 rounded-xl flex items-center justify-center mb-6 text-primary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-magnifying-glass-arrow-right text-4xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-3 text-on-surface">نظام CRM</h3>
                                    <p class="text-on-surface-variant text-sm leading-relaxed mb-4">إدارة علاقات العملاء بذكاء - تتبع التفاعلات، تحليل السلوك، وزيادة المبيعات من خلال منصة موحدة</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">تتبع العملاء</span>
                                        <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">إدارة المبيعات</span>
                                    </div>
                                </div>
                                <div class="glass-panel p-8 rounded-xl border border-outline-variant/20 hover:border-secondary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,138,128,0.3)] w-[380px] flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-xl flex items-center justify-center mb-6 text-secondary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-id-badge text-4xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-3 text-on-surface">نظام HR</h3>
                                    <p class="text-on-surface-variant text-sm leading-relaxed mb-4">إدارة الموارد البشرية الشاملة - من التوظيف والحضور إلى الرواتب والتقييم الوظيفي بكل سهولة</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">الحضور</span>
                                        <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">الرواتب</span>
                                    </div>
                                </div>
                                <div class="glass-panel p-8 rounded-xl border border-outline-variant/20 hover:border-tertiary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,213,79,0.3)] w-[380px] flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-tertiary/20 to-tertiary/10 rounded-xl flex items-center justify-center mb-6 text-tertiary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-building-columns text-4xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-3 text-on-surface">الإدارة المالية</h3>
                                    <p class="text-on-surface-variant text-sm leading-relaxed mb-4">أتمتة كاملة للمحاسبة والتقارير المالية - من الفواتير إلى التقارير الضريبية بدقة عالية</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="text-xs px-3 py-1 bg-tertiary/10 text-on-tertiary rounded-full">المحاسبة</span>
                                        <span class="text-xs px-3 py-1 bg-tertiary/10 text-on-tertiary rounded-full">الفواتير</span>
                                    </div>
                                </div>
                                <div class="glass-panel p-8 rounded-xl border border-outline-variant/20 hover:border-primary-dim/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(91,201,120,0.3)] w-[380px] flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-primary-dim/20 to-primary-dim/10 rounded-xl flex items-center justify-center mb-6 text-primary-dim group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-boxes-stacked text-4xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-3 text-on-surface">إدارة المخزون</h3>
                                    <p class="text-on-surface-variant text-sm leading-relaxed mb-4">تحكم كامل في المخزون والمشتريات - تتبع المنتجات، إدارة الموردين، وتحسين سلسلة الإمداد</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="text-xs px-3 py-1 bg-primary-dim/10 text-primary-dim rounded-full">المخازن</span>
                                        <span class="text-xs px-3 py-1 bg-primary-dim/10 text-primary-dim rounded-full">المشتريات</span>
                                    </div>
                                </div>
                                <div class="glass-panel p-8 rounded-xl border border-outline-variant/20 hover:border-primary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(111,220,140,0.3)] w-[380px] flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-primary/20 to-primary/10 rounded-xl flex items-center justify-center mb-6 text-primary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-chart-line text-4xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-3 text-on-surface">تقارير ذكية</h3>
                                    <p class="text-on-surface-variant text-sm leading-relaxed mb-4">لوحة تحكم تعطيك رؤية شاملة عن أداء الشركة، المبيعات، والأرباح بضغطة زر واحدة</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">أداء الشركة</span>
                                        <span class="text-xs px-3 py-1 bg-primary/10 text-primary rounded-full">المبيعات</span>
                                    </div>
                                </div>
                                <div class="glass-panel p-8 rounded-xl border border-outline-variant/20 hover:border-secondary/50 transition-all duration-300 group hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,138,128,0.3)] w-[380px] flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/20 to-secondary/10 rounded-xl flex items-center justify-center mb-6 text-secondary group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-list-check text-4xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold mb-3 text-on-surface">إدارة المشاريع</h3>
                                    <p class="text-on-surface-variant text-sm leading-relaxed mb-4">تخطيط وتنفيذ المشاريع بكفاءة - تتبع المهام، إدارة الفرق، ومراقبة التقدم في الوقت الفعلي</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">المهام</span>
                                        <span class="text-xs px-3 py-1 bg-secondary/10 text-secondary rounded-full">الجدولة</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard Preview -->
        <section class="py-12 md:py-20 px-4 md:px-8 overflow-hidden bg-gradient-to-b from-background to-surface-container-low">
            <div class="container mx-auto">
                <div class="text-center mb-16" data-reveal="up">
                    <span class="text-primary font-bold tracking-widest text-xs uppercase mb-4 block">واجهة المستخدم</span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">تجربة مستخدم من الجيل القادم</h2>
                    <p class="text-on-surface-variant text-lg max-w-2xl mx-auto">
                        واجهة بسيطة وسريعة وفعالة - صممت لتجعل عملك أسهل وأكثر إنتاجية
                    </p>
                </div>
                
                <div class="relative max-w-6xl mx-auto rounded-2xl overflow-hidden shadow-[0_0_100px_rgba(111,220,140,0.2)] border border-primary/30 group" data-reveal="scale">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                    
                    <!-- Image Container -->
                    <div class="relative overflow-hidden bg-gradient-to-br from-surface-dim to-surface-container">
                        <img alt="LOK ERP Interface"
                            class="w-full transform scale-100 group-hover:scale-105 transition-transform duration-700 ease-out"
                            data-alt="high-tech dark themed ERP dashboard interface on a desktop screen with neon glowing charts maps and data visualizations"
                            src="{{ asset('images/massarImage.WebP') }}" />
                    </div>
                    
                    <!-- Feature Highlights -->
                    <div class="absolute top-8 left-8 z-20 space-y-3">
                        <div class="glass-panel px-4 py-2 rounded-lg border border-primary/30 backdrop-blur-xl animate-fade-in-up">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                                <span class="text-sm font-bold text-on-surface">تحديث مباشر</span>
                            </div>
                        </div>
                        <div class="glass-panel px-4 py-2 rounded-lg border border-secondary/30 backdrop-blur-xl animate-fade-in-up animation-delay-200">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-bolt text-secondary text-sm"></i>
                                <span class="text-sm font-bold text-on-surface">استجابة فورية</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-6 mt-12 max-w-5xl mx-auto">
                    <div class="text-center p-6">
                        <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-hand-pointer text-primary text-3xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">سهولة الاستخدام</h4>
                        <p class="text-sm text-on-surface-variant">واجهة بديهية لا تحتاج تدريب معقد</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-laptop-mobile text-secondary text-3xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">متوافق مع كل الأجهزة</h4>
                        <p class="text-sm text-on-surface-variant">اعمل من أي مكان على أي جهاز</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="w-14 h-14 bg-tertiary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-palette text-tertiary text-3xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">تخصيص كامل</h4>
                        <p class="text-sm text-on-surface-variant">صمم لوحة التحكم حسب احتياجاتك</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Security & Privacy -->
        <section class="py-12 md:py-20 px-4 md:px-8 bg-surface-container-low relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent"></div>
            </div>

            <div class="container mx-auto grid lg:grid-cols-2 gap-10 md:gap-16 items-center relative z-10">
                <!-- Left: Text -->
                <div data-reveal="up">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 border border-secondary/30 text-secondary font-bold text-xs uppercase mb-6">
                        <i class="fa-solid fa-user-shield text-sm"></i>
                        أمان بمستوى عسكري
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        حماية بياناتك <span class="text-primary">أولويتنا القصوى</span>
                    </h2>
                    <p class="text-on-surface-variant text-lg mb-10 leading-relaxed">
                        نستخدم أحدث تقنيات التشفير والحماية لضمان أمان معلوماتك الحساسة على مدار الساعة
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-lock text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">تشفير البيانات (AES-256)</h4>
                                <p class="text-on-surface-variant text-sm">تأمين كامل للبيانات أثناء النقل والتخزين عبر HTTPS وتشفير داخلي قوي.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-user-gear text-secondary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">إدارة الصلاحيات</h4>
                                <p class="text-on-surface-variant text-sm">تحكم دقيق بصلاحيات كل مستخدم حسب دوره (عرض - إضافة - تعديل - حذف - طباعة).</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-tertiary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-cloud-arrow-up text-tertiary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">نسخ احتياطي واستعادة</h4>
                                <p class="text-on-surface-variant text-sm">نسخ دوري تلقائي مع إمكانية الاسترجاع الفوري لضمان استمرارية العمل.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-dim/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-chart-bar text-primary-dim text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">مراقبة وتسجيل العمليات</h4>
                                <p class="text-on-surface-variant text-sm">Activity Log كامل لتتبع كل العمليات، مع كشف ذكي للقيم غير الطبيعية والتنبيه بها فوراً.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-shield text-secondary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">حماية الطلبات والجلسات</h4>
                                <p class="text-on-surface-variant text-sm">CSRF Protection، منع XSS و SQL Injection، مع تتبع كامل لجلسات المستخدمين والأجهزة.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="relative hidden lg:block" data-reveal="up" data-reveal-delay="200">
                    <div class="aspect-square bg-gradient-to-br from-primary/30 via-secondary/20 to-tertiary/30 rounded-full animate-pulse-slow absolute inset-0 blur-[100px]"></div>
                    <div class="relative glass-panel p-16 rounded-2xl border border-primary/20 flex items-center justify-center group hover:border-primary/50 transition-all">
                        <div class="relative">
                            <i class="fa-solid fa-shield-halved text-[180px] text-primary drop-shadow-[0_0_50px_rgba(111,220,140,0.6)] group-hover:scale-110 transition-transform duration-500"></i>
                            <div class="absolute -top-4 -right-4 glass-panel px-3 py-2 rounded-lg border border-secondary/30 animate-float">
                                <div class="text-xs font-bold text-secondary">AES-256</div>
                            </div>
                            <div class="absolute -bottom-4 -left-4 glass-panel px-3 py-2 rounded-lg border border-tertiary/30 animate-float-delayed">
                                <div class="text-xs font-bold text-on-tertiary">CSRF Safe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Global Integrations -->
        <section id="solutions" class="py-12 md:py-20 px-4 md:px-8 relative overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-[120px] animate-pulse-slow"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary/10 rounded-full blur-[120px] animate-pulse-slow animation-delay-400"></div>
            </div>
            
            <div class="container mx-auto text-center relative z-10" data-reveal="up">
                <span class="inline-block px-4 py-2 rounded-full bg-primary/10 border border-primary/30 text-primary font-bold text-xs uppercase mb-6">
                    التكامل السلس
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">تكامل مع أدواتك المفضلة</h2>
                <p class="text-on-surface-variant text-lg max-w-2xl mx-auto mb-16">
                    اربط LOK ERP مع أكثر من 100+ تطبيق وخدمة بسهولة تامة
                </p>
                
                <div class="relative flex justify-center items-center min-h-[500px]">
                    <!-- Center Logo -->
                    <div class="absolute z-20 hidden md:block">
                        <div class="glass-panel w-32 h-32 rounded-2xl border border-primary/30 flex items-center justify-center shadow-[0_0_60px_rgba(111,220,140,0.4)] group hover:scale-110 transition-transform">
                            <span class="text-4xl font-black text-primary">LOK</span>
                        </div>
                    </div>
                    
                    <!-- Connecting Lines (desktop only) -->
                    <svg class="absolute inset-0 w-full h-full hidden md:block" style="z-index: 1;">
                        <defs>
                            <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#6fdc8c;stop-opacity:0.2" />
                                <stop offset="50%" style="stop-color:#6fdc8c;stop-opacity:0.6" />
                                <stop offset="100%" style="stop-color:#6fdc8c;stop-opacity:0.2" />
                            </linearGradient>
                        </defs>
                        <line x1="50%" y1="50%" x2="20%" y2="30%" stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="4,4"><animate attributeName="stroke-dashoffset" from="0" to="8" dur="1s" repeatCount="indefinite"/></line>
                        <line x1="50%" y1="50%" x2="80%" y2="30%" stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="4,4"><animate attributeName="stroke-dashoffset" from="0" to="8" dur="1s" repeatCount="indefinite"/></line>
                        <line x1="50%" y1="50%" x2="20%" y2="70%" stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="4,4"><animate attributeName="stroke-dashoffset" from="0" to="8" dur="1s" repeatCount="indefinite"/></line>
                        <line x1="50%" y1="50%" x2="80%" y2="70%" stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="4,4"><animate attributeName="stroke-dashoffset" from="0" to="8" dur="1s" repeatCount="indefinite"/></line>
                        <line x1="50%" y1="50%" x2="50%" y2="15%" stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="4,4"><animate attributeName="stroke-dashoffset" from="0" to="8" dur="1s" repeatCount="indefinite"/></line>
                        <line x1="50%" y1="50%" x2="50%" y2="85%" stroke="url(#lineGradient)" stroke-width="1" stroke-dasharray="4,4"><animate attributeName="stroke-dashoffset" from="0" to="8" dur="1s" repeatCount="indefinite"/></line>
                    </svg>
                    
                    <!-- Desktop: circle layout -->
                    <div class="relative w-full max-w-4xl aspect-square hidden md:block">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 animate-float">
                            <div class="glass-panel w-24 h-24 border border-primary/20 rounded-xl flex items-center justify-center hover:border-primary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Mazadi" class="w-12 h-12" src="{{ asset('/images/mazadi.WebP') }}" />
                            </div>
                        </div>
                        <div class="absolute top-[15%] right-[10%] animate-float-delayed">
                            <div class="glass-panel w-24 h-24 border border-secondary/20 rounded-xl flex items-center justify-center hover:border-secondary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Khadamat" class="w-12 h-12" src="{{ asset('/images/khadamat.WebP') }}" />
                            </div>
                        </div>
                        <div class="absolute top-[15%] left-[10%] animate-float">
                            <div class="glass-panel w-24 h-24 border border-tertiary/20 rounded-xl flex items-center justify-center hover:border-tertiary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Gas" class="w-12 h-12" src="{{ asset('/images/gas.WebP') }}" />
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 animate-float-delayed">
                            <div class="glass-panel w-24 h-24 border border-primary/20 rounded-xl flex items-center justify-center hover:border-primary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Massar" class="w-12 h-12" src="{{ asset('/images/massarImage.WebP') }}" />
                            </div>
                        </div>
                        <div class="absolute bottom-[15%] right-[10%] animate-float">
                            <div class="glass-panel w-24 h-24 border border-secondary/20 rounded-xl flex items-center justify-center hover:border-secondary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Academy" class="w-12 h-12" src="{{ asset('/images/academy.WebP') }}" />
                            </div>
                        </div>
                        <div class="absolute bottom-[15%] left-[10%] animate-float-delayed">
                            <div class="glass-panel w-24 h-24 border border-tertiary/20 rounded-xl flex items-center justify-center hover:border-tertiary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Kody" class="w-12 h-12 rounded-lg" src="{{ asset('/images/kody.WebP') }}" />
                            </div>
                        </div>
                    </div>

                    <!-- Mobile: grid layout -->
                    <div class="md:hidden w-full">
                        <!-- LOK center badge -->
                        <div class="flex justify-center mb-6">
                            <div class="glass-panel w-20 h-20 rounded-2xl border border-primary/30 flex items-center justify-center shadow-[0_0_40px_rgba(111,220,140,0.4)]">
                                <span class="text-2xl font-black text-primary">LOK</span>
                            </div>
                        </div>
                        <!-- 3x2 grid -->
                        <div class="grid grid-cols-3 gap-4 max-w-xs mx-auto">
                            <div class="glass-panel p-3 rounded-xl border border-primary/20 flex items-center justify-center aspect-square hover:scale-105 transition-all shadow-md">
                                <img alt="Mazadi" class="w-10 h-10 object-contain" src="{{ asset('/images/mazadi.WebP') }}" />
                            </div>
                            <div class="glass-panel p-3 rounded-xl border border-secondary/20 flex items-center justify-center aspect-square hover:scale-105 transition-all shadow-md">
                                <img alt="Khadamat" class="w-10 h-10 object-contain" src="{{ asset('/images/khadamat.WebP') }}" />
                            </div>
                            <div class="glass-panel p-3 rounded-xl border border-tertiary/20 flex items-center justify-center aspect-square hover:scale-105 transition-all shadow-md">
                                <img alt="Gas" class="w-10 h-10 object-contain" src="{{ asset('/images/gas.WebP') }}" />
                            </div>
                            <div class="glass-panel p-3 rounded-xl border border-primary/20 flex items-center justify-center aspect-square hover:scale-105 transition-all shadow-md">
                                <img alt="Massar" class="w-10 h-10 object-contain rounded-lg" src="{{ asset('/images/massarImage.WebP') }}" />
                            </div>
                            <div class="glass-panel p-3 rounded-xl border border-secondary/20 flex items-center justify-center aspect-square hover:scale-105 transition-all shadow-md">
                                <img alt="Academy" class="w-10 h-10 object-contain rounded-lg" src="{{ asset('/images/academy.WebP') }}" />
                            </div>
                            <div class="glass-panel p-3 rounded-xl border border-tertiary/20 flex items-center justify-center aspect-square hover:scale-105 transition-all shadow-md">
                                <img alt="Kody" class="w-10 h-10 object-contain rounded-lg" src="{{ asset('/images/kody.WebP') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Integration Stats -->
                <div class="grid md:grid-cols-3 gap-8 mt-12 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-5xl font-black text-primary mb-2">25+</div>
                        <div class="text-on-surface-variant">تطبيق متكامل</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-black text-secondary mb-2">API</div>
                        <div class="text-on-surface-variant">واجهة برمجية مفتوحة</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-black text-tertiary mb-2">15 دقائق</div>
                        <div class="text-on-surface-variant">وقت الإعداد</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <section class="py-12 md:py-20 px-4 md:px-8 bg-gradient-to-b from-surface-container-low/30 to-background overflow-hidden">
            <div class="container mx-auto">
                <div class="text-center mb-16" data-reveal="up">
                    <span class="inline-block px-4 py-2 rounded-full bg-secondary/10 border border-secondary/30 text-secondary font-bold text-xs uppercase mb-6">
                        آراء العملاء
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">ماذا يقول عملاؤنا</h2>
                    <p class="text-on-surface-variant text-lg max-w-2xl mx-auto">
                        تجارب حقيقية من شركات تعمل على LOK ERP
                    </p>
                </div>

                <!-- Slider Wrapper -->
                <div class="relative">
                    <!-- Prev Button -->
                    <button onclick="prevSlide()" class="absolute left-0 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white border-2 border-primary/30 flex items-center justify-center shadow-lg hover:bg-primary hover:border-primary transition-all group" style="margin-top:-10px;">
                        <i class="fa-solid fa-chevron-right text-primary group-hover:text-white transition-colors"></i>
                    </button>

                    <!-- Desktop: 3-card slider -->
                    <div class="hidden md:block relative flex items-center justify-center overflow-hidden mx-14" style="height:380px;" id="testimonialSlider">
                        <div class="testimonial-card absolute hidden xl:block" data-pos="-2"></div>
                        <div class="testimonial-card absolute" data-pos="-1"></div>
                        <div class="testimonial-card absolute" data-pos="0"></div>
                        <div class="testimonial-card absolute" data-pos="1"></div>
                        <div class="testimonial-card absolute hidden xl:block" data-pos="2"></div>
                    </div>

                    <!-- Mobile: single card -->
                    <div class="md:hidden mx-2" id="testimonialSliderMobile">
                        <div class="testimonial-card-mobile" style="transition: opacity 0.4s ease, transform 0.4s ease;"></div>
                    </div>

                    <!-- Next Button -->
                    <button onclick="nextSlide()" class="absolute right-0 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white border-2 border-primary/30 flex items-center justify-center shadow-lg hover:bg-primary hover:border-primary transition-all group" style="margin-top:-10px;">
                        <i class="fa-solid fa-chevron-left text-primary group-hover:text-white transition-colors"></i>
                    </button>
                </div>

                <!-- Dots -->
                <div class="flex justify-center gap-3 mt-8" id="testimonialDots"></div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center items-center gap-8 mt-12 pt-12 border-t border-outline-variant/20">
                    <div class="text-center">
                        <div class="text-3xl font-black text-primary mb-1">9.8/10</div>
                        <div class="text-sm text-on-surface-variant">متوسط التقييم</div>
                    </div>
                    <div class="h-12 w-px bg-outline-variant/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-black text-secondary mb-1">100%</div>
                        <div class="text-sm text-on-surface-variant">رضا العملاء</div>
                    </div>
                    <div class="h-12 w-px bg-outline-variant/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-black text-tertiary mb-1">14+ سنوات</div>
                        <div class="text-sm text-on-surface-variant">ولاء العملاء</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Journey -->
        <section id="contact" class="py-12 md:py-20 px-4 md:px-8 bg-gradient-to-b from-background to-surface-container-low">
            <div class="container mx-auto max-w-4xl">
                <div class="glass-panel p-10 md:p-12 rounded-2xl border border-primary/30 shadow-[0_0_60px_rgba(111,220,140,0.2)]" data-reveal="up">
                    <div class="text-center mb-10">
                        <span class="inline-block px-4 py-2 rounded-full bg-primary/10 border border-primary/30 text-primary font-bold text-xs uppercase mb-4">
                            تواصل معنا
                        </span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-3">ابدأ رحلة التحول الرقمي اليوم</h2>
                        <p class="text-on-surface-variant text-lg">فريقنا جاهز لمساعدتك في تخصيص الحل الأمثل لشركتك</p>
                    </div>
                    
                    <form id="contactForm" class="space-y-6" onsubmit="sendContactEmail(event)">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <i class="fa-solid fa-user text-sm"></i>
                                    الاسم الكامل
                                </label>
                                <input id="contactName"
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="أدخل اسمك هنا" type="text" required />
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <i class="fa-solid fa-envelope text-sm"></i>
                                    البريد الإلكتروني
                                </label>
                                <input id="contactEmail"
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="example@company.com" type="email" required />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <i class="fa-solid fa-building text-sm"></i>
                                    حجم الشركة
                                </label>
                                <select id="contactCompany"
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                    <option>1 - 50 موظف</option>
                                    <option>51 - 200 موظف</option>
                                    <option>201 - 500 موظف</option>
                                    <option>500+ موظف</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <i class="fa-solid fa-phone text-sm"></i>
                                    رقم الهاتف
                                </label>
                                <input id="contactPhone"
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="+20 123 456 7890" type="tel" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-comment text-sm"></i>
                                رسالتك
                            </label>
                            <textarea id="contactMessage"
                                class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"
                                placeholder="كيف يمكننا مساعدتك؟" rows="4"></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-4 bg-gradient-to-r from-primary via-primary-dim to-primary-container text-on-primary font-bold text-lg rounded-xl hover:scale-[1.02] active:scale-[0.98] transition-all shadow-[0_10px_40px_rgba(111,220,140,0.3)] flex items-center justify-center gap-3 group">
                            <span>إرسال الطلب</span>
                            <i class="fa-solid fa-paper-plane group-hover:translate-x-[-4px] transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-on-surface w-full">
        <!-- Top Section -->
        <div class="container mx-auto px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Brand -->
                <div class="space-y-5 lg:col-span-1">
                    <div>
                        <span class="text-4xl font-black text-primary italic">LOK ERP</span>
                        <p class="text-outline text-sm mt-3 leading-relaxed max-w-xs">
                            منصة متكاملة لإدارة موارد الشركات بأحدث التقنيات وأعلى معايير الأمان.
                        </p>
                    </div>
                    <!-- Social Icons -->
                    <div class="flex gap-3 pt-2">
                        <a href="#" class="w-10 h-10 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center hover:bg-primary hover:border-primary transition-all group">
                            <i class="fa-solid fa-envelope text-primary group-hover:text-on-primary text-lg transition-colors"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center hover:bg-primary hover:border-primary transition-all group">
                            <i class="fa-solid fa-phone text-primary group-hover:text-on-primary text-lg transition-colors"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center hover:bg-primary hover:border-primary transition-all group">
                            <i class="fa-solid fa-globe text-primary group-hover:text-on-primary text-lg transition-colors"></i>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div class="grid grid-cols-2 gap-8 lg:col-span-2">
                    <div class="space-y-4">
                        <h4 class="text-surface font-bold text-sm uppercase tracking-widest border-b border-primary/30 pb-2">الروابط السريعة</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-outline hover:text-primary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-primary/50 group-hover:text-primary transition-colors"></i>من نحن
                            </a></li>
                            <li><a href="#" class="text-outline hover:text-primary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-primary/50 group-hover:text-primary transition-colors"></i>المميزات
                            </a></li>
                            <li><a href="#" class="text-outline hover:text-primary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-primary/50 group-hover:text-primary transition-colors"></i>الأسعار
                            </a></li>
                            <li><a href="#" class="text-outline hover:text-primary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-primary/50 group-hover:text-primary transition-colors"></i>اتصل بنا
                            </a></li>
                        </ul>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-surface font-bold text-sm uppercase tracking-widest border-b border-secondary/30 pb-2">الدعم</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-outline hover:text-secondary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-secondary/50 group-hover:text-secondary transition-colors"></i>سياسة الخصوصية
                            </a></li>
                            <li><a href="#" class="text-outline hover:text-secondary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-secondary/50 group-hover:text-secondary transition-colors"></i>شروط الخدمة
                            </a></li>
                            <li><a href="#" class="text-outline hover:text-secondary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-secondary/50 group-hover:text-secondary transition-colors"></i>الدعم الفني
                            </a></li>
                            <li><a href="#" class="text-outline hover:text-secondary transition-colors text-sm flex items-center gap-2 group">
                                <i class="fa-solid fa-chevron-right text-sm text-secondary/50 group-hover:text-secondary transition-colors"></i>وثائق API
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-outline-variant/10 px-8 py-5">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-3">
                <p class="text-outline text-sm">© 2025 LOK ERP. جميع الحقوق محفوظة</p>
                <div class="flex items-center gap-2 text-outline text-sm">
                    <span>صنع بـ</span>
                    <span class="text-secondary text-base">❤️</span>
                    <span>في مصر</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Remove splash screen after animation completes
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.body.classList.remove('splash-active');
                const splashScreen = document.querySelector('.splash-screen');
                if (splashScreen) {
                    splashScreen.style.display = 'none';
                }
            }, 4800);
        });

        // ===== Testimonials Slider =====
        const testimonials = [
            {
                initial: 'أ', color: 'primary', name: 'أحمد الشريف',
                company: 'مجموعة الشريف للمقاولات', sub: 'عميل منذ 3 سنوات',
                role: 'المدير التنفيذي',
                rating: '10/10', stars: 5,
                text: '"LOK ERP غيّر طريقة إدارتنا بالكامل. كنا نضيع ساعات في التقارير اليدوية، دلوقتي كل حاجة في لحظة. الدعم الفني ممتاز وفريقهم دايماً موجود."'
            },
            {
                initial: 'س', color: 'secondary', name: 'سارة منصور',
                company: 'سلسلة صيدليات النور', sub: 'عميل منذ سنتين',
                role: 'مدير العمليات',
                rating: '10/10', stars: 5,
                text: '"إدارة المخزون والمبيعات بقت سهلة جداً. النظام بيتكيف مع احتياجاتنا وكل تحديث بيجيب حاجات جديدة مفيدة. أنصح بيه أي شركة تجارية."'
            },
            {
                initial: 'م', color: 'tertiary', name: 'محمد العمري',
                company: 'مصنع العمري للأغذية', sub: 'عميل منذ 4 سنوات',
                role: 'مدير المالية',
                rating: '9.5/10', stars: 5,
                text: '"التقارير المالية والمحاسبية بقت دقيقة 100%. وفّرنا وقت وجهد كبير جداً في نهاية كل شهر. النظام سهل الاستخدام حتى للموظفين الجدد."'
            },
            {
                initial: 'ن', color: 'primary', name: 'نورا إبراهيم',
                company: 'مركز نورا للتجميل', sub: 'عميل منذ سنة',
                role: 'صاحبة المشروع',
                rating: '10/10', stars: 5,
                text: '"كنت خايفة إن النظام يكون معقد، بس الفريق ساعدني من أول يوم. دلوقتي بتابع كل حاجة من موبايلي. أفضل قرار اتخذته لمشروعي."'
            },
            {
                initial: 'ك', color: 'secondary', name: 'كريم طاهر',
                company: 'شركة طاهر للاستيراد والتصدير', sub: 'عميل منذ سنتين',
                role: 'مدير المشتريات',
                rating: '9/10', stars: 4.5,
                text: '"إدارة الموردين والمشتريات بقت منظمة جداً. بنتابع كل أوردر من لحظة الطلب للاستلام. النظام وفّر علينا خسائر كتير من الأخطاء اليدوية."'
            },
            {
                initial: 'ه', color: 'tertiary', name: 'هاني سلامة',
                company: 'مجموعة سلامة العقارية', sub: 'عميل منذ 3 سنوات',
                role: 'المدير المالي',
                rating: '10/10', stars: 5,
                text: '"النظام قادر يتعامل مع حجم عملياتنا الكبير بكفاءة عالية. لوحة التحكم واضحة وبتعطيك صورة كاملة عن الشركة في ثواني. ممتاز جداً."'
            }
        ];

        const colorMap = {
            primary:   { bg: 'rgba(126,203,181,0.15)', border: 'rgba(126,203,181,0.5)',  text: '#7ECBB5',  shadow: '0 20px 60px rgba(126,203,181,0.35)' },
            secondary: { bg: 'rgba(245,168,75,0.15)',  border: 'rgba(245,168,75,0.5)',   text: '#F5A84B',  shadow: '0 20px 60px rgba(245,168,75,0.35)'  },
            tertiary:  { bg: 'rgba(232,82,74,0.15)',   border: 'rgba(232,82,74,0.5)',    text: '#E8524A',  shadow: '0 20px 60px rgba(232,82,74,0.35)'   }
        };

        function buildStars(count) {
            let html = '';
            for (let i = 0; i < Math.floor(count); i++)
                html += `<i class="fa-solid fa-star" style="color:#F5A84B;"></i>`;
            if (count % 1 !== 0)
                html += `<i class="fa-solid fa-star-half-stroke" style="color:#F5A84B;"></i>`;
            return html;
        }

        function buildCard(t) {
            const c = colorMap[t.color];
            return `
            <div style="background:rgba(255,252,245,0.97);border:2px solid ${c.border};border-radius:1.25rem;padding:2rem;box-sizing:border-box;height:100%;">
                <div style="font-size:3rem;line-height:1;color:${c.text};opacity:0.25;font-family:Georgia,serif;margin-bottom:0.5rem;">"</div>
                <p style="color:#3a3020;font-size:0.88rem;line-height:1.75;margin:0 0 1.25rem;">${t.text}</p>
                <div style="display:flex;align-items:center;gap:4px;margin-bottom:1.25rem;">
                    ${buildStars(t.stars)}
                    <span style="font-size:0.75rem;font-weight:700;color:${c.text};margin-right:6px;">${t.rating}</span>
                </div>
                <div style="display:flex;align-items:center;gap:0.75rem;padding-top:1rem;border-top:1px solid ${c.border};">
                    <div style="width:46px;height:46px;border-radius:50%;background:${c.bg};border:2px solid ${c.border};display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.2rem;font-weight:900;color:${c.text};">${t.initial}</div>
                    <div>
                        <p style="font-weight:700;font-size:0.9rem;color:#1a1a1a;margin:0;">${t.name}</p>
                        <p style="font-size:0.75rem;color:${c.text};font-weight:600;margin:0;">${t.role}</p>
                        <p style="font-size:0.7rem;color:#7a6a50;margin:0;">${t.company}</p>
                    </div>
                </div>
            </div>`;
        }

        let currentIndex = 0;
        let sliderTimer  = null;
        let isAnimating  = false;

        const POSITIONS = [-2, -1, 0, 1, 2];
        const GAP = 300;
        const SLOT = {
            scale:   { '-2': 0.72, '-1': 0.85, '0': 1,    '1': 0.85, '2': 0.72 },
            opacity: { '-2': 0,    '-1': 0.5,   '0': 1,    '1': 0.5,  '2': 0    },
            z:       { '-2': 1,    '-1': 3,     '0': 10,   '1': 3,    '2': 1    },
            blur:    { '-2': '6px','-1': '2px', '0': '0px','1': '2px','2': '6px'},
            width:   { '-2': 260,  '-1': 290,   '0': 360,  '1': 290,  '2': 260  },
        };

        function getCardStyle(pos, color) {
            const p = String(pos);
            return {
                transform:     `translateX(calc(${pos * GAP}px - 50%)) scale(${SLOT.scale[p]})`,
                opacity:       SLOT.opacity[p],
                zIndex:        SLOT.z[p],
                filter:        `blur(${SLOT.blur[p]})`,
                width:         SLOT.width[p] + 'px',
                pointerEvents: pos === 0 ? 'auto' : 'none',
                boxShadow:     pos === 0 ? colorMap[color].shadow : 'none',
            };
        }

        function updateMobileCard() {
            const mob = document.querySelector('.testimonial-card-mobile');
            if (!mob) return;
            mob.style.opacity   = '0';
            mob.style.transform = 'translateX(30px)';
            setTimeout(() => {
                mob.innerHTML       = buildCard(testimonials[currentIndex]);
                mob.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                mob.style.opacity   = '1';
                mob.style.transform = 'translateX(0)';
            }, 150);
        }

        function initCards() {
            document.querySelectorAll('.testimonial-card').forEach((card, i) => {
                const pos = POSITIONS[i];
                const idx = ((currentIndex + pos) % testimonials.length + testimonials.length) % testimonials.length;
                card.innerHTML = buildCard(testimonials[idx]);
                card.style.cssText = '';
                card.style.position  = 'absolute';
                card.style.top       = '50%';
                card.style.left      = '50%';
                card.style.marginTop = '-160px';
                card.style.transition = 'none';
                Object.assign(card.style, getCardStyle(pos, testimonials[idx].color));
            });
            updateMobileCard();
            updateDots();
        }

        function animateToIndex(newIndex) {
            if (isAnimating) return;
            isAnimating = true;
            const cards = document.querySelectorAll('.testimonial-card');
            const dir = ((newIndex - currentIndex) % testimonials.length + testimonials.length) % testimonials.length <= testimonials.length / 2 ? 1 : -1;

            // Update content
            cards.forEach((card, i) => {
                const newIdx = ((newIndex + POSITIONS[i]) % testimonials.length + testimonials.length) % testimonials.length;
                card.innerHTML = buildCard(testimonials[newIdx]);
            });

            // Snap to from-position
            cards.forEach((card, i) => {
                const fromPos = POSITIONS[i] - dir;
                const newIdx  = ((newIndex + POSITIONS[i]) % testimonials.length + testimonials.length) % testimonials.length;
                card.style.transition = 'none';
                Object.assign(card.style, getCardStyle(fromPos, testimonials[newIdx].color));
            });

            cards[0].getBoundingClientRect(); // force reflow

            // Animate to final
            cards.forEach((card, i) => {
                const newIdx = ((newIndex + POSITIONS[i]) % testimonials.length + testimonials.length) % testimonials.length;
                card.style.transition = 'transform 0.6s cubic-bezier(0.4,0,0.2,1), opacity 0.6s ease, filter 0.6s ease, box-shadow 0.6s ease, width 0.6s ease';
                Object.assign(card.style, getCardStyle(POSITIONS[i], testimonials[newIdx].color));
            });

            currentIndex = newIndex;
            updateMobileCard();
            updateDots();
            setTimeout(() => { isAnimating = false; }, 650);
        }

        function updateDots() {
            const dots = document.getElementById('testimonialDots');
            if (!dots) return;
            dots.innerHTML = '';
            testimonials.forEach((_, i) => {
                const d = document.createElement('button');
                d.style.cssText = `width:${i===currentIndex?'28px':'10px'};height:10px;border-radius:9999px;border:none;cursor:pointer;transition:all 0.3s;background:${i===currentIndex?'#7ECBB5':'#ccc5aa'};padding:0;`;
                d.addEventListener('click', () => { animateToIndex(i); resetTimer(); });
                dots.appendChild(d);
            });
        }

        function nextSlide() { animateToIndex((currentIndex + 1) % testimonials.length); resetTimer(); }
        function prevSlide() { animateToIndex((currentIndex - 1 + testimonials.length) % testimonials.length); resetTimer(); }

        function resetTimer() {
            clearInterval(sliderTimer);
            sliderTimer = setInterval(nextSlide, 8000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            initCards();
            resetTimer();

            // Swipe - desktop + mobile
            ['testimonialSlider', 'testimonialSliderMobile'].forEach(id => {
                const el = document.getElementById(id);
                if (!el) return;
                let sx = 0, sy = 0;
                el.addEventListener('touchstart', e => { sx = e.touches[0].clientX; sy = e.touches[0].clientY; }, { passive: true });
                el.addEventListener('touchend',   e => {
                    const dx = e.changedTouches[0].clientX - sx;
                    const dy = e.changedTouches[0].clientY - sy;
                    if (Math.abs(dx) < 40 || Math.abs(dx) < Math.abs(dy)) return;
                    dx < 0 ? nextSlide() : prevSlide();
                }, { passive: true });
            });
        });
        // ===== End Testimonials Slider =====

        function openDrawer() {
            document.getElementById('mobileDrawer').style.transform = 'translateX(0)';
            document.getElementById('drawerOverlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeDrawer() {
            document.getElementById('mobileDrawer').style.transform = 'translateX(100%)';
            document.getElementById('drawerOverlay').classList.add('hidden');
            document.body.style.overflow = '';
        }

        // ===== Scroll Reveal with GSAP =====
        (function() {
            // Fallback: if GSAP not loaded use simple observer
            if (typeof gsap === 'undefined') {
                const obs = new IntersectionObserver((entries) => {
                    entries.forEach(el => {
                        if (el.isIntersecting) {
                            el.target.style.transition = 'opacity 0.7s ease, transform 0.7s cubic-bezier(0.4,0,0.2,1)';
                            el.target.style.opacity = '1';
                            el.target.style.transform = 'none';
                            obs.unobserve(el.target);
                        }
                    });
                }, { threshold: 0.1 });
                document.querySelectorAll('[data-reveal]').forEach(el => obs.observe(el));
                return;
            }

            gsap.registerPlugin(ScrollTrigger);

            // Helper to get from-values per direction
            function getFrom(type) {
                const map = {
   
                 up:    { y: 70, x: 0,   scale: 1,    rotation: 0 },
                    down:  { y: -70, x: 0,  scale: 1,    rotation: 0 },
                    left:  { y: 0,  x: 90,  scale: 1,    rotation: 0 },
                    right: { y: 0,  x: -90, scale: 1,    rotation: 0 },
                    scale: { y: 0,  x: 0,   scale: 0.75, rotation: 0 },
                    fade:  { y: 0,  x: 0,   scale: 1,    rotation: 0 },
                };
                return map[type] || map.up;
            }

            document.querySelectorAll('[data-reveal]').forEach((el) => {
                const type  = el.getAttribute('data-reveal') || 'up';
                const delay = parseFloat(el.getAttribute('data-reveal-delay') || 0) / 1000;
                const from  = getFrom(type);

                gsap.fromTo(el,
                    { opacity: 0, ...from },
                    {
                        opacity: 1, y: 0, x: 0, scale: 1, rotation: 0,
                        duration: 0.9,
                        delay,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 88%',
                            toggleActions: 'play none none none',
                        }
                    }
                );
            });

            // ---- Extra flair: stagger children inside sections ----
            document.querySelectorAll('.grid > *, .space-y-6 > .flex').forEach((el, i) => {
                if (el.closest('[data-reveal]')) return; // skip if parent already animated
                gsap.fromTo(el,
                    { opacity: 0, y: 40 },
                    {
                        opacity: 1, y: 0,
                        duration: 0.7,
                        ease: 'power2.out',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 90%',
                            toggleActions: 'play none none none',
                        },
                        delay: (i % 4) * 0.1,
                    }
                );
            });

        })();
        // ===== End Scroll Reveal =====
        function sendContactEmail(e) {
            e.preventDefault();

            const name    = document.getElementById('contactName').value.trim();
            const email   = document.getElementById('contactEmail').value.trim();
            const company = document.getElementById('contactCompany').value;
            const phone   = document.getElementById('contactPhone').value.trim();
            const message = document.getElementById('contactMessage').value.trim();

            const subject = encodeURIComponent('طلب تواصل من: ' + name);
            const body = encodeURIComponent(
                'الاسم: ' + name + '\n' +
                'البريد الإلكتروني: ' + email + '\n' +
                'رقم الهاتف: ' + (phone || 'غير محدد') + '\n' +
                'حجم الشركة: ' + company + '\n\n' +
                'الرسالة:\n' + (message || 'لا توجد رسالة')
            );

            window.location.href = 'mailto:abdelhadeeladawy@gmail.com?subject=' + subject + '&body=' + body;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
