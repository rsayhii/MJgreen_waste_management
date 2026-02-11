<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Josie Farms</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Inter:wght@400;500&display=swap');

        body { font-family: 'Inter', sans-serif; }
        h2 { font-family: 'Plus Jakarta Sans', sans-serif; }

          /* aboutus hero Section */ 
        .about-bg {
            background-image: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
        }

         /* who we are Section */ 
         @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Inter:wght@400;500&display=swap');
        
        body { font-family: 'Inter', sans-serif; }
        h2 { font-family: 'Plus Jakarta Sans', sans-serif; }

        .badge-green {
            background-color: #7ab335;
        }
        .btn-yellow {
            background-color: #f2ba1d;
        }

        /**/
    </style>
</head>
<body class="bg-gray-100">
{{----------------------------------------- aboutus hero section start----------------------------------------}}

<section class="relative about-bg mt-24 mb-24 min-h-[250px] md:min-h-[340px] flex items-center">

    <div class="container mx-auto px-6 lg:px-20 py-16">
        <div class="flex flex-col md:flex-row items-center">
            
            <!-- Left Content -->
            <div class="md:w-1/2 text-white mb-10 md:mb-0">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">
                    About Josie Farms
                </h2>
                <p class="text-gray-200 text-sm md:text-base max-w-md leading-relaxed">
                    Unlocking the secrets of sustainable agriculture dictumst pede lorem sollicitudin suspendisse. 
                    We combine traditional wisdom with modern innovation to cultivate a greener future.
                </p>
            </div>

            <!-- Right Image -->
            {{-- <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="https://dkkit.rometheme.pro/diligent/wp-content/uploads/sites/100/2024/03/VVJT84U.png" 
                     alt="Josie Farms Worker" 
                     class="w-72 md:w-96 lg:w-[200px] h-auto object-contain">
            </div> --}}

        </div>
    </div>
</section>

{{----------------------------------------- aboutus hero section end----------------------------------------}}


{{----------------------------------------- who we are section start----------------------------------------}}

<section class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="flex flex-row gap-6 items-start">
                <div class="relative w-1/2">
                    <div class="absolute -top-4 -left-4 badge-green text-white p-6 rounded-sm shadow-xl z-10 flex flex-col items-start">
                        <span class="text-4xl font-extrabold leading-none">25+</span>
                        <span class="text-[10px] uppercase font-bold tracking-wider leading-tight mt-1">Years Of <br> Experience</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1592419044706-39796d40f98c?auto=format&fit=crop&q=80" 
                         alt="Farm Experience" 
                         class="w-full h-[400px] object-cover rounded-sm shadow-md">
                </div>
                
                <div class="w-1/2 mt-12">
                    <img src="https://images.unsplash.com/photo-1589923188900-85dae523342b?auto=format&fit=crop&q=80" 
                         alt="Farmer Harvest" 
                         class="w-full h-[400px] object-cover rounded-sm shadow-md">
                </div>
            </div>

            <div class="lg:pl-10">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-[2px] badge-green"></div>
                    <span class="text-sm font-bold text-gray-800 uppercase tracking-widest">Who We Are</span>
                </div>
                
                <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                    Rooted in Tradition, Growing for Tomorrow
                </h2>
                
                <p class="text-gray-700 font-semibold mb-4 leading-relaxed">
                    Sapien class est sagittis risus natoque eleifend. Nostra senectus arcu potenti vel congue sagittis.
                </p>
                
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Facilisis ultrices dolor suspendisse habitasse vehicula venenatis tempor et. Justo morbi iaculis ac platea felis cursus cubilia pede quis ligula leo. Quis est sapien vel nisl elit torquent nascetur sollicitudin diam turpis.
                </p>
                
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Eget ad donec faucibus neque nec morbi mus maximus nostra pulvinar aliquet. Nulla faucibus luctus mus integer pellentesque libero.
                </p>
                
                <button class="btn-yellow hover:bg-yellow-500 text-black font-bold py-3 px-8 rounded-full transition duration-300 text-sm shadow-md">
                    More About Us
                </button>
            </div>

        </div>
    </section>
{{----------------------------------------- who we are section end----------------------------------------}}

{{-----------------------------------------Feature Section Start ----------------------------------------}}
<!-- Features Section Start -->
<section class="py-12 md:py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    
    <div class="flex flex-col md:flex-row divide-y md:divide-y-0 md:divide-x divide-gray-200">
      
      <!-- Feature 1 -->
      <div class="flex-1 flex gap-4 p-6 items-start">
        <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center">
          <!-- Leaf SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 21c7 0 14-7 14-14C12 7 5 14 5 21z"/>
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">
            Fresh Organic Produce
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            We grow and deliver farm-fresh organic produce using sustainable methods.
          </p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="flex-1 flex gap-4 p-6 items-start">
        <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center">
          <!-- Tractor SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <circle cx="7" cy="17" r="2" />
            <circle cx="17" cy="17" r="3" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 17V9h6l3 4h3v4" />
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">
            Modern Farming
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Combining advanced technology with traditional knowledge for better yields.
          </p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="flex-1 flex gap-4 p-6 items-start">
        <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center">
          <!-- Globe SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M12 3c3 4 3 14 0 18M12 3c-3 4-3 14 0 18"/>
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">
            Eco-Friendly Practices
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Our processes protect the environment while producing healthy crops.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- Features Section End -->
{{-----------------------------------------Feature Section End ----------------------------------------}}

{{-----------------------------------------Waste Management Steps Section Start ----------------------------------------}}
<!-- Section Start -->
<section class="py-16 md:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-green-600 font-semibold mb-2">
        How It Works
      </p>
      <h2 class="text-3xl md:text-2xl lg:text-3xl font-extrabold text-gray-900 leading-tight">
        Effortless Waste Management in 3 Simple Steps
      </h2>
    </div>

    <!-- Two Column Layout -->
    <div class="grid lg:grid-cols-2 gap-12 items-start">

      <!-- LEFT SIDE -->
      <div>
        <!-- Main Image -->
        <img
          src="https://images.unsplash.com/photo-1604186838309-c6715f0d3e6c?auto=format&fit=crop&w=900&q=80"
          class="w-full h-[420px] object-cover rounded-3xl shadow-md"
          alt="Waste collection"
        >

        <!-- Text Block -->
        <div class="mt-8">
          <h3 class="text-green-600 font-bold text-xl mb-3">
            Smarter Waste Collection
          </h3>
          <p class="text-gray-600 mb-6">
            We simplify waste management through streamlined processes and eco-friendly recycling systems designed for modern communities.
          </p>

          <!-- Features -->
          <div class="grid sm:grid-cols-2 gap-6">
            
            <!-- Feature 1 -->
            <div class="flex gap-4">
              <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M9 6v12m6-12v12"/>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">
                  Smart Sorting
                </h4>
                <p class="text-sm text-gray-600">
                  Automated sorting improves recycling accuracy.
                </p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex gap-4">
              <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"/>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">
                  Eco Processing
                </h4>
                <p class="text-sm text-gray-600">
                  Reducing landfill impact with green solutions.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- RIGHT SIDE -->
      <div class="space-y-8">

        <!-- Step 1 -->
        <div class="flex justify-between items-start border-b pb-6">
          <div>
            <h3 class="font-bold text-lg text-gray-900">
              Schedule Pickup
            </h3>
            <p class="text-gray-600 text-sm mt-1">
              Book a convenient waste collection time online.
            </p>
          </div>
          <span class="text-5xl font-extrabold text-gray-200">
            01
          </span>
        </div>

        <!-- Step 2 -->
        <div class="flex justify-between items-start border-b pb-6">
          <div>
            <h3 class="font-bold text-lg text-gray-900">
              Waste Collection
            </h3>
            <p class="text-gray-600 text-sm mt-1">
              Our team collects and transports your waste safely.
            </p>
          </div>
          <span class="text-5xl font-extrabold text-gray-200">
            02
          </span>
        </div>

        <!-- Step 3 -->
        <div class="flex justify-between items-start pb-6">
          <div>
            <h3 class="font-bold text-lg text-gray-900">
              Recycling & Processing
            </h3>
            <p class="text-gray-600 text-sm mt-1">
              Waste is sorted and recycled using eco-friendly methods.
            </p>
          </div>
          <span class="text-5xl font-extrabold text-gray-200">
            03
          </span>
        </div>

        <!-- Bottom Image with Badge -->
        <div class="relative">
          <img
            src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=900&q=80"
            class="w-full h-[300px] object-cover rounded-3xl shadow-md"
            alt="Recycling"
          >

          <!-- Orange Badge -->
          <div class="absolute bottom-6 left-6 bg-orange-500 text-white px-6 py-4 rounded-2xl shadow-lg max-w-xs">
            <p class="text-sm font-semibold leading-tight">
              Processing 85,000 Tons of Recyclable Waste Every Year.
            </p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- Section End -->

{{-----------------------------------------Waste Management Steps Section End ----------------------------------------}}

{{-----------------------------------------Sustainability Section Section Start ----------------------------------------}}
<!-- Sustainability Section Start -->
<section class="w-full h-[30px]">

  <div class="grid lg:grid-cols-2">

    <!-- LEFT SIDE -->
    <div class="bg-gray-50 px-6 md:px-12 lg:px-20 py-14 md:py-20">

      <!-- Subtitle -->
      <p class="text-green-600 font-semibold mb-3">
        Sustainability Program
      </p>

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
        Our Commitment to a Greener Future
      </h2>

      <!-- Paragraph -->
      <p class="text-gray-600 mb-10 max-w-xl">
        We focus on sustainable waste processing, reducing environmental impact, and building eco-friendly infrastructure for a cleaner tomorrow.
      </p>

      <!-- Progress Bars -->
      <div class="space-y-6">

        <!-- Progress 1 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium text-gray-800">Waste Recycled</span>
            <span class="text-gray-600">85%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-green-600 h-3 rounded-full" style="width:85%"></div>
          </div>
        </div>

        <!-- Progress 2 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium text-gray-800">Carbon Footprint Reduction</span>
            <span class="text-gray-600">70%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-green-500 h-3 rounded-full" style="width:70%"></div>
          </div>
        </div>

        <!-- Progress 3 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium text-gray-800">Eco-Friendly Projects Completed</span>
            <span class="text-gray-600">90%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-green-700 h-3 rounded-full" style="width:90%"></div>
          </div>
        </div>

      </div>

    </div>

    <!-- RIGHT SIDE IMAGE -->
    <div class="relative min-h-[420px] lg:min-h-[600px]">

      <!-- Background Image -->
      <div class="absolute inset-0 bg-cover bg-center"
        style="background-image:url('https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=1400&q=80');">
      </div>

      <!-- Overlay Card -->
      <div class="absolute bottom-8 left-8 bg-orange-500 text-white p-6 rounded-2xl shadow-xl max-w-xs flex gap-4 items-start">
        
        <!-- Icon -->
        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12h3l3 8 4-16 3 8h5"/>
          </svg>
        </div>

        <!-- Text -->
        <div>
          <p class="text-sm leading-relaxed mb-2">
            We transform waste into sustainable resources through innovative recycling systems.
          </p>
          <a href="#" class="inline-flex items-center text-sm font-semibold">
            Learn More →
          </a>
        </div>

      </div>

    </div>

  </div>

</section>
<!-- Sustainability Section End -->
{{-----------------------------------------Sustainability Section Section Start ----------------------------------------}}


<script>
        // Optional: Reveal animation on scroll
        window.addEventListener('scroll', () => {
            console.log('Section view monitoring active');
        });
    </script>
</body>
</html>
