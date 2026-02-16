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
        border-bottom-left-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
        animation: slideDown 0.4s ease forwards;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    @media (min-width: 768px) {
        #mainNav.scrolled {
            border-bottom-left-radius: 2rem;
            border-bottom-right-radius: 2rem;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
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
    #mainNav.scrolled .gs-desktop-nav li a,
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
  <div class="container mx-auto px-4 md:px-6 lg:px-10 xl:px-20 flex items-center justify-between py-0 md:py-6 xl:py-0">
    <div class="flex items-center gap-2 text-white flex-shrink-0">
        <img src="{{ asset('assits/logo.png') }}" alt="MJ Greens Infra Private Limited Logo" class="h-8 md:h-10">
        <div class="flex flex-col leading-none">
            <span class="gs-logo-text text-sm sm:text-lg md:text-xl font-bold tracking-tight">MJ Greens Infra</span>
            <span class="gs-logo-text text-[10px] sm:text-xs opacity-80 font-medium">Private Limited</span>
        </div>
    </div>
    
    <ul class="gs-desktop-nav hidden xl:flex items-center gap-6 text-white/90 text-sm font-medium">
        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
        <li><a href="{{ route('about-us') }}" class="hover:text-white transition-colors">About Us</a></li>
        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a></li>
        <li><a href="{{ route('career') }}" class="hover:text-white transition-colors">Career</a></li>
        <li><a href="{{ route('gallery') }}" class="hover:text-white transition-colors">Gallery</a></li>
        <li><a href="{{ route('certification') }}" class="hover:text-white transition-colors">Certification</a></li>
        <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog</a></li>
    </ul>

    <div class="flex items-center gap-4">
        <a href="/contact" class="hidden sm:flex gs-contact-btn bg-[#d4ff3d] hover:bg-[#c1eb30] text-black px-5 py-2 rounded-full items-center gap-2 text-sm font-bold transition-transform active:scale-95">
            Contact Us 
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>

        <button id="mobileMenuBtn" class="gs-menu-icon xl:hidden text-white p-2">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobileMenu" class="fixed inset-0 bg-black/95 z-[2000] hidden flex-col p-8 transition-all duration-300">
      <div class="flex justify-between items-center mb-12">
          <div class="flex items-center gap-2 text-white">
              <img src="{{ asset('assits/logo.png') }}" alt="Logo" class="h-8">
              <div class="flex flex-col leading-none">
                  <span class="text-lg font-bold">MJ Greens Infra</span>
                  <span class="text-[10px] opacity-70">Private Limited</span>
              </div>
          </div>
          <button id="closeMenuBtn" class="text-white p-2">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
          </button>
      </div>
      
      <ul class="flex flex-col gap-6 text-white text-2xl font-semibold">
          <li><a href="{{ route('home') }}" class="hover:text-[#d4ff3d] transition-colors">Home</a></li>
          <li><a href="{{ route('about-us') }}" class="hover:text-[#d4ff3d] transition-colors">About Us</a></li>
          <li><a href="{{ route('services') }}" class="hover:text-[#d4ff3d] transition-colors">Services</a></li>
          <li><a href="{{ route('career') }}" class="hover:text-[#d4ff3d] transition-colors">Career</a></li>
          <li><a href="{{ route('gallery') }}" class="hover:text-[#d4ff3d] transition-colors">Gallery</a></li>
          <li><a href="{{ route('certification') }}" class="hover:text-[#d4ff3d] transition-colors">Certification</a></li>
          <li><a href="{{ route('blog') }}" class="hover:text-[#d4ff3d] transition-colors">Blog</a></li>
          <li><a href="/contact" class="text-[#d4ff3d]">Contact Us</a></li>
      </ul>

      <div class="mt-auto pt-12 border-t border-white/10 text-white/60">
          <p class="text-sm">© 2026 MJ Greens Infra Private Limited</p>
          <div class="flex gap-4 mt-4">
              <a href="#" class="text-white hover:text-[#d4ff3d]"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white hover:text-[#d4ff3d]"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white hover:text-[#d4ff3d]"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
  </div>
</nav>

<script>
    // ========================================
    // MOBILE MENU LOGIC
    // ========================================
    (function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeMenuBtn = document.getElementById('closeMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const body = document.body;

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
            body.style.overflow = 'hidden';
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
            body.style.overflow = '';
        });

        // Close menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                body.style.overflow = '';
            });
        });
    })();

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
