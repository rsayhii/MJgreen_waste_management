<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery Section</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
/* Featured image hover */
.feature-card {
  transition: all 0.35s ease;
}
.feature-card:hover {
  transform: translateY(-8px) scale(1.02);
}

/* 3D collage images */
.collage-img {
  transition: all 0.4s ease;
}
.collage-img:hover {
  transform: scale(1.05) rotate(0deg) !important;
  z-index: 50;
}

/* 3D Collage Container Constraints */
.collage-container {
    position: relative;
    min-height: 500px;
}

/* Image Frame Styling */
.gallery-frame {
    background: white;
    padding: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: absolute;
    border-radius: 4px;
}

.gallery-frame:hover {
    transform: scale(1.05) translateY(-10px) rotate(1deg);
    z-index: 50 !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.25);
}

/* Mobile specific adjustments */
@media (max-width: 768px) {
    .collage-container {
        min-height: auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .gallery-frame {
        position: relative !important;
        inset: 0 !important;
        width: 100% !important;
        transform: none !important;
    }
}
</style>
</head>
<body class="bg-gray-50">

<!-- =========================
   FEATURED PHOTOS GRID
========================= -->
<section class="py-16 md:py-24 bg-white">

  <div class="max-w-6xl mx-auto px-4 text-center mb-6">
    <p class="text-green-500 font-semibold mb-2">
      Our Gallery
    </p>

    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
      FEATURED <span class="text-green-500">PHOTOS</span>
    </h2>

    <p class="text-gray-500 max-w-xl mx-auto">
      Explore our latest journeys and beautiful destinations captured through our lens.
    </p>
  </div>

  <div class="max-w-5xl mx-auto px-6 grid sm:grid-cols-2 gap-8">
    <div class="bg-white p-3 shadow-md rounded-xl feature-card">
      <img src="https://images.pexels.com/photos/7153002/pexels-photo-7153002.jpeg"
        class="rounded-lg w-full h-60 object-cover">
    </div>

    <div class="bg-white p-3 shadow-md rounded-xl feature-card">
      <img src="https://images.pexels.com/photos/35146588/pexels-photo-35146588.jpeg"
        class="rounded-lg w-full h-60 object-cover">
    </div>

    <div class="bg-white p-3 shadow-md rounded-xl feature-card">
      <img src="https://images.pexels.com/photos/11115607/pexels-photo-11115607.jpeg"
        class="rounded-lg w-full h-60 object-cover">
    </div>

    <div class="bg-white p-3 shadow-md rounded-xl feature-card">
      <img src="https://images.pexels.com/photos/14036356/pexels-photo-14036356.jpeg"
        class="rounded-lg w-full h-60 object-cover">
    </div>
  </div>
</section>

<!-- =========================
   EUROPE GALLERY COLLAGE
========================= -->
<section class="py-16 md:py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

    <div>
      <p class="text-green-500 font-semibold mb-2">
        Never Ending Journey
      </p>

      <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
        MJGREEN <span class="text-green-500">GALLERY</span>
      </h2>

      <p class="text-gray-600 max-w-md">
        Discover breathtaking landscapes, historic cities, and unforgettable travel moments across Europe.
      </p>
    </div>

    <div class="relative h-[420px] md:h-[500px]">
      <div class="absolute top-0 left-10 w-40 md:w-48 bg-white p-2 rounded-xl shadow-xl collage-img rotate-[-8deg]">
        <img src="https://images.pexels.com/photos/35436630/pexels-photo-35436630.jpeg"
          class="rounded-lg w-full h-52 object-cover">
      </div>

      <div class="absolute top-16 left-0 w-40 md:w-48 bg-white p-2 rounded-xl shadow-xl collage-img rotate-[6deg]">
        <img src="https://images.pexels.com/photos/7565381/pexels-photo-7565381.jpeg"
          class="rounded-lg w-full h-52 object-cover">
      </div>

      <div class="absolute bottom-0 left-24 w-44 md:w-52 bg-white p-2 rounded-xl shadow-xl collage-img rotate-[-4deg]">
        <img src="https://images.pexels.com/photos/35146588/pexels-photo-35146588.jpeg"
          class="rounded-lg w-full h-60 object-cover">
      </div>

      <div class="absolute top-8 right-0 w-48 md:w-60 bg-white p-2 rounded-xl shadow-xl collage-img rotate-[4deg] z-20">
        <img src="https://images.pexels.com/photos/14370984/pexels-photo-14370984.png"
          class="rounded-lg w-full h-72 object-cover">
      </div>
    </div>

  </div>
</section>

{{-- 3D collage images Section --}}
<section class="container mx-auto px-4 lg:px-20 mb-12">
  <div class="flex flex-col lg:flex-row items-center gap-16">

    <div class="w-full lg:w-2/5">
      <span class="text-green-500 font-bold uppercase tracking-widest text-xs mb-4 block">
        Never Ending Journey
      </span>
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
        MJGREEN <span class="text-green-500">GALLERY</span>
      </h2>
      <p class="text-gray-600 leading-relaxed mb-8">
        Explore the timeless beauty of the European continent.
      </p>
      <button class="border-2 border-gray-900 text-gray-900 font-bold py-3 px-8 rounded-full hover:bg-gray-900 hover:text-white transition duration-300">
        View All Photos
      </button>
    </div>

    <div class="w-full lg:w-3/5 collage-container" id="collage">

      <div class="gallery-frame w-64 z-10 top-0 left-0">
        <img src="https://images.pexels.com/photos/5999547/pexels-photo-5999547.jpeg" class="w-full h-40 object-cover">
      </div>

      <div class="gallery-frame w-56 z-0 top-10 right-10">
        <img src="https://images.pexels.com/photos/9090138/pexels-photo-9090138.jpeg" class="w-full h-48 object-cover">
      </div>

      <div class="gallery-frame w-72 z-20 top-32 left-24">
        <img src="https://images.pexels.com/photos/709552/pexels-photo-709552.jpeg" class="w-full h-56 object-cover">
      </div>

      <div class="gallery-frame w-60 z-30 bottom-0 right-4">
        <img src="https://images.pexels.com/photos/7475819/pexels-photo-7475819.jpeg" class="w-full h-44 object-cover">
      </div>

    </div>
  </div>
</section>

<script>
/* First collage hover tilt */
document.querySelectorAll('.collage-img').forEach(img => {
  img.addEventListener('mousemove', e => {
    const rect = img.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;
    img.style.transform += ` perspective(600px) rotateX(${y*6}deg) rotateY(${x*6}deg)`;
  });

  img.addEventListener('mouseleave', () => {
    img.style.transform = img.style.transform.replace(/perspective.*$/, '');
  });
});

/* Second collage depth effect */
const collageContainer = document.getElementById('collage');
const frames = document.querySelectorAll('.gallery-frame');

if (collageContainer) {
  collageContainer.addEventListener('mousemove', (e) => {
    if (window.innerWidth < 768) return;

    const { clientX, clientY } = e;
    const { left, top, width, height } = collageContainer.getBoundingClientRect();

    const x = (clientX - left) / width - 0.5;
    const y = (clientY - top) / height - 0.5;

    frames.forEach((frame, index) => {
      const depth = (index + 1) * 10;
      frame.style.transform = `translate(${x * depth}px, ${y * depth}px) rotate(${x * 2}deg)`;
    });
  });

  collageContainer.addEventListener('mouseleave', () => {
    frames.forEach((frame) => {
      frame.style.transform = `translate(0, 0) rotate(0deg)`;
    });
  });
}
</script>

</body>
</html>
