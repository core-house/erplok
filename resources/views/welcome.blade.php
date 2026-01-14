<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOK | Beyond ERP</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;500;700;900&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg: #000000;
            --glass: rgba(255, 255, 255, 0.05);
            --border: rgba(255, 255, 255, 0.1);
            --primary-glow: linear-gradient(135deg, #00C6FF, #0072FF);
            --accent-glow: linear-gradient(135deg, #7F00FF, #E100FF);
            --text: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Cairo', sans-serif; }

        body {
            background-color: var(--bg);
            color: var(--text);
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* --- خلفية الأورورا المتحركة --- */
        .ambient-light {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        .blob {
            position: absolute;
            filter: blur(80px);
            opacity: 0.6;
            animation: float 10s infinite alternate ease-in-out;
            border-radius: 50%;
        }
        .blob-1 { top: -10%; left: -10%; width: 500px; height: 500px; background: #7F00FF; animation-delay: 0s; }
        .blob-2 { bottom: -10%; right: -10%; width: 600px; height: 600px; background: #00C6FF; animation-delay: -5s; }
        .blob-3 { top: 40%; left: 40%; width: 400px; height: 400px; background: #E100FF; opacity: 0.4; animation-duration: 15s; }

        @keyframes float {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(30px, 50px) scale(1.1); }
        }

        /* --- Navbar --- */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            position: fixed;
            width: 100%;
            z-index: 100;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
        }
        .logo { font-size: 2rem; font-weight: 900; letter-spacing: -1px; text-transform: uppercase; }
        .logo span { background: var(--primary-glow); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        
        .nav-links a {
            color: rgba(255,255,255,0.7); text-decoration: none; margin-left: 30px; font-weight: 500; transition: 0.3s;
        }
        .nav-links a:hover { color: #fff; text-shadow: 0 0 10px rgba(255,255,255,0.5); }
        
        .btn-glow {
            padding: 10px 25px;
            background: var(--glass);
            border: 1px solid var(--border);
            color: white;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }
        .btn-glow::before {
            content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        .btn-glow:hover::before { left: 100%; }
        .btn-glow:hover { border-color: #00C6FF; box-shadow: 0 0 20px rgba(0, 198, 255, 0.4); }

        /* --- Hero Section --- */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
            position: relative;
        }

        .hero h1 {
            font-size: 5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            font-weight: 900;
        }
        
        /* تدرج لوني للنص */
        .gradient-text {
            background: linear-gradient(to right, #fff, #b4b4b4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero h1 span {
            display: block;
            background: var(--primary-glow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 6rem;
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.6);
            max-width: 600px;
            margin-bottom: 40px;
        }

        .cta-group { display: flex; gap: 20px; }
        
        .btn-primary {
            padding: 15px 40px;
            background: var(--primary-glow);
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: bold;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 114, 255, 0.3);
            transition: transform 0.3s;
        }
        .btn-primary:hover { transform: translateY(-3px) scale(1.05); box-shadow: 0 15px 40px rgba(0, 114, 255, 0.5); }

        /* --- Scroll Down Indicator --- */
        .scroll-down {
            position: absolute; bottom: 30px;
            animation: bounce 2s infinite; opacity: 0.5;
        }
        @keyframes bounce { 0%, 20%, 50%, 80%, 100% {transform: translateY(0);} 40% {transform: translateY(-10px);} 60% {transform: translateY(-5px);} }

        /* --- Stats / Cards Section --- */
        .section { padding: 100px 10%; position: relative; }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            perspective: 1000px; /* للـ 3D */
        }

        .card {
            background: var(--glass);
            border: 1px solid var(--border);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            transition: transform 0.1s; /* حركة سريعة مع الماوس */
            position: relative;
            overflow: hidden;
            /* للتأثير الظهور */
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out, border-color 0.3s;
        }

        .card.visible { opacity: 1; transform: translateY(0); }

        .card:hover { border-color: rgba(255, 255, 255, 0.3); }

        .card h3 { font-size: 1.8rem; margin-bottom: 15px; }
        .card p { color: rgba(255,255,255,0.6); line-height: 1.6; }
        
        .card-icon {
            font-size: 3rem; margin-bottom: 20px;
            background: var(--accent-glow); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }

        /* --- Footer --- */
        footer {
            text-align: center; padding: 50px; border-top: 1px solid var(--border); color: rgba(255,255,255,0.4); font-size: 0.9rem;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .hero h1 { font-size: 3rem; }
            .hero h1 span { font-size: 3.5rem; }
            nav { display: none; }
        }
    </style>
</head>
<body>

    <div class="ambient-light">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <nav>
        <div class="logo">LOK<span>.SYS</span></div>
        <div class="nav-links">
            <a href="#">الرئيسية</a>
            <a href="#">المنتجات</a>
            <a href="#">العملاء</a>
        </div>
        <a href="#" class="btn-glow">اتصل بنا</a>
    </nav>

    <section class="hero">
        <h1>لا تكتفِ بالمشاهدة<br><span>اصنع المستقبل</span></h1>
        <p class="gradient-text">نطور أنظمة ERP معقدة ببساطة الزجاج. قوة، سرعة، وتصميم لا يُنسى لشركتك.</p>
        <div class="cta-group">
            <button class="btn-primary">اطلب ديمو الآن</button>
            <a href="#" class="btn-glow" style="border-radius: 50px;">شاهد الفيديو</a>
        </div>
        <div class="scroll-down">↓</div>
    </section>

    <section class="section">
        <div class="grid-container">
            <div class="card js-tilt">
                <div class="card-icon">⚡</div>
                <h3>أداء خارق</h3>
                <p>نظامك يعمل بسرعة الضوء. واجهات React وتكنولوجيا Node.js تضمن استجابة فورية لأعقد العمليات الحسابية.</p>
            </div>
            <div class="card js-tilt">
                <div class="card-icon">💎</div>
                <h3>واجهة مذهلة</h3>
                <p>وداعاً لشاشات الـ ERP المملة. نقدم تجربة مستخدم (UX) تضاهي تطبيقات الآيفون في السلاسة والجمال.</p>
            </div>
            <div class="card js-tilt">
                <div class="card-icon">🔐</div>
                <h3>أمان سيبراني</h3>
                <p>بياناتك في حصن منيع. تشفير End-to-End وبروتوكولات حماية تتبع المعايير العالمية للبنوك.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>Designed for the Bold. © 2026 LOK Systems</p>
    </footer>

    <script>
        // 1. كود ظهور العناصر عند السكرول (Scroll Reveal)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });

        // 2. كود حركة الـ Tilt 3D للكروت بدون مكتبة خارجية
        document.querySelectorAll('.js-tilt').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                // حساب زاوية الدوران
                const xRotation = -1 * ((y - rect.height / 2) / 20); // عكسنا المحاور
                const yRotation = (x - rect.width / 2) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${xRotation}deg) rotateY(${yRotation}deg) scale(1.02)`;
                card.style.zIndex = 10;
            });

            card.addEventListener('mouseleave', () => {
                // إرجاع الكارت لوضعه الطبيعي
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
                card.style.zIndex = 1;
                setTimeout(() => { card.style.transition = 'transform 0.5s ease'; }, 100);
            });
            
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'none'; // إلغاء التنعيم وقت الحركة عشان تكون سريعة
            });
        });
    </script>
</body>
</html>