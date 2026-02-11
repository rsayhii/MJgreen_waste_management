<style>
    /* NAVBAR SCROLL STYLES */
    #mainNav {
        transition: all 0.3s ease;
    }

    #mainNav.scrolled {
        position: fixed;
        top: -100px;
        left: 0;
        right: 0;
        z-index: 1000;
        background: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-bottom-left-radius: 2rem;
        border-bottom-right-radius: 2rem;
        animation: slideDown 0.4s ease forwards;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    @keyframes slideDown {
        from {
            top: -100px;
            opacity: 0;
        }
        to {
            top: 0;
            opacity: 1;
        }
    }

    #mainNav.scrolled .gs-logo-text,
    #mainNav.scrolled ul li a,
    #mainNav.scrolled .gs-menu-icon {
        color: #1a1a1a !important;
    }



    #mainNav.scrolled .gs-contact-btn {
        background: #1a1a1a;
        color: #d4ff3d;
    }

    #mainNav.scrolled .gs-contact-btn:hover {
        background: #000;
    }
</style>

<nav id="mainNav" class="absolute inset-x-0 top-0 z-30">
  <div class="container mx-auto px-6 lg:px-20 flex items-center justify-between py-6 md:py-0">
    <div class="flex items-center gap-2 text-white">
        <img src="{{ asset('assits/logo.png') }}" alt="MJ Greens Infra Private Limited Logo" class="h-10">
        <span class="gs-logo-text text-xl font-bold tracking-tight">MJ Greens Infra Private Limited</span>
    </div>
    
    <ul class="hidden md:flex items-center gap-8 text-white/90 text-sm font-medium">
        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
        <li><a href="{{ route('about-us') }}" class="hover:text-white transition-colors">About Us</a></li>
        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a></li>
        <li><a href="{{ route('career') }}" class="hover:text-white transition-colors">Career</a></li>
        <li><a href="{{ route('gallery') }}" class="hover:text-white transition-colors">Gallery</a></li>
        <li><a href="{{ route('certification') }}" class="hover:text-white transition-colors">Certification</a></li>
        <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog</a></li>
    </ul>

   
    <a href="/contact" class="contact-btn bg-[#d4ff3d] hover:bg-[#c1eb30] text-black px-6 py-2.5 rounded-full flex items-center gap-2 text-sm font-bold transition-transform active:scale-95">
        Contact Us 
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
    </a>

    <button class="gs-menu-icon md:hidden text-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
  </div>
</nav>

<script>
    // ========================================
    // STICKY NAVBAR SCROLL ANIMATION
    // ========================================
    (function() {
        let lastScrollTop = 0;
        const navbar = document.getElementById('mainNav');
        const scrollThreshold = 100; // Pixels to scroll before triggering

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            // Only trigger when scrolling down AND past threshold
            if (currentScroll > scrollThreshold && currentScroll > lastScrollTop) {
                navbar.classList.add('scrolled');
            } 
            // Remove sticky when scrolling up OR at top
            else if (currentScroll < lastScrollTop || currentScroll <= scrollThreshold) {
                navbar.classList.remove('scrolled');
            }

            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        }, false);
    })();
</script>
