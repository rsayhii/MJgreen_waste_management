<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career at MJ GREENS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes progressBar {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.5s ease forwards;
        }
        
        .animate-progressBar {
            animation: progressBar 2s ease-in-out forwards;
        }
        
        
        
        /* Leaf Decoration */
        .leaf-decoration {
            position: absolute;
            opacity: 0.1;
            z-index: -1;
            pointer-events: none;
        }
        
        /* File Upload Hover Effect */
        .file-upload-hover {
            transition: all 0.3s ease;
        }
        
        .file-upload-hover:hover {
            border-color: #81c784 !important;
            background-color: #f1f8e9 !important;
            transform: translateY(-2px);
        }
        
        /* FAQ Transition */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        
        /* Button Shine Effect */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        
        .btn-shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: 0.5s;
        }
        
        .btn-shine:hover::before {
            left: 100%;
        }
    </style>
</head>
<body>
   
    <x-hero
      title="Join MJ GREENS"
      subtitle="Start your journey with us and contribute to a greener, more sustainable future."
      bg="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=1200&auto=format&fit=crop"
      leftImage="https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=200&auto=format&fit=crop"
      leftTitle="Open Roles"
      leftText="We’re hiring across engineering, operations, and community programs."
      leftLinkHref="#"
      leftLinkLabel="View Jobs →"
      rightQuote="Purpose-driven work with real-world impact on communities and the environment."
      rightAuthor="HR Team"
      rightMeta="MJ GREENS"
    />

    <!-- Leaf Decorations -->
    <div class="leaf-decoration top-8 right-8 text-7xl text-green-400 transform rotate-12">
        <i class="fas fa-leaf"></i>
    </div>
    <div class="leaf-decoration bottom-8 left-8 text-5xl text-emerald-300 transform -rotate-6">
        <i class="fas fa-leaf"></i>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col lg:flex-row gap-12 items-stretch">
            <!-- Why Work With Us - LEFT SIDE -->
            <div class="lg:w-1/2">
                <div class="bg-green-50 rounded-3xl p-8 md:p-10 h-full relative overflow-hidden">
                    <!-- Decorative background element -->
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-emerald-50 rounded-full blur-3xl opacity-60"></div>
                    
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 font-serif flex items-center gap-3">
                            <span class="w-12 h-1 bg-emerald-500 rounded-full"></span>
                            Why Work With Us
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6 mt-8">
                            <!-- Benefit 1 -->
                            <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-emerald-50/50 transition-all duration-300 group border border-transparent hover:border-emerald-100">
                                <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                    <i class="fas fa-leaf text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-emerald-700 transition-colors">Sustainability Focus</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">We're committed to environmental sustainability in all our projects and operations. Join us in making a real difference.</p>
                                </div>
                            </div>
                            
                            <!-- Benefit 2 -->
                            <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-blue-50/50 transition-all duration-300 group border border-transparent hover:border-blue-100">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-blue-700 transition-colors">Collaborative Culture</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">We foster a supportive, inclusive environment where teamwork and open communication are valued.</p>
                                </div>
                            </div>
                            
                            <!-- Benefit 3 -->
                            <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-amber-50/50 transition-all duration-300 group border border-transparent hover:border-amber-100">
                                <div class="flex-shrink-0 w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600 group-hover:bg-amber-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                    <i class="fas fa-chart-line text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-amber-700 transition-colors">Career Growth</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">We invest in our employees' development with training programs and opportunities for advancement.</p>
                                </div>
                            </div>
                            
                            <!-- Benefit 4 -->
                            <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-purple-50/50 transition-all duration-300 group border border-transparent hover:border-purple-100">
                                <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 group-hover:bg-purple-500 group-hover:text-white transition-all duration-500 shadow-sm">
                                    <i class="fas fa-award text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-purple-700 transition-colors">Innovation & Excellence</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed">We encourage creative thinking and reward excellence in all areas of our work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Apply Now Form - RIGHT SIDE -->
            <div class="lg:w-1/2">
                <div class="bg-green-50 rounded-3xl p-8 md:p-10  relative overflow-hidden">
                    <!-- Decorative background element -->
                    <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-emerald-50 rounded-full blur-3xl opacity-60"></div>

                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-2 font-serif flex items-center gap-3">
                            <span class="w-12 h-1 bg-emerald-500 rounded-full"></span>
                            Apply Now
                        </h2>
                        <p class="text-gray-500 mb-8 ml-15">Take the first step towards your dream career.</p>
                        
                        <form id="careerForm" class="space-y-6" novalidate>
                            <!-- Name Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-semibold text-gray-700 mb-2">
                                        First Name <span class="text-emerald-500">*</span>
                                    </label>
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors group-focus-within:text-emerald-500 z-10">
                                            <i class="fas fa-user text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="text" id="firstName" name="firstName" required
                                               class="w-full pl-11 pr-4 py-3.5 text-gray-700 border border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all duration-300 bg-white"
                                               placeholder="John">
                                    </div>
                                    <div id="firstNameError" class="text-red-500 text-xs mt-2 hidden flex items-center gap-1">
                                        <i class="fas fa-exclamation-circle"></i> Please enter your first name
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="lastName" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Last Name <span class="text-emerald-500">*</span>
                                    </label>
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors group-focus-within:text-emerald-500 z-10">
                                            <i class="fas fa-user text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="text" id="lastName" name="lastName" required
                                               class="w-full pl-11 pr-4 py-3.5 text-gray-700 border border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all duration-300 bg-white"
                                               placeholder="Doe">
                                    </div>
                                    <div id="lastNameError" class="text-red-500 text-xs mt-2 hidden flex items-center gap-1">
                                        <i class="fas fa-exclamation-circle"></i> Please enter your last name
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Email Address <span class="text-emerald-500">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors group-focus-within:text-emerald-500 z-10">
                                        <i class="fas fa-envelope text-gray-400 text-sm"></i>
                                    </div>
                                    <input type="email" id="email" name="email" required
                                           class="w-full pl-11 pr-4 py-3.5 text-gray-700 border border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all duration-300 bg-white"
                                           placeholder="john.doe@example.com">
                                </div>
                                <div id="emailError" class="text-red-500 text-xs mt-2 hidden flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> Please enter a valid email address
                                </div>
                            </div>
                            
                            <!-- Phone Field -->
                            <!-- Position -->
                            <div>
                                <label for="position" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Position Applying For <span class="text-emerald-500">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors group-focus-within:text-emerald-500 z-10">
                                        <i class="fas fa-briefcase text-gray-400 text-sm"></i>
                                    </div>
                                    <select id="position" name="position" required
                                            class="w-full pl-11 pr-10 py-3.5 text-gray-700 border border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all duration-300 bg-white appearance-none">
                                        <option value="" disabled selected>Select a position</option>
                                        <option value="Environmental Consultant">Environmental Consultant</option>
                                        <option value="Sustainability Specialist">Sustainability Specialist</option>
                                        <option value="Field Researcher">Field Researcher</option>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="Operations Associate">Operations Associate</option>
                                        <option value="General Application">General Application</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none z-10">
                                        <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Phone Number <span class="text-emerald-500">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors group-focus-within:text-emerald-500 z-10">
                                        <i class="fas fa-phone text-gray-400 text-sm"></i>
                                    </div>
                                    <input type="tel" id="phone" name="phone" required
                                           class="w-full pl-11 pr-4 py-3.5 text-gray-700 border border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all duration-300 bg-white"
                                           placeholder="+91 00000 00000">
                                </div>
                                <div id="phoneError" class="text-red-500 text-xs mt-2 hidden flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> Please enter a valid phone number
                                </div>
                            </div>
                            
                            <!-- About Yourself -->
                            <div>
                                <label for="about" class="block text-sm font-semibold text-gray-700 mb-2">
                                    About Yourself <span class="text-emerald-500">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="absolute top-4 left-4 pointer-events-none transition-colors group-focus-within:text-emerald-500 z-10">
                                        <i class="fas fa-comment-alt text-gray-400 text-sm"></i>
                                    </div>
                                    <textarea id="about" name="about" required rows="4"
                                              class="w-full pl-11 pr-4 py-3.5 text-gray-700 border border-gray-200 rounded-xl focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all duration-300 bg-white"
                                              placeholder="Tell us about your background and experience..."></textarea>
                                </div>
                                <div id="aboutError" class="text-red-500 text-xs mt-2 hidden flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle"></i> Please tell us something about yourself
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" id="submitBtn"
                                    class="w-full bg-emerald-600 text-white font-bold py-4 px-6 rounded-2xl shadow-xl shadow-emerald-200 hover:bg-emerald-700 transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-3 group">
                                <span>Submit via WhatsApp</span>
                                <i class="fab fa-whatsapp text-xl group-hover:scale-110 transition-transform"></i>
                            </button>
                            
                            <!-- Success Message -->
                            <div id="successMessage" class="p-4 bg-emerald-50 border border-emerald-100 rounded-2xl hidden animate-fadeIn">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900 text-sm">Redirecting to WhatsApp...</p>
                                        <p class="text-gray-600 text-xs">Please complete the submission in the WhatsApp chat.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="mt-20">
            <div class=" rounded-3xl  bg-green-50  p-8 md:p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-50 rounded-full blur-3xl opacity-60 -mr-32 -mt-32"></div>
                
                <div class="relative z-10">
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-4 font-serif">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-gray-500 text-center mb-12 max-w-2xl mx-auto">Everything you need to know about joining our team and the impact we create together.</p>
                    
                    <div class="max-w-4xl mx-auto space-y-4">
                        <!-- FAQ 1 -->
                        <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden hover:border-emerald-200 transition-all duration-300">
                            <div class="faq-question p-6 cursor-pointer flex justify-between items-center group">
                                <h3 class="font-bold text-gray-900 text-lg group-hover:text-emerald-600 transition-colors">What types of positions are available at MJ GREENS?</h3>
                                <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                    <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                                </div>
                            </div>
                            <div class="faq-answer">
                                <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                                <p class="mb-2 text-sm">We offer a wide range of positions across various departments including:</p>
                                <ul class="list-disc pl-4 space-y-1 text-sm">
                                    <li><span class="font-semibold text-green-700">Sustainability & Environmental Management</span> - Roles focused on environmental impact assessment and green initiatives</li>
                                    <li><span class="font-semibold text-green-700">Research & Development</span> - Positions in renewable energy and sustainable materials</li>
                                    <li><span class="font-semibold text-green-700">Operations & Project Management</span> - Roles overseeing sustainable projects</li>
                                    <li><span class="font-semibold text-green-700">Marketing & Communications</span> - Positions promoting our sustainability mission</li>
                                    <li><span class="font-semibold text-green-700">Administrative & Support</span> - Various roles supporting our mission-driven work</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 2 -->
                    <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden hover:border-emerald-200 transition-all duration-300">
                        <div class="faq-question p-6 cursor-pointer flex justify-between items-center group">
                            <h3 class="font-bold text-gray-900 text-lg group-hover:text-emerald-600 transition-colors">What is the typical hiring process at MJ GREENS?</h3>
                            <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                                <p class="mb-2 text-sm">Our hiring process typically involves:</p>
                                <ol class="list-decimal pl-4 space-y-1 mb-2 text-sm">
                                    <li><span class="font-bold text-emerald-600">Application Review</span> - Within 5-7 business days</li>
                                    <li><span class="font-bold text-emerald-600">Initial Screening</span> - Brief phone or video screening</li>
                                    <li><span class="font-bold text-emerald-600">Skills Assessment</span> - Task or assessment based on role</li>
                                    <li><span class="font-bold text-emerald-600">Interviews</span> - 2-3 rounds with team members</li>
                                    <li><span class="font-bold text-emerald-600">Reference Checks</span> - For final candidates</li>
                                    <li><span class="font-bold text-emerald-600">Offer</span> - Formal offer letter</li>
                                </ol>
                                <p class="text-sm">The entire process usually takes 2-4 weeks from application to offer.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 3 -->
                    <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden hover:border-emerald-200 transition-all duration-300">
                        <div class="faq-question p-6 cursor-pointer flex justify-between items-center group">
                            <h3 class="font-bold text-gray-900 text-lg group-hover:text-emerald-600 transition-colors">What qualifications do I need to work at MJ GREENS?</h3>
                            <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                                <p class="mb-2 text-sm">Qualifications vary by position, but generally we look for:</p>
                                <ul class="list-disc pl-4 space-y-1 text-sm">
                                    <li><span class="font-bold text-emerald-600">Education</span> - Relevant degree or equivalent experience</li>
                                    <li><span class="font-bold text-emerald-600">Experience</span> - Practical experience in your field</li>
                                    <li><span class="font-bold text-emerald-600">Skills</span> - Technical skills plus strong communication abilities</li>
                                    <li><span class="font-bold text-emerald-600">Passion for Sustainability</span> - Genuine interest in environmental issues</li>
                                    <li><span class="font-bold text-emerald-600">Alignment with Values</span> - Commitment to our sustainability mission</li>
                                </ul>
                                <p class="mt-2 text-sm font-medium text-emerald-600">We value diverse backgrounds - if you're passionate about sustainability, we encourage you to apply!</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 4 -->
                    <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden hover:border-emerald-200 transition-all duration-300">
                        <div class="faq-question p-6 cursor-pointer flex justify-between items-center group">
                            <h3 class="font-bold text-gray-900 text-lg group-hover:text-emerald-600 transition-colors">What benefits does MJ GREENS offer to employees?</h3>
                            <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                                <p class="mb-2 text-sm">We offer a comprehensive benefits package including:</p>
                                <ul class="list-disc pl-4 space-y-1 text-sm">
                                    <li><span class="font-bold text-emerald-600">Health & Wellness</span> - Comprehensive medical, dental, and vision insurance</li>
                                    <li><span class="font-bold text-emerald-600">Financial Security</span> - Competitive salaries, retirement plans with company matching</li>
                                    <li><span class="font-bold text-emerald-600">Work-Life Balance</span> - Flexible working hours, remote work options</li>
                                    <li><span class="font-bold text-emerald-600">Professional Development</span> - Training programs, mentorship opportunities</li>
                                    <li><span class="font-bold text-emerald-600">Sustainability Perks</span> - Green commuting benefits, eco-friendly office spaces</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification Toast -->
    <div id="notification" class="fixed bottom-4 right-4 bg-green-600 text-white p-3 rounded-lg shadow-xl transform translate-y-24 opacity-0 transition-all duration-500 flex items-center space-x-2 z-50 max-w-xs">
        <i class="fas fa-info-circle text-base"></i>
        <div>
            <p id="notificationText" class="font-medium text-sm"></p>
        </div>
    </div>

    <script>
        // DOM Elements
        const careerForm = document.getElementById('careerForm');
        const submitBtn = document.getElementById('submitBtn');
        const successMessage = document.getElementById('successMessage');
        const notification = document.getElementById('notification');
        const notificationText = document.getElementById('notificationText');
        
        // Form validation elements
        const firstNameInput = document.getElementById('firstName');
        const lastNameInput = document.getElementById('lastName');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const aboutInput = document.getElementById('about');
        
        const firstNameError = document.getElementById('firstNameError');
        const lastNameError = document.getElementById('lastNameError');
        const emailError = document.getElementById('emailError');
        const phoneError = document.getElementById('phoneError');
        const aboutError = document.getElementById('aboutError');
        
        // FAQ Elements
        const faqItems = document.querySelectorAll('.faq-item');
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        // Initialize first FAQ as open
        if (faqItems.length > 0) {
            faqItems[0].classList.add('active');
            const firstAnswer = faqItems[0].querySelector('.faq-answer');
            firstAnswer.style.maxHeight = firstAnswer.scrollHeight + 'px';
            firstAnswer.style.paddingTop = '0px';
            const firstIcon = faqItems[0].querySelector('.fa-chevron-down');
            firstIcon.style.transform = 'rotate(180deg)';
        }
        
        // FAQ Toggle Functionality
        faqQuestions.forEach((question, index) => {
            question.addEventListener('click', () => {
                const item = question.closest('.faq-item');
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.fa-chevron-down');
                
                // Close all other FAQ items
                faqItems.forEach((otherItem, otherIndex) => {
                    if (otherIndex !== index) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        const otherIcon = otherItem.querySelector('.fa-chevron-down');
                        otherAnswer.style.maxHeight = '0';
                        otherAnswer.style.paddingTop = '0';
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle current FAQ item
                if (item.classList.contains('active')) {
                    item.classList.remove('active');
                    answer.style.maxHeight = '0';
                    answer.style.paddingTop = '0';
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    answer.style.paddingTop = '0px';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });
        
        // Form Validation Functions
        function showError(inputElement, errorElement, message) {
            inputElement.classList.remove('border-green-200', 'bg-white');
            inputElement.classList.add('border-red-300', 'bg-red-50');
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
        }
        
        function showSuccess(inputElement) {
            inputElement.classList.remove('border-red-300', 'bg-red-50');
            inputElement.classList.add('border-green-200', 'bg-white');
        }
        
        function clearError(errorElement) {
            errorElement.classList.add('hidden');
        }
        
        // Real-time Validation
        firstNameInput.addEventListener('blur', () => {
            if (!firstNameInput.value.trim()) {
                showError(firstNameInput, firstNameError, 'Please enter your first name');
            } else {
                showSuccess(firstNameInput);
                clearError(firstNameError);
            }
        });
        
        lastNameInput.addEventListener('blur', () => {
            if (!lastNameInput.value.trim()) {
                showError(lastNameInput, lastNameError, 'Please enter your last name');
            } else {
                showSuccess(lastNameInput);
                clearError(lastNameError);
            }
        });
        
        emailInput.addEventListener('blur', () => {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value.trim()) {
                showError(emailInput, emailError, 'Please enter your email address');
            } else if (!emailRegex.test(emailInput.value)) {
                showError(emailInput, emailError, 'Please enter a valid email address');
            } else {
                showSuccess(emailInput);
                clearError(emailError);
            }
        });
        
        phoneInput.addEventListener('blur', () => {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phoneInput.value.trim()) {
                showError(phoneInput, phoneError, 'Please enter your phone number');
            } else if (!phoneRegex.test(phoneInput.value.replace(/\D/g, ''))) {
                showError(phoneInput, phoneError, 'Please enter a valid phone number');
            } else {
                showSuccess(phoneInput);
                clearError(phoneError);
            }
        });

        aboutInput.addEventListener('blur', () => {
            if (!aboutInput.value.trim()) {
                showError(aboutInput, aboutError, 'Please tell us something about yourself');
            } else {
                showSuccess(aboutInput);
                clearError(aboutError);
            }
        });
        
        // Form Validation
        function validateForm() {
            let isValid = true;
            
            // Validate first name
            if (!firstNameInput.value.trim()) {
                showError(firstNameInput, firstNameError, 'Please enter your first name');
                isValid = false;
            } else {
                showSuccess(firstNameInput);
                clearError(firstNameError);
            }
            
            // Validate last name
            if (!lastNameInput.value.trim()) {
                showError(lastNameInput, lastNameError, 'Please enter your last name');
                isValid = false;
            } else {
                showSuccess(lastNameInput);
                clearError(lastNameError);
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value.trim()) {
                showError(emailInput, emailError, 'Please enter your email address');
                isValid = false;
            } else if (!emailRegex.test(emailInput.value)) {
                showError(emailInput, emailError, 'Please enter a valid email address');
                isValid = false;
            } else {
                showSuccess(emailInput);
                clearError(emailError);
            }
            
            // Validate phone
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phoneInput.value.trim()) {
                showError(phoneInput, phoneError, 'Please enter your phone number');
                isValid = false;
            } else if (!phoneRegex.test(phoneInput.value.replace(/\D/g, ''))) {
                showError(phoneInput, phoneError, 'Please enter a valid phone number');
                isValid = false;
            } else {
                showSuccess(phoneInput);
                clearError(phoneError);
            }
            
            // Validate about
            if (!aboutInput.value.trim()) {
                showError(aboutInput, aboutError, 'Please tell us something about yourself');
                isValid = false;
            } else {
                showSuccess(aboutInput);
                clearError(aboutError);
            }
            
            return isValid;
        }
        
        // Notification System
        function showNotification(message, type = 'success') {
            notificationText.textContent = message;
            
            // Set notification color based on type
            notification.classList.remove('bg-green-600', 'bg-red-600', 'bg-blue-600');
            if (type === 'error') {
                notification.classList.add('bg-red-600');
            } else if (type === 'info') {
                notification.classList.add('bg-blue-600');
            } else {
                notification.classList.add('bg-green-600');
            }
            
            // Show notification
            notification.classList.remove('translate-y-24', 'opacity-0');
            notification.classList.add('translate-y-0', 'opacity-100');
            
            // Auto hide after 4 seconds
            setTimeout(() => {
                notification.classList.remove('translate-y-0', 'opacity-100');
                notification.classList.add('translate-y-24', 'opacity-0');
            }, 4000);
        }
        
        // Form Submission
        careerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            if (!validateForm()) {
                showNotification('Please fix the errors in the form', 'error');
                return;
            }
            
            // Show loading state
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Redirecting...';
            submitBtn.disabled = true;
            
            // Collect form data
            const firstName = firstNameInput.value;
            const lastName = lastNameInput.value;
            const email = emailInput.value;
            const phone = phoneInput.value;
            const position = document.querySelector('select[name="position"]')?.value || 'General Application';
            const about = aboutInput.value;
            
            // Format WhatsApp message
            const whatsappNumber = '9670820000';
            const message = `*New Career Application - MJ GREENS*%0A%0A` +
                           `*Name:* ${firstName} ${lastName}%0A` +
                           `*Email:* ${email}%0A` +
                           `*Phone:* ${phone}%0A` +
                           `*Position:* ${position}%0A%0A` +
                           `*About:* ${about}%0A%0A` +
                           `_I am interested in joining the MJ GREENS team._`;
            
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${message}`;
            
            // Simulate short delay for feedback
            setTimeout(() => {
                // Show success message briefly
                successMessage.classList.remove('hidden');
                showNotification('Redirecting to WhatsApp...');
                
                // Open WhatsApp
                window.open(whatsappUrl, '_blank');
                
                // Reset form
                careerForm.reset();
                
                // Reset validation states
                [firstNameInput, lastNameInput, emailInput, phoneInput, aboutInput].forEach(input => {
                    input.classList.remove('border-red-300', 'bg-red-50', 'border-green-200', 'bg-white');
                    input.classList.add('border-green-200', 'bg-white');
                });
                
                // Clear all error messages
                [firstNameError, lastNameError, emailError, phoneError, aboutError].forEach(error => {
                    error.classList.add('hidden');
                });
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.add('hidden');
                }, 5000);
            }, 1000);
        });
        
        // Animate elements on page load
        document.addEventListener('DOMContentLoaded', () => {
            // Animate main content sections
            const sections = document.querySelectorAll('.bg-white.rounded-xl');
            sections.forEach((section, index) => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    section.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    section.style.opacity = '1';
                    section.style.transform = 'translateY(0)';
                }, 300 + (index * 200));
            });
            
            // Animate FAQ section
            const faqSection = document.querySelector('.bg-gradient-to-r.from-green-50.to-emerald-50');
            faqSection.style.opacity = '0';
            
            setTimeout(() => {
                faqSection.style.transition = 'opacity 0.5s ease';
                faqSection.style.opacity = '1';
            }, 1000);
            
            // Add hover effects to benefit items
            const benefitItems = document.querySelectorAll('.flex.items-start.space-x-3');
            benefitItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    const icon = item.querySelector('.w-10.h-10');
                    icon.classList.add('scale-110');
                });
                
                item.addEventListener('mouseleave', () => {
                    const icon = item.querySelector('.w-10.h-10');
                    icon.classList.remove('scale-110');
                });
            });
        });
    </script>
    <x-footer />
</body>
</html>
