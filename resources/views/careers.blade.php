@extends('layouts.app')

@section('title', 'Careers – Globecon Construction')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">

<!-- ====================== HERO ====================== -->
<section class="relative h-screen overflow-hidden bg-gray-900">
  <video 
    class="absolute inset-0 w-full h-full object-cover" 
    autoplay muted loop playsinline 
    poster="https://images.unsplash.com/photo-1512453979798-5ea1b9d9b5d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=85">
    <source src="{{ asset('images/videos/5311420-hd_1920_1080_25fps.mp4') }}" type="video/mp4">
    <!-- Fallback image if video doesn't load -->
    <img src="https://images.unsplash.com/photo-1512453979798-5ea1b9d9b5d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=85" 
         alt="Construction Site" class="absolute inset-0 w-full h-full object-cover">
  </video>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent"></div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 w-8 h-14 border-2 border-yellow-500 rounded-full animate-bounce">
    <div class="absolute top-2 left-1/2 -translate-x-1/2 w-1.5 h-1.5 bg-yellow-500 rounded-full animate-ping"></div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 text-white">
    <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-4">
      <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">Join Our Team</span>
    </h1>
    <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
      Build the future with Globecon — where passion meets precision.
    </p>
  </div>
</section>

<!-- ====================== CAREERS SECTION ====================== -->
<section class="py-32 bg-gradient-to-b from-gray-900 to-black">
  <div class="max-w-4xl mx-auto px-6 text-center">

    <!-- Main Card -->
    <div 
      class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-12 shadow-2xl 
             transition-all duration-700 hover:shadow-yellow-500/30 hover:scale-[1.02] transform-gpu"
      data-tilt>

      <!-- Glow Border -->
      <div class="absolute inset-0 border-2 border-transparent rounded-3xl 
                  bg-gradient-to-r from-yellow-400/0 via-yellow-400 to-yellow-400/0 
                  opacity-0 group-hover:opacity-100 transition-opacity duration-700 
                  blur-xl pointer-events-none"></div>

      <h2 class="text-4xl font-bold text-yellow-400 mb-6">No Current Openings</h2>
      <p class="text-gray-300 text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
        We don't have any active job openings at the moment.  
        Stay tuned for future opportunities or feel free to send your resume to us.
      </p>

      <!-- CTA Button -->
      <a href="mailto:hr@globecon.com" 
         class="inline-flex items-center gap-3 bg-gradient-to-r from-yellow-400 to-yellow-600 text-black font-bold 
                text-lg px-10 py-4 rounded-full shadow-xl 
                transform transition-all duration-300 hover:scale-110 hover:shadow-2xl">
        Mail to hr@globecon.com
      </a>
    </div>

    <!-- Optional: Future Openings Teaser -->
    <div class="mt-16 text-center">
      <p class="text-gray-400 text-sm">
        Want to be the first to know when we're hiring?
      </p>
      <button 
        onclick="alert('Feature coming soon!')"
        class="mt-4 text-yellow-400 underline hover:text-yellow-300 transition">
        Subscribe for Job Alerts
      </button>
    </div>
  </div>
</section>

<!-- ====================== TINY JS FOR 3D TILT ====================== -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-tilt]').forEach(card => {
      card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateY = (x - centerX) / 25;
        const rotateX = (centerY - y) / 25;
        card.style.transform = `perspective(1200px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1200px) rotateX(0) rotateY(0) scale(1)';
      });
    });
  });
</script>
@endsection