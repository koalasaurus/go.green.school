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
                        "forest": "#064e3b",
                        "sage": "#f0fdf4",
                        "background-light": "#f8faf9",
                        "background-dark": "#022c22",
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
        .glass-effect {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(6, 78, 59, 0.05);
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

        .program-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .program-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -12px rgba(16, 185, 129, 0.15);
        }
    </style>
</head>
<body class="bg-background-light font-display text-forest selection:bg-primary/30">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">

            <!-- Navigation Bar -->
            <nav class="sticky top-0 z-50 glass-effect px-6 md:px-20 lg:px-40 py-4">
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
                            <a class="text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About & Programs</a>
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
                    </div>
                </div>
            </nav>

            <main class="flex flex-col flex-1">

                <!-- Page Hero -->
                <section class="relative px-4 md:px-20 lg:px-40 pt-16 pb-12">
                    <div class="absolute -top-20 -left-20 w-72 h-72 bg-primary/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute top-20 right-0 w-96 h-96 bg-forest/5 rounded-full blur-3xl -z-10"></div>
                    <div class="max-w-7xl mx-auto text-center">
                        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                            <span class="material-symbols-outlined text-base">info</span>
                            <span data-i18n="about_badge">About Us & Our Programs</span>
                        </div>
                        <h1 class="text-forest text-4xl md:text-6xl font-black tracking-tight leading-[1.1] mb-4" data-i18n="about_title">About Go Green School</h1>
                        <p class="text-forest/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" data-i18n="about_subtitle">Educating the next generation to care for our planet through innovative green programs and sustainable practices.</p>
                    </div>
                </section>

                <!-- About Section -->
                <section class="px-4 md:px-20 lg:px-40 py-12">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                            <div>
                                <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="about_who_label">Who We Are</span>
                                <h2 class="text-forest text-3xl md:text-4xl font-black tracking-tight mt-3 mb-6" data-i18n="about_who_title">Our Story</h2>
                                <div class="space-y-4 text-forest/60 text-base leading-relaxed">
                                    <p data-i18n="about_who_p1">Go Green School is an educational initiative dedicated to integrating environmental awareness into the school curriculum. We believe that the future of our planet lies in the hands of today's students.</p>
                                    <p data-i18n="about_who_p2">Founded with the vision of creating environmentally conscious leaders, our school combines academic excellence with hands-on sustainability programs that make a real difference.</p>
                                    <p data-i18n="about_who_p3">Through our comprehensive approach, students learn not just about environmental issues, but actively participate in solutions — from waste management to green energy projects.</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="rounded-2xl overflow-hidden shadow-2xl shadow-forest/10">
                                    <div class="bg-gradient-to-br from-primary/20 to-forest/10 h-80 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary/30" style="font-size: 120px;">eco</span>
                                    </div>
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

                <!-- Vision & Mission -->
                <section class="px-4 md:px-20 lg:px-40 py-16 bg-sage/50">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-1 md:grid-cols-2 gap-10">
                            <!-- Vision -->
                            <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-2xl">visibility</span>
                                    </div>
                                    <h3 class="text-forest font-black text-2xl" data-i18n="about_vision_title">Our Vision</h3>
                                </div>
                                <p class="text-forest/60 leading-relaxed" data-i18n="about_vision_desc">To become a leading educational institution that produces environmentally conscious leaders who are committed to sustainability and innovation for a greener future.</p>
                            </div>
                            <!-- Mission -->
                            <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
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
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                <div class="size-14 rounded-2xl bg-green-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-green-600 text-3xl">recycling</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_1_title">Waste Management</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_1_desc">Learn to sort, reduce, and recycle waste effectively. Students actively manage school waste through hands-on sorting and composting activities.</p>
                            </div>

                            <!-- Program 2 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                <div class="size-14 rounded-2xl bg-emerald-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-emerald-600 text-3xl">park</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_2_title">Green Garden</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_2_desc">Our school garden program teaches students about organic farming, biodiversity, and sustainable agriculture practices.</p>
                            </div>

                            <!-- Program 3 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                <div class="size-14 rounded-2xl bg-teal-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-teal-600 text-3xl">water_drop</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_3_title">Water Conservation</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_3_desc">Students learn about water conservation techniques including rainwater harvesting, water recycling, and responsible water usage.</p>
                            </div>

                            <!-- Program 4 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                <div class="size-14 rounded-2xl bg-lime-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-lime-600 text-3xl">solar_power</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_4_title">Green Energy</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_4_desc">Explore renewable energy sources through solar panel projects, energy audits, and learning about sustainable energy solutions.</p>
                            </div>

                            <!-- Program 5 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
                                <div class="size-14 rounded-2xl bg-cyan-100 flex items-center justify-center mb-6">
                                    <span class="material-symbols-outlined text-cyan-600 text-3xl">groups</span>
                                </div>
                                <h3 class="text-forest font-bold text-xl mb-3" data-i18n="program_5_title">Eco Ambassador</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="program_5_desc">Students become environmental ambassadors, leading campaigns and community outreach programs to spread green awareness.</p>
                            </div>

                            <!-- Program 6 -->
                            <div class="fade-up program-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8">
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

                <!-- Stats Section -->
                <section class="px-4 md:px-20 lg:px-40 py-16 bg-forest text-white">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                            <div>
                                <p class="text-4xl md:text-5xl font-black text-primary">500+</p>
                                <p class="text-white/60 text-sm mt-2 font-medium" data-i18n="stat_students">Students Enrolled</p>
                            </div>
                            <div>
                                <p class="text-4xl md:text-5xl font-black text-primary">10+</p>
                                <p class="text-white/60 text-sm mt-2 font-medium" data-i18n="stat_programs">Green Programs</p>
                            </div>
                            <div>
                                <p class="text-4xl md:text-5xl font-black text-primary">200kg</p>
                                <p class="text-white/60 text-sm mt-2 font-medium" data-i18n="stat_recycled">Waste Recycled</p>
                            </div>
                            <div>
                                <p class="text-4xl md:text-5xl font-black text-primary">50+</p>
                                <p class="text-white/60 text-sm mt-2 font-medium" data-i18n="stat_partners">Community Partners</p>
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
                                <li><a class="hover:text-primary transition-colors" href="/" data-i18n="nav_home">Home</a></li>
                                <li><a class="hover:text-primary transition-colors" href="/about" data-i18n="nav_about">About & Programs</a></li>
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
            nav_about: "About & Programs",
            nav_contact: "Contact",
            nav_calculator: "Calculator",
            nav_back_home: "Back to Home",
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
            nav_about: "Tentang & Program",
            nav_contact: "Kontak",
            nav_calculator: "Kalkulator",
            nav_back_home: "Kembali ke Beranda",
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

    <!-- Scroll Fade-Up Animation -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var fadeEls = document.querySelectorAll('.fade-up');
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.15 });

        fadeEls.forEach(function(el) {
            observer.observe(el);
        });
    });
    </script>
</body>
</html>
