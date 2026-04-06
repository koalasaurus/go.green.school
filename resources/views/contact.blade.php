<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact - Go Green School</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
        .fade-up.visible { opacity: 1; transform: translateY(0); }
        .fade-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .fade-left.visible { opacity: 1; transform: translateX(0); }
        .fade-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .fade-right.visible { opacity: 1; transform: translateX(0); }
        .scale-in {
            opacity: 0;
            transform: scale(0.85);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scale-in.visible { opacity: 1; transform: scale(1); }

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
        .mobile-overlay.open { opacity: 1; pointer-events: all; }

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

        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
        }

        .contact-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .contact-card:hover {
            transform: translateY(-4px);
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

        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15), 0 0 20px rgba(16, 185, 129, 0.08);
            border-color: #10b981;
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
            <nav class="sticky top-0 z-50 glass-effect nav-gradient-line px-6 md:px-20 lg:px-40 py-4">
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
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About</a>
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/program" data-i18n="nav_program">Program</a>
                            <a class="text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/contact" data-i18n="nav_contact">Contact</a>
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
                        <button onclick="openDevModal()" class="dev-earth-btn flex items-center justify-center size-10 rounded-full hover:scale-110 transition-all duration-300" title="Meet the Developers">
                            <span class="text-2xl">🌍</span>
                        </button>
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
            <div class="float-particle fixed top-[28%] right-[16%] w-3 h-3 bg-primary/20 rounded-full z-10" style="animation-delay: -2s;"></div>
            <div class="float-particle fixed top-[58%] left-[18%] w-2 h-2 bg-accent-blue/20 rounded-full z-10" style="animation-delay: -5s; animation-duration: 10s;"></div>

            <main class="flex flex-col flex-1">

                <!-- Page Hero -->
                <section class="relative px-4 md:px-20 lg:px-40 pt-16 pb-12">
                    <div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute top-20 right-0 w-96 h-96 bg-forest/5 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute inset-0 mesh-gradient -z-10"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: -1;"></div>
                    <div class="max-w-7xl mx-auto text-center">
                        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                            <span class="material-symbols-outlined text-base">contact_mail</span>
                            <span data-i18n="contact_badge">Get In Touch</span>
                        </div>
                        <h1 class="text-forest text-4xl md:text-6xl font-black tracking-tight leading-[1.1] mb-4"><span class="gradient-text" data-i18n="contact_title">Contact Us</span></h1>
                        <p class="text-forest/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" data-i18n="contact_subtitle">Have questions or want to learn more about Go Green School? We'd love to hear from you.</p>
                        <div class="section-divider mt-8"></div>
                    </div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-32 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>
                </section>

                <!-- Contact Info Cards -->
                <section class="px-4 md:px-20 lg:px-40 py-8 relative">
                    <div class="absolute inset-0 mesh-gradient -z-10"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-24 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: -1;"></div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-24 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Email Tab (Default Active) -->
                            <button onclick="switchContactMode('email')" id="card-email" class="contact-card bg-white rounded-2xl shadow-lg shadow-forest/5 border-2 border-primary ring-2 ring-primary/20 p-8 text-center cursor-pointer transition-all hover-glow relative overflow-hidden">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-accent-teal"></div>
                                <div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-primary text-3xl">mail</span>
                                </div>
                                <h3 class="text-forest font-bold text-lg mb-2" data-i18n="contact_email_title">Email</h3>
                                <p class="text-forest/60 text-sm leading-relaxed">info@gogreenschool.id</p>
                            </button>

                            <!-- Instagram Tab -->
                            <button onclick="switchContactMode('instagram')" id="card-instagram" class="contact-card bg-white rounded-2xl shadow-lg shadow-forest/5 border-2 border-transparent p-8 text-center cursor-pointer transition-all hover:border-forest/10 hover-glow relative overflow-hidden">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-accent-rose to-accent-violet opacity-0 transition-opacity group-hover:opacity-100"></div>
                                <div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <svg class="w-7 h-7 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                </div>
                                <h3 class="text-forest font-bold text-lg mb-2" data-i18n="contact_ig_title">Instagram</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="contact_ig_desc">@earthygreen.vibes</p>
                            </button>

                            <!-- WhatsApp Tab -->
                            <button onclick="switchContactMode('whatsapp')" id="card-whatsapp" class="contact-card bg-white rounded-2xl shadow-lg shadow-forest/5 border-2 border-transparent p-8 text-center cursor-pointer transition-all hover:border-forest/10 hover-glow relative overflow-hidden">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary-light to-primary opacity-0 transition-opacity group-hover:opacity-100"></div>
                                <div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <svg class="w-7 h-7 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                </div>
                                <h3 class="text-forest font-bold text-lg mb-2" data-i18n="contact_wa_title">WhatsApp</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="contact_wa_desc">+62 21 555-0123</p>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Contact Form & Map -->
                <section class="px-4 md:px-20 lg:px-40 py-12">
                    <div class="max-w-7xl mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                            <!-- Contact Form -->
                            <div class="fade-up">
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 md:p-10 hover-glow transition-all duration-500">

                                    <!-- ===== EMAIL FORM (Default) ===== -->
                                    <div id="form-email">
                                        <div class="flex items-center gap-3 mb-8">
                                            <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                                <span class="material-symbols-outlined text-primary">mail</span>
                                            </div>
                                            <div>
                                                <h3 class="text-forest font-bold text-xl" data-i18n="form_email_heading">Send via Email</h3>
                                                <p class="text-forest/50 text-xs" data-i18n="form_email_desc">Fill out the form and we'll get back to you</p>
                                            </div>
                                        </div>

                                        @if(session('success'))
                                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-center gap-3">
                                            <span class="material-symbols-outlined text-green-600">check_circle</span>
                                            <p class="text-green-700 text-sm font-medium">{{ session('success') }}</p>
                                        </div>
                                        @endif

                                        @if($errors->any())
                                        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                                            <div class="flex items-center gap-2 mb-2">
                                                <span class="material-symbols-outlined text-red-500">error</span>
                                                <p class="text-red-700 text-sm font-bold">Please fix the following errors:</p>
                                            </div>
                                            <ul class="list-disc list-inside text-red-600 text-sm space-y-1">
                                                @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form class="space-y-5" method="POST" action="{{ route('contact.send') }}">
                                            @csrf
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_name">Full Name</label>
                                                <div class="relative">
                                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">person</span>
                                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_email_label">Email Address</label>
                                                <div class="relative">
                                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">mail</span>
                                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="john@example.com" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_subject">Subject</label>
                                                <div class="relative">
                                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">topic</span>
                                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="How can we help?" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_message">Message</label>
                                                <textarea rows="5" name="message" placeholder="Write your message here..." class="input-field w-full px-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30 resize-none" required>{{ old('message') }}</textarea>
                                            </div>
                                            <button type="submit" class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white py-3.5 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5">
                                                <span class="material-symbols-outlined text-lg">send</span>
                                                <span data-i18n="form_submit_email">Send Message</span>
                                            </button>
                                        </form>
                                    </div>

                                    <!-- ===== INSTAGRAM FORM (Hidden) ===== -->
                                    <div id="form-instagram" class="hidden">
                                        <div class="flex items-center gap-3 mb-8">
                                            <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="text-forest font-bold text-xl" data-i18n="form_ig_heading">Send via Instagram</h3>
                                                <p class="text-forest/50 text-xs" data-i18n="form_ig_desc">Your message will be sent as an Instagram DM</p>
                                            </div>
                                        </div>

                                        <div class="mb-6 p-4 bg-primary/5 border border-primary/10 rounded-xl flex items-start gap-3">
                                            <span class="material-symbols-outlined text-primary text-xl mt-0.5">info</span>
                                            <div>
                                                <p class="text-forest text-sm font-semibold" data-i18n="form_ig_info_title">Message via Instagram DM</p>
                                                <p class="text-forest/60 text-xs mt-1" data-i18n="form_ig_info_desc">Fill in your message below. Clicking "Send" will copy your message and open our Instagram DM.</p>
                                            </div>
                                        </div>

                                        <form id="ig-dm-form" class="space-y-5" onsubmit="return redirectToInstagramDM(event)">
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_name">Full Name</label>
                                                <div class="relative">
                                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">person</span>
                                                    <input type="text" id="ig-name" placeholder="John Doe" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_subject">Subject</label>
                                                <div class="relative">
                                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">topic</span>
                                                    <input type="text" id="ig-subject" placeholder="How can we help?" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_message">Message</label>
                                                <textarea rows="5" id="ig-message" placeholder="Write your message here..." class="input-field w-full px-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30 resize-none" required></textarea>
                                            </div>
                                            <div id="ig-preview" class="hidden p-4 bg-forest/5 rounded-xl">
                                                <div class="flex items-center justify-between mb-2">
                                                    <p class="text-xs font-semibold text-forest/50" data-i18n="form_preview">📋 Message Preview:</p>
                                                    <button type="button" onclick="copyPreviewText()" id="ig-copy-btn" class="flex items-center gap-1 text-xs font-semibold text-primary hover:text-forest bg-primary/10 hover:bg-primary/20 px-3 py-1.5 rounded-lg transition-all">
                                                        <span class="material-symbols-outlined text-sm" id="ig-copy-icon">content_copy</span>
                                                        <span id="ig-copy-label" data-i18n="form_copy">Copy</span>
                                                    </button>
                                                </div>
                                                <p id="ig-preview-text" class="text-sm text-forest/70 whitespace-pre-line"></p>
                                            </div>
                                            <button type="submit" class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white py-3.5 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                                <span data-i18n="form_ig_submit">Send via Instagram DM</span>
                                            </button>
                                            <p class="text-center text-xs text-forest/40" data-i18n="form_ig_note">Message will be copied to clipboard, then Instagram DM will open</p>
                                        </form>
                                    </div>

                                    <!-- ===== WHATSAPP FORM (Hidden) ===== -->
                                    <div id="form-whatsapp" class="hidden">
                                        <div class="flex items-center gap-3 mb-8">
                                            <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                            </div>
                                            <div>
                                                <h3 class="text-forest font-bold text-xl" data-i18n="form_wa_heading">Send via WhatsApp</h3>
                                                <p class="text-forest/50 text-xs" data-i18n="form_wa_desc">Chat with us directly on WhatsApp</p>
                                            </div>
                                        </div>

                                        <div class="mb-6 p-4 bg-primary/5 border border-primary/10 rounded-xl flex items-start gap-3">
                                            <span class="material-symbols-outlined text-primary text-xl mt-0.5">info</span>
                                            <div>
                                                <p class="text-forest text-sm font-semibold" data-i18n="form_wa_info_title">Chat via WhatsApp</p>
                                                <p class="text-forest/60 text-xs mt-1" data-i18n="form_wa_info_desc">Fill in your message below. Clicking "Send" will open WhatsApp with your message pre-filled.</p>
                                            </div>
                                        </div>

                                        <form id="wa-form" class="space-y-5" onsubmit="return redirectToWhatsApp(event)">
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_name">Full Name</label>
                                                <div class="relative">
                                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">person</span>
                                                    <input type="text" id="wa-name" placeholder="John Doe" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" required/>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_message">Message</label>
                                                <textarea rows="5" id="wa-message" placeholder="Write your message here..." class="input-field w-full px-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30 resize-none" required></textarea>
                                            </div>
                                            <button type="submit" class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white py-3.5 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                                <span data-i18n="form_wa_submit">Send via WhatsApp</span>
                                            </button>
                                            <p class="text-center text-xs text-forest/40" data-i18n="form_wa_note">WhatsApp will open with your message pre-filled</p>
                                        </form>
                                    </div>

                                </div>
                            </div>

                            <!-- Map & Additional Info -->
                            <div class="fade-up space-y-8">
                                <!-- Map Placeholder -->
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 overflow-hidden hover-glow transition-all duration-500">
                                    <div class="bg-gradient-to-br from-primary/10 via-accent-teal/5 to-forest/5 h-72 flex flex-col items-center justify-center text-center p-8 relative">
                                        <div class="absolute inset-0 mesh-gradient"></div>
                                        <span class="material-symbols-outlined text-primary/30 mb-4 relative z-10" style="font-size: 80px;">map</span>
                                        <p class="text-forest/40 text-sm font-semibold relative z-10" data-i18n="map_placeholder">Map will be displayed here</p>
                                        <p class="text-forest/30 text-xs mt-1 relative z-10" data-i18n="map_hint">Embed your Google Maps here</p>
                                    </div>
                                </div>

                                <!-- Operating Hours -->
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                    <div class="flex items-center gap-3 mb-6">
                                        <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary">schedule</span>
                                        </div>
                                        <h3 class="text-forest font-bold text-lg" data-i18n="hours_title">Operating Hours</h3>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="flex justify-between items-center py-3 border-b border-forest/5">
                                            <span class="text-forest/70 text-sm font-medium" data-i18n="hours_weekday">Monday - Friday</span>
                                            <span class="text-forest font-bold text-sm">07:00 - 16:00</span>
                                        </div>
                                        <div class="flex justify-between items-center py-3 border-b border-forest/5">
                                            <span class="text-forest/70 text-sm font-medium" data-i18n="hours_saturday">Saturday</span>
                                            <span class="text-forest font-bold text-sm">08:00 - 12:00</span>
                                        </div>
                                        <div class="flex justify-between items-center py-3">
                                            <span class="text-forest/70 text-sm font-medium" data-i18n="hours_sunday">Sunday & Holidays</span>
                                            <span class="text-red-500 font-bold text-sm" data-i18n="hours_closed">Closed</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media -->
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                    <div class="flex items-center gap-3 mb-6">
                                        <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary">share</span>
                                        </div>
                                        <h3 class="text-forest font-bold text-lg" data-i18n="social_title">Follow Us</h3>
                                    </div>
                                    <div class="flex gap-4">
                                        <a href="#" class="w-12 h-12 rounded-xl bg-forest/5 border border-forest/10 flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white text-forest/50 transition-all">
                                            <span class="material-symbols-outlined">language</span>
                                        </a>
                                        <a href="https://www.instagram.com/earthygreen.vibes/" target="_blank" rel="noopener noreferrer" class="w-12 h-12 rounded-xl bg-forest/5 border border-forest/10 flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white text-forest/50 transition-all">
                                            <span class="material-symbols-outlined">photo_camera</span>
                                        </a>
                                        <a href="#" class="w-12 h-12 rounded-xl bg-forest/5 border border-forest/10 flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white text-forest/50 transition-all">
                                            <span class="material-symbols-outlined">smart_display</span>
                                        </a>
                                        <a href="#" class="w-12 h-12 rounded-xl bg-forest/5 border border-forest/10 flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white text-forest/50 transition-all">
                                            <span class="material-symbols-outlined">mail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- FAQ Section -->
                <section class="px-4 md:px-20 lg:px-40 py-16 bg-section-sage-50 relative">
                    <div class="absolute inset-0 mesh-gradient"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-24 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: 5;"></div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-24 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: 5;"></div>
                    <div class="max-w-3xl mx-auto relative z-10">
                        <div class="fade-up text-center mb-12">
                            <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="faq_label">FAQ</span>
                            <h2 class="text-forest text-3xl md:text-4xl font-black tracking-tight mt-3" data-i18n="faq_title">Frequently Asked Questions</h2>
                        </div>

                        <div class="fade-up space-y-4">
                            <!-- FAQ 1 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group hover:shadow-md hover:border-primary/10 transition-all">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4 group-hover:text-primary transition-colors" data-i18n="faq_1_q">How can I enroll my child in Go Green School?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_1_a">You can start the enrollment process by contacting us through this form or visiting our school directly during operating hours. Our admissions team will guide you through the entire process.</p>
                                </div>
                            </details>

                            <!-- FAQ 2 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group hover:shadow-md hover:border-primary/10 transition-all">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4 group-hover:text-primary transition-colors" data-i18n="faq_2_q">What green programs are available for students?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_2_a">We offer various programs including Waste Management, Green Garden, Water Conservation, Green Energy, and Eco Ambassador. Visit our About & Programs page for more details.</p>
                                </div>
                            </details>

                            <!-- FAQ 3 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group hover:shadow-md hover:border-primary/10 transition-all">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4 group-hover:text-primary transition-colors" data-i18n="faq_3_q">Can I volunteer or partner with Go Green School?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_3_a">Absolutely! We welcome community partnerships and volunteers. Please reach out through our contact form and our partnership team will be happy to discuss collaboration opportunities.</p>
                                </div>
                            </details>

                            <!-- FAQ 4 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group hover:shadow-md hover:border-primary/10 transition-all">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4 group-hover:text-primary transition-colors" data-i18n="faq_4_q">Is there a school tour available?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_4_a">Yes, we offer school tours every weekday. Please contact us to schedule a visit so we can show you our green facilities and programs in action.</p>
                                </div>
                            </details>
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
                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-16">
                    <div class="space-y-6 lg:col-span-1">
                        <div class="flex items-center gap-2">
                            <div class="size-8">
                                <img alt="Go Green School Logo" class="w-full h-full object-contain brightness-0 invert" src="/images/logo2-removebg-preview.png"/>
                            </div>
                            <h2 class="text-white text-xl font-extrabold">Go Green School</h2>
                        </div>
                        <p class="text-sage/50 text-sm leading-relaxed" data-i18n="footer_desc">
                            Shaping the character of future leaders who are not only academically intelligent, but also have high empathy for earth's sustainability.
                        </p>
                        <div class="flex gap-4">
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="#">
                                <span class="material-symbols-outlined text-xl">language</span>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="https://www.instagram.com/earthygreen.vibes/" target="_blank" rel="noopener noreferrer">
                                <span class="material-symbols-outlined text-xl">share</span>
                            </a>
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="#">
                                <span class="material-symbols-outlined text-xl">mail</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-3 lg:col-span-3 gap-12">
                        <div class="space-y-6">
                            <h5 class="text-white font-bold text-sm uppercase tracking-widest" data-i18n="footer_quicklinks">Quick Links</h5>
                            <ul class="space-y-4 text-sage/60 text-sm">
                                <li><a class="hover:text-primary transition-colors" href="/" data-i18n="nav_home">Home</a></li>
                                <li><a class="hover:text-primary transition-colors" href="/about" data-i18n="nav_about">About</a></li>
                                <li><a class="hover:text-primary transition-colors" href="/program" data-i18n="nav_program">Program</a></li>
                                <li><a class="hover:text-primary transition-colors" href="/contact" data-i18n="nav_contact">Contact</a></li>
                                <li><a class="hover:text-primary transition-colors" href="/kalkulator" data-i18n="nav_calculator">Calculator</a></li>
                            </ul>
                        </div>
                        <div class="space-y-6">
                            <h5 class="text-white font-bold text-sm uppercase tracking-widest" data-i18n="footer_contactus">Contact Us</h5>
                            <ul class="space-y-4 text-sage/60 text-sm">
                                <li class="flex gap-2 items-start">
                                    <span class="material-symbols-outlined text-primary text-base">location_on</span>
                                    <span>Jl. Hijau Lestari No. 123, Jakarta</span>
                                </li>
                                <li class="flex gap-2 items-start">
                                    <span class="material-symbols-outlined text-primary text-base">mail</span>
                                    <span>info@gogreenschool.id</span>
                                </li>
                                <li class="flex gap-2 items-start">
                                    <span class="material-symbols-outlined text-primary text-base">phone</span>
                                    <span>(021) 555-0123</span>
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-6">
                            <h5 class="text-white font-bold text-sm uppercase tracking-widest" data-i18n="footer_newsletter">Newsletter</h5>
                            <p class="text-sage/60 text-sm" data-i18n="footer_newsletter_desc">Get green tips in your inbox.</p>
                            <div class="flex border-b border-white/10 pb-2">
                                <input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-white/20 text-sage" placeholder="Your email" type="email"/>
                                <button class="text-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-sage/40 uppercase tracking-widest">
                    <p data-i18n="footer_copyright">© 2024 Go Green School. All Rights Reserved.</p>
                    <div class="flex gap-8">
                        <a class="hover:text-white transition-colors" href="#" data-i18n="footer_privacy">Privacy Policy</a>
                        <a class="hover:text-white transition-colors" href="#" data-i18n="footer_terms">Terms &amp; Conditions</a>
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
            nav_back_home: "Back to Home",
            contact_badge: "Get In Touch",
            contact_title: "Contact Us",
            contact_subtitle: "Have questions or want to learn more about Go Green School? We'd love to hear from you.",
            contact_email_title: "Email",
            contact_ig_title: "Instagram",
            contact_ig_desc: "@earthygreen.vibes",
            contact_wa_title: "WhatsApp",
            contact_wa_desc: "+62 21 555-0123",
            form_email_heading: "Send via Email",
            form_email_desc: "Fill out the form and we'll get back to you",
            form_email_label: "Email Address",
            form_submit_email: "Send Message",
            form_ig_heading: "Send via Instagram",
            form_ig_desc: "Your message will be sent as an Instagram DM",
            form_ig_info_title: "Message via Instagram DM",
            form_ig_info_desc: "Fill in your message below. Clicking \"Send\" will copy your message and open our Instagram DM.",
            form_ig_submit: "Send via Instagram DM",
            form_ig_note: "Message will be copied to clipboard, then Instagram DM will open",
            form_wa_heading: "Send via WhatsApp",
            form_wa_desc: "Chat with us directly on WhatsApp",
            form_wa_info_title: "Chat via WhatsApp",
            form_wa_info_desc: "Fill in your message below. Clicking \"Send\" will open WhatsApp with your message pre-filled.",
            form_wa_submit: "Send via WhatsApp",
            form_wa_note: "WhatsApp will open with your message pre-filled",
            form_name: "Full Name",
            form_subject: "Subject",
            form_message: "Message",
            form_preview: "📋 Message Preview:",
            form_copy: "Copy",
            map_placeholder: "Map will be displayed here",
            map_hint: "Embed your Google Maps here",
            hours_title: "Operating Hours",
            hours_weekday: "Monday - Friday",
            hours_saturday: "Saturday",
            hours_sunday: "Sunday & Holidays",
            hours_closed: "Closed",
            social_title: "Follow Us",
            faq_label: "FAQ",
            faq_title: "Frequently Asked Questions",
            faq_1_q: "How can I enroll my child in Go Green School?",
            faq_1_a: "You can start the enrollment process by contacting us through this form or visiting our school directly during operating hours. Our admissions team will guide you through the entire process.",
            faq_2_q: "What green programs are available for students?",
            faq_2_a: "We offer various programs including Waste Management, Green Garden, Water Conservation, Green Energy, and Eco Ambassador. Visit our About & Programs page for more details.",
            faq_3_q: "Can I volunteer or partner with Go Green School?",
            faq_3_a: "Absolutely! We welcome community partnerships and volunteers. Please reach out through our contact form and our partnership team will be happy to discuss collaboration opportunities.",
            faq_4_q: "Is there a school tour available?",
            faq_4_a: "Yes, we offer school tours every weekday. Please contact us to schedule a visit so we can show you our green facilities and programs in action.",
            footer_desc: "Shaping the character of future leaders who are not only academically intelligent, but also have high empathy for earth's sustainability.",
            footer_quicklinks: "Quick Links",
            footer_contactus: "Contact Us",
            footer_newsletter: "Newsletter",
            footer_newsletter_desc: "Get green tips in your inbox.",
            footer_copyright: "© 2024 Go Green School. All Rights Reserved.",
            footer_privacy: "Privacy Policy",
            footer_terms: "Terms & Conditions",
            dev_modal_title: "Meet Our Developers",
            dev_modal_subtitle: "The team behind Go Green School",
            dev_role: "Developer",
            dev_specialty_1: "🌱 Frontend",
            dev_specialty_2: "🌿 Backend",
            dev_specialty_3: "🍀 UI/UX",
            dev_specialty_4: "🌳 Fullstack",
            dev_modal_footer: "Made with 💚 for a greener future",
        },
        id: {
            nav_home: "Beranda",
            nav_about: "Tentang",
            nav_program: "Program",
            nav_contact: "Kontak",
            nav_calculator: "Kalkulator",
            nav_back_home: "Kembali ke Beranda",
            contact_badge: "Hubungi Kami",
            contact_title: "Kontak Kami",
            contact_subtitle: "Punya pertanyaan atau ingin tahu lebih banyak tentang Go Green School? Kami senang mendengar dari Anda.",
            contact_email_title: "Email",
            contact_ig_title: "Instagram",
            contact_ig_desc: "@earthygreen.vibes",
            contact_wa_title: "WhatsApp",
            contact_wa_desc: "+62 21 555-0123",
            form_email_heading: "Kirim via Email",
            form_email_desc: "Isi formulir dan kami akan menghubungi Anda kembali",
            form_email_label: "Alamat Email",
            form_submit_email: "Kirim Pesan",
            form_ig_heading: "Kirim via Instagram",
            form_ig_desc: "Pesan Anda akan dikirim sebagai Instagram DM",
            form_ig_info_title: "Pesan via Instagram DM",
            form_ig_info_desc: "Isi pesan Anda di bawah. Klik \"Kirim\" akan menyalin pesan dan membuka Instagram DM kami.",
            form_ig_submit: "Kirim via Instagram DM",
            form_ig_note: "Pesan akan disalin ke clipboard, lalu Instagram DM akan terbuka",
            form_wa_heading: "Kirim via WhatsApp",
            form_wa_desc: "Chat langsung dengan kami di WhatsApp",
            form_wa_info_title: "Chat via WhatsApp",
            form_wa_info_desc: "Isi pesan Anda di bawah. Klik \"Kirim\" akan membuka WhatsApp dengan pesan Anda.",
            form_wa_submit: "Kirim via WhatsApp",
            form_wa_note: "WhatsApp akan terbuka dengan pesan Anda",
            form_name: "Nama Lengkap",
            form_subject: "Subjek",
            form_message: "Pesan",
            form_preview: "📋 Preview Pesan:",
            form_copy: "Salin",
            map_placeholder: "Peta akan ditampilkan di sini",
            map_hint: "Sematkan Google Maps Anda di sini",
            hours_title: "Jam Operasional",
            hours_weekday: "Senin - Jumat",
            hours_saturday: "Sabtu",
            hours_sunday: "Minggu & Hari Libur",
            hours_closed: "Tutup",
            social_title: "Ikuti Kami",
            faq_label: "FAQ",
            faq_title: "Pertanyaan yang Sering Diajukan",
            faq_1_q: "Bagaimana cara mendaftarkan anak saya di Go Green School?",
            faq_1_a: "Anda dapat memulai proses pendaftaran dengan menghubungi kami melalui formulir ini atau mengunjungi sekolah kami langsung selama jam operasional. Tim admisi kami akan memandu Anda melalui seluruh proses.",
            faq_2_q: "Program hijau apa saja yang tersedia untuk siswa?",
            faq_2_a: "Kami menawarkan berbagai program termasuk Pengelolaan Sampah, Kebun Hijau, Konservasi Air, Energi Hijau, dan Duta Lingkungan. Kunjungi halaman Tentang & Program kami untuk detail lebih lanjut.",
            faq_3_q: "Bisakah saya menjadi relawan atau bermitra dengan Go Green School?",
            faq_3_a: "Tentu saja! Kami menyambut kemitraan komunitas dan relawan. Silakan hubungi melalui formulir kontak kami dan tim kemitraan kami akan dengan senang hati mendiskusikan peluang kolaborasi.",
            faq_4_q: "Apakah ada tur sekolah yang tersedia?",
            faq_4_a: "Ya, kami menawarkan tur sekolah setiap hari kerja. Silakan hubungi kami untuk menjadwalkan kunjungan agar kami dapat menunjukkan fasilitas dan program hijau kami.",
            footer_desc: "Membentuk karakter pemimpin masa depan yang tidak hanya cerdas secara akademis, tetapi juga memiliki empati tinggi terhadap keberlanjutan bumi.",
            footer_quicklinks: "Tautan Cepat",
            footer_contactus: "Hubungi Kami",
            footer_newsletter: "Buletin",
            footer_newsletter_desc: "Dapatkan tips hijau di kotak masuk Anda.",
            footer_copyright: "© 2024 Go Green School. Hak Cipta Dilindungi.",
            footer_privacy: "Kebijakan Privasi",
            footer_terms: "Syarat & Ketentuan",
            dev_modal_title: "Temui Developer Kami",
            dev_modal_subtitle: "Tim di balik Go Green School",
            dev_role: "Pengembang",
            dev_specialty_1: "🌱 Frontend",
            dev_specialty_2: "🌿 Backend",
            dev_specialty_3: "🍀 UI/UX",
            dev_specialty_4: "🌳 Fullstack",
            dev_modal_footer: "Dibuat dengan 💚 untuk masa depan yang lebih hijau",
        }
    };

    function setLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('ggs_lang', lang);
        document.documentElement.lang = lang;

        document.title = lang === 'en' ? 'Contact - Go Green School' : 'Kontak - Go Green School';

        document.querySelectorAll('[data-i18n]').forEach(function(el) {
            var key = el.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                if (el.tagName === 'P' && translations[lang][key].includes('\n')) {
                    el.innerHTML = translations[lang][key].replace(/\n/g, '<br/>');
                } else {
                    el.textContent = translations[lang][key];
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

    <!-- Contact Mode Switching + IG DM + WhatsApp Script -->
    <script>
    // ===== CONFIGURATION - GANTI DENGAN DATA KALIAN =====
    var IG_USERNAME = 'earthygreen.vibes';
    var WA_NUMBER = '6221555012';  // Nomor WA tanpa + dan spasi

    // ===== TAB SWITCHING =====
    function switchContactMode(mode) {
        // Hide all forms
        var forms = ['form-email', 'form-instagram', 'form-whatsapp'];
        forms.forEach(function(id) {
            var el = document.getElementById(id);
            if (el) el.classList.add('hidden');
        });

        // Show selected form
        var target = document.getElementById('form-' + mode);
        if (target) target.classList.remove('hidden');

        // Update card styles
        var cards = ['card-email', 'card-instagram', 'card-whatsapp'];
        cards.forEach(function(id) {
            var card = document.getElementById(id);
            if (card) {
                card.classList.remove('border-primary', 'ring-2', 'ring-primary/20');
                card.classList.add('border-transparent', 'hover:border-forest/10');
            }
        });

        var activeCard = document.getElementById('card-' + mode);
        if (activeCard) {
            activeCard.classList.remove('border-transparent', 'hover:border-forest/10');
            activeCard.classList.add('border-primary', 'ring-2', 'ring-primary/20');
        }

        // Smooth scroll to form
        var formSection = document.getElementById('form-' + mode);
        if (formSection) {
            formSection.closest('.bg-white').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    // ===== INSTAGRAM DM =====
    document.addEventListener('DOMContentLoaded', function() {
        var nameInput = document.getElementById('ig-name');
        var subjectInput = document.getElementById('ig-subject');
        var messageInput = document.getElementById('ig-message');
        var previewBox = document.getElementById('ig-preview');
        var previewText = document.getElementById('ig-preview-text');

        function updatePreview() {
            var name = nameInput ? nameInput.value.trim() : '';
            var subject = subjectInput ? subjectInput.value.trim() : '';
            var message = messageInput ? messageInput.value.trim() : '';

            if (name || subject || message) {
                previewBox.classList.remove('hidden');
                var text = '';
                if (name) text += 'Halo, saya ' + name + '.\n';
                if (subject) text += 'Subjek: ' + subject + '\n\n';
                if (message) text += message;
                previewText.textContent = text;
            } else {
                previewBox.classList.add('hidden');
            }
        }

        if (nameInput) nameInput.addEventListener('input', updatePreview);
        if (subjectInput) subjectInput.addEventListener('input', updatePreview);
        if (messageInput) messageInput.addEventListener('input', updatePreview);
    });

    function redirectToInstagramDM(e) {
        e.preventDefault();
        var name = document.getElementById('ig-name').value.trim();
        var subject = document.getElementById('ig-subject').value.trim();
        var message = document.getElementById('ig-message').value.trim();

        var fullMessage = '';
        if (name) fullMessage += 'Halo, saya ' + name + '.\n';
        if (subject) fullMessage += 'Subjek: ' + subject + '\n\n';
        if (message) fullMessage += message;

        if (navigator.clipboard && fullMessage) {
            navigator.clipboard.writeText(fullMessage).then(function() {
                showNotification('✅', 'Pesan di-copy! Paste di Instagram DM', '#064e3b', 'white');
            }).catch(function() {
                showNotification('📋', 'Buka Instagram DM & ketik pesan Anda', '#fef3c7', '#92400e');
            });
        }

        // Buka URL langsung dalam konteks user-click agar tidak diblokir popup blocker
        var igDmUrl = 'https://ig.me/m/' + IG_USERNAME;
        var igProfileUrl = 'https://www.instagram.com/' + IG_USERNAME + '/';
        var opened = window.open(igDmUrl, '_blank');

        // Fallback jika browser memblokir tab baru
        if (!opened) {
            window.location.href = igProfileUrl;
        }
        return false;
    }

    // ===== WHATSAPP =====
    function redirectToWhatsApp(e) {
        e.preventDefault();
        var name = document.getElementById('wa-name').value.trim();
        var message = document.getElementById('wa-message').value.trim();

        var fullMessage = '';
        if (name) fullMessage += 'Halo, saya ' + name + '.\n\n';
        if (message) fullMessage += message;

        var waUrl = 'https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(fullMessage);
        window.open(waUrl, '_blank');
        return false;
    }

    // ===== NOTIFICATION =====
    function showNotification(icon, text, bg, color) {
        var existing = document.getElementById('contact-notification');
        if (existing) existing.remove();

        var div = document.createElement('div');
        div.id = 'contact-notification';
        div.style.cssText = 'position:fixed;top:24px;left:50%;transform:translateX(-50%);z-index:9999;padding:12px 24px;border-radius:12px;font-size:14px;font-weight:600;display:flex;align-items:center;gap:8px;box-shadow:0 10px 30px rgba(0,0,0,0.15);animation:fadeSlideUp 0.4s ease-out;';
        div.style.background = bg;
        div.style.color = color;
        div.innerHTML = '<span style="font-size:18px">' + icon + '</span> ' + text;

        document.body.appendChild(div);
        setTimeout(function() { div.remove(); }, 4000);
    }

    // ===== COPY PREVIEW TEXT =====
    function copyPreviewText() {
        var previewText = document.getElementById('ig-preview-text');
        if (!previewText) return;

        var text = previewText.textContent;
        if (navigator.clipboard && text) {
            navigator.clipboard.writeText(text).then(function() {
                var icon = document.getElementById('ig-copy-icon');
                var label = document.getElementById('ig-copy-label');
                if (icon) icon.textContent = 'check';
                if (label) label.textContent = currentLang === 'id' ? 'Tersalin!' : 'Copied!';

                setTimeout(function() {
                    if (icon) icon.textContent = 'content_copy';
                    if (label) label.textContent = currentLang === 'id' ? 'Salin' : 'Copy';
                }, 2000);
            });
        }
    }
    </script>

    <!-- Scroll-to-Top Button -->
    <button id="scroll-top" class="scroll-top-btn fixed bottom-8 right-8 z-50 w-12 h-12 bg-primary hover:bg-forest text-white rounded-full shadow-xl shadow-primary/30 flex items-center justify-center transition-all hover:-translate-y-1" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <span class="material-symbols-outlined">keyboard_arrow_up</span>
    </button>

    <!-- Scroll Animations + Mobile Menu + Nav Scroll -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var animEls = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .stagger-children');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.12 });
        animEls.forEach(function (el) { observer.observe(el); });

        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) nav.classList.add('scrolled');
            else nav.classList.remove('scrolled');
        });

        var scrollBtn = document.getElementById('scroll-top');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 500) scrollBtn.classList.add('show');
            else scrollBtn.classList.remove('show');
        });

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
            </div>
        </div>
        <div class="p-6 md:p-8 grid grid-cols-2 gap-4 md:gap-6">
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="https://ui-avatars.com/api/?name=Richard+Wong&background=10b981&color=fff&size=200&bold=true&font-size=0.35" alt="Richard Wong" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Richard Wong</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_1" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🌱 Frontend</span></div>
            </div>
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="https://ui-avatars.com/api/?name=Andika+Dicky&background=059669&color=fff&size=200&bold=true&font-size=0.35" alt="Andika Dicky Sanjaya" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Andika Dicky Sanjaya</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_2" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🌿 Backend</span></div>
            </div>
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="https://ui-avatars.com/api/?name=Irene+Trisnawati&background=047857&color=fff&size=200&bold=true&font-size=0.35" alt="Irene Trisnawati" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Irene Trisnawati</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_3" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🍀 UI/UX</span></div>
            </div>
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="https://ui-avatars.com/api/?name=Deny+Hendrata&background=065f46&color=fff&size=200&bold=true&font-size=0.35" alt="Deny Hendrata" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Deny Hendrata</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center"><span data-i18n="dev_specialty_4" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🌳 Fullstack</span></div>
            </div>
        </div>
        <div class="px-6 pb-6 text-center">
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

