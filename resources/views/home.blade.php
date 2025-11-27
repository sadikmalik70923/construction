@extends('layouts.app')

@section('title', 'Home')

@section('content')

@php
    $hero = [
        'title' => 'Building Your Future with GLOBECON',
        'subtitle' => 'Quality engineered to last. Delivered on time.',
        'cta_text' => 'Explore Services',
        'cta_href' => '/services',
        'video_mp4' => asset('images/WhatsApp Video 2025-10-17 at 2.22.50 PM.mp4'),
        'poster' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=2000&q=85',
    ];
@endphp

<!-- AOS CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

<style>
  :root {
    --gold: #D4AF37;
    --deep-blue: #0A0F1C;
    --dark-card: #1A1F2E;
    --muted: #8B9BB4;
    --light: #F8FAFC;
  }

  .glass-dark {
    background: linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
    backdrop-filter: blur(12px) saturate(180%);
    border: 1px solid rgba(255,255,255,0.08);
  }

  .btn-modern {
    background: linear-gradient(135deg, var(--gold), #E8C352);
    color: var(--deep-blue);
    font-weight: 600;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .btn-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(212, 175, 55, 0.3);
  }

  .section-padding {
    padding: 6rem 0;
  }

  .floating-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .floating-card:hover {
    transform: translateY(-12px);
  }

  .gradient-text {
    background: linear-gradient(135deg, var(--gold), #F4D03F);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .stat-number {
    font-size: 4rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--gold), #F4D03F);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    transition: all 0.3s ease;
  }

  .stat-container {
    position: relative;
    overflow: hidden;
  }

  .stat-container::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--gold), transparent);
    transition: width 1s ease;
  }

  .stat-container.animated::after {
    width: 100%;
  }

  .hero-video { 
    object-fit: cover; 
    width: 100%; 
    height: 100%; 
  }

  .link-underline::after {
    content: '';
    display:block;
    width:0;
    height:2px;
    background:var(--gold);
    transition: width .28s ease;
  }
  .link-underline:hover::after { width:100%; }

  .parallax { transform: translateY(0); transition: transform .2s linear; will-change: transform; }

  @media (max-width: 768px) {
    .hero-title { font-size: clamp(1.6rem, 6vw, 2.6rem); }
    .stat-number { font-size: 3rem; }
  }
</style>

<!-- =========================
     ENHANCED HERO - Minimalist Dark
     ========================= -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
  
  <!-- Background Video -->
  <div class="absolute inset-0">
    @if(file_exists(public_path(str_replace(asset(''), '', $hero['video_mp4']))))
      <video class="hero-video absolute inset-0 w-full h-full object-cover opacity-40" autoplay muted loop playsinline poster="{{ $hero['poster'] }}">
        <source src="{{ $hero['video_mp4'] }}" type="video/mp4" />
      </video>
    @else
      <div class="absolute inset-0 bg-cover bg-center opacity-40" 
           style="background-image:url('{{ $hero['poster'] }}');">
      </div>
    @endif
  </div>

  <!-- Animated Gold Grid -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute inset-0" 
         style="background-image: 
           linear-gradient(rgba(212,175,55,0.1) 1px, transparent 1px),
           linear-gradient(90deg, rgba(212,175,55,0.1) 1px, transparent 1px);
           background-size: 50px 50px;">
    </div>
  </div>

  <!-- Dark Fade Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/80"></div>

  <!-- =========================
       HERO CONTENT
       ========================= -->
  <div class="relative z-20 container mx-auto px-6 h-screen flex items-center justify-end">
    
    <div class="max-w-3xl text-right">

      <!-- RIGHT-ALIGNED COMPANY TITLE -->
      <!-- RIGHT-ALIGNED COMPANY TITLE (WHITE TEXT + GOLD GLOW) -->
<h2 class="text-3xl md:text-5xl font-extrabold tracking-wide mb-8 flex flex-wrap gap-2"
    data-aos="fade-left"
    style="text-shadow:
          0 0 25px rgba(255,255,255,0.9),
          0 0 50px rgba(212,175,55,0.45),
          0 0 80px rgba(212,175,55,0.35);">

    <span class="text-white">GLOBECON</span>
    <span class="text-yellow-400">CONSTRUCTION LLC</span>

</h2>



      <!-- Glass Container -->
      <div class="glass-dark rounded-3xl p-8 md:p-12 backdrop-blur-xl inline-block text-left"
           data-aos="fade-left"
           data-aos-delay="150">

        <!-- Main Hero Heading -->
        <h1 class="hero-title text-4xl md:text-6xl font-black text-white leading-tight mb-6">
          Building <span class="gradient-text">Tomorrow</span><br>Today
        </h1>

        <!-- Subtitle -->
        <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed">
          {{ $hero['subtitle'] }}
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-end">
          
          <!-- Main CTA -->
          <a href="{{ $hero['cta_href'] }}" 
             class="btn-modern px-8 py-4 rounded-2xl text-lg 
                    inline-flex items-center justify-center gap-3">
            {{ $hero['cta_text'] }}
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>

          <!-- Secondary CTA -->
          <a href="#about"
             class="px-8 py-4 rounded-2xl border border-gray-600 text-white 
                    hover:bg-white/5 transition-all duration-300 text-lg 
                    inline-flex items-center gap-2">
            Learn More
          </a>

        </div>
      </div>
    </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
    <div class="animate-bounce">
      <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center">
        <div class="w-1 h-3 bg-gray-400 rounded-full mt-2"></div>
      </div>
    </div>
  </div>
</section>



<!-- =========================
     ENHANCED STATS SECTION
     ========================= -->
<section class="section-padding bg-gray-900">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center stat-container" data-aos="fade-up">
        <div class="stat-number mb-2 count-up" data-target="15" data-duration="1500">0</div>
        <div class="text-gray-400 uppercase tracking-wider text-sm">Years Experience</div>
      </div>
      <div class="text-center stat-container" data-aos="fade-up" data-aos-delay="100">
        <div class="stat-number mb-2 count-up" data-target="725" data-duration="2000">0</div>
        <div class="text-gray-400 uppercase tracking-wider text-sm">Projects Completed</div>
      </div>
      <div class="text-center stat-container" data-aos="fade-up" data-aos-delay="200">
        <div class="stat-number mb-2 count-up" data-target="120" data-duration="1800">0</div>
        <div class="text-gray-400 uppercase tracking-wider text-sm">Expert Engineers</div>
      </div>
      <div class="text-center stat-container" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-number mb-2 count-up" data-target="45" data-duration="1600">0</div>
        <div class="text-gray-400 uppercase tracking-wider text-sm">Active Projects</div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     ABOUT - Achievements Showcase
     ========================= -->
<section id="about" class="section-padding bg-gray-900">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-black text-white mb-4">Why Choose Globecon?</h2>
      <p class="text-gray-400 text-xl max-w-3xl mx-auto">Proven track record of delivering exceptional results through innovation and expertise</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Interactive Stats -->
      <div data-aos="fade-right">
        <div class="grid grid-cols-2 gap-6 mb-8">
          <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
            <div class="text-4xl font-bold text-yellow-400 mb-2 achievement-count" data-target="15">0</div>
            <div class="text-gray-400">Years of Excellence</div>
            <div class="w-0 h-1 bg-yellow-400 mt-2 mx-auto transition-all group-hover:w-full"></div>
          </div>
          <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
            <div class="text-4xl font-bold text-yellow-400 mb-2 achievement-count" data-target="725">0</div>
            <div class="text-gray-400">Projects Completed</div>
            <div class="w-0 h-1 bg-yellow-400 mt-2 mx-auto transition-all group-hover:w-full"></div>
          </div>
          <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
            <div class="text-4xl font-bold text-yellow-400 mb-2 achievement-count" data-target="98">0</div>
            <div class="text-gray-400">Client Satisfaction %</div>
            <div class="w-0 h-1 bg-yellow-400 mt-2 mx-auto transition-all group-hover:w-full"></div>
          </div>
          <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
            <div class="text-4xl font-bold text-yellow-400 mb-2 achievement-count" data-target="50">0</div>
            <div class="text-gray-400">Awards Won</div>
            <div class="w-0 h-1 bg-yellow-400 mt-2 mx-auto transition-all group-hover:w-full"></div>
          </div>
        </div>

        <div class="space-y-6">
          <h3 class="text-2xl font-bold text-white">Certifications & Accreditations</h3>
          <div class="flex flex-wrap gap-4">
            <div class="px-4 py-2 glass-dark rounded-xl text-sm text-gray-300 border border-gray-700">ISO 9001:2015</div>
            <div class="px-4 py-2 glass-dark rounded-xl text-sm text-gray-300 border border-gray-700">ISO 14001:2015</div>
            <div class="px-4 py-2 glass-dark rounded-xl text-sm text-gray-300 border border-gray-700">OHSAS 18001</div>
            <div class="px-4 py-2 glass-dark rounded-xl text-sm text-gray-300 border border-gray-700">Green Building Certified</div>
          </div>
        </div>
      </div>

      <!-- Content with Interactive Elements -->
      <div data-aos="fade-left" class="space-y-6">
        <h2 class="text-3xl md:text-4xl font-black text-white">Engineering Excellence Since 2009</h2>
        
        <div class="space-y-4">
          <div class="flex items-start gap-4 p-4 rounded-xl hover:glass-dark transition-all cursor-pointer group">
            <div class="w-8 h-8 bg-yellow-400/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-400 transition-colors">
              <svg class="w-4 h-4 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-2">Innovation-Driven Solutions</h3>
              <p class="text-gray-400">Leveraging cutting-edge technology and methodologies to deliver superior construction outcomes.</p>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-xl hover:glass-dark transition-all cursor-pointer group">
            <div class="w-8 h-8 bg-yellow-400/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-400 transition-colors">
              <svg class="w-4 h-4 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-2">Sustainable Practices</h3>
              <p class="text-gray-400">Committed to environmentally responsible construction with minimal ecological impact.</p>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-xl hover:glass-dark transition-all cursor-pointer group">
            <div class="w-8 h-8 bg-yellow-400/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-400 transition-colors">
              <svg class="w-4 h-4 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-2">Quality Assurance</h3>
              <p class="text-gray-400">Rigorous quality control processes ensuring every project meets international standards.</p>
            </div>
          </div>
        </div>

        <div class="flex gap-4 mt-8">
          <a href="/about" class="btn-modern px-6 py-3 rounded-xl font-semibold flex items-center gap-2">
            Download Brochure
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
          </a>
          <a href="/contact" class="px-6 py-3 rounded-xl border border-gray-600 text-white hover:bg-white/5 transition flex items-center gap-2">
            Get Consultation
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Achievement counter animation
  document.addEventListener('DOMContentLoaded', function() {
    const achievementCounters = document.querySelectorAll('.achievement-count');
    
    const animateAchievementCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const duration = 2000;
      const startTime = performance.now();
      const startValue = 0;

      const updateCounter = (currentTime) => {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
        const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
        
        counter.innerText = currentValue;
        
        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.innerText = target;
        }
      };

      requestAnimationFrame(updateCounter);
    };

    const achievementObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateAchievementCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    achievementCounters.forEach(counter => achievementObserver.observe(counter));
  });
</script>

<!-- =========================
     SERVICES - Process Focused
     ========================= -->
<section id="services" class="section-padding bg-gray-800">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-black text-white mb-4">Our Process</h2>
      <p class="text-gray-400 text-xl max-w-2xl mx-auto">From concept to completion - our comprehensive approach ensures excellence</p>
    </div>

    <div class="relative">
      <!-- Process Timeline -->
      <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-yellow-400 to-yellow-600"></div>

      <div class="space-y-12 lg:space-y-24">
        <!-- Step 1 -->
        <div class="relative" data-aos="fade-up">
          <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="mb-8 lg:mb-0 lg:pr-12">
              <div class="inline-flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  01
                </div>
                <h3 class="text-2xl font-bold text-white">Consultation & Planning</h3>
              </div>
              <p class="text-gray-400 mb-6">We begin with understanding your vision, requirements, and constraints to develop a comprehensive project plan.</p>
              <ul class="space-y-3">
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Initial project assessment
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Feasibility studies
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Budget planning
                </li>
              </ul>
            </div>
            <div class="glass-dark rounded-3xl p-6">
              <div class="aspect-video rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80" 
                     alt="Consultation & Planning" 
                     class="w-full h-full object-cover">
              </div>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative" data-aos="fade-up" data-aos-delay="100">
          <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="lg:order-2 mb-8 lg:mb-0 lg:pl-12">
              <div class="inline-flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  02
                </div>
                <h3 class="text-2xl font-bold text-white">Design & Engineering</h3>
              </div>
              <p class="text-gray-400 mb-6">Our expert architects and engineers create innovative designs that balance aesthetics, functionality, and sustainability.</p>
              <ul class="space-y-3">
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Architectural design
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Structural engineering
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  3D visualization
                </li>
              </ul>
            </div>
            <div class="glass-dark rounded-3xl p-6 lg:order-1">
              <div class="aspect-video rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=800&q=80" 
                     alt="Design & Engineering" 
                     class="w-full h-full object-cover">
              </div>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative" data-aos="fade-up" data-aos-delay="200">
          <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="mb-8 lg:mb-0 lg:pr-12">
              <div class="inline-flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  03
                </div>
                <h3 class="text-2xl font-bold text-white">Construction & Execution</h3>
              </div>
              <p class="text-gray-400 mb-6">With meticulous planning and skilled execution, we bring designs to life while maintaining the highest quality standards.</p>
              <ul class="space-y-3">
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Quality control
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Timeline management
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Safety compliance
                </li>
              </ul>
            </div>
            <div class="glass-dark rounded-3xl p-6">
              <div class="aspect-video rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=800&q=80" 
                     alt="Construction & Execution" 
                     class="w-full h-full object-cover">
              </div>
            </div>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="relative" data-aos="fade-up" data-aos-delay="300">
          <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="lg:order-2 mb-8 lg:mb-0 lg:pl-12">
              <div class="inline-flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                  04
                </div>
                <h3 class="text-2xl font-bold text-white">Project Delivery & Support</h3>
              </div>
              <p class="text-gray-400 mb-6">We ensure seamless project handover and provide ongoing support to maintain the quality and functionality of your investment.</p>
              <ul class="space-y-3">
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Final inspection
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Documentation handover
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  Maintenance support
                </li>
              </ul>
            </div>
            <div class="glass-dark rounded-3xl p-6 lg:order-1">
              <div class="aspect-video rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80" 
                     alt="Project Delivery & Support" 
                     class="w-full h-full object-cover">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     ENHANCED PROJECTS SECTION - Interactive Showcase
     ========================= -->
<section class="section-padding bg-gray-900 relative overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 80%, rgba(212,175,55,0.1) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(212,175,55,0.1) 0%, transparent 50%);"></div>
  </div>
  
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
    <!-- Section Header with Interactive Filter -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12" data-aos="fade-up">
      <div class="mb-6 md:mb-0">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-3">Our <span class="gradient-text">Portfolio</span></h2>
        <p class="text-gray-400 max-w-xl">Discover our diverse range of construction projects that showcase innovation, quality, and excellence.</p>
      </div>
      
      <!-- Project Filter -->
      <div class="flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="100">
        <button class="project-filter px-4 py-2 rounded-xl bg-gray-800 text-gray-300 border border-gray-700 hover:border-yellow-400 hover:text-yellow-400 transition-all duration-300 active" data-filter="all">
          All Projects
        </button>
        <button class="project-filter px-4 py-2 rounded-xl bg-gray-800 text-gray-300 border border-gray-700 hover:border-yellow-400 hover:text-yellow-400 transition-all duration-300" data-filter="residential">
          Residential
        </button>
        <button class="project-filter px-4 py-2 rounded-xl bg-gray-800 text-gray-300 border border-gray-700 hover:border-yellow-400 hover:text-yellow-400 transition-all duration-300" data-filter="commercial">
          Commercial
        </button>
        <button class="project-filter px-4 py-2 rounded-xl bg-gray-800 text-gray-300 border border-gray-700 hover:border-yellow-400 hover:text-yellow-400 transition-all duration-300" data-filter="infrastructure">
          Infrastructure
        </button>
      </div>
    </div>

   <!-- Projects Grid with Enhanced Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">

  <!-- Project 1 - Commercial -->
  <div class="project-card group" data-category="commercial" data-aos="fade-up">
    <div class="relative overflow-hidden rounded-3xl glass-dark h-80">
      <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/projects/Front View.jpg') }}" 
             alt="Spinneys" 
             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80"></div>
      </div>

      <div class="absolute top-4 left-4">
        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-500 text-white">Commercial</span>
      </div>

      <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
        <h3 class="text-xl font-bold mb-2">Pearlshire-Bond Enclave</h3>
        <p class="text-gray-300 text-sm mb-4">A modern retail and logistics development featuring high-end architectural design and energy-efficient infrastructure.</p>

        <div class="flex items-center justify-between text-xs text-gray-400 mb-4">
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <span>14 Months</span>
          </div>
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2"/></svg>
            <span>AED 35M</span>
          </div>
        </div>

        <div class="flex items-center justify-between">
          <a href="/projects/Pearlshire-Bond Enclave" class="inline-flex items-center text-yellow-400 hover:text-yellow-300 transition-colors text-sm font-semibold link-underline">
            View Case Study
            <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
          <button class="quick-view-btn p-2 rounded-full bg-white/10 hover:bg-yellow-400 hover:text-gray-900 transition-all" data-project="1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S3.732 16.057 2.458 12z"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Project 2 - Residential -->
  <div class="project-card group" data-category="residential" data-aos="fade-up" data-aos-delay="100">
    <div class="relative overflow-hidden rounded-3xl glass-dark h-80">
      <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/projects/2024-10-09.webp') }}" 
             alt="Community Project" 
             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80"></div>
      </div>

      <div class="absolute top-4 left-4">
        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-400 text-gray-900">Residential</span>
      </div>

      <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
        <h3 class="text-xl font-bold mb-2">Community</h3>
        <p class="text-gray-300 text-sm mb-4">A premium residential development emphasizing modern comfort, green living, and a connected community lifestyle.</p>

        <div class="flex items-center justify-between text-xs text-gray-400 mb-4">
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <span>20 Months</span>
          </div>
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2"/></svg>
            <span>AED 60M</span>
          </div>
        </div>

        <div class="flex items-center justify-between">
          <a href="/projects/community" class="inline-flex items-center text-yellow-400 hover:text-yellow-300 transition-colors text-sm font-semibold link-underline">
            View Case Study
            <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
          <button class="quick-view-btn p-2 rounded-full bg-white/10 hover:bg-yellow-400 hover:text-gray-900 transition-all" data-project="2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S3.732 16.057 2.458 12z"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Project 3 - Commercial -->
  <div class="project-card group" data-category="commercial" data-aos="fade-up" data-aos-delay="200">
    <div class="relative overflow-hidden rounded-3xl glass-dark h-80">
      <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/projects/3.jpg') }}" 
             alt="The Central Downtown" 
             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80"></div>
      </div>

      <div class="absolute top-4 left-4">
        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-500 text-white">Commercial</span>
      </div>

      <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
        <h3 class="text-xl font-bold mb-2">The Central Downtown</h3>
        <p class="text-gray-300 text-sm mb-4">A mixed-use urban development featuring retail and commercial excellence in Dubai’s heart.</p>

        <div class="flex items-center justify-between text-xs text-gray-400 mb-4">
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <span>24 Months</span>
          </div>
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2"/></svg>
            <span>AED 120M</span>
          </div>
        </div>

        <div class="flex items-center justify-between">
          <a href="/projects/the-central-downtown" class="inline-flex items-center text-yellow-400 hover:text-yellow-300 transition-colors text-sm font-semibold link-underline">
            View Case Study
            <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
          <button class="quick-view-btn p-2 rounded-full bg-white/10 hover:bg-yellow-400 hover:text-gray-900 transition-all" data-project="3">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S3.732 16.057 2.458 12z"/></svg>
          </button>
        </div>
      </div>
    </div>
  </div>

</div>


    <!-- View All Projects CTA -->
    <div class="text-center mt-12" data-aos="fade-up">
      <a href="/projects" class="btn-modern inline-flex items-center gap-3 px-8 py-4 rounded-2xl font-semibold text-lg">
        Explore All Projects
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- Quick View Modal -->
<div id="quickViewModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
  <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
    <!-- Background Overlay -->
    <div class="fixed inset-0 transition-opacity bg-black/80 backdrop-blur-sm" aria-hidden="true"></div>

    <!-- Modal Panel -->
    <div class="relative inline-block w-full max-w-4xl px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-gray-800 rounded-3xl shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl sm:p-6">
      <!-- Close Button -->
      <button id="closeModal" class="absolute top-4 right-4 z-10 p-2 rounded-full bg-gray-700 hover:bg-gray-600 transition-colors">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>

      <!-- Modal Content -->
      <div id="modalContent" class="space-y-6">
        <!-- Content will be loaded dynamically -->
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Project Filter Functionality
    const filterButtons = document.querySelectorAll('.project-filter');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Update active state
        filterButtons.forEach(btn => btn.classList.remove('active', 'bg-yellow-400', 'text-gray-900'));
        this.classList.add('active', 'bg-yellow-400', 'text-gray-900');
        
        const filterValue = this.getAttribute('data-filter');
        
        // Filter projects
        projectCards.forEach(card => {
          if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
            card.style.display = 'block';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 50);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 300);
          }
        });
      });
    });

    // Quick View Modal Functionality
    const quickViewButtons = document.querySelectorAll('.quick-view-btn');
    const modal = document.getElementById('quickViewModal');
    const closeModal = document.getElementById('closeModal');
    const modalContent = document.getElementById('modalContent');
    
   // Project data for quick view (Globecon Real Projects)
const projectData = {
  1: {
    title: "Pearlshire-Bond Enclave",
    category: "Commercial",
    image: "{{ asset('images/projects/Front View.jpg') }}",
    description: "A modern commercial project developed for Spinneys, featuring efficient space utilization, sustainable building systems, and high-end architectural finishes. Designed to accommodate large-scale retail operations with world-class infrastructure.",
    details: {
      duration: "14 Months",
      budget: "AED 35M",
      location: "Dubai, UAE",
      completion: "2024"
    },
    features: [
      "Energy-efficient HVAC systems",
      "Advanced safety and fire systems",
      "Modern architectural design",
      "Sustainable construction materials",
      "Retail and logistics optimization"
    ]
  },

  2: {
    title: "Community",
    category: "Residential",
    image: "{{ asset('images/projects/2024-10-09.webp') }}",
    description: "A premium residential development offering contemporary living with a focus on comfort, community, and sustainability. The project integrates green spaces, modern architecture, and smart amenities for an elevated lifestyle.",
    details: {
      duration: "20 Months",
      budget: "AED 60M",
      location: "Dubai South, UAE",
      completion: "2025"
    },
    features: [
      "Smart home integration",
      "Landscaped community parks",
      "Energy-saving lighting systems",
      "High-quality interiors",
      "Private parking and leisure areas"
    ]
  },

  3: {
    title: "The Central Downtown",
    category: "Commercial",
    image: "{{ asset('images/projects/3.jpg') }}",
    description: "A landmark mixed-use development featuring premium retail and commercial spaces. The Central Downtown blends luxury design with functional urban architecture, establishing a benchmark in Dubai’s growing skyline.",
    details: {
      duration: "24 Months",
      budget: "AED 120M",
      location: "Jumeirah Village Circle, Dubai",
      completion: "2024"
    },
    features: [
      "Iconic façade lighting",
      "High-speed elevator systems",
      "Sustainable water management",
      "Integrated commercial zones",
      "LEED-certified design standards"
    ]
  }
};


    // Open modal with project details
    quickViewButtons.forEach(button => {
      button.addEventListener('click', function() {
        const projectId = this.getAttribute('data-project');
        const project = projectData[projectId];
        
        if (project) {
          modalContent.innerHTML = `
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
              <div class="space-y-4">
                <div class="aspect-video rounded-2xl overflow-hidden">
                  <img src="${project.image}" alt="${project.title}" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-wrap gap-2">
                  ${project.features.map(feature => `
                    <span class="px-3 py-1 rounded-full text-xs bg-gray-700 text-gray-300">${feature}</span>
                  `).join('')}
                </div>
              </div>
              <div class="space-y-4">
                <div>
                  <span class="px-3 py-1 rounded-full text-xs font-semibold ${
                    project.category === 'Residential' ? 'bg-yellow-400 text-gray-900' : 
                    project.category === 'Commercial' ? 'bg-blue-500 text-white' : 
                    'bg-green-500 text-white'
                  }">${project.category}</span>
                  <h3 class="text-2xl font-bold text-white mt-2">${project.title}</h3>
                  <p class="text-gray-300 mt-2">${project.description}</p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 py-4">
                  <div class="text-center p-3 rounded-xl bg-gray-700">
                    <div class="text-yellow-400 font-bold text-lg">${project.details.duration}</div>
                    <div class="text-gray-400 text-sm">Duration</div>
                  </div>
                  <div class="text-center p-3 rounded-xl bg-gray-700">
                    <div class="text-yellow-400 font-bold text-lg">${project.details.budget}</div>
                    <div class="text-gray-400 text-sm">Budget</div>
                  </div>
                  <div class="text-center p-3 rounded-xl bg-gray-700">
                    <div class="text-yellow-400 font-bold text-lg">${project.details.location}</div>
                    <div class="text-gray-400 text-sm">Location</div>
                  </div>
                  <div class="text-center p-3 rounded-xl bg-gray-700">
                    <div class="text-yellow-400 font-bold text-lg">${project.details.completion}</div>
                    <div class="text-gray-400 text-sm">Completed</div>
                  </div>
                </div>
                
                <div class="flex gap-3 pt-4">
                  <a href="/projects/${project.title.toLowerCase().replace(/\s+/g, '-')}" 
                     class="btn-modern flex-1 text-center py-3 rounded-xl font-semibold">
                    View Full Case Study
                  </a>
                </div>
              </div>
            </div>
          `;
          
          modal.classList.remove('hidden');
          document.body.style.overflow = 'hidden';
        }
      });
    });

    // Close modal
    closeModal.addEventListener('click', function() {
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
    });

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
      }
    });

    // Enhanced hover effects for project cards
    projectCards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });
  });
</script>

<style>
  .project-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }
  
  .project-card:hover {
    transform: translateY(-8px);
  }
  
  .project-filter.active {
    background: linear-gradient(135deg, var(--gold), #E8C352);
    color: var(--deep-blue);
    border-color: transparent;
  }
  
  #quickViewModal {
    transition: opacity 0.3s ease;
  }
  
  @keyframes modalFadeIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }
  
  #quickViewModal:not(.hidden) > div {
    animation: modalFadeIn 0.3s ease-out;
  }
</style>

<!-- =========================
     ENHANCED FOUNDER SECTION - Interactive Leadership
     ========================= -->
<section class="relative py-24 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white overflow-hidden">
  <!-- Animated Background -->
  <div class="absolute inset-0">
    <!-- Gradient Mesh -->
    <div class="absolute inset-0 opacity-20" style="
      background-image: 
        radial-gradient(at 40% 20%, rgba(212, 175, 55, 0.15) 0px, transparent 50%),
        radial-gradient(at 80% 0%, rgba(212, 175, 55, 0.1) 0px, transparent 50%),
        radial-gradient(at 0% 50%, rgba(212, 175, 55, 0.08) 0px, transparent 50%);
    "></div>
    
    <!-- Animated Grid -->
    <div class="absolute inset-0 opacity-[0.02]">
      <div class="absolute inset-0" style="
        background-image: 
          linear-gradient(rgba(212, 175, 55, 0.1) 1px, transparent 1px),
          linear-gradient(90deg, rgba(212, 175, 55, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
      "></div>
    </div>
  </div>

  <!-- Background Video (Fallback to gradient) -->
  <div class="absolute inset-0">
    @if(file_exists(public_path('storage/videos/WhatsApp Video.mp4')))
      <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-20">
        <source src="{{ asset('storage/videos/WhatsApp Video.mp4') }}" type="video/mp4">
      </video>
    @else
      <div class="w-full h-full bg-gradient-to-br from-yellow-400/10 via-transparent to-yellow-600/5"></div>
    @endif
  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-black/80"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-6">
    <!-- Section Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-black text-white mb-4">
        Leadership & <span class="gradient-text">Vision</span>
      </h2>
      <p class="text-gray-400 text-xl max-w-2xl mx-auto">
        Guided by experience, driven by innovation, committed to excellence
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Founder Visual -->
      <div data-aos="fade-right" class="relative group">
        <!-- Main Image Container -->
        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
          <div class="aspect-[3/4] relative overflow-hidden">
            <img   
              src="{{ asset('images/team/WhatsApp Image 2025-10-30 at 8.40.45 PM.jpeg') }}"
              alt="Afzal Mehmood — Founder & Chairman"
              class="w-full h-full object-cover transform transition-all duration-700 group-hover:scale-105"
            >
            <!-- Image Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30"></div>
          </div>
          
          <!-- Floating Elements -->
          <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 glass-dark px-8 py-4 rounded-2xl backdrop-blur-xl border border-yellow-400/20 shadow-2xl">
            <div class="text-center">
              <h3 class="text-xl font-bold text-white mb-1">Afzal Mehmood</h3>
              <p class="text-yellow-400 text-sm font-semibold">Founder & Chairman</p>
            </div>
          </div>
        </div>

        <!-- Experience Badge -->
        <div class="absolute -top-4 -left-4">
          <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 text-gray-900 px-6 py-3 rounded-2xl font-bold text-lg shadow-2xl">
            <div class="text-2xl">15+</div>
            <div class="text-xs">Years Experience</div>
          </div>
        </div>

        <!-- Signature -->
        <div class="absolute bottom-8 right-8 opacity-80 transform rotate-12">
          <div class="text-yellow-400 font-cursive text-2xl tracking-wider">A. Mehmood</div>
        </div>
      </div>

      <!-- Founder Content -->
      <div data-aos="fade-left" class="space-y-8">
        <!-- Quote -->
        <div class="relative">
          <div class="text-6xl text-yellow-400/20 font-serif absolute -top-4 -left-2">"</div>
          <blockquote class="text-2xl md:text-3xl font-light text-white leading-relaxed italic pl-8">
            Every structure tells a story of vision, resilience, and excellence. We transform dreams into enduring landmarks that inspire generations.
          </blockquote>
          <div class="text-6xl text-yellow-400/20 font-serif absolute -bottom-8 right-2">"</div>
        </div>

        <!-- Message -->
        <div class="space-y-4 text-gray-300 text-lg leading-relaxed">
          <p>
            At Globecon, our mission has always been to shape skylines and redefine quality through innovation and integrity. 
            We believe that exceptional construction isn't just about buildings—it's about creating legacies.
          </p>
          <p>
            Our commitment to sustainable practices, cutting-edge technology, and unwavering quality standards 
            ensures that every project we undertake becomes a benchmark for excellence in the industry.
          </p>
        </div>

        <!-- Leadership Stats -->
        <div class="grid grid-cols-2 gap-6 py-6">
          <div class="text-center p-4 glass-dark rounded-2xl border border-yellow-400/10 hover:border-yellow-400/30 transition-all group">
            <div class="text-3xl font-bold text-yellow-400 mb-2 leadership-stat" data-target="725">0</div>
            <div class="text-gray-400 text-sm">Projects Completed</div>
          </div>
          <div class="text-center p-4 glass-dark rounded-2xl border border-yellow-400/10 hover:border-yellow-400/30 transition-all group">
            <div class="text-3xl font-bold text-yellow-400 mb-2 leadership-stat" data-target="98">0</div>
            <div class="text-gray-400 text-sm">Client Satisfaction</div>
          </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 pt-6">
          <a href="/team" class="btn-modern inline-flex items-center justify-center gap-3 px-8 py-4 rounded-2xl font-semibold text-lg flex-1 text-center">
            Meet Our Team
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
          <a href="/about" class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-2xl border border-gray-600 text-white hover:bg-white/5 transition-all font-semibold text-lg flex-1 text-center">
            Our Story
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Vision Highlights -->
    <div class="grid md:grid-cols-3 gap-8 mt-16" data-aos="fade-up">
      <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
        <div class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition-colors">
          <svg class="w-8 h-8 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
          </svg>
        </div>
        <h3 class="text-white font-semibold mb-2">Innovation</h3>
        <p class="text-gray-400 text-sm">Pioneering construction technologies and sustainable methodologies</p>
      </div>
      
      <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
        <div class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition-colors">
          <svg class="w-8 h-8 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-white font-semibold mb-2">Quality</h3>
        <p class="text-gray-400 text-sm">Uncompromising standards in every aspect of construction</p>
      </div>
      
      <div class="text-center p-6 glass-dark rounded-2xl hover:border-yellow-400/30 border border-transparent transition-all group">
        <div class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition-colors">
          <svg class="w-8 h-8 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-white font-semibold mb-2">Partnership</h3>
        <p class="text-gray-400 text-sm">Building lasting relationships through trust and collaboration</p>
      </div>
    </div>
  </div>

  <!-- Floating Particles -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute animate-float-1 top-1/4 left-10 w-2 h-2 bg-yellow-400 rounded-full opacity-70"></div>
    <div class="absolute animate-float-2 bottom-1/3 right-16 w-3 h-3 bg-yellow-300 rounded-full opacity-60"></div>
    <div class="absolute animate-float-3 top-1/2 right-1/4 w-1.5 h-1.5 bg-yellow-500 rounded-full opacity-80"></div>
    <div class="absolute animate-float-4 top-3/4 left-1/3 w-2.5 h-2.5 bg-yellow-400 rounded-full opacity-50"></div>
  </div>
</section>

<!-- =========================
     ENHANCED CONTACT SECTION - Interactive Engagement
     ========================= -->
<section class="section-padding bg-gray-900 relative overflow-hidden" id="contact">
  <!-- Background Elements -->
  <div class="absolute inset-0">
    <!-- Gradient Orbs -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400/5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-yellow-600/5 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
    
    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-[0.03]">
      <div class="absolute inset-0" style="
        background-image: 
          linear-gradient(rgba(212, 175, 55, 0.3) 1px, transparent 1px),
          linear-gradient(90deg, rgba(212, 175, 55, 0.3) 1px, transparent 1px);
        background-size: 60px 60px;
      "></div>
    </div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-black text-white mb-4">
        Start Your <span class="gradient-text">Project</span>
      </h2>
      <p class="text-gray-400 text-xl max-w-2xl mx-auto">
        Ready to bring your vision to life? Let's discuss how we can make it happen together.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-start">
      <!-- Contact Form -->
      <div data-aos="fade-right" class="space-y-8">
        <!-- Quick Contact Cards -->
        <div class="grid grid-cols-2 gap-4 mb-8">
          <div class="glass-dark p-4 rounded-2xl text-center group hover:border-yellow-400/30 border border-transparent transition-all">
            <div class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-yellow-400 transition-colors">
              <svg class="w-6 h-6 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
            </div>
            <div class="text-white font-semibold">+971 4 580 0762</div>
            <div class="text-gray-400 text-sm">Call Us</div>
          </div>
          
          <div class="glass-dark p-4 rounded-2xl text-center group hover:border-yellow-400/30 border border-transparent transition-all">
            <div class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-yellow-400 transition-colors">
              <svg class="w-6 h-6 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div class="text-white font-semibold text-sm">info@globeconconstruction.com</div>
            <div class="text-gray-400 text-sm">Email Us</div>
          </div>
        </div>

        <!-- Enhanced Form -->
        <div class="glass-dark p-8 rounded-3xl">
          <form method="POST" action="{{ route('contact.send') }}" class="space-y-6" id="contactForm">
            @csrf
            
            <!-- Form Header -->
            <div class="text-center mb-6">
              <h3 class="text-2xl font-bold text-white mb-2">Send us a Message</h3>
              <p class="text-gray-400">We typically respond within 24 hours</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="form-group">
                <label class="block text-sm font-semibold text-gray-300 mb-3">Full Name *</label>
                <input type="text" name="name" placeholder="Your full name" required
                       class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition form-input">
                <div class="form-error hidden text-red-400 text-sm mt-2"></div>
              </div>

              <div class="form-group">
                <label class="block text-sm font-semibold text-gray-300 mb-3">Email Address *</label>
                <input type="email" name="email" placeholder="you@example.com" required
                       class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition form-input">
                <div class="form-error hidden text-red-400 text-sm mt-2"></div>
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="form-group">
                <label class="block text-sm font-semibold text-gray-300 mb-3">Phone Number</label>
                <input type="tel" name="phone" placeholder="+971 XX XXX XXXX"
                       class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition form-input">
              </div>

              <div class="form-group">
                <label class="block text-sm font-semibold text-gray-300 mb-3">Project Type</label>
                <select name="project_type" class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition">
                  <option value="">Select project type</option>
                  <option value="residential">Residential</option>
                  <option value="commercial">Commercial</option>
                  <option value="infrastructure">Infrastructure</option>
                  <option value="renovation">Renovation</option>
                  <option value="consultation">Consultation</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="block text-sm font-semibold text-gray-300 mb-3">Project Budget</label>
              <select name="budget" class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition">
                <option value="">Select budget range</option>
                <option value="under-1m">Under $1M</option>
                <option value="1m-5m">$1M - $5M</option>
                <option value="5m-20m">$5M - $20M</option>
                <option value="20m-50m">$20M - $50M</option>
                <option value="over-50m">Over $50M</option>
              </select>
            </div>

            <div class="form-group">
              <label class="block text-sm font-semibold text-gray-300 mb-3">Message *</label>
              <textarea name="message" rows="5" placeholder="Tell us about your project requirements, timeline, and any specific needs..." required
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition form-input resize-none"></textarea>
              <div class="form-error hidden text-red-400 text-sm mt-2"></div>
            </div>

            <!-- Submit Button with Loading State -->
            <button type="submit" class="w-full btn-modern py-4 rounded-xl font-semibold text-lg shadow-lg transition-all duration-300 flex items-center justify-center gap-3" id="submitBtn">
              <span id="submitText">Send Message</span>
              <svg id="submitSpinner" class="w-5 h-5 hidden animate-spin" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
            </button>

            <!-- Success Message -->
            <div id="successMessage" class="hidden p-4 bg-green-500/20 border border-green-500/30 rounded-xl text-green-400 text-center">
              <svg class="w-6 h-6 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Thank you! Your message has been sent successfully. We'll get back to you soon.
            </div>
          </form>
        </div>
      </div>

      <!-- Contact Information & Map -->
      <div data-aos="fade-left" class="space-y-8">
        <!-- Office Information -->
        <div class="glass-dark p-8 rounded-3xl">
          <h3 class="text-2xl font-bold text-white mb-6">Visit Our Office</h3>
          
          <div class="space-y-6">
            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-800/50 transition-all cursor-pointer group">
              <div class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-400 transition-colors">
                <svg class="w-6 h-6 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="text-white font-semibold mb-2">Headquarters</h4>
                <p class="text-gray-400">Diamond Business Centre, 208 A Arjaan</p>
                <p class="text-gray-400">Al Barsha South 3, Arjaan Dubai</p>
              </div>
            </div>

            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-800/50 transition-all cursor-pointer group">
              <div class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-400 transition-colors">
                <svg class="w-6 h-6 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="text-white font-semibold mb-2">Business Hours</h4>
                <p class="text-gray-400">Sunday - Thursday: 8:00 AM - 6:00 PM</p>
                <p class="text-gray-400">Friday: 9:00 AM - 1:00 PM</p>
                <p class="text-gray-400">Saturday: Open</p>
              </div>
            </div>

            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-800/50 transition-all cursor-pointer group">
              <div class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-400 transition-colors">
                <svg class="w-6 h-6 text-yellow-400 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="text-white font-semibold mb-2">Quick Response</h4>
                <p class="text-gray-400">We guarantee response within 24 hours</p>
                <p class="text-gray-400">Emergency projects: Immediate consultation</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Interactive Map -->
        <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.981092330987!2d55.230046575464385!3d25.08971283662564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6ba7287b12a5%3A0xe812f6c43fba47de!2sDiamond%20Business%20Centre!5e0!3m2!1sen!2sae!4v1730220000000!5m2!1sen!2sae&dirflg=d"
            class="w-full h-80 border-0"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>

          <!-- Map Overlay with CTA -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
          
          <div class="absolute bottom-4 right-4 z-10">
            <a 
              href="https://www.google.com/maps/dir/?api=1&destination=Diamond+Business+Centre,+Arjan,+Dubai,+UAE" 
              target="_blank" 
              class="btn-modern inline-flex items-center gap-2 px-6 py-3 rounded-xl font-semibold text-sm transform transition-transform group-hover:scale-105">
              Get Directions
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </a>
          </div>
        </div>
    </div>
  </div>
</section>

<style>
  /* Founder Section Animations */
  @keyframes gridMove {
    0% { transform: translateX(0) translateY(0); }
    100% { transform: translateX(-50px) translateY(-50px); }
  }

  @keyframes float-1 {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    50% { transform: translateY(-20px) translateX(10px); }
  }

  @keyframes float-2 {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    50% { transform: translateY(15px) translateX(-15px); }
  }

  @keyframes float-3 {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    50% { transform: translateY(-10px) translateX(-10px); }
  }

  @keyframes float-4 {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    50% { transform: translateY(25px) translateX(5px); }
  }

  .animate-float-1 { animation: float-1 6s ease-in-out infinite; }
  .animate-float-2 { animation: float-2 8s ease-in-out infinite; }
  .animate-float-3 { animation: float-3 7s ease-in-out infinite; }
  .animate-float-4 { animation: float-4 9s ease-in-out infinite; }

  /* Form Enhancements */
  .form-input:focus {
    box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
  }

  .form-input.error {
    border-color: #f87171;
    box-shadow: 0 0 0 3px rgba(248, 113, 113, 0.1);
  }

  /* Font for Signature */
  .font-cursive {
    font-family: 'Brush Script MT', cursive;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Leadership Stats Counter
    const leadershipStats = document.querySelectorAll('.leadership-stat');
    
    leadershipStats.forEach(stat => {
      const target = +stat.getAttribute('data-target');
      const duration = 2000;
      const startTime = performance.now();
      const startValue = 0;

      const updateStat = (currentTime) => {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
        const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
        
        stat.innerText = currentValue;
        
        if (progress < 1) {
          requestAnimationFrame(updateStat);
        } else {
          stat.innerText = target;
        }
      };

      // Trigger when element comes into view
      const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            requestAnimationFrame(updateStat);
            statObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      statObserver.observe(stat);
    });

    // Enhanced Form Validation
    const contactForm = document.getElementById('contactForm');
    const formInputs = contactForm.querySelectorAll('.form-input');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const submitSpinner = document.getElementById('submitSpinner');
    const successMessage = document.getElementById('successMessage');

    formInputs.forEach(input => {
      input.addEventListener('blur', function() {
        validateField(this);
      });

      input.addEventListener('input', function() {
        clearError(this);
      });
    });

    function validateField(field) {
      const value = field.value.trim();
      const errorElement = field.parentElement.querySelector('.form-error');

      if (field.hasAttribute('required') && !value) {
        showError(field, 'This field is required');
        return false;
      }

      if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
          showError(field, 'Please enter a valid email address');
          return false;
        }
      }

      clearError(field);
      return true;
    }

    function showError(field, message) {
      field.classList.add('error');
      const errorElement = field.parentElement.querySelector('.form-error');
      errorElement.textContent = message;
      errorElement.classList.remove('hidden');
    }

    function clearError(field) {
      field.classList.remove('error');
      const errorElement = field.parentElement.querySelector('.form-error');
      errorElement.classList.add('hidden');
    }

    // Form Submission
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      let isValid = true;
      formInputs.forEach(input => {
        if (!validateField(input)) {
          isValid = false;
        }
      });

      if (isValid) {
        // Show loading state
        submitText.textContent = 'Sending...';
        submitSpinner.classList.remove('hidden');
        submitBtn.disabled = true;

        // Simulate form submission
        setTimeout(() => {
          // Show success message
          successMessage.classList.remove('hidden');
          contactForm.reset();
          
          // Reset button state
          submitText.textContent = 'Send Message';
          submitSpinner.classList.add('hidden');
          submitBtn.disabled = false;

          // Hide success message after 5 seconds
          setTimeout(() => {
            successMessage.classList.add('hidden');
          }, 5000);
        }, 2000);
      }
    });

    // Smooth scroll to contact form from other sections
    const contactLinks = document.querySelectorAll('a[href="#contact"]');
    contactLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#contact').scrollIntoView({ 
          behavior: 'smooth',
          block: 'start'
        });
      });
    });
  });
</script>

<!-- AOS + Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS
    AOS.init({
      duration: 900,
      once: true,
      easing: 'ease-out-cubic'
    });

    // Hero parallax effect
    const hero = document.querySelector('section.relative.min-h-screen');
    const parallaxTitle = document.querySelector('.parallax');
    if (hero && parallaxTitle) {
      hero.addEventListener('mousemove', (e) => {
        const rect = hero.getBoundingClientRect();
        const px = (e.clientX - rect.left) / rect.width - 0.5;
        const py = (e.clientY - rect.top) / rect.height - 0.5;
        parallaxTitle.style.transform = `translateY(${py * -8}px) translateX(${px * 8}px)`;
      });
      hero.addEventListener('mouseleave', () => parallaxTitle.style.transform = '');
    }

    // Smooth scroll for Learn More
    const learnMoreLinks = document.querySelectorAll('a[href="#about"]');
    learnMoreLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#about').scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });

    // Enhanced counter animation
    const counters = document.querySelectorAll('.count-up');
    
    const animateCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const duration = +counter.getAttribute('data-duration') || 2000;
      const startTime = performance.now();
      const startValue = 0;
      const container = counter.closest('.stat-container');
      
      if (container) {
        container.classList.add('animated');
      }

      const updateCounter = (currentTime) => {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        
        // Easing function for smooth animation
        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
        
        const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
        counter.innerText = currentValue.toLocaleString();
        
        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };

      requestAnimationFrame(updateCounter);
    };

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
  });
</script>

@endsection