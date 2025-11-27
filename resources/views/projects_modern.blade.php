@extends('layouts.app')

@section('title', 'Our Projects – Globecon Construction')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

@php
  $featured = [
    ['slug' => 'pearlshire-bond-enclave', 'title' => 'Pearlshire - Bond Enclave', 'category' => 'Commercial', 'image' => asset('images/projects/Front View.jpg')],
    ['slug' => 'community', 'title' => 'Community', 'category' => 'Residential', 'image' => asset('images/projects/2024-10-09.webp')],
    ['slug' => 'central-downtown', 'title' => 'The Central Downtown', 'category' => 'Commercial', 'image' => asset('images/projects/3.jpg')],
    ['slug' => 'samana-hills', 'title' => 'Samana Hills', 'category' => 'Residential', 'image' => asset('images/projects/Nighet2.webp')],
    ['slug' => 'private-villas', 'title' => 'Private Villas', 'category' => 'Luxury Homes', 'image' => asset('images/projects/WhatsApp-Image-2023-03-07-at-13.24.42.jpeg')],
    ['slug' => 'plazzo-heights', 'title' => 'Plazzo Heights', 'category' => 'Residential', 'image' => asset('images/projects/Plazzo_14.webp')],
    ['slug' => 'park-vista', 'title' => 'Park Vista', 'category' => 'Residential', 'image' => asset('images/projects/2022-03-15.webp')],
    ['slug' => 'palm-jumeirah', 'title' => 'Palm Jumeirah', 'category' => 'Luxury Development', 'image' => asset('images/projects/071fz8dtrdg64w5vcw9seqmto5eg.png')],
    ['slug' => 'o-ten', 'title' => 'O Ten', 'category' => 'Commercial', 'image' => asset('images/projects/NFyiGv5IEppPtxXIOZmm.jpeg')],
    ['slug' => 'empire-residence', 'title' => 'Empire Residence', 'category' => 'Residential', 'image' => asset('images/projects/2024-09-15.webp')],
  ];
@endphp

<style>
    /* Enhanced Premium Dark Theme */
    :root {
        --deep-navy: #0a1128;
        --dark-slate: #1a1f36;
        --charcoal: #2d3748;
        --gold: #d4af37;
        --bronze: #cd7f32;
        --silver: #c0c0c0;
        --emerald: #10b981;
        --sapphire: #3b82f6;
        --amethyst: #8b5cf6;
        --ivory: #f8fafc;
        --light-gray: #e2e8f0;
    }
    
    body {
        background: var(--deep-navy);
        color: var(--ivory);
        overflow-x: hidden;
        font-family: 'Inter', sans-serif;
    }
    
    .luxury-gradient {
        background: linear-gradient(135deg, var(--deep-navy) 0%, var(--dark-slate) 50%, #1e293b 100%);
    }
    
    .premium-card {
        background: linear-gradient(135deg, rgba(26, 31, 54, 0.9) 0%, rgba(45, 55, 72, 0.8) 100%);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(212, 175, 55, 0.2);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
    }
    
    .gold-accent {
        color: var(--gold);
    }
    
    .luxury-border {
        position: relative;
        border: 1px solid transparent;
        background: linear-gradient(var(--dark-slate), var(--dark-slate)) padding-box,
                   linear-gradient(135deg, var(--gold), var(--bronze), var(--silver)) border-box;
    }
    
    .elegant-glow {
        box-shadow: 0 0 30px rgba(212, 175, 55, 0.2),
                   0 0 60px rgba(212, 175, 55, 0.1);
    }
    
    .hover-lift {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
    }
    
    .luxury-button {
        background: linear-gradient(135deg, var(--gold), var(--bronze));
        color: var(--deep-navy);
        border: none;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        font-weight: 600;
    }
    
    .luxury-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }
    
    .luxury-button:hover::before {
        left: 100%;
    }
    
    .luxury-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(212, 175, 55, 0.3);
    }
    
    .outline-button {
        border: 2px solid var(--gold);
        color: var(--gold);
        background: transparent;
        transition: all 0.4s ease;
    }
    
    .outline-button:hover {
        background: var(--gold);
        color: var(--deep-navy);
        transform: translateY(-2px);
    }
    
    .text-gradient {
        background: linear-gradient(135deg, var(--gold), var(--bronze), var(--silver));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .hologram-text {
        background: linear-gradient(135deg, 
                   var(--gold) 0%, 
                   var(--silver) 25%,
                   var(--bronze) 50%,
                   var(--sapphire) 75%,
                   var(--amethyst) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: hologramShift 6s ease-in-out infinite;
        background-size: 200% 200%;
    }
    
    @keyframes hologramShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .cyber-grid {
        background-image: 
            linear-gradient(rgba(212, 175, 55, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(212, 175, 55, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
    }
    
    @keyframes gridMove {
        0% { background-position: 0 0; }
        100% { background-position: 50px 50px; }
    }
    
    .nebula-effect {
        background: linear-gradient(135deg,
                   rgba(10, 17, 40, 0.9) 0%,
                   rgba(26, 31, 54, 0.8) 50%,
                   rgba(45, 55, 72, 0.7) 100%);
        position: relative;
    }
    
    .cosmic-border {
        border: 2px solid transparent;
        background: 
            linear-gradient(var(--dark-slate), var(--dark-slate)) padding-box,
            linear-gradient(135deg, var(--gold), var(--bronze), var(--silver), var(--sapphire), var(--amethyst)) border-box;
        animation: cosmicShift 8s ease-in-out infinite;
    }
    
    @keyframes cosmicShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .cyber-line {
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--gold), transparent);
        position: relative;
        overflow: hidden;
    }
    
    .cyber-line::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
        animation: cyberScan 3s linear infinite;
    }
    
    @keyframes cyberScan {
        0% { left: -100%; }
        100% { left: 100%; }
    }
    
    .magnetic-card {
        transition: transform 0.6s cubic-bezier(0.23, 1, 0.320, 1);
    }
    
    .project-card {
        position: relative;
        overflow: hidden;
        border-radius: 1.5rem;
        height: 500px;
        background: var(--dark-slate);
    }
    
    .project-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .project-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 40%, rgba(10, 17, 40, 0.95) 90%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 2rem;
        opacity: 0;
        transition: all 0.4s ease;
    }
    
    .project-card:hover .project-overlay {
        opacity: 1;
    }
    
    .project-card:hover .project-image {
        transform: scale(1.1);
    }
    
    .project-title {
        font-size: 2rem;
        font-weight: 900;
        color: transparent;
        -webkit-text-stroke: 2px var(--gold);
        text-stroke: 2px var(--gold);
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 1rem;
        text-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
    }
    
    .project-category {
        background: linear-gradient(135deg, var(--gold), var(--bronze));
        color: var(--deep-navy);
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-weight: 700;
        font-size: 0.875rem;
        display: inline-block;
    }
    
    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        z-index: -1;
    }
    
    .floating-shape {
        position: absolute;
        opacity: 0.1;
        animation: floatRandom 25s infinite linear;
    }
    
    @keyframes floatRandom {
        0% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(100px, 50px) rotate(90deg); }
        50% { transform: translate(50px, 100px) rotate(180deg); }
        75% { transform: translate(-50px, 50px) rotate(270deg); }
        100% { transform: translate(0, 0) rotate(360deg); }
    }
    
    .hero-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(10, 17, 40, 0.8), rgba(26, 31, 54, 0.9));
        z-index: -1;
    }
    
    .expertise-card {
        background: linear-gradient(135deg, rgba(26, 31, 54, 0.8) 0%, rgba(45, 55, 72, 0.6) 100%);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 1.5rem;
        overflow: hidden;
        transition: all 0.4s ease;
    }
    
    .expertise-card:hover {
        transform: translateY(-10px);
        border-color: var(--gold);
        box-shadow: 0 25px 50px rgba(212, 175, 55, 0.2);
    }
    
    .content-section {
        position: relative;
        z-index: 10;
    }
</style>

<!-- Enhanced Background Elements -->
<div class="fixed inset-0 -z-10 luxury-gradient nebula-effect">
    <div class="floating-shapes">
        <div class="floating-shape" style="top: 10%; left: 5%; width: 100px; height: 100px; background: var(--gold); border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; animation-delay: 0s;"></div>
        <div class="floating-shape" style="top: 70%; left: 80%; width: 150px; height: 150px; background: var(--bronze); border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; animation-delay: 5s;"></div>
        <div class="floating-shape" style="top: 40%; left: 90%; width: 80px; height: 80px; background: var(--silver); border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; animation-delay: 10s;"></div>
    </div>
</div>

<!-- Navigation -->
<header class="relative z-50 px-6 py-6 max-w-7xl mx-auto flex items-center justify-between">
    <a href="/" class="flex items-center gap-3 text-silver-accent hover:text-gold-accent transition-all duration-300 group premium-card px-4 py-2 rounded-lg">
        <svg class="w-6 h-6 text-gold-accent group-hover:scale-110 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        <span class="group-hover:translate-x-1 transition-transform font-medium">Back to Home</span>
    </a>
    <div class="text-sm text-silver-accent tracking-widest opacity-90 font-light premium-card px-4 py-2 rounded-lg">GLOBECON CONSTRUCTION — PROJECTS</div>
</header>

<!-- ====================== HERO ====================== -->
<section class="relative h-screen overflow-hidden">
    <video class="hero-video" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1512453979798-5ea1b9d9b5d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=85">
        <source src="{{ asset('images/videos/WhatsApp Video 2025-10-17 at 2.22.50 PM (3).mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
        <div class="luxury-badge px-6 py-2 rounded-full font-bold mb-6 subtle-pulse">
            PREMIUM CONSTRUCTION • LUXURY BUILDS
        </div>
        <h1 class="text-5xl md:text-7xl font-black mb-6">
            <span class="hologram-text">CRAFTING ICONIC BUILDINGS</span>
        </h1>
        <p class="text-xl md:text-2xl text-silver-accent max-w-3xl mx-auto mb-10">
            Globecon delivers premium residential, commercial, and infrastructure projects with world-class design and execution.
        </p>

        <div class="flex flex-col sm:flex-row gap-6">
            <a href="#projects" class="luxury-button px-10 py-4 font-semibold rounded-lg text-lg">
                View Projects
            </a>
            <a href="/contact" class="outline-button px-10 py-4 font-semibold rounded-lg text-lg">
                Get a Quote
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2">
        <div class="w-6 h-10 border-2 border-gold-accent rounded-full flex justify-center premium-card">
            <div class="w-1 h-3 bg-gold-accent rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</section>

<!-- ====================== INTRO ====================== -->
<section class="relative py-24 luxury-gradient content-section">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
        <div class="cosmic-border rounded-2xl p-4 elegant-glow">
            <div class="rounded-xl overflow-hidden">
                <video autoplay muted loop playsinline class="w-full h-full object-cover rounded-xl">
                    <source src="{{ asset('images/videos/WhatsApp Video 2025-10-17 at 2.22.50 PM (4).mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="space-y-8">
            <h2 class="text-4xl md:text-5xl font-bold text-gradient">About Globecon Construction</h2>
            <p class="text-lg text-light-gray leading-relaxed">
                We combine premium design, advanced engineering, and rigorous project delivery standards to create landmarks that stand the test of time.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex items-center gap-4 premium-card p-4 rounded-xl">
                    <div class="w-6 h-6 bg-gradient-to-r from-gold to-bronze rounded-full"></div>
                    <div class="font-medium text-silver-accent">Turnkey Delivery</div>
                </div>
                <div class="flex items-center gap-4 premium-card p-4 rounded-xl">
                    <div class="w-6 h-6 bg-gradient-to-r from-gold to-bronze rounded-full"></div>
                    <div class="font-medium text-silver-accent">Sustainable Solutions</div>
                </div>
                <div class="flex items-center gap-4 premium-card p-4 rounded-xl">
                    <div class="w-6 h-6 bg-gradient-to-r from-gold to-bronze rounded-full"></div>
                    <div class="font-medium text-silver-accent">Safety Standards</div>
                </div>
                <div class="flex items-center gap-4 premium-card p-4 rounded-xl">
                    <div class="w-6 h-6 bg-gradient-to-r from-gold to-bronze rounded-full"></div>
                    <div class="font-medium text-silver-accent">Global Quality</div>
                </div>
            </div>

            <div class="flex gap-5">
                <a href="/about" class="luxury-button px-8 py-3 font-semibold rounded-lg">Learn More</a>
                <a href="#projects" class="outline-button px-8 py-3 font-semibold rounded-lg">See Projects</a>
            </div>
        </div>
    </div>
</section>

<!-- ====================== EXPERTISE ====================== -->
<section class="relative py-24 cyber-grid content-section">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-4xl md:text-5xl font-bold text-gradient mb-4">Our Expertise</h3>
        <p class="text-light-gray max-w-2xl mx-auto mb-12">
            Architectural design, construction management, and infrastructure — all crafted to world-class standards.
        </p>
        <div class="cyber-line mb-16"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="expertise-card hover-lift magnetic-card" data-aos="fade-up">
                <div class="h-64 overflow-hidden">
                    <img src="{{ asset('images/images.jpg') }}" class="w-full h-full object-cover transition duration-700 hover:scale-110">
                </div>
                <div class="p-8">
                    <h4 class="text-2xl font-bold gold-accent mb-3">Architecture & Design</h4>
                    <p class="text-light-gray">Elegant, functional spaces that balance aesthetic excellence with long-term performance.</p>
                </div>
            </div>

            <div class="expertise-card hover-lift magnetic-card" data-aos="fade-up" data-aos-delay="200">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover transition duration-700 hover:scale-110">
                </div>
                <div class="p-8">
                    <h4 class="text-2xl font-bold gold-accent mb-3">Construction Management</h4>
                    <p class="text-light-gray">Efficient planning, execution, and safety-first management for precision projects.</p>
                </div>
            </div>

            <div class="expertise-card hover-lift magnetic-card" data-aos="fade-up" data-aos-delay="400">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1600&q=80" class="w-full h-full object-cover transition duration-700 hover:scale-110">
                </div>
                <div class="p-8">
                    <h4 class="text-2xl font-bold gold-accent mb-3">Infrastructure & Civil Works</h4>
                    <p class="text-light-gray">Durable, reliable infrastructure that strengthens communities and defines skylines.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====================== PROJECTS GRID ====================== -->
<section id="projects" class="relative py-32 nebula-effect content-section">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-gradient mb-2">Featured Projects</h2>
                <p class="text-silver-accent">Selected works showcasing our premium design and construction.</p>
            </div>
            <a href="/projects" class="mt-4 md:mt-0 luxury-button px-6 py-3 font-semibold rounded-lg">
                View All Projects
            </a>
        </div>

        <!-- PROJECT CARDS - FULL SIZE IMAGES WITH TRANSPARENT TEXT -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach($featured as $i => $p)
            <a href="{{ route('project.detail', $p['slug']) }}" 
               class="project-card cosmic-border elegant-glow magnetic-card" 
               data-aos="zoom-in" 
               data-aos-delay="{{ $i * 100 }}">
                
                <!-- FULL SIZE PROJECT IMAGE -->
                <img src="{{ $p['image'] }}" 
                     alt="{{ $p['title'] }}" 
                     class="project-image">
                
                <!-- TRANSPARENT TEXT OVERLAY -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <h3 class="project-title text-center px-4">
                        {{ $p['title'] }}
                    </h3>
                </div>
                
                <!-- HOVER OVERLAY WITH DETAILS -->
                <div class="project-overlay">
                    <span class="project-category mb-4">
                        {{ $p['category'] }}
                    </span>
                    <h3 class="text-2xl font-bold text-ivory mb-2">
                        {{ $p['title'] }}
                    </h3>
                    <p class="text-silver-accent mb-4">
                        Discover the excellence behind this premium construction project
                    </p>
                    <div class="luxury-button inline-flex px-6 py-2 font-semibold rounded-lg text-sm">
                        View Project
                    </div>
                </div>
                
                <!-- ANIMATED BORDER GLOW -->
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-gold/0 via-gold/40 to-gold/0 opacity-0 transition-opacity duration-700 blur-xl group-hover:opacity-60"></div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- ====================== CTA ====================== -->
<section class="relative py-32 luxury-gradient content-section">
    <div class="max-w-4xl mx-auto text-center px-6">
        <div class="cosmic-border rounded-2xl p-12 elegant-glow">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="hologram-text">Ready to Start Your Project?</span>
            </h2>
            <p class="text-xl text-light-gray mb-8 max-w-2xl mx-auto">
                Let's transform your vision into an architectural masterpiece. Partner with Globecon for exceptional construction excellence.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/contact" class="luxury-button px-12 py-4 font-semibold rounded-lg text-lg">
                    Start Your Project
                </a>
                <a href="/about" class="outline-button px-12 py-4 font-semibold rounded-lg text-lg">
                    Learn More About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="relative py-12 luxury-gradient content-section">
    <div class="max-w-7xl mx-auto text-center">
        <div class="cyber-line mb-8"></div>
        <p class="text-silver-accent">&copy; {{ date('Y') }} Globecon Construction LLC. All rights reserved.</p>
        <p class="text-silver-accent mt-2">Building Excellence Since 2012</p>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 1200,
        once: true,
        easing: 'ease-out-cubic',
        offset: 100
    });
    
    // Magnetic card effect
    document.querySelectorAll('.magnetic-card').forEach(card => {
        card.addEventListener('mousemove', function(e) {
            if (window.innerWidth < 768) return;
            
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const deltaX = (x - centerX) / centerX * 8;
            const deltaY = (y - centerY) / centerY * 8;
            
            gsap.to(this, {
                x: deltaX,
                y: deltaY,
                duration: 0.4,
                ease: "power2.out"
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                x: 0,
                y: 0,
                duration: 0.6,
                ease: "elastic.out(1, 0.5)"
            });
        });
    });

    // Project card hover effects
    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            gsap.to(this.querySelector('.project-image'), {
                scale: 1.1,
                duration: 0.6,
                ease: "power2.out"
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this.querySelector('.project-image'), {
                scale: 1,
                duration: 0.6,
                ease: "power2.out"
            });
        });
    });
});
</script>
@endsection