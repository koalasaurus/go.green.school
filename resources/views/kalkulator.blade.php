<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kalkulator Sampah - Go Green School</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
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
        @keyframes countUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
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

        /* Calculator-specific styles */
        .formula-box {
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
            border-left: 4px solid #10b981;
        }

        .result-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .result-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(16, 185, 129, 0.15);
        }

        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
        }

        .animate-result {
            animation: countUp 0.5s ease-out forwards;
        }

        .chart-container {
            position: relative;
            max-width: 320px;
            margin: 0 auto;
        }

        .history-row {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .history-row:hover { background-color: #f0fdf4; }
        .history-row.active-row {
            background-color: #dcfce7;
            border-left: 3px solid #10b981;
        }
        .history-row.removing {
            opacity: 0;
            transform: translateX(30px);
            max-height: 0;
            padding: 0;
            overflow: hidden;
        }

        .badge-organic { background: #dcfce7; color: #15803d; }
        .badge-anorganic { background: #fef3c7; color: #b45309; }
        .badge-plastic { background: #fee2e2; color: #dc2626; }

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

            <!-- Navigation Bar atas -->
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
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About</a>
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/program" data-i18n="nav_program">Program</a>
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/contact" data-i18n="nav_contact">Contact</a>
                            <a class="text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/kalkulator" data-i18n="nav_calculator">Calculator</a>
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
            <div class="float-particle fixed top-[30%] right-[12%] w-3 h-3 bg-primary/20 rounded-full z-10" style="animation-delay: -2s;"></div>
            <div class="float-particle fixed top-[65%] left-[15%] w-2 h-2 bg-accent-blue/20 rounded-full z-10" style="animation-delay: -5s; animation-duration: 10s;"></div>

            <main class="flex flex-col flex-1 pt-24">

                <!-- Page Hero -->
                <section class="relative px-4 md:px-20 lg:px-40 pt-12 pb-8">
                    <div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute top-20 right-0 w-96 h-96 bg-forest/5 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute inset-0 mesh-gradient -z-10"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: -1;"></div>
                    <div class="max-w-7xl mx-auto text-center">
                        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                            <span class="material-symbols-outlined text-base">science</span>
                            <span data-i18n="calc_badge">RPL × Mathematics Collaboration</span>
                        </div>
                        <h1 class="text-forest text-4xl md:text-6xl font-black tracking-tight leading-[1.1] mb-4"><span class="gradient-text" data-i18n="calc_title">Waste Calculator</span></h1>
                        <p class="text-forest/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" data-i18n="calc_subtitle">Calculate, analyze, and predict your school's waste production with mathematical precision.</p>
                        <div class="section-divider mt-8"></div>
                    </div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-32 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>
                </section>

                <!-- Calculator Section -->
                <section class="px-4 md:px-20 lg:px-40 py-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">

                            <!-- Input Form - Left Side -->
                            <div class="lg:col-span-2 fade-up">
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 sticky top-28 hover-glow transition-all duration-500">
                                    <div class="flex items-center gap-3 mb-6">
                                        <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary">edit_note</span>
                                        </div>
                                        <div>
                                            <h3 class="text-forest font-bold text-lg" data-i18n="input_title">Input Data</h3>
                                            <p class="text-forest/50 text-xs" data-i18n="input_desc">Enter your waste collection data</p>
                                        </div>
                                    </div>

                                    <form id="wasteForm" class="space-y-5" onsubmit="return false;">
                                        <!-- Class Name -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="label_class">Class Name</label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">school</span>
                                                <input id="className" type="text" placeholder="e.g. XII RPL 1" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30"/>
                                            </div>
                                        </div>

                                        <!-- Number of Days -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="label_days">Number of Days</label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">calendar_month</span>
                                                <input id="numDays" type="number" min="1" placeholder="e.g. 5" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30"/>
                                            </div>
                                        </div>

                                        <!-- Organic Waste -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2">
                                                <span class="inline-flex items-center gap-1.5">
                                                    <span class="size-2.5 rounded-full bg-green-500"></span>
                                                    <span data-i18n="label_organic">Organic Waste (kg)</span>
                                                </span>
                                            </label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-green-500/50 text-xl">eco</span>
                                                <input id="organic" type="number" min="0" step="0.01" placeholder="0.00" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-green-500 focus:outline-none transition-all bg-sage/30"/>
                                            </div>
                                        </div>

                                        <!-- Anorganic Waste -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2">
                                                <span class="inline-flex items-center gap-1.5">
                                                    <span class="size-2.5 rounded-full bg-amber-500"></span>
                                                    <span data-i18n="label_anorganic">Anorganic Waste (kg)</span>
                                                </span>
                                            </label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-amber-500/50 text-xl">delete</span>
                                                <input id="anorganic" type="number" min="0" step="0.01" placeholder="0.00" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-amber-500 focus:outline-none transition-all bg-sage/30"/>
                                            </div>
                                        </div>

                                        <!-- B3 Waste -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2">
                                                <span class="inline-flex items-center gap-1.5">
                                                    <span class="size-2.5 rounded-full bg-red-500"></span>
                                                    <span data-i18n="label_plastic">B3 Waste (kg)</span>
                                                </span>
                                            </label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-red-500/50 text-xl">science</span>
                                                <input id="plastic" type="number" min="0" step="0.01" placeholder="0.00" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-red-500 focus:outline-none transition-all bg-sage/30"/>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="flex gap-3 pt-2">
                                            <button onclick="calculate()" class="flex-1 flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white py-3.5 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5">
                                                <span class="material-symbols-outlined text-lg">calculate</span>
                                                <span data-i18n="btn_calculate">Calculate</span>
                                            </button>
                                            <button onclick="resetForm()" class="flex items-center justify-center gap-1 border border-forest/10 text-forest/60 hover:bg-forest/5 px-5 py-3.5 rounded-xl text-sm font-semibold transition-all">
                                                <span class="material-symbols-outlined text-lg">refresh</span>
                                                <span data-i18n="btn_reset">Reset</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Results - Right Side -->
                            <div class="lg:col-span-3 space-y-8">

                                <!-- Results Placeholder (before calculation) -->
                                <div id="resultsPlaceholder" class="fade-up bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-12 text-center">
                                    <div class="size-20 rounded-full bg-sage flex items-center justify-center mx-auto mb-5">
                                        <span class="material-symbols-outlined text-primary text-4xl">monitoring</span>
                                    </div>
                                    <h3 class="text-forest text-xl font-bold mb-2" data-i18n="placeholder_title">Waiting for Input</h3>
                                    <p class="text-forest/50 text-sm max-w-sm mx-auto" data-i18n="placeholder_desc">Fill in the form on the left and click "Calculate" to see your waste analysis results.</p>
                                </div>

                                <!-- Results Section (after calculation) -->
                                <div id="resultsSection" class="hidden space-y-6">

                                    <!-- Class Info Header -->
                                    <div class="fade-up bg-forest rounded-2xl p-6 text-white">
                                        <div class="flex items-center justify-between flex-wrap gap-4">
                                            <div>
                                                <p class="text-sage/60 text-xs uppercase tracking-widest font-semibold" data-i18n="result_analysis">Analysis Results</p>
                                                <h3 id="resultClassName" class="text-2xl font-black mt-1">XII RPL 1</h3>
                                            </div>
                                            <div class="flex items-center gap-2 bg-white/10 rounded-full px-4 py-2">
                                                <span class="material-symbols-outlined text-primary text-sm">calendar_month</span>
                                                <span id="resultDays" class="text-sm font-semibold">5 Days</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Summary Cards -->
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <!-- Total -->
                                        <div class="result-card bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-5 text-center">
                                            <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center mx-auto mb-3">
                                                <span class="material-symbols-outlined text-primary">inventory_2</span>
                                            </div>
                                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider mb-1" data-i18n="res_total">Total</p>
                                            <p id="resTotal" class="text-forest text-2xl font-black">0 kg</p>
                                        </div>
                                        <!-- Average -->
                                        <div class="result-card bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-5 text-center">
                                            <div class="size-10 rounded-xl bg-blue-500/10 flex items-center justify-center mx-auto mb-3">
                                                <span class="material-symbols-outlined text-blue-500">functions</span>
                                            </div>
                                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider mb-1" data-i18n="res_average">Average / Day</p>
                                            <p id="resAverage" class="text-forest text-2xl font-black">0 kg</p>
                                        </div>
                                        <!-- Prediction (Clickable) -->
                                        <div onclick="openPredictionModal()" class="result-card bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-5 text-center cursor-pointer hover:shadow-xl hover:shadow-purple-500/10 hover:-translate-y-1 transition-all duration-300 group relative">
                                            <div class="size-10 rounded-xl bg-purple-500/10 flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-500/20 transition-colors">
                                                <span class="material-symbols-outlined text-purple-500">trending_up</span>
                                            </div>
                                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider mb-1" data-i18n="res_prediction">30-Day Prediction</p>
                                            <p id="resPrediction" class="text-forest text-2xl font-black">0 kg</p>
                                            <p class="text-purple-500 text-[10px] font-semibold mt-2 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-1" data-i18n="pred_click_detail">
                                                <span class="material-symbols-outlined text-xs">open_in_new</span>
                                                Click for details
                                            </p>
                                        </div>
                                        <!-- Category Count -->
                                        <div class="result-card bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-5 text-center">
                                            <div class="size-10 rounded-xl bg-amber-500/10 flex items-center justify-center mx-auto mb-3">
                                                <span class="material-symbols-outlined text-amber-500">category</span>
                                            </div>
                                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider mb-1" data-i18n="res_categories">Categories</p>
                                            <p class="text-forest text-2xl font-black">3</p>
                                        </div>
                                    </div>

                                    <!-- Percentage Breakdown & Chart -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Percentage Bars -->
                                        <div class="fade-up bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-6">
                                            <h4 class="text-forest font-bold text-base mb-5 flex items-center gap-2">
                                                <span class="material-symbols-outlined text-primary text-xl">pie_chart</span>
                                                <span data-i18n="res_composition">Waste Composition</span>
                                            </h4>
                                            <!-- Organic -->
                                            <div class="mb-4">
                                                <div class="flex items-center justify-between text-sm mb-1.5">
                                                    <span class="flex items-center gap-2 font-semibold text-forest/80">
                                                        <span class="size-2.5 rounded-full bg-green-500"></span>
                                                        <span data-i18n="type_organic">Organic</span>
                                                    </span>
                                                    <span id="pctOrganic" class="text-forest font-bold">0%</span>
                                                </div>
                                                <div class="w-full bg-forest/5 rounded-full h-3">
                                                    <div id="barOrganic" class="bg-green-500 h-3 rounded-full transition-all duration-700 ease-out" style="width: 0%"></div>
                                                </div>
                                                <p id="kgOrganic" class="text-xs text-forest/40 mt-1">0 kg</p>
                                            </div>
                                            <!-- Anorganic -->
                                            <div class="mb-4">
                                                <div class="flex items-center justify-between text-sm mb-1.5">
                                                    <span class="flex items-center gap-2 font-semibold text-forest/80">
                                                        <span class="size-2.5 rounded-full bg-amber-500"></span>
                                                        <span data-i18n="type_anorganic">Anorganic</span>
                                                    </span>
                                                    <span id="pctAnorganic" class="text-forest font-bold">0%</span>
                                                </div>
                                                <div class="w-full bg-forest/5 rounded-full h-3">
                                                    <div id="barAnorganic" class="bg-amber-500 h-3 rounded-full transition-all duration-700 ease-out" style="width: 0%"></div>
                                                </div>
                                                <p id="kgAnorganic" class="text-xs text-forest/40 mt-1">0 kg</p>
                                            </div>
                                            <!-- B3 -->
                                            <div>
                                                <div class="flex items-center justify-between text-sm mb-1.5">
                                                    <span class="flex items-center gap-2 font-semibold text-forest/80">
                                                        <span class="size-2.5 rounded-full bg-red-500"></span>
                                                        <span data-i18n="type_plastic">B3</span>
                                                    </span>
                                                    <span id="pctPlastic" class="text-forest font-bold">0%</span>
                                                </div>
                                                <div class="w-full bg-forest/5 rounded-full h-3">
                                                    <div id="barPlastic" class="bg-red-500 h-3 rounded-full transition-all duration-700 ease-out" style="width: 0%"></div>
                                                </div>
                                                <p id="kgPlastic" class="text-xs text-forest/40 mt-1">0 kg</p>
                                            </div>
                                        </div>

                                        <!-- Donut Chart -->
                                        <div class="fade-up bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-6 flex flex-col items-center justify-center">
                                            <h4 class="text-forest font-bold text-base mb-4 flex items-center gap-2 self-start">
                                                <span class="material-symbols-outlined text-primary text-xl">donut_large</span>
                                                <span data-i18n="res_chart">Visual Chart</span>
                                            </h4>
                                            <div class="chart-container">
                                                <canvas id="wasteChart"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Formulas Section -->
                                    <div class="fade-up bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-6">
                                        <h4 class="text-forest font-bold text-base mb-5 flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary text-xl">function</span>
                                            <span data-i18n="res_formulas">Mathematical Formulas Used</span>
                                        </h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <!-- Total Formula -->
                                            <div class="formula-box rounded-xl p-4">
                                                <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2" data-i18n="formula_total">Total Waste</p>
                                                <p class="text-forest font-mono text-sm font-semibold">Total = O + A + B3</p>
                                                <p id="formulaTotalExample" class="text-forest/50 text-xs mt-1.5 font-mono"></p>
                                            </div>
                                            <!-- Average Formula -->
                                            <div class="formula-box rounded-xl p-4">
                                                <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2" data-i18n="formula_avg">Daily Average</p>
                                                <p class="text-forest font-mono text-sm font-semibold">Avg = Total ÷ Days</p>
                                                <p id="formulaAvgExample" class="text-forest/50 text-xs mt-1.5 font-mono"></p>
                                            </div>
                                            <!-- Percentage Formula -->
                                            <div class="formula-box rounded-xl p-4">
                                                <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2" data-i18n="formula_pct">Percentage</p>
                                                <p class="text-forest font-mono text-sm font-semibold">% = (Type ÷ Total) × 100</p>
                                                <p id="formulaPctExample" class="text-forest/50 text-xs mt-1.5 font-mono"></p>
                                            </div>
                                            <!-- Prediction Formula -->
                                            <div class="formula-box rounded-xl p-4">
                                                <p class="text-xs font-bold text-primary uppercase tracking-wider mb-2" data-i18n="formula_pred">30-Day Prediction</p>
                                                <p class="text-forest font-mono text-sm font-semibold">Pred = Avg × 30</p>
                                                <p id="formulaPredExample" class="text-forest/50 text-xs mt-1.5 font-mono"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Environmental Impact Insight -->
                                    <div id="insightBox" class="fade-up bg-gradient-to-br from-forest to-background-dark rounded-2xl p-8 text-white">
                                        <div class="flex items-start gap-4">
                                            <div class="size-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                                                <span class="material-symbols-outlined text-primary text-2xl">lightbulb</span>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-lg mb-2" data-i18n="insight_title">Environmental Insight</h4>
                                                <p id="insightText" class="text-sage/70 text-sm leading-relaxed"></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Saved Data History Section -->
                <section class="px-4 md:px-20 lg:px-40 py-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 overflow-hidden">
                            <!-- Header -->
                            <div class="p-6 border-b border-forest/5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary">database</span>
                                    </div>
                                    <div>
                                        <h3 class="text-forest font-bold text-lg" data-i18n="history_title">Saved Data</h3>
                                        <p class="text-forest/50 text-xs"><span data-i18n="history_desc">All calculation records are stored in your browser</span> &middot; <span id="historyCount">0</span> <span data-i18n="history_records">records</span></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <button onclick="viewAllCombined()" class="flex items-center gap-1.5 bg-primary hover:bg-forest text-white px-4 py-2 rounded-xl text-xs font-bold shadow-md shadow-primary/20 transition-all transform hover:-translate-y-0.5">
                                        <span class="material-symbols-outlined text-base">merge</span>
                                        <span data-i18n="btn_view_all">View All Combined</span>
                                    </button>
                                    <button onclick="exportCSV()" class="flex items-center gap-1.5 border border-forest/10 text-forest/60 hover:bg-forest/5 px-4 py-2 rounded-xl text-xs font-semibold transition-all">
                                        <span class="material-symbols-outlined text-base">download</span>
                                        <span data-i18n="btn_export">Export CSV</span>
                                    </button>
                                    <button onclick="clearAllEntries()" class="flex items-center gap-1.5 border border-red-200 text-red-500 hover:bg-red-50 px-4 py-2 rounded-xl text-xs font-semibold transition-all">
                                        <span class="material-symbols-outlined text-base">delete_sweep</span>
                                        <span data-i18n="btn_clear_all">Clear All</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Empty State -->
                            <div id="historyEmpty" class="p-12 text-center">
                                <div class="size-16 rounded-full bg-sage flex items-center justify-center mx-auto mb-4">
                                    <span class="material-symbols-outlined text-primary text-3xl">folder_open</span>
                                </div>
                                <h4 class="text-forest font-bold mb-1" data-i18n="history_empty_title">No Data Yet</h4>
                                <p class="text-forest/50 text-sm" data-i18n="history_empty_desc">Your calculation results will appear here after you calculate.</p>
                            </div>

                            <!-- Table -->
                            <div id="historyTableWrapper" class="hidden overflow-x-auto">
                                <table class="w-full text-sm">
                                    <thead>
                                        <tr class="bg-sage/50 text-forest/60 text-xs uppercase tracking-wider">
                                            <th class="px-6 py-3 text-left font-semibold">No</th>
                                            <th class="px-6 py-3 text-left font-semibold" data-i18n="th_date">Date</th>
                                            <th class="px-6 py-3 text-left font-semibold" data-i18n="th_class">Class</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_days">Days</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_organic">Organic</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_anorganic">Anorganic</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_plastic">B3</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_total">Total</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_avg">Avg/Day</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_pred">30d Pred</th>
                                            <th class="px-6 py-3 text-center font-semibold" data-i18n="th_action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyBody"></tbody>
                                </table>
                            </div>

                            <!-- Summary Footer -->
                            <div id="historySummary" class="hidden border-t border-forest/5 bg-sage/30 px-6 py-4">
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                    <div>
                                        <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="sum_total_all">Grand Total</p>
                                        <p id="sumTotal" class="text-forest font-black text-lg">0 kg</p>
                                    </div>
                                    <div>
                                        <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="sum_avg_all">Overall Average</p>
                                        <p id="sumAvg" class="text-forest font-black text-lg">0 kg</p>
                                    </div>
                                    <div>
                                        <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="sum_most_waste">Most Waste Type</p>
                                        <p id="sumMostType" class="text-forest font-black text-lg">-</p>
                                    </div>
                                    <div>
                                        <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="sum_total_entries">Total Entries</p>
                                        <p id="sumEntries" class="text-forest font-black text-lg">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Info Section - How It Works -->
                <section class="px-4 md:px-20 lg:px-40 py-16 relative">
                    <div class="absolute inset-0 mesh-gradient -z-10"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: -1;"></div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up text-center mb-12">
                            <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="how_label">Guide</span>
                            <h2 class="text-forest text-3xl md:text-4xl font-black tracking-tight mt-3" data-i18n="how_title">How to Use the Calculator</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="fade-up bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-8 text-center hover:scale-105 hover:-translate-y-1 transition-all duration-300 hover-glow relative overflow-hidden">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-accent-teal"></div>
                                <div class="size-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-primary text-3xl">edit_note</span>
                                </div>
                                <div class="inline-flex bg-primary/10 text-primary rounded-full px-3 py-1 text-xs font-bold mb-3">Step 1</div>
                                <h4 class="text-forest font-bold text-base mb-2" data-i18n="step1_title">Enter Data</h4>
                                <p class="text-forest/50 text-sm" data-i18n="step1_desc">Input your class name, number of data collection days, and the weight of each waste type in kilograms.</p>
                            </div>
                            <div class="fade-up bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-8 text-center hover:scale-105 hover:-translate-y-1 transition-all duration-300 hover-glow relative overflow-hidden">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-accent-blue to-blue-600"></div>
                                <div class="size-16 rounded-2xl bg-blue-500/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-blue-500 text-3xl">calculate</span>
                                </div>
                                <div class="inline-flex bg-blue-500/10 text-blue-500 rounded-full px-3 py-1 text-xs font-bold mb-3">Step 2</div>
                                <h4 class="text-forest font-bold text-base mb-2" data-i18n="step2_title">Calculate</h4>
                                <p class="text-forest/50 text-sm" data-i18n="step2_desc">Click the Calculate button and the system will instantly compute the total, average, percentage, and 30-day prediction.</p>
                            </div>
                            <div class="fade-up bg-white rounded-2xl shadow-md shadow-forest/5 border border-forest/5 p-8 text-center hover:scale-105 hover:-translate-y-1 transition-all duration-300 hover-glow relative overflow-hidden">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-accent-violet to-purple-600"></div>
                                <div class="size-16 rounded-2xl bg-purple-500/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-purple-500 text-3xl">analytics</span>
                                </div>
                                <div class="inline-flex bg-purple-500/10 text-purple-500 rounded-full px-3 py-1 text-xs font-bold mb-3">Step 3</div>
                                <h4 class="text-forest font-bold text-base mb-2" data-i18n="step3_title">Analyze Results</h4>
                                <p class="text-forest/50 text-sm" data-i18n="step3_desc">Review the charts, percentage breakdowns, and formulas to understand your waste management patterns.</p>
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
                            Shaping the character of future leaders who are not only academically intelligent, but also have high empathy for earth's sustainability.
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

    <!-- 30-Day Prediction Detail Modal -->
    <div id="predictionModal" class="fixed inset-0 z-[100] hidden">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closePredictionModal()"></div>
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div id="predictionModalContent" class="relative bg-white rounded-3xl shadow-2xl w-full max-w-lg p-8 transform scale-95 opacity-0 transition-all duration-300">
                <!-- Close Button -->
                <button onclick="closePredictionModal()" class="absolute top-4 right-4 size-10 rounded-xl hover:bg-forest/5 flex items-center justify-center text-forest/40 hover:text-forest transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>

                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="size-14 rounded-2xl bg-purple-500/10 flex items-center justify-center mx-auto mb-4">
                        <span class="material-symbols-outlined text-purple-500 text-3xl">trending_up</span>
                    </div>
                    <h3 class="text-forest text-2xl font-black tracking-tight" data-i18n="pred_modal_title">30-Day Prediction</h3>
                    <p class="text-forest/50 text-sm mt-1" data-i18n="pred_modal_subtitle">Waste prediction breakdown by category</p>
                </div>

                <!-- Total Prediction -->
                <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-5 text-center mb-6">
                    <p class="text-white/70 text-xs font-semibold uppercase tracking-wider mb-1" data-i18n="pred_total_label">Total 30-Day Prediction</p>
                    <p id="predModalTotal" class="text-white text-3xl font-black">0 kg</p>
                </div>

                <!-- Category Predictions -->
                <div class="space-y-4">
                    <!-- Organic Prediction -->
                    <div class="flex items-center gap-4 bg-green-50 rounded-2xl p-4 border border-green-100">
                        <div class="size-12 rounded-xl bg-green-500/20 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-green-600 text-2xl">compost</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="pred_organic_label">Organic Waste</p>
                            <p id="predModalOrganic" class="text-forest text-xl font-black">0 kg</p>
                        </div>
                        <div class="text-right">
                            <p id="predModalOrganicPct" class="text-green-600 text-sm font-bold">0%</p>
                            <p class="text-forest/40 text-[10px]" data-i18n="pred_per_day">per day</p>
                            <p id="predModalOrganicDaily" class="text-forest/60 text-xs font-semibold">0 kg</p>
                        </div>
                    </div>

                    <!-- Anorganic Prediction -->
                    <div class="flex items-center gap-4 bg-amber-50 rounded-2xl p-4 border border-amber-100">
                        <div class="size-12 rounded-xl bg-amber-500/20 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-amber-600 text-2xl">recycling</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="pred_anorganic_label">Anorganic Waste</p>
                            <p id="predModalAnorganic" class="text-forest text-xl font-black">0 kg</p>
                        </div>
                        <div class="text-right">
                            <p id="predModalAnorganicPct" class="text-amber-600 text-sm font-bold">0%</p>
                            <p class="text-forest/40 text-[10px]" data-i18n="pred_per_day">per day</p>
                            <p id="predModalAnorganicDaily" class="text-forest/60 text-xs font-semibold">0 kg</p>
                        </div>
                    </div>

                    <!-- B3 Prediction -->
                    <div class="flex items-center gap-4 bg-red-50 rounded-2xl p-4 border border-red-100">
                        <div class="size-12 rounded-xl bg-red-500/20 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-red-600 text-2xl">warning</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-forest/50 text-xs font-semibold uppercase tracking-wider" data-i18n="pred_b3_label">B3 Hazardous Waste</p>
                            <p id="predModalB3" class="text-forest text-xl font-black">0 kg</p>
                        </div>
                        <div class="text-right">
                            <p id="predModalB3Pct" class="text-red-600 text-sm font-bold">0%</p>
                            <p class="text-forest/40 text-[10px]" data-i18n="pred_per_day">per day</p>
                            <p id="predModalB3Daily" class="text-forest/60 text-xs font-semibold">0 kg</p>
                        </div>
                    </div>
                </div>

                <!-- Formula Note -->
                <div class="mt-6 bg-forest/5 rounded-xl p-4">
                    <p class="text-forest/50 text-xs leading-relaxed flex items-start gap-2">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">info</span>
                        <span data-i18n="pred_formula_note">Prediction formula: (Category Weight ÷ Days) × 30. Each category is predicted based on its own daily average.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Language Translations -->
    <script>
    const translations = {
        en: {
            nav_home: "Home",
            nav_about: "About",
            nav_program: "Program",
            nav_contact: "Contact",
            nav_calculator: "Calculator",
            nav_profile_hint: "Developer Profile",
            nav_back_home: "Back to Home",
            calc_badge: "RPL × Mathematics Collaboration",
            calc_title: "Waste Calculator",
            calc_subtitle: "Calculate, analyze, and predict your school's waste production with mathematical precision.",
            input_title: "Input Data",
            input_desc: "Enter your waste collection data",
            label_class: "Class Name",
            label_days: "Number of Days",
            label_organic: "Organic Waste (kg)",
            label_anorganic: "Anorganic Waste (kg)",
            label_plastic: "B3 Waste (kg)",
            btn_calculate: "Calculate",
            btn_reset: "Reset",
            placeholder_title: "Waiting for Input",
            placeholder_desc: 'Fill in the form on the left and click "Calculate" to see your waste analysis results.',
            result_analysis: "Analysis Results",
            res_total: "Total",
            res_average: "Average / Day",
            res_prediction: "30-Day Prediction",
            pred_click_detail: "Click for details",
            pred_modal_title: "30-Day Prediction",
            pred_modal_subtitle: "Waste prediction breakdown by category",
            pred_total_label: "Total 30-Day Prediction",
            pred_organic_label: "Organic Waste",
            pred_anorganic_label: "Anorganic Waste",
            pred_b3_label: "B3 Hazardous Waste",
            pred_per_day: "per day",
            pred_formula_note: "Prediction formula: (Category Weight ÷ Days) × 30. Each category is predicted based on its own daily average.",
            res_categories: "Categories",
            res_composition: "Waste Composition",
            res_chart: "Visual Chart",
            res_formulas: "Mathematical Formulas Used",
            type_organic: "Organic",
            type_anorganic: "Anorganic",
            type_plastic: "B3",
            formula_total: "Total Waste",
            formula_avg: "Daily Average",
            formula_pct: "Percentage",
            formula_pred: "30-Day Prediction",
            insight_title: "Environmental Insight",
            how_label: "Guide",
            how_title: "How to Use the Calculator",
            step1_title: "Enter Data",
            step1_desc: "Input your class name, number of data collection days, and the weight of each waste type in kilograms.",
            step2_title: "Calculate",
            step2_desc: 'Click the Calculate button and the system will instantly compute the total, average, percentage, and 30-day prediction.',
            step3_title: "Analyze Results",
            step3_desc: "Review the charts, percentage breakdowns, and formulas to understand your waste management patterns.",
            footer_desc: "Shaping the character of future leaders who are not only academically intelligent, but also have high empathy for earth's sustainability.",
            footer_quicklinks: "Quick Links",
            footer_contactus: "Contact Us",
            footer_newsletter: "Newsletter",
            footer_newsletter_desc: "Get green tips in your inbox.",
            footer_copyright: "© 2026 Go Green School. All Rights Reserved.",
            alert_fill: "Please fill in all fields with valid values!",
            days_label: "Days",
            insight_high: "⚠️ Your class produces a significant amount of waste. With a 30-day prediction of {pred} kg, consider implementing a waste reduction program. Focus on reducing {highest} waste which makes up {pct}% of total waste.",
            insight_medium: "📊 Your waste production is moderate. The 30-day prediction shows {pred} kg. Try to reduce {highest} waste ({pct}%) through recycling and composting programs.",
            insight_low: "🌿 Great job! Your waste production is relatively low. Keep maintaining good habits and try to reduce {highest} waste ({pct}%) even further.",
            history_title: "Saved Data",
            history_desc: "All calculation records are stored in your browser",
            history_records: "records",
            history_empty_title: "No Data Yet",
            history_empty_desc: "Your calculation results will appear here after you calculate.",
            btn_export: "Export CSV",
            btn_clear_all: "Clear All",
            th_date: "Date",
            th_class: "Class",
            th_days: "Days",
            th_organic: "Organic",
            th_anorganic: "Anorganic",
            th_plastic: "B3",
            th_total: "Total",
            th_avg: "Avg/Day",
            th_pred: "30d Pred",
            th_action: "Action",
            sum_total_all: "Grand Total",
            sum_avg_all: "Overall Average",
            sum_most_waste: "Most Waste Type",
            sum_total_entries: "Total Entries",
            confirm_delete: "Delete this entry?",
            confirm_clear: "Delete all saved data? This action cannot be undone.",
            saved_success: "Data saved successfully!",
            btn_view_all: "View All Combined",
            combined_title: "All Data Combined",
            combined_entries: "entries combined",
            alert_no_data: "No saved data to combine. Please calculate some data first.",
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
            calc_badge: "Kolaborasi RPL × Matematika",
            calc_title: "Kalkulator Sampah",
            calc_subtitle: "Hitung, analisis, dan prediksi produksi sampah sekolah kamu dengan presisi matematika.",
            input_title: "Input Data",
            input_desc: "Masukkan data pengumpulan sampah",
            label_class: "Nama Kelas",
            label_days: "Jumlah Hari",
            label_organic: "Sampah Organik (kg)",
            label_anorganic: "Sampah Anorganik (kg)",
            label_plastic: "Sampah B3 (kg)",
            btn_calculate: "Hitung",
            btn_reset: "Reset",
            placeholder_title: "Menunggu Input",
            placeholder_desc: 'Isi formulir di sebelah kiri dan klik "Hitung" untuk melihat hasil analisis sampah.',
            result_analysis: "Hasil Analisis",
            res_total: "Total",
            res_average: "Rata-rata / Hari",
            res_prediction: "Prediksi 30 Hari",
            pred_click_detail: "Klik untuk detail",
            pred_modal_title: "Prediksi 30 Hari",
            pred_modal_subtitle: "Rincian prediksi sampah per kategori",
            pred_total_label: "Total Prediksi 30 Hari",
            pred_organic_label: "Sampah Organik",
            pred_anorganic_label: "Sampah Anorganik",
            pred_b3_label: "Sampah B3 (Berbahaya)",
            pred_per_day: "per hari",
            pred_formula_note: "Rumus prediksi: (Berat Kategori ÷ Hari) × 30. Setiap kategori diprediksi berdasarkan rata-rata hariannya.",
            res_categories: "Kategori",
            res_composition: "Komposisi Sampah",
            res_chart: "Grafik Visual",
            res_formulas: "Rumus Matematika yang Digunakan",
            type_organic: "Organik",
            type_anorganic: "Anorganik",
            type_plastic: "B3",
            formula_total: "Total Sampah",
            formula_avg: "Rata-rata Harian",
            formula_pct: "Persentase",
            formula_pred: "Prediksi 30 Hari",
            insight_title: "Wawasan Lingkungan",
            how_label: "Panduan",
            how_title: "Cara Menggunakan Kalkulator",
            step1_title: "Masukkan Data",
            step1_desc: "Input nama kelas, jumlah hari pengumpulan data, dan berat setiap jenis sampah dalam kilogram.",
            step2_title: "Hitung",
            step2_desc: "Klik tombol Hitung dan sistem akan langsung menghitung total, rata-rata, persentase, dan prediksi 30 hari.",
            step3_title: "Analisis Hasil",
            step3_desc: "Tinjau grafik, rincian persentase, dan rumus untuk memahami pola pengelolaan sampah kamu.",
            footer_desc: "Membentuk karakter pemimpin masa depan yang tidak hanya cerdas secara akademis, tetapi juga memiliki empati tinggi terhadap keberlanjutan bumi.",
            footer_quicklinks: "Tautan Cepat",
            footer_contactus: "Hubungi Kami",
            footer_newsletter: "Buletin",
            footer_newsletter_desc: "Dapatkan tips hijau di kotak masuk Anda.",
            footer_copyright: "© 2026 Go Green School. Hak Cipta Dilindungi.",
            alert_fill: "Harap isi semua kolom dengan nilai yang valid!",
            days_label: "Hari",
            insight_high: "⚠️ Kelas kamu menghasilkan cukup banyak sampah. Dengan prediksi 30 hari sebesar {pred} kg, pertimbangkan untuk menerapkan program pengurangan sampah. Fokus pada pengurangan sampah {highest} yang mencakup {pct}% dari total sampah.",
            insight_medium: "📊 Produksi sampah kelas kamu tergolong sedang. Prediksi 30 hari menunjukkan {pred} kg. Cobalah mengurangi sampah {highest} ({pct}%) melalui program daur ulang dan pengomposan.",
            insight_low: "🌿 Kerja bagus! Produksi sampah kelas kamu relatif rendah. Terus pertahankan kebiasaan baik dan coba kurangi sampah {highest} ({pct}%) lebih jauh lagi.",
            history_title: "Data Tersimpan",
            history_desc: "Semua catatan perhitungan tersimpan di browser kamu",
            history_records: "catatan",
            history_empty_title: "Belum Ada Data",
            history_empty_desc: "Hasil perhitungan kamu akan muncul di sini setelah kamu menghitung.",
            btn_export: "Ekspor CSV",
            btn_clear_all: "Hapus Semua",
            th_date: "Tanggal",
            th_class: "Kelas",
            th_days: "Hari",
            th_organic: "Organik",
            th_anorganic: "Anorganik",
            th_plastic: "B3",
            th_total: "Total",
            th_avg: "Rata-rata",
            th_pred: "Pred 30h",
            th_action: "Aksi",
            sum_total_all: "Total Keseluruhan",
            sum_avg_all: "Rata-rata Keseluruhan",
            sum_most_waste: "Jenis Sampah Terbanyak",
            sum_total_entries: "Total Entri",
            confirm_delete: "Hapus data ini?",
            confirm_clear: "Hapus semua data tersimpan? Tindakan ini tidak bisa dibatalkan.",
            saved_success: "Data berhasil disimpan!",
            btn_view_all: "Lihat Gabungan Semua",
            combined_title: "Semua Data Digabung",
            combined_entries: "data digabungkan",
            alert_no_data: "Belum ada data tersimpan. Silakan hitung data terlebih dahulu.",
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

    let currentLang = localStorage.getItem('ggs_lang');
    if (!currentLang) {
        currentLang = 'en';
        localStorage.setItem('ggs_lang', 'en');
    }

    function setLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('ggs_lang', lang);
        document.documentElement.lang = lang;

        document.title = lang === 'en' ? 'Waste Calculator - Go Green School' : 'Kalkulator Sampah - Go Green School';

        document.querySelectorAll('[data-i18n]').forEach(function(el) {
            var key = el.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                el.textContent = translations[lang][key];
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

    <!-- Calculator Logic -->
    <script>
    const STORAGE_KEY = 'ggs_waste_data';
    let wasteChart = null;

    // ===== localStorage CRUD =====
    function getEntries() {
        try {
            return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
        } catch (e) {
            return [];
        }
    }

    function saveEntry(entry) {
        const entries = getEntries();
        entry.id = Date.now();
        entry.date = new Date().toLocaleDateString(currentLang === 'id' ? 'id-ID' : 'en-US', {
            year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit'
        });
        entries.push(entry);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(entries));
        renderHistory();
    }

    function deleteEntry(id) {
        if (!confirm(translations[currentLang].confirm_delete)) return;
        const row = document.querySelector('[data-entry-id="' + id + '"]');
        if (row) {
            row.classList.add('removing');
            setTimeout(function() {
                const entries = getEntries().filter(e => e.id !== id);
                localStorage.setItem(STORAGE_KEY, JSON.stringify(entries));
                renderHistory();
            }, 300);
        } else {
            const entries = getEntries().filter(e => e.id !== id);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(entries));
            renderHistory();
        }
    }

    function clearAllEntries() {
        const entries = getEntries();
        if (entries.length === 0) return;
        if (!confirm(translations[currentLang].confirm_clear)) return;
        localStorage.removeItem(STORAGE_KEY);
        renderHistory();
    }

    function renderHistory() {
        const entries = getEntries();
        const tbody = document.getElementById('historyBody');
        const emptyState = document.getElementById('historyEmpty');
        const tableWrapper = document.getElementById('historyTableWrapper');
        const summary = document.getElementById('historySummary');
        const countEl = document.getElementById('historyCount');

        countEl.textContent = entries.length;

        if (entries.length === 0) {
            emptyState.classList.remove('hidden');
            tableWrapper.classList.add('hidden');
            summary.classList.add('hidden');
            return;
        }

        emptyState.classList.add('hidden');
        tableWrapper.classList.remove('hidden');
        summary.classList.remove('hidden');

        // Build table rows
        let html = '';
        let grandOrg = 0, grandAnorg = 0, grandPlast = 0, grandTotal = 0, grandDays = 0;

        entries.forEach(function(e, i) {
            grandOrg += e.organic;
            grandAnorg += e.anorganic;
            grandPlast += e.plastic;
            grandTotal += e.total;
            grandDays += e.days;

            html += '<tr class="history-row border-b border-forest/5" data-entry-id="' + e.id + '" onclick="viewEntry(' + e.id + ')">';
            html += '<td class="px-6 py-3.5 text-forest/40 font-mono text-xs">' + (i + 1) + '</td>';
            html += '<td class="px-6 py-3.5 text-forest/60 text-xs whitespace-nowrap">' + e.date + '</td>';
            html += '<td class="px-6 py-3.5 text-forest font-semibold text-sm">' + e.className + '</td>';
            html += '<td class="px-6 py-3.5 text-center text-forest/70">' + e.days + '</td>';
            html += '<td class="px-6 py-3.5 text-center"><span class="badge-organic px-2 py-0.5 rounded-full text-xs font-semibold">' + e.organic.toFixed(2) + '</span></td>';
            html += '<td class="px-6 py-3.5 text-center"><span class="badge-anorganic px-2 py-0.5 rounded-full text-xs font-semibold">' + e.anorganic.toFixed(2) + '</span></td>';
            html += '<td class="px-6 py-3.5 text-center"><span class="badge-plastic px-2 py-0.5 rounded-full text-xs font-semibold">' + e.plastic.toFixed(2) + '</span></td>';
            html += '<td class="px-6 py-3.5 text-center text-forest font-bold">' + e.total.toFixed(2) + '</td>';
            html += '<td class="px-6 py-3.5 text-center text-forest/70">' + e.average.toFixed(2) + '</td>';
            html += '<td class="px-6 py-3.5 text-center text-purple-600 font-semibold">' + e.prediction.toFixed(2) + '</td>';
            html += '<td class="px-6 py-3.5 text-center"><div class="flex items-center justify-center gap-1">';
            html += '<button onclick="event.stopPropagation(); viewEntry(' + e.id + ')" class="size-8 rounded-lg hover:bg-primary/10 flex items-center justify-center text-forest/30 hover:text-primary transition-all" title="View">';
            html += '<span class="material-symbols-outlined text-lg">visibility</span>';
            html += '</button>';
            html += '<button onclick="event.stopPropagation(); deleteEntry(' + e.id + ')" class="size-8 rounded-lg hover:bg-red-50 flex items-center justify-center text-forest/30 hover:text-red-500 transition-all" title="Delete">';
            html += '<span class="material-symbols-outlined text-lg">close</span>';
            html += '</button></div></td>';
            html += '</tr>';
        });

        tbody.innerHTML = html;

        // Summary
        const grandAvg = grandDays > 0 ? (grandTotal / grandDays) : 0;
        document.getElementById('sumTotal').textContent = grandTotal.toFixed(2) + ' kg';
        document.getElementById('sumAvg').textContent = grandAvg.toFixed(2) + ' kg';
        document.getElementById('sumEntries').textContent = entries.length;

        // Most waste type
        const types = [
            { name: currentLang === 'en' ? 'Organic' : 'Organik', val: grandOrg },
            { name: currentLang === 'en' ? 'Anorganic' : 'Anorganik', val: grandAnorg },
            { name: 'B3', val: grandPlast }
        ].sort((a, b) => b.val - a.val)[0];
        document.getElementById('sumMostType').textContent = types.name;
    }

    function exportCSV() {
        const entries = getEntries();
        if (entries.length === 0) return;

        const header = 'No,Date,Class,Days,Organic (kg),Anorganic (kg),B3 (kg),Total (kg),Average (kg),Prediction 30d (kg)\n';
        let csv = header;
        entries.forEach(function(e, i) {
            csv += (i + 1) + ',' + '"' + e.date + '",' + '"' + e.className + '",' + e.days + ',' + e.organic.toFixed(2) + ',' + e.anorganic.toFixed(2) + ',' + e.plastic.toFixed(2) + ',' + e.total.toFixed(2) + ',' + e.average.toFixed(2) + ',' + e.prediction.toFixed(2) + '\n';
        });

        const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'waste_data_' + new Date().toISOString().slice(0, 10) + '.csv';
        link.click();
        URL.revokeObjectURL(link.href);
    }

    // ===== MAIN CALCULATE =====
    function calculate() {
        const className = document.getElementById('className').value.trim();
        const days = parseFloat(document.getElementById('numDays').value);
        const organic = parseFloat(document.getElementById('organic').value);
        const anorganic = parseFloat(document.getElementById('anorganic').value);
        const plastic = parseFloat(document.getElementById('plastic').value);

        // Validation
        if (!className || isNaN(days) || days <= 0 || isNaN(organic) || isNaN(anorganic) || isNaN(plastic)) {
            alert(translations[currentLang].alert_fill);
            return;
        }

        // ===== CALCULATIONS =====
        const total = organic + anorganic + plastic;
        const average = total / days;
        const pctOrg = total > 0 ? (organic / total) * 100 : 0;
        const pctAnorg = total > 0 ? (anorganic / total) * 100 : 0;
        const pctPlast = total > 0 ? (plastic / total) * 100 : 0;
        const prediction = average * 30;

        // ===== SAVE TO localStorage =====
        saveEntry({
            className: className,
            days: days,
            organic: organic,
            anorganic: anorganic,
            plastic: plastic,
            total: total,
            average: average,
            prediction: prediction
        });

        // ===== DISPLAY RESULTS =====
        displayResults(className, days, organic, anorganic, plastic);

        if (window.innerWidth < 1024) {
            document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    function viewEntry(id) {
        const entries = getEntries();
        const entry = entries.find(e => e.id === id);
        if (!entry) return;

        // Fill input form with entry data
        document.getElementById('className').value = entry.className;
        document.getElementById('numDays').value = entry.days;
        document.getElementById('organic').value = entry.organic;
        document.getElementById('anorganic').value = entry.anorganic;
        document.getElementById('plastic').value = entry.plastic;

        // Display results without saving again
        displayResults(entry.className, entry.days, entry.organic, entry.anorganic, entry.plastic);

        // Highlight active row
        document.querySelectorAll('.history-row').forEach(r => r.classList.remove('active-row'));
        const activeRow = document.querySelector('[data-entry-id="' + id + '"]');
        if (activeRow) activeRow.classList.add('active-row');

        // Scroll to results
        document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function viewAllCombined() {
        const entries = getEntries();
        if (entries.length === 0) {
            alert(translations[currentLang].alert_no_data);
            return;
        }

        let totalOrg = 0, totalAnorg = 0, totalPlast = 0, totalDays = 0;
        entries.forEach(function(e) {
            totalOrg += e.organic;
            totalAnorg += e.anorganic;
            totalPlast += e.plastic;
            totalDays += e.days;
        });

        const combinedName = translations[currentLang].combined_title + ' (' + entries.length + ' ' + translations[currentLang].combined_entries + ')';

        // Fill form with combined totals
        document.getElementById('className').value = combinedName;
        document.getElementById('numDays').value = totalDays;
        document.getElementById('organic').value = totalOrg.toFixed(2);
        document.getElementById('anorganic').value = totalAnorg.toFixed(2);
        document.getElementById('plastic').value = totalPlast.toFixed(2);

        // Display combined results
        displayResults(combinedName, totalDays, totalOrg, totalAnorg, totalPlast);

        // Clear active row highlights
        document.querySelectorAll('.history-row').forEach(r => r.classList.remove('active-row'));

        // Scroll to results
        document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function displayResults(className, days, organic, anorganic, plastic) {
        const total = organic + anorganic + plastic;
        const average = total / days;
        const pctOrg = total > 0 ? (organic / total) * 100 : 0;
        const pctAnorg = total > 0 ? (anorganic / total) * 100 : 0;
        const pctPlast = total > 0 ? (plastic / total) * 100 : 0;
        const prediction = average * 30;

        document.getElementById('resultsPlaceholder').classList.add('hidden');
        document.getElementById('resultsSection').classList.remove('hidden');

        document.getElementById('resultClassName').textContent = className;
        document.getElementById('resultDays').textContent = days + ' ' + translations[currentLang].days_label;

        document.getElementById('resTotal').textContent = total.toFixed(2) + ' kg';
        document.getElementById('resAverage').textContent = average.toFixed(2) + ' kg';
        document.getElementById('resPrediction').textContent = prediction.toFixed(2) + ' kg';

        // Per-category 30-day predictions
        const predOrganic = (organic / days) * 30;
        const predAnorganic = (anorganic / days) * 30;
        const predB3 = (plastic / days) * 30;

        // Update modal values
        document.getElementById('predModalTotal').textContent = prediction.toFixed(2) + ' kg';
        document.getElementById('predModalOrganic').textContent = predOrganic.toFixed(2) + ' kg';
        document.getElementById('predModalAnorganic').textContent = predAnorganic.toFixed(2) + ' kg';
        document.getElementById('predModalB3').textContent = predB3.toFixed(2) + ' kg';

        document.getElementById('predModalOrganicPct').textContent = pctOrg.toFixed(1) + '%';
        document.getElementById('predModalAnorganicPct').textContent = pctAnorg.toFixed(1) + '%';
        document.getElementById('predModalB3Pct').textContent = pctPlast.toFixed(1) + '%';

        document.getElementById('predModalOrganicDaily').textContent = (organic / days).toFixed(2) + ' kg';
        document.getElementById('predModalAnorganicDaily').textContent = (anorganic / days).toFixed(2) + ' kg';
        document.getElementById('predModalB3Daily').textContent = (plastic / days).toFixed(2) + ' kg';

        document.getElementById('pctOrganic').textContent = pctOrg.toFixed(1) + '%';
        document.getElementById('barOrganic').style.width = pctOrg + '%';
        document.getElementById('kgOrganic').textContent = organic.toFixed(2) + ' kg';

        document.getElementById('pctAnorganic').textContent = pctAnorg.toFixed(1) + '%';
        document.getElementById('barAnorganic').style.width = pctAnorg + '%';
        document.getElementById('kgAnorganic').textContent = anorganic.toFixed(2) + ' kg';

        document.getElementById('pctPlastic').textContent = pctPlast.toFixed(1) + '%';
        document.getElementById('barPlastic').style.width = pctPlast + '%';
        document.getElementById('kgPlastic').textContent = plastic.toFixed(2) + ' kg';

        document.getElementById('formulaTotalExample').textContent =
            '= ' + organic.toFixed(2) + ' + ' + anorganic.toFixed(2) + ' + ' + plastic.toFixed(2) + ' = ' + total.toFixed(2) + ' kg';
        document.getElementById('formulaAvgExample').textContent =
            '= ' + total.toFixed(2) + ' ÷ ' + days + ' = ' + average.toFixed(2) + ' kg/day';
        document.getElementById('formulaPctExample').textContent =
            'e.g. Organic = (' + organic.toFixed(2) + ' ÷ ' + total.toFixed(2) + ') × 100 = ' + pctOrg.toFixed(1) + '%';
        document.getElementById('formulaPredExample').textContent =
            '= ' + average.toFixed(2) + ' × 30 = ' + prediction.toFixed(2) + ' kg';

        const highestType = [
            { name: currentLang === 'en' ? 'Organic' : 'Organik', val: organic, pct: pctOrg },
            { name: currentLang === 'en' ? 'Anorganic' : 'Anorganik', val: anorganic, pct: pctAnorg },
            { name: 'B3', val: plastic, pct: pctPlast }
        ].sort((a, b) => b.val - a.val)[0];

        let insightKey;
        if (average > 5) insightKey = 'insight_high';
        else if (average > 2) insightKey = 'insight_medium';
        else insightKey = 'insight_low';

        const insightTemplate = translations[currentLang][insightKey];
        document.getElementById('insightText').textContent = insightTemplate
            .replace('{pred}', prediction.toFixed(2))
            .replace('{highest}', highestType.name)
            .replace('{pct}', highestType.pct.toFixed(1));

        renderChart(organic, anorganic, plastic);

        document.getElementById('resultsSection').querySelectorAll('.fade-up').forEach(function(el) {
            el.classList.add('visible');
        });
    }

    function renderChart(organic, anorganic, plastic) {
        const ctx = document.getElementById('wasteChart').getContext('2d');

        if (wasteChart) {
            wasteChart.destroy();
        }

        const orgLabel = currentLang === 'en' ? 'Organic' : 'Organik';
        const anorgLabel = currentLang === 'en' ? 'Anorganic' : 'Anorganik';
        const plastLabel = 'B3';

        wasteChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [orgLabel, anorgLabel, plastLabel],
                datasets: [{
                    data: [organic, anorganic, plastic],
                    backgroundColor: ['#22c55e', '#f59e0b', '#ef4444'],
                    borderColor: ['#ffffff', '#ffffff', '#ffffff'],
                    borderWidth: 3,
                    hoverBorderWidth: 0,
                    hoverOffset: 8,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            usePointStyle: true,
                            pointStyle: 'circle',
                            font: { family: 'Lexend', size: 12, weight: '600' },
                            color: '#064e3b'
                        }
                    },
                    tooltip: {
                        backgroundColor: '#064e3b',
                        titleFont: { family: 'Lexend', weight: '700' },
                        bodyFont: { family: 'Lexend' },
                        padding: 12,
                        cornerRadius: 12,
                        callbacks: {
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const pct = total > 0 ? ((context.parsed / total) * 100).toFixed(1) : 0;
                                return context.label + ': ' + context.parsed.toFixed(2) + ' kg (' + pct + '%)';
                            }
                        }
                    }
                },
                animation: { animateRotate: true, duration: 800, easing: 'easeOutQuart' }
            }
        });
    }

    function resetForm() {
        document.getElementById('wasteForm').reset();
        document.getElementById('resultsPlaceholder').classList.remove('hidden');
        document.getElementById('resultsSection').classList.add('hidden');

        if (wasteChart) {
            wasteChart.destroy();
            wasteChart = null;
        }
    }

    // Load saved history on page load
    document.addEventListener('DOMContentLoaded', function() {
        renderHistory();
    });
    </script>

    <!-- Scroll-to-Top Button -->
    <button id="scroll-top" class="scroll-top-btn fixed bottom-8 right-8 z-50 w-12 h-12 bg-primary hover:bg-forest text-white rounded-full shadow-xl shadow-primary/30 flex items-center justify-center transition-all hover:-translate-y-1" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <span class="material-symbols-outlined">keyboard_arrow_up</span>
    </button>

    <!-- Prediction Modal Logic -->
    <script>
    function openPredictionModal() {
        const modal = document.getElementById('predictionModal');
        const content = document.getElementById('predictionModalContent');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        // Trigger animation
        requestAnimationFrame(function() {
            content.style.transform = 'scale(1)';
            content.style.opacity = '1';
        });
    }

    function closePredictionModal() {
        const modal = document.getElementById('predictionModal');
        const content = document.getElementById('predictionModalContent');
        content.style.transform = 'scale(0.95)';
        content.style.opacity = '0';
        setTimeout(function() {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('predictionModal');
            if (!modal.classList.contains('hidden')) {
                closePredictionModal();
            }
        }
    });
    </script>

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
                <div class="mt-4 flex flex-wrap items-center justify-center gap-2 text-[11px]">
                    <span class="px-3 py-1 rounded-full bg-white/20 text-white/95 border border-white/30">🌱 Green Innovators</span>
                    <span class="px-3 py-1 rounded-full bg-white/20 text-white/95 border border-white/30">💡 Creative Minds</span>
                    <span class="px-3 py-1 rounded-full bg-white/20 text-white/95 border border-white/30">🤝 One Team</span>
                </div>
            </div>
        </div>
        <div class="p-6 md:p-8 bg-gradient-to-b from-white to-sage/20 grid grid-cols-2 gap-4 md:gap-6">
            <div class="relative dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100 hover:shadow-lg hover:shadow-primary/15 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute top-3 right-3 text-sm opacity-70">🎨</div>
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/richard wong.png') }}" alt="Richard Wong" class="dev-card-img w-full h-full object-cover">
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
                    <img src="{{ asset('images/Deny Hendrata.png') }}" alt="Deny Hendrata" class="dev-card-img w-full h-full object-cover object-[center_20%]">
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

