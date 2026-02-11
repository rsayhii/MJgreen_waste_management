<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Gallery 2020</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .number-item {
            transition: all 0.3s ease;
        }
        
        .number-item:hover {
            transform: translateY(-5px);
        }
        
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
        }
        
        .hero-image {
            background-image: url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .green-gradient {
            background: linear-gradient(135deg, rgba(22, 163, 74, 0.9) 0%, rgba(21, 128, 61, 0.9) 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Hero Section with Waste Management Theme -->
    <header class="relative hero-image h-screen flex items-center justify-center">
        <div class="absolute inset-0 green-gradient"></div>
        <div class="relative z-10 text-white px-4 container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Text Content -->
                <div class="fade-in">
                    <div class="mb-6">
                        <div class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                            <div class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></div>
                            <span class="text-sm font-medium tracking-wider">REDUCING.REUSING.RECYCLING</span>
                        </div>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Efficient Free Waste<br>
                        <span class="text-green-300">Disposal for a Cleaner</span><br>
                        Tomorrow.
                    </h1>
                    
                    <p class="text-xl mb-8 text-green-100 max-w-xl">
                        Join us in creating sustainable solutions for waste management. 
                        Our innovative approaches help communities reduce, reuse, and recycle effectively.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-8 py-3 bg-white text-green-800 font-bold rounded-lg hover:bg-green-50 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl flex items-center justify-center">
                            <span>LEARN MORE</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                        
                        <button class="px-8 py-3 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-play-circle mr-2"></i>
                            <span>Watch Video</span>
                        </button>
                    </div>
                </div>
                
                <!-- Right Column - Stats/Info Cards -->
                <div class="fade-in">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="text-center p-4 bg-white/5 rounded-xl">
                                <div class="text-3xl font-bold text-green-300 mb-1">Morning</div>
                                <div class="text-sm text-green-100">Collection Hours</div>
                                <div class="mt-2 text-green-200">6:00 AM - 12:00 PM</div>
                            </div>
                            
                            <div class="text-center p-4 bg-white/5 rounded-xl">
                                <div class="text-3xl font-bold text-green-300 mb-1">Evening</div>
                                <div class="text-sm text-green-100">Collection Hours</div>
                                <div class="mt-2 text-green-200">4:00 PM - 8:00 PM</div>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                                    <i class="fas fa-recycle text-white"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Smart Recycling</div>
                                    <div class="text-sm text-green-200">Automated sorting technology</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                                    <i class="fas fa-leaf text-white"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Zero Waste Goal</div>
                                    <div class="text-sm text-green-200">90% diversion rate achieved</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                                    <i class="fas fa-truck text-white"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Free Pickup</div>
                                    <div class="text-sm text-green-200">Scheduled waste collection</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white animate-bounce text-3xl">
            <i class="fas fa-chevron-down"></i>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="sticky-nav bg-white/90 shadow-md py-4">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-2xl font-bold text-green-900 mb-4 md:mb-0 flex items-center">
                    <i class="fas fa-recycle mr-2"></i>
                    <span>EcoNumbers</span>
                </div>
                <div class="flex space-x-2 overflow-x-auto pb-2 md:pb-0">
                    <button onclick="scrollToSection('section-1')" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">1-100</button>
                    <button onclick="scrollToSection('section-101')" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">101-300</button>
                    <button onclick="scrollToSection('section-301')" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">301-600</button>
                    <button onclick="scrollToSection('section-601')" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">601-900</button>
                    <button onclick="scrollToSection('section-901')" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">901-1280</button>
                    <button onclick="scrollToTop()" class="px-3 py-1 bg-green-800 text-white rounded-full text-sm hover:bg-green-900 transition">
                        <i class="fas fa-arrow-up"></i> Top
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto max-w-6xl px-4 py-12">
        <!-- Section 1: Numbers 1-100 -->
        <section id="section-1" class="mb-16 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 pb-3 border-b-2 border-green-200">Numbers 1-100</h2>
            
            <!-- Item 1: Image on left, description on right -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 1" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number One</h3>
                        <p class="text-gray-600 mb-6">The first natural number, representing unity, singularity, and the beginning of all counting systems. In mathematics, it's the multiplicative identity.</p>
                        <div class="flex items-center text-blue-700">
                            <i class="fas fa-calculator mr-2"></i>
                            <span>Mathematical Properties: Prime, Odd, Fibonacci number</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 2: Image on right, description on left -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex md:flex-row-reverse">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-green-50 to-teal-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 2" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number Two</h3>
                        <p class="text-gray-600 mb-6">The first and only even prime number. Represents duality, balance, and binary systems. Fundamental to computing as the basis of binary code.</p>
                        <div class="flex items-center text-green-700">
                            <i class="fas fa-balance-scale mr-2"></i>
                            <span>Mathematical Properties: Prime, Even, Fibonacci number</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 3: Image on left, description on right -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-purple-50 to-pink-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 3" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number Three</h3>
                        <p class="text-gray-600 mb-6">The first odd prime number, representing stability (as in a triangle) and harmony. In many cultures, it symbolizes completeness (beginning, middle, end).</p>
                        <div class="flex items-center text-purple-700">
                            <i class="fas fa-shapes mr-2"></i>
                            <span>Mathematical Properties: Prime, Odd, Triangular number</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 2: Numbers 101-300 -->
        <section id="section-101" class="mb-16 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 pb-3 border-b-2 border-green-300">Numbers 101-300</h2>
            
            <!-- Item 101: Image on left, description on right -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-amber-50 to-orange-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 101" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number One Hundred One</h3>
                        <p class="text-gray-600 mb-6">101 is a palindromic number and represents binary code for the decimal number 5. It's often used to denote introductory level courses (101 courses).</p>
                        <div class="flex items-center text-amber-700">
                            <i class="fas fa-code mr-2"></i>
                            <span>Mathematical Properties: Prime, Palindromic</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 202: Image on right, description on left -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex md:flex-row-reverse">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-rose-50 to-red-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 202" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number Two Hundred Two</h3>
                        <p class="text-gray-600 mb-6">A palindromic number that reads the same forwards and backwards. In mathematics, palindrome numbers have interesting properties in different number bases.</p>
                        <div class="flex items-center text-rose-700">
                            <i class="fas fa-exchange-alt mr-2"></i>
                            <span>Mathematical Properties: Semiprime, Palindromic, Even</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section 3: Numbers 301-600 -->
        <section id="section-301" class="mb-16 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 pb-3 border-b-2 border-green-400">Numbers 301-600</h2>
            
            <!-- Item 365: Image on left, description on right -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-cyan-50 to-blue-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 365" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number Three Hundred Sixty-Five</h3>
                        <p class="text-gray-600 mb-6">The number of days in a common year. It's a semiprime (5 × 73) and appears in calendars, timekeeping, and astronomical calculations throughout history.</p>
                        <div class="flex items-center text-cyan-700">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Mathematical Properties: Semiprime, Composite, Centered triangular number</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item 404: Image on right, description on left -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex md:flex-row-reverse">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-gray-50 to-gray-200 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 404" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number Four Hundred Four</h3>
                        <p class="text-gray-600 mb-6">Famous as the HTTP status code for "Not Found". In mathematics, it's a palindrome and a strobogrammatic number (reads the same upside down on a calculator).</p>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <span>Mathematical Properties: Composite, Palindromic, Strobogrammatic</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Final Section with last number -->
        <section id="section-1280" class="mb-16 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 pb-3 border-b-2 border-green-500">Final Number 1280</h2>
            
            <!-- Item 1280: Image on left, description on right -->
            <div class="number-item bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <div class="h-64 md:h-full overflow-hidden bg-gradient-to-br from-yellow-50 to-orange-100 p-8 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Number 1280" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Number One Thousand Two Hundred Eighty</h3>
                        <p class="text-gray-600 mb-6">A highly composite number with many divisors. In computing, 1280×720 is a common screen resolution (720p HD). It's also 2^8 × 5, making it significant in binary systems.</p>
                        <div class="flex items-center text-yellow-700">
                            <i class="fas fa-trophy mr-2"></i>
                            <span>Mathematical Properties: Composite, Abundant, 2^8 × 5</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <!-- JavaScript -->
    <script>
        // Smooth scrolling to sections
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                window.scrollTo({
                    top: section.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        }
        
        // Scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        
        // Add animation to sections when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, { threshold: 0.1 });
        
        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
        
        // Number item click functionality
        document.querySelectorAll('.number-item').forEach(item => {
            item.addEventListener('click', function() {
                const title = this.querySelector('h3').textContent;
                alert(`Selected: ${title}`);
            });
        });
        
        // Learn More button functionality
        document.querySelector('button:contains("LEARN MORE")').addEventListener('click', function() {
            alert("Redirecting to learn more about our waste disposal services...");
        });
    </script>
</body>
</html>