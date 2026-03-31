<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>About & Programs - Go Green School</title>
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
        html { scroll-behavior: smooth; }

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

        .card-color-bar {
            height: 4px;
            border-radius: 2px 2px 0 0;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
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
                            <a class="text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/program" data-i18n="nav_program">Program</a>
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
            <div class="float-particle fixed top-[25%] right-[15%] w-3 h-3 bg-primary/20 rounded-full z-10" style="animation-delay: -2s;"></div>
            <div class="float-particle fixed top-[55%] left-[20%] w-2 h-2 bg-accent-blue/20 rounded-full z-10" style="animation-delay: -5s; animation-duration: 10s;"></div>
            <div class="float-particle fixed top-[75%] right-[30%] w-2.5 h-2.5 bg-accent-violet/15 rounded-full z-10" style="animation-delay: -3s; animation-duration: 12s;"></div>

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
                            <span class="material-symbols-outlined text-base">info</span>
                            <span data-i18n="program_badge">Our Programs</span>
                        </div>
                        <h1 class="text-forest text-4xl md:text-6xl font-black tracking-tight leading-[1.1] mb-4"><span data-i18n="program_hero_prefix">Programs at</span> <span class="gradient-text">Go Green School</span></h1>
                        <p class="text-forest/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" data-i18n="program_hero_subtitle">Educating the next generation to care for our planet through innovative green programs and sustainable practices.</p>
                        <div class="section-divider mt-8"></div>
                    </div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-32 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>
                </section>

                <!-- Programs Section -->
                <section class="px-4 md:px-20 lg:px-40 py-20">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up text-center mb-16">
                            <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="programs_label">What We Do</span>
                            <h2 class="text-forest text-3xl md:text-5xl font-black tracking-tight mt-3" data-i18n="programs_title">Our Programs</h2>
                            <p class="text-forest/60 text-lg max-w-2xl mx-auto mt-4 leading-relaxed" data-i18n="programs_subtitle">Discover our comprehensive green programs designed to make a real environmental impact.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Program 1 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 relative overflow-hidden hover-glow">
                                <div class="card-color-bar bg-gradient-to-r from-green-400 to-green-600"></div>
                                <div class="size-14 rounded-2xl bg-green-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-green-600 text-3xl">recycling</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_1_title">Waste Management</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_1_desc">Learn to sort, reduce, and recycle waste effectively. Students actively manage school waste through hands-on sorting and composting activities.</p>
                            </div>

                            <!-- Program 2 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 relative overflow-hidden hover-glow">
                                <div class="card-color-bar bg-gradient-to-r from-emerald-400 to-emerald-600"></div>
                                <div class="size-14 rounded-2xl bg-emerald-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-emerald-600 text-3xl">park</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_2_title">Green Garden</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_2_desc">Our school garden program teaches students about organic farming, biodiversity, and sustainable agriculture practices.</p>
                            </div>

                            <!-- Program 3 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 relative overflow-hidden hover-glow">
                                <div class="card-color-bar bg-gradient-to-r from-teal-400 to-teal-600"></div>
                                <div class="size-14 rounded-2xl bg-teal-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-teal-600 text-3xl">water_drop</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_3_title">Water Conservation</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_3_desc">Students learn about water conservation techniques including rainwater harvesting, water recycling, and responsible water usage.</p>
                            </div>

                            <!-- Program 4 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 relative overflow-hidden hover-glow">
                                <div class="card-color-bar bg-gradient-to-r from-lime-400 to-lime-600"></div>
                                <div class="size-14 rounded-2xl bg-lime-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-lime-600 text-3xl">solar_power</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_4_title">Green Energy</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_4_desc">Explore renewable energy sources through solar panel projects, energy audits, and learning about sustainable energy solutions.</p>
                            </div>

                            <!-- Program 5 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 relative overflow-hidden hover-glow">
                                <div class="card-color-bar bg-gradient-to-r from-cyan-400 to-cyan-600"></div>
                                <div class="size-14 rounded-2xl bg-cyan-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-cyan-600 text-3xl">groups</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_5_title">Eco Ambassador</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_5_desc">Students become environmental ambassadors, leading campaigns and community outreach programs to spread green awareness.</p>
                            </div>

                            <!-- Program 6 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 relative overflow-hidden hover-glow">
                                <div class="card-color-bar bg-gradient-to-r from-amber-400 to-amber-600"></div>
                                <div class="size-14 rounded-2xl bg-amber-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-amber-600 text-3xl">calculate</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_6_title">Waste Calculator</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_6_desc">Use our mathematical waste calculator to analyze and predict school waste production with precision and data-driven insights.</p>
                                <a href="/kalkulator" class="inline-flex items-center gap-1 text-primary text-sm font-bold mt-4 hover:gap-2 transition-all">
                                    <span data-i18n="program_6_link">Try Calculator</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Procedures Section -->
                <section class="px-4 md:px-20 lg:px-40 py-20 bg-section-sage-30 relative">
                    <div class="absolute inset-0 mesh-gradient"></div>
                    <!-- Top fade from page background -->
                    <div class="absolute inset-x-0 top-0 h-24 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: 5;"></div>
                    <!-- Bottom fade into page background -->
                    <div class="absolute inset-x-0 bottom-0 h-24 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: 5;"></div>
                    <div class="max-w-7xl mx-auto relative z-10">
                        <div class="fade-up text-center mb-16">
                            <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="procedures_label">Guidelines</span>
                            <h2 class="text-forest text-3xl md:text-5xl font-black tracking-tight mt-3" data-i18n="procedures_title">Green Procedures</h2>
                            <p class="text-forest/60 text-lg max-w-2xl mx-auto mt-4 leading-relaxed" data-i18n="procedures_subtitle">Step-by-step guides to implementing sustainable practices at school and home.</p>
                        </div>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <!-- Wise Waste Management -->
                            <div class="fade-up bg-white rounded-3xl shadow-xl shadow-forest/5 border border-forest/10 overflow-hidden">
                                <div class="bg-primary/10 p-8 border-b border-primary/10">
                                    <h3 class="text-forest font-black text-2xl" data-i18n="waste_mgmt_title">WISE WASTE MANAGEMENT</h3>
                                </div>
                                <div class="p-8 space-y-8">
                                    <!-- Purpose -->
                                    <div>
                                        <h4 class="text-lg font-bold text-forest mb-2 flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary">target</span>
                                            <span data-i18n="waste_purpose_title">A. Purpose</span>
                                        </h4>
                                        <p class="text-forest/70 text-sm leading-relaxed" data-i18n="waste_purpose_desc">This procedure text aims to explain how to manage waste properly by separating it into three types: organic, inorganic, and hazardous waste (B3), in order to keep the environment clean and healthy. Poor waste management can pollute the environment and worsen climate change. Therefore, we must manage waste wisely.</p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Tools -->
                                        <div>
                                            <h4 class="text-lg font-bold text-forest mb-2 flex items-center gap-2">
                                                <span class="material-symbols-outlined text-primary">build</span>
                                                <span data-i18n="waste_tools_title">B. Tools & Materials</span>
                                            </h4>
                                            <ul class="text-forest/70 text-sm space-y-2 list-disc pl-5">
                                                <li data-i18n="waste_tool_1">Three trash bins (organic, inorganic, and B3)</li>
                                                <li data-i18n="waste_tool_2">Gloves</li>
                                                <li data-i18n="waste_tool_3">A compost container</li>
                                                <li data-i18n="waste_tool_4">Food scraps and dry leaves</li>
                                                <li data-i18n="waste_tool_5">Used items such as plastic bottles and paper</li>
                                            </ul>
                                        </div>
                                        <!-- Implementation -->
                                        <div>
                                            <h4 class="text-lg font-bold text-forest mb-2 flex items-center gap-2">
                                                  <span class="material-symbols-outlined text-primary">lightbulb</span>
                                                  <span data-i18n="waste_implementation_title">D. Example of Implementation</span>
                                            </h4>
                                            <p class="text-forest/70 text-sm leading-relaxed" data-i18n="waste_implementation_desc">Organic waste is processed into compost to be used in the school garden or home garden. Inorganic waste is recycled into useful items. Hazardous waste (B3) is collected and disposed of in a safe special facility.</p>
                                        </div>
                                    </div>
                                    <!-- Steps -->
                                    <div>
                                        <h4 class="text-lg font-bold text-forest mb-4 flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary">format_list_numbered</span>
                                            <span data-i18n="waste_steps_title">C. Steps</span>
                                        </h4>
                                        <div class="space-y-3">
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">1.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_1">Prepare three different trash bins and label them organic, inorganic, and B3.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">2.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_2">Separate the waste according to its type.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">3.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_3">Put organic waste such as food scraps and leaves into the organic bin.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">4.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_4">Collect organic waste to make compost.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">5.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_5">Put the organic waste into a compost container and let it decompose into fertilizer.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">6.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_6">Put inorganic waste such as plastic, bottles, and cans into the inorganic bin for recycling.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">7.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_7">Put hazardous waste (B3) such as used batteries and broken lamps into the special B3 bin.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">8.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="waste_step_8">Send hazardous waste to a special processing facility so it does not pollute the environment.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- How to recycle plastic waste -->
                            <div class="fade-up bg-white rounded-3xl shadow-xl shadow-forest/5 border border-forest/10 overflow-hidden">
                                <div class="bg-emerald-100/50 p-8 border-b border-emerald-100">
                                    <h3 class="text-forest font-black text-2xl" data-i18n="plastic_recycle_title">HOW TO RECYCLE PLASTIC WASTE</h3>
                                </div>
                                <div class="p-8 space-y-8">
                                    <!-- Purpose -->
                                    <div>
                                        <h4 class="text-lg font-bold text-forest mb-2 flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary">target</span>
                                            <span data-i18n="plastic_purpose_title">A. Purpose</span>
                                        </h4>
                                        <p class="text-forest/70 text-sm leading-relaxed" data-i18n="plastic_purpose_desc">This procedure text aims to explain how to recycle plastic waste so it can be reused into useful items. By recycling plastic, we can reduce the amount of waste and keep the environment clean.</p>
                                    </div>
                                    <!-- Tools -->
                                    <div>
                                        <h4 class="text-lg font-bold text-forest mb-2 flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary">build</span>
                                            <span data-i18n="plastic_tools_title">B. Tools & Materials</span>
                                        </h4>
                                        <ul class="text-forest/70 text-sm space-y-2 list-disc pl-5">
                                            <li data-i18n="plastic_tool_1">Used plastic bottles</li>
                                            <li data-i18n="plastic_tool_2">Scissors or a cutter</li>
                                            <li data-i18n="plastic_tool_3">Glue</li>
                                            <li data-i18n="plastic_tool_4">Paint or colored markers</li>
                                            <li data-i18n="plastic_tool_5">Additional decorations (optional)</li>
                                        </ul>
                                    </div>
                                    <!-- Steps -->
                                    <div>
                                        <h4 class="text-lg font-bold text-forest mb-4 flex items-center gap-2">
                                            <span class="material-symbols-outlined text-primary">format_list_numbered</span>
                                            <span data-i18n="plastic_steps_title">C. Steps</span>
                                        </h4>
                                        <div class="space-y-3">
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">1.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_1">Collect used plastic bottles that are no longer needed.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">2.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_2">Wash the plastic bottles until they are clean and do not smell.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">3.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_3">Dry the plastic bottles before using them.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">4.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_4">Cut the plastic bottles into the desired shape using scissors or a cutter.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">5.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_5">Decorate the plastic bottles using paint or colored markers to make them more attractive.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 rounded-xl">
                                                <span class="font-black text-primary">6.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_6">Add other decorations if needed.</span>
                                            </div>
                                            <div class="flex gap-4 p-3 bg-forest/5 rounded-xl">
                                                <span class="font-black text-primary">7.</span>
                                                <span class="text-forest/70 text-sm" data-i18n="plastic_step_7">Use the plastic bottles as a pencil holder, plant pot, or other useful containers.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                  <!-- Explanation Text Section -->
                  <section class="px-4 md:px-20 lg:px-40 py-20">
                      <div class="max-w-7xl mx-auto">
                          <div class="fade-up text-center mb-16">
                              <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="explanation_label">Explanation Text</span>
                              <h2 class="text-forest text-3xl md:text-5xl font-black tracking-tight mt-3" data-i18n="explanation_title">Waste Management in Go Green School</h2>
                              <p class="text-forest/60 text-lg max-w-2xl mx-auto mt-4 leading-relaxed" data-i18n="explanation_subtitle">Understanding the concepts and processes behind our school's environmental initiatives.</p>
                          </div>
                          
                          <div class="relative max-w-5xl mx-auto">
                              <div class="hidden md:block absolute left-1/2 top-16 -translate-x-1/2 w-px h-[calc(100%-140px)] bg-gradient-to-b from-blue-300/40 via-amber-300/40 to-green-300/40"></div>
                              <div class="absolute -top-8 left-8 w-24 h-24 bg-blue-100/40 rounded-full blur-2xl"></div>
                              <div class="absolute top-1/2 right-4 w-24 h-24 bg-amber-100/40 rounded-full blur-2xl"></div>
                              <div class="absolute -bottom-6 left-1/3 w-24 h-24 bg-green-100/40 rounded-full blur-2xl"></div>

                              <!-- Decorative cluster: right of General Statement -->
                              <div class="hidden md:block absolute top-24 right-6 lg:right-10 z-10 pointer-events-none">
                                  <div class="relative w-28 h-28">
                                      <div class="absolute inset-0 rounded-full border border-blue-200/60 border-dashed spin-slow"></div>
                                      <div class="absolute -top-2 right-2 w-8 h-8 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shadow-sm float-particle" style="animation-delay:-1.2s;">
                                          <span class="material-symbols-outlined text-base">lightbulb</span>
                                      </div>
                                      <div class="absolute top-9 left-9 w-10 h-10 rounded-2xl bg-blue-50 text-blue-700 flex items-center justify-center shadow-sm">
                                          <span class="material-symbols-outlined text-lg">auto_stories</span>
                                      </div>
                                      <div class="absolute -bottom-1 left-3 w-7 h-7 rounded-lg bg-cyan-100 text-cyan-700 flex items-center justify-center float-particle" style="animation-delay:-3.4s; animation-duration:10s;">
                                          <span class="material-symbols-outlined text-sm">school</span>
                                      </div>
                                  </div>
                              </div>

                              <!-- Decorative cluster: left of Conclusion -->
                              <div class="hidden md:block absolute bottom-20 left-4 lg:left-10 z-10 pointer-events-none">
                                  <div class="relative w-32 h-28">
                                      <div class="absolute left-3 top-6 w-16 h-16 rounded-full border border-green-200/70"></div>
                                      <div class="absolute left-0 top-12 w-9 h-9 rounded-xl bg-green-100 text-green-700 flex items-center justify-center float-particle" style="animation-delay:-2.6s;">
                                          <span class="material-symbols-outlined text-base">eco</span>
                                      </div>
                                      <div class="absolute left-14 top-1 w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center float-particle" style="animation-delay:-4.2s; animation-duration:11s;">
                                          <span class="material-symbols-outlined text-sm">recycling</span>
                                      </div>
                                      <div class="absolute left-20 top-16 w-10 h-10 rounded-2xl bg-mint text-forest flex items-center justify-center shadow-sm">
                                          <span class="material-symbols-outlined text-lg">compost</span>
                                      </div>
                                  </div>
                              </div>

                              <div class="space-y-8 md:space-y-10 relative z-10">
                                  <!-- General Statement -->
                                  <div class="fade-up bg-white rounded-3xl shadow-lg shadow-forest/5 border border-forest/10 p-6 md:p-8 hover-glow transition-all duration-500 hover:-translate-y-1 relative overflow-hidden h-fit max-w-2xl md:w-[78%] md:mr-auto">
                                      <div class="card-color-bar bg-gradient-to-r from-blue-400 to-blue-600"></div>
                                      <span class="absolute top-5 right-5 inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 text-xs font-black">01</span>
                                      <div class="size-14 rounded-2xl bg-blue-100 flex items-center justify-center mb-6 mt-2">
                                          <span class="material-symbols-outlined text-blue-600 text-3xl">info</span>
                                      </div>
                                      <h3 class="text-forest font-bold text-xl mb-4" data-i18n="explanation_general_title">General Statement</h3>
                                      <p class="text-forest/70 text-sm md:text-[15px] leading-7" data-i18n="explanation_general_desc">
                                          A Go Green School is a school that cares about the environment and encourages students to protect nature. One important activity in a Go Green School is waste management. Waste management helps reduce pollution and keeps the school environment clean and healthy.
                                      </p>
                                  </div>

                                  <!-- Sequence of Explanation -->
                                  <div class="fade-up bg-white rounded-3xl shadow-lg shadow-forest/5 border border-forest/10 p-6 md:p-8 hover-glow transition-all duration-500 hover:-translate-y-1 relative overflow-hidden h-fit max-w-4xl md:w-[88%] md:mx-auto">
                                      <div class="card-color-bar bg-gradient-to-r from-amber-400 to-amber-600"></div>
                                      <span class="absolute top-5 right-5 inline-flex items-center justify-center w-8 h-8 rounded-full bg-amber-100 text-amber-700 text-xs font-black">02</span>
                                      <div class="size-14 rounded-2xl bg-amber-100 flex items-center justify-center mb-6 mt-2">
                                          <span class="material-symbols-outlined text-amber-600 text-3xl">route</span>
                                      </div>
                                      <h3 class="text-forest font-bold text-xl mb-4" data-i18n="explanation_sequence_title">Sequence of Explanation</h3>
                                      <div class="space-y-4 text-forest/70 text-sm md:text-[15px] leading-7">
                                          <p data-i18n="explanation_seq_p1">
                                              Waste management in a Go Green School usually begins with separating waste into different categories such as organic waste and inorganic waste. Organic waste includes food scraps, leaves, and other natural materials. These materials can be processed into compost or natural fertilizer that can be used for plants in the school garden.
                                          </p>
                                          <p data-i18n="explanation_seq_p2">
                                              Meanwhile, inorganic waste such as plastic bottles, paper, and cans can be collected and recycled. Students and teachers work together to sort the waste and place it in the correct recycling bins. After that, recyclable waste can be reused or sent to recycling centers to be processed into new products.
                                          </p>
                                          <p data-i18n="explanation_seq_p3">
                                              Through these activities, students learn how to manage waste properly and understand the importance of reducing environmental pollution.
                                          </p>
                                      </div>
                                  </div>
                                  
                                  <!-- Conclusion -->
                                  <div class="fade-up bg-white rounded-3xl shadow-lg shadow-forest/5 border border-forest/10 p-6 md:p-8 text-center hover-glow transition-all duration-500 hover:-translate-y-1 relative overflow-hidden max-w-3xl md:w-[78%] md:ml-auto">
                                      <div class="card-color-bar bg-gradient-to-r from-green-400 to-green-600"></div>
                                      <span class="absolute top-5 right-5 inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-700 text-xs font-black">03</span>
                                      <div class="size-14 rounded-2xl bg-green-100 flex items-center justify-center mb-6 mx-auto mt-2">
                                          <span class="material-symbols-outlined text-green-600 text-3xl">eco</span>
                                      </div>
                                      <h3 class="text-forest font-bold text-xl mb-4" data-i18n="explanation_conclusion_title">Conclusion</h3>
                                      <p class="text-forest/70 text-sm md:text-base leading-7 max-w-3xl mx-auto" data-i18n="explanation_conclusion_desc">
                                          In conclusion, waste management is an important part of a Go Green School program. By separating, recycling, and reusing waste, schools can reduce pollution and create a cleaner and greener environment for everyone.
                                      </p>
                                  </div>
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
                            <a class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all" href="#">
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
    var currentLang = localStorage.getItem('ggs_lang') || 'en';

    var translations = {
        en: {
            nav_home: "Home",
            nav_about: "About",
            nav_program: "Program",
            nav_contact: "Contact",
            nav_calculator: "Calculator",
            nav_back_home: "Back to Home",
            program_badge: "Our Programs",
            program_hero_title: "Programs at Go Green School",
            program_hero_prefix: "Programs at",
            program_hero_subtitle: "Educating the next generation to care for our planet through innovative green programs and sustainable practices.",
            about_badge: "About Us & Our Programs",
            about_title: "About Go Green School",
            about_subtitle: "Educating the next generation to care for our planet through innovative green programs and sustainable practices.",
            about_who_label: "Who We Are",
            about_who_title: "Our Story",
            about_who_p1: "Go Green School is an educational initiative dedicated to integrating environmental awareness into the school curriculum. We believe that the future of our planet lies in the hands of today's students.",
            about_who_p2: "Founded with the vision of creating environmentally conscious leaders, our school combines academic excellence with hands-on sustainability programs that make a real difference.",
            about_who_p3: "Through our comprehensive approach, students learn not just about environmental issues, but actively participate in solutions — from waste management to green energy projects.",
            about_stat_students: "Students Enrolled",
            about_vision_title: "Our Vision",
            about_vision_desc: "To become a leading educational institution that produces environmentally conscious leaders who are committed to sustainability and innovation for a greener future.",
            about_mission_title: "Our Mission",
            about_mission_1: "Integrate environmental education into every aspect of learning.",
            about_mission_2: "Develop practical sustainability programs for students.",
            about_mission_3: "Foster community partnerships for environmental initiatives.",
            about_mission_4: "Reduce school waste and promote a circular economy mindset.",
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
            procedures_label: "Guidelines",
            procedures_title: "Green Procedures",
            procedures_subtitle: "Step-by-step guides to implementing sustainable practices at school and home.",
            waste_mgmt_title: "WISE WASTE MANAGEMENT",
            waste_purpose_title: "A. Purpose",
            waste_purpose_desc: "This procedure text aims to explain how to manage waste properly by separating it into three types: organic, inorganic, and hazardous waste (B3), in order to keep the environment clean and healthy. Poor waste management can pollute the environment and worsen climate change. Therefore, we must manage waste wisely.",
            waste_tools_title: "B. Tools & Materials",
            waste_tool_1: "Three trash bins (organic, inorganic, and B3)",
            waste_tool_2: "Gloves",
            waste_tool_3: "A compost container",
            waste_tool_4: "Food scraps and dry leaves",
            waste_tool_5: "Used items such as plastic bottles and paper",
            waste_implementation_title: "D. Example of Implementation",
            waste_implementation_desc: "Organic waste is processed into compost to be used in the school garden or home garden. Inorganic waste is recycled into useful items. Hazardous waste (B3) is collected and disposed of in a safe special facility.",
            waste_steps_title: "C. Steps",
            waste_step_1: "Prepare three different trash bins and label them organic, inorganic, and B3.",
            waste_step_2: "Separate the waste according to its type.",
            waste_step_3: "Put organic waste such as food scraps and leaves into the organic bin.",
            waste_step_4: "Collect organic waste to make compost.",
            waste_step_5: "Put the organic waste into a compost container and let it decompose into fertilizer.",
            waste_step_6: "Put inorganic waste such as plastic, bottles, and cans into the inorganic bin for recycling.",
            waste_step_7: "Put hazardous waste (B3) such as used batteries and broken lamps into the special B3 bin.",
            waste_step_8: "Send hazardous waste to a special processing facility so it does not pollute the environment.",
            plastic_recycle_title: "HOW TO RECYCLE PLASTIC WASTE",
            plastic_purpose_title: "A. Purpose",
            plastic_purpose_desc: "This procedure text aims to explain how to recycle plastic waste so it can be reused into useful items. By recycling plastic, we can reduce the amount of waste and keep the environment clean.",
            plastic_tools_title: "B. Tools & Materials",
            plastic_tool_1: "Used plastic bottles",
            plastic_tool_2: "Scissors or a cutter",
            plastic_tool_3: "Glue",
            plastic_tool_4: "Paint or colored markers",
            plastic_tool_5: "Additional decorations (optional)",
            plastic_steps_title: "C. Steps",
            plastic_step_1: "Collect used plastic bottles that are no longer needed.",
            plastic_step_2: "Wash the plastic bottles until they are clean and do not smell.",
            plastic_step_3: "Dry the plastic bottles before using them.",
            plastic_step_4: "Cut the plastic bottles into the desired shape using scissors or a cutter.",
            plastic_step_5: "Decorate the plastic bottles using paint or colored markers to make them more attractive.",
            plastic_step_6: "Add other decorations if needed.",
            plastic_step_7: "Use the plastic bottles as a pencil holder, plant pot, or other useful containers.",
            explanation_label: "Explanation Text",
            explanation_title: "Waste Management in Go Green School",
            explanation_subtitle: "Understanding the concepts and processes behind our school's environmental initiatives.",
            explanation_general_title: "General Statement",
            explanation_general_desc: "A Go Green School is a school that cares about the environment and encourages students to protect nature. One important activity in a Go Green School is waste management. Waste management helps reduce pollution and keeps the school environment clean and healthy.",
            explanation_sequence_title: "Sequence of Explanation",
            explanation_seq_p1: "Waste management in a Go Green School usually begins with separating waste into different categories such as organic waste and inorganic waste. Organic waste includes food scraps, leaves, and other natural materials. These materials can be processed into compost or natural fertilizer that can be used for plants in the school garden.",
            explanation_seq_p2: "Meanwhile, inorganic waste such as plastic bottles, paper, and cans can be collected and recycled. Students and teachers work together to sort the waste and place it in the correct recycling bins. After that, recyclable waste can be reused or sent to recycling centers to be processed into new products.",
            explanation_seq_p3: "Through these activities, students learn how to manage waste properly and understand the importance of reducing environmental pollution.",
            explanation_conclusion_title: "Conclusion",
            explanation_conclusion_desc: "In conclusion, waste management is an important part of a Go Green School program. By separating, recycling, and reusing waste, schools can reduce pollution and create a cleaner and greener environment for everyone.",
            stat_students: "Students Enrolled",
            stat_programs: "Green Programs",
            stat_recycled: "Waste Recycled",
            stat_partners: "Community Partners",
            cta_title: "Ready to Join Us?",
            cta_desc: "Be part of the green revolution in education. Together, we can create a sustainable future for the next generation.",
            cta_contact: "Contact Us",
            cta_calculator: "Try Calculator",
            footer_desc: "Shaping the character of future leaders who are not only academically intelligent, but also have high empathy for earth's sustainability.",
            footer_quicklinks: "Quick Links",
            footer_contactus: "Contact Us",
            footer_newsletter: "Newsletter",
            footer_newsletter_desc: "Get green tips in your inbox.",
            footer_copyright: "© 2024 Go Green School. All Rights Reserved.",
            footer_privacy: "Privacy Policy",
            footer_terms: "Terms & Conditions",
        },
        id: {
            nav_home: "Beranda",
            nav_about: "Tentang",
            nav_program: "Program",
            nav_contact: "Kontak",
            nav_calculator: "Kalkulator",
            nav_back_home: "Kembali ke Beranda",
            program_badge: "Program Kami",
            program_hero_title: "Program di Go Green School",
            program_hero_prefix: "Program di",
            program_hero_subtitle: "Mendidik generasi berikutnya untuk peduli terhadap planet kita melalui program hijau inovatif dan praktik berkelanjutan.",
            about_badge: "Tentang Kami & Program Kami",
            about_title: "Tentang Go Green School",
            about_subtitle: "Mendidik generasi berikutnya untuk peduli terhadap planet kita melalui program hijau inovatif dan praktik berkelanjutan.",
            about_who_label: "Siapa Kami",
            about_who_title: "Cerita Kami",
            about_who_p1: "Go Green School adalah inisiatif pendidikan yang didedikasikan untuk mengintegrasikan kesadaran lingkungan ke dalam kurikulum sekolah. Kami percaya bahwa masa depan planet kita ada di tangan siswa hari ini.",
            about_who_p2: "Didirikan dengan visi menciptakan pemimpin yang sadar lingkungan, sekolah kami menggabungkan keunggulan akademik dengan program keberlanjutan langsung yang membuat perbedaan nyata.",
            about_who_p3: "Melalui pendekatan komprehensif kami, siswa tidak hanya belajar tentang isu lingkungan, tetapi secara aktif berpartisipasi dalam solusi — dari pengelolaan sampah hingga proyek energi hijau.",
            about_stat_students: "Siswa Terdaftar",
            about_vision_title: "Visi Kami",
            about_vision_desc: "Menjadi institusi pendidikan terdepan yang menghasilkan pemimpin sadar lingkungan yang berkomitmen pada keberlanjutan dan inovasi untuk masa depan yang lebih hijau.",
            about_mission_title: "Misi Kami",
            about_mission_1: "Mengintegrasikan pendidikan lingkungan ke dalam setiap aspek pembelajaran.",
            about_mission_2: "Mengembangkan program keberlanjutan praktis untuk siswa.",
            about_mission_3: "Memupuk kemitraan komunitas untuk inisiatif lingkungan.",
            about_mission_4: "Mengurangi sampah sekolah dan mempromosikan pola pikir ekonomi sirkular.",
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
            procedures_label: "Panduan",
            procedures_title: "Prosedur Hijau",
            procedures_subtitle: "Panduan langkah demi langkah untuk menerapkan praktik berkelanjutan di sekolah dan rumah.",
            waste_mgmt_title: "PENGELOLAAN SAMPAH YANG BIJAK",
            waste_purpose_title: "A. Tujuan",
            waste_purpose_desc: "Teks prosedur ini bertujuan menjelaskan cara mengelola sampah dengan benar dengan memisahkannya menjadi tiga jenis: organik, anorganik, dan sampah berbahaya (B3), agar lingkungan tetap bersih dan sehat. Pengelolaan sampah yang buruk dapat mencemari lingkungan dan memperparah perubahan iklim. Oleh karena itu, kita harus mengelola sampah dengan bijak.",
            waste_tools_title: "B. Alat & Bahan",
            waste_tool_1: "Tiga tempat sampah (organik, anorganik, dan B3)",
            waste_tool_2: "Sarung tangan",
            waste_tool_3: "Wadah kompos",
            waste_tool_4: "Sisa makanan dan daun kering",
            waste_tool_5: "Barang bekas seperti botol plastik dan kertas",
            waste_implementation_title: "D. Contoh Penerapan",
            waste_implementation_desc: "Sampah organik diolah menjadi kompos untuk digunakan di kebun sekolah atau kebun rumah. Sampah anorganik didaur ulang menjadi barang yang bermanfaat. Sampah berbahaya (B3) dikumpulkan dan dibuang di fasilitas khusus yang aman.",
            waste_steps_title: "C. Langkah-langkah",
            waste_step_1: "Siapkan tiga tempat sampah berbeda dan beri label organik, anorganik, dan B3.",
            waste_step_2: "Pisahkan sampah sesuai jenisnya.",
            waste_step_3: "Masukkan sampah organik seperti sisa makanan dan daun ke tempat sampah organik.",
            waste_step_4: "Kumpulkan sampah organik untuk dijadikan kompos.",
            waste_step_5: "Masukkan sampah organik ke dalam wadah kompos dan biarkan terurai menjadi pupuk.",
            waste_step_6: "Masukkan sampah anorganik seperti plastik, botol, dan kaleng ke tempat sampah anorganik untuk didaur ulang.",
            waste_step_7: "Masukkan sampah berbahaya (B3) seperti baterai bekas dan lampu rusak ke tempat sampah B3 khusus.",
            waste_step_8: "Kirim sampah berbahaya ke fasilitas pengolahan khusus agar tidak mencemari lingkungan.",
            plastic_recycle_title: "CARA MENDAUR ULANG SAMPAH PLASTIK",
            plastic_purpose_title: "A. Tujuan",
            plastic_purpose_desc: "Teks prosedur ini bertujuan menjelaskan cara mendaur ulang sampah plastik agar dapat digunakan kembali menjadi barang yang bermanfaat. Dengan mendaur ulang plastik, kita dapat mengurangi jumlah sampah dan menjaga lingkungan tetap bersih.",
            plastic_tools_title: "B. Alat & Bahan",
            plastic_tool_1: "Botol plastik bekas",
            plastic_tool_2: "Gunting atau cutter",
            plastic_tool_3: "Lem",
            plastic_tool_4: "Cat atau spidol warna",
            plastic_tool_5: "Hiasan tambahan (opsional)",
            plastic_steps_title: "C. Langkah-langkah",
            plastic_step_1: "Kumpulkan botol plastik bekas yang sudah tidak terpakai.",
            plastic_step_2: "Cuci botol plastik hingga bersih dan tidak berbau.",
            plastic_step_3: "Keringkan botol plastik sebelum digunakan.",
            plastic_step_4: "Potong botol plastik sesuai bentuk yang diinginkan menggunakan gunting atau cutter.",
            plastic_step_5: "Hiasi botol plastik menggunakan cat atau spidol warna agar lebih menarik.",
            plastic_step_6: "Tambahkan hiasan lain jika diperlukan.",
            plastic_step_7: "Gunakan botol plastik sebagai tempat pensil, pot tanaman, atau wadah bermanfaat lainnya.",
            explanation_label: "Teks Eksplanasi",
            explanation_title: "Pengelolaan Sampah di Go Green School",
            explanation_subtitle: "Memahami konsep dan proses di balik inisiatif lingkungan sekolah kami.",
            explanation_general_title: "Pernyataan Umum",
            explanation_general_desc: "Go Green School adalah sekolah yang peduli terhadap lingkungan dan mendorong siswa untuk menjaga alam. Salah satu kegiatan penting di Go Green School adalah pengelolaan sampah. Pengelolaan sampah membantu mengurangi polusi dan menjaga lingkungan sekolah tetap bersih dan sehat.",
            explanation_sequence_title: "Urutan Penjelasan",
            explanation_seq_p1: "Pengelolaan sampah di Go Green School biasanya dimulai dengan memisahkan sampah ke dalam kategori berbeda seperti sampah organik dan anorganik. Sampah organik meliputi sisa makanan, daun, dan bahan alami lainnya. Bahan-bahan ini dapat diolah menjadi kompos atau pupuk alami yang dapat digunakan untuk tanaman di kebun sekolah.",
            explanation_seq_p2: "Sementara itu, sampah anorganik seperti botol plastik, kertas, dan kaleng dapat dikumpulkan dan didaur ulang. Siswa dan guru bekerja sama untuk memilah sampah dan menempatkannya ke tempat daur ulang yang tepat. Setelah itu, sampah yang dapat didaur ulang bisa digunakan kembali atau dikirim ke pusat daur ulang untuk diproses menjadi produk baru.",
            explanation_seq_p3: "Melalui kegiatan ini, siswa belajar cara mengelola sampah dengan benar dan memahami pentingnya mengurangi pencemaran lingkungan.",
            explanation_conclusion_title: "Kesimpulan",
            explanation_conclusion_desc: "Kesimpulannya, pengelolaan sampah adalah bagian penting dari program Go Green School. Dengan memilah, mendaur ulang, dan menggunakan kembali sampah, sekolah dapat mengurangi polusi dan menciptakan lingkungan yang lebih bersih dan hijau untuk semua.",
            stat_students: "Siswa Terdaftar",
            stat_programs: "Program Hijau",
            stat_recycled: "Sampah Didaur Ulang",
            stat_partners: "Mitra Komunitas",
            cta_title: "Siap Bergabung?",
            cta_desc: "Jadilah bagian dari revolusi hijau dalam pendidikan. Bersama, kita bisa menciptakan masa depan berkelanjutan untuk generasi berikutnya.",
            cta_contact: "Hubungi Kami",
            cta_calculator: "Coba Kalkulator",
            footer_desc: "Membentuk karakter pemimpin masa depan yang tidak hanya cerdas secara akademis, tetapi juga memiliki empati tinggi terhadap keberlanjutan bumi.",
            footer_quicklinks: "Tautan Cepat",
            footer_contactus: "Hubungi Kami",
            footer_newsletter: "Buletin",
            footer_newsletter_desc: "Dapatkan tips hijau di kotak masuk Anda.",
            footer_copyright: "© 2024 Go Green School. Hak Cipta Dilindungi.",
            footer_privacy: "Kebijakan Privasi",
            footer_terms: "Syarat & Ketentuan",
        }
    };

    function setLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('ggs_lang', lang);

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
    }

    document.addEventListener('DOMContentLoaded', function() {
        setLanguage(currentLang);
    });
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
</body>
</html>


