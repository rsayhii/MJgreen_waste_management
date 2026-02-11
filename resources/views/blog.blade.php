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
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
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
<body class="bg-gray-50">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-2 md:py-6">
        <div class="absolute top-10 right-10 opacity-10">
            <i class="fas fa-leaf text-9xl text-emerald-400"></i>
        </div>
        <div class="absolute bottom-10 left-10 opacity-10">
            <i class="fas fa-seedling text-7xl text-green-400"></i>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-pen-nib mr-2"></i> Sustainable Insights
                </span>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 font-serif">
                    Our <span class="gradient-text">Green</span> Blog
                </h1>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Discover articles, tips, and stories about sustainable living, environmental innovation, and creating a greener future.
                </p>
                
<!-- Search Bar -->
<div class="max-w-3xl mx-auto">
    <div class="relative group">

        <!-- Input -->
        <input type="text" placeholder="Search articles..." 
            class="w-full pl-12 pr-28 py-2.5 
                   bg-white/40 backdrop-blur-md 
                   border border-white/30 
                   rounded-full 
                   shadow-md
                   focus:bg-white/60 
                   focus:border-emerald-500 
                   focus:ring-2 focus:ring-emerald-300
                   transition-all duration-300">

        <!-- Search Icon -->
        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within:text-emerald-600 transition-colors"></i>

        <!-- Button -->
        <button class="absolute right-2 top-1/2 -translate-y-1/2 
                       bg-emerald-600 hover:bg-emerald-700 
                       text-white px-5 py-1.5 
                       rounded-full text-sm 
                       shadow-md
                       transition-all duration-300 
                       hover:scale-105">
            Search
        </button>

    </div>
</div>





            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="py-12 md:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-10">
                <!-- Blog Posts Section -->
                <div class="lg:w-2/3">
                    <!-- Featured Post -->
                    <div class="mb-12 animate-fadeInUp">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg blog-card">
                            <div class="md:flex">
                                <div class="md:w-2/5 relative">
                                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Urban Farming"
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
                                            Urban Farming
                                        </span>
                                        <span class="text-gray-500 text-sm">
                                            <i class="far fa-clock mr-1"></i> 8 min read
                                        </span>
                                    </div>
                                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 font-serif">
                                        Transforming Cities with Rooftop Gardens
                                    </h2>
                                    <p class="text-gray-600 mb-6">
                                        Discover how urban agriculture is revolutionizing city landscapes, reducing carbon footprints, and creating sustainable food sources in metropolitan areas.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white font-semibold">
                                                MJ
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-900">Michael Jordan</p>
                                                <p class="text-sm text-gray-500">Sustainability Expert</p>
                                            </div>
                                        </div>
                                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium flex items-center">
                                            Read More <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <!-- Blog Posts Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Post 1 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" 
                                     alt="Renewable Energy"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full tag">
                                        Energy
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Mar 15, 2024
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 6 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    The Future of Solar Energy in Residential Areas
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Exploring how solar panel technology is becoming more accessible for homeowners and its impact on energy consumption.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            SJ
                                        </div>
                                        <span class="text-sm text-gray-700">Sarah Johnson</span>
                                    </div>
                                    <a href="#" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Post 2 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                     alt="Zero Waste"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full tag">
                                        Lifestyle
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Mar 10, 2024
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 10 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    Zero Waste Living: A Practical Guide for Beginners
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Step-by-step guide to reducing household waste, with actionable tips and sustainable product recommendations.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            AR
                                        </div>
                                        <span class="text-sm text-gray-700">Alex Rivera</span>
                                    </div>
                                    <a href="#" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Post 3 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                     alt="Sustainable Architecture"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-semibold rounded-full tag">
                                        Architecture
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Mar 5, 2024
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 12 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    Eco-Friendly Building Materials Revolution
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    Innovative materials that are changing construction industry, from bamboo to recycled plastics and sustainable concrete.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            MJ
                                        </div>
                                        <span class="text-sm text-gray-700">Michael Jordan</span>
                                    </div>
                                    <a href="#" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Post 4 -->
                        <article class="bg-white rounded-xl overflow-hidden shadow-md blog-card">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/5712211/pexels-photo-5712211.jpeg" 
                                     alt="Water Conservation"
                                     class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 bg-cyan-100 text-cyan-700 text-xs font-semibold rounded-full tag">
                                        Conservation
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-3">
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-calendar mr-1"></i> Feb 28, 2024
                                    </span>
                                    <span class="text-gray-500 text-xs">
                                        <i class="far fa-clock mr-1"></i> 7 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">
                                    Smart Water Management Systems for Homes
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    How technology is helping households reduce water consumption with intelligent monitoring and recycling systems.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                            TC
                                        </div>
                                        <span class="text-sm text-gray-700">Taylor Chen</span>
                                    </div>
                                    <a href="#" class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                        Read <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-12">
                        <button class="px-8 py-3 bg-white border border-emerald-600 text-emerald-600 hover:bg-emerald-50 rounded-xl font-medium transition-colors">
                            <i class="fas fa-sync-alt mr-2"></i> Load More Articles
                        </button>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3">
                    <!-- About Card -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-serif">About Our Blog</h3>
                        <p class="text-gray-600 mb-6">
                            Welcome to MJ GREENS Blog, where we explore sustainable living, environmental innovation, and green technology. Our mission is to inspire positive change through knowledge and practical solutions.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <div class="text-3xl font-bold text-emerald-600">120+</div>
                                <div class="text-sm text-gray-500">Articles Published</div>
                            </div>
                            <div class="flex-1">
                                <div class="text-3xl font-bold text-emerald-600">45K+</div>
                                <div class="text-sm text-gray-500">Monthly Readers</div>
                            </div>
                            <div class="flex-1">
                                <div class="text-3xl font-bold text-emerald-600">18</div>
                                <div class="text-sm text-gray-500">Expert Writers</div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 font-serif">Categories</h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center justify-between p-3 rounded-lg hover:bg-emerald-50 transition-colors group">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-emerald-200">
                                        <i class="fas fa-solar-panel text-emerald-600"></i>
                                    </div>
                                    <span class="font-medium text-gray-700">Renewable Energy</span>
                                </div>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded">24</span>
                            </a>
                            <a href="#" class="flex items-center justify-between p-3 rounded-lg hover:bg-emerald-50 transition-colors group">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-emerald-200">
                                        <i class="fas fa-recycle text-emerald-600"></i>
                                    </div>
                                    <span class="font-medium text-gray-700">Waste Management</span>
                                </div>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded">18</span>
                            </a>
                            <a href="#" class="flex items-center justify-between p-3 rounded-lg hover:bg-emerald-50 transition-colors group">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-emerald-200">
                                        <i class="fas fa-leaf text-emerald-600"></i>
                                    </div>
                                    <span class="font-medium text-gray-700">Sustainable Living</span>
                                </div>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded">32</span>
                            </a>
                            <a href="#" class="flex items-center justify-between p-3 rounded-lg hover:bg-emerald-50 transition-colors group">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-emerald-200">
                                        <i class="fas fa-building text-emerald-600"></i>
                                    </div>
                                    <span class="font-medium text-gray-700">Green Architecture</span>
                                </div>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded">15</span>
                            </a>
                            <a href="#" class="flex items-center justify-between p-3 rounded-lg hover:bg-emerald-50 transition-colors group">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-emerald-200">
                                        <i class="fas fa-seedling text-emerald-600"></i>
                                    </div>
                                    <span class="font-medium text-gray-700">Urban Farming</span>
                                </div>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded">22</span>
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
                                #GreenTech
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-red-50 text-red-700 rounded-full text-sm font-medium hover:bg-red-100 transition-colors tag">
                                #Conservation
                            </a>
                            <a href="#" class="px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-full text-sm font-medium hover:bg-indigo-100 transition-colors tag">
                                #Renewables
                            </a>
                        </div>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl shadow-lg p-6">
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
                    </div>
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
        const loadMoreButton = document.querySelector('button:contains("Load More Articles")');
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
</body>
</html>