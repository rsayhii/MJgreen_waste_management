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
            max-height: 200px; /* Adjust based on content length */
            opacity: 1;
            padding-bottom: 1.5rem;
        }

        .faq-item.active .toggle-icon {
            transform: rotate(45deg); /* Plus becomes an X/Minus effect */
        }

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
<body class="p-4 md:p-6">
{{----------------------------------------- hero section start----------------------------------------}}
    <section class="hero-container relative h-[90vh] min-h-[700px] w-full bg-slate-900 shadow-2xl">
        
        <div class="parallax-bg absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?auto=format&fit=crop&q=80&w=2070" 
                 alt="Green Hills and Wind Turbines" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
        </div>

        <nav class="relative z-20 flex items-center justify-between px-8 py-8 md:px-12">
            <div class="flex items-center gap-2 text-white">
                <div class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/30">
                    <div class="w-3 h-3 bg-white rounded-full"></div>
                </div>
                <span class="text-xl font-bold tracking-tight">Greenset</span>
            </div>
            
            <ul class="hidden md:flex items-center gap-8 text-white/90 text-sm font-medium">
                <li><a href="#" class="hover:text-white transition-colors">Home</a></li>
                <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Our Impact</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Projects</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
            </ul>

            <button class="bg-[#d4ff3d] hover:bg-[#c1eb30] text-black px-6 py-2.5 rounded-full flex items-center gap-2 text-sm font-bold transition-transform active:scale-95">
                Contact Us 
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </nav>

        <div class="relative z-10 flex flex-col items-center justify-center text-center px-6 mt-12 md:mt-20">
            <h1 class="hero-title text-5xl md:text-7xl font-bold text-white leading-tight">
                Sustainable Living<br>Starts Here
            </h1>
            <p class="hero-subtitle text-white/80 max-w-xl mt-6 text-sm md:text-base leading-relaxed">
                Discover eco-friendly essentials designed to help you reduce waste, live mindfully, and make a positive impact on the planet—without compromising on style or quality.
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


    {{----------------------------------------- hero section end----------------------------------------}}




    {{----------------------------------------- cards section start----------------------------------------}}
    {{-- <section class="max-w-7xl mx-auto px-6 py-20"> --}}
          <section class="relative h-[90vh] min-h-[700px] w-full">
        
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1a1a1a]">Services we provide</h2>
            
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
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=800" 
                         alt="Arch Design" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Arch Design</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    From initial concept development and schematic design
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">02</span>
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&q=80&w=800" 
                         alt="Interior Design" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Interior Design</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    Creating cohesive interior spaces that reflect your style
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">03</span>
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=800" 
                         alt="Urban Planning" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Urban Planning</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    Designing the spaces between buildings & outdoors
                </p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-5">
                    <span class="absolute top-4 left-4 z-10 text-white font-semibold text-lg opacity-90">04</span>
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=800" 
                         alt="Project Manage" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="text-xl font-bold text-[#1a1a1a] mb-2">Project Manage</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[240px]">
                    Overseeing & control the entire construction process
                </p>
            </div>

        </div>
    </section>
    {{----------------------------------------- cards section end ----------------------------------------}}













    {{----------------------------------------- faq section start ----------------------------------------}}
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
                            A. What are the conditions for terminating my service?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            You can terminate your service by providing a 30-day notice via your dashboard or by contacting our support team directly. Specific terms regarding early termination fees are outlined in your initial service agreement.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            B. What is the best way for me to transfer my share?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            To transfer shares, please navigate to the 'Security' section of your account and initiate a Transfer Request. You will need the recipient's verified account ID and email address to complete the process.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            C. What kind of service do you provide?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            We provide comprehensive waste management, sustainable recycling processing, and specialized industrial material handling for both residential and commercial sectors.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            D. What exactly are late fees?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Late fees are applied when an invoice is not settled within 5 business days of the due date. The standard fee is 5% of the outstanding balance or a flat $25, whichever is greater.
                        </p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            A. What is the distinction in recycling processing?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            We utilize advanced sorting technologies to distinguish between organic matter, plastics, and metals, ensuring that a higher percentage of collected waste is diverted from landfills.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            B. What is the procedure for changing my address?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Log in to your account, go to 'Account Settings', and select 'Address Information'. Updates are processed instantly, but billing cycles may take one full period to reflect the change.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            C. What size container is right for my business?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            We offer containers from 2-yard bins to 40-yard roll-offs. Our team can conduct a waste audit to recommend the most cost-effective size based on your weekly output.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-[#f8faf9] rounded-xl border border-transparent transition-all">
                    <button class="faq-trigger w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#0a2b22] font-semibold md:text-lg">
                            D. How often is business trash picked up?
                        </span>
                        <div class="w-10 h-10 flex items-center justify-center border-l border-gray-200 ml-4 group-hover:bg-gray-100 rounded-r-xl -mr-6 -my-6 transition-colors">
                            <span class="toggle-icon text-2xl text-gray-400 transition-transform">+</span>
                        </div>
                    </button>
                    <div class="faq-content px-6">
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Pickup frequency is customizable. Most businesses opt for 1-3 times per week, though daily pickups are available for high-volume commercial centers.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    {{----------------------------------------- faq section end ----------------------------------------}}


     {{----------------------------------------- Sustainability Section AND Footer Section Start ----------------------------------------}}

 <section class="hero-gradient relative overflow-visible">
    <div class="container mx-auto px-6 lg:px-20 pt-20 pb-0 flex flex-col md:flex-row items-center justify-between relative">
        
        <!-- Left Content -->
        <div class="md:w-1/2 mb-12 md:mb-20 z-10">
            <h1 class="text-4xl md:text-5xl text-white font-bold leading-tight mb-6">
                Take the First Step Towards <br> Sustainability
            </h1>
            <p class="text-gray-300 text-sm md:text-base max-w-md mb-8 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
            </p>
            <button class="bg-accent hover:bg-white text-black font-semibold py-3 px-8 rounded-sm transition duration-300">
                Contact Now
            </button>
        </div>

        <!-- Right Image (Overflow effect) -->
        <div class="worker-container">
            <img 
                src="https://dkkit.rometheme.pro/diligent/wp-content/uploads/sites/100/2024/03/VVJT84U.png" 
                alt="Worker"
                class="w-full object-contain"
            >
        </div>

    </div>
</section>


    <footer class="bg-custom-dark pt-16 pb-8 border-t border-green-900">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center">
                               <img src="https://dkkit.rometheme.pro/diligent/wp-content/uploads/sites/100/2024/03/VVJT84U.png" alt="Worker" class="w-full max-w-md object-contain">
                        </div>
                        <div>
                            <span class="block text-2xl font-bold italic text-white">Diligent</span>
                            <span class="block text-[10px] uppercase tracking-widest text-gray-400">Waste Management & Recycling</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg text-white font-semibold mb-6">Quick Links</h4>
                    <ul class="text-xs space-y-3 text-gray-400">
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Our Company</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Services</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Vacancies</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Inconterms</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Track Your Shipment</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg text-white font-semibold mb-6">Services</h4>
                    <ul class="text-xs space-y-3 text-gray-400">
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Residential Waste Collection</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Commercial Waste Management</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Specialized Waste Disposal</li>
                        <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Recycling Services</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg text-white font-semibold mb-6">Newsletter Signup</h4>
                    <form class="flex flex-col gap-3">
                        <div class="flex flex-col md:flex-row border border-gray-600 rounded-sm overflow-hidden">
                            <input type="email" placeholder="Enter Your Email" class="bg-transparent px-4 py-2 text-sm w-full outline-none">
                            <button type="submit" class="bg-accent text-black font-bold px-4 py-2 text-xs uppercase hover:bg-white whitespace-nowrap">
                                Sign Up Now
                            </button>
                        </div>
                    </form>
                    <p class="text-[10px] text-gray-500 mt-4 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.
                    </p>
                </div>

            </div>
        </div>
    </footer>


          {{-----------------------------------------Sustainability Section AND Footer Section Start  End ----------------------------------------}}








    <script>

        // ----------------------------------------- hero section start----------------------------------------
        // GSAP Animations
        window.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            const tl = gsap.timeline();

            // Initial Load Animations
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

            // Parallax Effect on Scroll
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

         // ----------------------------------------- hero section end----------------------------------------





         // ----------------------------------------- faq section start----------------------------------------
         document.querySelectorAll('.faq-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const parent = trigger.parentElement;
                
                // Toggle active class on clicked item
                parent.classList.toggle('active');

                // Optional: Close other items when one is opened
                // document.querySelectorAll('.faq-item').forEach(item => {
                //     if (item !== parent) item.classList.remove('active');
                // });
            });
        });
         // ----------------------------------------- faq section end----------------------------------------

              //----------------------------------------- Sustainability Section AND Footer Section Start ----------------------------------------//

  
             //----------------------------------------- Sustainability Section AND Footer Section End ----------------------------------------//


         
    
    </script>
</body>
</html>