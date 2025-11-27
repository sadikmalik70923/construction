@extends('layouts.app')

@section('title', 'About Us - Globecon Construction LLC')

@section('content')
@php
  $hero = [
    'video' => asset('images/WhatsApp Video 2025-10-17 at 2.22.50 PM.mp4'),
    'poster' => 'https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=2000&q=85',
  ];
@endphp

<!-- GSAP + Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js"></script>

<!-- Tilt.js for 3D hover -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>

<!-- Particles.js -->
<div id="particles-js" class="fixed inset-0 -z-10 opacity-30 pointer-events-none"></div>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<style>
  :root {
    --gold: #D4AF37;
    --deep: #040612;
    --glass: rgba(6,8,12,.92);
    --glow: rgba(212,175,55,.3);
  }

  * { cursor: none; }
  body { background: var(--deep); color: #f8fafc; overflow-x: hidden; }

  /* Custom Cursor */
  .cursor {
    width: 20px; height: 20px;
    border: 2px solid var(--gold);
    border-radius: 50%;
    position: fixed; pointer-events: none;
    transform: translate(-50%, -50%);
    z-index: 9999; transition: all 0.15s ease;
    mix-blend-mode: difference;
  }
  .cursor::after {
    content: ''; position: absolute;
    width: 6px; height: 6px;
    background: var(--gold); border-radius: 50%;
    top: 50%; left: 50%; transform: translate(-50%, -50%);
  }
  .cursor.hover {
    width: 60px; height: 60px;
    background: rgba(212,175,55,.15);
    border-color: transparent;
  }

  /* Glassmorphism */
  .glass {
    background: var(--glass);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,.05);
    border-radius: 1.5rem;
    box-shadow: 0 20px 60px rgba(0,0,0,.7);
    position: relative;
    overflow: hidden;
  }
  .glass::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(212,175,55,.08), transparent 50%);
    pointer-events: none; opacity: 0;
    transition: opacity .4s ease;
  }
  .glass:hover::before { opacity: 1; }

  /* Gold Gradient Button */
  .btn-gold {
    background: linear-gradient(135deg, #D4AF37, #f9c14a);
    color: #071028; font-weight: 800;
    padding: .75rem 1.5rem; border-radius: 1rem;
    box-shadow: 0 12px 35px rgba(212,175,55,.25);
    transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative; overflow: hidden;
    display: inline-flex; gap: .6rem; align-items: center;
  }
  .btn-gold::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(135deg, #fff, transparent);
    transform: translateX(-100%); transition: transform .6s;
  }
  .btn-gold:hover::before { transform: translateX(100%); }
  .btn-gold:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 20px 50px rgba(212,175,55,.4);
  }

  /* Text Gold */
  .text-gold { color: var(--gold); }
  .muted { color: #cbd5e1; opacity: .95; }

  /* Section Title */
  .section-title {
    font-weight: 900; font-size: 2rem; color: var(--gold);
    margin-bottom: .8rem; position: relative; padding-left: 2rem;
    display: inline-block;
  }
  .section-title::before {
    content: ''; position: absolute; left: 0; top: 50%;
    transform: translateY(-50%); width: 14px; height: 14px;
    background: var(--gold); border-radius: 50%;
    box-shadow: 0 0 20px rgba(212,175,55,.8);
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%, 100% { box-shadow: 0 0 20px rgba(212,175,55,.8); }
    50% { box-shadow: 0 0 30px rgba(212,175,55,1); }
  }

  /* Stats Cards */
  .stat-card {
    background: var(--glass);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,.05);
    border-radius: 1.5rem;
    padding: 2.5rem;
    text-align: center;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
  }
  .stat-card::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(212,175,55,.1), transparent 70%);
    opacity: 0; transition: opacity .4s ease;
  }
  .stat-card:hover::before { opacity: 1; }
  .stat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 60px rgba(0,0,0,.8);
  }

  /* Core Value Flip Card */
  .flip-card {
    perspective: 1000px; height: 280px;
  }
  .flip-inner {
    position: relative; width: 100%; height: 100%;
    transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    transform-style: preserve-3d;
  }
  .flip-card:hover .flip-inner {
    transform: rotateY(180deg);
  }
  .flip-front, .flip-back {
    position: absolute; width: 100%; height: 100%;
    backface-visibility: hidden; border-radius: 1.5rem;
    padding: 2rem; display: flex; flex-direction: column;
    justify-content: center;
  }
  .flip-front {
    background: var(--glass); border: 1px solid rgba(255,255,255,.05);
  }
  .flip-back {
    background: linear-gradient(135deg, #D4AF37, #b8972a);
    color: #071028; transform: rotateY(180deg);
  }

  /* Hero Video Parallax */
  .hero-video {
    transform: scale(1.1);
    transition: transform 1s ease;
  }

  /* Text Reveal */
  .text-reveal {
    overflow: hidden; display: inline-block;
  }
  .text-reveal span {
    display: inline-block; transform: translateY(100%);
  }

  /* Timeline */
  .timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
  }
  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, var(--gold), transparent);
  }
  .timeline-item {
    margin-bottom: 4rem;
    position: relative;
  }
  .timeline-content {
    background: var(--glass);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,.05);
    border-radius: 1rem;
    padding: 2rem;
    width: 45%;
    position: relative;
  }
  .timeline-item:nth-child(odd) .timeline-content {
    margin-left: auto;
  }
  .timeline-item:nth-child(even) .timeline-content {
    margin-right: auto;
  }
  .timeline-content::before {
    content: '';
    position: absolute;
    top: 50%;
    width: 20px;
    height: 20px;
    background: var(--gold);
    border-radius: 50%;
    transform: translateY(-50%);
  }
  .timeline-item:nth-child(odd) .timeline-content::before {
    left: -50px;
  }
  .timeline-item:nth-child(even) .timeline-content::before {
    right: -50px;
  }

  /* Responsive */
  @media (max-width: 900px) {
    .section-title { font-size: 1.6rem; }
    .timeline::before { left: 30px; }
    .timeline-content { width: calc(100% - 80px); margin-left: 80px !important; }
    .timeline-content::before { left: -50px !important; right: auto !important; }
  }
</style>

<!-- CUSTOM CURSOR -->
<div class="cursor"></div>

<!-- HERO -->
<section class="relative h-screen overflow-hidden">
  <video class="hero-video absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline poster="{{ $hero['poster'] }}">
    <source src="{{ $hero['video'] }}" type="video/mp4">
  </video>
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>

  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
    <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
      <div class="text-reveal"><span>About Globecon</span></div>
      <div class="text-reveal"><span>Construction LLC</span></div>
    </h1>
    <p class="text-xl md:text-2xl text-gray-300 max-w-4xl leading-relaxed opacity-0" id="hero-subtitle">
      Building a legacy of trust, innovation, and architectural brilliance — shaping tomorrow's skyline, today.
    </p>
  </div>
</section>

<!-- COMPANY OVERVIEW -->
<section class="py-32 bg-slate-900/50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div>
        <h2 class="section-title reveal-text">Our Story</h2>
        <p class="muted text-lg leading-relaxed mb-6 reveal-text">
          Founded with a vision to redefine construction excellence, Globecon Construction LLC has emerged as a global leader in delivering innovative and sustainable building solutions. Our journey began with a simple yet powerful mission: to create structures that stand the test of time while pushing the boundaries of architectural innovation.
        </p>
        <p class="muted text-lg leading-relaxed mb-8 reveal-text">
          With projects spanning across 40+ countries, we've built a reputation for precision, reliability, and uncompromising quality. From towering skyscrapers to intricate infrastructure projects, each construction reflects our commitment to excellence and our passion for shaping the world's architectural landscape.
        </p>
        <div class="flex gap-4 flex-wrap">
          <a href="{{ route('projects') }}" class="btn-gold cursor-hover">Our Projects</a>
          <a href="{{ route('services') }}" class="btn-gold cursor-hover" style="background:transparent;border:2px solid var(--gold);color:var(--gold);">
            Our Services
          </a>
        </div>
      </div>
      <div class="glass p-8 rounded-3xl scale-anim">
        <div class="grid grid-cols-2 gap-6">
          <div class="stat-card">
            <div class="text-4xl font-bold text-gold mb-2">40+</div>
            <div class="muted">Countries Served</div>
          </div>
          <div class="stat-card">
            <div class="text-4xl font-bold text-gold mb-2">500+</div>
            <div class="muted">Projects Completed</div>
          </div>
          <div class="stat-card">
            <div class="text-4xl font-bold text-gold mb-2">25+</div>
            <div class="muted">Years Experience</div>
          </div>
          <div class="stat-card">
            <div class="text-4xl font-bold text-gold mb-2">98%</div>
            <div class="muted">Client Satisfaction</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section class="py-32 bg-black">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-20">
    <h2 class="section-title reveal-text">Our Mission & Vision</h2>
    <p class="text-gray-400 max-w-3xl mx-auto text-lg reveal-text">
      We aim to pioneer sustainable, high-quality construction practices — setting new benchmarks for the modern built environment.
    </p>
  </div>

  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 px-6 lg:px-8">
    <div class="glass p-10 rounded-3xl scale-anim" data-aos="fade-up">
      <div class="text-gold text-5xl mb-4">🎯</div>
      <h3 class="text-3xl font-bold text-gold mb-4">Our Mission</h3>
      <p class="muted text-lg leading-relaxed mb-4">To deliver architectural excellence and engineering precision that shape modern cities and improve everyday living — one landmark at a time.</p>
      <ul class="muted text-sm space-y-2">
        <li>• Innovative construction solutions</li>
        <li>• Sustainable building practices</li>
        <li>• Client-focused approach</li>
        <li>• Quality-driven execution</li>
      </ul>
    </div>
    <div class="glass p-10 rounded-3xl scale-anim" data-aos="fade-up" data-aos-delay="200">
      <div class="text-gold text-5xl mb-4">🔭</div>
      <h3 class="text-3xl font-bold text-gold mb-4">Our Vision</h3>
      <p class="muted text-lg leading-relaxed mb-4">To be the global benchmark in sustainable, innovative construction — creating legacies that reflect excellence, trust, and human progress.</p>
      <ul class="muted text-sm space-y-2">
        <li>• Global construction leadership</li>
        <li>• Technological innovation</li>
        <li>• Environmental stewardship</li>
        <li>• Community development</li>
      </ul>
    </div>
  </div>
</section>

<!-- OUR JOURNEY TIMELINE -->
<section class="py-32 bg-slate-900/50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-20">
    <h2 class="section-title reveal-text">Our Journey</h2>
    <p class="text-gray-400 max-w-3xl mx-auto text-lg reveal-text">
      A timeline of milestones that shaped our growth and excellence in the construction industry.
    </p>
  </div>

  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-content glass">
        
        <h5 class="text-lg font-semibold text-gold mb-3">Foundation</h5>
        <p class="muted">Globecon Construction LLC was established with a vision to revolutionize the construction industry through innovation and quality.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-content glass">
        
        <h5 class="text-lg font-semibold text-gold mb-3">Global Expansion</h5>
        <p class="muted">Expanded operations internationally, taking on projects across multiple continents and establishing our global presence.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-content glass">
     
        <h5 class="text-lg font-semibold text-gold mb-3">Sustainability Focus</h5>
        <p class="muted">Integrated sustainable practices and green building technologies into all our projects, leading the industry in eco-friendly construction.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-content glass">
        
        <h5 class="text-lg font-semibold text-gold mb-3">Digital Transformation</h5>
        <p class="muted">Implemented advanced digital construction technologies, BIM modeling, and AI-powered project management systems.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-content glass">
        
        <h5 class="text-lg font-semibold text-gold mb-3">Industry Leadership</h5>
        <p class="muted">Recognized as a global leader in construction innovation with projects spanning 40+ countries and a portfolio of landmark structures.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES (3D FLIP) -->
<section class="py-32 bg-gradient-to-b from-black to-slate-900">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-16">
    <h2 class="section-title reveal-text">Our Core Values</h2>
    <p class="muted max-w-2xl mx-auto text-lg reveal-text">We build not just structures — but relationships, trust, and excellence that lasts.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl mx-auto px-6 lg:px-8">
    <div class="flip-card">
      <div class="flip-inner glass">
        <div class="flip-front">
          <h4 class="text-2xl font-bold text-gold mb-3">Integrity</h4>
          <p class="muted text-sm">Honesty and transparency in every project.</p>
        </div>
        <div class="flip-back">
          <p class="text-sm font-medium">We believe trust is the foundation of every great structure — and every great relationship.</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-inner glass">
        <div class="flip-front">
          <h4 class="text-2xl font-bold text-gold mb-3">Innovation</h4>
          <p class="muted text-sm">Creative solutions that redefine construction.</p>
        </div>
        <div class="flip-back">
          <p class="text-sm font-medium">Tomorrow's skyline starts with today's bold ideas.</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-inner glass">
        <div class="flip-front">
          <h4 class="text-2xl font-bold text-gold mb-3">Excellence</h4>
          <p class="muted text-sm">Uncompromising quality in every detail.</p>
        </div>
        <div class="flip-back">
          <p class="text-sm font-medium">Good enough is never enough. We build legacies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-32 bg-black">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-20">
    <h2 class="section-title reveal-text">Why Choose Globecon?</h2>
    <p class="text-gray-400 max-w-3xl mx-auto text-lg reveal-text">
      Discover what sets us apart in the competitive construction landscape.
    </p>
  </div>

  <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto px-6 lg:px-8">
    <div class="glass p-8 rounded-2xl text-center scale-anim">
      <div class="text-gold text-4xl mb-4">🏗️</div>
      <h4 class="text-xl font-bold text-gold mb-3">Expert Craftsmanship</h4>
      <p class="muted text-sm">Decades of experience delivering precision engineering and superior construction quality.</p>
    </div>
    <div class="glass p-8 rounded-2xl text-center scale-anim">
      <div class="text-gold text-4xl mb-4">🌍</div>
      <h4 class="text-xl font-bold text-gold mb-3">Global Expertise</h4>
      <p class="muted text-sm">International experience across diverse climates, regulations, and architectural styles.</p>
    </div>
    <div class="glass p-8 rounded-2xl text-center scale-anim">
      <div class="text-gold text-4xl mb-4">💡</div>
      <h4 class="text-xl font-bold text-gold mb-3">Innovation Driven</h4>
      <p class="muted text-sm">Cutting-edge technology and innovative solutions for complex construction challenges.</p>
    </div>
    <div class="glass p-8 rounded-2xl text-center scale-anim">
      <div class="text-gold text-4xl mb-4">🤝</div>
      <h4 class="text-xl font-bold text-gold mb-3">Client Partnership</h4>
      <p class="muted text-sm">Collaborative approach ensuring your vision becomes reality with seamless execution.</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-32 bg-black text-center relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-70"></div>
  <div class="relative z-10">
    <h2 class="text-4xl md:text-6xl font-bold mb-6 reveal-text">Partner With Globecon</h2>
    <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto reveal-text">
      Together, let's build the landmarks of tomorrow — with precision, passion, and purpose.
    </p>
    <a href="/contact" class="btn-gold text-lg px-8 py-4 cursor-hover inline-flex items-center gap-3">
      Contact Us
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 8.25L21 12l-3.75 3.75M3 12h18" />
      </svg>
    </a>
  </div>
</section>

<!-- SCRIPTS -->
<script>
  // Particles.js Config
  particlesJS('particles-js', {
    particles: {
      number: { value: 80, density: { enable: true, value_area: 800 } },
      color: { value: '#D4AF37' },
      shape: { type: 'circle' },
      opacity: { value: 0.3, random: true },
      size: { value: 3, random: true },
      line_linked: { enable: false },
      move: { enable: true, speed: 1, direction: 'none', random: false, straight: false, out_mode: 'out' }
    },
    interactivity: { detect_on: 'canvas', events: { onhover: { enable: true, mode: 'repulse' } } },
    retina_detect: true
  });

  // Custom Cursor
  const cursor = document.querySelector('.cursor');
  const hoverEls = document.querySelectorAll('.cursor-hover');
  document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
  });
  hoverEls.forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
  });

  // GSAP Animations
  gsap.registerPlugin(ScrollTrigger, TextPlugin);

  // Hero Text Reveal
  gsap.to(".text-reveal span", {
    y: 0, duration: 1.2, stagger: 0.2, ease: "power4.out", delay: 0.5
  });
  gsap.to("#hero-subtitle", { opacity: 1, y: 0, duration: 1, delay: 1.2 });

  // Parallax Video
  gsap.to(".hero-video", {
    yPercent: -30, ease: "none",
    scrollTrigger: { trigger: "section", start: "top top", end: "bottom top", scrub: true }
  });

  // Reveal on Scroll
  document.querySelectorAll('.reveal-text').forEach(el => {
    gsap.from(el, {
      y: 50, opacity: 0, duration: 1, ease: "power3.out",
      scrollTrigger: { trigger: el, start: "top 85%", toggleActions: "play none none reverse" }
    });
  });

  // Scale Anim
  gsap.from(".scale-anim", {
    scale: 0.9, opacity: 0, duration: 1, stagger: 0.2, ease: "back.out(1.7)",
    scrollTrigger: { trigger: ".scale-anim", start: "top 80%" }
  });

  // Timeline Animation
  gsap.from(".timeline-content", {
    x: (index, target) => target.classList.contains('timeline-item') && index % 2 === 0 ? -100 : 100,
    opacity: 0,
    duration: 1,
    stagger: 0.3,
    scrollTrigger: {
      trigger: ".timeline",
      start: "top 70%",
      toggleActions: "play none none reverse"
    }
  });
</script>
@endsection