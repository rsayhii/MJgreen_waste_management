<style>
    /* footer */
    .vs-footer-bg {
        background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=2000');
        background-size: cover;
        background-position: center;
    }
    .vs-overlay {
        background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(10,10,10,0.95) 100%);
    }
    .vs-rounded-top {
        border-top-left-radius: 60px;
        border-top-right-radius: 60px;
    }
    .bg-custom-dark { background-color: #00240f; }
    .bg-custom-green { background-color: #053b1d; }
    .text-accent { color: #f2ba1d; }
    .bg-accent { background-color: #f2ba1d; }
</style>

<footer class="bg-custom-dark pt-12 md:pt-16 pb-8 border-t border-green-900 rounded-[2rem] md:rounded-[3rem] m-4 md:m-6">
    <div class="container mx-auto px-4 sm:px-6 lg:px-10 xl:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12">
            
            <div class="sm:col-span-2 lg:col-span-1"> 
                <div class="flex items-center gap-2 mb-6">
                    <img src="{{ asset('assits/logo.png') }}" alt="MJ Greens Infra Private Limited Logo" class="h-8 md:h-10">
                    <div class="flex flex-col leading-none">
                        <span class="text-lg md:text-xl font-bold italic text-white">MJ Greens Infra</span>
                        <span class="text-[10px] md:text-xs opacity-80 font-medium text-white">Private Limited</span>
                    </div>
                </div>
                <p class="text-xs text-gray-400 leading-relaxed mb-6 max-w-md">
                    MJ Greens Infra Private Limited provides smart, sustainable waste management and infrastructure solutions. We help homes, businesses, and industries maintain cleaner environments through responsible collection, recycling, and eco-friendly practices.
                </p>
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/mjgreensinfra#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/Mjgreens1" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCOTe4oCLPQ4XAYdusj9rq3w" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/mjgreens_/" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"> <i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-base md:text-lg text-white font-semibold mb-4 md:mb-6">Quick Links</h4>
                <ul class="text-xs space-y-3 text-gray-400">
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i>
                      <a href="{{ route('home') }}" class="hover:text-accent">Home</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                      <a href="{{ route('about-us') }}" class="hover:text-accent">About Us</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                      <a href="{{ route('services') }}" class="hover:text-accent">Services</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                      <a href="{{ route('career') }}" class="hover:text-accent">Career</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                      <a href="{{ route('gallery') }}" class="hover:text-accent">Gallery</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                      <a href="{{ route('certification') }}" class="hover:text-accent">Certification</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                      <a href="{{ route('blog') }}" class="hover:text-accent">Blog</a>
                    </li>
                    
                </ul>
            </div>

            <div>
                <h4 class="text-base md:text-lg text-white font-semibold mb-4 md:mb-6">Services</h4>
                <ul class="text-xs space-y-3 text-gray-400">
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                     <a href="{{ route('services') }}" class="hover:text-accent">Door To Door</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                    <a href="{{ route('services') }}" class="hover:text-accent">C&D</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                    <a href="{{ route('services') }}" class="hover:text-accent">MRF</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                    <a href="{{ route('services') }}" class="hover:text-accent">Secondary Collection and Transportation</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                    <a href="{{ route('services') }}" class="hover:text-accent">Bio mining/ Bio remediation</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-accent cursor-pointer"><i class="fas fa-chevron-right text-[8px] text-accent"></i> 
                    <a href="{{ route('services') }}" class="hover:text-accent">Mechanical Sweeping</a>
                    </li>
                </ul>
            </div>

            <div class="sm:col-span-2 lg:col-span-1">
                <h4 class="text-base md:text-lg text-white font-semibold mb-4 md:mb-6">Newsletter Signup</h4>
                <form class="flex flex-col gap-3">
                    <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row border border-gray-600 rounded-2xl sm:rounded-full lg:rounded-2xl xl:rounded-full overflow-hidden">
                        <input type="email" placeholder="Enter Your Email" class="bg-transparent px-4 py-3 sm:py-2 text-sm w-full outline-none text-white">
                        <button type="submit" class="bg-accent text-black font-bold px-6 py-3 sm:py-2 text-xs uppercase hover:bg-white whitespace-nowrap">
                            Sign Up Now
                        </button>
                    </div>
                </form>
                <p class="text-[10px] text-gray-500 mt-4 leading-relaxed max-w-md">
                   Subscribe to our newsletter to receive the latest updates on waste management tips, eco-friendly practices, service announcements, and sustainability news from MJ Greens Infra Private Limited.
                </p>
            </div>

        </div>
        
        <div class="mt-12 pt-8 border-t border-green-900 flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
            <p class="text-[10px] md:text-xs text-gray-500">
                © 2026 MJ Greens Infra Private Limited. All rights reserved.
            </p>
            <div class="flex gap-6 text-[10px] md:text-xs text-gray-500">
                <a href="{{ route('privacy-policy') }}" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="{{ route('disclaimer') }}" class="hover:text-accent transition-colors">Disclaimer</a>
            </div>
        </div>
    </div>
</footer>
