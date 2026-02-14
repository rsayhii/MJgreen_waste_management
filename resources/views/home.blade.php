<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenset | Sustainable Living</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #fcfcfc; }
        .hero-container { border-radius: 3rem; overflow: hidden; }
        .glass-card { backdrop-filter: blur(12px); background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); }
        .parallax-bg { transform: scale(1.1); }

        /* Smooth Accordion Transition */
        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.3s ease;
            opacity: 0;
        }
        
        .faq-item.active .faq-content {
            max-height: 200px;
            opacity: 1;
            padding-bottom: 1.5rem;
        }

        .faq-item.active .toggle-icon {
            transform: rotate(45deg);
        }

        /* Testimonial Slider Animations */
        .fade-in { animation: fadeIn 0.5s ease-in forwards; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* experience future */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* truck section */
        .wm-dark-panel { background-color: #062d24; }
        .wm-green-accent { color: #a3cc39; }
        .wm-bg-accent { background-color: #a3cc39; }

        /* Sustainability Section and Footer Section */  
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        .bg-custom-dark { background-color: #00240f; }
        .bg-custom-green { background-color: #053b1d; }
        .text-accent { color: #f2ba1d; }
        .bg-accent { background-color: #f2ba1d; }
        
        .hero-gradient {
            background: linear-gradient(
                rgba(0, 60, 40, 0.9),
                rgba(0, 60, 40, 0.9)
            ),
            url('https://images.unsplash.com/photo-1581578731548-c64695cc6952') center/cover no-repeat;
        }

        /* Worker overflow effect */
        .worker-container {
            position: absolute;
            bottom: 0;
            right: 0;
            transform: translateY(0%);
            width: 26%;
            z-index: 10;
        }

        @media (max-width: 768px) {
            .worker-container {
                position: relative;
                width: 80%;
                transform: translateY(0);
                margin: 0 auto;
            }
        }
    </style>
</head>
<body class="p-6">
    <section class="hero-container relative h-[90vh] min-h-[700px] w-full bg-slate-900 shadow-2xl">
        
        <div class="parallax-bg absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1715940309860-585403114687?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                 alt="Green Hills and Wind Turbines" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
        </div>

        <div class="absolute top-6 left-6 right-6">
        <x-header />
    </div>

        <div class="relative z-10 flex flex-col items-center justify-center text-center px-6 mt-12 md:mt-20">
            <h1 class="hero-title text-5xl md:text-7xl font-bold text-white leading-tight">
                Cultivating The Green Diversity<br>By Making Greener INDIA
            </h1>
            <p class="hero-subtitle text-white/80 max-w-xl mt-6 text-sm md:text-base leading-relaxed">
                MJGREENS is one of the top Waste Management Companies in India. We provide sustainable and responsible waste management solutions for large generators of waste, such as corporate parks, universities, houses, etc.
            </p>
            
            <button class="hero-btn mt-10 bg-white text-black px-8 py-4 rounded-full flex items-center gap-3 font-bold group transition-all hover:pr-10">
                Learn More
                <div class="bg-black text-white p-1 rounded-full group-hover:translate-x-1 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </button>
        </div>

        <div class="absolute bottom-10 left-0 w-full px-8 md:px-12 grid grid-cols-1 md:grid-cols-2 gap-6 z-20">
            <div class="glass-card p-5 rounded-3xl flex gap-4 items-center">
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&q=80&w=200" 
                     class="w-24 h-24 object-cover rounded-2xl" alt="Tree planting">
                <div>
                    <h3 class="text-white font-bold text-lg leading-tight">Tree Planting Program</h3>
                    <p class="text-white/60 text-xs mt-1 leading-normal">For every purchase, we contribute to reforestation projects across Indonesia.</p>
                    <a href="#" class="text-white text-xs mt-3 inline-block font-semibold hover:underline">Read More →</a>
                </div>
            </div>

            <div class="glass-card p-6 rounded-3xl">
                <p class="text-white/80 text-sm italic leading-relaxed">
                    "I appreciate how transparent Greenset is about their sourcing and environmental impact. I feel like I'm part of something bigger every time I contribute here."
                </p>
                <div class="flex items-center gap-3 mt-4">
                    <img src="https://i.pravatar.cc/150?u=daniel" class="w-10 h-10 rounded-full border border-white/20" alt="Daniel">
                    <div>
                        <h4 class="text-white font-bold text-sm">Daniel</h4>
                        <p class="text-white/40 text-[10px] uppercase tracking-wider">NGO Volunteer, Surabaya</p>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-[3em] h-[3em] rounded-full border border-white/20 
                                    flex items-center justify-center 
                                    transition-colors group-hover:bg-white/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span class="text-white font-semibold uppercase tracking-wider text-sm whitespace-nowrap">
                            Dignified and safe employment
                        </span>
                    </div>

                    <!-- <div class="flex items-center gap-4 group">
                        <div class="w-[3em] h-[3em] rounded-full border border-white/20 
                                    flex items-center justify-center 
                                    transition-colors group-hover:bg-white/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <span class="text-white font-semibold uppercase tracking-wider text-sm whitespace-nowrap">
                            Professional Team
                        </span>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-start justify-between gap-8">
        <div class="bg-slate-100 px-4 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-slate-500">
            • Built for a Better Tomorrow
        </div>
        <h2 class="text-3xl md:text-5xl font-medium text-slate-800 max-w-3xl leading-tight">
            Started as a small eco initiative, now growing <span class="text-slate-400">into a movement of conscious consumers.</span>
        </h2>
    </div>

    <section class="relative w-full">
        
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1a1a1a]">What we do ?</h2>
            
            <div class="flex gap-3">
                <button class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="w-12 h-12 rounded-full bg-[#1a1a1a] flex items-center justify-center hover:bg-black transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">01</span>
                    <img src="https://wordpress.zozothemes.com/wastbin/wp-content/uploads/sites/37/2025/03/blog-image2-1170x694.webp" 
                         alt="Arch Design" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Waste management for MNC's</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    We provide waste management services to companies or multinational corporations
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">02</span>
                    <img src="https://wordpress.zozothemes.com/wastbin/wp-content/uploads/sites/37/elementor/thumbs/group-volunteers-collecting-garbage-rga1g7u9rs7qx9pzt7plsmt4eo8oivie2pspczl9ec.webp" 
                         alt="Interior Design" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Waste management for Parks</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    We provide waste management services for tech parks
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">03</span>
                    <img src="https://wordpress.zozothemes.com/wastbin/wp-content/uploads/sites/37/2025/03/blog-image7-1170x694.webp" 
                         alt="Urban Planning" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">For residential communities</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    We provide waste management services for Residential Communities
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">04</span>
                    <img src="https://wordpress.zozothemes.com/wastbin/wp-content/uploads/sites/37/2025/01/waste-and-disposal-services-teams.webp" 
                         alt="Project Manage" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Municipal solid waste</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    Our END-TO-END SOLID WASTE SOLUTIONS INCLUDE comprehensive waste management
                </p>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-24">
        <div class="text-center mb-16 reveal-header">
            <span class="text-gray-500 font-medium text-sm tracking-wide uppercase">More Energy More Savings</span>
            <h2 class="text-4xl md:text-5xl font-extrabold mt-3 leading-tight">
                Experience the future<br>of Solar Power.
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="feature-card relative group h-[500px] 
                rounded-[32px] overflow-hidden shadow-sm 
                lg:col-span-2">

                <img src="https://wordpress.zozothemes.com/wastbin/wp-content/uploads/sites/37/2025/03/blog-image05-1170x694.webp" 
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                     alt="Solar Landscape">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                
                <div class="absolute inset-0 p-8 flex flex-col justify-between z-10">
                    <h3 class="text-white text-2xl font-bold leading-tight max-w-[200px]">
                        Making Everything From Nirosolar
                    </h3>
                    
                    <div class="flex justify-between items-end">
                        <div>
                            <p class="text-gray-300 text-sm mb-1 font-medium">Saving-</p>
                            <p class="text-white text-3xl font-extrabold">610 kv</p>
                        </div>
                        <div class="relative w-24 h-24">
                            <svg class="w-full h-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="8" fill="transparent" class="text-white/20" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="8" fill="transparent" class="text-white" 
                                        stroke-dasharray="251.2" stroke-dashoffset="60" stroke-linecap="round" />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-card bg-[#f3f4f6] p-10 rounded-[32px] 
                flex flex-col transition-all duration-300 
                hover:-translate-y-2 hover:shadow-xl 
                lg:col-span-1">

                <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-sm mb-12">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707.707M12 7a5 5 0 100 10 5 5 0 000-10z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-8 leading-tight">Solar Energy Best Production</h3>
                <p class="text-gray-500 leading-relaxed">
                    Solar energy is the radiant light and heat emitted by the sun, harnessed through various technologies to generate electricity or heat. It's a renewable energy source, meaning it won't run out as long as the sun shines, making it more.
                </p>
            </div>

            <div class="feature-card bg-[#f3f4f6] p-10 rounded-[32px] 
                flex flex-col transition-all duration-300 
                hover:-translate-y-2 hover:shadow-xl 
                lg:col-span-1">

                <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-sm mb-12">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-8 leading-tight">We Are Building Better Future</h3>
                <p class="text-gray-500 leading-relaxed">
                    Solar energy is the radiant light and heat emitted by the sun, harnessed through various technologies to generate electricity or heat. It's a renewable energy source, meaning it won't run out as long as the sun shines, making it more.
                </p>
            </div>

        </div>
    </section>

    <section id="wm-hero" class="relative w-full pt-16 md:pt-24">
        
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-3 gap-12 items-start -mb-[12em]">
            
            <div class="wm-reveal-left w-[40em]">
                <div class="flex items-center gap-2 mb-4">
                    <svg class="w-5 h-5 wm-green-accent" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17,8C15.34,8 14,9.34 14,11V13H16.15L15.42,15.65C15.22,16.4 15.68,17.16 16.43,17.36C16.5,17.38 16.57,17.39 16.64,17.39C17.26,17.39 17.8,16.96 17.94,16.35L19,12.43V11C19,9.34 17.66,8 17,8M10,8C8.34,8 7,9.34 7,11V13H9.15L8.42,15.65C8.22,16.4 8.68,17.16 9.43,17.36C9.5,17.38 9.57,17.39 9.64,17.39C10.26,17.39 10.8,16.96 10.94,16.35L12,12.43V11C12,9.34 10.66,8 10,8Z" />
                    </svg>
                    <span class="wm-green-accent font-extrabold text-xs uppercase tracking-widest">Solutions</span>
                </div>
                <h1 class="text-5xl md:text-5xl font-extrabold text-[#1a1a1a] leading-[1.1] mb-10">
                    Bins That Transform<br>Public Spaces
                </h1>
                <button class="wm-bg-accent hover:opacity-90 text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-transform hover:scale-105">
                    EXPLORE SOLUTIONS 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                </button>
            </div>

            <div></div>

            <div class="wm-reveal-right lg:pl-20">
                <div class="mb-6">
                    <svg class="w-14 h-14 wm-green-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <p class="text-gray-500 text-lg italic leading-relaxed mb-8">
                    Transform public spaces with innovative waste bins cleanliness.
                </p>
                <div class="h-[1px] bg-gray-200 w-full mb-8"></div>
                <div class="flex items-center gap-4">
                    <div class="flex -space-x-4">
                        <img src="https://i.pravatar.cc/100?u=1" class="w-12 h-12 rounded-full border-4 border-white object-cover" alt="User">
                        <img src="https://i.pravatar.cc/100?u=2" class="w-12 h-12 rounded-full border-4 border-white object-cover" alt="User">
                        <img src="https://i.pravatar.cc/100?u=3" class="w-12 h-12 rounded-full border-4 border-white object-cover" alt="User">
                    </div>
                    <span class="text-3xl font-extrabold text-[#062d24]">2.3k+</span>
                </div>
            </div>
        </div>

        <div class="relative w-full flex justify-center z-30">
            <div id="wm-truck-container" class="w-full max-w-2xl px-6 -mb-48 md:-mb-31">
                <img src="https://wordpress.zozothemes.com/wastbin/wp-content/uploads/sites/37/2025/03/truck-img.webp" 
                     alt="Waste Collection Truck" 
                     class="w-full h-auto drop-shadow-2xl">
            </div>
        </div>

        <div class="wm-dark-panel w-full pt-[13em] pb-10 px-6 rounded-[40px] relative z-10">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-5 max-w-3xl mx-auto leading-tight">
                    OUR STRENGTHS
                </h2>

                <p class="text-white/80 text-center mb-12 max-w-4xl mx-auto">
                    With wide experience and proven expertise in major infrastructure projects, MJgreens is the best Waste Management Company in the country.
                </p>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-12" id="wm-feature-row">

                    <div class="flex items-center gap-4 group">
                        <div class="w-[3em] h-[3em] rounded-full border border-white/20 
                                    flex items-center justify-center 
                                    transition-colors group-hover:bg-white/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <span class="text-white font-semibold uppercase tracking-wider text-sm whitespace-nowrap">
                            Domain expertise
                        </span>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-[3em] h-[3em] rounded-full border border-white/20 
                                    flex items-center justify-center 
                                    transition-colors group-hover:bg-white/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span class="text-white font-semibold uppercase tracking-wider text-sm whitespace-nowrap">
                            Fully Compliant
                        </span>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-[3em] h-[3em] rounded-full border border-white/20 
                                    flex items-center justify-center 
                                    transition-colors group-hover:bg-white/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <span class="text-white font-semibold uppercase tracking-wider text-sm whitespace-nowrap">
                            Transparency
                        </span>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-[3em] h-[3em] rounded-full border border-white/20 
                                    flex items-center justify-center 
                                    transition-colors group-hover:bg-white/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"/>
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span class="text-white font-semibold uppercase tracking-wider text-sm whitespace-nowrap">
                            Multiple waste streams
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="relative mx-auto bg-[#f3f4f6] rounded-[40px] overflow-hidden p-4 md:p-6 shadow-sm mt-20">
        <div class="flex flex-col lg:flex-row gap-4 h-full">
            
            <div class="flex-1 bg-[#f3f4f6] p-8 md:p-12 flex flex-col justify-between relative min-h-[450px]">
                
                <div class="mb-8">
                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm">
                        <svg class="w-5 h-5 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V12C14.017 12.5523 13.5693 13 13.017 13H11.017V21H14.017ZM5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H6.017C5.46472 8 5.017 8.44772 5.017 9V12C5.017 12.5523 4.5693 13 4.017 13H2.017V21H5.017Z"/>
                        </svg>
                    </div>
                </div>

                <div id="testimonial-text" class="fade-in">
                    <p class="text-xl md:text-2xl font-medium text-gray-800 leading-relaxed mb-12">
                        Renew Home Is Working With Leading Brands There Making There Everything From Thermostats To Water Of The Heaters, Integrating New Energy. Energy To Savings Made Easy With Nirusolar. E Making There Everything From Thermostats To Water Of The Heaters, Integrating.
                    </p>
                </div>

                <div class="flex items-end justify-between border-t border-gray-200 pt-8">
                    <div id="author-block" class="flex items-center gap-4 fade-in">
                        <img id="author-img" src="https://i.pravatar.cc/150?u=john" alt="John Alex" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <h4 id="author-name" class="font-bold text-gray-900">John Alex</h4>
                            <p id="author-role" class="text-sm text-gray-500">Business Owner</p>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <button onclick="prevSlide()" class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-100 transition-colors shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button onclick="nextSlide()" class="w-12 h-12 bg-[#1a1a1a] text-white rounded-full flex items-center justify-center hover:bg-black transition-colors shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="lg:w-[45%] relative min-h-[400px]">
                <div class="absolute inset-0 rounded-[32px] overflow-hidden">
                    <img id="slider-img" src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&q=80&w=1200" 
                         class="w-full h-full object-cover transition-all duration-700 ease-in-out" alt="Modern Solar House">
                </div>
                <div class="absolute top-6 right-6 bg-black/20 backdrop-blur-md px-3 py-1 rounded-full text-white text-sm font-medium">
                    <span id="page-indicator">1/5</span>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-24">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1c1c1c] tracking-tight">
                You Might Find Your Answer
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-4">
            
            <div class="space-y-4">
                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                           A. What types of waste does MJGreen collect?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
MJGreen Waste Management collects a wide range of waste, including household waste, commercial waste, recyclable materials, organic waste, and selected industrial waste. Our goal is to ensure safe, eco-friendly, and responsible disposal for every client.                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            B. How can I schedule a waste pickup?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
You can schedule a pickup easily through your MJGreen dashboard, by calling our support team, or by submitting a request through our website contact form. Our team will confirm the pickup time based on your location and service plan.                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            C. Do you provide recycling services?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
Yes, MJGreen offers dedicated recycling services for paper, plastic, metal, glass, and other recyclable materials. We sort and process waste responsibly to reduce landfill impact and support a greener environment.                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            D. What areas does MJGreen serve?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
MJGreen Waste Management provides services across selected residential, commercial, and industrial areas. You can check service availability by entering your location on our website or contacting our support team.                        </p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            A. Can I change my waste collection schedule?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
Yes, you can modify your pickup schedule at any time through your dashboard or by contacting our support team. We will adjust the service based on your availability and plan.                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            B. What should I do with hazardous waste?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
Hazardous waste should be kept separate from regular trash. MJGreen provides special collection services for approved hazardous materials. Please contact our support team to schedule a safe and compliant pickup.                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            C. Do you offer services for businesses and industries?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
Yes, MJGreen provides customized waste management solutions for offices, restaurants, factories, and other commercial or industrial clients. We design plans based on waste volume, type, and frequency.                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            D. How does MJGreen ensure eco-friendly waste disposal?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
We follow responsible waste segregation, recycling, composting, and safe disposal practices. Our processes are designed to reduce landfill waste and promote sustainability in every step of waste management.                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="hero-gradient relative overflow-visible rounded-[3rem]">
        <div class="container mx-auto px-6 lg:px-20 pt-20 pb-0 flex flex-col md:flex-row items-center justify-between relative">
            
            <div class="md:w-1/2 mb-12 md:mb-20 z-10">
                <h1 class="text-4xl md:text-5xl text-white font-bold leading-tight mb-6">
                    Smart Waste Solutions for a <br> Sustainable Tomorrow

                </h1>
                <p class="text-gray-300 text-sm md:text-base max-w-md mb-8 leading-relaxed">
                   Partner with MJGreen to manage your waste responsibly. From regular pickups to advanced recycling services, we make it easy to keep your surroundings clean and green.
                </p>
                <button class="bg-accent hover:bg-white text-black font-semibold py-3 px-8 rounded-full transition duration-300">
                    Contact Now
                </button>
            </div>

            <div class="worker-container">
                <img 
                    src="https://dkkit.rometheme.pro/diligent/wp-content/uploads/sites/100/2024/03/VVJT84U.png" 
                    alt="Worker"
                    class="w-full object-contain"
                >
            </div>

        </div>
    </section>

    <x-footer />

    <script>
        // ========================================
        // HERO SECTION ANIMATIONS
        // ========================================
        window.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            const tl = gsap.timeline();

            tl.from(".hero-title", {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power4.out"
            })
            .from(".hero-subtitle", {
                y: 30,
                opacity: 0,
                duration: 0.8,
                ease: "power3.out"
            }, "-=0.6")
            .from(".hero-btn", {
                scale: 0.8,
                opacity: 0,
                duration: 0.5,
                ease: "back.out(1.7)"
            }, "-=0.4")
            .from(".glass-card", {
                y: 100,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power4.out"
            }, "-=0.8");

            gsap.to(".parallax-bg", {
                yPercent: 20,
                ease: "none",
                scrollTrigger: {
                    trigger: ".hero-container",
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });
        });

        // ========================================
        // FAQ ACCORDION
        // ========================================
        document.querySelectorAll('.faq-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const parent = trigger.parentElement;
                parent.classList.toggle('active');
            });
        });

        // ========================================
        // TESTIMONIAL SLIDER
        // ========================================
        const sliderData = [
            {
                text: "MJGREENS has transformed our corporate park's waste management. Their professional team, domain expertise, and transparent process have made us fully compliant and helped us handle multiple waste streams efficiently. A truly reliable partner for sustainable solutions.",
                name: "Ravi Sharma",
                role: "Facility Manager, Tech Park",
                avatar: "https://i.pravatar.cc/150?u=ravi",
                image: "https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&q=80&w=1200"
            },
            {
                text: "Our residential community has greatly benefited from MJGREENS' end-to-end solid waste solutions. They've not only made our community cleaner but have also ensured dignified and safe employment for their staff. It's a win-win for everyone.",
                name: "Priya Desai",
                role: "RWA President",
                avatar: "https://i.pravatar.cc/150?u=priya",
                image: "https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&q=80&w=1200"
            },
            {
                text: "With their deep domain expertise in EPR and reverse logistics, MJGREENS has been instrumental in helping us achieve our circular economy goals. Their consultation is top-notch, providing transparent and compliant solutions for post-consumer waste.",
                name: "Anjali Mehta",
                role: "Head of Sustainability, FMCG Corp",
                avatar: "https://i.pravatar.cc/150?u=anjali",
                image: "https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&q=80&w=1200"
            }
        ];

        let currentIndex = 0;

        function updateSlider() {
            const current = sliderData[currentIndex];
            const textEl = document.getElementById('testimonial-text');
            const authorEl = document.getElementById('author-block');
            const imgEl = document.getElementById('slider-img');

            textEl.classList.remove('fade-in');
            authorEl.classList.remove('fade-in');
            void textEl.offsetWidth;
            textEl.classList.add('fade-in');
            authorEl.classList.add('fade-in');

            textEl.querySelector('p').innerText = current.text;
            document.getElementById('author-name').innerText = current.name;
            document.getElementById('author-role').innerText = current.role;
            document.getElementById('author-img').src = current.avatar;
            imgEl.src = current.image;
            document.getElementById('page-indicator').innerText = `${currentIndex + 1}/${sliderData.length}`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % sliderData.length;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + sliderData.length) % sliderData.length;
            updateSlider();
        }

        // ========================================
        // TRUCK SECTION ANIMATIONS
        // ========================================
        document.addEventListener("DOMContentLoaded", () => {
            const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

            tl.from(".wm-reveal-left", { x: -60, opacity: 0, duration: 1 })
              .from(".wm-reveal-right", { x: 60, opacity: 0, duration: 1 }, "-=0.8")
              .from("#wm-truck-container", { y: 100, opacity: 0, duration: 1.5, ease: "expo.out" }, "-=0.5")
              .from(".wm-dark-panel", { y: 200, opacity: 0, duration: 1.2 }, "-=1")
              .from("#wm-feature-row > div", { 
                  y: 40, 
                  opacity: 0, 
                  stagger: 0.2, 
                  duration: 0.8 
              }, "-=0.5");
        });
    </script>
</body>
</html>
