<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | Greenset</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            accent: "#C7F000",
            "green-dark": "#166534",
            "green-medium": "#10B981",
            "green-light": "#D1FAE5",
            "leaf-green": "#22C55E"
          },
          boxShadow: {
            "custom": "0 10px 25px rgba(0,0,0,0.08)",
            "custom-lg": "0 20px 40px rgba(0,0,0,0.1)"
          },
          animation: {
            'fade-in': 'fadeIn 0.8s ease-in-out',
            'slide-up': 'slideUp 0.6s ease-out'
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' }
            },
            slideUp: {
              '0%': { transform: 'translateY(20px)', opacity: '0' },
              '100%': { transform: 'translateY(0)', opacity: '1' }
            }
          }
        }
      }
    }

    function submitForm(e) {
      e.preventDefault();
      
      // Show loading state
      const button = e.target.querySelector('button[type="submit"]');
      const originalText = button.innerHTML;
      button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';
      button.disabled = true;
      
      // Simulate API call
      setTimeout(() => {
        button.innerHTML = '<i class="fas fa-check mr-2"></i> Message Sent!';
        button.classList.remove('from-green-dark', 'to-green-600');
        button.classList.add('from-green-medium', 'to-green-dark');
        
        // Reset form after 2 seconds
        setTimeout(() => {
          e.target.reset();
          button.innerHTML = originalText;
          button.disabled = false;
          button.classList.remove('from-green-medium', 'to-green-dark');
          button.classList.add('from-green-dark', 'to-green-600');
          
          // Show success message
          alert("Thank you for contacting Greenset 🌱\nWe'll get back to you within 24 hours.");
        }, 2000);
      }, 1500);
    }
    
    // Initialize form validation
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      const inputs = form.querySelectorAll('input, textarea');
      
      inputs.forEach(input => {
        // Add focus effect
        input.addEventListener('focus', function() {
          this.parentElement.classList.add('ring-2', 'ring-accent', 'ring-opacity-30');
        });
        
        input.addEventListener('blur', function() {
          this.parentElement.classList.remove('ring-2', 'ring-accent', 'ring-opacity-30');
        });
      });
    });
  </script>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap');
    
    body {
      font-family: 'Inter', sans-serif;
    }
    
    h1, h2, h3, h4 {
      font-family: 'Poppins', sans-serif;
    }
    
    .contact-card {
      transition: all 0.3s ease;
    }
    
    .contact-card:hover {
      transform: translateY(-5px);
    }
    
    .form-input:focus {
      box-shadow: 0 0 0 3px rgba(199, 240, 0, 0.2);
    }
    
    .map-overlay {
      background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.8) 100%);
      pointer-events: none;
    }
    
    .pulse {
      animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(22, 101, 52, 0.4); }
      70% { box-shadow: 0 0 0 10px rgba(22, 101, 52, 0); }
      100% { box-shadow: 0 0 0 0 rgba(22, 101, 52, 0); }
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-900">

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-br from-green-50 via-white to-lime-50 py-6 md:py-8">
  <div class="max-w-6xl mx-auto px-6 relative z-10 text-center animate-fade-in">
    <span class="inline-block px-4 py-2 rounded-full bg-green-light text-green-dark font-medium mb-6 animate-slide-up">
      <i class="fas fa-leaf mr-2"></i>Connect with us
    </span>
    
    <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
      Get in <span class="text-green-dark">Touch</span>
    </h1>
    
    <p class="text-gray-700 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-10">
      Questions, partnerships, or ideas — we'd love to hear from you. Let's build a sustainable future together.
    </p>
    
    <div class="flex justify-center space-x-4">
      <div class="w-3 h-3 rounded-full bg-green-dark pulse"></div>
      <div class="w-3 h-3 rounded-full bg-accent pulse" style="animation-delay: 0.2s"></div>
      <div class="w-3 h-3 rounded-full bg-leaf-green pulse" style="animation-delay: 0.4s"></div>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="max-w-6xl mx-auto px-2 py-16 md:py-24">
  <div class="grid md:grid-cols-2 gap-16 items-start">
    
    <!-- LEFT INFO -->
    <div class="space-y-10 animate-slide-up">
      <div>
        <h2 class="text-4xl font-bold mb-4 text-green-dark">Contact Information</h2>
        <p class="text-gray-600 leading-relaxed">
          Reach out to us for eco-friendly solutions, collaborations, or any questions about our sustainability initiatives. Our team is ready to assist you.
        </p>
      </div>

      <!-- Contact Cards -->
      <div class="space-y-6">
        <div class="contact-card bg-white border border-gray-200 rounded-2xl p-6 shadow-custom hover:shadow-custom-lg">
          <div class="flex items-start">
            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-light flex items-center justify-center mr-4">
              <i class="fas fa-map-marker-alt text-green-dark text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg mb-1">Our Location</h3>
              <p class="text-gray-600">
97/B (1/2), First Floor, 31st Cross,<br> Jayanagar
7th Block, Banglore - 560070
</p>
            </div>
          </div>
        </div>
        
        <div class="contact-card bg-white border border-gray-200 rounded-2xl p-6 shadow-custom hover:shadow-custom-lg">
          <div class="flex items-start">
            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-light flex items-center justify-center mr-4">
              <i class="fas fa-envelope text-green-dark text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg mb-1">Email Address</h3>
              <p class="text-gray-600">info@mjgreens.in</p>
              <p class="text-gray-500 text-sm mt-1">We respond within 24 hours</p>
            </div>
          </div>
        </div>
        
        <div class="contact-card bg-white border border-gray-200 rounded-2xl p-6 shadow-custom hover:shadow-custom-lg">
          <div class="flex items-start">
            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-light flex items-center justify-center mr-4">
              <i class="fas fa-phone text-green-dark text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg mb-1">Phone Number</h3>
              <p class="text-gray-600">+91 9670820000</p>
              <p class="text-gray-500 text-sm mt-1">Mon-Fri, 9:00 AM - 6:00 PM</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Social Media -->
      <div>
        <h3 class="font-semibold text-xl mb-4 text-green-dark">Follow Our Journey</h3>
        <div class="flex space-x-4">
          <a href="https://x.com/Mjgreens1" class="w-10 h-10 rounded-full bg-green-light flex items-center justify-center text-green-dark hover:bg-accent hover:text-green-dark transition">
            <i class="fab fa-twitter"></i>
          </a>
         <a href="https://www.youtube.com/channel/UCOTe4oCLPQ4XAYdusj9rq3w" class="w-10 h-10 rounded-full bg-green-light flex items-center justify-center text-green-dark hover:bg-accent hover:text-green-dark transition">
  <i class="fab fa-youtube"></i>
</a>

          <a href="https://www.instagram.com/mjgreens_/" class="w-10 h-10 rounded-full bg-green-light flex items-center justify-center text-green-dark hover:bg-accent hover:text-green-dark transition">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/mjgreensinfra#" class="w-10 h-10 rounded-full bg-green-light flex items-center justify-center text-green-dark hover:bg-accent hover:text-green-dark transition">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- FORM -->
    <div class="animate-slide-up" style="animation-delay: 0.2s">
      <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-12 shadow-custom-lg">
        <div class="flex items-center mb-8">
          <div class="w-12 h-12 rounded-full bg-gradient-to-r from-green-dark to-green-medium flex items-center justify-center mr-4">
            <i class="fas fa-paper-plane text-white text-xl"></i>
          </div>
          <div>
            <h2 class="text-3xl font-bold text-gray-900">Send a Message</h2>
            <p class="text-gray-500">Fill out the form below</p>
          </div>
        </div>
        
        <form onsubmit="submitForm(event)" class="space-y-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="relative">
              <input type="text" placeholder="First Name" required
                class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
              <div class="absolute left-4 top-4 text-gray-400">
                <i class="fas fa-user"></i>
              </div>
            </div>
            
            <div class="relative">
              <input type="text" placeholder="Last Name" required
                class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
              <div class="absolute left-4 top-4 text-gray-400">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>

          <div class="relative">
            <input type="email" placeholder="Email Address" required
              class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
            <div class="absolute left-4 top-4 text-gray-400">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="relative">
            <input type="text" placeholder="Subject" required
              class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
            <div class="absolute left-4 top-4 text-gray-400">
              <i class="fas fa-tag"></i>
            </div>
          </div>

          <div class="relative">
            <textarea rows="5" placeholder="Your Message" required
              class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12"></textarea>
            <div class="absolute left-4 top-4 text-gray-400">
              <i class="fas fa-edit"></i>
            </div>
          </div>

          <button type="submit"
            class="w-full bg-gradient-to-r from-green-dark to-green-600 text-white font-semibold px-10 py-4 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center group">
            <span>Send Message</span>
            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform"></i>
          </button>
          
          <p class="text-center text-gray-500 text-sm pt-4">
            <i class="fas fa-lock mr-2"></i>Your information is safe with us. We don't share your details.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- MAP SECTION -->
<section class="relative w-full h-[500px] mt-10 mb-10">
  <div class="absolute inset-0 map-overlay z-10"></div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.130258301979!2d77.58989067541183!3d12.928080090862533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670e5ee1d3b%3A0x3c4c5e2f92b0bbd3!2sJayanagar%2C%20Bengaluru%2C%20Karnataka%20560070!5e0!3m2!1sen!2sin!4v1707279000000!5m2!1sen!2sin"
    class="w-full h-full border-0 rounded-3xl shadow-custom-lg"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
  
  <div class="absolute bottom-8 left-8 z-20 bg-white rounded-2xl p-5 shadow-custom-lg max-w-xs">
    <div class="flex items-center mb-3">
      <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center mr-3">
        <i class="fas fa-map-pin text-green-dark"></i>
      </div>
      <h3 class="font-bold text-green-dark">Our Office</h3>
    </div>
    <p class="text-gray-600 text-sm">Visit us at our Jayanagar office for a face-to-face discussion about sustainability solutions.</p>
  </div>
</section>

<!-- FOOTER CTA -->
<section class="max-w-5xl mx-auto px-6 py-12 text-center">
  <div class="bg-gradient-to-r from-green-dark to-green-600 rounded-3xl p-10 text-white shadow-custom-lg">
    <h2 class="text-3xl font-bold mb-4">Ready to Make a Difference?</h2>
    <p class="text-green-light mb-8 max-w-2xl mx-auto">Join us in creating a greener future. Let's collaborate on sustainable projects that matter.</p>
    <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
      <a href="#" class="bg-white text-green-dark font-semibold px-8 py-3 rounded-full hover:bg-gray-100 transition">
        <i class="fas fa-handshake mr-2"></i> Partnership Inquiry
      </a>
      <a href="#" class="bg-accent text-green-dark font-semibold px-8 py-3 rounded-full hover:bg-lime-300 transition">
        <i class="fas fa-calendar-alt mr-2"></i> Schedule a Call
      </a>
    </div>
  </div>
</section>

<footer class="text-center py-8 text-gray-500 text-sm">
  <p>© 2023 MJGREENS. All rights reserved. Committed to a sustainable future.</p>
</footer>

</body>
</html>