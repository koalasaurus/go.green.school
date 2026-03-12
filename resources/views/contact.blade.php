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
                            <a class="text-forest/70 hover:text-primary text-sm font-semibold transition-colors uppercase tracking-widest" href="/about" data-i18n="nav_about">About & Programs</a>
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
                            <span class="material-symbols-outlined text-base">contact_mail</span>
                            <span data-i18n="contact_badge">Get In Touch</span>
                        </div>
                        <h1 class="text-forest text-4xl md:text-6xl font-black tracking-tight leading-[1.1] mb-4" data-i18n="contact_title">Contact Us</h1>
                        <p class="text-forest/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed" data-i18n="contact_subtitle">Have questions or want to learn more about Go Green School? We'd love to hear from you.</p>
                    </div>
                </section>

                <!-- Contact Info Cards -->
                <section class="px-4 md:px-20 lg:px-40 py-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="fade-up grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Address -->
                            <div class="contact-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 text-center">
                                <div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-primary text-3xl">location_on</span>
                                </div>
                                <h3 class="text-forest font-bold text-lg mb-2" data-i18n="contact_address_title">Address</h3>
                                <p class="text-forest/60 text-sm leading-relaxed" data-i18n="contact_address_desc">Jl. Hijau Lestari No. 123<br/>Jakarta, Indonesia 12345</p>
                            </div>

                            <!-- Email -->
                            <div class="contact-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 text-center">
                                <div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-primary text-3xl">mail</span>
                                </div>
                                <h3 class="text-forest font-bold text-lg mb-2" data-i18n="contact_email_title">Email</h3>
                                <p class="text-forest/60 text-sm leading-relaxed">info@gogreenschool.id<br/>admin@gogreenschool.id</p>
                            </div>

                            <!-- Phone -->
                            <div class="contact-card bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 text-center">
                                <div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                                    <span class="material-symbols-outlined text-primary text-3xl">phone</span>
                                </div>
                                <h3 class="text-forest font-bold text-lg mb-2" data-i18n="contact_phone_title">Phone</h3>
                                <p class="text-forest/60 text-sm leading-relaxed">(021) 555-0123<br/>(021) 555-0456</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Form & Map -->
                <section class="px-4 md:px-20 lg:px-40 py-12">
                    <div class="max-w-7xl mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                            <!-- Contact Form -->
                            <div class="fade-up">
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 p-8 md:p-10">
                                    <div class="flex items-center gap-3 mb-8">
                                        <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary">edit_note</span>
                                        </div>
                                        <div>
                                            <h3 class="text-forest font-bold text-xl" data-i18n="form_title">Send a Message</h3>
                                            <p class="text-forest/50 text-xs" data-i18n="form_desc">Fill out the form and we'll get back to you</p>
                                        </div>
                                    </div>

                                    <form class="space-y-5" onsubmit="return false;">
                                        <!-- Name -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_name">Full Name</label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">person</span>
                                                <input type="text" placeholder="John Doe" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" data-i18n-placeholder="form_name_placeholder"/>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_email">Email Address</label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">mail</span>
                                                <input type="email" placeholder="john@example.com" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30"/>
                                            </div>
                                        </div>

                                        <!-- Subject -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_subject">Subject</label>
                                            <div class="relative">
                                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-forest/30 text-xl">topic</span>
                                                <input type="text" placeholder="How can we help?" class="input-field w-full pl-11 pr-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30" data-i18n-placeholder="form_subject_placeholder"/>
                                            </div>
                                        </div>

                                        <!-- Message -->
                                        <div>
                                            <label class="block text-sm font-semibold text-forest/80 mb-2" data-i18n="form_message">Message</label>
                                            <textarea rows="5" placeholder="Write your message here..." class="input-field w-full px-4 py-3 border border-forest/10 rounded-xl text-sm focus:border-primary focus:outline-none transition-all bg-sage/30 resize-none" data-i18n-placeholder="form_message_placeholder"></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-forest text-white py-3.5 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5">
                                            <span class="material-symbols-outlined text-lg">send</span>
                                            <span data-i18n="form_submit">Send Message</span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Map & Additional Info -->
                            <div class="fade-up space-y-8">
                                <!-- Map Placeholder -->
                                <div class="bg-white rounded-2xl shadow-lg shadow-forest/5 border border-forest/5 overflow-hidden">
                                    <div class="bg-gradient-to-br from-primary/10 to-forest/5 h-72 flex flex-col items-center justify-center text-center p-8">
                                        <span class="material-symbols-outlined text-primary/30 mb-4" style="font-size: 80px;">map</span>
                                        <p class="text-forest/40 text-sm font-semibold" data-i18n="map_placeholder">Map will be displayed here</p>
                                        <p class="text-forest/30 text-xs mt-1" data-i18n="map_hint">Embed your Google Maps here</p>
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
                                        <a href="#" class="w-12 h-12 rounded-xl bg-forest/5 border border-forest/10 flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white text-forest/50 transition-all">
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
                <section class="px-4 md:px-20 lg:px-40 py-16 bg-sage/50">
                    <div class="max-w-3xl mx-auto">
                        <div class="fade-up text-center mb-12">
                            <span class="text-primary font-bold tracking-widest uppercase text-xs" data-i18n="faq_label">FAQ</span>
                            <h2 class="text-forest text-3xl md:text-4xl font-black tracking-tight mt-3" data-i18n="faq_title">Frequently Asked Questions</h2>
                        </div>

                        <div class="fade-up space-y-4">
                            <!-- FAQ 1 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4" data-i18n="faq_1_q">How can I enroll my child in Go Green School?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_1_a">You can start the enrollment process by contacting us through this form or visiting our school directly during operating hours. Our admissions team will guide you through the entire process.</p>
                                </div>
                            </details>

                            <!-- FAQ 2 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4" data-i18n="faq_2_q">What green programs are available for students?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_2_a">We offer various programs including Waste Management, Green Garden, Water Conservation, Green Energy, and Eco Ambassador. Visit our About & Programs page for more details.</p>
                                </div>
                            </details>

                            <!-- FAQ 3 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4" data-i18n="faq_3_q">Can I volunteer or partner with Go Green School?</span>
                                    <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                                </summary>
                                <div class="px-6 pb-6 text-forest/60 text-sm leading-relaxed">
                                    <p data-i18n="faq_3_a">Absolutely! We welcome community partnerships and volunteers. Please reach out through our contact form and our partnership team will be happy to discuss collaboration opportunities.</p>
                                </div>
                            </details>

                            <!-- FAQ 4 -->
                            <details class="bg-white rounded-2xl shadow-sm border border-forest/5 group">
                                <summary class="flex items-center justify-between p-6 cursor-pointer">
                                    <span class="text-forest font-semibold text-sm pr-4" data-i18n="faq_4_q">Is there a school tour available?</span>
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
            contact_badge: "Get In Touch",
            contact_title: "Contact Us",
            contact_subtitle: "Have questions or want to learn more about Go Green School? We'd love to hear from you.",
            contact_address_title: "Address",
            contact_address_desc: "Jl. Hijau Lestari No. 123\nJakarta, Indonesia 12345",
            contact_email_title: "Email",
            contact_phone_title: "Phone",
            form_title: "Send a Message",
            form_desc: "Fill out the form and we'll get back to you",
            form_name: "Full Name",
            form_email: "Email Address",
            form_subject: "Subject",
            form_message: "Message",
            form_submit: "Send Message",
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
        },
        id: {
            nav_home: "Beranda",
            nav_about: "Tentang & Program",
            nav_contact: "Kontak",
            nav_calculator: "Kalkulator",
            nav_back_home: "Kembali ke Beranda",
            contact_badge: "Hubungi Kami",
            contact_title: "Kontak Kami",
            contact_subtitle: "Punya pertanyaan atau ingin tahu lebih banyak tentang Go Green School? Kami senang mendengar dari Anda.",
            contact_address_title: "Alamat",
            contact_address_desc: "Jl. Hijau Lestari No. 123\nJakarta, Indonesia 12345",
            contact_email_title: "Email",
            contact_phone_title: "Telepon",
            form_title: "Kirim Pesan",
            form_desc: "Isi formulir dan kami akan menghubungi Anda kembali",
            form_name: "Nama Lengkap",
            form_email: "Alamat Email",
            form_subject: "Subjek",
            form_message: "Pesan",
            form_submit: "Kirim Pesan",
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
        }
    };

    function setLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('ggs_lang', lang);

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
