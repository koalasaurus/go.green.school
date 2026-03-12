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
                "forest": "#064e3b",
                "sage": "#f0fdf4",
                "background-light": "#f8faf9",
                "background-dark": "#022c22",
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
                @keyframes fadeSlideUp {
                    from {
                        opacity: 0;
                        transform: translateY(18px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
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

                .glass-effect {
                    background: rgba(255, 255, 255, 0.75);
                    backdrop-filter: blur(12px);
                    border-bottom: 1px solid rgba(6, 78, 59, 0.05);
                }
            </style>
</head>
<body class="bg-background-light font-display text-forest selection:bg-primary/30">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Navigation Bar -->
<nav class="sticky top-0 z-50 glass-effect px-6 md:px-20 lg:px-40 py-4">
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
<a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About & Programs</a>
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
</div>
</div>
</nav>
<main class="flex flex-col flex-1">
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
<button class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300" data-i18n="hero_btn_primary">Learn Program</button>
<button class="flex min-w-[190px] cursor-pointer items-center justify-center rounded-xl h-12 px-8 border border-white/30 text-white text-base font-bold bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300" data-i18n="hero_btn_secondary">View Activities</button>
</div>
<div class="hero-animate grid grid-cols-1 sm:grid-cols-3 gap-3 w-full max-w-3xl text-left" style="animation-delay: 500ms;">
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌱</span> <span data-i18n="hero_stat_students">500+ students joined the program</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">♻️</span> <span data-i18n="hero_stat_recycle">200kg of waste recycled</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌍</span> <span data-i18n="hero_stat_programs">10 environmental programs</span></div>
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
<button class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300" data-i18n="hero_btn_primary">Learn Program</button>
<button class="flex min-w-[190px] cursor-pointer items-center justify-center rounded-xl h-12 px-8 border border-white/30 text-white text-base font-bold bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300" data-i18n="hero_btn_secondary">View Activities</button>
</div>
<div class="hero-animate grid grid-cols-1 sm:grid-cols-3 gap-3 w-full max-w-3xl text-left" style="animation-delay: 500ms;">
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌱</span> <span data-i18n="hero_stat_students">500+ students joined the program</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">♻️</span> <span data-i18n="hero_stat_recycle">200kg of waste recycled</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌍</span> <span data-i18n="hero_stat_programs">10 environmental programs</span></div>
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
<button class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300" data-i18n="hero_btn_primary">Learn Program</button>
<button class="flex min-w-[190px] cursor-pointer items-center justify-center rounded-xl h-12 px-8 border border-white/30 text-white text-base font-bold bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300" data-i18n="hero_btn_secondary">View Activities</button>
</div>
<div class="hero-animate grid grid-cols-1 sm:grid-cols-3 gap-3 w-full max-w-3xl text-left" style="animation-delay: 500ms;">
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌱</span> <span data-i18n="hero_stat_students">500+ students joined the program</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">♻️</span> <span data-i18n="hero_stat_recycle">200kg of waste recycled</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌍</span> <span data-i18n="hero_stat_programs">10 environmental programs</span></div>
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
<button class="flex min-w-[190px] cursor-pointer items-center justify-center gap-2 rounded-xl h-12 px-8 bg-primary text-white text-base font-bold shadow-xl shadow-primary/30 hover:shadow-primary/40 hover:bg-primary/90 transition-all duration-300" data-i18n="hero_btn_primary">Learn Program</button>
<button class="flex min-w-[190px] cursor-pointer items-center justify-center rounded-xl h-12 px-8 border border-white/30 text-white text-base font-bold bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300" data-i18n="hero_btn_secondary">View Activities</button>
</div>
<div class="hero-animate grid grid-cols-1 sm:grid-cols-3 gap-3 w-full max-w-3xl text-left" style="animation-delay: 500ms;">
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌱</span> <span data-i18n="hero_stat_students">500+ students joined the program</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">♻️</span> <span data-i18n="hero_stat_recycle">200kg of waste recycled</span></div>
<div class="rounded-xl bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-3 text-white text-sm md:text-base hover:bg-white/20 transition-all duration-300"><span class="font-semibold">🌍</span> <span data-i18n="hero_stat_programs">10 environmental programs</span></div>
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
<!-- Our Mission Section -->
<section class="px-4 md:px-20 lg:px-40 py-20">
<div class="fade-up flex flex-col gap-16">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-l-4 border-primary pl-8">
<div class="max-w-2xl">
<span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="mission_label">Vision &amp; Mission</span>
<h2 class="text-forest text-4xl md:text-5xl font-black tracking-tight mt-3" data-i18n="mission_title">Our Mission</h2>
<p class="text-forest/60 text-lg leading-relaxed mt-4" data-i18n="mission_desc">
                            We are committed to fostering environmental awareness from an early age through a holistic and sustainable educational approach.
                        </p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="group relative bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-xl hover:shadow-forest/5 transition-all duration-300 cursor-pointer">
<div class="w-14 h-14 bg-sage text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">school</span>
</div>
<h3 class="text-forest text-xl font-bold mb-3 tracking-tight" data-i18n="card1_title">Sustainable Education</h3>
<p class="text-forest/60 leading-relaxed text-sm" data-i18n="card1_desc">Nature-based curriculum that integrates environmental conservation in every subject.</p>
</div>
<div class="group relative bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-xl hover:shadow-forest/5 transition-all duration-300 cursor-pointer">
<div class="w-14 h-14 bg-sage text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">solar_power</span>
</div>
<h3 class="text-forest text-xl font-bold mb-3 tracking-tight" data-i18n="card2_title">Renewable Energy</h3>
<p class="text-forest/60 leading-relaxed text-sm" data-i18n="card2_desc">Solar panel usage as the school's primary energy source and student learning medium.</p>
</div>
<div class="group relative bg-white p-8 rounded-2xl border border-forest/5 shadow-sm hover:shadow-xl hover:shadow-forest/5 transition-all duration-300 cursor-pointer">
<div class="w-14 h-14 bg-sage text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">recycling</span>
</div>
<h3 class="text-forest text-xl font-bold mb-3 tracking-tight" data-i18n="card3_title">Waste Management</h3>
<p class="text-forest/60 leading-relaxed text-sm" data-i18n="card3_desc">Comprehensive recycling program and composting of school cafeteria organic waste.</p>
</div>
</div>
</div>
</section>
<!-- Stats Section -->
<section class="mx-4 md:mx-20 lg:mx-40 bg-forest rounded-[2rem] p-12 lg:p-20 text-white relative overflow-hidden">
<div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-primary/20 via-transparent to-transparent"></div>
<div class="fade-up relative grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
<div class="space-y-4">
<p class="text-sage/60 font-semibold tracking-widest uppercase text-xs" data-i18n="stat1_label">Participating Students</p>
<h4 class="text-5xl lg:text-7xl font-black text-primary" data-i18n="stat1_value">500+</h4>
<p class="text-primary text-sm font-bold bg-white/10 inline-block px-3 py-1 rounded-full" data-i18n="stat1_badge">Active Green Leaders</p>
</div>
<div class="space-y-4 border-y md:border-y-0 md:border-x border-white/10 py-12 md:py-0">
<p class="text-sage/60 font-semibold tracking-widest uppercase text-xs" data-i18n="stat2_label">Waste Recycled</p>
<h4 class="text-5xl lg:text-7xl font-black text-white" data-i18n="stat2_value">200kg</h4>
<p class="text-primary text-sm font-bold bg-white/10 inline-block px-3 py-1 rounded-full" data-i18n="stat2_badge">+25% This Year</p>
</div>
<div class="space-y-4">
<p class="text-sage/60 font-semibold tracking-widest uppercase text-xs" data-i18n="stat3_label">Environmental Programs</p>
<h4 class="text-5xl lg:text-7xl font-black text-white" data-i18n="stat3_value">10</h4>
<p class="text-primary text-sm font-bold bg-white/10 inline-block px-3 py-1 rounded-full" data-i18n="stat3_badge">Ongoing Initiatives</p>
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
<section class="px-4 md:px-20 lg:px-40 py-20 bg-sage/50">
<div class="fade-up text-center mb-16">
<span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="community_label">Testimonials</span>
<h2 class="text-forest text-4xl md:text-5xl font-black tracking-tight mt-3" data-i18n="community_title">Community Voices</h2>
<p class="text-forest/60 max-w-xl mx-auto mt-4 text-lg" data-i18n="community_desc">What they say about the learning experience at Go Green School.</p>
</div>
<div class="fade-up grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="bg-white p-8 rounded-2xl shadow-sm border border-forest/5 hover:shadow-xl hover:shadow-forest/5 transition-all duration-300 cursor-pointer">
<div class="flex items-center gap-4 mb-6">
<div class="size-12 rounded-full overflow-hidden ring-2 ring-primary/20">
<img alt="Siti Aminah" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4UfBv_Brv8TSd_KclplmJjOGwxOH_W2qpvldpYr5M1gyk8xf3sfJr3Mq8-xzB-5e4RaoQLRDXPWO6OgWW0UAjygvfo3XiVgLRjvyDk9n0I_L9PITt5yndXywHpTmt3br68J9vT0cRFp-UfvH_hK6Irc9Q7wf5bXBrtVQlNkPZXTZU2wpnpnvxnC7S6pmLegh1uCrV5UyIZ8FkOMDow2V46EumrqodcDgjyCpwWxxcEs1qPecdkVUk-1r_e8CkCJ61at8DAPYWwmc"/>
</div>
<div>
<h5 class="font-bold text-forest">Siti Aminah</h5>
<p class="text-xs text-forest/50" data-i18n="testi1_role">Student Parent</p>
</div>
</div>
<p class="italic text-forest/70 leading-relaxed" data-i18n="testi1_text">"My child is now much more aware of the environment. She even taught us how to make compost at home!"</p>
</div>
<div class="bg-white p-8 rounded-2xl shadow-sm border border-forest/5 hover:shadow-xl hover:shadow-forest/5 transition-all duration-300 cursor-pointer">
<div class="flex items-center gap-4 mb-6">
<div class="size-12 rounded-full overflow-hidden ring-2 ring-primary/20">
<img alt="Budi Santoso" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk0j-EB1o47yAGJkmtpm0YEAuawQrcJqEFn7d5yVkjK5SZQQMGRaOhSTlQEj_63p1tUsIfz4dCLN9xqnz_gfWdV5Sl2SR1BrZbeSmXUAlhO61px5FuCUEx0PuDML6Q6i5A75R65tyX3_rbNRga9D9hWuOKnc7O127jju2oJirkwVyt9w_d10lldRBM_NVF8XdTG93PP4FIbqs0OBNRf9GyKiIPVADxpz4ejiTv2TrSvPxptXrHUQvcdFq-TBAjJr4Q7T1IYumJWEA"/>
</div>
<div>
<h5 class="font-bold text-forest">Budi Santoso</h5>
<p class="text-xs text-forest/50" data-i18n="testi2_role">Alumni 2021</p>
</div>
</div>
<p class="italic text-forest/70 leading-relaxed" data-i18n="testi2_text">"Go Green School gave me a strong foundation to continue my studies in environmental engineering. The experience was very real."</p>
</div>
<div class="bg-white p-8 rounded-2xl shadow-sm border border-forest/5 hover:shadow-xl hover:shadow-forest/5 transition-all duration-300 cursor-pointer">
<div class="flex items-center gap-4 mb-6">
<div class="size-12 rounded-full overflow-hidden ring-2 ring-primary/20">
<img alt="Dewi Lestari" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGwCasxaje4b1fRB9eziOyWSrcqgtVk7U1EFBA1bE9UsHflE2tVY4Db7VAfWM0m9F_3EadNNhmd7lsRDpl09mWJEH_-KUQ22UIiJUBHvG3ZqWJydyhnKfM9y9cwGh9nY8i-xLVMBWQi_yM_oakqKuUYrwJheRfwPF8u-r01zk1ANkTteYp4RzaKa06HWAxuNX68f9lMoMdHMXmHV4vOLOV0AjhEsZutbwEiFfBrQQwJoYUXisibuMBuLgvUynFShQmnOgmPnK6hSQ"/>
</div>
<div>
<h5 class="font-bold text-forest">Dewi Lestari</h5>
<p class="text-xs text-forest/50" data-i18n="testi3_role">Science Teacher</p>
</div>
</div>
<p class="italic text-forest/70 leading-relaxed" data-i18n="testi3_text">"Teaching here is not just about delivering material, but truly practicing a green lifestyle every day with students."</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-forest text-sage py-20 px-4 md:px-20 lg:px-40 border-t border-white/5">
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

<!-- Language Translations -->
<script>
const translations = {
    en: {
        nav_home: "Home",
        nav_about: "About",
        nav_programs: "Programs",
        nav_contact: "Contact",
        nav_calculator: "Calculator",
        hero1_title: "Educating Future Leaders for a Greener World",
        hero1_desc: "Join Go Green School and be part of the environmental revolution in education.",
        hero2_title: "Manage Waste Wisely",
        hero2_desc: "Together we recycle for a cleaner and more sustainable future for the earth.",
        hero3_title: "Reduce, Reuse, Recycle",
        hero3_desc: "Three simple steps that can change the world. Start from school, start from us.",
        hero4_title: "Sorting Waste from an Early Age",
        hero4_desc: "Teach children to sort waste to build environmentally friendly habits.",
        hero_btn_primary: "Learn Program",
        hero_btn_secondary: "View Activities",
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
        mission_title: "Our Mission",
        mission_desc: "We are committed to fostering environmental awareness from an early age through a holistic and sustainable educational approach.",
        card1_title: "Sustainable Education",
        card1_desc: "Nature-based curriculum that integrates environmental conservation in every subject.",
        card2_title: "Renewable Energy",
        card2_desc: "Solar panel usage as the school's primary energy source and student learning medium.",
        card3_title: "Waste Management",
        card3_desc: "Comprehensive recycling program and composting of school cafeteria organic waste.",
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
    },
    id: {
        nav_home: "Beranda",
        nav_about: "Tentang",
        nav_programs: "Program",
        nav_contact: "Kontak",
        nav_calculator: "Kalkulator",
        hero1_title: "Mendidik Pemimpin Masa Depan untuk Dunia yang Lebih Hijau",
        hero1_desc: "Bergabunglah dengan Go Green School dan jadilah bagian dari revolusi lingkungan dalam pendidikan.",
        hero2_title: "Kelola Sampah dengan Bijak",
        hero2_desc: "Bersama-sama kita daur ulang untuk masa depan bumi yang lebih bersih dan lestari.",
        hero3_title: "Reduce, Reuse, Recycle",
        hero3_desc: "Tiga langkah sederhana yang bisa mengubah dunia. Mulai dari sekolah, mulai dari kita.",
        hero4_title: "Memilah Sampah Sejak Dini",
        hero4_desc: "Ajarkan anak-anak memilah sampah untuk membangun kebiasaan ramah lingkungan.",
        hero_btn_primary: "Pelajari Program",
        hero_btn_secondary: "Lihat Kegiatan",
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
        mission_title: "Misi Kami",
        mission_desc: "Kami berkomitmen untuk menumbuhkan kesadaran lingkungan sejak dini melalui pendekatan pendidikan yang holistik dan berkelanjutan.",
        card1_title: "Pendidikan Berkelanjutan",
        card1_desc: "Kurikulum berbasis alam yang mengintegrasikan pelestarian lingkungan dalam setiap mata pelajaran.",
        card2_title: "Energi Terbarukan",
        card2_desc: "Penggunaan panel surya sebagai sumber energi utama sekolah sekaligus media belajar siswa.",
        card3_title: "Pengelolaan Limbah",
        card3_desc: "Program daur ulang komprehensif dan pengomposan limbah organik kantin sekolah.",
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
    }
};

let currentLang = localStorage.getItem('lang') || 'en';

function setLanguage(lang) {
    currentLang = lang;
    localStorage.setItem('lang', lang);
    document.documentElement.lang = lang;

    // Update page title
    document.title = lang === 'en' ? 'Go Green School - A Greener Future' : 'Go Green School - Masa Depan Hijau';

    // Update all translatable elements
    document.querySelectorAll('[data-i18n]').forEach(function (el) {
        var key = el.getAttribute('data-i18n');
        if (translations[lang] && translations[lang][key]) {
            el.textContent = translations[lang][key];
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
}

// Apply saved language on page load
document.addEventListener('DOMContentLoaded', function () {
    setLanguage(currentLang);
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

<!-- Scroll Fade-Up Animation -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const fadeEls = document.querySelectorAll('.fade-up');
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.15 });

    fadeEls.forEach(function (el) {
        observer.observe(el);
    });
});
</script>
</body></html>
