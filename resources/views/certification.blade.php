<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Certification Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');
        
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .step-line::after {
            content: '';
            position: absolute;
            left: 20px;
            top: 50px;
            bottom: -20px;
            width: 2px;
            background: linear-gradient(to bottom, #22c55e 0%, transparent 100%);
        }
        
        .step-line:last-child::after {
            display: none;
        }

        .premium-shadow {
            box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body class="bg-gray-50 py-24">

    <section class="container mx-auto px-6 lg:px-20">
        
        <div class="text-center mb-16 md:mb-24">
            <span class="text-green-600 font-bold uppercase tracking-[0.2em] text-xs mb-3 block">
                Accreditation
            </span>

<h2 class="text-3xl md:text-5xl font-extrabold mb-6">
        Certificate <span class="text-green-600">of Registration</span>
      </h2>




            {{-- <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                Certificate of Registration
            </h2> --}}
            <div class="w-20 h-1.5 bg-green-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            
            <div class="w-full lg:w-1/2 group">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-green-100 to-blue-50 rounded-[2rem] blur-2xl opacity-50 group-hover:opacity-80 transition duration-500"></div>
                    
                    <div class="relative glass-card premium-shadow rounded-[1.5rem] p-4 md:p-8 transform transition duration-500 hover:-translate-y-3 hover:rotate-1">
                        <img src="https://mjgreens.in/wp-content/uploads/2022/01/certificate.png" 
                             alt="Registration Certificate" 
                             class="w-full h-auto rounded-lg shadow-inner grayscale-[20%] group-hover:grayscale-0 transition duration-500">
                        
                        {{-- <div class="absolute bottom-10 right-10 bg-white/90 backdrop-blur-md p-4 rounded-xl shadow-lg border border-gray-100 hidden md:block">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase font-bold text-gray-400">Status</p>
                                    <p class="text-sm font-bold text-gray-800">Verified Secure</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="space-y-12">
                    
                    <div class="flex items-start gap-6 relative step-line">
                        <div class="w-10 h-10 bg-green-500 text-white rounded-full flex-shrink-0 flex items-center justify-center font-bold shadow-lg shadow-green-200 z-10">
                            1
                        </div>
                        <div class="pt-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">ISO Certified 9001:2015</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Adhering to international standards for quality management systems to ensure consistent excellence in every process.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-6 relative step-line">
                        <div class="w-10 h-10 bg-green-500 text-white rounded-full flex-shrink-0 flex items-center justify-center font-bold shadow-lg shadow-green-200 z-10">
                            2
                        </div>
                        <div class="pt-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">DPIIT Recognised</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Proudly recognized by the Department for Promotion of Industry and Internal Trade, fostering innovation and growth.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-6 relative step-line">
                        <div class="w-10 h-10 bg-green-500 text-white rounded-full flex-shrink-0 flex items-center justify-center font-bold shadow-lg shadow-green-200 z-10">
                            3
                        </div>
                        <div class="pt-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Startup India</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Part of the prestigious Startup India initiative, committed to building a sustainable and scalable business ecosystem.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <script>
        // Smooth scroll reveal interaction
        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.step-line').forEach(el => {
            el.classList.add('transition', 'duration-700', 'opacity-0', 'translate-y-10');
            observer.observe(el);
        });
    </script>
</body>
</html>