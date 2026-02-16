<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services Header</title>
   <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  body { font-family: 'Inter', sans-serif; }
  h1 { font-family: 'Plus Jakarta Sans', sans-serif; }

  /* scrolling animation */
  @keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  .marquee {
    animation: marquee 5s linear infinite;
  }

 .worker-container {
    position: absolute;
    bottom: 0;
    right: 0;
    transform: translateY(0%);
    width: 30%;
    z-index: 10;
}

@media (max-width: 768px) {
    .worker-container {
        position: relative;
        width: 80%;
        transform: translateY(0);
        margin: 20px auto 0;
    }
}

</style>
</head>
<body>
  
<x-hero 
  title="Our Services"
  subtitle="Innovative, reliable environmental solutions for communities and businesses — from waste management to eco infrastructure."
  bg="https://images.unsplash.com/photo-1715940309860-585403114687?q=80&w=1170&auto=format&fit=crop"
  leftImage="https://images.pexels.com/photos/2682683/pexels-photo-2682683.jpeg"
  leftTitle="Smart Waste Solutions"
  leftText="Efficient collection, sorting, and recycling systems tailored to your needs."
  leftLinkHref="#"
  leftLinkLabel="Explore →"
  rightQuote="Partnering with MJ GREENS helped us reduce costs and improve sustainability metrics across the board."
  rightAuthor="Operations Lead"
  rightMeta="Municipal Services"
/>

{{-----------------------------------------Services  section Start----------------------------------------}}
<!-- Services Section Start -->
<section class="py-16 md:py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <!-- Section Header -->
    <div class="text-center mb-14">
      <p class="text-green-600 font-semibold mb-3">
        Features Services
      </p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
        A wide range of waste disposal services
      </h2>
    </div>

    <!-- Services Grid -->
   <!-- Services Grid -->
<div class="grid gap-x-10 gap-y-16 md:grid-cols-2 lg:grid-cols-3">


      <!-- Card Template (repeat) -->
      <!-- Card 1 -->
      <div class="relative bg-white rounded-2xl shadow-lg p-8 pt-14 text-center hover:shadow-xl transition">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white shadow-md rounded-xl w-16 h-16 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <g stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 10l9-7 9 7"></path>
              <path d="M5 10v9h14v-9"></path>
              <path d="M12 14v5"></path>
            </g>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Door To Door</h3>
        <p class="text-gray-600 text-sm mb-6">
         As India's leading provider of professional decentralized Waste Management solutions, MJGREENS is a pioneer in this field. As a professional waste management company, MJGREENS has developed a good understanding of how to steer residential outfits towards establishing good waste management solutions. Coordinating with all stakeholders, including resident welfare associations, property managers, volunteer residents, housekeeping teams, and maintenance teams, is a must.
        </p>
        <a href="{{ route('contact') }}" class="w-10 h-10 mx-auto rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
          →
        </a>
      </div>

      <!-- Card 2 -->
      <div class="relative bg-white rounded-2xl shadow-lg p-8 pt-14 text-center hover:shadow-xl transition">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white shadow-md rounded-xl w-16 h-16 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <g stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 5l5 5"></path>
              <path d="M13 6l3-3 4 4-3 3"></path>
              <path d="M4 8h7v10H4z"></path>
              <path d="M4 12h7"></path>
              <path d="M4 16h7"></path>
            </g>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">C&D</h3>
        <p class="text-gray-600 text-sm mb-6">
          Recent decades have seen a boom in the construction industry due to the rapid increase in population and urbanization. Indian construction and demolition waste was estimated to be 50 million tons in 2013 by the Center of Science and Environment (CSE). In 2020, it is estimated that the number will reach 287 million tons per year.
As part of the holistic waste management solutions offered by MJGREENS, the company has taken proactive steps towards adopting the Construction and Demolition Waste Management Rules, 2019.
        </p>
        <a href="{{ route('contact') }}" class="w-10 h-10 mx-auto rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
          →
        </a>
      </div>

      <!-- Card 3 -->
      <div class="relative bg-white rounded-2xl shadow-lg p-8 pt-14 text-center hover:shadow-xl transition">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white shadow-md rounded-xl w-16 h-16 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <g stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 4c4.418 0 8 3.582 8 8h-2.5"></path>
              <path d="M17.5 12l2.5 2.5"></path>
              <path d="M12 20c-4.418 0-8-3.582-8-8h2.5"></path>
              <path d="M6.5 12L4 9.5"></path>
            </g>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">MRF</h3>
        <p class="text-gray-600 text-sm mb-6">
          The MRF operated by MJGREENS is one of the biggest in Karnataka. Waste management through MRF represents the future in India. It is a completely resource-recovery factory that uses mechanization to process dry waste. We want to move closer to a circular economy and achieve the global goals surrounding sustainable development.
The categories are initially categorized into 20 groupings, then compacted and shipped to authorized end destinations. In recycling plants, waste is transformed into products like stationery, chipboards, and T-shirts.
        </p>
        <a href="{{ route('contact') }}" class="w-10 h-10 mx-auto rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
          →
        </a>
      </div>

      <!-- Card 4 -->
      <div class="relative bg-white rounded-2xl shadow-lg p-8 pt-14 text-center hover:shadow-xl transition">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white shadow-md rounded-xl w-16 h-16 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <g stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 13h9v5H3z"></path>
              <path d="M12 13h4l3 3v2h-7z"></path>
              <circle cx="6" cy="18" r="1.5"></circle>
              <circle cx="18" cy="18" r="1.5"></circle>
            </g>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Secondary Collection and Transportation</h3>
        <ul class="text-gray-600 text-sm mb-6">
        <li>  • Operation and Maintenance of Transfer Station </li>
<li>          • Through Portable/ Static Compactors </li>
<li>          • Hook Loaders</li>
        </ul>
        <a href="{{ route('contact') }}" class="w-10 h-10 mx-auto rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
          →
        </a>
      </div>

      <!-- Card 5 -->
      <div class="relative bg-white rounded-2xl shadow-lg p-8 pt-14 text-center hover:shadow-xl transition">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white shadow-md rounded-xl w-16 h-16 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <g stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 5c-4 2-7 5-7 9 0 3.5 3 5.5 7 5.5s7-2 7-5.5c0-4-3-7-7-9z"></path>
              <path d="M12 8c-2 2-4 3.5-5 6"></path>
            </g>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Bio mining/ Bio remediation</h3>
        <ul class="text-gray-600 text-sm mb-6">
        <li>•  Treatment of Legacy Waste through Bio mining/ Bio remediation using state of art Trommels</li>
        <li>• Reclamation of Land</li>
        <li>• Sustainable Solution</li>
    </ul>
        <a href="{{ route('contact') }}" class="w-10 h-10 mx-auto rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
          →
        </a>
      </div>

      <!-- Card 6 -->
      <div class="relative bg-white rounded-2xl shadow-lg p-8 pt-14 text-center hover:shadow-xl transition">
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white shadow-md rounded-xl w-16 h-16 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <g stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 20h10"></path>
              <path d="M9 14l6 6"></path>
              <path d="M14 9l-2 2 6 6 2-2z"></path>
            </g>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Mechanical Sweeping</h3>
        <ul class="text-gray-600 text-sm mb-6">
            <li>• Very Low Operating Cost</li>
            <li>• Machines used which are best in the industry</li>
            <li>• Efficient in heavy sweeping condition</li>
            <li>• Remove packed dirt on uneven roads</li>
        </ul>
        <a href="{{ route('contact') }}" class="w-10 h-10 mx-auto rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
          →
        </a>
      </div>

    </div>


    
  </div>
</section>
<!-- Services Section End -->

{{-----------------------------------------Services section end----------------------------------------}}

{{-----------------------------------------Why Choose Us Section Start----------------------------------------}}
<!-- Why Choose Us Section Start -->
<section class="py-16 md:py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- LEFT CONTENT -->
      <div>

        <!-- Subtitle -->
        <p class="text-green-600 font-semibold mb-3">
          Why Choose Us
        </p>

        <!-- Heading -->
        <h2 class="text-2xl md:text-2xl lg:text-3xl font-extrabold text-gray-900 leading-tight mb-6">
          Your partner for sustainable environmental solutions
        </h2>

        <!-- Paragraph -->
        <p class="text-gray-600 mb-8 max-w-xl">
          We provide innovative and reliable environmental solutions that help businesses and communities reduce their impact and build a greener future.
        </p>

        <!-- Feature Box -->
        <div class="bg-gray-50 rounded-2xl p-6 shadow-sm mb-8 space-y-4">

          <div class="flex items-start gap-3">
            <span class="w-7 h-7 bg-green-600 text-white rounded-full flex items-center justify-center text-sm">✓</span>
            <p class="text-gray-800 text-sm">
              Expert Team with Extensive Environmental Knowledge
            </p>
          </div>

          <div class="flex items-start gap-3">
            <span class="w-7 h-7 bg-green-600 text-white rounded-full flex items-center justify-center text-sm">✓</span>
            <p class="text-gray-800 text-sm">
              Commitment to Regulatory Compliance and Standards
            </p>
          </div>

          <div class="flex items-start gap-3">
            <span class="w-7 h-7 bg-green-600 text-white rounded-full flex items-center justify-center text-sm">✓</span>
            <p class="text-gray-800 text-sm">
              Comprehensive Environmental Impact Assessments and Reports
            </p>
          </div>

        </div>

        <!-- Button -->
        <a href="{{ route('contact') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-full transition">
          Contact Us
        </a>

      </div>

    <!-- RIGHT IMAGE COLLAGE (adjusted alignment) -->
<div class="grid grid-cols-2 gap-6 items-start">

  <!-- Left column (2 images slightly upper) -->
  <div class="flex flex-col gap-6">

    <!-- Top square image -->
    <div class="w-full">
      <img 
        src="https://images.pexels.com/photos/31022357/pexels-photo-31022357.jpeg"
        class="w-full aspect-square object-cover rounded-2xl shadow-md"
        alt="Earth tree"
      >
    </div>

    <!-- Bottom wide image -->
    <div class="w-full">
      <img 
        src="https://images.pexels.com/photos/2682683/pexels-photo-2682683.jpeg"
        class="w-full h-40 md:h-44 object-cover rounded-2xl shadow-md"
        alt="Children planting"
      >
    </div>

  </div>

  <!-- Right tall image (shifted downward) -->
  <div class="w-full mt-16 md:mt-24">
    <img 
      src="https://images.pexels.com/photos/19507080/pexels-photo-19507080.jpeg"
      class="w-full h-[320px] md:h-[420px] object-cover rounded-2xl shadow-md"
      alt="Tree windmill"
    >
  </div>

</div>





    </div>
  </div>
</section>
<!-- Why Choose Us Section End -->
{{-----------------------------------------Why Choose Us Section End----------------------------------------}}

{{-----------------------------------------Environmental Facts Section Start----------------------------------------}}

<!-- Environmental Facts Section Start -->
<section class="relative overflow-visible">

  
  <!-- Background Image -->
  <div class="absolute inset-0 bg-[url('https://images.pexels.com/photos/3573841/pexels-photo-3573841.jpeg')] bg-cover bg-center"></div>

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black/40"></div>

   <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 py-4 md:py-6">

    <div class="grid lg:grid-cols-2 gap-10 items-center">

      <!-- LEFT CONTENT -->
      <div class="text-white">

        <p class="text-green-400 font-semibold text-sm mb-4 uppercase tracking-wide">
          Our Facts
        </p>

        <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight mb-6">
          Key environmental facts for a sustainable future
        </h2>

        <p class="text-green-100 mb-8 max-w-xl">
          Discover essential facts about our planet’s health, climate change, and sustainability efforts. Understanding these facts empowers us to take action.
        </p>

        <!-- Feature Points -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 text-green-100 text-sm">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 rounded-full bg-green-600/30 flex items-center justify-center">✓</span>
            <span>Carbon Footprint Reduction</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 rounded-full bg-green-600/30 flex items-center justify-center">★</span>
            <span>Wildlife Conservation Efforts</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 rounded-full bg-green-600/30 flex items-center justify-center">♻</span>
            <span>Sustainable Waste Management</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 rounded-full bg-green-600/30 flex items-center justify-center">🌿</span>
            <span>Eco-Friendly Waste Disposal</span>
          </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6">

          <div>
            <p class="text-3xl font-bold">150+</p>
            <p class="text-green-200 text-sm">Team member</p>
          </div>

          <div>
            <p class="text-3xl font-bold">650+</p>
            <p class="text-green-200 text-sm">Customer review</p>
          </div>

          <div>
            <p class="text-3xl font-bold">5k+</p>
            <p class="text-green-200 text-sm">Project complete</p>
          </div>

        </div>

      </div>

      <!-- RIGHT IMAGE (Overflow) -->
      <div class="worker-container">
        <img 
          src="https://dkkit.rometheme.pro/diligent/wp-content/uploads/sites/100/2024/03/VVJT84U.png"
          alt="Worker"
          class="w-full object-contain"
        >
      </div>

    </div>
  </div>

</section>
<!-- Environmental Facts Section End -->

<x-footer />

</body>
</html>
