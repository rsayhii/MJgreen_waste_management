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
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
            <!-- Why Work With Us - LEFT SIDE -->
            <div class="lg:w-1/2">
                <div class="bg-white  p-6 border-l-4  h-full">
                    <h2 class="text-xl font-bold text-green-800 mb-2 pb-2 border-b  ">
                        Why Work With Us
                        <span class="absolute bottom-0 left-0 w-14 h-0.5 bg-green-500 rounded-full"></span>
                    </h2>
                    
                    <div class="space-y-5 mt-5">
                        <!-- Benefit 1 -->
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-green-50 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white shadow-md">
                                <i class="fas fa-leaf text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-700 text-base mb-1">Sustainability Focus</h3>
                                <p class="text-gray-600 text-sm">We're committed to environmental sustainability in all our projects and operations. Join us in making a real difference.</p>
                            </div>
                        </div>
                        
                        <!-- Benefit 2 -->
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-green-50 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white shadow-md">
                                <i class="fas fa-users text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-700 text-base mb-1">Collaborative Culture</h3>
                                <p class="text-gray-600 text-sm">We foster a supportive, inclusive environment where teamwork and open communication are valued.</p>
                            </div>
                        </div>
                        
                        <!-- Benefit 3 -->
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-green-50 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white shadow-md">
                                <i class="fas fa-chart-line text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-700 text-base mb-1">Career Growth</h3>
                                <p class="text-gray-600 text-sm">We invest in our employees' development with training programs and opportunities for advancement.</p>
                            </div>
                        </div>
                        
                        <!-- Benefit 4 -->
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-green-50 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white shadow-md">
                                <i class="fas fa-award text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-700 text-base mb-1">Innovation & Excellence</h3>
                                <p class="text-gray-600 text-sm">We encourage creative thinking and reward excellence in all areas of our work.</p>
                            </div>
                        </div>
                        
                        <!-- Benefit 5 -->
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-green-50 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white shadow-md">
                                <i class="fas fa-heart text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-700 text-base mb-1">Work-Life Balance</h3>
                                <p class="text-gray-600 text-sm">We understand the importance of balance and offer flexible working arrangements.</p>
                            </div>
                        </div>
                        
                        <!-- Benefit 6 -->
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-green-50 transition-all duration-300 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white shadow-md">
                                <i class="fas fa-medal text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-700 text-base mb-1">Competitive Benefits</h3>
                                <p class="text-gray-600 text-sm">We offer comprehensive health coverage, retirement plans, and performance bonuses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Apply Now Form - RIGHT SIDE -->
            <div class="lg:w-1/2">
                <div class="bg-white shadow-lg p-6 border-l-4  ">
                    <h2 class="text-xl font-bold text-green-800 mb-2 pb-2 border-b  ">
                        Apply Now
                        <span class="absolute bottom-0 left-0 w-14 h-0.5 bg-emerald-500 rounded-full"></span>
                    </h2>
                    
                    <form id="careerForm" class="mt-5 space-y-5" novalidate>
                        <!-- Name Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-green-700 mb-1">
                                    First Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-green-500 text-sm"></i>
                                    </div>
                                    <input type="text" id="firstName" name="firstName" required
                                           class="pl-9 w-full px-3 py-2.5 text-sm border border-green-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 bg-green-50 focus:bg-white"
                                           placeholder="Enter your first name">
                                </div>
                                <div id="firstNameError" class="text-red-500 text-xs mt-1 hidden">Please enter your first name</div>
                            </div>
                            
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-green-700 mb-1">
                                    Last Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-green-500 text-sm"></i>
                                    </div>
                                    <input type="text" id="lastName" name="lastName" required
                                           class="pl-9 w-full px-3 py-2.5 text-sm border border-green-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 bg-green-50 focus:bg-white"
                                           placeholder="Enter your last name">
                                </div>
                                <div id="lastNameError" class="text-red-500 text-xs mt-1 hidden">Please enter your last name</div>
                            </div>
                        </div>
                        
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-green-700 mb-1">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-green-500 text-sm"></i>
                                </div>
                                <input type="email" id="email" name="email" required
                                       class="pl-9 w-full px-3 py-2.5 text-sm border border-green-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 bg-green-50 focus:bg-white"
                                       placeholder="Enter your email address">
                            </div>
                            <div id="emailError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid email address</div>
                        </div>
                        
                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-green-700 mb-1">
                                Phone <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-green-500 text-sm"></i>
                                </div>
                                <input type="tel" id="phone" name="phone" required
                                       class="pl-9 w-full px-3 py-2.5 text-sm border border-green-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 bg-green-50 focus:bg-white"
                                       placeholder="Enter your phone number">
                            </div>
                            <div id="phoneError" class="text-red-500 text-xs mt-1 hidden">Please enter a valid phone number</div>
                        </div>
                        
                        <!-- CV Upload -->
                        <div>
                            <label class="block text-sm font-medium text-green-700 mb-1">
                                Please upload your CV <span class="text-red-500">*</span>
                            </label>
                            
                            <!-- File Upload Area -->
                            <div id="fileUploadArea" 
                                 class="file-upload-hover border-2 border-dashed border-green-300 rounded-xl p-6 text-center bg-green-50 cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-4xl text-green-500 mb-3"></i>
                                <p class="text-base font-semibold text-green-700 mb-1">DROP A FILE HERE OR CLICK TO UPLOAD</p>
                                <p class="text-green-600 text-sm">Maximum upload size: 5MB</p>
                                <input type="file" id="cvUpload" class="hidden" accept=".pdf,.doc,.docx,.txt">
                            </div>
                            
                            <!-- Progress Bar -->
                            <div id="uploadProgress" class="mt-3 hidden">
                                <div class="w-full bg-green-200 rounded-full h-1.5">
                                    <div id="uploadProgressBar" class="bg-green-600 h-1.5 rounded-full animate-progressBar"></div>
                                </div>
                            </div>
                            
                            <!-- Selected File Info -->
                            <div id="selectedFile" class="mt-3 p-3 bg-green-100 rounded-lg border-l-4 border-green-500 hidden">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-file-alt text-green-600 text-lg"></i>
                                        <div>
                                            <div id="fileName" class="font-medium text-green-800 text-sm"></div>
                                            <div id="fileSize" class="text-xs text-green-600"></div>
                                        </div>
                                    </div>
                                    <button type="button" id="removeFile" class="text-red-500 hover:text-red-700 p-1 rounded-full hover:bg-red-50 text-sm">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div id="fileError" class="text-red-500 text-xs mt-1 hidden">Please upload your CV (PDF, DOC, DOCX or TXT)</div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" id="submitBtn"
                                class="btn-shine w-full bg-gradient-to-r from-green-600 to-emerald-600 text-white font-semibold py-3 px-5 rounded-lg shadow-lg hover:from-green-700 hover:to-emerald-700 transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center text-sm">
                            <i class="fas fa-paper-plane mr-2"></i>
                            SUBMIT APPLICATION
                        </button>
                        
                        <!-- Success Message -->
                        <div id="successMessage" class="p-3 bg-green-100 border-l-4 border-green-500 rounded-lg hidden animate-fadeIn">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-600 text-lg mr-2"></i>
                                <div>
                                    <p class="font-medium text-green-800 text-sm">Your application has been submitted successfully!</p>
                                    <p class="text-green-600 text-xs mt-0.5">We'll contact you soon.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="mt-12">
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl shadow-lg p-6 md:p-8 border border-green-100">
                <h2 class="text-2xl font-bold text-green-800 text-center mb-8 relative pb-3">
                    Frequently Asked Questions
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-20 h-1 bg-green-500 rounded-full"></span>
                </h2>
                
                <div class="max-w-4xl mx-auto space-y-3">
                    <!-- FAQ 1 -->
                    <div class="faq-item bg-white rounded-lg border border-green-200 overflow-hidden">
                        <div class="faq-question p-4 cursor-pointer flex justify-between items-center hover:bg-green-50 transition-colors duration-300">
                            <h3 class="font-bold text-green-800 text-base">What types of positions are available at MJ GREENS?</h3>
                            <i class="fas fa-chevron-down text-green-600 transition-transform duration-300 text-sm"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="p-4 pt-0 text-gray-600">
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
                    <div class="faq-item bg-white rounded-lg border border-green-200 overflow-hidden">
                        <div class="faq-question p-4 cursor-pointer flex justify-between items-center hover:bg-green-50 transition-colors duration-300">
                            <h3 class="font-bold text-green-800 text-base">What is the typical hiring process at MJ GREENS?</h3>
                            <i class="fas fa-chevron-down text-green-600 transition-transform duration-300 text-sm"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="p-4 pt-0 text-gray-600">
                                <p class="mb-2 text-sm">Our hiring process typically involves:</p>
                                <ol class="list-decimal pl-4 space-y-1 mb-2 text-sm">
                                    <li><span class="font-semibold text-green-700">Application Review</span> - Within 5-7 business days</li>
                                    <li><span class="font-semibold text-green-700">Initial Screening</span> - Brief phone or video screening</li>
                                    <li><span class="font-semibold text-green-700">Skills Assessment</span> - Task or assessment based on role</li>
                                    <li><span class="font-semibold text-green-700">Interviews</span> - 2-3 rounds with team members</li>
                                    <li><span class="font-semibold text-green-700">Reference Checks</span> - For final candidates</li>
                                    <li><span class="font-semibold text-green-700">Offer</span> - Formal offer letter</li>
                                </ol>
                                <p class="text-sm">The entire process usually takes 2-4 weeks from application to offer.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 3 -->
                    <div class="faq-item bg-white rounded-lg border border-green-200 overflow-hidden">
                        <div class="faq-question p-4 cursor-pointer flex justify-between items-center hover:bg-green-50 transition-colors duration-300">
                            <h3 class="font-bold text-green-800 text-base">What qualifications do I need to work at MJ GREENS?</h3>
                            <i class="fas fa-chevron-down text-green-600 transition-transform duration-300 text-sm"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="p-4 pt-0 text-gray-600">
                                <p class="mb-2 text-sm">Qualifications vary by position, but generally we look for:</p>
                                <ul class="list-disc pl-4 space-y-1 text-sm">
                                    <li><span class="font-semibold text-green-700">Education</span> - Relevant degree or equivalent experience</li>
                                    <li><span class="font-semibold text-green-700">Experience</span> - Practical experience in your field</li>
                                    <li><span class="font-semibold text-green-700">Skills</span> - Technical skills plus strong communication abilities</li>
                                    <li><span class="font-semibold text-green-700">Passion for Sustainability</span> - Genuine interest in environmental issues</li>
                                    <li><span class="font-semibold text-green-700">Alignment with Values</span> - Commitment to our sustainability mission</li>
                                </ul>
                                <p class="mt-2 text-sm">We value diverse backgrounds - if you're passionate about sustainability, we encourage you to apply!</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ 4 -->
                    <div class="faq-item bg-white rounded-lg border border-green-200 overflow-hidden">
                        <div class="faq-question p-4 cursor-pointer flex justify-between items-center hover:bg-green-50 transition-colors duration-300">
                            <h3 class="font-bold text-green-800 text-base">What benefits does MJ GREENS offer to employees?</h3>
                            <i class="fas fa-chevron-down text-green-600 transition-transform duration-300 text-sm"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="p-4 pt-0 text-gray-600">
                                <p class="mb-2 text-sm">We offer a comprehensive benefits package including:</p>
                                <ul class="list-disc pl-4 space-y-1 text-sm">
                                    <li><span class="font-semibold text-green-700">Health & Wellness</span> - Comprehensive medical, dental, and vision insurance</li>
                                    <li><span class="font-semibold text-green-700">Financial Security</span> - Competitive salaries, retirement plans with company matching</li>
                                    <li><span class="font-semibold text-green-700">Work-Life Balance</span> - Flexible working hours, remote work options</li>
                                    <li><span class="font-semibold text-green-700">Professional Development</span> - Training programs, mentorship opportunities</li>
                                    <li><span class="font-semibold text-green-700">Sustainability Perks</span> - Green commuting benefits, eco-friendly office spaces</li>
                                </ul>
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
        const fileUploadArea = document.getElementById('fileUploadArea');
        const fileInput = document.getElementById('cvUpload');
        const selectedFile = document.getElementById('selectedFile');
        const fileName = document.getElementById('fileName');
        const fileSize = document.getElementById('fileSize');
        const removeFileBtn = document.getElementById('removeFile');
        const uploadProgress = document.getElementById('uploadProgress');
        const uploadProgressBar = document.getElementById('uploadProgressBar');
        const submitBtn = document.getElementById('submitBtn');
        const successMessage = document.getElementById('successMessage');
        const notification = document.getElementById('notification');
        const notificationText = document.getElementById('notificationText');
        
        // Form validation elements
        const firstNameInput = document.getElementById('firstName');
        const lastNameInput = document.getElementById('lastName');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        
        const firstNameError = document.getElementById('firstNameError');
        const lastNameError = document.getElementById('lastNameError');
        const emailError = document.getElementById('emailError');
        const phoneError = document.getElementById('phoneError');
        const fileError = document.getElementById('fileError');
        
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
        
        // File Upload Functionality
        fileUploadArea.addEventListener('click', () => fileInput.click());
        
        fileInput.addEventListener('change', handleFileSelection);
        
        removeFileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            resetFileUpload();
            clearFileError();
        });
        
        function handleFileSelection(e) {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                
                // Validate file type
                const validTypes = ['application/pdf', 'application/msword', 
                                   'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
                                   'text/plain'];
                if (!validTypes.includes(file.type)) {
                    showFileError('Please upload a PDF, DOC, DOCX or TXT file');
                    fileInput.value = '';
                    return;
                }
                
                // Check file size (5MB limit)
                if (file.size > 5 * 1024 * 1024) {
                    showFileError('File size exceeds 5MB limit. Please choose a smaller file.');
                    fileInput.value = '';
                    return;
                }
                
                // Update UI with file info
                fileName.textContent = file.name;
                fileSize.textContent = formatFileSize(file.size);
                selectedFile.classList.remove('hidden');
                uploadProgress.classList.remove('hidden');
                
                // Simulate upload progress
                uploadProgressBar.classList.remove('animate-progressBar');
                void uploadProgressBar.offsetWidth; // Trigger reflow
                uploadProgressBar.classList.add('animate-progressBar');
                
                // Change border color
                fileUploadArea.classList.remove('border-green-300');
                fileUploadArea.classList.add('border-green-500', 'bg-green-100');
                clearFileError();
            } else {
                resetFileUpload();
            }
        }
        
        function resetFileUpload() {
            fileInput.value = '';
            selectedFile.classList.add('hidden');
            uploadProgress.classList.add('hidden');
            fileUploadArea.classList.remove('border-green-500', 'bg-green-100');
            fileUploadArea.classList.add('border-green-300');
            uploadProgressBar.classList.remove('animate-progressBar');
            uploadProgressBar.style.width = '0%';
        }
        
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Drag and drop functionality
        fileUploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUploadArea.classList.remove('border-green-300');
            fileUploadArea.classList.add('border-green-500', 'bg-green-100');
        });
        
        fileUploadArea.addEventListener('dragleave', () => {
            if (fileInput.files.length === 0) {
                fileUploadArea.classList.remove('border-green-500', 'bg-green-100');
                fileUploadArea.classList.add('border-green-300');
            }
        });
        
        fileUploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            if (e.dataTransfer.files.length > 0) {
                fileInput.files = e.dataTransfer.files;
                const changeEvent = new Event('change');
                fileInput.dispatchEvent(changeEvent);
            }
        });
        
        // Form Validation Functions
        function showError(inputElement, errorElement, message) {
            inputElement.classList.remove('border-green-200', 'bg-green-50');
            inputElement.classList.add('border-red-300', 'bg-red-50');
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
        }
        
        function showSuccess(inputElement) {
            inputElement.classList.remove('border-red-300', 'bg-red-50');
            inputElement.classList.add('border-green-200', 'bg-green-50');
        }
        
        function clearError(errorElement) {
            errorElement.classList.add('hidden');
        }
        
        function showFileError(message) {
            fileError.textContent = message;
            fileError.classList.remove('hidden');
        }
        
        function clearFileError() {
            fileError.classList.add('hidden');
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
            
            // Validate file
            if (fileInput.files.length === 0) {
                showFileError('Please upload your CV');
                isValid = false;
            } else {
                clearFileError();
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
        careerForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (!validateForm()) {
                showNotification('Please fix the errors in the form', 'error');
                return;
            }
            
            // Show loading state
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Processing...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Show success message
                successMessage.classList.remove('hidden');
                showNotification('Application submitted successfully!');
                
                // Reset form
                careerForm.reset();
                resetFileUpload();
                
                // Reset validation states
                [firstNameInput, lastNameInput, emailInput, phoneInput].forEach(input => {
                    input.classList.remove('border-red-300', 'bg-red-50', 'border-green-200', 'bg-green-50');
                    input.classList.add('border-green-200', 'bg-green-50');
                });
                
                // Clear all error messages
                [firstNameError, lastNameError, emailError, phoneError, fileError].forEach(error => {
                    error.classList.add('hidden');
                });
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.add('hidden');
                }, 5000);
                
                // Log form data (in real app, send to server)
                const formData = {
                    firstName: firstNameInput.value,
                    lastName: lastNameInput.value,
                    email: emailInput.value,
                    phone: phoneInput.value,
                    fileName: fileInput.files[0]?.name
                };
                console.log('Form submitted with:', formData);
            }, 1500);
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
