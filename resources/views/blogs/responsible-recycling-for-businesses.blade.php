<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power of Responsible Recycling | MJ GREENS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .article-content h2 { font-size: 1.75rem; font-weight: 700; color: #111827; margin-top: 2rem; margin-bottom: 1rem; line-height: 1.3; }
        .article-content p { font-size: 1.125rem; line-height: 1.7; color: #4b5563; margin-bottom: 1.5rem; }
    </style>
</head>
<body class="bg-gray-50">
    <x-hero 
      title="The Power of Responsible Recycling for Businesses"
      subtitle="Why industries and businesses should partner with MJ Greens for efficient recycling and responsible waste management."
      bg="https://images.pexels.com/photos/1549528/pexels-photo-1549528.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    />

    <main class="py-12 md:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-10">
                <!-- Blog Content Section -->
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-8">
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Business</span>
                            <span class="text-gray-500 text-sm"><i class="far fa-calendar mr-1"></i> Feb 10, 2026</span>
                            <span class="text-gray-500 text-sm"><i class="far fa-clock mr-1"></i> 7 min read</span>
                        </div>

                        <div class="article-content">
                            <p class="text-xl text-gray-600 font-medium mb-8 leading-relaxed italic">
                                For modern businesses, recycling is no longer just a checkbox; it's a strategic advantage that builds brand value and operational efficiency.
                            </p>

                            <h2>The Business Case for Recycling</h2>
                            <p>Companies that prioritize responsible recycling often see immediate benefits in reduced waste disposal costs and improved employee morale. Moreover, customers are increasingly choosing to support brands that demonstrate a clear commitment to environmental stewardship.</p>

                            <h2>Implementing a Corporate Recycling Program</h2>
                            <p>A successful program starts with a waste audit. MJ Greens helps businesses identify their primary waste streams and implement customized collection and processing solutions that maximize recovery rates.</p>

                            <blockquote>
                                "Sustainability is the new competitive edge in the corporate world."
                            </blockquote>

                            <h2>Closing the Loop</h2>
                            <p>True sustainability involves more than just recycling; it's about moving towards a circular economy. We work with our corporate partners to find ways to reintegrate recycled materials back into their own supply chains.</p>
                        </div>

                        <div class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white font-semibold">MJ</div>
                                <div>
                                    <p class="font-bold text-gray-900">MJ GREENS</p>
                                    <p class="text-sm text-gray-500">Recycling Expert</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-emerald-500 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-emerald-500 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="{{ route('blog') }}" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition">
                            <i class="fas fa-arrow-left mr-2"></i> Back to Blog
                        </a>
                    </div>
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
                            <a href="#" class="px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-sm font-medium hover:bg-emerald-100 transition-colors">#Sustainability</a>
                            <a href="#" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-100 transition-colors">#ClimateChange</a>
                            <a href="#" class="px-3 py-1.5 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition-colors">#EcoFriendly</a>
                            <a href="#" class="px-3 py-1.5 bg-amber-50 text-amber-700 rounded-full text-sm font-medium hover:bg-amber-100 transition-colors">#ZeroWaste</a>
                            <a href="#" class="px-3 py-1.5 bg-cyan-50 text-cyan-700 rounded-full text-sm font-medium hover:bg-cyan-100 transition-colors">#CleanEnergy</a>
                            <a href="#" class="px-3 py-1.5 bg-purple-50 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-100 transition-colors">#SmartWaste</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
</body>
</html>