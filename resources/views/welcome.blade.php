<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERPLOK | الحل المتكامل</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #2563eb;
            --accent: #06b6d4;
            --dark: #0f172a;
            --darker: #020617;
            --light: #f8fafc;
            --gray: #94a3b8;
            --glass: rgba(30, 41, 59, 0.7);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Cairo', sans-serif; scroll-behavior: smooth; }

        body {
            background-color: var(--dark);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* --- Navbar --- */
        nav {
            position: fixed; top: 0; width: 100%; z-index: 1000;
            padding: 15px 5%;
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            display: flex; justify-content: space-between; align-items: center;
        }

        .logo { font-size: 1.5rem; font-weight: 900; color: #fff; text-transform: uppercase; letter-spacing: 1px; }
        .logo span { color: var(--accent); }

        .nav-links { display: flex; gap: 30px; }
        .nav-links a {
            color: var(--gray); text-decoration: none; font-weight: 600; transition: 0.3s;
            position: relative;
        }
        .nav-links a:hover { color: var(--accent); }
        .nav-links a::after {
            content: ''; position: absolute; width: 0; height: 2px; bottom: -5px; left: 0;
            background: var(--accent); transition: 0.3s;
        }
        .nav-links a:hover::after { width: 100%; }

        .btn-main {
            padding: 10px 25px; background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white; border-radius: 50px; text-decoration: none; font-weight: bold;
            box-shadow: 0 4px 15px rgba(6, 182, 212, 0.4); transition: 0.3s; border: none; cursor: pointer;
        }
        .btn-main:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(6, 182, 212, 0.6); }

        /* --- Hero Section --- */
        header {
            height: 100vh;
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), 
                        url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070&auto=format&fit=crop');
            background-size: cover; background-position: center; background-attachment: fixed;
            display: flex; align-items: center; justify-content: center; text-align: center;
            padding-top: 60px;
        }

        .hero-content h1 {
            font-size: 3.5rem; font-weight: 900; margin-bottom: 20px;
            background: linear-gradient(to right, #fff, var(--gray));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .hero-content p { font-size: 1.2rem; color: var(--gray); max-width: 700px; margin: 0 auto 40px auto; }

        /* --- General Section Styles --- */
        section { padding: 80px 10%; position: relative; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-size: 2.5rem; margin-bottom: 10px; color: #fff; }
        .section-title p { color: var(--accent); font-weight: bold; letter-spacing: 1px; text-transform: uppercase; }

        /* --- About Section (Split) --- */
        .about-container { display: flex; align-items: center; gap: 50px; flex-wrap: wrap; }
        .about-text { flex: 1; min-width: 300px; }
        .about-text h3 { font-size: 2rem; margin-bottom: 20px; line-height: 1.4; }
        .about-text p { color: var(--gray); margin-bottom: 20px; }
        
        .about-img { flex: 1; min-width: 300px; position: relative; }
        .about-img img {
            width: 100%; border-radius: 20px;
            box-shadow: -20px 20px 0 rgba(6, 182, 212, 0.1);
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* --- Features Section (Grid) --- */
        .features { background: var(--darker); }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        
        .card {
            background: var(--glass); padding: 40px 30px; border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.05); transition: 0.3s;
            position: relative; overflow: hidden;
        }
        .card:hover { transform: translateY(-10px); border-color: var(--accent); background: rgba(30, 41, 59, 0.9); }
        
        .icon-box {
            width: 60px; height: 60px; background: rgba(6, 182, 212, 0.1); color: var(--accent);
            display: flex; align-items: center; justify-content: center; border-radius: 15px;
            font-size: 1.5rem; margin-bottom: 25px;
        }
        .card h3 { margin-bottom: 15px; font-size: 1.3rem; }
        .card p { color: var(--gray); font-size: 0.95rem; }

        /* --- Showcase Section --- */
        .showcase { text-align: center; }
        .mockup-container {
            position: relative; margin-top: 40px;
            perspective: 1500px;
        }
        .mockup-img {
            width: 80%; border-radius: 15px;
            box-shadow: 0 50px 100px -20px rgba(0,0,0,0.5);
            border: 4px solid #334155;
            transform: rotateX(10deg); transition: 0.5s;
        }
        .mockup-container:hover .mockup-img { transform: rotateX(0deg) scale(1.02); }

        /* --- Stats Section --- */
        .stats {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            padding: 60px 10%; display: flex; justify-content: space-around; flex-wrap: wrap; gap: 30px;
            text-align: center; color: white;
        }
        .stat-item h3 { font-size: 3rem; font-weight: 900; margin-bottom: 5px; }
        .stat-item p { font-size: 1.1rem; opacity: 0.9; }

        /* --- Contact Section --- */
        .contact { background: #0b1120; text-align: center; }
        .contact-form {
            max-width: 600px; margin: 0 auto; background: var(--glass); padding: 40px; border-radius: 20px;
        }
        .input-group { margin-bottom: 20px; text-align: right; }
        .input-group input, .input-group textarea {
            width: 100%; padding: 15px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1);
            border-radius: 10px; color: white; font-size: 1rem; outline: none; transition: 0.3s;
        }
        .input-group input:focus, .input-group textarea:focus { border-color: var(--accent); }
        
        /* --- Footer --- */
        footer {
            background: #020617; padding: 40px 10%; text-align: center; border-top: 1px solid rgba(255,255,255,0.05);
            color: var(--gray);
        }
        .social-icons { margin-bottom: 20px; }
        .social-icons a { color: white; font-size: 1.2rem; margin: 0 10px; transition: 0.3s; }
        .social-icons a:hover { color: var(--accent); }

        @media(max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .about-container { flex-direction: column; }
            .nav-links { display: none; } /* Mobile Menu needs JS, hiding for simplicity */
            .mockup-img { width: 100%; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">ERP<span>LOK</span></div>
        <div class="nav-links">
            <a href="#home">الرئيسية</a>
            <a href="#about">من نحن</a>
            <a href="#features">المميزات</a>
            <a href="#contact">تواصل معنا</a>
        </div>
        <a href="#contact" class="btn-main">ابدأ الآن</a>
    </nav>

    <header id="home">
        <div class="hero-content">
            <h1>تحكم في مؤسستك <br> بذكاء اصطناعي</h1>
            <p>نظام LOK ليس مجرد برنامج محاسبي، إنه عقل رقمي يدير المبيعات، المخازن، والموظفين في منصة واحدة متكاملة.</p>
            <div style="display: flex; justify-content: center; gap: 15px;">
                <a href="#features" class="btn-main">اكتشف المميزات</a>
                <a href="#" style="color: white; padding: 10px 20px; border: 1px solid rgba(255,255,255,0.2); border-radius: 50px; text-decoration: none;">شاهد ديمو <i class="fas fa-play"></i></a>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="about-container">
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" alt="Team Work">
            </div>
            <div class="about-text">
                <p style="color: var(--accent); font-weight: bold;">/ عن LOK Systems</p>
                <h3>نبني أنظمة للمستقبل،<br>لأن الحاضر لا يكفي.</h3>
                <p>نحن شركة برمجيات متخصصة في حلول الـ ERP المبنية على تقنيات السحابة (Cloud). هدفنا هو تحويل العمليات الروتينية المملة إلى عمليات أوتوماتيكية سريعة.</p>
                <ul style="list-style: none; margin-bottom: 20px;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-left: 10px;"></i> دعم فني 24/7</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-left: 10px;"></i> واجهة عربية بالكامل</li>
                    <li><i class="fas fa-check-circle" style="color: var(--accent); margin-left: 10px;"></i> استضافة سحابية آمنة</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="section-title">
            <p>لماذا تختارنا</p>
            <h2>حلول مصممة لنموك</h2>
        </div>
        <div class="grid">
            <div class="card">
                <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                <h3>تقارير ذكية</h3>
                <p>لوحة تحكم تعطيك رؤية شاملة عن أداء الشركة، المبيعات، والأرباح بضغطة زر واحدة.</p>
            </div>
            <div class="card">
                <div class="icon-box"><i class="fas fa-shield-alt"></i></div>
                <h3>أمان عالي</h3>
                <p>بياناتك مشفرة ومحفوظة على سيرفرات مؤمنة ضد الاختراق وفقدان البيانات.</p>
            </div>
            <div class="card">
                <div class="icon-box"><i class="fas fa-mobile-alt"></i></div>
                <h3>تطبيق موبايل</h3>
                <p>تابع أعمالك من أي مكان في العالم عبر تطبيق الهاتف المتزامن مع النظام لحظياً.</p>
            </div>
        </div>
    </section>

    <div class="stats">
        <div class="stat-item">
            <h3>+500</h3>
            <p>شركة تعتمد علينا</p>
        </div>
        <div class="stat-item">
            <h3>99.9%</h3>
            <p>وقت تشغيل (Uptime)</p>
        </div>
        <div class="stat-item">
            <h3>+50K</h3>
            <p>فاتورة يومياً</p>
        </div>
    </div>

    <section class="showcase">
        <div class="section-title">
            <p>واجهة المستخدم</p>
            <h2>بساطة وقوة في آن واحد</h2>
        </div>
        <div class="mockup-container">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop" alt="Dashboard Mockup" class="mockup-img">
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="section-title">
            <p>ابدأ الآن</p>
            <h2>جاهز لتطوير عملك؟</h2>
        </div>
        <div class="contact-form">
            <form>
                <div class="input-group">
                    <input type="text" placeholder="اسم الشركة">
                </div>
                <div class="input-group">
                    <input type="email" placeholder="البريد الإلكتروني">
                </div>
                <div class="input-group">
                    <textarea rows="5" placeholder="تفاصيل احتياجاتك..."></textarea>
                </div>
                <button type="submit" class="btn-main" style="width: 100%;">إرسال الطلب</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p>جميع الحقوق محفوظة © 2026 LOK Systems</p>
        <p style="font-size: 0.8rem; margin-top: 10px;">Powered by Laravel v11</p>
    </footer>

</body>
</html>