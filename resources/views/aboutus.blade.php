<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About MJ Greens - Waste Management Company</title>
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

        .badge-green {
            background-color: #7ab335;
        }
        .btn-yellow {
            background-color: #f2ba1d;
        }

        /**/
    </style>
</head>
<body class="p-0 ">
<main class="flex-1">
<x-hero 
  title="About MJ Greens"
  subtitle="Cultivating The Green Diversity By Making Greener INDIA. We provide sustainable and responsible waste management solutions for large generators of waste."
  bg="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&q=80&w=2000"
  leftImage="https://plus.unsplash.com/premium_photo-1663091022660-8fa0fd744fed?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI0fHx3YXN0ZSUyMG1hbmFnZW1lbnR8ZW58MHx8MHx8fDA%3D"
  leftTitle="Waste Management Excellence"
  leftText="We offer sustainable and responsible waste management solutions for corporate parks, universities, and residential communities."
  rightQuote="MJ Greens is the best Waste Management Company in the country with proven expertise in major infrastructure projects."
  rightAuthor="MJ Greens Team"
  rightAuthorImage="https://i.pravatar.cc/150?u=team"
  rightMeta="MJ GREENS TEAM"
/>


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
                    Leading Waste Management Solutions for a Greener India
                </h2>
                
                <p class="text-gray-700 font-semibold mb-4 leading-relaxed">
                    MJGREENS is one of the top Waste Management Companies in India, offering sustainable and responsible solutions for large generators of waste.
                </p>
                
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    With wide experience and proven expertise in major infrastructure projects, we are recognized as one of the best waste management companies in the country. We provide services for corporate parks, universities, residential communities, and more.
                </p>
                
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Our mission is to cultivate green diversity by making India greener through innovative and legally compliant waste management practices, including Extended Producer Responsibility (EPR) for plastics and e-waste.
                </p>
                
                <button class="btn-yellow hover:bg-yellow-500 text-black font-bold py-3 px-8 rounded-full transition duration-300 text-sm shadow-md">
                    Learn More
                </button>
            </div>

        </div>
    </section>
{{----------------------------------------- who we are section end----------------------------------------}}

{{-----------------------------------------Feature Section Start ----------------------------------------}}
<!-- Features Section Start -->
<section class="pt-12 md:pt-16 pb-0">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    
    <div class="flex flex-col md:flex-row divide-y md:divide-y-0 md:divide-x divide-gray-200">
      
      <!-- Feature 1 -->
      <div class="flex-1 flex gap-4 p-6 items-start">
        <div class="w-[8.5rem] h-14 bg-green-600 rounded-full flex items-center justify-center">
          <!-- Leaf SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h6m-6 4h6m-6 4h6m-6 4h6m-6 8h6"/>
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">
            Waste Management Services
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            We offer sustainable and responsible waste management solutions for large generators of waste.
          </p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="flex-1 flex gap-4 p-6 items-start">
        <div class="w-[9.5rem] h-14 bg-green-600 rounded-full flex items-center justify-center">
          <!-- Tractor SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">
            Extended Producer Responsibility
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Reverse logistics for the collection of post-consumer plastics & e-waste that is transparent & legally compliant.
          </p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="flex-1 flex gap-4 p-6 items-start">
        <div class="w-[9.5rem] h-14 bg-green-600 rounded-full flex items-center justify-center">
          <!-- Globe SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
          </svg>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">
            Consultation
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            We provide consulting and auditing services related to circular economy, resource recovery, and reverse logistics.
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
<section class=" py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-green-600 font-semibold mb-2">
        How It Works
      </p>
      <h2 class="text-3xl md:text-2xl lg:text-3xl font-extrabold text-gray-900 leading-tight">
        Our End-to-End Solid Waste Solutions
      </h2>
    </div>

    <!-- Two Column Layout -->
    <div class="grid lg:grid-cols-2 gap-12 items-start">

      <!-- LEFT SIDE -->
      <div>
        <!-- Main Image -->
        <img
          src="https://plus.unsplash.com/premium_photo-1663091022660-8fa0fd744fed?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI0fHx3YXN0ZSUyMG1hbmFnZW1lbnR8ZW58MHx8MHx8fDA%3D"
          class="w-full h-[420px] object-cover rounded-3xl shadow-md"
          alt="Recycling bins and waste management"
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
              Collection
            </h3>
            <p class="text-gray-600 text-sm mt-1">
              Efficient and timely collection of waste from various sources.
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
              Segregation
            </h3>
            <p class="text-gray-600 text-sm mt-1">
              Proper segregation of waste at the source to ensure effective recycling and disposal.
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
              Recycling & Disposal
            </h3>
            <p class="text-gray-600 text-sm mt-1">
              Waste is recycled and disposed of in an environmentally friendly manner.
            </p>
          </div>
          <span class="text-5xl font-extrabold text-gray-200">
            03
          </span>
        </div>

        <!-- Bottom Image with Badge -->
        <div class="relative">
          <img
            src="https://images.unsplash.com/photo-1764154739233-659b2681d162?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
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
<section class="w-full">

  <div class="grid lg:grid-cols-2">

    <!-- LEFT SIDE -->
    <div class="bg-gray-50 px-6 md:px-12 lg:px-20 py-14 md:py-20">

      <!-- Subtitle -->
      <p class="text-green-600 font-semibold mb-3">
        Sustainability Program
      </p>

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
        Our Commitment to Sustainability
      </h2>

      <!-- Paragraph -->
      <p class="text-gray-600 mb-10 max-w-xl">
        We are dedicated to providing sustainable and responsible waste management solutions that contribute to a cleaner and greener environment.
      </p>

      <!-- Progress Bars -->
      <div class="space-y-6">

        <!-- Progress 1 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium text-gray-800">Waste Diversion from Landfill</span>
            <span class="text-gray-600">90%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-green-600 h-3 rounded-full" style="width:90%"></div>
          </div>
        </div>

        <!-- Progress 2 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium text-gray-800">Recycling Rate</span>
            <span class="text-gray-600">85%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-green-500 h-3 rounded-full" style="width:85%"></div>
          </div>
        </div>

        <!-- Progress 3 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium text-gray-800">Client Satisfaction</span>
            <span class="text-gray-600">98%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-green-700 h-3 rounded-full" style="width:98%"></div>
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
        <div class="w-24 h-12 bg-white/20 rounded-full flex items-center justify-center">
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
          <!-- <a href="{{ route('about-us') }}" class="inline-flex items-center text-sm font-semibold">
            Learn More →
          </a> -->
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
    </main>
    <x-footer />
</body>
</html>
