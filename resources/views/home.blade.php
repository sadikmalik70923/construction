@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- 🏗️ Hero Video (Background) -->
@php
    // Configure hero content and video source
    $hero = [
        'title' => 'Building Your Future with GLOBECON CONSTRUCTION',
        'subtitle' => 'Quality engineered to last. Delivered on time.',
        'cta_text' => 'Explore Services',
        'cta_href' => '/services',

        // ✅ Local video path (make sure file exists in storage/app/public/videos)
        'video_mp4' => asset('storage/videos/WhatsApp Video.mp4'),
        'video_webm' => '', // optional webm format
    ];
@endphp

<section class="position-relative" style="height:100vh; overflow:hidden;">
    <video class="position-absolute top-0 start-0 w-100 h-100"
           autoplay muted loop playsinline
           poster="{{ asset('images/Aerial_1.webp') }}"
           style="object-fit:cover;">
        @if(!empty($hero['video_webm']))
            <source src="{{ $hero['video_webm'] }}" type="video/webm">
        @endif
        <source src="{{ $hero['video_mp4'] }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background:rgba(0,0,0,0.4);"></div>

    <div class="position-relative text-center text-white d-flex flex-column justify-content-center align-items-center h-100 px-3">
        <h1 class="display-4 fw-bold">{{ $hero['title'] }}</h1>
        <p class="lead mb-4">{{ $hero['subtitle'] }}</p>
        <a href="{{ $hero['cta_href'] }}" class="btn btn-warning btn-lg">{{ $hero['cta_text'] }}</a>
    </div>
</section>

<!-- 🧱 About Summary -->
<section class="bg-gray-50 py-16">
  <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    
    <!-- 🏗️ Left: Image -->
   <div class="relative overflow-hidden rounded-2xl shadow-xl group">
  <img 
    src="{{ asset('images/R_BF.webp') }}" 
    alt="Construction site with workers"
    class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-105"
  >
  <div class="absolute inset-0 bg-black/10"></div>
</div>

    <!-- 🏢 Right: Content -->
    <div>
      <h2 class="text-3xl lg:text-4xl font-bold text-blue-700 mb-4">About Our Company</h2>
      <p class="text-gray-700 mb-4">
        <span class="font-semibold text-gray-900">Globecon Construction LLC</span> is a trusted name in the 
        construction industry, delivering excellence in design, engineering, and project execution.
        We combine cutting-edge technology with decades of experience to ensure durability and precision in every build.
      </p>
      <p class="text-gray-700 mb-6">
        Our commitment to quality, safety, and sustainability drives everything we do. From residential towers
        to large-scale infrastructure, we turn every blueprint into a landmark.
      </p>
      <a href="/about" 
         class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white font-semibold px-6 py-2.5 rounded-full shadow-md transition-all duration-300">
        Learn More
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12l-3.75 3.75M3 12h18" />
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- 🧰 Services Preview -->
<!-- 🧰 Featured Services -->
<section class="container mx-auto py-16 px-4">
  <!-- Header -->
  <div class="flex flex-col md:flex-row justify-between items-center mb-10">
    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Our Featured Services</h2>
    <a href="/services" class="text-blue-600 hover:text-blue-800 font-medium mt-3 md:mt-0 transition-all duration-300">
      View all →
    </a>
  </div>

  <!-- Service Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Residential -->
    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-500 overflow-hidden">
      <div class="relative">
        <img src="{{ asset('images/3434349.jpg') }}" alt="Residential Construction"
             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent"></div>
      </div>
      <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors">
          Residential Construction
        </h3>
        <p class="text-gray-600 mb-4">Beautiful and durable homes built with modern finishes and expert craftsmanship.</p>
        <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:underline">
          Learn More 
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Commercial -->
    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-500 overflow-hidden">
      <div class="relative">
        <img src="{{ asset('images/pngtree-building-in-progress-3d-render-of-a-construction-project-on-blueprints-picture-image_3750782.jpg') }}" alt="Commercial Projects"
             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent"></div>
      </div>
      <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors">
          Commercial Projects
        </h3>
        <p class="text-gray-600 mb-4">Smart workspaces designed to boost productivity and reflect your brand’s presence.</p>
        <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:underline">
          Learn More 
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Infrastructure -->
    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-500 overflow-hidden">
      <div class="relative">
        <img src="{{ asset('images/pngtree-residential-building-under-construction-3d-rendering-with-excavator-and-crane-image_3630005.jpg') }}" alt="Infrastructure Development"
             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent"></div>
      </div>
      <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors">
          Infrastructure Development
        </h3>
        <p class="text-gray-600 mb-4">Reliable civil works ensuring strength, precision, and long-term performance.</p>
        <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:underline">
          Learn More 
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- 📊 Modern Counter Section -->
<section class="relative py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
  <!-- Decorative Overlay -->
  <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/asfalt-light.png')]"></div>

  <div class="relative container mx-auto px-6 lg:px-12">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-3 text-white">Our Achievements</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">Delivering excellence across residential, commercial, and infrastructure projects.</p>
    </div>

    <!-- Counter Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 text-center">
      
      <!-- Counter 1 -->
      <div class="group">
        <h3 class="text-6xl md:text-7xl font-extrabold text-yellow-400 count-up" data-target="15">0</h3>
        <div class="mt-3 text-gray-300 uppercase tracking-widest font-medium">Years Experience</div>
        <div class="mt-4 mx-auto w-16 border-t-2 border-yellow-400 group-hover:w-20 transition-all duration-500"></div>
      </div>

      <!-- Counter 2 -->
      <div class="group">
        <h3 class="text-6xl md:text-7xl font-extrabold text-yellow-400 count-up" data-target="725">0</h3>
        <div class="mt-3 text-gray-300 uppercase tracking-widest font-medium">Projects Completed</div>
        <div class="mt-4 mx-auto w-16 border-t-2 border-yellow-400 group-hover:w-20 transition-all duration-500"></div>
      </div>

      <!-- Counter 3 -->
      <div class="group">
        <h3 class="text-6xl md:text-7xl font-extrabold text-yellow-400 count-up" data-target="120">0</h3>
        <div class="mt-3 text-gray-300 uppercase tracking-widest font-medium">Skilled Engineers</div>
        <div class="mt-4 mx-auto w-16 border-t-2 border-yellow-400 group-hover:w-20 transition-all duration-500"></div>
      </div>

      <!-- Counter 4 -->
      <div class="group">
        <h3 class="text-6xl md:text-7xl font-extrabold text-yellow-400 count-up" data-target="45">0</h3>
        <div class="mt-3 text-gray-300 uppercase tracking-widest font-medium">Ongoing Projects</div>
        <div class="mt-4 mx-auto w-16 border-t-2 border-yellow-400 group-hover:w-20 transition-all duration-500"></div>
      </div>
    </div>
  </div>

  <!-- ✨ Count-Up Animation Script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const counters = document.querySelectorAll('.count-up');
      const speed = 200; // lower = faster

      const animate = (counter) => {
        const update = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;
          const increment = target / speed;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(update, 10);
          } else {
            counter.innerText = target.toLocaleString();
          }
        };
        update();
      };

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animate(entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });

      counters.forEach(counter => observer.observe(counter));
    });
  </script>
</section>

<!-- 🏗️ Our Projects Section -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Section Heading -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-10 text-center md:text-left">
      <div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2">Our Featured Projects</h2>
        <p class="text-gray-500">Explore a few of our recent construction achievements.</p>
      </div>
      <a href="/projects" class="mt-5 md:mt-0 inline-block bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition">
        View All Projects
      </a>
    </div>

    <!-- Project Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Project 1 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg bg-white">
        <img src="/images/photo_luxury-apartment-for-sale_content_wIK_min.jpeg" alt="Luxury Apartment Complex" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <a href="/projects" class="text-white font-semibold text-lg">View Project</a>
        </div>
        <div class="p-5">
          <h3 class="text-xl font-bold text-gray-800 mb-2">Luxury Apartment Complex</h3>
          <p class="text-gray-600 text-sm">High-rise apartments designed for modern living and sustainability.</p>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg bg-white">
        <img src="/images/featured_image.jpg" alt="Corporate Tower" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <a href="/projects" class="text-white font-semibold text-lg">View Project</a>
        </div>
        <div class="p-5">
          <h3 class="text-xl font-bold text-gray-800 mb-2">Corporate Tower</h3>
          <p class="text-gray-600 text-sm">A 40-floor business hub with world-class architecture and amenities.</p>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg bg-white">
        <img src="/images/Delhi-Mumbai-Expressway1.webp" alt="Highway Project" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <a href="/projects" class="text-white font-semibold text-lg">View Project</a>
        </div>
        <div class="p-5">
          <h3 class="text-xl font-bold text-gray-800 mb-2">Highway Infrastructure</h3>
          <p class="text-gray-600 text-sm">Smart infrastructure built with precision and durability.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 👷 Our Team Section -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2">Meet Our Team</h2>
      <p class="text-gray-500">The people who make every project a success.</p>
    </div>

    <!-- Swiper Slider -->
    <div class="swiper teamSwiper">
      <div class="swiper-wrapper">
        
        <!-- Team Member 1 -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden text-center p-6 hover:shadow-xl transition">
            <img src="/images/team/member1.jpg" alt="John Doe" class="w-40 h-40 mx-auto rounded-full object-cover mb-4 border-4 border-blue-600">
            <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
            <p class="text-blue-600 font-medium mb-2">Project Manager</p>
            <p class="text-gray-600 text-sm">Oversees construction projects with 10+ years of experience in managing residential and commercial sites.</p>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden text-center p-6 hover:shadow-xl transition">
            <img src="/images/team/member2.jpg" alt="Sarah Khan" class="w-40 h-40 mx-auto rounded-full object-cover mb-4 border-4 border-blue-600">
            <h3 class="text-xl font-bold text-gray-800">Sarah Khan</h3>
            <p class="text-blue-600 font-medium mb-2">Senior Architect</p>
            <p class="text-gray-600 text-sm">Creates innovative and sustainable designs that transform client visions into reality.</p>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden text-center p-6 hover:shadow-xl transition">
            <img src="/images/team/member3.jpg" alt="Raj Patel" class="w-40 h-40 mx-auto rounded-full object-cover mb-4 border-4 border-blue-600">
            <h3 class="text-xl font-bold text-gray-800">Raj Patel</h3>
            <p class="text-blue-600 font-medium mb-2">Site Engineer</p>
            <p class="text-gray-600 text-sm">Ensures safety, quality, and precision at every stage of our construction projects.</p>
          </div>
        </div>

        <!-- Team Member 4 -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-2xl shadow-lg overflow-hidden text-center p-6 hover:shadow-xl transition">
            <img src="/images/team/member4.jpg" alt="Aisha Sharma" class="w-40 h-40 mx-auto rounded-full object-cover mb-4 border-4 border-blue-600">
            <h3 class="text-xl font-bold text-gray-800">Aisha Sharma</h3>
            <p class="text-blue-600 font-medium mb-2">Interior Designer</p>
            <p class="text-gray-600 text-sm">Combines creativity and practicality to deliver stunning, functional interiors.</p>
          </div>
        </div>

      </div>

      <!-- Slider Controls -->
      <div class="flex justify-center mt-8 gap-6">
        <div class="swiper-button-prev !text-blue-600"></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next !text-blue-600"></div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Include Swiper.js CDN -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- ✅ Swiper Initialization Script -->
<script>
  const swiper = new Swiper(".teamSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
</script>

   <!-- 📬 Contact Us Section -->
<section class="bg-gray-50 py-20 relative overflow-hidden">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Get in Touch</h2>
      <p class="text-gray-500 max-w-xl mx-auto">We’d love to hear about your project. Fill out the form and our team will respond as soon as possible.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
      <!-- Contact Form -->
      <div class="bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition">
        <form method="POST" action="{{ route('contact.send') }}" class="space-y-5">
          @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
              <input type="text" name="name" placeholder="Your name"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-600 focus:ring focus:ring-blue-100 transition" required>
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
              <input type="email" name="email" placeholder="you@example.com"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-600 focus:ring focus:ring-blue-100 transition" required>
            </div>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
            <input type="tel" name="phone" placeholder="+91 98765 43210"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-600 focus:ring focus:ring-blue-100 transition">
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
            <textarea name="message" rows="5" placeholder="Tell us about your project..."
              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-600 focus:ring focus:ring-blue-100 transition" required></textarea>
          </div>

          <button type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300 shadow-lg hover:shadow-blue-300/40">
            Send Message
          </button>
        </form>

        <!-- Contact Details -->
        <div class="mt-8 border-t border-gray-200 pt-6">
          <div class="flex items-center gap-3 mb-3 text-gray-700">
            <i class="fa-solid fa-phone text-blue-600"></i>
            <span>+91 98765 43210</span>
          </div>
          <div class="flex items-center gap-3 mb-3 text-gray-700">
            <i class="fa-solid fa-envelope text-blue-600"></i>
            <span>info@yourcompany.com</span>
          </div>
          <div class="flex items-center gap-3 text-gray-700">
            <i class="fa-solid fa-location-dot text-blue-600"></i>
            <span>123 Skyline Avenue, Sector 5, Business District, New Delhi 110001</span>
          </div>
        </div>
      </div>

      <!-- Google Map -->
      <div class="relative rounded-2xl overflow-hidden shadow-xl">
        <iframe
          src="https://www.google.com/maps?q=India%20Gate%2C%20New%20Delhi&output=embed"
          class="w-full h-full min-h-[450px]" allowfullscreen loading="lazy">
        </iframe>
        <div class="absolute inset-0 bg-black/10 hover:bg-transparent transition"></div>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a2e0e6ad3b.js" crossorigin="anonymous"></script>


@endsection
