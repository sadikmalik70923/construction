@extends('layouts.app')

@section('title', 'News & Insights – Globecon Construction')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

@php
  $news = [
    [
      'title' => 'Pearlshire - Bond Enclave',
      'date' => 'Coming Soon',
      'desc' => 'A premium commercial development representing next-generation architectural craftsmanship. Pearlshire – Bond Enclave is a landmark commercial development crafted with precision and vision by Globecon Construction LLC. Designed to reflect modern commercial needs, the project combines structural excellence, energy-efficient planning, and contemporary aesthetics.',
      'image' => asset('images/projects/Front View.jpg'),
      'category' => 'New Project',
      'read_time' => '2 min read'
    ],
    [
      'title' => 'Globecon Wins MEP Excellence Award',
      'date' => '2 weeks ago',
      'desc' => 'Recognized for innovative MEP design in the Al Maktoum International Airport expansion.',
      'image' => 'https://images.unsplash.com/photo-1581093450021-4a7360e9a6b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
      'category' => 'Awards',
      'read_time' => '2 min read'
    ],
    [
      'title' => 'New Partnership with GreenTech UAE',
      'date' => '1 month ago',
      'desc' => 'Strategic alliance to integrate solar and smart building systems in all future projects.',
      'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
      'category' => 'Partnership',
      'read_time' => '4 min read'
    ],
    [
      'title' => 'Team Expansion: 50 New Engineers Onboard',
      'date' => '3 weeks ago',
      'desc' => 'Welcoming top talent to drive innovation and excellence in large-scale infrastructure.',
      'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
      'category' => 'Company',
      'read_time' => '3 min read'
    ],
  ];
@endphp

<!-- ====================== HERO ====================== -->
<section class="relative h-screen overflow-hidden bg-gray-900">
  <video 
    class="absolute inset-0 w-full h-full object-cover" 
    autoplay muted loop playsinline 
    poster="https://images.unsplash.com/photo-1486325212027-8081e485255e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=85">
    <source src="{{ asset('images/news-hero-video.mp4') }}" type="video/mp4">
  </video>

  <!-- Enhanced Overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent"></div>
  
  <!-- Gold Grid Overlay -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute inset-0"
         style="background-image:
                linear-gradient(rgba(212,175,55,0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(212,175,55,0.08) 1px, transparent 1px);
                background-size: 50px 50px;">
    </div>
  </div>

  <!-- Enhanced Scroll Indicator -->
  <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-30">
    <div class="flex flex-col items-center gap-4">
      <span class="text-yellow-400/80 text-sm font-medium tracking-wider">SCROLL TO EXPLORE</span>
      <div class="animate-bounce">
        <div class="w-6 h-10 border-2 border-yellow-500/50 rounded-full flex justify-center relative">
          <div class="w-1 h-3 bg-yellow-500 rounded-full mt-2 animate-pulse"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Enhanced Hero Content -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 text-white">
    <!-- Premium Badge -->
    <div class="inline-flex items-center gap-3 px-6 py-3 rounded-full bg-yellow-500/10 border border-yellow-500/30 backdrop-blur-sm mb-8">
      <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
      <span class="text-yellow-400 text-sm font-semibold tracking-widest">INDUSTRY INSIGHTS</span>
    </div>

    <h1 class="text-5xl md:text-7xl font-black tracking-tight mb-6">
      <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">News &</span>
      <span class="text-white">Insights</span>
    </h1>
    <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
      Latest updates, announcements, and industry leadership from Globecon Construction LLC.
    </p>

    <!-- Stats -->
    <div class="flex flex-wrap justify-center gap-8 mt-12">
      <div class="text-center">
        <div class="text-2xl font-bold text-yellow-400">250+</div>
        <div class="text-gray-400 text-sm">Projects</div>
      </div>
      <div class="text-center">
        <div class="text-2xl font-bold text-yellow-400">15+</div>
        <div class="text-gray-400 text-sm">Years</div>
      </div>
      <div class="text-center">
        <div class="text-2xl font-bold text-yellow-400">98%</div>
        <div class="text-gray-400 text-sm">Satisfaction</div>
      </div>
    </div>
  </div>
</section>

<!-- ====================== ENHANCED NEWS GRID ====================== -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-black">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Enhanced Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-4 mb-6">
        <div class="w-12 h-px bg-gradient-to-r from-transparent to-yellow-500"></div>
        <span class="text-yellow-500 font-semibold tracking-widest text-sm">LATEST UPDATES</span>
        <div class="w-12 h-px bg-gradient-to-l from-transparent to-yellow-500"></div>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
        Recent <span class="text-yellow-500">Announcements</span>
      </h2>
      <p class="text-gray-400 max-w-2xl mx-auto text-lg">
        Stay ahead with Globecon's milestones, sustainability efforts, and engineering breakthroughs.
      </p>
    </div>

    <!-- Compact Enhanced Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @foreach($news as $i => $item)
      <div class="group relative">
        <!-- Main Card -->
        <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden 
                    transition-all duration-500 hover:border-yellow-500/50 hover:shadow-2xl hover:shadow-yellow-500/20
                    transform-gpu h-full flex flex-col">
          
          <!-- Glow Effect -->
          <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/5 to-transparent 
                      opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

          <!-- Image Container -->
          <div class="relative h-48 overflow-hidden">
            <img 
              src="{{ $item['image'] }}" 
              alt="{{ $item['title'] }}" 
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
              loading="lazy"
              onerror="this.src='https://images.unsplash.com/photo-1486325212027-8081e485255e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'">
            
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            
            <!-- Category Badge -->
            <div class="absolute top-4 left-4">
              <span class="px-3 py-1 bg-yellow-500 text-black text-xs font-bold rounded-full 
                          uppercase tracking-wider">
                {{ $item['category'] }}
              </span>
            </div>

            <!-- Date -->
            <div class="absolute top-4 right-4">
              <span class="px-2 py-1 bg-black/60 text-white text-xs font-semibold rounded-full 
                          backdrop-blur-sm border border-white/20">
                {{ $item['date'] }}
              </span>
            </div>
          </div>

          <!-- Content -->
          <div class="relative p-6 flex-1 flex flex-col">
            <h3 class="text-xl font-bold text-white mb-3 leading-tight group-hover:text-yellow-400 
                       transition-colors duration-300">
              {{ $item['title'] }}
            </h3>
            
            <p class="text-gray-300 leading-relaxed text-sm mb-4 flex-1">
              {{ $item['desc'] }}
            </p>

            <!-- Footer -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-800">
              <div class="flex items-center gap-2 text-gray-400 text-xs">
                <i class="far fa-clock text-yellow-500"></i>
                {{ $item['read_time'] }}
              </div>
              
              <div class="group/btn">
                <button class="w-8 h-8 bg-yellow-500/10 border border-yellow-500/30 
                               rounded-full flex items-center justify-center
                               group-hover:border-yellow-500 group-hover:bg-yellow-500/20
                               transition-all duration-300">
                  <i class="fas fa-arrow-right text-yellow-500 text-xs
                            group-hover/btn:translate-x-0.5 transition-transform"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Hover Glow -->
        <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500/10 to-transparent 
                    rounded-2xl blur-md opacity-0 group-hover:opacity-100 
                    transition-opacity duration-500 -z-10"></div>
      </div>
      @endforeach
    </div>

    <!-- Compact View All Button -->
    <div class="text-center mt-12">
      <button class="group relative px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 
                     text-black font-bold rounded-xl
                     transform hover:scale-105 hover:shadow-lg hover:shadow-yellow-500/30
                     transition-all duration-300 overflow-hidden">
        <span class="relative z-10 flex items-center gap-2">
          View All Updates
          <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform duration-300"></i>
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-500 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
      </button>
    </div>
  </div>
</section>

<!-- ====================== ENHANCED COMPACT CTA ====================== -->
<section class="py-20 bg-black">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <!-- Enhanced CTA Card -->
    <div class="relative bg-gradient-to-br from-gray-900/80 to-black/90 backdrop-blur-xl 
                border border-yellow-500/20 rounded-2xl p-8
                shadow-xl shadow-yellow-500/10 transform-gpu">
      
      <!-- Floating Glow -->
      <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500/5 to-transparent 
                  rounded-2xl blur-xl opacity-50 animate-pulse"></div>

      <div class="relative z-10">
        <h3 class="text-3xl font-bold text-white mb-4">
          Stay <span class="text-yellow-500">Updated</span>
        </h3>
        <p class="text-gray-300 mb-6 leading-relaxed">
          Subscribe to our newsletter for exclusive project updates and industry insights.
        </p>

        <!-- Compact Subscription Form -->
        <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
          <input 
            type="email" 
            placeholder="Enter your email"
            class="flex-1 px-4 py-3 bg-black/50 border border-gray-700 rounded-xl 
                   text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500
                   transition-all duration-300 backdrop-blur-sm text-sm">
          <button class="px-6 py-3 bg-gradient-to-r from-yellow-500 to-yellow-600 
                        text-black font-bold rounded-xl
                        transform hover:scale-105 hover:shadow-lg hover:shadow-yellow-500/30
                        transition-all duration-300 flex items-center gap-2 text-sm">
            Subscribe
            <i class="fas fa-arrow-right text-xs"></i>
          </button>
        </div>

        <p class="text-gray-400 text-xs mt-4">
          Join industry leaders receiving our updates
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ====================== ENHANCED TILT EFFECT ====================== -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.group').forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateY = (x - centerX) / 20;
        const rotateX = (centerY - y) / 20;
        
        const mainCard = card.querySelector('.transform-gpu');
        if (mainCard) {
          mainCard.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        }
        
        const glow = card.querySelector('.-z-10');
        if (glow) {
          glow.style.transform = `translate(${rotateY * 3}px, ${rotateX * 3}px)`;
        }
      });
      
      card.addEventListener('mouseleave', () => {
        const mainCard = card.querySelector('.transform-gpu');
        if (mainCard) {
          mainCard.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
        }
        
        const glow = card.querySelector('.-z-10');
        if (glow) {
          glow.style.transform = 'translate(0, 0)';
        }
      });
    });
  });
</script>

<style>
  .backdrop-blur-xl {
    backdrop-filter: blur(24px);
  }
  
  /* Smooth transitions for all elements */
  * {
    transition-property: color, background-color, border-color, transform, box-shadow;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
  }
</style>
@endsection