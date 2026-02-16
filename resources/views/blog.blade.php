<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | MJ GREENS - Sustainable Insights</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
        
        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Card Hover Effects */
        .blog-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        
        /* Tag Styles */
        .tag {
            transition: all 0.2s ease;
        }
        
        .tag:hover {
            transform: scale(1.05);
        }
        
      
        
        /* Article Content Styling */
        .article-content h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #111827;
            margin-top: 2rem;
            margin-bottom: 1rem;
            line-height: 1.3;
        }
        
        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1f2937;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        
        .article-content p {
            font-size: 1.125rem;
            line-height: 1.7;
            color: #4b5563;
            margin-bottom: 1.5rem;
        }
        
        .article-content ul, .article-content ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        
        .article-content li {
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }
        
        .article-content blockquote {
            border-left: 4px solid #10b981;
            padding-left: 1.5rem;
            font-style: italic;
            color: #6b7280;
            margin: 2rem 0;
            font-size: 1.25rem;
        }
        
        /* Reading Progress Bar */
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(to right, #10b981, #34d399);
            z-index: 9999;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body>
   
    <x-hero 
      title="Our Green Blog"
      subtitle="Discover articles, tips, and stories about sustainable living, environmental innovation, and creating a greener future."
      bg="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=1200&auto=format&fit=crop"
      leftImage="https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=200&auto=format&fit=crop"
      leftTitle="Editor's Pick"
      leftText="Weekly highlight on sustainability breakthroughs and practical tips."
      leftLinkHref="#"
      leftLinkLabel="Read Now →"
      rightQuote="Good stories change minds. Green stories change the world."
      rightAuthor="Editorial Team"
      rightMeta="MJ GREENS"
    />
   

    <!-- Main Content -->
    <main class="py-12 md:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-10">
                <!-- Blog Posts Section -->
                <div class="lg:w-2/3">

                 <!-- Recent Posts Title -->
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 font-serif">Recent Articles</h2>
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-500 text-sm">Sort by:</span>
                            <select class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200">
                                <option>Latest</option>
                                <option>Most Popular</option>
                                <option>Trending</option>
                            </select>
                        </div>
                    </div>
                    <!-- Featured Post -->
                    <div class="mb-12 animate-fadeInUp">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg blog-card">
                            <div class="md:flex">
                                <div class="md:w-2/5 relative">
                                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Smart Waste Management"
                                         class="w-full h-64 md:h-full object-cover">
                                    <div class="absolute top-4 left-4">
                                        <span class="px-3 py-1 bg-emerald-600 text-white text-xs font-semibold rounded-full">
                                            Featured
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-3/5 p-8">
                                    <div class="flex items-center space-x-4 mb-4">
                                        <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full">
                                            Smart Solutions
                                        </span>
                                        <span class="text-gray-500 text-sm">
                                            <i class="far fa-clock mr-1"></i> 8 min read
                                        </span>
                                    </div>
                                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 font-serif">
                                        Revolutionizing Waste Management: MJ Greens' Smart Solutions
                                    </h2>
                                    <p class="text-gray-600 mb-6">
                                        Discover how MJ Greens Infra Private Limited is implementing IoT and smart technology in waste collection and disposal to create cleaner, more efficient urban environments.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white font-semibold">
                                                MJ
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-900">MJ GREENS</p>
                                                <p class="text-sm text-gray-500">Infrastructure Expert</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog.revolutionizing-waste-management') }}" class="text-emerald-600 hover:text-emerald-700 font-medium flex items-center">
                                            Read More <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    <!-- Blog Posts Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Post 1 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                                     alt="Sustainable Infrastructure"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full tag">
                                        Infrastructure
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Feb 15, 2026
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 6 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    Sustainable Infrastructure: Building a Cleaner Tomorrow
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    MJ Greens' approach to eco-friendly infrastructure and its impact on the environment through sustainable practices.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            MJ
                                        </div>
                                        <span class="text-sm text-gray-700">MJ Team</span>
                                    </div>
                                    <a href="{{ route('blog.sustainable-infrastructure') }}" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Post 2 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/1549528/pexels-photo-1549528.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                                     alt="Responsible Recycling"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full tag">
                                        Recycling
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Feb 10, 2026
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 10 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    The Power of Responsible Recycling for Businesses
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Why industries and businesses should partner with MJ Greens for efficient recycling and responsible waste management.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            MJ
                                        </div>
                                        <span class="text-sm text-gray-700">MJ Expert</span>
                                    </div>
                                    <a href="{{ route('blog.responsible-recycling-for-businesses') }}" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Post 3 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                                     alt="Eco-Friendly Home"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-semibold rounded-full tag">
                                        Lifestyle
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Feb 05, 2026
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 12 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    Eco-Friendly Practices for a Greener Home
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Practical tips from MJ Greens for residential waste reduction and responsible disposal in every household.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            MJ
                                        </div>
                                        <span class="text-sm text-gray-700">MJ Greens</span>
                                    </div>
                                    <a href="{{ route('blog.eco-friendly-home-practices') }}" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Post 4 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/2990644/pexels-photo-2990644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                                     alt="Sustainable Collection"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-cyan-100 text-cyan-700 text-xs font-semibold rounded-full tag">
                                        Collection
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Jan 28, 2026
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 7 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    Sustainable Collection: Reducing Carbon Footprint
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    How MJ Greens' collection systems are optimized for minimum environmental impact and maximum community cleanliness.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            MJ
                                        </div>
                                        <span class="text-sm text-gray-700">MJ Team</span>
                                    </div>
                                    <a href="{{ route('blog.sustainable-collection') }}" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Load More Button -->
                    <!-- <div class="text-center mt-12">
                        <button class="px-8 py-3 bg-white border border-emerald-600 text-emerald-600 hover:bg-emerald-50 rounded-xl font-medium transition-colors">
                            <i class="fas fa-sync-alt mr-2"></i> Load More Articles
                        </button>
                    </div> -->
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3">
                    

                    <!-- Recent Blogs -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-serif">Recent Blogs</h3>
                        <div class="space-y-6">
                            <a href="{{ route('blog.revolutionizing-waste-management') }}" class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Smart Waste" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 leading-tight group-hover:text-emerald-600 transition-colors">Revolutionizing Waste Management: MJ Greens' Smart Solutions</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 18, 2026</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('blog.sustainable-infrastructure') }}" class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                    <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Infrastructure" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 leading-tight group-hover:text-emerald-600 transition-colors">Sustainable Infrastructure: Building a Cleaner Tomorrow</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 15, 2026</p>
                                </div>
                            </a>

                            <a href="{{ route('blog.responsible-recycling-for-businesses') }}" class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                    <img src="https://images.pexels.com/photos/1549528/pexels-photo-1549528.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recycling" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 leading-tight group-hover:text-emerald-600 transition-colors">The Power of Responsible Recycling for Businesses</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 10, 2026</p>
                                </div>
                            </a>

                            <a href="{{ route('blog.eco-friendly-home-practices') }}" class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                    <img src="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Eco Home" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 leading-tight group-hover:text-emerald-600 transition-colors">Eco-Friendly Practices for a Greener Home</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 05, 2026</p>
                                </div>
                            </a>

                            <a href="{{ route('blog.sustainable-collection') }}" class="flex items-start gap-4 group">
                                <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                    <img src="https://images.pexels.com/photos/2990644/pexels-photo-2990644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Collection" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 leading-tight group-hover:text-emerald-600 transition-colors">Sustainable Collection: Reducing Carbon Footprint</h4>
                                    <p class="text-xs text-gray-500 mt-1">Jan 28, 2026</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-serif">Popular Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-sm font-medium hover:bg-emerald-100 transition-colors tag">
                                #Sustainability
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-100 transition-colors tag">
                                #ClimateChange
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition-colors tag">
                                #EcoFriendly
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-amber-50 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-100 transition-colors tag">
                                #ZeroWaste
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-cyan-50 text-cyan-700 rounded-full text-sm font-medium hover:bg-cyan-100 transition-colors tag">
                                #CleanEnergy
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-purple-50 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-100 transition-colors tag">
                                #SmartWaste
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-red-50 text-red-700 rounded-full text-sm font-medium hover:bg-red-100 transition-colors tag">
                                #UrbanCleanliness
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-full text-sm font-medium hover:bg-indigo-100 transition-colors tag">
                                #WasteRecycling
                            </a>
                        </div>
                    </div>

                    <!-- Newsletter Subscription -->
                    <!-- <div class="bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-bold text-white mb-4 font-serif">Stay Updated</h3>
                        <p class="text-emerald-100 mb-6">
                            Subscribe to our newsletter for the latest articles, tips, and insights on sustainable living.
                        </p>
                        <form class="space-y-4">
                            <input type="email" placeholder="Your email address" 
                                   class="w-full px-4 py-3 rounded-lg bg-white/20 backdrop-blur-sm border border-white/30 text-white placeholder-emerald-200 focus:outline-none focus:ring-2 focus:ring-white/50">
                            <button type="submit" class="w-full bg-white text-emerald-600 hover:bg-emerald-50 font-semibold py-3 rounded-lg transition-colors">
                                Subscribe Now
                            </button>
                        </form>
                        <p class="text-emerald-100 text-xs mt-4 text-center">
                            No spam. Unsubscribe anytime.
                        </p>
                    </div> -->
                </div>
            </div>
        </div>
    </main>

    <script>
        // Newsletter Form Submission
        const newsletterForm = document.querySelector('.bg-gradient-to-br form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const emailInput = newsletterForm.querySelector('input[type="email"]');
                
                if (emailInput.value) {
                    // Show success message
                    alert('Thank you for subscribing to our newsletter!');
                    emailInput.value = '';
                }
            });
        }

        // Search functionality
        const searchInput = document.querySelector('input[placeholder="Search articles..."]');
        const searchButton = searchInput?.nextElementSibling;

        if (searchButton) {
            searchButton.addEventListener('click', () => {
                if (searchInput.value.trim()) {
                    alert(`Searching for: "${searchInput.value}"`);
                    // In a real app, you would redirect to search results or filter articles
                }
            });

            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && searchInput.value.trim()) {
                    alert(`Searching for: "${searchInput.value}"`);
                    e.preventDefault();
                }
            });
        }

        // Tag click animation
        document.querySelectorAll('.tag').forEach(tag => {
            tag.addEventListener('click', (e) => {
                // Add a ripple effect
                const ripple = document.createElement('span');
                const rect = tag.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.7);
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    top: ${y}px;
                    left: ${x}px;
                `;
                
                tag.style.position = 'relative';
                tag.style.overflow = 'hidden';
                tag.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation to CSS
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Load More Articles functionality
        const loadMoreButton = Array.from(document.querySelectorAll('button')).find(b => b.textContent.trim().includes('Load More Articles'));
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', () => {
                loadMoreButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Loading...';
                loadMoreButton.disabled = true;
                
                // Simulate loading more articles
                setTimeout(() => {
                    alert('More articles would load here in a real implementation!');
                    loadMoreButton.innerHTML = '<i class="fas fa-sync-alt mr-2"></i> Load More Articles';
                    loadMoreButton.disabled = false;
                }, 1500);
            });
        }

        // Sort functionality
        const sortSelect = document.querySelector('select');
        if (sortSelect) {
            sortSelect.addEventListener('change', () => {
                const selectedOption = sortSelect.value;
                alert(`Articles sorted by: ${selectedOption}`);
                // In a real app, you would reorder or filter the articles
            });
        }

        // Animate blog cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);

        // Observe blog cards
        document.querySelectorAll('.blog-card').forEach(card => {
            observer.observe(card);
        });

        // Category item hover effect enhancement
        document.querySelectorAll('.space-y-3 a').forEach(item => {
            item.addEventListener('mouseenter', () => {
                const icon = item.querySelector('.w-8.h-8');
                icon.classList.add('transform', 'scale-110');
            });
            
            item.addEventListener('mouseleave', () => {
                const icon = item.querySelector('.w-8.h-8');
                icon.classList.remove('transform', 'scale-110');
            });
        });
    </script>
    <x-footer />
</body>
</html>
