@extends('layouts.app')

@section('title', 'CEO — Mr. Rehaan Mehmood | Globecon Construction LLC')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

@php
    $ceo = [
        'name' => 'Mr. Rehaan Mehmood',
        'title' => 'Chief Executive Officer',
        'photo' => asset('images/team/WhatsApp Image 2025-11-23 at 10.53.50 AM.jpeg'),
        'photo2' => asset('images/team/WhatsApp Image 2025-11-22 at 11.07.57 PM.jpeg'), // Second photo
        'message' => 'Innovation drives us. Every decision is a step toward smarter, safer, and more sustainable construction.',
        'companies' => [
            ['name'=>'Globecon Construction LLC','note'=>'Leading digital transformation and sustainable construction practices.'],
            ['name'=>'Global Infrastructure Partners','note'=>'Pioneered smart city development initiatives.'],
            ['name'=>'TechBuild Innovations','note'=>'Integrated AI and BIM technologies in construction.'],
            ['name'=>'Sustainable Development Corp','note'=>'Championed green building certifications.'],
            ['name'=>'Urban Planning Associates','note'=>'Revolutionized urban development strategies.'],
        ],
        'stats' => [
            ['number' => '50+', 'label' => 'Projects Completed'],
            ['number' => '300%', 'label' => 'Revenue Growth'],
            ['number' => '15+', 'label' => 'Industry Awards'],
            ['number' => '1M+', 'label' => 'SQ.FT Built']
        ],
        'achievements' => [
            ['title' => 'Digital Transformation', 'desc' => 'Pioneered BIM integration across all projects', 'icon' => '💻'],
            ['title' => 'Sustainability Leadership', 'desc' => 'Achieved 45% carbon reduction in projects', 'icon' => '🌱'],
            ['title' => 'Innovation Awards', 'desc' => 'Multiple awards for construction technology', 'icon' => '🏆'],
            ['title' => 'Global Expansion', 'desc' => 'Expanded operations to international markets', 'icon' => '🌍']
        ],
        'testimonials' => [
            ['name' => 'Sarah Johnson', 'position' => 'CTO, TechBuild', 'text' => 'Rehaan\'s vision for digital construction has revolutionized our industry approach.'],
            ['name' => 'Michael Chen', 'position' => 'Sustainability Director', 'text' => 'His commitment to sustainable practices sets new benchmarks for the industry.'],
            ['name' => 'Dr. Emily Roberts', 'position' => 'Urban Planning Expert', 'text' => 'A forward-thinking leader who understands the future of smart cities.']
        ],
        'milestones' => [
            ['year' => '2016', 'title' => 'Globecon Leadership', 'desc' => 'Appointed CEO to drive digital transformation'],
            ['year' => '2018', 'title' => 'BIM Implementation', 'desc' => 'Successfully integrated BIM across all major projects'],
            ['year' => '2020', 'title' => 'Sustainability Initiative', 'desc' => 'Launched net-zero construction program'],
            ['year' => '2022', 'title' => 'Global Recognition', 'desc' => 'Received international innovation awards'],
            ['year' => '2024', 'title' => 'Smart Cities', 'desc' => 'Pioneered smart city development projects']
        ],
        'values' => [
            ['title' => 'Innovation First', 'desc' => 'Embracing cutting-edge technologies and methodologies'],
            ['title' => 'Sustainable Vision', 'desc' => 'Building with environmental stewardship in mind'],
            ['title' => 'Digital Excellence', 'desc' => 'Leveraging technology for superior outcomes'],
            ['title' => 'Global Impact', 'desc' => 'Creating solutions with worldwide relevance']
        ],
        'expertise' => [
            ['title' => 'Digital Construction', 'desc' => 'BIM, AI, and IoT integration'],
            ['title' => 'Sustainable Development', 'desc' => 'Green building and net-zero initiatives'],
            ['title' => 'Strategic Leadership', 'desc' => 'Business growth and market expansion'],
            ['title' => 'Technology Innovation', 'desc' => 'Construction tech R&D and implementation']
        ],
        'vision' => [
            'title' => 'Building the Future',
            'content' => 'My vision extends beyond construction projects to creating sustainable ecosystems that enhance urban living while preserving our environment. Through innovative technologies and forward-thinking strategies, we\'re not just building structures—we\'re building communities that will thrive for generations.',
            'quote' => 'The future of construction lies at the intersection of technology, sustainability, and human-centered design.'
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

    /* Expertise Grid */
    .expertise-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin: 3rem 0;
    }

    .expertise-card {
        background: linear-gradient(135deg, rgba(26, 31, 54, 0.9) 0%, rgba(45, 55, 72, 0.8) 100%);
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 1.5rem;
        padding: 2.5rem 2rem;
        text-align: center;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .expertise-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .expertise-card:hover::before {
        opacity: 1;
    }

    .expertise-card:hover {
        transform: translateY(-8px);
        border-color: var(--gold);
        box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
    }

    .expertise-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        display: block;
    }

    /* New styles for second photo section */
    .photo-content-section {
        display: flex;
        align-items: center;
        gap: 4rem;
        margin: 6rem 0;
    }

    .photo-content-section.reverse {
        flex-direction: row-reverse;
    }

    .photo-container {
        flex: 1;
        position: relative;
    }

    .content-container {
        flex: 1;
    }

    .ceo-image {
        width: 100%;
        height: auto;
        border-radius: 1.5rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        transition: transform 0.5s ease;
    }

    .ceo-image:hover {
        transform: scale(1.02);
    }

    @media (max-width: 768px) {
        .photo-content-section {
            flex-direction: column;
            gap: 2rem;
        }
        
        .photo-content-section.reverse {
            flex-direction: column;
        }
    }

    /* Enhanced vision section */
    .vision-section {
        position: relative;
        overflow: hidden;
    }

    .vision-quote {
        font-size: 1.5rem;
        line-height: 1.6;
        font-style: italic;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        position: relative;
    }

    .vision-quote::before,
    .vision-quote::after {
        content: '"';
        font-size: 4rem;
        color: var(--gold);
        opacity: 0.3;
        position: absolute;
    }

    .vision-quote::before {
        top: 0;
        left: 0;
    }

    .vision-quote::after {
        bottom: -2rem;
        right: 0;
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
    <div class="text-sm text-silver-accent tracking-widest opacity-90 font-light glass-effect px-4 py-2 rounded-lg">GLOBECON CONSTRUCTION — CEO</div>
</header>

<!-- Enhanced Hero Section -->
<section class="relative min-h-screen flex items-center justify-center px-4 py-20 overflow-hidden stellar-bg content-section z-10">
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- CEO Image with Enhanced Effects -->
            <div class="relative" data-aos="fade-right" data-aos-duration="1200">
                <div class="cosmic-border rounded-2xl p-4 elegant-glow floating">
                    <div class="rounded-xl overflow-hidden crystal-card">
                        <img 
                            src="{{ $ceo['photo'] }}" 
                            alt="{{ $ceo['name'] }}" 
                            class="w-full h-auto object-cover rounded-xl transition-transform duration-700 hover:scale-105"
                            loading="lazy"
                            onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'"
                        >
                    </div>
                </div>
                
                <!-- Enhanced Decorative Elements -->
                <div class="absolute -top-4 -left-4 w-20 h-20 border-t-2 border-l-2 border-gold-accent opacity-60"></div>
                <div class="absolute -bottom-4 -right-4 w-20 h-20 border-b-2 border-r-2 border-bronze-accent opacity-60"></div>

                <!-- Achievement Badge -->
                <div class="absolute -bottom-6 -right-6 luxury-badge px-6 py-3 rounded-full font-bold subtle-pulse neon-glow">
                    Innovation Leader
                </div>

                <!-- Particle Effects -->
                <div class="absolute top-10 left-10 w-4 h-4 bg-gold-accent rounded-full opacity-60 animate-pulse"></div>
                <div class="absolute bottom-20 right-20 w-3 h-3 bg-bronze-accent rounded-full opacity-40 animate-pulse" style="animation-delay: 0.5s;"></div>
            </div>
            
            <!-- Enhanced CEO Details -->
            <div class="space-y-8" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        <span class="hologram-text">{{ $ceo['name'] }}</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-silver-accent italic border-l-4 border-gold-accent pl-6 py-3 crystal-card rounded-r-lg">
                        {{ $ceo['title'] }}
                    </p>
                </div>
                
                <blockquote class="text-xl md:text-2xl font-light text-light-gray leading-relaxed elegant-quote pl-8 crystal-card p-6 rounded-xl">
                    {{ $ceo['message'] }}
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
            @foreach($ceo['stats'] as $index => $stat)
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

<!-- Second Photo Section - Left Image, Right Content -->
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="photo-content-section" data-aos="fade-up" data-aos-duration="1200">
            <div class="photo-container" data-aos="fade-right" data-aos-delay="300">
                <div class="cosmic-border rounded-2xl p-4 elegant-glow">
                    <div class="rounded-xl overflow-hidden crystal-card">
                        <img 
                            src="{{ $ceo['photo2'] }}" 
                            alt="{{ $ceo['name'] }} - Visionary Leadership" 
                            class="ceo-image"
                            loading="lazy"
                            onerror="this.src='https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'"
                        >
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -top-4 -right-4 w-16 h-16 border-t-2 border-r-2 border-gold-accent opacity-60"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 border-b-2 border-l-2 border-bronze-accent opacity-60"></div>
            </div>
            
            <div class="content-container" data-aos="fade-left" data-aos-delay="500">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gradient">Visionary Leadership</h2>
                <p class="text-lg text-light-gray mb-6 leading-relaxed">
                    With a career spanning over 15 years in construction and technology innovation, 
                    Mr. Mehmood has consistently demonstrated an unparalleled ability to anticipate 
                    industry trends and implement forward-thinking strategies.
                </p>
                <p class="text-lg text-light-gray mb-6 leading-relaxed">
                    His hands-on approach to leadership ensures that every project not only meets 
                    but exceeds expectations, combining technical excellence with sustainable practices 
                    that define the future of construction.
                </p>
                <div class="cyber-line my-8"></div>
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-gold to-bronze rounded-full flex items-center justify-center">
                        <span class="text-deep-navy font-bold">✓</span>
                    </div>
                    <p class="text-gold-accent font-semibold">Committed to Excellence & Innovation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Core Expertise</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                Specialized knowledge and skills driving innovation in modern construction
            </p>
        </div>
        
        <div class="expertise-grid">
            @foreach($ceo['expertise'] as $index => $expertise)
            <div class="expertise-card magnetic-card" data-aos="flip-up" data-aos-delay="{{ $index * 100 }}">
                <div class="expertise-icon">🚀</div>
                <h3 class="text-xl font-bold gold-accent text-center mb-3">{{ $expertise['title'] }}</h3>
                <p class="text-light-gray text-center leading-relaxed">{{ $expertise['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Third Photo Section - Right Image, Left Content -->


<!-- Enhanced Career Journey Section -->
<section class="relative py-20 px-4 overflow-hidden elegant-grid content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="text-gradient">Professional Journey</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                A distinguished career focused on digital transformation and sustainable construction innovation
            </p>
        </div>
        
        <!-- Enhanced Elegant Timeline -->
        <div class="relative interactive-timeline max-w-4xl mx-auto">
            @foreach($ceo['companies'] as $index => $company)
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
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Leadership Philosophy</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                Guided by innovation, driven by technology, and committed to sustainable excellence
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($ceo['values'] as $index => $value)
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

<!-- Vision Section with Quote -->
<section class="relative py-20 px-4 overflow-hidden vision-section luxury-gradient content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="1200">
            <div class="cosmic-border rounded-2xl p-8 md:p-12 elegant-glow">
                <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gradient">{{ $ceo['vision']['title'] }}</h2>
                <p class="text-lg md:text-xl text-light-gray mb-8 leading-relaxed text-left">
                    {{ $ceo['vision']['content'] }}
                </p>
                <div class="vision-quote crystal-card rounded-xl">
                    {{ $ceo['vision']['quote'] }}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Achievements Section -->
<section class="relative py-20 px-4 overflow-hidden elegant-grid content-section z-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="text-gradient">Key Achievements</span>
            </h2>
            <p class="text-lg md:text-xl text-silver-accent max-w-3xl mx-auto">
                Milestones that define a legacy of digital innovation and construction excellence
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($ceo['achievements'] as $index => $achievement)
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

<!-- Final CTA Section -->
<section class="relative py-20 px-4 overflow-hidden luxury-gradient nebula-effect content-section z-10">
    <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="1200">
        <div class="cosmic-border rounded-2xl p-8 md:p-12 elegant-glow">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                <span class="hologram-text">Ready to Build the Future?</span>
            </h2>
            <p class="text-lg md:text-xl text-light-gray mb-8 max-w-2xl mx-auto leading-relaxed">
                Partner with Globecon Construction and experience leadership that transforms visions into smart, sustainable structures.
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
<footer class="relative py-12 px-4 overflow-hidden elegant-grid content-section z-10">
    <div class="max-w-7xl mx-auto text-center">
        <div class="cyber-line mb-8"></div>
        <p class="text-silver-accent">&copy; {{ date('Y') }} Globecon Construction LLC. All rights reserved.</p>
        <p class="text-silver-accent mt-2">Innovation That Builds Futures</p>
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

    // Enhanced scroll animations for photo sections
    gsap.registerPlugin(ScrollTrigger);
    
    // Animate photo sections on scroll
    gsap.utils.toArray('.photo-content-section').forEach(section => {
        gsap.fromTo(section.querySelector('.photo-container'), 
            {
                x: section.classList.contains('reverse') ? 100 : -100,
                opacity: 0
            },
            {
                x: 0,
                opacity: 1,
                duration: 1,
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            }
        );
        
        gsap.fromTo(section.querySelector('.content-container'), 
            {
                x: section.classList.contains('reverse') ? -100 : 100,
                opacity: 0
            },
            {
                x: 0,
                opacity: 1,
                duration: 1,
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });
});
</script>

@endsection