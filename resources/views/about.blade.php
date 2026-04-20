<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>About - Go Green School</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#10b981",
                        "primary-light": "#34d399",
                        "primary-dark": "#059669",
                        "forest": "#064e3b",
                        "forest-light": "#065f46",
                        "sage": "#f0fdf4",
                        "mint": "#d1fae5",
                        "background-light": "#f8faf9",
                        "background-dark": "#022c22",
                        "accent-amber": "#f59e0b",
                        "accent-blue": "#3b82f6",
                        "accent-violet": "#8b5cf6",
                        "accent-rose": "#f43f5e",
                        "accent-teal": "#14b8a6",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Earth Button Animations */
        @keyframes earthSpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes earthPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
            50% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
        }
        .dev-earth-btn {
            animation: earthPulse 2s ease-in-out infinite;
            background: linear-gradient(135deg, rgba(16,185,129,0.1), rgba(6,78,59,0.1));
            cursor: pointer;
            position: relative;
        }
        .dev-earth-btn:hover span {
            animation: earthSpin 1s linear infinite;
            display: inline-block;
        }
        .dev-modal-overlay {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        .dev-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        .dev-modal-content {
            transform: scale(0.8) translateY(20px);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .dev-modal-overlay.active .dev-modal-content {
            transform: scale(1) translateY(0);
        }
        .dev-card {
            transition: all 0.3s ease;
        }
        .dev-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(16, 185, 129, 0.2);
        }
        .dev-card-img {
            transition: transform 0.5s ease;
            object-position: center 28%;
        }
        .dev-card:hover .dev-card-img {
            transform: scale(1.08);
        }

        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(18px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes floatLeaf {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-18px) rotate(8deg); }
            50% { transform: translateY(-8px) rotate(-5deg); }
            75% { transform: translateY(-22px) rotate(3deg); }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.3); }
            50% { box-shadow: 0 0 30px 10px rgba(16, 185, 129, 0.15); }
        }
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.05); }
            70% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }
        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .fade-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .fade-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .fade-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .fade-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .scale-in {
            opacity: 0;
            transform: scale(0.85);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }

        .stagger-children.visible > * {
            animation: fadeSlideUp 500ms ease-out forwards;
        }
        .stagger-children > *:nth-child(1) { animation-delay: 0ms; }
        .stagger-children > *:nth-child(2) { animation-delay: 120ms; }
        .stagger-children > *:nth-child(3) { animation-delay: 240ms; }
        .stagger-children > *:nth-child(4) { animation-delay: 360ms; }

        .glass-effect {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(6, 78, 59, 0.06);
            transition: background 0.3s, box-shadow 0.3s;
        }
        .glass-effect.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 30px rgba(6, 78, 59, 0.08);
        }

        .floating-leaf {
            animation: floatLeaf 6s ease-in-out infinite;
            pointer-events: none;
        }
        .floating-leaf:nth-child(2) { animation-delay: -2s; animation-duration: 7s; }
        .floating-leaf:nth-child(3) { animation-delay: -4s; animation-duration: 8s; }

        .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
        .spin-slow { animation: spinSlow 20s linear infinite; }

        .dot-pattern {
            background-image: radial-gradient(circle, rgba(16, 185, 129, 0.08) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .gradient-border { position: relative; }
        .gradient-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 1rem;
            padding: 2px;
            background: linear-gradient(135deg, #10b981, #064e3b, #10b981);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .gradient-border:hover::before { opacity: 1; }

        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mobile-menu.open { transform: translateX(0); }
        .mobile-overlay {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }
        .mobile-overlay.open {
            opacity: 1;
            pointer-events: all;
        }

        .scroll-top-btn {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s, transform 0.3s;
            pointer-events: none;
        }
        .scroll-top-btn.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: all;
        }

        .wave-divider { position: relative; overflow: hidden; }
        .wave-divider::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 60px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 1200 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 30 C300 60 600 0 900 30 C1050 45 1150 20 1200 30 L1200 60 L0 60Z' fill='%23f8faf9'/%3E%3C/svg%3E") no-repeat bottom;
            background-size: cover;
        }

        .quote-card::before {
            content: '\201C';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 80px;
            font-family: Georgia, serif;
            color: rgba(16, 185, 129, 0.12);
            line-height: 1;
            pointer-events: none;
        }

        .step-badge {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #10b981, #064e3b);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 14px;
            flex-shrink: 0;
            box-shadow: 0 4px 14px rgba(16, 185, 129, 0.3);
        }

        .program-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .program-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -12px rgba(16, 185, 129, 0.15);
        }

        /* Enhanced UI Effects */
        .gradient-text {
            background: linear-gradient(135deg, #10b981 0%, #064e3b 40%, #14b8a6 60%, #10b981 100%);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 6s ease-in-out infinite;
        }
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .mesh-gradient {
            background:
                radial-gradient(circle at 20% 50%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
        }

        .nav-gradient-line { position: relative; }
        .nav-gradient-line::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent 0%, #10b981 20%, #3b82f6 50%, #8b5cf6 80%, transparent 100%);
            opacity: 0.3;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 25px 50px -12px rgba(16, 185, 129, 0.15);
        }

        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(16, 185, 129, 0.2), 0 0 60px rgba(16, 185, 129, 0.1);
        }

        .section-divider {
            height: 6px;
            background: linear-gradient(90deg, transparent, #10b981, #3b82f6, #8b5cf6, transparent);
            opacity: 0.15;
            border-radius: 3px;
            margin: 0 auto;
            max-width: 200px;
        }

        /* Smooth section background gradient transitions */
        .bg-section-sage-30 {
            background: linear-gradient(to bottom, #f8faf9 0%, rgba(240, 253, 244, 0.3) 12%, rgba(240, 253, 244, 0.3) 88%, #f8faf9 100%);
        }
        .bg-section-sage-50 {
            background: linear-gradient(to bottom, #f8faf9 0%, rgba(240, 253, 244, 0.5) 12%, rgba(240, 253, 244, 0.5) 88%, #f8faf9 100%);
        }

        @keyframes floatParticle {
            0%, 100% { transform: translate(0, 0) scale(1); opacity: 0.6; }
            25% { transform: translate(10px, -20px) scale(1.1); opacity: 0.8; }
            50% { transform: translate(-5px, -35px) scale(0.9); opacity: 0.4; }
            75% { transform: translate(15px, -15px) scale(1.05); opacity: 0.7; }
        }
        .float-particle {
            animation: floatParticle 8s ease-in-out infinite;
            pointer-events: none;
        }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f8faf9; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #10b981, #064e3b); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #059669; }
    </style>
</head>
<body class="bg-background-light font-display text-forest selection:bg-primary/30">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">

            <!-- Navigation Bar -->
            <nav class="fixed top-0 left-0 w-full z-50 glass-effect nav-gradient-line px-6 md:px-20 lg:px-40 py-4">
                <div class="max-w-7xl mx-auto flex items-center justify-between">
                    <div class="flex items-center gap-10">
                        <a class="flex items-center gap-2 group" href="/">
                            <div class="size-10 flex items-center justify-center">
                                <img alt="Go Green School Logo" class="w-full h-full object-contain" src="/images/logo2-removebg-preview.png"/>
                            </div>
                            <h2 class="text-forest text-xl font-extrabold tracking-tight">Go Green School</h2>
                        </a>
                        <div class="hidden lg:flex items-center gap-8">
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/" data-i18n="nav_home">Home</a>
                            <a class="text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About</a>
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/program" data-i18n="nav_program">Program</a>
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/contact" data-i18n="nav_contact">Contact</a>
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/kalkulator" data-i18n="nav_calculator">Calculator</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="flex bg-forest/5 p-1 rounded-full border border-forest/10">
                            <button id="btn-en" onclick="setLanguage('en')" class="flex min-w-[40px] cursor-pointer items-center justify-center rounded-full h-8 px-3 bg-primary text-white text-xs font-bold transition-all"><span>EN</span></button>
                            <button id="btn-id" onclick="setLanguage('id')" class="flex min-w-[40px] cursor-pointer items-center justify-center rounded-full h-8 px-3 text-forest/60 text-xs font-bold hover:bg-forest/10 transition-all"><span>ID</span></button>
                        </div>
                        <a href="/" class="hidden md:flex bg-primary hover:bg-forest text-white px-6 py-2.5 rounded-full text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5 items-center gap-2">
                            <span class="material-symbols-outlined text-lg">home</span>
                            <span data-i18n="nav_back_home">Back to Home</span>
                        </a>
                        <!-- Earth Dev Button -->
                        <div class="flex items-center gap-2">
                            <button onclick="openDevModal()" class="dev-earth-btn flex items-center justify-center size-10 rounded-full hover:scale-110 transition-all duration-300" title="Meet the Developers">
                                <span class="text-2xl">🌍</span>
                            </button>
                            <span class="hidden lg:inline text-xs font-semibold text-forest/70 whitespace-nowrap" data-i18n="nav_profile_hint">Developer Profile</span>
                        </div>
                        <button id="mobile-menu-btn" class="lg:hidden flex items-center justify-center size-10 rounded-xl hover:bg-forest/5 transition-colors">
                            <span class="material-symbols-outlined text-2xl text-forest">menu</span>
                        </button>
                    </div>
                </div>
            </nav>
            <!-- Mobile Menu Overlay -->
            <div id="mobile-overlay" class="mobile-overlay fixed inset-0 bg-black/50 z-[60]"></div>
            <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-72 bg-white z-[70] shadow-2xl p-8 flex flex-col">
                <div class="flex items-center justify-between mb-10">
                    <h3 class="text-forest text-lg font-extrabold">Menu</h3>
                    <button id="mobile-menu-close" class="size-10 flex items-center justify-center rounded-xl hover:bg-forest/5 transition-colors">
                        <span class="material-symbols-outlined text-2xl text-forest">close</span>
                    </button>
                </div>
                <div class="flex flex-col gap-6">
                    <a class="text-forest hover:text-primary text-base font-semibold transition-colors flex items-center gap-3" href="/">
                        <span class="material-symbols-outlined text-primary">home</span> <span data-i18n="nav_home">Home</span>
                    </a>
                    <a class="text-forest hover:text-primary text-base font-semibold transition-colors flex items-center gap-3" href="/about">
                        <span class="material-symbols-outlined text-primary">info</span> <span data-i18n="nav_about">About</span>
                    </a>
                    <a class="text-forest hover:text-primary text-base font-semibold transition-colors flex items-center gap-3" href="/program">
                        <span class="material-symbols-outlined text-primary">eco</span> <span data-i18n="nav_program">Program</span>
                    </a>
                    <a class="text-forest hover:text-primary text-base font-semibold transition-colors flex items-center gap-3" href="/contact">
                        <span class="material-symbols-outlined text-primary">mail</span> <span data-i18n="nav_contact">Contact</span>
                    </a>
                    <a class="text-forest hover:text-primary text-base font-semibold transition-colors flex items-center gap-3" href="/kalkulator">
                        <span class="material-symbols-outlined text-primary">calculate</span> <span data-i18n="nav_calculator">Calculator</span>
                    </a>
                </div>
                <div class="mt-auto">
                    <a href="/" class="flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white w-full py-3 rounded-xl text-sm font-bold shadow-lg transition-all">
                        <span class="material-symbols-outlined text-lg">home</span>
                        <span data-i18n="nav_back_home">Back to Home</span>
                    </a>
                </div>
            </div>

            <!-- Floating Leaf Decorations -->
            <div class="floating-leaf fixed top-32 left-8 text-4xl opacity-20 z-10">🍃</div>
            <div class="floating-leaf fixed top-96 right-12 text-3xl opacity-15 z-10">🌿</div>
            <div class="floating-leaf fixed bottom-40 left-16 text-2xl opacity-10 z-10">🌱</div>
            <div class="float-particle fixed top-[30%] right-[18%] w-3 h-3 bg-primary/20 rounded-full z-10" style="animation-delay: -2s;"></div>
            <div class="float-particle fixed top-[60%] left-[22%] w-2 h-2 bg-accent-blue/20 rounded-full z-10" style="animation-delay: -5s; animation-duration: 10s;"></div>

            <main class="flex flex-col flex-1 pt-24">

                <!-- Page Hero -->
                <section class="relative px-4 md:px-20 lg:px-40 pt-16 pb-12">
                    <div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute top-20 right-0 w-96 h-96 bg-forest/5 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute inset-0 mesh-gradient -z-10"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: -1;"></div>
                    <div class="max-w-7xl mx-auto text-center">
                        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                            <span class="material-symbols-outlined text-base">info</span>
                            <span data-i18n="about_badge">About Us</span>
                        </div>
                        <h1 class="text-forest text-4xl md:text-6xl font-black tracking-tight leading-[1.1] mb-4"><span data-i18n="about_title_prefix">About</span> <span class="gradient-text">Go Green School</span></h1>
                        <p class="text-forest/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" data-i18n="about_subtitle">Educating the next generation to care for our planet through innovative green programs and sustainable practices.</p>
                        <div class="section-divider mt-8"></div>
                    </div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-32 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>
                </section>

                <!-- About Section -->
                <section class="px-4 md:px-20 lg:px-40 py-12">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                            <div>
                                <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="about_who_label">Who We Are</span>
                                <h2 class="text-forest text-3xl md:text-4xl font-black tracking-tight mt-3 mb-6" data-i18n="about_who_title">Our Story</h2>
                                <div class="space-y-4 text-forest/60 text-base leading-relaxed">
                                    <p data-i18n="about_who_p1">Go Green School Web is an educational website that provides information about waste management and environmental programs at school. This website has several features such as the Home page which contains a brief explanation of the program, the About page which explains the goals and vision, the Program page which discusses organic, inorganic, and hazardous (B3) waste management, as well as 3R Education, Gallery, News, and Contact features.</p>
                                    <p data-i18n="about_who_p2">Through this website, students and teachers can learn and practice environmentally friendly habits to create a clean and green school. A Go Green School is a school that cares about the environment and encourages students to protect nature. One important activity is waste management, which helps reduce pollution and keeps the school environment clean and healthy.</p>
                                    <p data-i18n="about_who_p3">Waste management usually begins with separating waste. Organic waste includes food scraps, leaves, and natural materials that can be processed into compost. Inorganic waste such as plastic bottles, paper, and cans can be collected and recycled. Hazardous waste (B3) is collected and safely processed.</p>
                                    <p data-i18n="about_who_p4">In conclusion, waste management is an important part of a Go Green School program. By separating, recycling, and reusing waste, schools can reduce pollution and create a cleaner and greener environment for everyone.</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="rounded-2xl overflow-hidden shadow-2xl shadow-forest/10 hover-glow transition-all duration-500 relative">
                                    <img src="{{ asset('images/slide2.jpg') }}" alt="Students sorting and recycling waste at school" class="w-full h-80 object-cover"/>
                                    <div class="absolute inset-0 bg-gradient-to-t from-forest/20 via-transparent to-primary/5"></div>
                                    <div class="absolute top-4 right-4 w-20 h-20 border-2 border-white/20 rounded-full animate-spin" style="animation-duration: 20s;"></div>
                                    <div class="absolute bottom-6 left-6 w-12 h-12 border border-white/20 rounded-lg animate-spin" style="animation-duration: 15s; animation-direction: reverse;"></div>
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-6 border border-forest/5">
                                    <div class="flex items-center gap-4">
                                        <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-2xl">school</span>
                                        </div>
                                        <div>
                                            <p class="text-forest font-black text-2xl">500+</p>
                                            <p class="text-forest/50 text-xs font-semibold" data-i18n="about_stat_students">Students Enrolled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Website Information Section -->
                <section class="px-4 md:px-20 lg:px-40 py-14">
                    <div class="max-w-5xl mx-auto">
                        <div class="fade-up bg-white rounded-3xl shadow-xl shadow-forest/5 border border-forest/10 p-8 md:p-10">
                            <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-5">
                                <span class="material-symbols-outlined text-base">description</span>
                                <span data-i18n="website_info_badge">Website Overview</span>
                            </div>
                            <h3 class="text-forest text-2xl md:text-3xl font-black tracking-tight mb-4" data-i18n="website_info_title">Information about the website</h3>
                            <p class="text-forest/60 text-base leading-relaxed mb-5" data-i18n="website_info_support_1">This summary helps students, teachers, and parents quickly understand the main purpose and features of Go Green School Web.</p>
                            <p class="text-forest/70 text-base leading-relaxed whitespace-pre-line" data-i18n="website_info_main">Information about the website:
Go Green School Web is an educational website that provides information about waste management and environmental programs at school. This website has several features such as the Home page which contains a brief explanation of the program, the About page which explains the goals and vision, the Program page which discusses organic, inorganic, and hazardous (B3) waste management, as well as 3R Education, Gallery, News, and Contact features. The website also consists of a header, navigation menu, main content section, and footer. Through this website, students and teachers can learn and practice environmentally friendly habits to create a clean and green school.</p>
                            <p class="text-forest/60 text-sm leading-relaxed mt-5" data-i18n="website_info_support_2">Together, we continue building a school culture that is sustainable, responsible, and inspiring for future generations.</p>
                        </div>
                    </div>
                </section>

                <!-- Vision & Mission -->
                <section class="px-4 md:px-20 lg:px-40 py-16 bg-section-sage-50">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-1 md:grid-cols-2 gap-10">
                            <!-- Vision -->
                            <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 hover-glow transition-all duration-500 hover:-translate-y-1 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-accent-teal"></div>
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-2xl">visibility</span>
                                    </div>
                                    <h3 class="text-forest font-black text-2xl" data-i18n="about_vision_title">Our Vision</h3>
                                </div>
                                <p class="text-forest/60 leading-relaxed" data-i18n="about_vision_desc">To become a leading educational institution that produces environmentally conscious leaders who are committed to sustainability and innovation for a greener future.</p>
                            </div>
                            <!-- Mission -->
                            <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 hover-glow transition-all duration-500 hover:-translate-y-1 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-accent-blue to-accent-violet"></div>
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-2xl">flag</span>
                                    </div>
                                    <h3 class="text-forest font-black text-2xl" data-i18n="about_mission_title">Our Mission</h3>
                                </div>
                                <ul class="space-y-3 text-forest/60">
                                    <li class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">check_circle</span>
                                        <span data-i18n="about_mission_1">Integrate environmental education into every aspect of learning.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">check_circle</span>
                                        <span data-i18n="about_mission_2">Develop practical sustainability programs for students.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">check_circle</span>
                                        <span data-i18n="about_mission_3">Foster community partnerships for environmental initiatives.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">check_circle</span>
                                        <span data-i18n="about_mission_4">Reduce school waste and promote a circular economy mindset.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="px-4 md:px-20 lg:px-40 py-20">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up bg-gradient-to-br from-primary to-forest rounded-3xl p-12 md:p-16 text-center text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] border border-white/5 rounded-full"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[350px] h-[350px] border border-white/5 rounded-full"></div>
                            <div class="relative z-10">
                                <h2 class="text-3xl md:text-4xl font-black mb-4" data-i18n="cta_title">Ready to Join Us?</h2>
                                <p class="text-white/80 text-lg max-w-xl mx-auto mb-8" data-i18n="cta_desc">Be part of the green revolution in education. Together, we can create a sustainable future for the next generation.</p>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white text-forest px-8 py-3 rounded-full font-bold shadow-xl hover:shadow-2xl hover:-translate-y-0.5 transition-all">
                                        <span class="material-symbols-outlined">mail</span>
                                        <span data-i18n="cta_contact">Contact Us</span>
                                    </a>
                                    <a href="/kalkulator" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white px-8 py-3 rounded-full font-bold hover:bg-white/10 transition-all">
                                        <span class="material-symbols-outlined">calculate</span>
                                        <span data-i18n="cta_calculator">Try Calculator</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>

            <!-- Wave Divider -->
            <div class="relative">
                <svg class="w-full h-16 text-forest" viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 30 C300 60 600 0 900 30 C1050 45 1150 20 1200 30 L1200 60 L0 60Z" fill="currentColor"/>
                </svg>
            </div>

            <!-- Footer -->
            <footer class="bg-forest text-sage py-20 px-4 md:px-20 lg:px-40">
                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <div class="space-y-6">
                        <div class="flex items-center gap-2">
                            <div class="size-8">
                                <img alt="Go Green School Logo" class="w-full h-full object-contain brightness-0 invert" src="/images/logo2-removebg-preview.png"/>
                            </div>
                            <h2 class="text-white text-xl font-extrabold">Go Green School</h2>
                        </div>
                        <p class="text-sage/50 text-sm leading-relaxed" data-i18n="footer_desc">
                            Gerakan hijau bukan hanya tren, tapi tanggung jawab.
                        </p>
                        <div class="flex gap-4">
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="#">
                                <span class="material-symbols-outlined text-xl">language</span>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="#">
                                <span class="material-symbols-outlined text-xl">share</span>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="#">
                                <span class="material-symbols-outlined text-xl">Mail</span>
                            </a>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h5 class="text-white font-bold text-sm uppercase tracking-widest" data-i18n="footer_contactus">Contact Us</h5>
                        <ul class="space-y-4 text-sage/60 text-sm">
                            <li class="flex gap-2 items-start">
                                <span class="material-symbols-outlined text-primary text-base">location_on</span>
                                <span>Jl. Raya Sintang - Pontianak, RT 010/RW 003, Desa Balai Agung, Kec. Sungai Tebelian, Kab. Sintang, Kalbar.</span>
                            </li>
                            <li class="flex gap-2 items-start">
                                <span class="material-symbols-outlined text-primary text-base">mail</span>
                                <span>go.green.website.2026@gmail.com</span>
                            </li>
                            <li class="flex gap-2 items-start">
                                <i class="fa-brands fa-instagram text-primary text-base"></i>
                                <span>earthygreen.vibes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-sage/40 uppercase tracking-widest">
                    <p data-i18n="footer_copyright">© 2026 Go Green School. All Rights Reserved.</p>
                    <div class="flex gap-8">
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Language Switcher Script -->
    <script>
    var currentLang = localStorage.getItem('ggs_lang');
    if (!currentLang) {
        currentLang = 'en';
        localStorage.setItem('ggs_lang', 'en');
    }

    var translations = {
        en: {
            nav_home: "Home",
            nav_about: "About",
            nav_program: "Program",
            nav_contact: "Contact",
            nav_calculator: "Calculator",
            nav_profile_hint: "Developer Profile",
            nav_back_home: "Back to Home",
            about_badge: "About Us & Our Programs",
            about_title: "About Go Green School",
            about_title_prefix: "About",
            about_subtitle: "Educating the next generation to care for our planet through innovative green programs and sustainable practices.",
            about_who_label: "Who We Are",
            about_who_title: "Our Story",
            about_who_p1: "Go Green School is an educational initiative dedicated to integrating environmental awareness into the school curriculum. We believe that the future of our planet lies in the hands of today's students.",
            about_who_p2: "Founded with the vision of creating environmentally conscious leaders, our school combines academic excellence with hands-on sustainability programs that make a real difference.",
            about_who_p3: "Through our comprehensive approach, students learn not just about environmental issues, but actively participate in solutions — from waste management to green energy projects.",
            about_who_p4: "In conclusion, waste management is an important part of a Go Green School program. By separating, recycling, and reusing waste, schools can reduce pollution and create a cleaner and greener environment for everyone.",
            about_stat_students: "Students Enrolled",
            about_vision_title: "Our Vision",
            about_vision_desc: "To become a leading educational institution that produces environmentally conscious leaders who are committed to sustainability and innovation for a greener future.",
            about_mission_title: "Our Mission",
            about_mission_1: "Integrate environmental education into every aspect of learning.",
            about_mission_2: "Develop practical sustainability programs for students.",
            about_mission_3: "Foster community partnerships for environmental initiatives.",
            about_mission_4: "Reduce school waste and promote a circular economy mindset.",
            website_info_badge: "Website Overview",
            website_info_title: "Information about the website",
            website_info_support_1: "This summary helps students, teachers, and parents quickly understand the main purpose and features of Go Green School Web.",
            website_info_main: "Information about the website:\nGo Green School Web is an educational website that provides information about waste management and environmental programs at school. This website has several features such as the Home page which contains a brief explanation of the program, the About page which explains the goals and vision, the Program page which discusses organic, inorganic, and hazardous (B3) waste management, as well as 3R Education, Gallery, News, and Contact features. The website also consists of a header, navigation menu, main content section, and footer. Through this website, students and teachers can learn and practice environmentally friendly habits to create a clean and green school.",
            website_info_support_2: "Together, we continue building a school culture that is sustainable, responsible, and inspiring for future generations.",
            programs_label: "What We Do",
            programs_title: "Our Programs",
            programs_subtitle: "Discover our comprehensive green programs designed to make a real environmental impact.",
            program_1_title: "Waste Management",
            program_1_desc: "Learn to sort, reduce, and recycle waste effectively. Students actively manage school waste through hands-on sorting and composting activities.",
            program_2_title: "Green Garden",
            program_2_desc: "Our school garden program teaches students about organic farming, biodiversity, and sustainable agriculture practices.",
            program_3_title: "Water Conservation",
            program_3_desc: "Students learn about water conservation techniques including rainwater harvesting, water recycling, and responsible water usage.",
            program_4_title: "Green Energy",
            program_4_desc: "Explore renewable energy sources through solar panel projects, energy audits, and learning about sustainable energy solutions.",
            program_5_title: "Eco Ambassador",
            program_5_desc: "Students become environmental ambassadors, leading campaigns and community outreach programs to spread green awareness.",
            program_6_title: "Waste Calculator",
            program_6_desc: "Use our mathematical waste calculator to analyze and predict school waste production with precision and data-driven insights.",
            program_6_link: "Try Calculator",
            stat_students: "Students Enrolled",
            stat_programs: "Green Programs",
            stat_recycled: "Waste Recycled",
            stat_partners: "Community Partners",
            cta_title: "Ready to Join Us?",
            cta_desc: "Be part of the green revolution in education. Together, we can create a sustainable future for the next generation.",
            cta_contact: "Contact Us",
            cta_calculator: "Try Calculator",
            footer_desc: "The green movement is not just a trend, but a responsibility.",
            footer_quicklinks: "Quick Links",
            footer_contactus: "Contact Us",
            footer_newsletter: "Newsletter",
            footer_newsletter_desc: "Get green tips in your inbox.",
            footer_copyright: "© 2026 Go Green School. All Rights Reserved.",
            dev_modal_title: "Meet Our Developers",
            dev_modal_subtitle: "The team behind Go Green School",
            dev_role: "Developer",
            dev_specialty_1: "Frontend & Interactive Content",
            dev_specialty_2: "Lead Developer & System Integration",
            dev_specialty_3: "Procedure Content & Campaign Design",
            dev_specialty_4: "Brand Story & Media Content",
            dev_modal_footer: "Made with 💚 for a greener future",
        },
        id: {
            nav_home: "Beranda",
            nav_about: "Tentang",
            nav_program: "Program",
            nav_contact: "Kontak",
            nav_calculator: "Kalkulator",
            nav_profile_hint: "Profil Developer",
            nav_back_home: "Kembali ke Beranda",
            about_badge: "Tentang Kami & Program Kami",
            about_title: "Tentang Go Green School",
            about_title_prefix: "Tentang",
            about_subtitle: "Mendidik generasi berikutnya untuk peduli terhadap planet kita melalui program hijau inovatif dan praktik berkelanjutan.",
            about_who_label: "Siapa Kami",
            about_who_title: "Cerita Kami",
            about_who_p1: "Go Green School adalah inisiatif pendidikan yang didedikasikan untuk mengintegrasikan kesadaran lingkungan ke dalam kurikulum sekolah. Kami percaya bahwa masa depan planet kita ada di tangan siswa hari ini.",
            about_who_p2: "Didirikan dengan visi menciptakan pemimpin yang sadar lingkungan, sekolah kami menggabungkan keunggulan akademik dengan program keberlanjutan langsung yang membuat perbedaan nyata.",
            about_who_p3: "Melalui pendekatan komprehensif kami, siswa tidak hanya belajar tentang isu lingkungan, tetapi secara aktif berpartisipasi dalam solusi — dari pengelolaan sampah hingga proyek energi hijau.",
            about_who_p4: "Kesimpulannya, pengelolaan sampah adalah bagian penting dari program Go Green School. Dengan memilah, mendaur ulang, dan menggunakan kembali sampah, sekolah dapat mengurangi polusi dan menciptakan lingkungan yang lebih bersih dan hijau untuk semua.",
            about_stat_students: "Siswa Terdaftar",
            about_vision_title: "Visi Kami",
            about_vision_desc: "Menjadi institusi pendidikan terdepan yang menghasilkan pemimpin sadar lingkungan yang berkomitmen pada keberlanjutan dan inovasi untuk masa depan yang lebih hijau.",
            about_mission_title: "Misi Kami",
            about_mission_1: "Mengintegrasikan pendidikan lingkungan ke dalam setiap aspek pembelajaran.",
            about_mission_2: "Mengembangkan program keberlanjutan praktis untuk siswa.",
            about_mission_3: "Memupuk kemitraan komunitas untuk inisiatif lingkungan.",
            about_mission_4: "Mengurangi sampah sekolah dan mempromosikan pola pikir ekonomi sirkular.",
            website_info_badge: "Ringkasan Website",
            website_info_title: "Informasi tentang website",
            website_info_support_1: "Ringkasan ini membantu siswa, guru, dan orang tua memahami tujuan utama serta fitur Go Green School Web dengan cepat.",
            website_info_main: "Informasi tentang website:\nGo Green School Web adalah website edukasi yang menyediakan informasi tentang pengelolaan sampah dan program lingkungan di sekolah. Website ini memiliki beberapa fitur seperti halaman Home yang berisi penjelasan singkat program, halaman About yang menjelaskan tujuan dan visi, halaman Program yang membahas pengelolaan sampah organik, anorganik, dan berbahaya (B3), serta fitur Edukasi 3R, Galeri, Berita, dan Kontak. Website ini juga terdiri dari header, menu navigasi, bagian konten utama, dan footer. Melalui website ini, siswa dan guru dapat belajar serta mempraktikkan kebiasaan ramah lingkungan untuk mewujudkan sekolah yang bersih dan hijau.",
            website_info_support_2: "Bersama-sama, kita terus membangun budaya sekolah yang berkelanjutan, bertanggung jawab, dan menginspirasi generasi masa depan.",
            programs_label: "Apa Yang Kami Lakukan",
            programs_title: "Program Kami",
            programs_subtitle: "Temukan program hijau komprehensif kami yang dirancang untuk memberikan dampak lingkungan nyata.",
            program_1_title: "Pengelolaan Sampah",
            program_1_desc: "Belajar memilah, mengurangi, dan mendaur ulang sampah secara efektif. Siswa secara aktif mengelola sampah sekolah melalui kegiatan pemilahan dan pengomposan langsung.",
            program_2_title: "Kebun Hijau",
            program_2_desc: "Program kebun sekolah kami mengajarkan siswa tentang pertanian organik, keanekaragaman hayati, dan praktik pertanian berkelanjutan.",
            program_3_title: "Konservasi Air",
            program_3_desc: "Siswa belajar tentang teknik konservasi air termasuk pemanenan air hujan, daur ulang air, dan penggunaan air yang bertanggung jawab.",
            program_4_title: "Energi Hijau",
            program_4_desc: "Jelajahi sumber energi terbarukan melalui proyek panel surya, audit energi, dan pembelajaran tentang solusi energi berkelanjutan.",
            program_5_title: "Duta Lingkungan",
            program_5_desc: "Siswa menjadi duta lingkungan, memimpin kampanye dan program penjangkauan komunitas untuk menyebarkan kesadaran hijau.",
            program_6_title: "Kalkulator Sampah",
            program_6_desc: "Gunakan kalkulator sampah matematis kami untuk menganalisis dan memprediksi produksi sampah sekolah dengan presisi dan wawasan berbasis data.",
            program_6_link: "Coba Kalkulator",
            stat_students: "Siswa Terdaftar",
            stat_programs: "Program Hijau",
            stat_recycled: "Sampah Didaur Ulang",
            stat_partners: "Mitra Komunitas",
            cta_title: "Siap Bergabung?",
            cta_desc: "Jadilah bagian dari revolusi hijau dalam pendidikan. Bersama, kita bisa menciptakan masa depan berkelanjutan untuk generasi berikutnya.",
            cta_contact: "Hubungi Kami",
            cta_calculator: "Coba Kalkulator",
            footer_desc: "Gerakan hijau bukan hanya tren, tapi tanggung jawab.",
            footer_quicklinks: "Tautan Cepat",
            footer_contactus: "Hubungi Kami",
            footer_newsletter: "Buletin",
            footer_newsletter_desc: "Dapatkan tips hijau di kotak masuk Anda.",
            footer_copyright: "© 2026 Go Green School. Hak Cipta Dilindungi.",
            dev_modal_title: "Temui Developer Kami",
            dev_modal_subtitle: "Tim di balik Go Green School",
            dev_role: "Pengembang",
            dev_specialty_1: "Frontend & Interactive Content",
            dev_specialty_2: "Lead Developer & System Integration",
            dev_specialty_3: "Procedure Content & Campaign Design",
            dev_specialty_4: "Brand Story & Media Content",
            dev_modal_footer: "Dibuat dengan 💚 untuk masa depan yang lebih hijau",
        }
    };

    function setLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('ggs_lang', lang);
        document.documentElement.lang = lang;

        document.title = lang === 'en' ? 'About - Go Green School' : 'Tentang - Go Green School';

        document.querySelectorAll('[data-i18n]').forEach(function(el) {
            var key = el.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                var text = translations[lang][key];
                if (text.includes('\n')) {
                    el.innerHTML = text.replace(/\n/g, '<br/>');
                } else {
                    el.textContent = text;
                }
            }
        });

        var btnEn = document.getElementById('btn-en');
        var btnId = document.getElementById('btn-id');
        if (lang === 'en') {
            btnEn.className = 'flex min-w-[40px] cursor-pointer items-center justify-center rounded-full h-8 px-3 bg-primary text-white text-xs font-bold transition-all';
            btnId.className = 'flex min-w-[40px] cursor-pointer items-center justify-center rounded-full h-8 px-3 text-forest/60 text-xs font-bold hover:bg-forest/10 transition-all';
        } else {
            btnId.className = 'flex min-w-[40px] cursor-pointer items-center justify-center rounded-full h-8 px-3 bg-primary text-white text-xs font-bold transition-all';
            btnEn.className = 'flex min-w-[40px] cursor-pointer items-center justify-center rounded-full h-8 px-3 text-forest/60 text-xs font-bold hover:bg-forest/10 transition-all';
        }

        // Update earth button tooltip
        var earthBtn = document.querySelector('.dev-earth-btn');
        if (earthBtn) earthBtn.title = lang === 'en' ? 'Meet the Developers' : 'Temui Developer';
    }

    document.addEventListener('DOMContentLoaded', function() {
        setLanguage(currentLang);
    });
    </script>

    <!-- Scroll-to-Top Button -->
    <button id="scroll-top" class="scroll-top-btn fixed bottom-5 md:bottom-8 right-4 md:right-8 z-50 w-10 h-10 md:w-12 md:h-12 bg-primary hover:bg-forest text-white rounded-full shadow-xl shadow-primary/30 flex items-center justify-center transition-all hover:-translate-y-1" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <span class="material-symbols-outlined text-[20px] md:text-[24px]">keyboard_arrow_up</span>
    </button>

    <!-- Scroll-to-Bottom Button -->
    <button id="scroll-bottom" class="scroll-top-btn fixed bottom-5 md:bottom-8 right-16 md:right-24 z-50 w-10 h-10 md:w-12 md:h-12 bg-primary hover:bg-forest text-white rounded-full shadow-xl shadow-primary/30 flex items-center justify-center transition-all hover:translate-y-1" onclick="window.scrollTo({top:document.body.scrollHeight,behavior:'smooth'})">
        <span class="material-symbols-outlined text-[20px] md:text-[24px]">keyboard_arrow_down</span>
    </button>

    <!-- Scroll Animations + Mobile Menu + Nav Scroll -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Observe all animated elements
        var animEls = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .stagger-children');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.12 });
        animEls.forEach(function (el) { observer.observe(el); });

        // Navbar scroll effect
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Scroll-to-top button visibility
        var scrollBtn = document.getElementById('scroll-top');
        var scrollBottomBtn = document.getElementById('scroll-bottom');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 500) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }

            if (window.scrollY < document.body.scrollHeight - window.innerHeight - 500) {
                scrollBottomBtn.classList.add('show');
            } else {
                scrollBottomBtn.classList.remove('show');
            }
        });

        // Mobile menu
        var mobileBtn = document.getElementById('mobile-menu-btn');
        var mobileMenu = document.getElementById('mobile-menu');
        var mobileOverlay = document.getElementById('mobile-overlay');
        var mobileClose = document.getElementById('mobile-menu-close');

        function openMobile() {
            mobileMenu.classList.add('open');
            mobileOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
        function closeMobile() {
            mobileMenu.classList.remove('open');
            mobileOverlay.classList.remove('open');
            document.body.style.overflow = '';
        }

        if (mobileBtn) mobileBtn.addEventListener('click', openMobile);
        if (mobileClose) mobileClose.addEventListener('click', closeMobile);
        if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobile);
    });
    </script>

<!-- Developer Credits Modal -->
<div id="devModal" class="dev-modal-overlay fixed inset-0 z-[100] flex items-center justify-center p-4" style="background:rgba(0,0,0,0.6);backdrop-filter:blur(6px);">
    <div class="dev-modal-content bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="relative bg-gradient-to-br from-primary via-emerald-500 to-forest rounded-t-3xl p-8 text-center overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-4 left-8 text-6xl">🌿</div>
                <div class="absolute bottom-4 right-8 text-6xl">🌍</div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-8xl opacity-20">♻️</div>
            </div>
            <button onclick="closeDevModal()" class="absolute top-4 right-4 text-white/80 hover:text-white hover:bg-white/20 rounded-full size-10 flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
            <div class="relative z-10">
                <div class="text-5xl mb-3">🌏</div>
                <h2 data-i18n="dev_modal_title" class="text-2xl md:text-3xl font-bold text-white mb-1">Meet Our Developers</h2>
                <p data-i18n="dev_modal_subtitle" class="text-white/80 text-sm">The team behind Go Green School</p>
                <div class="mt-4 flex flex-wrap items-center justify-center gap-2 text-[11px]">
                    <span class="px-3 py-1 rounded-full bg-white/20 text-white/95 border border-white/30">🌱 Green Innovators</span>
                    <span class="px-3 py-1 rounded-full bg-white/20 text-white/95 border border-white/30">💡 Creative Minds</span>
                    <span class="px-3 py-1 rounded-full bg-white/20 text-white/95 border border-white/30">🤝 One Team</span>
                </div>
            </div>
        </div>
        <!-- Developer Cards -->
        <div class="p-6 md:p-8 bg-gradient-to-b from-white to-sage/20 grid grid-cols-2 gap-4 md:gap-6">
            <div class="relative dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100 hover:shadow-lg hover:shadow-primary/15 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute top-3 right-3 text-sm opacity-70">🎨</div>
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/richard wong.jpg') }}" alt="Richard Wong" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Richard Wong</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_1" class="inline-block max-w-full whitespace-normal text-center bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">Frontend & Interactive Content</span></div>
            </div>
            <div class="relative dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100 hover:shadow-lg hover:shadow-primary/15 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute top-3 right-3 text-sm opacity-70">🧠</div>
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/andika dicky sanjaya.jpeg') }}" alt="Andika Dicky Sanjaya" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Andika Dicky Sanjaya</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_2" class="inline-block max-w-full whitespace-normal text-center bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">Lead Developer & System Integration</span></div>
            </div>
            <div class="relative dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100 hover:shadow-lg hover:shadow-primary/15 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute top-3 right-3 text-sm opacity-70">📝</div>
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/irene krismawati.png') }}" alt="Irene Krismawati" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Irene Krismawati</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_3" class="inline-block max-w-full whitespace-normal text-center bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">Procedure Content & Campaign Design</span></div>
            </div>
            <div class="relative dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100 hover:shadow-lg hover:shadow-primary/15 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute top-3 right-3 text-sm opacity-70">📢</div>
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/Deny Hendrata.jpeg') }}" alt="Deny Hendrata" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Deny Hendrata</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_4" class="inline-block max-w-full whitespace-normal text-center bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">Brand Story & Media Content</span></div>
            </div>
        </div>
        <div class="px-6 pb-6 text-center">
            <p class="text-xs text-emerald-700/70 mb-2">✨ Building a greener future, one feature at a time.</p>
            <p data-i18n="dev_modal_footer" class="text-xs text-gray-400">Made with 💚 for a greener future</p>
        </div>
    </div>
</div>

<script>
function openDevModal() {
    document.getElementById('devModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeDevModal() {
    document.getElementById('devModal').classList.remove('active');
    document.body.style.overflow = '';
}
document.getElementById('devModal').addEventListener('click', function(e) {
    if (e.target === this) closeDevModal();
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDevModal();
});
</script>
</body>
</html>



