<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europe Gallery - Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Inter:wght@400;500&display=swap');
        
        body { font-family: 'Inter', sans-serif; }
        h2 { font-family: 'Plus Jakarta Sans', sans-serif; }

        .text-orange-accent { color: #f26522; }
        
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
<body class="bg-gray-50 py-20">

    <section class="container mx-auto px-6 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            
            <div class="w-full lg:w-2/5">
                <span class="text-gray-500 font-bold uppercase tracking-widest text-xs mb-4 block">
                    Never Ending Journey
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                    EUROPE <span class="text-orange-accent">GALLERY</span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Explore the timeless beauty of the European continent. From the sun-drenched coasts of Italy to the historic streets of Paris, our gallery captures the essence of a never-ending journey through culture and heritage.
                </p>
                <button class="border-2 border-gray-900 text-gray-900 font-bold py-3 px-8 rounded-full hover:bg-gray-900 hover:text-white transition duration-300">
                    View All Photos
                </button>
            </div>

            <div class="w-full lg:w-3/5 collage-container" id="collage">
                
                <div class="gallery-frame w-64 z-10 top-0 left-0">
                    <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?auto=format&fit=crop&q=80" alt="Europe 1" class="w-full h-40 object-cover">
                </div>

                <div class="gallery-frame w-56 z-0 top-10 right-10">
                    <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&q=80" alt="Europe 2" class="w-full h-48 object-cover">
                </div>

                <div class="gallery-frame w-72 z-20 top-32 left-24">
                    <img src="https://images.unsplash.com/photo-1493156340248-9366113b2909?auto=format&fit=crop&q=80" alt="Europe 3" class="w-full h-56 object-cover">
                </div>

                <div class="gallery-frame w-60 z-30 bottom-0 right-4">
                    <img src="https://images.unsplash.com/photo-1511739001486-6bfe10ce785f?auto=format&fit=crop&q=80" alt="Europe 4" class="w-full h-44 object-cover">
                </div>

            </div>
        </div>
    </section>

    <script>
        // Optional JavaScript for refined 3D movement based on mouse position
        const collage = document.getElementById('collage');
        const frames = document.querySelectorAll('.gallery-frame');

        collage.addEventListener('mousemove', (e) => {
            if (window.innerWidth < 768) return;
            
            const { clientX, clientY } = e;
            const { left, top, width, height } = collage.getBoundingClientRect();
            
            const x = (clientX - left) / width - 0.5;
            const y = (clientY - top) / height - 0.5;

            frames.forEach((frame, index) => {
                const depth = (index + 1) * 10;
                frame.style.transform = `translate(${x * depth}px, ${y * depth}px) rotate(${x * 2}deg)`;
            });
        });

        collage.addEventListener('mouseleave', () => {
            frames.forEach((frame) => {
                frame.style.transform = `translate(0, 0) rotate(0deg)`;
            });
        });
    </script>
</body>
</html>