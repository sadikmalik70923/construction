@extends('layouts.app')

@section('title', 'Founder – Globecon Construction LLC')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

@php
    $founder = [
        'name' => 'Mr. Afzal Mehmood',
        'title' => 'Founder & Chairman',
        'experience' => '35+',
        'photo' => asset('images/team/WhatsApp Image 2025-10-30 at 8.40.45 PM.jpeg'),
        'message' => 'We build more than structures — we build trust, legacy, and a future where excellence is the foundation of every project.',
        'companies' => [
            ['name'=>'Global Contracting','note'=>'Oversaw multiple high-end developments and operational excellence.'],
            ['name'=>'Triplanet Group (Elite Residency)','note'=>'Contributed to landmark residential developments.'],
            ['name'=>'Atcon Construction LLC','note'=>'Led execution of commercial & residential works.'],
            ['name'=>'Al-Rakhan Construction','note'=>'Directed large-scale projects with safety & sustainability.'],
            ['name'=>'Sescon Star','note'=>'Worked on infrastructure and residential ventures.'],
        ],
        'stats' => [
            ['number' => '35+', 'label' => 'Years Experience'],
            ['number' => '150+', 'label' => 'Projects Completed'],
            ['number' => '5', 'label' => 'Major Companies'],
            ['number' => '1000+', 'label' => 'Team Members Led']
        ],
        'achievements' => [
            ['title' => 'Visionary Leadership', 'desc' => 'Pioneered innovative construction methodologies', 'icon' => '👑'],
            ['title' => 'Industry Recognition', 'desc' => 'Multiple awards for construction excellence', 'icon' => '🏆'],
            ['title' => 'Sustainable Development', 'desc' => 'Championed green building practices', 'icon' => '🌱'],
            ['title' => 'Client Satisfaction', 'desc' => '98% repeat business rate', 'icon' => '💎']
        ],
        'testimonials' => [
            ['name' => 'Abdul Rahman', 'position' => 'CEO, Elite Properties', 'text' => 'Working with Mr. Mehmood has been transformative for our projects. His attention to detail is remarkable.'],
            ['name' => 'Sarah Johnson', 'position' => 'Project Director', 'text' => 'A true visionary who leads by example and inspires excellence in everyone around him.'],
            ['name' => 'Mohammed Ali', 'position' => 'Government Liaison', 'text' => 'His commitment to quality and safety sets new standards in the construction industry.']
        ],
        'milestones' => [
            ['year' => '1988', 'title' => 'Career Beginnings', 'desc' => 'Started journey in construction industry'],
            ['year' => '1995', 'title' => 'First Major Project', 'desc' => 'Led $50M commercial complex development'],
            ['year' => '2005', 'title' => 'Industry Recognition', 'desc' => 'Received Excellence in Construction Award'],
            ['year' => '2015', 'title' => 'Global Expansion', 'desc' => 'Expanded operations to international markets'],
            ['year' => '2020', 'title' => 'Globecon Foundation', 'desc' => 'Established Globecon Construction LLC']
        ],
        'values' => [
            ['title' => 'Integrity First', 'desc' => 'Uncompromising ethical standards in all business dealings'],
            ['title' => 'Quality Excellence', 'desc' => 'Never compromising on materials, workmanship, or finish'],
            ['title' => 'Innovation Driven', 'desc' => 'Embracing new technologies and methodologies'],
            ['title' => 'Client Focused', 'desc' => 'Building lasting relationships through exceptional service']
        ]
    ];
@endphp

<style>
    /* Enhanced Sophisticated Dark Theme */
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
        --ruby: #dc2626;
        --ivory: #f8fafc;
        --light-gray: #e2e8f0;
    }
    
    * {
        box-sizing: border-box;
    }
    
    body {
        background: var(--deep-navy);
        color: var(--ivory);
        overflow-x: hidden;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.6;
    }
    
    .luxury-gradient {
        background: linear-gradient(135deg, var(--deep-navy) 0%, var(--dark-slate) 50%, #1e293b 100%);
    }
    
    .premium-card {
        background: linear-gradient(135deg, rgba(26, 31, 54, 0.95) 0%, rgba(45, 55, 72, 0.9) 100%);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(212, 175, 55, 0.3);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    }
    
    .gold-accent {
        color: var(--gold);
    }
    
    .bronze-accent {
        color: var(--bronze);
    }
    
    .silver-accent {
        color: var(--silver);
    }
    
    .emerald-accent {
        color: var(--emerald);
    }
    
    .sapphire-accent {
        color: var(--sapphire);
    }
    
    .amethyst-accent {
        color: var(--amethyst);
    }
    
    .ruby-accent {
        color: var(--ruby);
    }
    
    .luxury-border {
        position: relative;
        border: 1px solid transparent;
        background: linear-gradient(var(--dark-slate), var(--dark-slate)) padding-box,
                   linear-gradient(135deg, var(--gold), var(--bronze), var(--silver)) border-box;
    }
    
    .elegant-glow {
        box-shadow: 0 0 30px rgba(212, 175, 55, 0.3),
                   0 0 60px rgba(212, 175, 55, 0.2);
    }
    
    .hover-lift {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
    }
    
    .floating {
        animation: floating 8s ease-in-out infinite;
    }
    
    @keyframes floating {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(0.5deg); }
    }
    
    .subtle-pulse {
        animation: subtlePulse 4s ease-in-out infinite;
    }
    
    @keyframes subtlePulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }
    
    .elegant-grid {
        background-image: 
            linear-gradient(rgba(212, 175, 55, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(212, 175, 55, 0.05) 1px, transparent 1px);
        background-size: 60px 60px;
    }
    
    .luxury-button {
        background: linear-gradient(135deg, var(--gold), var(--bronze));
        color: var(--deep-navy);
        border: none;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        text-align: center;
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
        box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
    }
    
    .outline-button {
        border: 2px solid var(--gold);
        color: var(--gold);
        background: transparent;
        transition: all 0.4s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
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
    
    .metallic-text {
        background: linear-gradient(135deg, var(--gold) 0%, var(--silver) 50%, var(--bronze) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    .section-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--gold), transparent);
        margin: 3rem 0;
    }
    
    .luxury-badge {
        background: linear-gradient(135deg, var(--gold), var(--bronze));
        color: var(--deep-navy);
        box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
        font-weight: bold;
    }
    
    .glass-effect {
        background: rgba(26, 31, 54, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(212, 175, 55, 0.2);
    }
    
    .elegant-quote {
        position: relative;
        font-style: italic;
    }
    
    .elegant-quote::before {
        content: '"';
        position: absolute;
        top: -20px;
        left: -10px;
        font-size: 80px;
        color: var(--gold);
        opacity: 0.3;
        font-family: serif;
    }
    
    .stat-card {
        background: linear-gradient(135deg, var(--dark-slate) 0%, var(--charcoal) 100%);
        border: 1px solid rgba(212, 175, 55, 0.3);
        transition: all 0.4s ease;
    }
    
    .stat-card:hover {
        border-color: var(--gold);
        transform: translateY(-5px);
    }
    
    .luxury-pattern {
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(212, 175, 55, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(205, 127, 50, 0.08) 0%, transparent 50%);
    }

    /* New Enhanced Styles */
    .crystal-card {
        background: linear-gradient(135deg, 
                   rgba(26, 31, 54, 0.9) 0%, 
                   rgba(45, 55, 72, 0.8) 50%,
                   rgba(26, 31, 54, 0.9) 100%);
        backdrop-filter: blur(25px);
        border: 1px solid rgba(212, 175, 55, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5),
                   inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    .neon-glow {
        box-shadow: 0 0 20px rgba(212, 175, 55, 0.4),
                   0 0 40px rgba(212, 175, 55, 0.3),
                   0 0 80px rgba(212, 175, 55, 0.2);
    }

    .particle-network {
        position: relative;
        overflow: hidden;
    }

    .particle-network::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 20% 80%, rgba(212, 175, 55, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(205, 127, 50, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(192, 192, 192, 0.15) 0%, transparent 50%);
        animation: particleFloat 20s ease-in-out infinite;
    }

    @keyframes particleFloat {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(30px, -30px) rotate(120deg); }
        66% { transform: translate(-20px, 20px) rotate(240deg); }
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

    .stellar-bg {
        background: 
            radial-gradient(circle at 10% 20%, rgba(212, 175, 55, 0.08) 0%, transparent 20%),
            radial-gradient(circle at 90% 80%, rgba(205, 127, 50, 0.08) 0%, transparent 20%),
            radial-gradient(circle at 50% 50%, rgba(139, 92, 246, 0.05) 0%, transparent 30%);
    }

    .nebula-effect {
        background: linear-gradient(135deg,
                   rgba(10, 17, 40, 0.95) 0%,
                   rgba(26, 31, 54, 0.9) 50%,
                   rgba(45, 55, 72, 0.85) 100%);
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

    .quantum-dot {
        width: 8px;
        height: 8px;
        background: var(--gold);
        border-radius: 50%;
        position: relative;
        animation: quantumBounce 2s ease-in-out infinite;
    }

    @keyframes quantumBounce {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-20px) scale(1.2); }
    }

    .cyber-line {
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--gold), transparent);
        position: relative;
        overflow: hidden;
        margin: 2rem 0;
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

    .timeline-year {
        background: linear-gradient(135deg, var(--gold), var(--bronze));
        color: var(--deep-navy);
        font-weight: bold;
        padding: 8px 20px;
        border-radius: 25px;
        display: inline-block;
        margin-bottom: 15px;
        font-size: 0.9rem;
    }

    .testimonial-card {
        background: linear-gradient(135deg, rgba(26, 31, 54, 0.95) 0%, rgba(45, 55, 72, 0.85) 100%);
        border-left: 4px solid var(--gold);
        position: relative;
    }

    .testimonial-card::before {
        content: '"';
        position: absolute;
        top: -15px;
        left: 20px;
        font-size: 60px;
        color: var(--gold);
        opacity: 0.3;
        font-family: serif;
        line-height: 1;
    }

    .value-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        display: block;
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
        0% {
            transform: translate(0, 0) rotate(0deg);
        }
        25% {
            transform: translate(100px, 50px) rotate(90deg);
        }
        50% {
            transform: translate(50px, 100px) rotate(180deg);
        }
        75% {
            transform: translate(-50px, 50px) rotate(270deg);
        }
        100% {
            transform: translate(0, 0) rotate(360deg);
        }
    }

    .magnetic-card {
        transition: transform 0.3s ease;
    }

    .magnetic-card:hover {
        transform: translateY(-10px) scale(1.02);
    }

    .gradient-text {
        background: linear-gradient(135deg, var(--gold) 0%, var(--bronze) 50%, var(--silver) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .interactive-timeline {
        position: relative;
        padding-left: 30px;
    }

    .interactive-timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(to bottom, var(--gold), var(--bronze), var(--silver));
    }

    .timeline-item {
        position: relative;
        padding-left: 30px;
        margin-bottom: 40px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -11px;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: var(--gold);
        box-shadow: 0 0 0 4px var(--dark-slate), 0 0 0 6px var(--gold);
        z-index: 2;
    }

    /* Ensure content visibility */
    .content-section {
        position: relative;
        z-index: 10;
    }

    .text-highlight {
        color: var(--gold);
        font-weight: 600;
    }

    .section-padding {
        padding: 5rem 1rem;
    }

    @media (max-width: 768px) {
        .section-padding {
            padding: 3rem 1rem;
        }
        
        .interactive-timeline {
            padding-left: 20px;
        }
        
        .timeline-item {
            padding-left: 25px;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            left: -9px;
            width: 16px;
            height: 16px;
        }
    }

    /* Fix z-index issues */
    .relative {
        position: relative;
    }

    .z-10 {
        z-index: 10;
    }

    .z-20 {
        z-index: 20;
    }

    .z-30 {
        z-index: 30;
    }

    /* Ensure text contrast */
    .text-light {
        color: var(--light-gray) !important;
    }

    .text-lighter {
        color: var(--ivory) !important;
    }

    /* Button spacing */
    .button-group {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    @media (max-width: 640px) {
        .button-group {
            flex-direction: column;
            align-items: center;
        }
        
        .button-group a {
            width: 100%;
            max-width: 280px;
        }
    }
</style>

<!-- Enhanced Background Elements -->
<div class="fixed inset-0 -z-10 luxury-gradient nebula-effect particle-network"></div>

<!-- Floating Shapes -->
<div class="floating-shapes">
    <div class="floating-shape" style="top: 10%; left: 5%; width: 100px; height: 100px; background: var(--gold); border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; animation-delay: 0s;"></div>
    <div class="floating-shape" style="top: 70%; left: 80%; width: 150px; height: 150px; background: var(--bronze); border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; animation-delay: 5s;"></div>
    <div class="floating-shape" style="top: 40%; left: 90%; width: 80px; height: 80px; background: var(--silver); border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; animation-delay: 10s;"></div>
    <div class="floating-shape" style="top: 80%; left: 10%; width: 120px; height: 120px; background: var(--sapphire); border-radius: 30% 70% 50% 50% / 50% 50% 50% 50%; animation-delay: 15s;"></div>
</div>

<!-- Navigation -->
<header class="relative z-50 px-6 py-6 max-w-7xl mx-auto flex items-center justify-between content-section">
    <a href="/" class="flex items-center gap-3 text-silver-accent hover:text-gold-accent transition-all duration-300 group glass-effect px-4 py-2 rounded-lg">
        <svg class="w-6 h-6 text-gold-accent group-hover:scale-110 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        <span class="group-hover:translate-x-1 transition-transform font-medium">Back to Home</span>
    </a>
    <div class="text-sm text-silver-accent tracking-widest opacity-90 font-light glass-effect px-4 py-2 rounded-lg">GLOBECON CONSTRUCTION — FOUNDER</div>
</header>

<!-- Enhanced Hero Section -->
<section class="relative min-h-screen flex items-center justify-center px-4 py-20 overflow-hidden stellar-bg content-section z-10">
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Founder Image with Enhanced Effects -->
            <div class="relative" data-aos="fade-right" data-aos-duration="1200">
                <div class="cosmic-border rounded-2xl p-4 elegant-glow floating">
                    <div class="rounded-xl overflow-hidden crystal-card">
                        <img 
                            src="{{ $founder['photo'] }}" 
                            alt="{{ $founder['name'] }}" 
                            class="w-full h-auto object-cover rounded-xl transition-transform duration-700 hover:scale-105"
                            loading="lazy"
                            onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'"
                        >
                    </div>
                </div>
                
                <!-- Enhanced Decorative Elements -->
                <div class="absolute -top-4 -left-4 w-20 h-20 border-t-2 border-l-2 border-gold-accent opacity-60"></div>
                <div class="absolute -bottom-4 -right-4 w-20 h-20 border-b-2 border-r-2 border-bronze-accent opacity-60"></div>
                
                <!-- Enhanced Experience Badge -->
                <div class="absolute -bottom-6 -right-6 luxury-badge px-6 py-3 rounded-full font-bold subtle-pulse neon-glow">
                    {{ $founder['experience'] }} Years
                </div>

                <!-- Particle Effects -->
                <div class="absolute top-10 left-10 w-4 h-4 bg-gold-accent rounded-full opacity-60 animate-pulse"></div>
                <div class="absolute bottom-20 right-20 w-3 h-3 bg-bronze-accent rounded-full opacity-40 animate-pulse" style="animation-delay: 0.5s;"></div>
            </div>
            
            <!-- Enhanced Founder Details -->
            <div class="space-y-8" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        <span class="hologram-text">{{ $founder['name'] }}</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-silver-accent italic border-l-4 border-gold-accent pl-6 py-3 crystal-card rounded-r-lg">
                        {{ $founder['title'] }}
                    </p>
                </div>
                
                <blockquote class="text-xl md:text-2xl font-light text-light-gray leading-relaxed elegant-quote pl-8 crystal-card p-6 rounded-xl">
                    {{ $founder['message'] }}
                </blockquote>
                
                <div class="cyber-line"></div>
                
                <div class="button-group pt-6">
                    <a 
                        href="{{ route('projects') }}" 
                        class="luxury-button px-8 py-4 font-semibold rounded-lg text-lg"
                    >
                        View Our Projects
                    </a>
                    <a 
                        href="{{ route('team') }}" 
                        class="outline-button px-8 py-4 font-semibold rounded-lg text-lg"
                    >
                        Meet The Team
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Enhanced Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2">
        <div class="w-6 h-10 border-2 border-gold-accent rounded-full flex justify-center crystal-card">
            <div class="w-1 h-3 bg-gold-accent rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Enhanced Stats Section -->
<section class="relative py-20 px-4 overflow-hidden cyber-grid content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($founder['stats'] as $index => $stat)
            <div class="text-center" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 150 }}">
                <div class="stat-card rounded-2xl p-6 hover-lift crystal-card neon-glow magnetic-card">
                    <div class="text-3xl lg:text-4xl font-bold mb-3 text-gradient counter" data-count="{{ trim($stat['number'], '+') }}">0</div>
                    <div class="text-silver-accent font-medium uppercase tracking-wider text-sm">{{ $stat['label'] }}</div>
                    <div class="cyber-line mt-4"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enhanced Career Journey Section -->
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Professional Journey</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                A distinguished career spanning over three decades, shaping the construction landscape with landmark projects
            </p>
        </div>
        
        <!-- Enhanced Elegant Timeline -->
        <div class="relative interactive-timeline max-w-4xl mx-auto">
            @foreach($founder['companies'] as $index => $company)
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="premium-card rounded-2xl p-6 hover-lift magnetic-card">
                    <div class="flex items-start mb-4">
                        <div class="flex-shrink-0 mr-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-gold to-bronze rounded-full flex items-center justify-center text-deep-navy font-bold">
                                {{ $index + 1 }}
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-bold gold-accent mb-2">{{ $company['name'] }}</h3>
                            <p class="text-light-gray leading-relaxed">{{ $company['note'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enhanced Philosophy Section -->
<section class="relative py-20 px-4 overflow-hidden elegant-grid content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="text-gradient">Leadership Philosophy</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                Guided by integrity, driven by innovation, and committed to excellence
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($founder['values'] as $index => $value)
            <div class="premium-card rounded-2xl p-6 hover-lift magnetic-card" data-aos="flip-up" data-aos-delay="{{ $index * 100 }}">
                <div class="w-16 h-16 bg-gradient-to-r from-gold to-bronze rounded-full flex items-center justify-center mb-4 mx-auto subtle-pulse">
                    <span class="text-xl">💎</span>
                </div>
                <h3 class="text-xl font-bold gold-accent text-center mb-3">{{ $value['title'] }}</h3>
                <p class="text-light-gray text-center leading-relaxed text-sm">{{ $value['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Key Achievements Section -->
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Key Achievements</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                Milestones that define a legacy of construction excellence and innovation
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($founder['achievements'] as $index => $achievement)
            <div class="text-center" data-aos="zoom-in" data-aos-delay="{{ $index * 150 }}">
                <div class="crystal-card rounded-2xl p-6 hover-lift magnetic-card h-full">
                    <div class="value-icon">{{ $achievement['icon'] }}</div>
                    <h3 class="text-lg font-bold gold-accent mb-3">{{ $achievement['title'] }}</h3>
                    <p class="text-light-gray text-sm">{{ $achievement['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Career Milestones Timeline -->
<section class="relative py-20 px-4 overflow-hidden elegant-grid content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="text-gradient">Career Milestones</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                Significant moments that shaped an extraordinary career in construction
            </p>
        </div>
        
        <div class="relative interactive-timeline max-w-4xl mx-auto">
            @foreach($founder['milestones'] as $index => $milestone)
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="premium-card rounded-2xl p-6 hover-lift magnetic-card">
                    <div class="timeline-year">{{ $milestone['year'] }}</div>
                    <h3 class="text-xl font-bold gold-accent mb-2">{{ $milestone['title'] }}</h3>
                    <p class="text-light-gray leading-relaxed">{{ $milestone['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Industry Recognition</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                What industry leaders say about Mr. Afzal Mehmood's contribution to construction
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($founder['testimonials'] as $index => $testimonial)
            <div class="testimonial-card rounded-2xl p-6 hover-lift magnetic-card" data-aos="flip-up" data-aos-delay="{{ $index * 150 }}">
                <p class="text-light-gray mb-4 leading-relaxed italic">"{{ $testimonial['text'] }}"</p>
                <div class="border-t border-charcoal pt-4">
                    <h4 class="font-bold text-gold-accent">{{ $testimonial['name'] }}</h4>
                    <p class="text-silver-accent text-sm">{{ $testimonial['position'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="relative py-20 px-4 overflow-hidden elegant-grid content-section z-10">
    <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="1200">
        <div class="cosmic-border rounded-2xl p-8 md:p-12 elegant-glow nebula-effect">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Ready to Build Excellence?</span>
            </h2>
            <p class="text-lg md:text-xl text-light-gray mb-8 max-w-2xl mx-auto leading-relaxed">
                Partner with Globecon Construction and experience leadership that transforms visions into enduring structures.
            </p>
            <div class="button-group">
                <a 
                    href="{{ route('contact') }}" 
                    class="luxury-button px-8 py-4 font-semibold rounded-lg text-lg"
                >
                    Start a Conversation
                </a>
                <a 
                    href="{{ route('projects') }}" 
                    class="outline-button px-8 py-4 font-semibold rounded-lg text-lg"
                >
                    View Our Portfolio
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="relative py-12 px-4 overflow-hidden luxury-gradient content-section z-10">
    <div class="max-w-7xl mx-auto text-center">
        <div class="cyber-line mb-8"></div>
        <p class="text-silver-accent">&copy; {{ date('Y') }} Globecon Construction LLC. All rights reserved.</p>
        <p class="text-silver-accent mt-2">Leadership That Builds Futures</p>
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
    
    // Counter animation for stats
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        let count = 0;
        const duration = 2500;
        const increment = target / (duration / 16);
        
        const updateCount = () => {
            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count) + (counter.textContent.includes('+') ? '+' : '');
                setTimeout(updateCount, 16);
            } else {
                counter.innerText = target + (counter.textContent.includes('+') ? '+' : '');
            }
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCount();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(counter);
    });
    
    // Magnetic button effect
    document.querySelectorAll('.luxury-button, .outline-button, .magnetic-card').forEach(btn => {
        btn.addEventListener('mousemove', function(e) {
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
        
        btn.addEventListener('mouseleave', function() {
            gsap.to(this, {
                x: 0,
                y: 0,
                duration: 0.6,
                ease: "elastic.out(1, 0.5)"
            });
        });
    });

    // Interactive timeline hover effects
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    timelineItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (window.innerWidth < 768) return;
            
            gsap.to(this, {
                scale: 1.02,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        item.addEventListener('mouseleave', function() {
            gsap.to(this, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
});
</script>

@endsection