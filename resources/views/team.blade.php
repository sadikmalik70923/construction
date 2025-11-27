@extends('layouts.app')

@section('title', 'Our Team – GlobeCon Construction')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

@php
    $employees = [
        // Leadership Team (Only for slider)
        ['name'=>'Mr. Afzal Mehmood','role'=>'Founder & Chairman','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.40.45 PM.jpeg'),'category'=>'Leadership','slider'=>true],
        ['name'=>'Mr. Rehaan Mehmood','role'=>'Chief Executive Officer','img'=>asset('images/team/WhatsApp Image 2025-10-31 at 10.16.57 AM.jpeg'),'category'=>'Leadership','slider'=>true],
        ['name'=>'Eng Hassan Mehmood','role'=>'Managing Director','img'=>asset('images/team/WhatsApp Image 2025-11-14 at 12.13.33 AM.jpeg'),'category'=>'Leadership','slider'=>true],
        
        // Management Team (Also in slider AND management section)
        ['name'=>'Mr. Jasim Mehmood','role'=>'Senior Management','img'=>asset('images/team/mr-jasim-mehmood.jpg'),'category'=>'Management','slider'=>true],
        ['name'=>'Mr. Amjad Mehmood','role'=>'Projects Director','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 8.54.53 PM.jpeg'),'category'=>'Management','slider'=>true],
        ['name'=>'Mr. Azhar Kazmi','role'=>'General Manager','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 9.27.16 PM.jpeg'),'category'=>'Management','slider'=>true],
        ['name'=>'Mr. Ulfat Rasool','role'=>'Chief Financial Officer','img'=>asset('images/team/WhatsApp Image 2025-11-15 at 9.21.15 PM.jpeg'),'category'=>'Management','slider'=>true],
        ['name'=>'Mr. Rabnawaz Khan','role'=>'Head of Operation','img'=>asset('images/team/WhatsApp Image 2025-11-19 at 9.03.06 AM.jpeg'),'category'=>'Management','slider'=>true],
        
        // Management Team (Non-slider)
        ['name'=>'Mr. Mansoor Khalid','role'=>'Head of Operation (MEP Design)','img'=>asset('images/team/mansoor-khalid.jpg'),'category'=>'Management'],
        
        // Operations Team
        ['name'=>'Mr. Azhar Pathan','role'=>'MEP Manager','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.01 PM (1).jpeg'),'category'=>'Operations'],
        ['name'=>'Mr. Tareq','role'=>'HOD Operation','img'=>asset('images/team/mr-tareq.jpg'),'category'=>'Operations'],
        ['name'=>'Mr. Syed Shahid Ali Kazmi','role'=>'Hr Admin','img'=>asset('images/team/WhatsApp Image 2025-11-19 at 9.04.13 AM.jpeg'),'category'=>'Operations'],
        
        // Mechanical Engineering
        ['name'=>'Eng Idrees','role'=>'Senior Mechanical Engineer','img'=>asset('images/team/WhatsApp Image 2025-11-19 at 9.04.39 AM.jpeg'),'category'=>'Mechanical Engineering'],
        ['name'=>'Eng Arsalan','role'=>'Mechanical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.59 PM.jpeg'),'category'=>'Mechanical Engineering'],
        ['name'=>'Eng Aakarsh','role'=>'Mechanical Engineer','img'=>asset('images/team/WhatsApp Image 2025-11-01 at 3.24.19 PM.jpeg'),'category'=>'Mechanical Engineering'],
        ['name'=>'Eng Aasif','role'=>'Mechanical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.57 PM (1).jpeg'),'category'=>'Mechanical Engineering'],
        ['name'=>'Eng Jainic','role'=>'Mechanical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.00 PM.jpeg'),'category'=>'Mechanical Engineering'],
        ['name'=>'Eng Tipu','role'=>'Mechanical Engineer','img'=>asset('images/team/WhatsApp Image 2025-11-01 at 12.18.35 PM.jpeg'),'category'=>'Mechanical Engineering'],
        
        // Electrical Engineering
        ['name'=>'Eng Khalid','role'=>'Senior Electrical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.58 PM (2).jpeg'),'category'=>'Electrical Engineering'],
        ['name'=>'Eng Irfan','role'=>'Electrical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.02 PM (1).jpeg'),'category'=>'Electrical Engineering'],
        ['name'=>'Eng Saqib','role'=>'Electrical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.57 PM.jpeg'),'category'=>'Electrical Engineering'],
        ['name'=>'Eng Kiran','role'=>'Electrical Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.00 PM (1).jpeg'),'category'=>'Electrical Engineering'],
        
        // Civil Engineering
        ['name'=>'Eng Anurupan','role'=>'Civil Engineer','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 8.54.41 PM.jpeg'),'category'=>'Civil Engineering'],
        ['name'=>'Eng Aftab','role'=>'Civil Engineer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 12.20.58 AM.jpeg'),'category'=>'Civil Engineering'],
        
        // Administration & HR
        ['name'=>'Mr. Bilal','role'=>'Administration Manager','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.59 PM (1).jpeg'),'category'=>'Administration & HR'],
        ['name'=>'Mr. Shahzaib Mazhar Hussain','role'=>'HR Manager','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.03 PM.jpeg'),'category'=>'Administration & HR'],
        ['name'=>'Maitha','role'=>'HR Executive','img'=>asset('images/team/maitha.jpg'),'category'=>'Administration & HR'],
        ['name'=>'Mr. Nasar Ahmed','role'=>'HR Executive','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.01 PM.jpeg'),'category'=>'Administration & HR'],
        
        // Finance & Procurement
        ['name'=>'Mr. Faiz Ahmad','role'=>'Senior Accountant','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.58 PM (1).jpeg'),'category'=>'Finance & Procurement'],
        ['name'=>'Mr. Mohammad Usman','role'=>'Sr. Procurement Officer','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.21.02 PM.jpeg'),'category'=>'Finance & Procurement'],
        ['name'=>'Mr. Aafaq','role'=>'Jr. Procurement','img'=>asset('images/team/WhatsApp Image 2025-11-01 at 12.15.06 PM.jpeg'),'category'=>'Finance & Procurement'],
        ['name'=>'Mr. Harshit Pandey','role'=>'Procurement Executive','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.56 PM.jpeg'),'category'=>'Finance & Procurement'],
        ['name'=>'Mr. Mumtaz Khan','role'=>'Expert Analyst','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 9.30.01 PM.jpeg'),'category'=>'Finance & Procurement'],
        
        // IT Department
        ['name'=>'Eng Ritik','role'=>'Software Engineer / IT Manager','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 12.05.52 AM.jpeg'),'category'=>'IT Department'],
        
        // Transport Department
        ['name'=>'Mr. Kamran Khan','role'=>'Senior Transport Manager','img'=>asset('images/team/WhatsApp Image 2025-10-30 at 8.20.58 PM.jpeg'),'category'=>'Transport Department'],
        ['name'=>'Mr. Prashant Nath Tiwari','role'=>'Assistant Transport Manager','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 9.29.53 PM.jpeg'),'category'=>'Transport Department'],
    ];

    // Filter employees for slider (only specified leadership and management)
    $sliderEmployees = array_filter($employees, function($employee) {
        return isset($employee['slider']) && $employee['slider'] === true;
    });

    // Filter employees for team grid (all except slider ones)
    $teamEmployees = array_filter($employees, function($employee) {
        return !isset($employee['slider']) || $employee['slider'] !== true;
    });

    // Group team employees by category in specified order
    $teamGroups = [
        'Management' => [],
        'Operations' => [],
        'Administration & HR' => [],
        'Finance & Procurement' => [],
        'IT Department' => [],
        'Mechanical Engineering' => [],
        'Electrical Engineering' => [],
        'Civil Engineering' => [],
        'Transport Department' => []
    ];

    foreach ($teamEmployees as $employee) {
        $category = $employee['category'];
        if (isset($teamGroups[$category])) {
            $teamGroups[$category][] = $employee;
        }
    }

    // Add the management team members who are in slider to the management section as well
    $managementInSlider = [
        ['name'=>'Mr. Jasim Mehmood','role'=>'Senior Management','img'=>asset('images/team/mr-jasim-mehmood.jpg'),'category'=>'Management'],
        ['name'=>'Mr. Amjad Mehmood','role'=>'Projects Director','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 8.54.53 PM.jpeg'),'category'=>'Management'],
        ['name'=>'Mr. Azhar Kazmi','role'=>'General Manager','img'=>asset('images/team/WhatsApp Image 2025-11-23 at 9.27.16 PM.jpeg'),'category'=>'Management'],
        ['name'=>'Mr. Ulfat Rasool','role'=>'Chief Financial Officer','img'=>asset('images/team/WhatsApp Image 2025-11-15 at 9.21.15 PM.jpeg'),'category'=>'Management'],
        ['name'=>'Mr. Rabnawaz Khan','role'=>'Head of Operation','img'=>asset('images/team/WhatsApp Image 2025-11-19 at 9.03.06 AM.jpeg'),'category'=>'Management'],
    ];

    foreach ($managementInSlider as $employee) {
        $teamGroups['Management'][] = $employee;
    }
@endphp

<style>
  :root {
    --gold: #D4AF37;
    --deep: #040612;
    --glass: rgba(6,8,12,.92);
    --gold-glow: rgba(212,175,55,0.3);
  }
  
  * {
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
  }
  
  body {
    background: #040612;
    color: #f8fafc;
    margin: 0;
    overflow-x: hidden;
  }

  /* Premium Glass Effect */
  .glass {
    background: var(--glass);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,.08);
    border-radius: 1.5rem;
    box-shadow: 0 25px 60px rgba(0,0,0,.8);
  }

  .btn-gold {
    background: linear-gradient(135deg, #D4AF37, #f9c14a);
    color: #071028;
    padding: 0.8rem 2rem;
    border-radius: 1rem;
    font-weight: 800;
    transition: all 0.4s cubic-bezier(0.2,0.8,0.2,1);
    box-shadow: 0 10px 30px rgba(212,175,55,0.4);
    border: none;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
  }

  .btn-gold:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 20px 50px rgba(212,175,55,0.6);
  }

  /* Enhanced Slider */
  #full-profile-slider {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
  }

  .slide {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    opacity: 0;
    pointer-events: none;
    transform: scale(0.95) translateY(20px);
    transition: all 0.8s cubic-bezier(0.2,0.8,0.2,1);
  }

  .slide.active {
    opacity: 1;
    pointer-events: auto;
    z-index: 2;
    transform: scale(1) translateY(0);
  }

  .slide-inner {
    max-width: 1400px;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    height: 85vh;
  }

  .leader-visual img {
    max-height: 75vh;
    width: auto;
    object-fit: cover;
    border-radius: 1.5rem;
    border: 8px solid rgba(212,175,55,0.15);
    box-shadow: 0 0 40px rgba(212,175,55,0.4), 0 50px 120px rgba(0,0,0,0.8);
    transition: all 0.6s ease;
  }

  .slide.active .leader-visual img {
    animation: gentleFloat 4s ease-in-out infinite;
  }

  @keyframes gentleFloat {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-10px) scale(1.02); }
  }

  .slider-dots {
    position: absolute;
    bottom: 3rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 1rem;
    z-index: 10;
  }

  .dot {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    transition: all 0.4s ease;
    cursor: pointer;
  }

  .dot.active {
    background: var(--gold);
    box-shadow: 0 0 25px rgba(212,175,55,0.8);
    transform: scale(1.3);
  }

  /* Enhanced Section Titles */
  .section-title {
    margin: 4rem 0 2rem;
    font-size: 2.2rem;
    font-weight: 900;
    color: var(--gold);
    position: relative;
    padding-left: 3rem;
    text-align: center;
  }

  .section-title::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: -1rem;
    width: 60px;
    height: 4px;
    background: var(--gold);
    border-radius: 2px;
  }

  .section-title::after {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -0.5rem;
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
  }

  /* Premium Team Grid */
  .team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    max-width: 1400px;
    margin: 0 auto;
  }

  .emp-card {
    position: relative;
    min-height: 380px;
    perspective: 1200px;
    transition: all 0.6s cubic-bezier(0.2,0.8,0.2,1);
    cursor: pointer;
  }

  .emp-card:hover {
    transform: translateY(-15px);
  }

  .emp-card::before {
    content: '';
    position: absolute;
    inset: -2px;
    background: linear-gradient(45deg, var(--gold), transparent, var(--gold));
    border-radius: 1.5rem;
    opacity: 0;
    transition: opacity 0.6s ease;
    z-index: -1;
  }

  .emp-card:hover::before {
    opacity: 1;
    animation: borderGlow 2s ease-in-out infinite;
  }

  @keyframes borderGlow {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 1; }
  }

  .emp-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 0.8s cubic-bezier(0.2,0.8,0.2,1);
  }

  .emp-front, .emp-back {
    position: absolute;
    inset: 0;
    backface-visibility: hidden;
    background: linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 1.5rem;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 25px 60px rgba(0,0,0,0.7);
  }

  .emp-back {
    transform: rotateY(180deg);
    justify-content: center;
    color: #e2e8f0;
    font-size: 1rem;
    line-height: 1.6;
    padding: 2.5rem;
    text-align: center;
    background: linear-gradient(135deg, rgba(212,175,55,0.05), rgba(212,175,55,0.02));
  }

  .emp-card.flipped .emp-inner {
    transform: rotateY(180deg);
  }

  .emp-photo {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    border: 6px solid rgba(212,175,55,0.2);
    box-shadow: 0 0 30px rgba(212,175,55,0.3);
    transition: all 0.5s ease;
    margin-bottom: 1.5rem;
  }

  .emp-card:hover .emp-photo {
    transform: scale(1.15);
    box-shadow: 0 0 50px rgba(212,175,55,0.6);
    border-color: rgba(212,175,55,0.4);
  }

  .emp-name {
    margin-top: 1rem;
    font-weight: 800;
    color: #fff;
    font-size: 1.3rem;
    text-align: center;
  }

  .emp-role {
    color: var(--gold);
    font-size: 1rem;
    margin-top: 0.5rem;
    font-weight: 600;
    text-align: center;
  }

  /* Department Badges */
  .dept-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--gold);
    color: #000;
    padding: 0.3rem 0.8rem;
    border-radius: 2rem;
    font-size: 0.7rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Responsive Design */
  @media (max-width: 1100px) {
    .slide-inner {
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    
    .team-grid {
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 1.8rem;
      padding-left: 0;
    }
    
    .emp-photo {
      width: 120px;
      height: 120px;
    }
    
    .team-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<!-- Premium Header -->
<header class="relative z-20 px-6 py-6 max-w-7xl mx-auto flex items-center justify-between">
    <a href="/" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all duration-300 group">
        <div class="w-10 h-10 rounded-full bg-yellow-500/10 border border-yellow-500/30 flex items-center justify-center group-hover:bg-yellow-500/20 transition-all">
            <i class="fas fa-arrow-left text-yellow-500 text-sm"></i>
        </div>
        <span class="font-semibold">Back to Home</span>
    </a>
    <div class="text-sm text-gray-400 tracking-widest uppercase font-light">Global Construction Excellence</div>
</header>

<!-- Enhanced Leadership Slider -->
<section id="full-profile-slider" class="relative">
    <!-- Background with Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-yellow-900/10 z-[-2]"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-yellow-500/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-80 h-80 bg-yellow-600/3 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div id="slider-wrapper" class="relative w-full h-full">
        <!-- Founder -->
        <article class="slide active" data-index="0">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[0]['img'] }}" alt="{{ $sliderEmployees[0]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[0]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[0]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[0]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Vision:</strong> 
                            "We build more than structures — we build trust, legacy, and a future where excellence is the foundation of every project."
                        </p>
                        <p class="text-lg">
                            With over two decades of industry leadership, {{ $sliderEmployees[0]['name'] }} has established Globecon as a symbol of quality and innovation in global construction.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/contact" class="btn-gold text-lg px-8 py-4">Contact {{ explode(' ', $sliderEmployees[0]['name'])[1] }}</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="1">
                            Meet the CEO
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- CEO -->
        <article class="slide" data-index="1">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[1]['img'] }}" alt="{{ $sliderEmployees[1]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[1]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[1]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[1]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Mission:</strong> 
                            "Innovation drives us. Every decision is a step toward smarter, safer, and more sustainable construction."
                        </p>
                        <p class="text-lg">
                            Leading Globecon's strategic vision with a focus on technological advancement and sustainable growth in the global construction landscape.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/projects" class="btn-gold text-lg px-8 py-4">View Projects</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="2">
                            Meet the Managing Director
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Managing Director -->
        <article class="slide" data-index="2">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[2]['img'] }}" alt="{{ $sliderEmployees[2]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[2]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[2]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[2]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Leadership:</strong> 
                            "Strategic vision and operational excellence are the cornerstones of our global success and client satisfaction."
                        </p>
                        <p class="text-lg">
                            Driving operational excellence and strategic growth initiatives across all Globecon's global projects and business units with a focus on sustainable development.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/about" class="btn-gold text-lg px-8 py-4">Our Story</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="3">
                            Meet Senior Management
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Senior Management - Jasim Mehmood -->
        <article class="slide" data-index="3">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[3]['img'] }}" alt="{{ $sliderEmployees[3]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[3]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[3]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[3]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Strategic Oversight:</strong> 
                            "Ensuring every project aligns with our core values of quality, integrity, and client satisfaction."
                        </p>
                        <p class="text-lg">
                            Bringing extensive industry experience to provide strategic guidance and maintain the highest standards across all Globecon operations.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/services" class="btn-gold text-lg px-8 py-4">Our Services</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="4">
                            Meet Projects Director
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Projects Director - Amjad Mehmood -->
        <article class="slide" data-index="4">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[4]['img'] }}" alt="{{ $sliderEmployees[4]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[4]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[4]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[4]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Execution Excellence:</strong> 
                            "Precision in planning and flawless execution are what set our projects apart in the competitive construction landscape."
                        </p>
                        <p class="text-lg">
                            Overseeing all project lifecycles from conception to completion, ensuring timely delivery, budget adherence, and superior quality standards.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/projects" class="btn-gold text-lg px-8 py-4">View Projects</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="5">
                            Meet General Manager
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- General Manager - Azhar Kazmi -->
        <article class="slide" data-index="5">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[5]['img'] }}" alt="{{ $sliderEmployees[5]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[5]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[5]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[5]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Management Excellence:</strong> 
                            "Coordinating diverse operations to create seamless project delivery and exceptional client experiences."
                        </p>
                        <p class="text-lg">
                            Overseeing day-to-day operations across multiple departments, ensuring cohesive teamwork and efficient resource allocation for optimal project outcomes.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/about" class="btn-gold text-lg px-8 py-4">Our Operations</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="6">
                            Meet the CFO
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- CFO - Ulfat Rasool -->
        <article class="slide" data-index="6">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[6]['img'] }}" alt="{{ $sliderEmployees[6]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[6]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[6]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[6]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Financial Strategy:</strong> 
                            "Financial excellence is the backbone of sustainable growth and project success."
                        </p>
                        <p class="text-lg">
                            Overseeing Globecon's financial strategy, investment planning, and ensuring fiscal responsibility across all global operations.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/about" class="btn-gold text-lg px-8 py-4">Our Story</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="7">
                            Meet Head of Operations
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- Head of Operations - Rabnawaz Khan -->
        <article class="slide" data-index="7">
            <div class="slide-inner glass" data-aos="fade-up">
                <div class="leader-visual flex justify-center items-center">
                    <img src="{{ $sliderEmployees[7]['img'] }}" alt="{{ $sliderEmployees[7]['name'] }}" loading="lazy"
                         onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                </div>
                <div class="space-y-6 overflow-y-auto max-h-full pr-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-1 bg-yellow-500"></div>
                        <span class="text-yellow-500 font-semibold tracking-widest uppercase text-sm">
                            {{ $sliderEmployees[7]['role'] }}
                        </span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-yellow-500 leading-tight">{{ $sliderEmployees[7]['name'] }}</h2>
                    <p class="text-2xl italic text-gray-200 font-light">{{ $sliderEmployees[7]['role'] }}</p>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p class="text-lg">
                            <strong class="text-yellow-400">Operational Excellence:</strong> 
                            "Streamlining processes and optimizing resources to deliver exceptional construction outcomes on time and within budget."
                        </p>
                        <p class="text-lg">
                            Managing day-to-day operations with a focus on efficiency, safety, and quality across all Globecon construction sites and facilities.
                        </p>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <a href="/contact" class="btn-gold text-lg px-8 py-4">Contact {{ explode(' ', $sliderEmployees[7]['name'])[1] }}</a>
                        <button class="next-leader-btn px-8 py-4 border-2 border-yellow-500 text-yellow-500 rounded-xl font-bold hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-next="0">
                            Back to Founder
                        </button>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Enhanced Slider Controls -->
    <div class="slider-dots">
        @foreach($sliderEmployees as $index => $leader)
        <span class="dot {{ $index === 0 ? 'active' : '' }}" data-idx="{{ $index }}"></span>
        @endforeach
    </div>
    
    <button id="prev-slide" class="absolute left-8 top-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-yellow-500/10 border border-yellow-500/30 backdrop-blur-lg flex items-center justify-center hover:bg-yellow-500/20 transition-all duration-300">
        <i class="fas fa-chevron-left text-yellow-500 text-xl"></i>
    </button>
    <button id="next-slide" class="absolute right-8 top-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-yellow-500/10 border border-yellow-500/30 backdrop-blur-lg flex items-center justify-center hover:bg-yellow-500/20 transition-all duration-300">
        <i class="fas fa-chevron-right text-yellow-500 text-xl"></i>
    </button>
</section>

<!-- Team Sections - All Other Team Members -->
<section id="team-section" class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-5xl md:text-6xl font-black text-yellow-500 mb-6">Our Expert Team</h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
                Meet the brilliant minds behind Globecon's global success. {{ count($teamEmployees) + 5 }}+ professionals dedicated to excellence in construction.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-6 text-sm text-gray-400">
                <div class="flex items-center gap-2">
                    <i class="fas fa-users text-yellow-500"></i>
                    <span>{{ count($teamEmployees) + 5 }}+ Team Members</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-building text-yellow-500"></i>
                    <span>9 Departments</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-globe text-yellow-500"></i>
                    <span>Global Expertise</span>
                </div>
            </div>
        </div>

        @php $delay = 0; @endphp
        @foreach($teamGroups as $category => $members)
            @if(!empty($members))
                <div class="mb-20" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                    <h3 class="section-title">{{ $category }} <span class="text-gray-400 text-lg ml-2">({{ count($members) }})</span></h3>
                    <div class="team-grid">
                        @foreach($members as $employee)
                            <div class="emp-card" role="button" tabindex="0">
                                <div class="emp-inner">
                                    <div class="emp-front">
                                        <span class="dept-badge">{{ $category }}</span>
                                        <img src="{{ $employee['img'] ?: asset('images/team/avatar-placeholder.jpg') }}" 
                                             alt="{{ $employee['name'] }}" 
                                             class="emp-photo" 
                                             loading="lazy"
                                             onerror="this.src='{{ asset('images/team/avatar-placeholder.jpg') }}'">
                                        <div class="emp-name">{{ $employee['name'] }}</div>
                                        <div class="emp-role">{{ $employee['role'] }}</div>
                                        <div class="mt-4 text-gray-400 text-sm">
                                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                                            Globecon Construction
                                        </div>
                                    </div>
                                    <div class="emp-back">
                                        <p class="emp-desc text-lg mb-4">Dedicated to excellence in {{ $category }}</p>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            Committed to delivering exceptional results through innovation, precision, and unwavering dedication to quality standards.
                                        </p>
                                        <div class="mt-6 flex gap-3">
                                            <div class="w-8 h-8 rounded-full bg-yellow-500/20 flex items-center justify-center">
                                                <i class="fas fa-medal text-yellow-500 text-xs"></i>
                                            </div>
                                            <div class="w-8 h-8 rounded-full bg-yellow-500/20 flex items-center justify-center">
                                                <i class="fas fa-award text-yellow-500 text-xs"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @php $delay += 100; @endphp
            @endif
        @endforeach
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 text-center relative z-10 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-4xl mx-auto px-6">
        <h3 class="text-4xl md:text-5xl font-black text-white mb-6">Join Our Growing Team</h3>
        <p class="text-xl text-gray-400 mb-10 leading-relaxed">
            Be part of a dynamic team that's shaping the future of global construction.
        </p>
        <a href="/careers" class="btn-gold text-lg px-12 py-5 inline-block">
            View Career Opportunities
            <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'cubic-bezier(0.2,0.8,0.2,1)'
    });

    // Enhanced Slider
    (() => {
        const slides = [...document.querySelectorAll('#slider-wrapper .slide')];
        const dots = [...document.querySelectorAll('.dot')];
        const prev = document.getElementById('prev-slide');
        const next = document.getElementById('next-slide');
        let idx = 0, timer = null, paused = false;
        const D = 5000; // 5 seconds

        const show = (i, instant = false) => {
            idx = (i + slides.length) % slides.length;
            slides.forEach((s, j) => {
                const active = j === idx;
                s.classList.toggle('active', active);
                if (!instant) {
                    gsap.to(s, {
                        opacity: active ? 1 : 0,
                        scale: active ? 1 : 0.95,
                        y: active ? 0 : 20,
                        duration: 0.8,
                        ease: "power3.out"
                    });
                }
            });
            dots.forEach((d, j) => {
                d.classList.toggle('active', j === idx);
            });
        };

        const auto = () => { 
            clearInterval(timer); 
            timer = setInterval(() => { 
                if (!paused) show(idx + 1); 
            }, D); 
        };

        const pause = () => paused = true;
        const resume = () => { paused = false; auto(); };

        prev.addEventListener('click', () => { show(idx - 1); auto(); });
        next.addEventListener('click', () => { show(idx + 1); auto(); });
        
        dots.forEach((d,i) => d.addEventListener('click', () => { show(i); auto(); }));
        
        // Next leader buttons
        document.querySelectorAll('.next-leader-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const nextIndex = parseInt(btn.getAttribute('data-next'));
                show(nextIndex);
                auto();
            });
        });

        const slider = document.getElementById('full-profile-slider');
        slider.addEventListener('mouseenter', pause);
        slider.addEventListener('mouseleave', resume);

        show(0, true);
        auto();
    })();

    // Enhanced Card Interactions
    document.querySelectorAll('.emp-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('flipped');
            gsap.to(card, {
                boxShadow: '0 35px 90px rgba(212,175,55,0.4)',
                duration: 0.6
            });
        });
        
        card.addEventListener('mouseleave', () => {
            card.classList.remove('flipped');
            gsap.to(card, {
                boxShadow: '0 25px 60px rgba(0,0,0,0.7)',
                duration: 0.6
            });
        });
        
        card.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                card.classList.toggle('flipped');
            }
        });
    });
});
</script>
@endsection