<!DOCTYPE html>

<html class="" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#6fdc8c",
                        "primary-dim": "#5bc978",
                        "primary-container": "#47b664",
                        "secondary": "#ff8a80",
                        "secondary-dim": "#ff7066",
                        "secondary-container": "#ff564c",
                        "tertiary": "#ffd54f",
                        "tertiary-dim": "#ffc107",
                        "background": "#ffffff",
                        "surface": "#ffffff",
                        "surface-dim": "#fafafa",
                        "surface-bright": "#ffffff",
                        "surface-container": "#f5f5f5",
                        "surface-container-low": "#fafafa",
                        "surface-container-high": "#f0f0f0",
                        "surface-container-highest": "#ebebeb",
                        "on-primary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#5a3800",
                        "on-background": "#1a1a1a",
                        "on-surface": "#1a1a1a",
                        "on-surface-variant": "#666666",
                        "outline": "#b0b0b0",
                        "outline-variant": "#d9d9d9"
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

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(111, 220, 140, 0.4);
        }

        .neon-glow-primary {
            box-shadow: 0px 20px 50px rgba(111, 220, 140, 0.5);
        }

        .neon-glow-secondary {
            box-shadow: 0px 20px 50px rgba(255, 138, 128, 0.5);
        }

        .cyber-grid {
            background-image: radial-gradient(circle at 2px 2px, rgba(111, 220, 140, 0.15) 1px, transparent 0);
            background-size: 40px 40px;
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
            color: #6fdc8c;
            text-shadow: 0 0 30px rgba(111, 220, 140, 0.8);
            white-space: nowrap;
        }

        /* ERP word - flies to left */
        .erp-word {
            position: absolute;
            font-size: 32px;
            font-weight: 900;
            color: #6fdc8c;
            text-shadow: 0 0 40px rgba(111, 220, 140, 1);
            opacity: 0;
            animation: flyLeftScatter 1.5s ease-out 2s forwards;
        }

        /* SYSTEM word - flies to right */
        .system-word {
            position: absolute;
            font-size: 32px;
            font-weight: 900;
            color: #ff8a80;
            text-shadow: 0 0 40px rgba(255, 138, 128, 1);
            opacity: 0;
            animation: flyRightScatter 1.5s ease-out 2s forwards;
        }

        .lok-logo {
            position: absolute;
            font-size: 64px;
            font-weight: 900;
            color: #6fdc8c;
            text-shadow: 0 0 50px rgba(111, 220, 140, 1);
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

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f5f5f5;
        }

        ::-webkit-scrollbar-thumb {
            background: #6fdc8c;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #5bc978;
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
    <nav
        class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-primary/20 shadow-[0_10px_30px_rgba(168,230,207,0.15)]">
        <div class="flex justify-between items-center px-8 py-5 max-w-7xl mx-auto">
            <!-- Left Links -->
            <div class="flex gap-8 items-center flex-1">
                <a class="font-['Plus_Jakarta_Sans'] tracking-wider font-semibold text-sm text-on-surface hover:text-primary transition-colors uppercase"
                    href="#">Home</a>
                <a class="font-['Plus_Jakarta_Sans'] tracking-wider font-semibold text-sm text-on-surface-variant hover:text-primary transition-colors uppercase"
                    href="#">Features</a>
            </div>
            
            <!-- Center Logo -->
            <div class="flex-shrink-0">
                <span class="text-3xl font-extrabold tracking-tighter text-primary italic">LOK ERP</span>
            </div>
            
            <!-- Right Links -->
            <div class="flex gap-8 items-center flex-1 justify-end">
                <a class="font-['Plus_Jakarta_Sans'] tracking-wider font-semibold text-sm text-on-surface-variant hover:text-primary transition-colors uppercase"
                    href="#">Solutions</a>
                <a class="font-['Plus_Jakarta_Sans'] tracking-wider font-semibold text-sm text-on-surface-variant hover:text-primary transition-colors uppercase"
                    href="#">Contact</a>
            </div>
        </div>
    </nav>
    <main class="cyber-grid pt-24">
        <!-- Hero Section -->
        <section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden px-8 py-16">
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
                    <div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary/10 border border-primary/30 mb-8 animate-fade-in-down">
                        <span class="w-2 h-2 bg-primary rounded-full animate-ping"></span>
                        <span class="text-primary font-bold text-sm tracking-wider">الجيل القادم من أنظمة ERP</span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-6 leading-tight animate-fade-in-up">
                        <span class="inline-block bg-gradient-to-r from-primary via-secondary to-tertiary bg-clip-text text-transparent animate-gradient-x">
                            نظام LOK ERP
                        </span>
                    </h1>

                    <!-- Subheading -->
                    <p class="text-2xl md:text-3xl font-bold text-on-surface mb-4 animate-fade-in-up animation-delay-200">
                        حلول ذكية لإدارة أعمالك
                    </p>

                    <!-- Description -->
                    <p class="text-lg text-on-surface-variant max-w-3xl mx-auto mb-12 leading-relaxed animate-fade-in-up animation-delay-400">
                        منصة متكاملة تجمع بين الذكاء الاصطناعي والأتمتة المتقدمة لتحويل عملياتك التشغيلية إلى تجربة سلسة وفعالة
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-6 justify-center mb-16 animate-fade-in-up animation-delay-600">
                        <button class="group relative px-10 py-5 bg-primary text-on-primary font-bold rounded-xl overflow-hidden transition-all hover:scale-105 hover:shadow-[0_0_40px_rgba(111,220,140,0.6)]">
                            <span class="relative z-10 flex items-center gap-3">
                                ابدأ الآن مجاناً
                                <span class="material-symbols-outlined group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-primary-dim to-primary-container opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </button>
                        
                        <button class="group px-10 py-5 bg-transparent border-2 border-primary text-primary font-bold rounded-xl transition-all hover:bg-primary hover:text-on-primary hover:scale-105 hover:shadow-[0_0_40px_rgba(111,220,140,0.4)]">
                            <span class="flex items-center gap-3">
                                <span class="material-symbols-outlined">play_circle</span>
                                شاهد العرض التوضيحي
                            </span>
                        </button>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto animate-fade-in-up animation-delay-800">
                        <div class="glass-panel p-6 rounded-xl border border-primary/20 hover:border-primary/50 transition-all hover:scale-105 group">
                            <div class="text-4xl font-black text-primary mb-2 group-hover:scale-110 transition-transform">500+</div>
                            <div class="text-sm text-on-surface-variant">شركة تثق بنا</div>
                        </div>
                        <div class="glass-panel p-6 rounded-xl border border-secondary/20 hover:border-secondary/50 transition-all hover:scale-105 group">
                            <div class="text-4xl font-black text-secondary mb-2 group-hover:scale-110 transition-transform">99.9%</div>
                            <div class="text-sm text-on-surface-variant">وقت التشغيل</div>
                        </div>
                        <div class="glass-panel p-6 rounded-xl border border-tertiary/20 hover:border-tertiary/50 transition-all hover:scale-105 group">
                            <div class="text-4xl font-black text-tertiary mb-2 group-hover:scale-110 transition-transform">24/7</div>
                            <div class="text-sm text-on-surface-variant">دعم فني</div>
                        </div>
                        <div class="glass-panel p-6 rounded-xl border border-primary-dim/20 hover:border-primary-dim/50 transition-all hover:scale-105 group">
                            <div class="text-4xl font-black text-primary-dim mb-2 group-hover:scale-110 transition-transform">40%</div>
                            <div class="text-sm text-on-surface-variant">توفير في التكاليف</div>
                        </div>
                    </div>
                </div>

                <!-- Floating Feature Cards -->
                <div class="absolute top-1/4 left-0 hidden xl:block animate-float">
                    <div class="glass-panel p-4 rounded-xl border border-primary/30 shadow-[0_0_30px_rgba(111,220,140,0.2)] max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-primary/20 rounded-lg flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary text-xl">speed</span>
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
                                <span class="material-symbols-outlined text-secondary text-xl">security</span>
                            </div>
                            <div>
                                <div class="text-xs text-on-surface-variant">أمان متقدم</div>
                                <div class="text-lg font-bold text-secondary">256-bit</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-1/4 left-1/4 hidden xl:block animate-float">
                    <div class="glass-panel p-4 rounded-xl border border-tertiary/30 shadow-[0_0_30px_rgba(255,213,79,0.2)] max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-tertiary/20 rounded-lg flex items-center justify-center">
                                <span class="material-symbols-outlined text-tertiary text-xl">psychology</span>
                            </div>
                            <div>
                                <div class="text-xs text-on-surface-variant">ذكاء اصطناعي</div>
                                <div class="text-lg font-bold text-tertiary">AI-Powered</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
                <div class="flex flex-col items-center gap-2">
                    <span class="text-xs text-on-surface-variant font-bold">اكتشف المزيد</span>
                    <span class="material-symbols-outlined text-primary text-3xl">keyboard_arrow_down</span>
                </div>
            </div>
        </section>

        <!-- Core Solutions -->
        <section class="py-16 px-8 overflow-hidden ">
            <div class="container mx-auto">
                <div class="mb-10 text-center">
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
                            <span class="material-symbols-outlined text-3xl">person_search</span>
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
                            <span class="material-symbols-outlined text-3xl">badge</span>
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
                            <span class="material-symbols-outlined text-3xl">account_balance</span>
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
                            <span class="material-symbols-outlined text-3xl">inventory</span>
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
                            <span class="material-symbols-outlined text-3xl">analytics</span>
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
                            <span class="material-symbols-outlined text-3xl">task_alt</span>
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
                                        <span class="material-symbols-outlined text-4xl">person_search</span>
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
                                        <span class="material-symbols-outlined text-4xl">badge</span>
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
                                        <span class="material-symbols-outlined text-4xl">account_balance</span>
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
                                        <span class="material-symbols-outlined text-4xl">inventory</span>
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
                                        <span class="material-symbols-outlined text-4xl">analytics</span>
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
                                        <span class="material-symbols-outlined text-4xl">task_alt</span>
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
        <section class="py-20 px-8 overflow-hidden bg-gradient-to-b from-background to-surface-container-low">
            <div class="container mx-auto">
                <div class="text-center mb-16">
                    <span class="text-primary font-bold tracking-widest text-xs uppercase mb-4 block">واجهة المستخدم</span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">تجربة مستخدم من الجيل القادم</h2>
                    <p class="text-on-surface-variant text-lg max-w-2xl mx-auto">
                        واجهة بسيطة وسريعة وفعالة - صممت لتجعل عملك أسهل وأكثر إنتاجية
                    </p>
                </div>
                
                <div class="relative max-w-6xl mx-auto rounded-2xl overflow-hidden shadow-[0_0_100px_rgba(111,220,140,0.2)] border border-primary/30 group">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                    
                    <!-- Image Container -->
                    <div class="relative overflow-hidden bg-gradient-to-br from-surface-dim to-surface-container">
                        <img alt="LOK ERP Interface"
                            class="w-full transform scale-100 group-hover:scale-105 transition-transform duration-700 ease-out"
                            data-alt="high-tech dark themed ERP dashboard interface on a desktop screen with neon glowing charts maps and data visualizations"
                            src="{{ asset('images/massarImage.jpg') }}" />
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
                                <span class="material-symbols-outlined text-secondary text-sm">bolt</span>
                                <span class="text-sm font-bold text-on-surface">استجابة فورية</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-6 mt-12 max-w-5xl mx-auto">
                    <div class="text-center p-6">
                        <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-primary text-3xl">touch_app</span>
                        </div>
                        <h4 class="font-bold text-lg mb-2">سهولة الاستخدام</h4>
                        <p class="text-sm text-on-surface-variant">واجهة بديهية لا تحتاج تدريب معقد</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-secondary text-3xl">devices</span>
                        </div>
                        <h4 class="font-bold text-lg mb-2">متوافق مع كل الأجهزة</h4>
                        <p class="text-sm text-on-surface-variant">اعمل من أي مكان على أي جهاز</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="w-14 h-14 bg-tertiary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-tertiary text-3xl">palette</span>
                        </div>
                        <h4 class="font-bold text-lg mb-2">تخصيص كامل</h4>
                        <p class="text-sm text-on-surface-variant">صمم لوحة التحكم حسب احتياجاتك</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Security & Privacy -->
        <section class="py-20 px-8 bg-surface-container-low relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent"></div>
            </div>
            
            <div class="container mx-auto grid lg:grid-cols-2 gap-16 items-center relative z-10">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 border border-secondary/30 text-secondary font-bold text-xs uppercase mb-6">
                        <span class="material-symbols-outlined text-sm">verified_user</span>
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
                                <span class="material-symbols-outlined text-primary text-2xl" style="font-variation-settings: 'FILL' 1;">lock</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">تشفير من الطرف إلى الطرف</h4>
                                <p class="text-on-surface-variant text-sm">تشفير 256-bit لكل البيانات المتداولة والمخزنة باستخدام أحدث معايير الأمان العالمية</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-secondary text-2xl" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">التزام بالمعايير الدولية</h4>
                                <p class="text-on-surface-variant text-sm">متوافق تماماً مع GDPR و ISO 27001 ومعايير الأمن السيبراني المحلية والعالمية</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-tertiary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-tertiary text-2xl" style="font-variation-settings: 'FILL' 1;">backup</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">نسخ احتياطي تلقائي</h4>
                                <p class="text-on-surface-variant text-sm">نظام استعادة فوري للبيانات مع نسخ احتياطية متعددة لضمان استمرارية العمل</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-dim/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-primary-dim text-2xl" style="font-variation-settings: 'FILL' 1;">monitoring</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">مراقبة على مدار الساعة</h4>
                                <p class="text-on-surface-variant text-sm">فريق أمان متخصص يراقب النظام 24/7 للكشف عن أي تهديدات محتملة</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <!-- Animated Glow -->
                    <div class="aspect-square bg-gradient-to-br from-primary/30 via-secondary/20 to-tertiary/30 rounded-full animate-pulse-slow absolute inset-0 blur-[100px]"></div>
                    
                    <!-- Security Icon -->
                    <div class="relative glass-panel p-16 rounded-2xl border border-primary/20 flex items-center justify-center group hover:border-primary/50 transition-all">
                        <div class="relative">
                            <span class="material-symbols-outlined text-[180px] text-primary drop-shadow-[0_0_50px_rgba(111,220,140,0.6)] group-hover:scale-110 transition-transform duration-500"
                                style="font-variation-settings: 'FILL' 1;">shield_lock</span>
                            
                            <!-- Floating Badges -->
                            <div class="absolute -top-4 -right-4 glass-panel px-3 py-2 rounded-lg border border-secondary/30 animate-float">
                                <div class="text-xs font-bold text-secondary">ISO 27001</div>
                            </div>
                            <div class="absolute -bottom-4 -left-4 glass-panel px-3 py-2 rounded-lg border border-tertiary/30 animate-float-delayed">
                                <div class="text-xs font-bold text-on-tertiary">GDPR</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Global Integrations -->
        <section class="py-20 px-8 relative overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-[120px] animate-pulse-slow"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary/10 rounded-full blur-[120px] animate-pulse-slow animation-delay-400"></div>
            </div>
            
            <div class="container mx-auto text-center relative z-10">
                <span class="inline-block px-4 py-2 rounded-full bg-primary/10 border border-primary/30 text-primary font-bold text-xs uppercase mb-6">
                    التكامل السلس
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">تكامل مع أدواتك المفضلة</h2>
                <p class="text-on-surface-variant text-lg max-w-2xl mx-auto mb-16">
                    اربط LOK ERP مع أكثر من 100+ تطبيق وخدمة بسهولة تامة
                </p>
                
                <div class="relative flex justify-center items-center min-h-[500px]">
                    <!-- Center Logo -->
                    <div class="absolute z-20">
                        <div class="glass-panel w-32 h-32 rounded-2xl border border-primary/30 flex items-center justify-center shadow-[0_0_60px_rgba(111,220,140,0.4)] group hover:scale-110 transition-transform">
                            <span class="text-4xl font-black text-primary">LOK</span>
                        </div>
                    </div>
                    
                    <!-- Connecting Lines -->
                    <svg class="absolute inset-0 w-full h-full" style="z-index: 1;">
                        <defs>
                            <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#6fdc8c;stop-opacity:0.2" />
                                <stop offset="50%" style="stop-color:#6fdc8c;stop-opacity:0.6" />
                                <stop offset="100%" style="stop-color:#6fdc8c;stop-opacity:0.2" />
                            </linearGradient>
                        </defs>
                        <line x1="50%" y1="50%" x2="20%" y2="30%" stroke="url(#lineGradient)" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
                        </line>
                        <line x1="50%" y1="50%" x2="80%" y2="30%" stroke="url(#lineGradient)" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
                        </line>
                        <line x1="50%" y1="50%" x2="20%" y2="70%" stroke="url(#lineGradient)" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
                        </line>
                        <line x1="50%" y1="50%" x2="80%" y2="70%" stroke="url(#lineGradient)" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
                        </line>
                        <line x1="50%" y1="50%" x2="50%" y2="15%" stroke="url(#lineGradient)" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
                        </line>
                        <line x1="50%" y1="50%" x2="50%" y2="85%" stroke="url(#lineGradient)" stroke-width="2" stroke-dasharray="5,5">
                            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
                        </line>
                    </svg>
                    
                    <!-- Integration Icons in Circle -->
                    <div class="relative w-full max-w-4xl aspect-square">
                        <!-- Top -->
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 animate-float">
                            <div class="glass-panel w-24 h-24 border border-primary/20 rounded-xl flex items-center justify-center hover:border-primary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Slack" class="w-12 h-12 grayscale hover:grayscale-0 transition-all"
                                    data-alt="slack software icon"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDSeRsjUiyUNoGNEvm6bL2mMha3pFNOZi2InkrJzDSVVNjoXBP87KfQHUSuUo1MKDaKh4V0hiTa4CPlv8wY2rRW62vnERh1EdeyUxIbaCkPTzR4baWLmpV15dNGSJgmQUN4AByxp-MWE1_UFXlUUmwaBxvAc4dS0pcPwSLy5-j6QaqKD1F50i_wtJ_Po2Qpy0gjJLrlu8t0DFSQykV0K0D6E6bhzu8UsBdqD0NG1V3pItWq_Fv0jycuz25r1iWqJnwDHVxMFx_rB0" />
                            </div>
                        </div>
                        
                        <!-- Top Right -->
                        <div class="absolute top-[15%] right-[10%] animate-float-delayed">
                            <div class="glass-panel w-24 h-24 border border-secondary/20 rounded-xl flex items-center justify-center hover:border-secondary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Salesforce" class="w-12 h-12 grayscale hover:grayscale-0 transition-all"
                                    data-alt="salesforce cloud logo icon"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHRT6eXP0kzvEftrhAl35KDFhUo0J_zxm5qsbhlTeDZDsHzSqs_yVlyBvtftVmE-rPwdg1CoqQk2rHAYAWuYW1kNsNCEXerJflxn7f9oNKJRttXR6_i59imduOnGvKDsjj41s94_5s8gJjFXqcm0k0Q_G0Q_vnzx_CfkdLeU78tJRG_RECf1LFoTB-LV2kp--KNW4KqRxxLNGCZSzUdUyQo_hsZTiC3saoAJ1_p_us40M-CVU6uVxg8eZQ6gQ2rDmBzGRT3wPKRZs" />
                            </div>
                        </div>
                        
                        <!-- Top Left -->
                        <div class="absolute top-[15%] left-[10%] animate-float">
                            <div class="glass-panel w-24 h-24 border border-tertiary/20 rounded-xl flex items-center justify-center hover:border-tertiary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="SAP" class="w-12 h-12 grayscale hover:grayscale-0 transition-all"
                                    data-alt="sap enterprise software logo icon"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2U7Gq2adqeqyZr2hPCdfOW2uhdFRsa8mBYNXCDeX1xKkAaOxVsbn2YfpIz2kqr24RP54lCTMZgVJzfuC9bJAieL6dQEWIcIe4hg0oOUxUdSkcL2GcImz3BVSMlsD8TcJjK7PJvnMBqLyw0VAfm-IqZ8vu5paBAn-4FxwwZmOfYaRPYCG8nJK2lcRpZQXuV49TGFAlNk8znIAnLwZzihjcoIVhccaz_d43yBtJofYeft25XtqKt0f36wMj0izJ2K5s9eSo7Yxcb3U" />
                            </div>
                        </div>
                        
                        <!-- Bottom -->
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 animate-float-delayed">
                            <div class="glass-panel w-24 h-24 border border-primary/20 rounded-xl flex items-center justify-center hover:border-primary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Google" class="w-12 h-12 grayscale hover:grayscale-0 transition-all"
                                    data-alt="google workspace cloud logo icon"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAftsvp7zRKjDXZWD7v_t90IYSOTSixX0Yd9RKuy1jEdfROEBYigYdImHy_Qd5vyXGQTiu4jVtRk6DMJ0pYe_VrvuNcFDavMb9Dpx6rV6QOP3jIIvzpdVzUUkTr8pd1poDwSW2wl8wQ-vDd8YO7VEgQ5u8vSrQiFcYI86Zky--ns_44ggrlazHMpJ4R0gGNUgswn2EJzONAAfujbMkopYUn0O1qCN-U3ivlET-haVABs81lUDHDkZ7d-UAzPVFnx-wc_s166osEA18" />
                            </div>
                        </div>
                        
                        <!-- Bottom Right -->
                        <div class="absolute bottom-[15%] right-[10%] animate-float">
                            <div class="glass-panel w-24 h-24 border border-secondary/20 rounded-xl flex items-center justify-center hover:border-secondary/50 hover:scale-110 transition-all shadow-lg">
                                <img alt="Microsoft" class="w-12 h-12 grayscale hover:grayscale-0 transition-all"
                                    data-alt="microsoft logo icon"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8bHCHUVUQDOdhhZMSNWqTFCAjaS3KADF5fBWR_ngopvM8bAL2hAfG_VZC_tYz0Xw3XCNLBjcUZaR_aJnb6sgFBJ6g7OTEp5kFrwD4M49gBeIiCeOawvS_fjdgL7HcdWMmx6IhnDLHfCvecrY1-CHvR8jCjPUMDl_GxvJdj8N7_DVAHhpkizSGlGvvOL5zne54jgLX-bs1g0ClAMwVpl0MykqTUqj0y_IlR9dUhKyuPolS4d0AC3M1nTjZVPqxPg08bXiRJ6gwfLs" />
                            </div>
                        </div>
                        
                        <!-- Bottom Left -->
                        <div class="absolute bottom-[15%] left-[10%] animate-float-delayed">
                            <div class="glass-panel w-24 h-24 border border-tertiary/20 rounded-xl flex items-center justify-center hover:border-tertiary/50 hover:scale-110 transition-all shadow-lg">
                                <span class="material-symbols-outlined text-4xl text-on-surface">more_horiz</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Integration Stats -->
                <div class="grid md:grid-cols-3 gap-8 mt-12 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-5xl font-black text-primary mb-2">100+</div>
                        <div class="text-on-surface-variant">تطبيق متكامل</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-black text-secondary mb-2">API</div>
                        <div class="text-on-surface-variant">واجهة برمجية مفتوحة</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-black text-tertiary mb-2">5 دقائق</div>
                        <div class="text-on-surface-variant">وقت الإعداد</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <section class="py-20 px-8 bg-gradient-to-b from-surface-container-low/30 to-background">
            <div class="container mx-auto">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 rounded-full bg-secondary/10 border border-secondary/30 text-secondary font-bold text-xs uppercase mb-6">
                        آراء العملاء
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">ماذا يقول قادة التحول الرقمي</h2>
                    <p class="text-on-surface-variant text-lg max-w-2xl mx-auto">
                        انضم إلى مئات الشركات التي حولت أعمالها مع LOK ERP
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Testimonial 1 -->
                    <div class="glass-panel p-8 rounded-2xl border border-primary/20 hover:border-primary/50 transition-all duration-300 hover:scale-105 hover:shadow-[0_20px_60px_rgba(111,220,140,0.3)] group">
                        <div class="flex items-center gap-4 mb-6">
                            <img alt="Client" class="w-16 h-16 rounded-full object-cover ring-2 ring-primary/30 group-hover:ring-primary transition-all"
                                data-alt="portrait of a professional arab businessman in a modern office soft natural lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7ktcqCJxIGm4Fiz7LHFghgUlxIKAfds1_n6ZVNB7wYupYT-zrarlXnG48O52HVmAIbH1VL0ikKptZ5ysx3QLiKXiyKi_jej-ONXS4MPS73LhSZBNwm0RWASvry-JZoK-Pq2Gg-RDtJVcN9HwYxLrN6LI3qpBrp1xqI6pepTRrDxyPVhaU5oBktKMiyO5CBH7KSWhoZZ5y_oE7nArJu8uhwK6Bb7O3zgOEG3aSM6eLE_RVUGmWKcWTnnQXGJIsTkkpue2gPIokDfA" />
                            <div>
                                <p class="font-bold text-lg text-on-surface">أحمد المنصوري</p>
                                <p class="text-primary text-sm font-semibold">الرئيس التنفيذي</p>
                                <p class="text-on-surface-variant text-xs">تك-سلوشنز</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed italic">
                            "لقد نقل LOK ERP كفاءتنا التشغيلية لمستوى آخر تماماً. الأتمتة التي يوفرها النظام لا تقدر بثمن."
                        </p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="glass-panel p-8 rounded-2xl border border-secondary/20 hover:border-secondary/50 transition-all duration-300 hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,138,128,0.3)] group">
                        <div class="flex items-center gap-4 mb-6">
                            <img alt="Client" class="w-16 h-16 rounded-full object-cover ring-2 ring-secondary/30 group-hover:ring-secondary transition-all"
                                data-alt="professional businesswoman portrait modern office setting soft background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIV8VQM3df69_ILsS8EKtm4VsiaBSwhanT2SOroC4nJlIRJeJLzDQYLR9JMAgQkxKubQqh_scmdKcIVTxkYdd6JvxKbUs0LOMaifLxpl2yuUtaPxTLTuIN-R1EKtP8uTVwOEXbSFb3HVghIOzTswCJhGw92njcbMXhkh0DCJaSDl1KSPv7vehwSjIWWXLOT622QKUJwwA1QYDm3nxsBdpksSTHZ-QBzQ5hRIfCQuvKJuRfsNMODcWZoC4t33PIEfzeikdlVOmb4pk" />
                            <div>
                                <p class="font-bold text-lg text-on-surface">سارة الخالدي</p>
                                <p class="text-secondary text-sm font-semibold">مديرة العمليات</p>
                                <p class="text-on-surface-variant text-xs">نيو-لوجستيكس</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed italic">
                            "نظام التقارير والتحليلات دقيق جداً وساعدنا في توفير 30% من التكاليف التشغيلية خلال السنة الأولى."
                        </p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="glass-panel p-8 rounded-2xl border border-tertiary/20 hover:border-tertiary/50 transition-all duration-300 hover:scale-105 hover:shadow-[0_20px_60px_rgba(255,213,79,0.3)] group">
                        <div class="flex items-center gap-4 mb-6">
                            <img alt="Client" class="w-16 h-16 rounded-full object-cover ring-2 ring-tertiary/30 group-hover:ring-tertiary transition-all"
                                data-alt="mature professional man in suit smiling portrait high-end office lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnp0JB66Zi1jiDJs8Pr0ZoJj8Ea16IsHtAav9TducaIrYTWqxG3_FCx0ouPaftlVO0nbyRu0VNeRvWHMOoyAS0-LWB1cXyotZTmNZqeH8TPGw236Pa42hM0e43kL6Zm1UynP9Zqf63l7iYxK8xZAznsJ2o6St-LycjvtvwzakQmnQ3ecLZex8n7_TR-6gfReMS-1d0FqeRPism36u9BKwr3a6FID9GObIkuKtfD_JoAZeP4us1F9ZRhZhvmb75HQ1QfaM1JNtxJXM" />
                            <div>
                                <p class="font-bold text-lg text-on-surface">عمر فاروق</p>
                                <p class="text-tertiary text-sm font-semibold">رئيس قسم التكنولوجيا</p>
                                <p class="text-on-surface-variant text-xs">فيوتشر جروب</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-tertiary text-xl" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed italic">
                            "الأمان والخصوصية هما أهم ما يميز LOK. نشعر بالاطمئنان التام على بياناتنا الحساسة."
                        </p>
                    </div>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center items-center gap-8 mt-12 pt-12 border-t border-outline-variant/20">
                    <div class="text-center">
                        <div class="text-3xl font-black text-primary mb-1">4.9/5</div>
                        <div class="text-sm text-on-surface-variant">تقييم العملاء</div>
                    </div>
                    <div class="h-12 w-px bg-outline-variant/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-black text-secondary mb-1">98%</div>
                        <div class="text-sm text-on-surface-variant">رضا العملاء</div>
                    </div>
                    <div class="h-12 w-px bg-outline-variant/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-black text-tertiary mb-1">500+</div>
                        <div class="text-sm text-on-surface-variant">شركة راضية</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Journey -->
        <section class="py-20 px-8 bg-gradient-to-b from-background to-surface-container-low">
            <div class="container mx-auto max-w-4xl">
                <div class="glass-panel p-10 md:p-12 rounded-2xl border border-primary/30 shadow-[0_0_60px_rgba(111,220,140,0.2)]">
                    <div class="text-center mb-10">
                        <span class="inline-block px-4 py-2 rounded-full bg-primary/10 border border-primary/30 text-primary font-bold text-xs uppercase mb-4">
                            تواصل معنا
                        </span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-3">ابدأ رحلة التحول الرقمي اليوم</h2>
                        <p class="text-on-surface-variant text-lg">فريقنا جاهز لمساعدتك في تخصيص الحل الأمثل لشركتك</p>
                    </div>
                    
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">person</span>
                                    الاسم الكامل
                                </label>
                                <input
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="أدخل اسمك هنا" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">mail</span>
                                    البريد الإلكتروني
                                </label>
                                <input
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="example@company.com" type="email" />
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">business</span>
                                    حجم الشركة
                                </label>
                                <select
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                    <option>1 - 50 موظف</option>
                                    <option>51 - 200 موظف</option>
                                    <option>201 - 500 موظف</option>
                                    <option>500+ موظف</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">call</span>
                                    رقم الهاتف
                                </label>
                                <input
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                    placeholder="+20 123 456 7890" type="tel" />
                            </div>
                        </div>
                        
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary uppercase tracking-wider flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">chat</span>
                                رسالتك
                            </label>
                            <textarea
                                class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"
                                placeholder="كيف يمكننا مساعدتك؟" rows="4"></textarea>
                        </div>
                        
                        <button
                            type="submit"
                            class="w-full py-4 bg-gradient-to-r from-primary via-primary-dim to-primary-container text-on-primary font-bold text-lg rounded-xl hover:scale-[1.02] active:scale-[0.98] transition-all shadow-[0_10px_40px_rgba(111,220,140,0.3)] flex items-center justify-center gap-3 group">
                            <span>إرسال الطلب</span>
                            <span class="material-symbols-outlined group-hover:translate-x-[-4px] transition-transform">send</span>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-gradient-to-b from-surface-container-low to-[#0a0a0a] w-full border-t border-primary/10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-8 py-16">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="text-3xl font-black text-primary">LOK</span>
                        <span class="text-xl font-bold text-on-surface">ERP</span>
                    </div>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        منصة متكاملة لإدارة موارد الشركات بأحدث التقنيات العالمية ومعايير الأمن السيبراني المتقدمة
                    </p>
                    <div class="flex gap-3 pt-4">
                        <a href="#" class="w-10 h-10 bg-primary/10 hover:bg-primary/20 rounded-lg flex items-center justify-center transition-colors group">
                            <span class="material-symbols-outlined text-primary text-xl group-hover:scale-110 transition-transform">link</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary/10 hover:bg-secondary/20 rounded-lg flex items-center justify-center transition-colors group">
                            <span class="material-symbols-outlined text-secondary text-xl group-hover:scale-110 transition-transform">mail</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-tertiary/10 hover:bg-tertiary/20 rounded-lg flex items-center justify-center transition-colors group">
                            <span class="material-symbols-outlined text-on-tertiary text-xl group-hover:scale-110 transition-transform">call</span>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-4">
                    <h4 class="text-sm font-bold text-primary uppercase tracking-wider">الروابط السريعة</h4>
                    <ul class="space-y-3">
                        <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            من نحن
                        </a></li>
                        <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            المميزات
                        </a></li>
                        <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            الأسعار
                        </a></li>
                        <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            اتصل بنا
                        </a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="space-y-4">
                    <h4 class="text-sm font-bold text-secondary uppercase tracking-wider">الدعم القانوني</h4>
                    <ul class="space-y-3">
                        <li><a class="text-on-surface-variant hover:text-secondary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            سياسة الخصوصية
                        </a></li>
                        <li><a class="text-on-surface-variant hover:text-secondary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            شروط الخدمة
                        </a></li>
                        <li><a class="text-on-surface-variant hover:text-secondary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            وثائق API
                        </a></li>
                        <li><a class="text-on-surface-variant hover:text-secondary transition-colors text-sm flex items-center gap-2 group" href="#">
                            <span class="material-symbols-outlined text-xs group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
                            الدعم الفني
                        </a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="space-y-4">
                    <h4 class="text-sm font-bold text-tertiary uppercase tracking-wider">النشرة الإخبارية</h4>
                    <p class="text-on-surface-variant text-sm">اشترك للحصول على آخر التحديثات والعروض</p>
                    <div class="flex gap-2">
                        <input
                            class="flex-1 bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-sm text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                            placeholder="بريدك الإلكتروني" type="email" />
                        <button
                            class="bg-primary hover:bg-primary-dim px-6 py-3 rounded-lg text-on-primary font-bold text-sm transition-all hover:scale-105 flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">send</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="px-8 py-6 border-t border-outline-variant/20">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-on-surface-variant text-sm">
                        © 2024 LOK ERP. جميع الحقوق محفوظة
                    </p>
                    <div class="flex items-center gap-6">
                        <span class="text-on-surface-variant text-xs">صنع بـ</span>
                        <span class="text-primary text-xl">❤️</span>
                        <span class="text-on-surface-variant text-xs">في مصر</span>
                    </div>
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
            }, 4800); // 4s animation + 0.8s fade out
        });
    </script>
</body>

</html>
