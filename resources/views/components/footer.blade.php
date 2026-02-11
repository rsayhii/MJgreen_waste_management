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

<footer class="bg-custom-dark pt-16 pb-8 border-t border-green-900 rounded-[3rem] m-6">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            
            <div> 
                <div class="flex items-center gap-2 mb-6">
                    <img src="{{ asset('assits/logo.png') }}" alt="MJ Greens Infra Private Limited Logo" class="h-10">
                    <span class="block text-2xl font-bold italic text-white">MJ Greens Infra Private Limited</span>
                </div>
                <p class="text-xs text-gray-400 leading-relaxed mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="bg-accent w-8 h-8 flex items-center justify-center text-black text-sm hover:bg-white transition rounded-full"><i class="fab fa-youtube"></i></a>
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
                    <div class="flex flex-col md:flex-row border border-gray-600 rounded-full overflow-hidden">
                        <input type="email" placeholder="Enter Your Email" class="bg-transparent px-4 py-2 text-sm w-full outline-none">
                        <button type="submit" class="bg-accent text-black font-bold px-4 py-2 text-xs uppercase hover:bg-white whitespace-nowrap rounded-full">
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
