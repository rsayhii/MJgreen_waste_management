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
      button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Redirecting...';
      button.disabled = true;
      
      // Collect form data
      const firstName = document.getElementById('firstName').value;
      const lastName = document.getElementById('lastName').value;
      const email = document.getElementById('email').value;
      const subject = document.getElementById('subject').value;
      const messageText = document.getElementById('message').value;
      
      // Format WhatsApp message
      const whatsappNumber = '9670820000';
      const message = `*New Query - MJ GREENS*%0A%0A` +
                     `*Name:* ${firstName} ${lastName}%0A` +
                     `*Email:* ${email}%0A` +
                     `*Subject:* ${subject}%0A%0A` +
                     `*Message:* ${messageText}`;
      
      const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${message}`;
      
      // Simulate short delay
      setTimeout(() => {
        // Open WhatsApp
        window.open(whatsappUrl, '_blank');
        
        button.innerHTML = '<i class="fas fa-check mr-2"></i> Redirected!';
        button.classList.remove('from-green-dark', 'to-green-600');
        button.classList.add('from-green-medium', 'to-green-dark');
        
        // Reset form after 2 seconds
        setTimeout(() => {
          e.target.reset();
          button.innerHTML = originalText;
          button.disabled = false;
          button.classList.remove('from-green-medium', 'to-green-dark');
          button.classList.add('from-green-dark', 'to-green-600');
        }, 2000);
      }, 1000);
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
<body>

<x-hero 
  title="Get in Touch"
  subtitle="Questions, partnerships, or ideas — we’d love to hear from you. Let’s build a sustainable future together."
  bg="https://images.pexels.com/photos/7042926/pexels-photo-7042926.jpeg"
  leftImage="https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=200&auto=format&fit=crop"
  leftTitle="Schedule a Call"
  leftText="Connect with our team to explore solutions for your organization."
  leftLinkHref="#"
  leftLinkLabel="Book Now →"
  rightQuote="The team is responsive and thoughtful. Our collaboration has been seamless from day one."
  rightAuthor="Priya"
  rightMeta="Sustainability Lead"
/>

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
              <input type="text" id="firstName" placeholder="First Name" required
                class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
              <div class="absolute left-4 top-4 text-gray-400">
                <i class="fas fa-user"></i>
              </div>
            </div>
            
            <div class="relative">
              <input type="text" id="lastName" placeholder="Last Name" required
                class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
              <div class="absolute left-4 top-4 text-gray-400">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>

          <div class="relative">
            <input type="email" id="email" placeholder="Email Address" required
              class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
            <div class="absolute left-4 top-4 text-gray-400">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="relative">
            <input type="text" id="subject" placeholder="Subject" required
              class="form-input w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:border-accent transition pl-12">
            <div class="absolute left-4 top-4 text-gray-400">
              <i class="fas fa-tag"></i>
            </div>
          </div>

          <div class="relative">
            <textarea id="message" rows="5" placeholder="Your Message" required
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
  <div class="absolute inset-0  z-10"></div>
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



<x-footer />

</body>
</html>
