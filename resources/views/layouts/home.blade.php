<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Greenset | Sustainable Living')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @yield('styles')
</head>
<body class="bg-gray-50">
    <header class="bg-slate-900">
        <nav class="relative z-20 flex items-center justify-between px-8 py-6 md:px-12">
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
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#00240f] pt-16 pb-8 border-t border-green-900">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-10 h-10 bg-[#f2ba1d] rounded-full flex items-center justify-center">
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
                        <a href="#" class="bg-[#f2ba1d] w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="bg-[#f2ba1d] w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="bg-[#f2ba1d] w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg text-white font-semibold mb-6">Quick Links</h4>
                    <ul class="text-xs space-y-3 text-gray-400">
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Our Company</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Services</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Vacancies</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Inconterms</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Track Your Shipment</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg text-white font-semibold mb-6">Services</h4>
                    <ul class="text-xs space-y-3 text-gray-400">
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Residential Waste Collection</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Commercial Waste Management</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Specialized Waste Disposal</li>
                        <li class="flex items-center gap-2 hover:text-[#f2ba1d] cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-[#f2ba1d]"></i> Recycling Services</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg text-white font-semibold mb-6">Newsletter Signup</h4>
                    <form class="flex flex-col gap-3">
                        <div class="flex flex-col md:flex-row border border-gray-600 rounded-sm overflow-hidden">
                            <input type="email" placeholder="Enter Your Email" class="bg-transparent px-4 py-2 text-sm w-full outline-none">
                            <button type="submit" class="bg-[#f2ba1d] text-black font-bold px-4 py-2 text-xs uppercase hover:bg-white whitespace-nowrap">
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

    @yield('scripts')
</body>
</html>
