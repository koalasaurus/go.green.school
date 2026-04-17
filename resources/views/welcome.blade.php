<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Go Green School - A Greener Future</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
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
              borderRadius: {"DEFAULT": "0.375rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
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

                .hero-animate {
                    opacity: 0;
                    animation: fadeSlideUp 700ms ease-out forwards;
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

                /* Stagger children animation */
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

                .shimmer-text {
                    background: linear-gradient(90deg, #064e3b 40%, #10b981 50%, #064e3b 60%);
                    background-size: 200% auto;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    animation: shimmer 4s linear infinite;
                }

                .spin-slow { animation: spinSlow 20s linear infinite; }

                .dot-pattern {
                    background-image: radial-gradient(circle, rgba(16, 185, 129, 0.08) 1px, transparent 1px);
                    background-size: 24px 24px;
                }

                .gradient-border {
                    position: relative;
                }
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

                /* Mobile menu */
                .mobile-menu {
                    transform: translateX(100%);
                    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
                }
                .mobile-menu.open {
                    transform: translateX(0);
                }
                .mobile-overlay {
                    opacity: 0;
                    pointer-events: none;
                    transition: opacity 0.3s;
                }
                .mobile-overlay.open {
                    opacity: 1;
                    pointer-events: all;
                }

                /* Scroll to top button */
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

                /* Section wave divider */
                .wave-divider {
                    position: relative;
                    overflow: hidden;
                }
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

                /* Quote decoration */
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

                /* Number step badge */
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

                /* Timeline connector */
                .timeline-line {
                    position: absolute;
                    left: 50%;
                    top: 0;
                    bottom: 0;
                    width: 3px;
                    background: linear-gradient(to bottom, #10b981, #064e3b);
                    transform: translateX(-50%);
                    border-radius: 2px;
                }

                /* ===== NEW UI ENHANCEMENTS ===== */

                /* Animated Gradient Text */
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

                /* Marquee Ticker Animation */
                @keyframes marquee {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-50%); }
                }
                .marquee-track {
                    display: flex;
                    animation: marquee 30s linear infinite;
                    width: max-content;
                }
                .marquee-track:hover {
                    animation-play-state: paused;
                }

                /* Glassmorphism Card */
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

                /* Animated Gradient Border */
                .animated-border {
                    position: relative;
                    border-radius: 1.5rem;
                    overflow: hidden;
                }
                .animated-border::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    border-radius: inherit;
                    padding: 2px;
                    background: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6, #f59e0b, #10b981);
                    background-size: 400% 400%;
                    animation: gradientShift 4s ease infinite;
                    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                    -webkit-mask-composite: xor;
                    mask-composite: exclude;
                    opacity: 0;
                    transition: opacity 0.4s;
                }
                .animated-border:hover::before {
                    opacity: 1;
                }

                /* Floating Particle */
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

                /* Mesh Gradient Background */
                .mesh-gradient {
                    background:
                        radial-gradient(circle at 20% 50%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.06) 0%, transparent 50%),
                        radial-gradient(circle at 40% 80%, rgba(139, 92, 246, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 90% 70%, rgba(245, 158, 11, 0.04) 0%, transparent 50%);
                }

                /* Nav gradient line */
                .nav-gradient-line {
                    position: relative;
                }
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

                /* Improved section divider */
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

                /* Better scrollbar */
                ::-webkit-scrollbar { width: 8px; }
                ::-webkit-scrollbar-track { background: #f8faf9; }
                ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #10b981, #064e3b); border-radius: 4px; }
                ::-webkit-scrollbar-thumb:hover { background: #059669; }

                /* Glow on hover */
                .hover-glow:hover {
                    box-shadow: 0 0 30px rgba(16, 185, 129, 0.2), 0 0 60px rgba(16, 185, 129, 0.1);
                }

                /* Card shine effect */
                .card-shine {
                    position: relative;
                    overflow: hidden;
                }
                .card-shine::after {
                    content: '';
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 200%;
                    height: 200%;
                    background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.1) 50%, transparent 60%);
                    transition: transform 0.6s;
                    transform: translateX(-100%) translateY(-100%);
                }
                .card-shine:hover::after {
                    transform: translateX(30%) translateY(30%);
                }

                /* Badge pulse */
                .badge-pulse {
                    position: relative;
                }
                .badge-pulse::before {
                    content: '';
                    position: absolute;
                    inset: -3px;
                    border-radius: inherit;
                    background: inherit;
                    opacity: 0;
                    animation: badgePulse 2s ease-in-out infinite;
                }
                @keyframes badgePulse {
                    0%, 100% { opacity: 0; transform: scale(1); }
                    50% { opacity: 0.3; transform: scale(1.1); }
                }

                .modal-overlay {
                    opacity: 0;
                    pointer-events: none;
                    transition: opacity 0.3s ease;
                }
                .modal-overlay.open {
                    opacity: 1;
                    pointer-events: all;
                }
                .modal-box {
                    opacity: 0;
                    transform: scale(0.94) translateY(18px);
                    transition: opacity 0.38s cubic-bezier(0.4, 0, 0.2, 1), transform 0.38s cubic-bezier(0.4, 0, 0.2, 1);
                }
                .modal-overlay.open .modal-box {
                    opacity: 1;
                    transform: scale(1) translateY(0);
                }
                .modal-stat-card {
                    background: white;
                    border-radius: 1rem;
                    padding: 1rem;
                    border: 1px solid rgba(6, 78, 59, 0.06);
                    box-shadow: 0 2px 8px rgba(6, 78, 59, 0.06);
                    text-align: center;
                }
            </style>
</head>
<body class="bg-background-light font-display text-forest selection:bg-primary/30">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 glass-effect nav-gradient-line px-6 md:px-20 lg:px-40 py-4">
<div class="max-w-7xl mx-auto flex items-center justify-between">
<div class="flex items-center gap-10">
<a class="flex items-center gap-2 group" href="#">
<div class="size-10 flex items-center justify-center">
<img alt="Go Green School Logo" class="w-full h-full object-contain" src="/images/logo2-removebg-preview.png"/>
</div>
<h2 class="text-forest text-xl font-extrabold tracking-tight">Go Green School</h2>
</a>
<div class="hidden lg:flex items-center gap-8">
<a class="text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/" data-i18n="nav_home">Home</a>
<a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About</a>
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
<button class="hidden md:flex bg-primary hover:bg-forest text-white px-6 py-2.5 rounded-full text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5 items-center gap-2" data-i18n="nav_get_started">
Get Started
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</button>
<!-- Earth Dev Button -->
<div class="flex items-center gap-2">
<button onclick="openDevModal()" class="dev-earth-btn flex items-center justify-center size-10 rounded-full hover:scale-110 transition-all duration-300" title="Meet the Developers">
<span class="text-2xl">🌍</span>
</button>
<span class="hidden lg:inline text-xs font-semibold text-forest/70 whitespace-nowrap" data-i18n="nav_profile_hint">Developer Profile</span>
</div>
<!-- Mobile Hamburger -->
<button id="mobile-menu-btn" class="lg:hidden flex items-center justify-center size-10 rounded-xl hover:bg-forest/5 transition-colors">
<span class="material-symbols-outlined text-2xl text-forest">Menu</span>
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
<a href="/program" class="flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white w-full py-3 rounded-xl text-sm font-bold shadow-lg transition-all" data-i18n="nav_get_started">
Get Started
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</a>
</div>
</div>
<main class="flex flex-col flex-1 pt-24">
<!-- Hero Section -->
<div class="relative px-4 md:px-20 lg:px-40 py-8">
<div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10"></div>
<div class="absolute top-40 right-0 w-96 h-96 bg-forest/5 rounded-full blur-3xl -z-10"></div>
<div class="relative overflow-hidden rounded-3xl h-[520px] group shadow-2xl">
<!-- Carousel Slides -->
<div id="carousel-track" class="flex h-full transition-transform duration-700 ease-in-out">
<!-- Slide 1 -->
<div class="min-w-full h-full relative">
<img alt="Green School Activities" class="absolute inset-0 w-full h-full object-cover" src="/images/slide1.jpg"/>
<div class="absolute inset-0 bg-gradient-to-b from-black/25 via-black/55 to-black/75 flex flex-col items-center justify-center text-center p-8">
<h1 class="hero-animate text-white text-4xl font-black leading-[1.1] tracking-tighter md:text-6xl drop-shadow-md max-w-3xl mb-4" style="animation-delay: 120ms;" data-i18n="hero1_title">Educating Future Leaders for a Greener World</h1>
<p class="hero-animate text-white/90 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto mb-8" style="animation-delay: 250ms;" data-i18n="hero1_desc">Join Go Green School and be part of the environmental revolution in education.</p>
<div class="hero-animate flex flex-col sm:flex-row gap-4 mb-7" style="animation-delay: 380ms;">
<a href="/program" class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300 no-underline" data-i18n="hero_btn_primary">Learn Program</a>
</div>
</div>
</div>
<!-- Slide 2 -->
<div class="min-w-full h-full relative">
<img alt="Waste Recycling" class="absolute inset-0 w-full h-full object-cover" src="/images/slide2.jpg"/>
<div class="absolute inset-0 bg-gradient-to-b from-black/25 via-black/55 to-black/75 flex flex-col items-center justify-center text-center p-8">
<h1 class="hero-animate text-white text-4xl font-black leading-[1.1] tracking-tighter md:text-6xl drop-shadow-md max-w-3xl mb-4" style="animation-delay: 120ms;" data-i18n="hero2_title">Manage Waste Wisely</h1>
<p class="hero-animate text-white/90 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto mb-8" style="animation-delay: 250ms;" data-i18n="hero2_desc">Together we recycle for a cleaner and more sustainable future for the earth.</p>
<div class="hero-animate flex flex-col sm:flex-row gap-4 mb-7" style="animation-delay: 380ms;">
<a href="/program" class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300 no-underline" data-i18n="hero_btn_primary">Learn Program</a>
</div>
</div>
</div>
<!-- Slide 3 -->
<div class="min-w-full h-full relative">
<img alt="Reduce Reuse Recycle" class="absolute inset-0 w-full h-full object-cover" src="/images/slide3.jpg"/>
<div class="absolute inset-0 bg-gradient-to-b from-black/25 via-black/55 to-black/75 flex flex-col items-center justify-center text-center p-8">
<h1 class="hero-animate text-white text-4xl font-black leading-[1.1] tracking-tighter md:text-6xl drop-shadow-md max-w-3xl mb-4" style="animation-delay: 120ms;" data-i18n="hero3_title">Reduce, Reuse, Recycle</h1>
<p class="hero-animate text-white/90 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto mb-8" style="animation-delay: 250ms;" data-i18n="hero3_desc">Three simple steps that can change the world. Start from school, start from us.</p>
<div class="hero-animate flex flex-col sm:flex-row gap-4 mb-7" style="animation-delay: 380ms;">
<a href="/program" class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300 no-underline" data-i18n="hero_btn_primary">Learn Program</a>
</div>
</div>
</div>
<!-- Slide 4 -->
<div class="min-w-full h-full relative">
<img alt="Waste Sorting" class="absolute inset-0 w-full h-full object-cover" src="/images/slide4.jpg"/>
<div class="absolute inset-0 bg-gradient-to-b from-black/25 via-black/55 to-black/75 flex flex-col items-center justify-center text-center p-8">
<h1 class="hero-animate text-white text-4xl font-black leading-[1.1] tracking-tighter md:text-6xl drop-shadow-md max-w-3xl mb-4" style="animation-delay: 120ms;" data-i18n="hero4_title">Sorting Waste from an Early Age</h1>
<p class="hero-animate text-white/90 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto mb-8" style="animation-delay: 250ms;" data-i18n="hero4_desc">Teach children to sort waste to build environmentally friendly habits.</p>
<div class="hero-animate flex flex-col sm:flex-row gap-4 mb-7" style="animation-delay: 380ms;">
<a href="/program" class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300 no-underline" data-i18n="hero_btn_primary">Learn Program</a>
</div>
</div>
</div>
</div>
<!-- Controls -->
<button id="carousel-prev" class="absolute left-4 top-1/2 -translate-y-1/2 size-12 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white/40 transition-all opacity-0 group-hover:opacity-100">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button id="carousel-next" class="absolute right-4 top-1/2 -translate-y-1/2 size-12 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white/40 transition-all opacity-0 group-hover:opacity-100">
<span class="material-symbols-outlined">chevron_right</span>
</button>
<!-- Indicators -->
<div id="carousel-indicators" class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2">
<button class="size-2.5 rounded-full bg-primary transition-all" data-slide="0"></button>
<button class="size-2.5 rounded-full bg-white/50 transition-all" data-slide="1"></button>
<button class="size-2.5 rounded-full bg-white/50 transition-all" data-slide="2"></button>
<button class="size-2.5 rounded-full bg-white/50 transition-all" data-slide="3"></button>
</div>
</div>
</div>
<!-- Feature Marquee Ticker -->
<div class="relative overflow-hidden bg-forest/[0.03] border-y border-forest/5 py-4">
<div class="marquee-track">
<div class="flex items-center gap-12 px-6">
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-primary text-xl">eco</span>
<span class="text-sm font-semibold" data-i18n="ticker_eco">Eco-Friendly Education</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-primary/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-blue text-xl">recycling</span>
<span class="text-sm font-semibold" data-i18n="ticker_recycle">Waste Recycling Program</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-blue/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-violet text-xl">school</span>
<span class="text-sm font-semibold" data-i18n="ticker_school">Green School Initiative</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-violet/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-amber text-xl">solar_power</span>
<span class="text-sm font-semibold" data-i18n="ticker_energy">Renewable Energy</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-amber/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-teal text-xl">water_drop</span>
<span class="text-sm font-semibold" data-i18n="ticker_water">Water Conservation</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-teal/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-rose text-xl">favorite</span>
<span class="text-sm font-semibold" data-i18n="ticker_community">Community Impact</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-rose/30"></div>
</div>
<div class="flex items-center gap-12 px-6">
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-primary text-xl">eco</span>
<span class="text-sm font-semibold" data-i18n="ticker_eco">Eco-Friendly Education</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-primary/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-blue text-xl">recycling</span>
<span class="text-sm font-semibold" data-i18n="ticker_recycle">Waste Recycling Program</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-blue/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-violet text-xl">school</span>
<span class="text-sm font-semibold" data-i18n="ticker_school">Green School Initiative</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-violet/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-amber text-xl">solar_power</span>
<span class="text-sm font-semibold" data-i18n="ticker_energy">Renewable Energy</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-amber/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-teal text-xl">water_drop</span>
<span class="text-sm font-semibold" data-i18n="ticker_water">Water Conservation</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-teal/30"></div>
<div class="flex items-center gap-3 text-forest/50 whitespace-nowrap">
<span class="material-symbols-outlined text-accent-rose text-xl">favorite</span>
<span class="text-sm font-semibold" data-i18n="ticker_community">Community Impact</span>
</div>
<div class="w-1.5 h-1.5 rounded-full bg-accent-rose/30"></div>
</div>
</div>
</div>

<!-- Floating Leaf Decorations -->
<div class="fixed top-0 left-0 w-full h-full pointer-events-none z-0 overflow-hidden">
<div class="floating-leaf absolute top-[15%] left-[5%] text-4xl opacity-20">🍃</div>
<div class="floating-leaf absolute top-[40%] right-[8%] text-3xl opacity-15">🌿</div>
<div class="floating-leaf absolute top-[65%] left-[12%] text-2xl opacity-10">🍀</div>
<div class="float-particle absolute top-[25%] right-[15%] w-3 h-3 bg-primary/20 rounded-full" style="animation-delay: -2s;"></div>
<div class="float-particle absolute top-[55%] left-[20%] w-2 h-2 bg-accent-blue/20 rounded-full" style="animation-delay: -4s; animation-duration: 10s;"></div>
<div class="float-particle absolute top-[75%] right-[25%] w-4 h-4 bg-accent-violet/15 rounded-full" style="animation-delay: -6s; animation-duration: 12s;"></div>
</div>

<!-- What is Go Green School Section -->
<section class="relative px-4 md:px-20 lg:px-40 py-24 overflow-hidden">
<!-- Decorative bg elements -->
<div class="absolute top-0 right-0 w-80 h-80 bg-primary/5 rounded-full blur-3xl -z-10"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-forest/5 rounded-full blur-3xl -z-10"></div>
<div class="absolute inset-0 dot-pattern -z-10"></div>
<div class="absolute inset-0 mesh-gradient -z-10"></div>
<!-- Top fade from page background -->
<div class="absolute inset-x-0 top-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, #f8faf9 0%, transparent 100%); z-index: -1;"></div>
<!-- Bottom fade into page background -->
<div class="absolute inset-x-0 bottom-0 h-40 pointer-events-none" style="background: linear-gradient(to bottom, transparent 0%, #f8faf9 100%); z-index: -1;"></div>

<div class="max-w-5xl mx-auto">
<div class="fade-up text-center mb-20">
<span class="inline-flex items-center gap-2 bg-primary/10 text-primary font-bold tracking-widest uppercase text-xs px-5 py-2.5 rounded-full mb-6 pulse-glow" data-i18n="intro_label">🌍 Understanding the Movement</span>
<h2 class="text-forest text-4xl md:text-5xl lg:text-6xl font-black tracking-tight leading-tight" data-i18n="intro_title">What is <span class="gradient-text">Go Green School</span>?</h2>
<div class="section-divider mt-8"></div>
</div>

<!-- Timeline Steps -->
<div class="relative">
<!-- Connecting line (desktop) -->
<div class="hidden md:block absolute left-[28px] top-8 bottom-8 w-[3px] bg-gradient-to-b from-red-300 via-primary to-blue-400 rounded-full"></div>

<!-- Step 1: The Problem -->
<div class="fade-left relative flex flex-col md:flex-row gap-6 mb-12">
<div class="hidden md:flex flex-col items-center z-10">
<div class="step-badge" style="background: linear-gradient(135deg, #ef4444, #f97316);">1</div>
</div>
<div class="flex-1 group relative bg-white border border-red-100 rounded-3xl p-8 md:p-10 shadow-sm hover:shadow-2xl hover:shadow-red-100/50 transition-all duration-500 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-400 to-orange-400"></div>
<div class="absolute -top-4 -right-4 w-32 h-32 bg-red-50 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
<div class="relative">
<div class="flex items-center gap-3 mb-5">
<div class="md:hidden step-badge" style="background: linear-gradient(135deg, #ef4444, #f97316);">1</div>
<div class="w-12 h-12 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">warning</span>
</div>
<h3 class="text-forest text-xl md:text-2xl font-bold" data-i18n="intro_problem_title"></h3>
</div>
<p class="text-forest/70 text-base md:text-lg leading-relaxed pl-0 md:pl-15" data-i18n="intro_problem_desc">
Nowadays, we can see that a lot of information about the earth shows it is becoming more dangerous, unstable, and facing an uncertain future for the living creatures — humans, plants, and animals — that live inside it. We cannot just stand and do nothing; we need to take real action.
</p>
</div>
</div>
</div>

<!-- Step 2: The Definition -->
<div class="fade-right relative flex flex-col md:flex-row gap-6 mb-12">
<div class="hidden md:flex flex-col items-center z-10">
<div class="step-badge">2</div>
</div>
<div class="flex-1 group relative bg-white border border-emerald-100 rounded-3xl p-8 md:p-10 shadow-sm hover:shadow-2xl hover:shadow-emerald-100/50 transition-all duration-500 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-400 to-teal-400"></div>
<div class="absolute -top-4 -right-4 w-32 h-32 bg-emerald-50 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
<div class="relative">
<div class="flex items-center gap-3 mb-5">
<div class="md:hidden step-badge">2</div>
<div class="w-12 h-12 bg-emerald-50 text-primary rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">eco</span>
</div>
<h3 class="text-forest text-xl md:text-2xl font-bold" data-i18n="intro_definition_title"></h3>
</div>
<p class="text-forest/70 text-base md:text-lg leading-relaxed pl-0 md:pl-15" data-i18n="intro_definition_desc">
Go Green School is an action which shows the school's commitment to help the earth become a better environment for mankind. These are small activities that we can do — for instance, when throwing trash into the trash bin, we classify them into several groups so it makes it easier to recycle. Another example is choosing paper bags rather than plastic bags in our daily life.
</p>
</div>
</div>
</div>

<!-- Step 3: The Call -->
<div class="fade-left relative flex flex-col md:flex-row gap-6">
<div class="hidden md:flex flex-col items-center z-10">
<div class="step-badge" style="background: linear-gradient(135deg, #3b82f6, #6366f1);">3</div>
</div>
<div class="flex-1 group relative bg-white border border-blue-100 rounded-3xl p-8 md:p-10 shadow-sm hover:shadow-2xl hover:shadow-blue-100/50 transition-all duration-500 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-400"></div>
<div class="absolute -top-4 -right-4 w-32 h-32 bg-blue-50 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
<div class="relative">
<div class="flex items-center gap-3 mb-5">
<div class="md:hidden step-badge" style="background: linear-gradient(135deg, #3b82f6, #6366f1);">3</div>
<div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">diversity_3</span>
</div>
<h3 class="text-forest text-xl md:text-2xl font-bold" data-i18n="intro_call_title"></h3>
</div>
<p class="text-forest/70 text-base md:text-lg leading-relaxed pl-0 md:pl-15" data-i18n="intro_call_desc">
Clearly, these actions will not have a significant impact if only a few people are involved. It might be small actions, but by doing these, we help the earth recover. Because of that, as human beings who care about the future of the earth, we need to gather together and take these actions to save our planet.
</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Small Actions Section -->
<section class="relative px-4 md:px-20 lg:px-40 py-20 bg-section-sage-30">
<div class="absolute inset-0 dot-pattern opacity-50 -z-10"></div>
<div class="fade-up text-center mb-16">
<span class="inline-flex items-center gap-2 bg-primary/10 text-primary font-bold tracking-widest uppercase text-xs px-5 py-2.5 rounded-full mb-4" data-i18n="actions_label">🎯 Take Action Now</span>
<h2 class="text-forest text-4xl md:text-5xl font-black tracking-tight mt-3" data-i18n="actions_title">Small Actions, Big Impact</h2>
<p class="text-forest/60 max-w-2xl mx-auto mt-4 text-lg" data-i18n="actions_desc">Every small step counts. Here are simple things you can start doing today.</p>
<div class="w-24 h-1.5 bg-gradient-to-r from-primary to-forest rounded-full mx-auto mt-6"></div>
</div>
<div class="fade-up stagger-children grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="group relative gradient-border bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/15 hover:-translate-y-3 transition-all duration-500 text-center">
<div class="absolute -top-3 -right-3 step-badge text-xs">01</div>
<div class="w-18 h-18 bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 w-[72px] h-[72px] group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-4xl">delete</span>
</div>
<h3 class="text-forest text-lg font-bold mb-3" data-i18n="action1_title">Sort Your Waste</h3>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="action1_desc">Classify trash into organic, inorganic, and hazardous waste to make recycling easier.</p>
<div class="w-12 h-0.5 bg-primary/30 mx-auto mt-5 group-hover:w-full transition-all duration-500"></div>
</div>
<div class="group relative gradient-border bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/15 hover:-translate-y-3 transition-all duration-500 text-center">
<div class="absolute -top-3 -right-3 step-badge text-xs">02</div>
<div class="bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 w-[72px] h-[72px] group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-4xl">shopping_bag</span>
</div>
<h3 class="text-forest text-lg font-bold mb-3" data-i18n="action2_title">Use Paper Bags</h3>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="action2_desc">Replace plastic bags with paper or reusable bags in your daily activities.</p>
<div class="w-12 h-0.5 bg-primary/30 mx-auto mt-5 group-hover:w-full transition-all duration-500"></div>
</div>
<div class="group relative gradient-border bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/15 hover:-translate-y-3 transition-all duration-500 text-center">
<div class="absolute -top-3 -right-3 step-badge text-xs">03</div>
<div class="bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 w-[72px] h-[72px] group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-4xl">water_drop</span>
</div>
<h3 class="text-forest text-lg font-bold mb-3" data-i18n="action3_title">Save Water</h3>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="action3_desc">Use water wisely — turn off taps when not in use and collect rainwater for plants.</p>
<div class="w-12 h-0.5 bg-primary/30 mx-auto mt-5 group-hover:w-full transition-all duration-500"></div>
</div>
<div class="group relative gradient-border bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/15 hover:-translate-y-3 transition-all duration-500 text-center">
<div class="absolute -top-3 -right-3 step-badge text-xs">04</div>
<div class="bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 w-[72px] h-[72px] group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-4xl">park</span>
</div>
<h3 class="text-forest text-lg font-bold mb-3" data-i18n="action4_title">Plant Trees</h3>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="action4_desc">Plant a tree, nurture a garden, and help increase green spaces around your school.</p>
<div class="w-12 h-0.5 bg-primary/30 mx-auto mt-5 group-hover:w-full transition-all duration-500"></div>
</div>
</div>
</section>

<!-- CTA Banner -->
<section class="px-4 md:px-20 lg:px-40 py-14">
<div class="scale-in relative bg-gradient-to-br from-forest via-forest to-primary rounded-[2rem] p-12 lg:p-20 text-center overflow-hidden">
<!-- Animated decorative shapes -->
<div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-white/10 via-transparent to-transparent"></div>
<div class="absolute -top-16 -right-16 w-56 h-56 bg-primary/20 rounded-full blur-3xl floating-leaf"></div>
<div class="absolute -bottom-16 -left-16 w-72 h-72 bg-white/5 rounded-full blur-3xl floating-leaf"></div>
<div class="absolute top-10 right-10 w-20 h-20 border-2 border-white/10 rounded-full spin-slow"></div>
<div class="absolute bottom-10 left-10 w-14 h-14 border border-white/10 rounded-lg spin-slow" style="animation-direction: reverse;"></div>
<div class="absolute top-1/2 left-1/4 w-3 h-3 bg-primary/40 rounded-full floating-leaf"></div>
<div class="absolute top-1/3 right-1/4 w-2 h-2 bg-white/30 rounded-full floating-leaf"></div>
<div class="relative z-10">
<span class="inline-flex items-center gap-2 text-white/80 font-bold tracking-widest uppercase text-xs bg-white/10 px-5 py-2 rounded-full backdrop-blur-sm" data-i18n="cta_label">🌟 Be Part of the Change</span>
<h2 class="text-white text-3xl md:text-4xl lg:text-5xl font-black tracking-tight mt-6 max-w-3xl mx-auto leading-tight" data-i18n="cta_title">The Earth Won't Wait. <br/>Will You Act Now?</h2>
<p class="text-white/80 text-lg leading-relaxed max-w-2xl mx-auto mt-6" data-i18n="cta_desc">
It might be small actions, but together they create a wave of change. Join Go Green School and let's save our planet — one step at a time.
</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
<a href="/program" class="inline-flex items-center justify-center gap-2 bg-white text-forest px-8 py-4 rounded-xl text-base font-bold shadow-xl hover:shadow-2xl hover:-translate-y-1 hover:scale-105 transition-all duration-300" data-i18n="cta_btn_program">
Explore Programs
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</a>
<a href="/contact" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white px-8 py-4 rounded-xl text-base font-bold backdrop-blur-sm hover:bg-white/15 hover:-translate-y-1 transition-all duration-300" data-i18n="cta_btn_contact">
Contact Us
</a>
</div>
</div>
</div>
</section>

<!-- Our Mission Section -->
<section class="px-4 md:px-20 lg:px-40 py-20">
<div class="fade-up flex flex-col gap-16">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-l-4 border-primary pl-8">
<div class="max-w-2xl">
<span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="mission_label">Vision &amp; Mission</span>
<h2 class="text-forest text-4xl md:text-5xl font-black tracking-tight mt-3" data-i18n="mission_title">Our Vision &amp; Mission</h2>
<p class="text-forest/60 text-lg leading-relaxed mt-4" data-i18n="mission_desc">
                            Building a greener school culture through a clear vision and practical missions that shape environmentally responsible students.
                        </p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-8 items-stretch">
<div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-forest via-forest-light to-primary p-8 md:p-10 text-white shadow-2xl shadow-forest/10">
<div class="absolute -top-12 -right-12 w-40 h-40 rounded-full bg-white/10 blur-3xl"></div>
<div class="absolute bottom-0 left-0 w-48 h-48 rounded-full bg-primary/20 blur-3xl"></div>
<div class="relative z-10">
<div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-widest backdrop-blur-sm mb-5">
<span class="material-symbols-outlined text-base">visibility</span>
<span data-i18n="vision_badge">Our Vision</span>
</div>
<h3 class="text-3xl md:text-4xl font-black tracking-tight leading-tight max-w-2xl" data-i18n="vision_title">Creating a generation that learns, lives, and leads with environmental responsibility.</h3>
<p class="mt-5 max-w-2xl text-white/80 leading-relaxed text-base md:text-lg" data-i18n="vision_desc">Our vision is to become a school community that integrates sustainability into daily learning, energy use, and waste habits, so students grow into future leaders who care for people and the planet.</p>
<div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-3">
<div class="rounded-2xl bg-white/10 border border-white/10 p-4 backdrop-blur-sm">
<p class="text-xs uppercase tracking-widest text-white/60 mb-1" data-i18n="vision_point_1_label">Learning</p>
<p class="font-semibold text-sm text-white/90" data-i18n="vision_point_1_desc">Environmental values are part of everyday lessons.</p>
</div>
<div class="rounded-2xl bg-white/10 border border-white/10 p-4 backdrop-blur-sm">
<p class="text-xs uppercase tracking-widest text-white/60 mb-1" data-i18n="vision_point_2_label">Action</p>
<p class="font-semibold text-sm text-white/90" data-i18n="vision_point_2_desc">Students practice green habits through real school programs.</p>
</div>
<div class="rounded-2xl bg-white/10 border border-white/10 p-4 backdrop-blur-sm">
<p class="text-xs uppercase tracking-widest text-white/60 mb-1" data-i18n="vision_point_3_label">Impact</p>
<p class="font-semibold text-sm text-white/90" data-i18n="vision_point_3_desc">Positive change extends from campus to the wider community.</p>
</div>
</div>
</div>
</div>
<div class="bg-white rounded-3xl border border-forest/5 shadow-xl shadow-forest/5 p-8 md:p-10 flex flex-col justify-center">
<div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest mb-5 self-start">
<span class="material-symbols-outlined text-base">flag</span>
<span data-i18n="mission_summary_badge">Mission Summary</span>
</div>
<h3 class="text-forest text-2xl md:text-3xl font-black tracking-tight mb-4" data-i18n="mission_summary_title">How we turn vision into action</h3>
<p class="text-forest/60 leading-relaxed" data-i18n="mission_summary_desc">The three mission pillars below show how Go Green School applies sustainability in learning, clean energy, and responsible waste management.</p>
<div class="mt-6 space-y-4">
<div class="flex items-start gap-3">
<span class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-lg">school</span></span>
<div>
<p class="text-forest font-bold" data-i18n="mission_summary_item_1_title">Education first</p>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="mission_summary_item_1_desc">Students develop knowledge, values, and habits that support sustainability.</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-lg">solar_power</span></span>
<div>
<p class="text-forest font-bold" data-i18n="mission_summary_item_2_title">Technology with purpose</p>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="mission_summary_item_2_desc">Renewable energy is used as both infrastructure and a learning resource.</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-lg">recycling</span></span>
<div>
<p class="text-forest font-bold" data-i18n="mission_summary_item_3_title">Responsible environment</p>
<p class="text-forest/60 text-sm leading-relaxed" data-i18n="mission_summary_item_3_desc">Waste is sorted, recycled, and processed to keep the school clean and healthy.</p>
</div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-children">
<div class="group relative bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 transition-all duration-500 cursor-pointer overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-emerald-300 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="absolute top-4 right-4 text-forest/5 text-7xl font-black leading-none select-none">01</div>
<div class="relative">
<div class="w-16 h-16 bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-3xl">school</span>
</div>
<h3 class="text-forest text-xl font-bold mb-3 tracking-tight" data-i18n="card1_title">Sustainable Education</h3>
<p class="text-forest/60 leading-relaxed text-sm" data-i18n="card1_desc">Nature-based curriculum that integrates environmental conservation in every subject.</p>
<button onclick="openLearnMore('education')" class="flex items-center gap-2 mt-5 text-primary text-sm font-semibold opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 bg-transparent border-0 cursor-pointer p-0 font-display">
<span data-i18n="card_learn_more">Learn more</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</div>
<div class="group relative bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 transition-all duration-500 cursor-pointer overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-amber-400 to-orange-300 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="absolute top-4 right-4 text-forest/5 text-7xl font-black leading-none select-none">02</div>
<div class="relative">
<div class="w-16 h-16 bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-3xl">solar_power</span>
</div>
<h3 class="text-forest text-xl font-bold mb-3 tracking-tight" data-i18n="card2_title">Renewable Energy</h3>
<p class="text-forest/60 leading-relaxed text-sm" data-i18n="card2_desc">Solar panel usage as the school's primary energy source and student learning medium.</p>
<button onclick="openLearnMore('energy')" class="flex items-center gap-2 mt-5 text-primary text-sm font-semibold opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 bg-transparent border-0 cursor-pointer p-0 font-display">
<span data-i18n="card_learn_more">Learn more</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</div>
<div class="group relative bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 transition-all duration-500 cursor-pointer overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-cyan-300 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="absolute top-4 right-4 text-forest/5 text-7xl font-black leading-none select-none">03</div>
<div class="relative">
<div class="w-16 h-16 bg-gradient-to-br from-sage to-primary/10 text-primary rounded-2xl flex items-center justify-center mb-6 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-forest group-hover:text-white transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
<span class="material-symbols-outlined text-3xl">recycling</span>
</div>
<h3 class="text-forest text-xl font-bold mb-3 tracking-tight" data-i18n="card3_title">Waste Management</h3>
<p class="text-forest/60 leading-relaxed text-sm" data-i18n="card3_desc">Comprehensive recycling program and composting of school cafeteria organic waste.</p>
<button onclick="openLearnMore('waste')" class="flex items-center gap-2 mt-5 text-primary text-sm font-semibold opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 bg-transparent border-0 cursor-pointer p-0 font-display">
<span data-i18n="card_learn_more">Learn more</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Sustainability Tips Section -->
<section class="px-4 md:px-20 lg:px-40 py-20">
<div class="fade-up flex flex-col md:flex-row md:items-end justify-between gap-6 border-l-4 border-primary pl-8 mb-12">
<div class="max-w-2xl">
<h2 class="text-forest text-4xl md:text-5xl font-black tracking-tight" data-i18n="tips_title">Sustainability Tips</h2>
<p class="text-forest/60 mt-4 text-lg" data-i18n="tips_desc">Small steps for big changes for our earth.</p>
</div>
<a class="hidden md:flex text-primary font-bold items-center gap-2 group" href="#" data-i18n="tips_viewall">
View All Tips
<span class="material-symbols-outlined transition-transform group-hover:translate-x-1">trending_flat</span>
</a>
</div>
<div class="fade-up grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="group cursor-pointer hover:-translate-y-2 transition-all duration-300">
<div class="relative aspect-[4/3] rounded-2xl overflow-hidden mb-4 shadow-md group-hover:shadow-xl transition-shadow duration-300">
<img alt="Reusable water bottle" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASshKnEvZkKQgAz3e3NwOmBDPh4MaS4nTByh3dUajdwyh42W_FIAtXXGwCcICkUki8gR107nCNVw4Y3lCSz1oXJDuX2TubzHfBUUZKYGep82lDamLIW6ZPitl6GhUyfdVYsxNa05nYWGsRIo6S-Z7pNUZ8ZENkBbNtqCGtJvEaCoM88uuxkg9b_ZaeVQIjBCzpXbH0R39B9Tpzh37yahgV4a0b_2ufG1RTQqFP8Ugv7s7Po8t3KgKqcwzxjwo5LTV3gp7L_xMv3iU"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider" data-i18n="tag_lifestyle">Lifestyle</span>
</div>
</div>
<h4 class="font-bold text-lg text-forest group-hover:text-primary transition-colors" data-i18n="tip1_title">Reduce Single-Use Plastics</h4>
</div>
<div class="group cursor-pointer hover:-translate-y-2 transition-all duration-300">
<div class="relative aspect-[4/3] rounded-2xl overflow-hidden mb-4 shadow-md group-hover:shadow-xl transition-shadow duration-300">
<img alt="Potted plants" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjkA39j3eDQBdhcbCi8YTWPsskpkvjRHJ_83lLfIB4xAsT61Is-dm4Q1ZyeFtd-NGSMTvF1TFZHVRWjULgcZON_hzaGnX_UgctgeiCGj-brKkaSgcxaBVF6oTCnVMwvrhAVuGeO1bV4PgsNthMBIHp6vCd9oW9v9CSyAGq7OjIBufKs585I32LbdCb68rzeRnfOPe-ZYrgbNawhU0elYv-zk50DAi__JAqabKX8qz2ud3Q6EjyJgIw767ZcOm4Af_QVgdEIqw3sME"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider" data-i18n="tag_gardening">Gardening</span>
</div>
</div>
<h4 class="font-bold text-lg text-forest group-hover:text-primary transition-colors" data-i18n="tip2_title">Start Your Own Vegetable Garden</h4>
</div>
<div class="group cursor-pointer hover:-translate-y-2 transition-all duration-300">
<div class="relative aspect-[4/3] rounded-2xl overflow-hidden mb-4 shadow-md group-hover:shadow-xl transition-shadow duration-300">
<img alt="Energy saving lamp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBBNsc0hGoz9b3cthCvsHrDh0uikLqdrgXnMV1ko7gMXlkVr0a9Zrw-3Ypkz545UDTRKbmpowcK7BUlk8j-G8hK4QC9V7hF0wTRLTYHkOK8Gnx7PjApBCA95o_pqe6UNrMg-w9TY0RX971t8k0C6t7IyaJRKgIaBveS43a2JRbKz1c-uEfzhMry2ObWFSPddXFWsBKQiFFEqmI2fU9-JhLnUv0rsW6TLCy0H-gOXiYTnfdx9LO98q7FdPBOF_cYf7Yt30vjsllLmE"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider" data-i18n="tag_energy">Energy</span>
</div>
</div>
<h4 class="font-bold text-lg text-forest group-hover:text-primary transition-colors" data-i18n="tip3_title">Save Energy at Home</h4>
</div>
<div class="group cursor-pointer hover:-translate-y-2 transition-all duration-300">
<div class="relative aspect-[4/3] rounded-2xl overflow-hidden mb-4 shadow-md group-hover:shadow-xl transition-shadow duration-300">
<img alt="Paper recycling" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUN5ElIJV_3pN6HSBASBXV5g4FjP4DNNLOxa3yqrUgeJ_ye4Whe7684jIBobkWFq95aP-bHr22eJcNNZCKRYzO_TPybKICfPFrIWyEaA-vPx-0XlKhZfrdzn9dg1TEHh_kynEK1IihDbAsEcJUur3rIpv3jGRzVGQYRfTSuKhGG0pM-yOH4ig8t52Nf63vlVl7FMszZZz1NNIEr1I_VHXLGMm1y__qZaNc2S7pQBGC_MVem2Ehuj-L1hT81ftQWdLCXVYYJn6L704"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider" data-i18n="tag_education">Education</span>
</div>
</div>
<h4 class="font-bold text-lg text-forest group-hover:text-primary transition-colors" data-i18n="tip4_title">How to Sort Waste Properly</h4>
</div>
</div>
</section>
<!-- Community Voices Section -->
<section class="relative px-4 md:px-20 lg:px-40 py-24 bg-section-sage-50 overflow-hidden">
<div class="absolute inset-0 mesh-gradient -z-10"></div>
<div class="absolute top-20 right-10 text-8xl opacity-5 select-none">💬</div>
<div class="absolute bottom-10 left-10 text-6xl opacity-5 select-none">🌿</div>
<div class="fade-up text-center mb-16">
<span class="inline-flex items-center gap-2 bg-primary/10 text-primary font-bold tracking-widest uppercase text-xs px-5 py-2.5 rounded-full mb-4" data-i18n="community_label">⭐ Testimonials</span>
<h2 class="text-forest text-4xl md:text-5xl font-black tracking-tight mt-3" data-i18n="community_title">Community Voices</h2>
<p class="text-forest/60 max-w-xl mx-auto mt-4 text-lg" data-i18n="community_desc">What they say about the learning experience at Go Green School.</p>
<div class="w-24 h-1.5 bg-gradient-to-r from-primary to-forest rounded-full mx-auto mt-6"></div>
</div>
<div class="fade-up stagger-children grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Testimonial 1 -->
<div class="quote-card relative bg-white p-8 pt-10 rounded-2xl shadow-sm border border-forest/5 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 transition-all duration-500 cursor-pointer overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-emerald-300"></div>
<div class="flex gap-1 mb-4">
<span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span>
</div>
<p class="italic text-forest/70 leading-relaxed mb-6" data-i18n="testi1_text">"My child is now much more aware of the environment. She even taught us how to make compost at home!"</p>
<div class="flex items-center gap-4 pt-5 border-t border-forest/5">
<div class="size-12 rounded-full overflow-hidden ring-2 ring-primary/20">
<img alt="Siti Aminah" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4UfBv_Brv8TSd_KclplmJjOGwxOH_W2qpvldpYr5M1gyk8xf3sfJr3Mq8-xzB-5e4RaoQLRDXPWO6OgWW0UAjygvfo3XiVgLRjvyDk9n0I_L9PITt5yndXywHpTmt3br68J9vT0cRFp-UfvH_hK6Irc9Q7wf5bXBrtVQlNkPZXTZU2wpnpnvxnC7S6pmLegh1uCrV5UyIZ8FkOMDow2V46EumrqodcDgjyCpwWxxcEs1qPecdkVUk-1r_e8CkCJ61at8DAPYWwmc"/>
</div>
<div>
<h5 class="font-bold text-forest">Siti Aminah</h5>
<p class="text-xs text-forest/50" data-i18n="testi1_role">Student Parent</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="quote-card relative bg-white p-8 pt-10 rounded-2xl shadow-sm border border-forest/5 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 transition-all duration-500 cursor-pointer overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-300"></div>
<div class="flex gap-1 mb-4">
<span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span>
</div>
<p class="italic text-forest/70 leading-relaxed mb-6" data-i18n="testi2_text">"Go Green School gave me a strong foundation to continue my studies in environmental engineering. The experience was very real."</p>
<div class="flex items-center gap-4 pt-5 border-t border-forest/5">
<div class="size-12 rounded-full overflow-hidden ring-2 ring-primary/20">
<img alt="Budi Santoso" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk0j-EB1o47yAGJkmtpm0YEAuawQrcJqEFn7d5yVkjK5SZQQMGRaOhSTlQEj_63p1tUsIfz4dCLN9xqnz_gfWdV5Sl2SR1BrZbeSmXUAlhO61px5FuCUEx0PuDML6Q6i5A75R65tyX3_rbNRga9D9hWuOKnc7O127jju2oJirkwVyt9w_d10lldRBM_NVF8XdTG93PP4FIbqs0OBNRf9GyKiIPVADxpz4ejiTv2TrSvPxptXrHUQvcdFq-TBAjJr4Q7T1IYumJWEA"/>
</div>
<div>
<h5 class="font-bold text-forest">Budi Santoso</h5>
<p class="text-xs text-forest/50" data-i18n="testi2_role">Alumni 2021</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="quote-card relative bg-white p-8 pt-10 rounded-2xl shadow-sm border border-forest/5 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 transition-all duration-500 cursor-pointer overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-amber-400 to-rose-300"></div>
<div class="flex gap-1 mb-4">
<span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span><span class="text-amber-400 text-sm">★</span>
</div>
<p class="italic text-forest/70 leading-relaxed mb-6" data-i18n="testi3_text">"Teaching here is not just about delivering material, but truly practicing a green lifestyle every day with students."</p>
<div class="flex items-center gap-4 pt-5 border-t border-forest/5">
<div class="size-12 rounded-full overflow-hidden ring-2 ring-primary/20">
<img alt="Dewi Lestari" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGwCasxaje4b1fRB9eziOyWSrcqgtVk7U1EFBA1bE9UsHflE2tVY4Db7VAfWM0m9F_3EadNNhmd7lsRDpl09mWJEH_-KUQ22UIiJUBHvG3ZqWJydyhnKfM9y9cwGh9nY8i-xLVMBWQi_yM_oakqKuUYrwJheRfwPF8u-r01zk1ANkTteYp4RzaKa06HWAxuNX68f9lMoMdHMXmHV4vOLOV0AjhEsZutbwEiFfBrQQwJoYUXisibuMBuLgvUynFShQmnOgmPnK6hSQ"/>
</div>
<div>
<h5 class="font-bold text-forest">Dewi Lestari</h5>
<p class="text-xs text-forest/50" data-i18n="testi3_role">Science Teacher</p>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer Wave -->
<div class="relative h-20">
<svg class="absolute bottom-0 w-full" viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 40 C150 80 350 0 600 40 C850 80 1050 10 1200 50 L1200 80 L0 80Z" fill="#064e3b"/>
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
<span class="material-symbols-outlined text-xl">Mail</span>
</a>
</div>
</div>
<div class="grid grid-cols-2 lg:grid-cols-3 lg:col-span-3 gap-12">
<div class="space-y-6">
<h5 class="text-white font-bold text-sm uppercase tracking-widest" data-i18n="footer_quicklinks">Quick Links</h5>
<ul class="space-y-4 text-sage/60 text-sm">
<li><a class="hover:text-primary transition-colors" href="#" data-i18n="footer_registration">Registration</a></li>
<li><a class="hover:text-primary transition-colors" href="#" data-i18n="footer_curriculum">Curriculum</a></li>
<li><a class="hover:text-primary transition-colors" href="#" data-i18n="footer_news">School News</a></li>
<li><a class="hover:text-primary transition-colors" href="#" data-i18n="footer_career">Career</a></li>
</ul>
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
<span class="material-symbols-outlined text-primary text-base">photo_camera</span>
<span>@earthygreen.vibes</span>
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

<!-- ===== Learn More Detail Modal ===== -->
<div id="learn-more-modal" class="modal-overlay fixed inset-0 z-[300] flex items-start justify-center p-4 pt-8 md:pt-14 bg-black/60 backdrop-blur-sm overflow-y-auto" onclick="closeLearnMore()">
    <div class="modal-box bg-white rounded-3xl shadow-2xl max-w-2xl w-full relative mb-12" onclick="event.stopPropagation()">
        <button onclick="closeLearnMore()" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white/80 hover:bg-red-50 hover:text-red-500 text-forest/60 flex items-center justify-center transition-all shadow-sm border border-forest/10">
            <span class="material-symbols-outlined text-xl">close</span>
        </button>
        <div id="modal-header" class="rounded-t-3xl p-8 pb-6 relative overflow-hidden">
            <div id="modal-header-orb" class="absolute -top-8 -right-8 w-52 h-52 rounded-full opacity-25 blur-3xl pointer-events-none"></div>
            <div id="modal-badge" class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-bold uppercase tracking-widest mb-4 bg-white/20 text-white backdrop-blur-sm"></div>
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 bg-white/20 shadow-lg shadow-black/10">
                    <span id="modal-icon" class="material-symbols-outlined text-3xl text-white" style="font-variation-settings:'FILL' 1"></span>
                </div>
                <div>
                    <h2 id="modal-title" class="text-2xl md:text-3xl font-black tracking-tight text-white leading-tight"></h2>
                    <p id="modal-tagline" class="text-sm mt-1.5 text-white/75 leading-snug"></p>
                </div>
            </div>
        </div>
        <div class="p-6 md:p-8 pt-5 space-y-6">
            <p id="modal-overview" class="text-forest/70 leading-relaxed text-base border-l-4 border-primary/40 pl-4 py-1"></p>
            <div>
                <h3 id="modal-label-points" class="text-forest font-black text-base mb-3 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1">star</span>
                    </span>
                    <span>Key Points</span>
                </h3>
                <ul id="modal-points" class="space-y-2.5"></ul>
            </div>
            <div class="bg-sage/70 rounded-2xl p-5">
                <h3 id="modal-label-how" class="text-forest font-black text-base mb-4 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1">settings</span>
                    </span>
                    <span>How It Works</span>
                </h3>
                <div id="modal-steps" class="space-y-3"></div>
            </div>
            <div>
                <h3 id="modal-label-impact" class="text-forest font-black text-base mb-3 flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1">bar_chart</span>
                    </span>
                    <span>Impact &amp; Data</span>
                </h3>
                <div id="modal-stats" class="grid grid-cols-1 sm:grid-cols-3 gap-3"></div>
            </div>
            <div class="pt-4 border-t border-forest/5 flex flex-col sm:flex-row gap-3 items-center justify-between">
                <p id="modal-cta-text" class="text-forest/50 text-sm text-center sm:text-left"></p>
                <a href="/program" class="inline-flex items-center gap-2 bg-primary hover:bg-forest text-white px-6 py-2.5 rounded-full font-bold text-sm transition-all hover:-translate-y-0.5 shadow-lg shadow-primary/25 whitespace-nowrap flex-shrink-0">
                    <span id="modal-cta-btn">View All Programs</span>
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                </a>
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
        hero1_title: "Educating Future Leaders for a Greener World",
        hero1_desc: "Join Go Green School and be part of the environmental revolution in education.",
        hero2_title: "Manage Waste Wisely",
        hero2_desc: "Together we recycle for a cleaner and more sustainable future for the earth.",
        hero3_title: "Reduce, Reuse, Recycle",
        hero3_desc: "Three simple steps that can change the world. Start from school, start from us.",
        hero4_title: "Sorting Waste from an Early Age",
        hero4_desc: "Teach children to sort waste to build environmentally friendly habits.",
        hero_btn_primary: "Learn Program",
        hero_stat_students: "500+ students joined the program",
        hero_stat_recycle: "200kg of waste recycled",
        hero_stat_programs: "10 environmental programs",
        nav_get_started: "Get Started",
        stat1_label: "Participating Students",
        stat1_value: "500+",
        stat1_badge: "Active Green Leaders",
        stat2_label: "Waste Recycled",
        stat2_value: "200kg",
        stat2_badge: "+25% This Year",
        stat3_label: "Environmental Programs",
        stat3_value: "10",
        stat3_badge: "Ongoing Initiatives",
        community_label: "Testimonials",
        footer_newsletter: "Newsletter",
        footer_newsletter_desc: "Get green tips in your inbox.",
        mission_label: "Vision & Mission",
        mission_title: "Our Vision & Mission",
        mission_desc: "Building a greener school culture through a clear vision and practical missions that shape environmentally responsible students.",
        vision_badge: "Our Vision",
        vision_title: "Creating a generation that learns, lives, and leads with environmental responsibility.",
        vision_desc: "Our vision is to become a school community that integrates sustainability into daily learning, energy use, and waste habits, so students grow into future leaders who care for people and the planet.",
        vision_point_1_label: "Learning",
        vision_point_1_desc: "Environmental values are part of everyday lessons.",
        vision_point_2_label: "Action",
        vision_point_2_desc: "Students practice green habits through real school programs.",
        vision_point_3_label: "Impact",
        vision_point_3_desc: "Positive change extends from campus to the wider community.",
        mission_summary_badge: "Mission Summary",
        mission_summary_title: "How we turn vision into action",
        mission_summary_desc: "The three mission pillars below show how Go Green School applies sustainability in learning, clean energy, and responsible waste management.",
        mission_summary_item_1_title: "Education first",
        mission_summary_item_1_desc: "Students develop knowledge, values, and habits that support sustainability.",
        mission_summary_item_2_title: "Technology with purpose",
        mission_summary_item_2_desc: "Renewable energy is used as both infrastructure and a learning resource.",
        mission_summary_item_3_title: "Responsible environment",
        mission_summary_item_3_desc: "Waste is sorted, recycled, and processed to keep the school clean and healthy.",
        card1_title: "Sustainable Education",
        card1_desc: "Nature-based curriculum that integrates environmental conservation in every subject.",
        card2_title: "Renewable Energy",
        card2_desc: "Solar panel usage as the school's primary energy source and student learning medium.",
        card3_title: "Waste Management",
        card3_desc: "Comprehensive recycling program and composting of school cafeteria organic waste.",
        card_learn_more: "Learn more",
        tips_title: "Sustainability Tips",
        tips_desc: "Small steps for big changes for our earth.",
        tips_viewall: "View All Tips",
        tag_lifestyle: "Lifestyle",
        tag_gardening: "Gardening",
        tag_energy: "Energy",
        tag_education: "Education",
        tip1_title: "Reduce Single-Use Plastics",
        tip2_title: "Start Your Own Vegetable Garden",
        tip3_title: "Save Energy at Home",
        tip4_title: "How to Sort Waste Properly",
        community_title: "Community Voices",
        community_desc: "What they say about the learning experience at Go Green School.",
        testi1_role: "Student Parent",
        testi1_text: '"My child is now much more aware of the environment. She even taught us how to make compost at home!"',
        testi2_role: "Alumni 2021",
        testi2_text: '"Go Green School gave me a strong foundation to continue my studies in environmental engineering. The experience was very real."',
        testi3_role: "Science Teacher",
        testi3_text: '"Teaching here is not just about delivering material, but truly practicing a green lifestyle every day with students."',
        footer_desc: "Shaping the character of future leaders who are not only academically intelligent, but also have high empathy for earth's sustainability.",
        footer_quicklinks: "Quick Links",
        footer_registration: "Registration",
        footer_curriculum: "Curriculum",
        footer_news: "School News",
        footer_career: "Career",
        footer_contactus: "Contact Us",
        footer_copyright: "© 2024 Go Green School. All Rights Reserved.",
        footer_privacy: "Privacy Policy",
        footer_terms: "Terms & Conditions",
        // Go Green School Introduction
        intro_label: "🌍 Understanding the Movement",
        intro_title: 'What is <span class="text-primary">Go Green School</span>?',
        intro_problem_title: "",
        intro_problem_desc: "Nowadays, we can see that a lot of information about the earth shows it is becoming more dangerous, unstable, and facing an uncertain future for the living creatures — humans, plants, and animals — that live inside it. We cannot just stand and do nothing; we need to take real action.",
        intro_definition_title: "",
        intro_definition_desc: "Go Green School is an action which shows the school's commitment to help the earth become a better environment for mankind. These are small activities that we can do — for instance, when throwing trash into the trash bin, we classify them into several groups so it makes it easier to recycle. Another example is choosing paper bags rather than plastic bags in our daily life.",
        intro_call_title: "",
        intro_call_desc: "Clearly, these actions will not have a significant impact if only a few people are involved. It might be small actions, but by doing these, we help the earth recover. Because of that, as human beings who care about the future of the earth, we need to gather together and take these actions to save our planet.",
        // Small Actions
        actions_label: "Take Action Now",
        actions_title: "Small Actions, Big Impact",
        actions_desc: "Every small step counts. Here are simple things you can start doing today.",
        action1_title: "Sort Your Waste",
        action1_desc: "Classify trash into organic, inorganic, and hazardous waste to make recycling easier.",
        action2_title: "Use Paper Bags",
        action2_desc: "Replace plastic bags with paper or reusable bags in your daily activities.",
        action3_title: "Save Water",
        action3_desc: "Use water wisely — turn off taps when not in use and collect rainwater for plants.",
        action4_title: "Plant Trees",
        action4_desc: "Plant a tree, nurture a garden, and help increase green spaces around your school.",
        // CTA Banner
        cta_label: "Be Part of the Change",
        cta_title: 'The Earth Won\'t Wait. <br/>Will You Act Now?',
        cta_desc: "It might be small actions, but together they create a wave of change. Join Go Green School and let's save our planet — one step at a time.",
        cta_btn_program: "Explore Programs",
        cta_btn_contact: "Contact Us",
        // Feature Ticker
        ticker_eco: "Eco-Friendly Education",
        ticker_recycle: "Waste Recycling Program",
        ticker_school: "Green School Initiative",
        ticker_energy: "Renewable Energy",
        ticker_water: "Water Conservation",
        ticker_community: "Community Impact",
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
        nav_profile_hint: "Profil Developer",
        hero1_title: "Mendidik Pemimpin Masa Depan untuk Dunia yang Lebih Hijau",
        hero1_desc: "Bergabunglah dengan Go Green School dan jadilah bagian dari revolusi lingkungan dalam pendidikan.",
        hero2_title: "Kelola Sampah dengan Bijak",
        hero2_desc: "Bersama-sama kita daur ulang untuk masa depan bumi yang lebih bersih dan lestari.",
        hero3_title: "Reduce, Reuse, Recycle",
        hero3_desc: "Tiga langkah sederhana yang bisa mengubah dunia. Mulai dari sekolah, mulai dari kita.",
        hero4_title: "Memilah Sampah Sejak Dini",
        hero4_desc: "Ajarkan anak-anak memilah sampah untuk membangun kebiasaan ramah lingkungan.",
        hero_btn_primary: "Pelajari Program",
        hero_stat_students: "500+ siswa berpartisipasi",
        hero_stat_recycle: "200kg sampah didaur ulang",
        hero_stat_programs: "10 program lingkungan",
        nav_get_started: "Mulai Sekarang",
        stat1_label: "Siswa Berpartisipasi",
        stat1_value: "500+",
        stat1_badge: "Green Leaders Aktif",
        stat2_label: "Sampah Didaur Ulang",
        stat2_value: "200kg",
        stat2_badge: "+25% Tahun Ini",
        stat3_label: "Program Lingkungan",
        stat3_value: "10",
        stat3_badge: "Inisiatif Berjalan",
        community_label: "Testimoni",
        footer_newsletter: "Buletin",
        footer_newsletter_desc: "Dapatkan tips hijau di email kamu.",
        mission_label: "Visi & Misi",
        mission_title: "Visi & Misi Kami",
        mission_desc: "Membangun budaya sekolah yang lebih hijau melalui visi yang jelas dan misi nyata untuk membentuk siswa yang bertanggung jawab terhadap lingkungan.",
        vision_badge: "Visi Kami",
        vision_title: "Mewujudkan generasi yang belajar, hidup, dan memimpin dengan tanggung jawab lingkungan.",
        vision_desc: "Visi kami adalah menjadi komunitas sekolah yang mengintegrasikan keberlanjutan dalam pembelajaran harian, penggunaan energi, dan kebiasaan pengelolaan sampah, sehingga siswa tumbuh menjadi pemimpin masa depan yang peduli pada manusia dan bumi.",
        vision_point_1_label: "Pembelajaran",
        vision_point_1_desc: "Nilai-nilai lingkungan menjadi bagian dari pelajaran sehari-hari.",
        vision_point_2_label: "Aksi",
        vision_point_2_desc: "Siswa mempraktikkan kebiasaan hijau melalui program nyata di sekolah.",
        vision_point_3_label: "Dampak",
        vision_point_3_desc: "Perubahan positif meluas dari sekolah ke masyarakat sekitar.",
        mission_summary_badge: "Ringkasan Misi",
        mission_summary_title: "Bagaimana visi diwujudkan menjadi aksi",
        mission_summary_desc: "Tiga pilar misi di bawah menunjukkan bagaimana Go Green School menerapkan keberlanjutan dalam pembelajaran, energi bersih, dan pengelolaan sampah yang bertanggung jawab.",
        mission_summary_item_1_title: "Pendidikan sebagai dasar",
        mission_summary_item_1_desc: "Siswa membangun pengetahuan, nilai, dan kebiasaan yang mendukung keberlanjutan.",
        mission_summary_item_2_title: "Teknologi yang bermakna",
        mission_summary_item_2_desc: "Energi terbarukan digunakan sebagai infrastruktur sekaligus sumber belajar.",
        mission_summary_item_3_title: "Lingkungan yang bertanggung jawab",
        mission_summary_item_3_desc: "Sampah dipilah, didaur ulang, dan diolah agar sekolah tetap bersih dan sehat.",
        card1_title: "Pendidikan Berkelanjutan",
        card1_desc: "Kurikulum berbasis alam yang mengintegrasikan pelestarian lingkungan dalam setiap mata pelajaran.",
        card2_title: "Energi Terbarukan",
        card2_desc: "Penggunaan panel surya sebagai sumber energi utama sekolah sekaligus media belajar siswa.",
        card3_title: "Pengelolaan Limbah",
        card3_desc: "Program daur ulang komprehensif dan pengomposan limbah organik kantin sekolah.",
        card_learn_more: "Selengkapnya",
        tips_title: "Tips Keberlanjutan",
        tips_desc: "Langkah kecil untuk perubahan besar bagi bumi kita.",
        tips_viewall: "Lihat Semua Tips",
        tag_lifestyle: "Gaya Hidup",
        tag_gardening: "Berkebun",
        tag_energy: "Energi",
        tag_education: "Edukasi",
        tip1_title: "Kurangi Plastik Sekali Pakai",
        tip2_title: "Mulai Kebun Sayur Sendiri",
        tip3_title: "Hemat Energi di Rumah",
        tip4_title: "Cara Memilah Sampah dengan Benar",
        community_title: "Suara Komunitas",
        community_desc: "Apa kata mereka tentang pengalaman belajar di Go Green School.",
        testi1_role: "Orang Tua Siswa",
        testi1_text: '"Anak saya sekarang jauh lebih peduli dengan lingkungannya. Dia bahkan mengajari kami cara membuat kompos di rumah!"',
        testi2_role: "Alumni 2021",
        testi2_text: '"Go Green School memberikan saya dasar yang kuat untuk melanjutkan studi di bidang teknik lingkungan. Pengalamannya sangat nyata."',
        testi3_role: "Guru Sains",
        testi3_text: '"Mengajar di sini bukan sekadar memberikan materi, tapi benar-benar mempraktikkan gaya hidup hijau setiap hari bersama siswa."',
        footer_desc: "Membentuk karakter pemimpin masa depan yang tidak hanya cerdas secara akademis, tetapi juga memiliki empati tinggi terhadap kelestarian bumi.",
        footer_quicklinks: "Tautan Cepat",
        footer_registration: "Pendaftaran",
        footer_curriculum: "Kurikulum",
        footer_news: "Berita Sekolah",
        footer_career: "Karir",
        footer_contactus: "Hubungi Kami",
        footer_copyright: "© 2024 Go Green School. Hak Cipta Dilindungi.",
        footer_privacy: "Kebijakan Privasi",
        footer_terms: "Syarat & Ketentuan",
        // Go Green School Introduction
        intro_label: "🌍 Memahami Gerakan",
        intro_title: 'Apa itu <span class="text-primary">Go Green School</span>?',
        intro_problem_title: "",
        intro_problem_desc: "Saat ini, kita dapat melihat bahwa banyak informasi tentang bumi menunjukkan bahwa bumi semakin berbahaya, tidak stabil, dan menghadapi masa depan yang tidak pasti bagi makhluk hidup — manusia, tumbuhan, dan hewan — yang tinggal di dalamnya. Kita tidak bisa hanya berdiam diri dan tidak melakukan apa-apa; kita perlu mengambil tindakan nyata.",
        intro_definition_title: "",
        intro_definition_desc: "Go Green School adalah sebuah aksi yang menunjukkan komitmen sekolah untuk membantu bumi menjadi lingkungan yang lebih baik bagi umat manusia. Ini adalah kegiatan-kegiatan kecil yang bisa kita lakukan — misalnya, saat membuang sampah ke tempat sampah, kita mengklasifikasikannya ke dalam beberapa kelompok agar lebih mudah didaur ulang. Contoh lainnya adalah memilih tas kertas daripada tas plastik dalam kehidupan sehari-hari.",
        intro_call_title: "",
        intro_call_desc: "Jelas, tindakan-tindakan ini tidak akan berdampak signifikan jika hanya sedikit orang yang terlibat. Mungkin ini tindakan kecil, tetapi dengan melakukannya, kita membantu bumi pulih. Karena itu, sebagai manusia yang peduli akan masa depan bumi, kita perlu bersatu dan melakukan tindakan ini untuk menyelamatkan planet kita.",
        // Small Actions
        actions_label: "Ambil Tindakan Sekarang",
        actions_title: "Aksi Kecil, Dampak Besar",
        actions_desc: "Setiap langkah kecil berarti. Berikut hal sederhana yang bisa kamu mulai hari ini.",
        action1_title: "Pilah Sampahmu",
        action1_desc: "Klasifikasikan sampah menjadi organik, anorganik, dan berbahaya agar lebih mudah didaur ulang.",
        action2_title: "Gunakan Tas Kertas",
        action2_desc: "Ganti tas plastik dengan tas kertas atau tas yang bisa dipakai ulang dalam aktivitas sehari-hari.",
        action3_title: "Hemat Air",
        action3_desc: "Gunakan air dengan bijak — matikan keran saat tidak digunakan dan tampung air hujan untuk tanaman.",
        action4_title: "Tanam Pohon",
        action4_desc: "Tanam pohon, rawat kebun, dan bantu tingkatkan ruang hijau di sekitar sekolahmu.",
        // CTA Banner
        cta_label: "Jadilah Bagian dari Perubahan",
        cta_title: 'Bumi Tidak Akan Menunggu. <br/>Akankah Kamu Bertindak Sekarang?',
        cta_desc: "Mungkin ini tindakan kecil, tetapi bersama-sama mereka menciptakan gelombang perubahan. Bergabunglah dengan Go Green School dan mari selamatkan planet kita — satu langkah pada satu waktu.",
        cta_btn_program: "Jelajahi Program",
        cta_btn_contact: "Hubungi Kami",
        // Feature Ticker
        ticker_eco: "Pendidikan Ramah Lingkungan",
        ticker_recycle: "Program Daur Ulang Sampah",
        ticker_school: "Inisiatif Sekolah Hijau",
        ticker_energy: "Energi Terbarukan",
        ticker_water: "Konservasi Air",
        ticker_community: "Dampak Komunitas",
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

let currentLang = localStorage.getItem('ggs_lang') || 'en';

function setLanguage(lang) {
    currentLang = lang;
    localStorage.setItem('ggs_lang', lang);
    document.documentElement.lang = lang;

    // Update page title
    document.title = lang === 'en' ? 'Go Green School - A Greener Future' : 'Go Green School - Masa Depan Hijau';

    // Keys that contain HTML and need innerHTML instead of textContent
    var htmlKeys = ['intro_title', 'cta_title'];

    // Update all translatable elements
    document.querySelectorAll('[data-i18n]').forEach(function (el) {
        var key = el.getAttribute('data-i18n');
        if (translations[lang] && translations[lang][key]) {
            if (htmlKeys.indexOf(key) !== -1) {
                el.innerHTML = translations[lang][key];
            } else {
                el.textContent = translations[lang][key];
            }
        } else {
            // fallback: biarkan value asli tetap ada jika key tidak ditemukan
            // tidak melakukan apa-apa, value HTML tetap
        }
    });

    // Update button styles
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

// Apply saved language on page load
document.addEventListener('DOMContentLoaded', function () {
    setLanguage(currentLang);
});
</script>

<script>
var learnMoreData = {
    en: {
        education: {
            badge: "🌿 Eco-Learning",
            title: "Sustainable Education",
            tagline: "Shaping tomorrow's environmental leaders today",
            headerBg: "linear-gradient(135deg, #10b981 0%, #064e3b 100%)",
            headerOrb: "#10b981",
            icon: "school",
            overview: "Sustainable education integrates environmental knowledge across every subject, preparing students to become responsible stewards of the Earth. By embedding green values into the daily curriculum, students do not just learn about the environment — they actively participate in protecting it.",
            labelPoints: "Key Points",
            labelHow: "How It Works",
            labelImpact: "Impact & Data",
            labelCta: "Want to learn more about our programs?",
            labelCtaBtn: "View All Programs",
            points: [
                { icon: "eco", text: "<strong>Nature-Based Curriculum</strong> — Lessons connect classroom topics to real-world ecosystems and environmental challenges." },
                { icon: "psychology", text: "<strong>Eco-Literacy Development</strong> — Students build understanding of climate change, biodiversity, and sustainable resource use." },
                { icon: "construction", text: "<strong>Project-Based Learning</strong> — School gardens, composting, and eco-audits turn theory into hands-on practice." },
                { icon: "hub", text: "<strong>Cross-Subject Integration</strong> — Environmental themes are woven into science, math, language, and social studies." }
            ],
            steps: [
                { num: "01", title: "Curriculum Design", desc: "Environmental topics are integrated into lessons at every grade level." },
                { num: "02", title: "Practical Projects", desc: "Students join real sustainability projects with visible school-based outcomes." },
                { num: "03", title: "Community Impact", desc: "Students bring green habits home and help influence families and neighbors." }
            ],
            stats: [
                { value: "107", label: "countries are developing or implementing UNESCO ESD for 2030 initiatives" },
                { value: "47%", label: "of curriculum frameworks in a UNESCO review did not mention climate change" },
                { value: "40%", label: "of teachers in a UNESCO finding felt confident teaching climate-change cognition" }
            ]
        },
        energy: {
            badge: "☀️ Clean Energy",
            title: "Renewable Energy",
            tagline: "Learning from the sun every day",
            headerBg: "linear-gradient(135deg, #f59e0b 0%, #b45309 100%)",
            headerOrb: "#f59e0b",
            icon: "solar_power",
            overview: "Renewable energy education at school uses solar panels as both an electricity source and a living laboratory. Students can observe how sunlight becomes electrical power while learning efficiency, conservation, and carbon reduction in a practical context.",
            labelPoints: "Key Points",
            labelHow: "How It Works",
            labelImpact: "Impact & Data",
            labelCta: "Want to learn more about our programs?",
            labelCtaBtn: "View All Programs",
            points: [
                { icon: "sunny", text: "<strong>Solar Power System</strong> — Rooftop photovoltaic panels convert sunlight into clean electricity for school activities." },
                { icon: "monitoring", text: "<strong>Energy Monitoring</strong> — Students review production and usage data to understand efficiency in real time." },
                { icon: "science", text: "<strong>STEM Learning</strong> — Renewable energy becomes part of physics, engineering, and problem-solving lessons." },
                { icon: "analytics", text: "<strong>Energy Audits</strong> — Learners identify ways to reduce wasteful electricity use around campus." }
            ],
            steps: [
                { num: "01", title: "Solar Installation", desc: "Panels capture sunlight and convert it into electrical energy." },
                { num: "02", title: "Data Observation", desc: "Students track output, usage patterns, and weather-related changes." },
                { num: "03", title: "Carbon Reduction", desc: "Cleaner power reduces fossil-fuel dependence and operating costs." }
            ],
            stats: [
                { value: "1.5 h", label: "of sunlight reaching Earth equals about one year of global energy demand, per DOE" },
                { value: "2", label: "main solar technology types described by DOE: photovoltaics and solar-thermal" },
                { value: "PV", label: "cells absorb sunlight and create electrical charges that generate current" }
            ]
        },
        waste: {
            badge: "♻️ Waste Management",
            title: "Waste Management",
            tagline: "Reduce, reuse, recycle from school to community",
            headerBg: "linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%)",
            headerOrb: "#3b82f6",
            icon: "recycling",
            overview: "School waste management teaches students to sort, process, and reduce waste responsibly. Organic materials can become compost, recyclable materials can return to production cycles, and hazardous items require safe handling. This makes the school cleaner while building lifelong habits.",
            labelPoints: "Key Points",
            labelHow: "How It Works",
            labelImpact: "Impact & Data",
            labelCta: "Want to learn more about our programs?",
            labelCtaBtn: "View All Programs",
            points: [
                { icon: "delete_sweep", text: "<strong>Waste Segregation</strong> — Students separate organic, inorganic, and hazardous waste correctly." },
                { icon: "compost", text: "<strong>Composting</strong> — Food scraps and leaves are processed into compost for school gardens." },
                { icon: "loop", text: "<strong>Recycling</strong> — Plastic, paper, and metal are collected for reuse through recycling partners." },
                { icon: "warning", text: "<strong>Safe B3 Handling</strong> — Batteries and chemicals are managed with extra care and proper disposal procedures." }
            ],
            steps: [
                { num: "01", title: "Collection & Sorting", desc: "Waste is placed into labeled bins across classrooms and school facilities." },
                { num: "02", title: "Processing", desc: "Organic waste is composted while recyclable materials are prepared for pickup." },
                { num: "03", title: "Tracking Results", desc: "Students monitor volume reductions and learn from real waste data." }
            ],
            stats: [
                { value: "2–3:1", label: "EPA recommends about two to three parts browns to one part greens in compost" },
                { value: "3–5 mo", label: "well-maintained backyard compost can be ready in about three to five months" },
                { value: "1/3", label: "a finished compost pile can shrink to about one-third of its original size" }
            ]
        }
    },
    id: {
        education: {
            badge: "🌿 Eco-Learning",
            title: "Pendidikan Berkelanjutan",
            tagline: "Membentuk pemimpin lingkungan masa depan sejak sekarang",
            headerBg: "linear-gradient(135deg, #10b981 0%, #064e3b 100%)",
            headerOrb: "#10b981",
            icon: "school",
            overview: "Pendidikan berkelanjutan mengintegrasikan pengetahuan lingkungan ke dalam setiap mata pelajaran agar siswa tumbuh menjadi penjaga bumi yang bertanggung jawab. Dengan begitu, siswa tidak hanya memahami teori, tetapi juga mempraktikkan kebiasaan ramah lingkungan setiap hari.",
            labelPoints: "Poin Utama",
            labelHow: "Cara Kerja",
            labelImpact: "Dampak & Data",
            labelCta: "Ingin tahu lebih lanjut tentang program kami?",
            labelCtaBtn: "Lihat Semua Program",
            points: [
                { icon: "eco", text: "<strong>Kurikulum Berbasis Alam</strong> — Materi pelajaran dihubungkan dengan ekosistem nyata dan tantangan lingkungan." },
                { icon: "psychology", text: "<strong>Penguatan Eco-Literacy</strong> — Siswa memahami perubahan iklim, keanekaragaman hayati, dan penggunaan sumber daya yang berkelanjutan." },
                { icon: "construction", text: "<strong>Pembelajaran Berbasis Proyek</strong> — Kebun sekolah, kompos, dan audit lingkungan membuat pembelajaran lebih nyata." },
                { icon: "hub", text: "<strong>Integrasi Lintas Mata Pelajaran</strong> — Tema lingkungan masuk ke sains, matematika, bahasa, dan ilmu sosial." }
            ],
            steps: [
                { num: "01", title: "Perancangan Kurikulum", desc: "Topik lingkungan dimasukkan ke pelajaran di setiap jenjang kelas." },
                { num: "02", title: "Proyek Praktik", desc: "Siswa mengikuti kegiatan keberlanjutan dengan hasil yang bisa dilihat langsung." },
                { num: "03", title: "Dampak ke Komunitas", desc: "Kebiasaan hijau dibawa ke rumah dan memengaruhi lingkungan sekitar." }
            ],
            stats: [
                { value: "107", label: "negara sedang mengembangkan atau menerapkan inisiatif UNESCO ESD for 2030" },
                { value: "47%", label: "kerangka kurikulum dalam tinjauan UNESCO belum menyebut perubahan iklim" },
                { value: "40%", label: "guru dalam temuan UNESCO merasa percaya diri mengajarkan dimensi kognitif perubahan iklim" }
            ]
        },
        energy: {
            badge: "☀️ Energi Bersih",
            title: "Energi Terbarukan",
            tagline: "Belajar langsung dari tenaga matahari setiap hari",
            headerBg: "linear-gradient(135deg, #f59e0b 0%, #b45309 100%)",
            headerOrb: "#f59e0b",
            icon: "solar_power",
            overview: "Edukasi energi terbarukan di sekolah memanfaatkan panel surya sebagai sumber listrik sekaligus laboratorium hidup. Siswa dapat melihat langsung bagaimana sinar matahari diubah menjadi energi listrik sambil mempelajari efisiensi, konservasi, dan pengurangan emisi karbon.",
            labelPoints: "Poin Utama",
            labelHow: "Cara Kerja",
            labelImpact: "Dampak & Data",
            labelCta: "Ingin tahu lebih lanjut tentang program kami?",
            labelCtaBtn: "Lihat Semua Program",
            points: [
                { icon: "sunny", text: "<strong>Sistem Panel Surya</strong> — Panel fotovoltaik di atap sekolah mengubah sinar matahari menjadi listrik bersih." },
                { icon: "monitoring", text: "<strong>Pemantauan Energi</strong> — Siswa mempelajari data produksi dan pemakaian listrik secara langsung." },
                { icon: "science", text: "<strong>Pembelajaran STEM</strong> — Energi terbarukan menjadi bagian dari pelajaran fisika, teknik, dan pemecahan masalah." },
                { icon: "analytics", text: "<strong>Audit Energi</strong> — Siswa mencari peluang penghematan listrik di lingkungan sekolah." }
            ],
            steps: [
                { num: "01", title: "Pemasangan Panel", desc: "Panel menangkap cahaya matahari dan mengubahnya menjadi energi listrik." },
                { num: "02", title: "Pengamatan Data", desc: "Siswa melihat perubahan output energi dan pola penggunaan setiap waktu." },
                { num: "03", title: "Pengurangan Emisi", desc: "Energi bersih membantu mengurangi ketergantungan pada bahan bakar fosil." }
            ],
            stats: [
                { value: "1,5 jam", label: "sinar matahari yang mencapai bumi setara sekitar kebutuhan energi dunia selama satu tahun, menurut DOE" },
                { value: "2", label: "jenis utama teknologi surya menurut DOE: fotovoltaik dan tenaga surya termal" },
                { value: "PV", label: "sel panel surya menyerap cahaya dan membentuk muatan listrik yang menghasilkan arus" }
            ]
        },
        waste: {
            badge: "♻️ Pengelolaan Sampah",
            title: "Pengelolaan Limbah",
            tagline: "Reduce, reuse, recycle dari sekolah ke masyarakat",
            headerBg: "linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%)",
            headerOrb: "#3b82f6",
            icon: "recycling",
            overview: "Pengelolaan sampah di sekolah mengajarkan siswa untuk memilah, mengolah, dan mengurangi sampah secara bertanggung jawab. Sampah organik dapat dijadikan kompos, sampah daur ulang dapat dimanfaatkan kembali, dan limbah berbahaya harus ditangani dengan aman. Hasilnya adalah sekolah yang lebih bersih dan kebiasaan baik yang terbawa seumur hidup.",
            labelPoints: "Poin Utama",
            labelHow: "Cara Kerja",
            labelImpact: "Dampak & Data",
            labelCta: "Ingin tahu lebih lanjut tentang program kami?",
            labelCtaBtn: "Lihat Semua Program",
            points: [
                { icon: "delete_sweep", text: "<strong>Pemilahan Sampah</strong> — Siswa memisahkan sampah organik, anorganik, dan B3 dengan benar." },
                { icon: "compost", text: "<strong>Pengomposan</strong> — Sisa makanan dan daun diolah menjadi kompos untuk kebun sekolah." },
                { icon: "loop", text: "<strong>Daur Ulang</strong> — Plastik, kertas, dan logam dikumpulkan untuk dimanfaatkan kembali melalui mitra daur ulang." },
                { icon: "warning", text: "<strong>Penanganan B3 Aman</strong> — Baterai dan bahan kimia dikelola dengan prosedur khusus dan aman." }
            ],
            steps: [
                { num: "01", title: "Pengumpulan & Pemilahan", desc: "Sampah dibuang ke tempat yang sudah diberi label di area sekolah." },
                { num: "02", title: "Pengolahan", desc: "Sampah organik dikomposkan dan bahan daur ulang dipersiapkan untuk diambil." },
                { num: "03", title: "Pemantauan Hasil", desc: "Siswa melihat penurunan volume sampah melalui data nyata." }
            ],
            stats: [
                { value: "2–3:1", label: "EPA menyarankan sekitar dua sampai tiga bagian bahan cokelat untuk satu bagian bahan hijau" },
                { value: "3–5 bln", label: "kompos yang dirawat dengan baik dapat matang dalam sekitar tiga sampai lima bulan" },
                { value: "1/3", label: "tumpukan kompos yang jadi dapat menyusut hingga sekitar sepertiga ukuran awal" }
            ]
        }
    }
};

function openLearnMore(cardKey) {
    var lang = currentLang || localStorage.getItem('ggs_lang') || 'en';
    var langData = learnMoreData[lang] || learnMoreData.en;
    var data = langData[cardKey] || learnMoreData.en[cardKey];
    if (!data) return;

    document.getElementById('modal-header').style.background = data.headerBg;
    document.getElementById('modal-header-orb').style.background = data.headerOrb;
    document.getElementById('modal-badge').textContent = data.badge;
    document.getElementById('modal-icon').textContent = data.icon;
    document.getElementById('modal-title').textContent = data.title;
    document.getElementById('modal-tagline').textContent = data.tagline;
    document.getElementById('modal-overview').textContent = data.overview;
    document.getElementById('modal-label-points').lastElementChild.textContent = data.labelPoints;
    document.getElementById('modal-label-how').lastElementChild.textContent = data.labelHow;
    document.getElementById('modal-label-impact').lastElementChild.textContent = data.labelImpact;
    document.getElementById('modal-cta-text').textContent = data.labelCta;
    document.getElementById('modal-cta-btn').textContent = data.labelCtaBtn;

    document.getElementById('modal-points').innerHTML = data.points.map(function(point) {
        return '<li class="flex items-start gap-3">' +
            '<span class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">' +
            '<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:\'FILL\' 1">' + point.icon + '</span>' +
            '</span>' +
            '<span class="text-forest/70 text-sm leading-relaxed">' + point.text + '</span>' +
        '</li>';
    }).join('');

    document.getElementById('modal-steps').innerHTML = data.steps.map(function(step) {
        return '<div class="flex items-start gap-3">' +
            '<span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white text-xs font-black flex items-center justify-center shadow-md shadow-primary/20">' + step.num + '</span>' +
            '<div><p class="text-forest font-bold text-sm">' + step.title + '</p><p class="text-forest/60 text-sm leading-relaxed">' + step.desc + '</p></div>' +
        '</div>';
    }).join('');

    document.getElementById('modal-stats').innerHTML = data.stats.map(function(stat) {
        return '<div class="modal-stat-card">' +
            '<p class="text-2xl font-black gradient-text">' + stat.value + '</p>' +
            '<p class="text-forest/60 text-xs leading-relaxed mt-1">' + stat.label + '</p>' +
        '</div>';
    }).join('');

    document.body.style.overflow = 'hidden';
    document.getElementById('learn-more-modal').classList.add('open');
}

function closeLearnMore() {
    document.body.style.overflow = '';
    document.getElementById('learn-more-modal').classList.remove('open');
}

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        closeLearnMore();
    }
});
</script>

<!-- Carousel Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('carousel-track');
    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');
    const indicators = document.querySelectorAll('#carousel-indicators button');
    const totalSlides = indicators.length;
    let current = 0;
    let autoSlideInterval;

    function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        current = index;
        track.style.transform = 'translateX(-' + (current * 100) + '%)';
        indicators.forEach(function (dot, i) {
            dot.className = i === current
                ? 'size-2.5 rounded-full bg-primary transition-all scale-125'
                : 'size-2.5 rounded-full bg-white/50 transition-all';
        });
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(function () {
            goToSlide(current + 1);
        }, 5000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    prevBtn.addEventListener('click', function () {
        goToSlide(current - 1);
        resetAutoSlide();
    });

    nextBtn.addEventListener('click', function () {
        goToSlide(current + 1);
        resetAutoSlide();
    });

    indicators.forEach(function (dot) {
        dot.addEventListener('click', function () {
            goToSlide(parseInt(this.dataset.slide));
            resetAutoSlide();
        });
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;
    const carousel = track.parentElement;

    carousel.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    carousel.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) goToSlide(current + 1);
            else goToSlide(current - 1);
            resetAutoSlide();
        }
    }, { passive: true });

    startAutoSlide();
});
</script>

<!-- Scroll-to-Top Button -->
<button id="scroll-top" class="scroll-top-btn fixed bottom-8 right-8 z-50 w-12 h-12 bg-primary hover:bg-forest text-white rounded-full shadow-xl shadow-primary/30 flex items-center justify-center transition-all hover:-translate-y-1" onclick="window.scrollTo({top:0,behavior:'smooth'})">
<span class="material-symbols-outlined">keyboard_arrow_up</span>
</button>

<!-- Scroll Animations + Mobile Menu + Nav Scroll + Counter -->
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
    window.addEventListener('scroll', function () {
        if (window.scrollY > 500) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
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

    // Animated counters
    var counters = document.querySelectorAll('[data-counter]');
    var counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting && !entry.target.dataset.counted) {
                entry.target.dataset.counted = 'true';
                var target = parseInt(entry.target.dataset.counter);
                var suffix = entry.target.dataset.suffix || '';
                var duration = 2000;
                var start = 0;
                var startTime = null;
                function animate(time) {
                    if (!startTime) startTime = time;
                    var progress = Math.min((time - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    entry.target.textContent = Math.floor(eased * target) + suffix;
                    if (progress < 1) requestAnimationFrame(animate);
                }
                requestAnimationFrame(animate);
            }
        });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { counterObserver.observe(el); });
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
            </div>
        </div>
        <!-- Developer Cards -->
        <div class="p-6 md:p-8 grid grid-cols-2 gap-4 md:gap-6">
            <!-- Developer 1 -->
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/richard wong.png') }}" alt="Richard Wong" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Richard Wong</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center">
                    <span data-i18n="dev_specialty_1" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🌱 Frontend</span>
                </div>
            </div>
            <!-- Developer 2 -->
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/andika dicky sanjaya.jpeg') }}" alt="Andika Dicky Sanjaya" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Andika Dicky Sanjaya</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center">
                    <span data-i18n="dev_specialty_2" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🌿 Backend</span>
                </div>
            </div>
            <!-- Developer 3 -->
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/irene krismawati.png') }}" alt="Irene Krismawati" class="dev-card-img w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Irene Krismawati</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center">
                    <span data-i18n="dev_specialty_3" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🍀 UI/UX</span>
                </div>
            </div>
            <!-- Developer 4 -->
            <div class="dev-card bg-gradient-to-br from-sage to-white rounded-2xl p-5 text-center border border-emerald-100">
                <div class="relative mx-auto w-20 h-20 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden ring-3 ring-primary/30 ring-offset-2">
                    <img src="{{ asset('images/Deny Hendrata.png') }}" alt="Deny Hendrata" class="dev-card-img w-full h-full object-cover object-[center_20%]">
                </div>
                <h3 class="font-bold text-forest text-sm md:text-base">Deny Hendrata</h3>
                <p data-i18n="dev_role" class="text-xs text-emerald-600/70 mt-1">Developer</p>
                <div class="mt-2 flex justify-center">
                    <span data-i18n="dev_specialty_4" class="inline-block bg-primary/10 text-primary text-xs px-3 py-1 rounded-full font-medium">🌳 Fullstack</span>
                </div>
            </div>
        </div>
        <!-- Modal Footer -->
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
</body></html>

