@extends('layouts.app')

@section('title', 'Our Services – Globecon Construction')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

@php
  $services = [
    [
      'title' => 'Architectural Design',
      'desc' => 'Blending visionary aesthetics with structural integrity to craft iconic, timeless spaces.',
      'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'
    ],
    [
      'title' => 'Construction Management',
      'desc' => 'End-to-end project oversight with precision scheduling, cost control, and zero compromise on quality.',
      'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'
    ],
   
    [
      'title' => 'Infrastructure Development',
      'desc' => 'Large-scale roads, bridges, and urban systems engineered for durability and scalability.',
      'image' => 'https://images.unsplash.com/photo-1506521781263-d8422e82f27a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'
    ],
    [
      'title' => 'Project Engineering',
      'desc' => 'Advanced MEP, structural, and civil engineering solutions backed by data-driven precision.',
      'image' => 'https://images.unsplash.com/photo-1581093450021-4a7360e9a6b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'
    ],
    [
      'title' => 'Interior Fit-Out',
      'desc' => 'Luxury finishes, bespoke joinery, and smart interiors that elevate lifestyle and functionality.',
      'image' => 'https://images.unsplash.com/photo-1600210492493-0946911123ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'
    ]
  ];
@endphp

<!-- ====================== HERO ====================== -->
<section class="relative h-screen overflow-hidden bg-gray-900">
  <video 
    class="absolute inset-0 w-full h-full object-cover" 
    autoplay muted loop playsinline 
    poster="https://images.unsplash.com/photo-1523413651479-597eb2da0ad6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=85">
    <source src="{{ asset('images/WhatsApp Video 2025-10-17 at 2.22.50 PM (1).mp4') }}" type="video/mp4">
  </video>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 w-8 h-14 border-2 border-yellow-500 rounded-full animate-bounce">
    <div class="absolute top-2 left-1/2 -translate-x-1/2 w-1.5 h-1.5 bg-yellow-500 rounded-full animate-ping"></div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 text-white">
    <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-4">
      <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">Our Expertise,</span><br>
      <span class="text-white">Your Vision</span>
    </h1>
    <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
      Delivering excellence through design, innovation, and engineering precision.
    </p>
  </div>
</section>

<!-- ====================== SERVICES GRID ====================== -->
<section class="py-24 bg-gradient-to-b from-gray-900 to-black">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-yellow-500 mb-4">Core Services</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Globecon redefines construction with unmatched quality, innovation, and sustainability.
      </p>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($services as $i => $s)
      <div 
        class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden shadow-2xl 
               transition-all duration-700 hover:shadow-yellow-500/20 hover:scale-[1.03] 
               cursor-pointer transform-gpu"
        data-tilt>
        
        <!-- Glow Border -->
        <div class="absolute inset-0 border-2 border-transparent rounded-3xl 
                    bg-gradient-to-r from-yellow-400/0 via-yellow-400 to-yellow-400/0 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-700 
                    pointer-events-none"></div>

        <!-- Image -->
        <div class="h-64 overflow-hidden">
          <img 
            src="{{ $s['image'] }}" 
            alt="{{ $s['title'] }}" 
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            loading="lazy">
        </div>

        <!-- Content -->
        <div class="p-8">
          <h3 class="text-2xl font-bold text-yellow-400 mb-3">{{ $s['title'] }}</h3>
          <p class="text-gray-300 leading-relaxed">{{ $s['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ====================== CTA ====================== -->
<section class="py-24 bg-black text-center">
  <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">
    Ready to Build the Future?
  </h3>
  <p class="text-gray-400 mb-8 max-w-2xl mx-auto px-6">
    Let’s collaborate to turn your vision into a landmark of excellence.
  </p>
  <a href="/contact" 
     class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-600 text-black font-bold 
            text-lg px-10 py-4 rounded-full shadow-xl 
            transform transition-all duration-300 hover:scale-110 hover:shadow-2xl">
    Get in Touch
  </a>
</section>

<!-- ====================== SCRIPTS (Tiny JS for Tilt) ====================== -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // 3D Tilt Effect (lightweight)
    document.querySelectorAll('[data-tilt]').forEach(card => {
      card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateY = (x - centerX) / 20;
        const rotateX = (centerY - y) / 20;
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
      });
    });
  });
</script>

@endsection