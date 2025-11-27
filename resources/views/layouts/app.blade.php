<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GlobeCon Construction LLC | Global Construction Excellence')</title>

    {{-- Laravel Vite + Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap + Icons CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Premium Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- SEO Meta --}}
    <meta name="description" content="GlobeCon Construction LLC — A global leader in construction, engineering, and infrastructure development with projects spanning 40+ countries.">
    <meta name="keywords" content="construction, engineering, infrastructure, global construction, sustainable building">
    <meta name="author" content="GlobeCon Construction LLC">

    <style>
      :root {
        --primary-blue: #0a2463;
        --accent-gold: #c8a951;
        --dark-bg: #0f172a;
        --light-text: #f8fafc;
        --medium-gray: #64748b;
      }

      body {
        font-family: 'Inter', sans-serif;
        background-color: var(--dark-bg);
        color: var(--light-text);
        overflow-x: hidden;
      }

      h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
      }

      /* Video Background Hero Section */
      .video-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }

      .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -2;
      }

      .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
      }

      .hero-content {
        position: relative;
        z-index: 1;
      }

      /* Footer with Video Background */
      .footer-with-video {
        position: relative;
        overflow: hidden;
      }

      .footer-video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -2;
        opacity: 0.4; /* Make video subtle in footer */
      }

      .footer-video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
       
        z-index: -1;
      }

      .footer-content {
        position: relative;
        z-index: 1;
      }

      /* Compact Premium Navbar */
      .nav-base { 
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        background: transparent;
        padding: 0.75rem 0;
      }
      
      .nav-solid { 
        background: rgba(10, 36, 99, 0.98);
        backdrop-filter: saturate(180%) blur(20px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(200, 169, 81, 0.1);
      }

      .navbar { z-index: 1000 !important; }
      .navbar .nav-link, .navbar .navbar-brand { 
        color: var(--light-text) !important; 
        font-weight: 500;
        position: relative;
        transition: all 0.3s ease;
        font-size: 0.9rem;
      }
      
      .navbar .nav-link {
        padding: 0.4rem 0.8rem !important;
        margin: 0 0.15rem;
      }
      
      .navbar .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1.5px;
        bottom: 0;
        left: 50%;
        background: var(--accent-gold);
        transition: all 0.3s ease;
        transform: translateX(-50%);
      }
      
      .navbar .nav-link:hover::after {
        width: 70%;
      }
      
      .navbar .nav-link:hover { 
        color: #fff !important; 
      }
      
      .navbar-brand {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: 1.25rem;
        letter-spacing: -0.5px;
      }
      
      .navbar-brand span {
        color: var(--accent-gold);
      }
      
      .navbar .btn-outline-light { 
        color: var(--light-text); 
        border-color: var(--light-text);
        border-width: 1.5px;
        border-radius: 3px;
        padding: 0.4rem 1.25rem;
        font-weight: 500;
        font-size: 0.85rem;
        transition: all 0.3s ease;
      }
      
      .navbar .btn-outline-light:hover { 
        color: var(--primary-blue); 
        background: var(--light-text);
        transform: translateY(-1px);
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.1);
      }

      /* Desktop Navigation Layout */
      .desktop-nav {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: space-between;
      }
      
      .nav-section {
        display: flex;
        align-items: center;
      }
      
      .nav-section.left {
        justify-content: flex-start;
      }
      
      .nav-section.center {
        justify-content: center;
        flex: 1;
      }
      
      .nav-section.right {
        justify-content: flex-end;
      }

      /* Compact Dropdown */
      .dropdown-menu {
        background: rgba(10, 36, 99, 0.95);
        backdrop-filter: saturate(180%) blur(20px);
        border: 1px solid rgba(200, 169, 81, 0.15);
        border-radius: 4px;
        margin-top: 0.5rem !important;
        padding: 0.5rem 0;
      }
      
      .dropdown-item {
        color: var(--light-text);
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
        transition: all 0.2s ease;
      }
      
      .dropdown-item:hover {
        background: rgba(200, 169, 81, 0.15);
        color: var(--accent-gold);
        padding-left: 1.25rem;
      }

      /* Premium Footer */
      .footer-base { 
        transition: all 0.4s ease;
        background: transparent; 
        color: var(--light-text);
        position: relative;
      }
      
      .footer-base::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
      }
      
      .footer-solid { 
        background: var(--dark-bg); 
        color: var(--light-text);
      }
      
      .footer-solid a { 
        color: var(--light-text); 
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
      }
      
      .footer-solid a:hover { 
        color: var(--accent-gold); 
        padding-left: 5px;
      }
      
      .footer-divider { 
        border-color: rgba(255,255,255,.12) !important; 
      }
      
      .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
      }
      
      .social-icons a:hover {
        background: var(--accent-gold);
        color: var(--dark-bg);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(200, 169, 81, 0.3);
      }

      /* Global Enhancements */
      html { scroll-behavior: smooth; }
      
      .section-padding {
        padding: 5rem 0;
      }
      
      .gold-accent {
        color: var(--accent-gold);
      }
      
      .btn-gold {
        background: var(--accent-gold);
        color: var(--dark-bg);
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 4px;
        transition: all 0.3s ease;
        border: none;
      }
      
      .btn-gold:hover {
        background: #d4b65e;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(200, 169, 81, 0.4);
      }
      
      /* Premium Animations */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      
      .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
      }
      
      /* Mobile Responsiveness */
      @media (max-width: 991.98px) {
        .desktop-nav {
          display: none;
        }
        
        .navbar-collapse {
          background: rgba(10, 36, 99, 0.98);
          backdrop-filter: saturate(180%) blur(20px);
          padding: 1rem;
          border-radius: 0 0 8px 8px;
          margin-top: 0.5rem;
          box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
        
        .navbar-nav {
          gap: 0.25rem !important;
        }
        
        .navbar .nav-link {
          padding: 0.6rem 0 !important;
          border-bottom: 1px solid rgba(255, 255, 255, 0.05);
          font-size: 0.9rem;
        }
        
        .navbar .nav-link:last-child {
          border-bottom: none;
        }
        
        .navbar-brand {
          font-size: 1.1rem;
        }
      }
      
      @media (min-width: 992px) {
        .navbar-collapse {
          display: none !important;
        }
      }

      /* Mobile video optimization */
      @media (max-width: 768px) {
        .video-hero {
          min-height: 80vh;
        }
        
        .video-background {
          object-position: center;
        }

        .footer-video-background {
          opacity: 0.3; /* Even more subtle on mobile */
        }
      }
    </style>
</head>

<body class="bg-gray-950 text-gray-100 overflow-x-hidden">

    {{-- Compact Premium Navbar --}}
    <nav id="mainHeader" class="navbar navbar-expand-lg navbar-dark nav-base position-absolute top-0 start-0 w-100 z-50">
        <div class="container">
            {{-- Mobile Brand --}}
            <a class="navbar-brand d-lg-none" href="/">GLOBECON<span> CONSTRUCTION</span></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Desktop Navigation --}}
            <div class="desktop-nav d-none d-lg-flex">
                {{-- Left Section --}}
                <div class="nav-section left">
                    <a class="navbar-brand me-4" href="/">GLOBECON<span> CONSTRUCTION</span></a>
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Leadership
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('founder') }}">Founder</a></li>
                                <li><a class="dropdown-item" href="{{ route('ceo') }}">Chief Executive Officer</a></li>
                                <li><a class="dropdown-item" href="{{ route('md') }}">Managing Director</a></li>
                                <li><a class="dropdown-item" href="{{ route('team') }}">Executive Team</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                {{-- Center Section --}}
                <div class="nav-section center">
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">News</a></li>
                    </ul>
                </div>

                {{-- Right Section --}}
                <div class="nav-section right">
                    <ul class="navbar-nav d-flex flex-row align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{ route('careers') }}">Careers</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        <li class="nav-item ms-3">
                            <a href="/contact" class="btn btn-outline-light rounded-1">GET IN TOUCH</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Leadership
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('founder') }}">Founder</a></li>
                            <li><a class="dropdown-item" href="{{ route('ceo') }}">Chief Executive Officer</a></li>
                            <li><a class="dropdown-item" href="{{ route('md') }}">Managing Director</a></li>
                            <li><a class="dropdown-item" href="{{ route('team') }}">Executive Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('careers') }}">Careers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <div class="d-flex mt-3">
                    <a href="/contact" class="btn btn-outline-light w-100">GET IN TOUCH</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Smaller spacer for compact header --}}
    <div id="headerSpacer" style="height:70px;" class="d-none"></div>

    {{-- Main Content --}}
    <main class="pt-0">
        @yield('content')
        
        {{-- Video Background Hero Section --}}
        @if(request()->is('/'))
        <section class="video-hero">
            <!-- Video Background -->
            <video class="video-background" autoplay muted loop playsinline>
                <source src="{{ asset('images/videos/1918465-uhd_3840_2160_24fps.mp4') }}" type="video/mp4">
                <!-- Fallback image if video doesn't load -->
                <img src="{{ asset('images/fallback-hero.jpg') }}" alt="GlobeCon Construction Hero Background">
            </video>
            
            <!-- Gradient Overlay -->
            <div class="video-overlay"></div>
            
            <!-- Content Container -->
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 hero-content">
                        <h1 class="display-4 fw-bold mb-4 animate-fade-in-up">
                            Building <span class="gold-accent">Tomorrow's</span> Landmarks Today
                        </h1>
                        <p class="lead mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                            A global leader in construction, engineering, and infrastructure development with projects spanning 40+ countries and a legacy of excellence.
                        </p>
                        <div class="animate-fade-in-up" style="animation-delay: 0.4s;">
                            <a href="/projects" class="btn btn-gold btn-lg me-3">View Our Work</a>
                            <a href="/about" class="btn btn-outline-light btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </main>

    {{-- Premium Footer with Video Background --}}
    <footer id="siteFooter" class="footer-with-video footer-base pt-5 pb-4 {{ request()->is('/') ? '' : 'footer-solid' }}" aria-label="Site footer">
        <!-- Footer Video Background -->
        <video class="footer-video-background" autoplay muted loop playsinline>
            <source src="{{ asset('images/videos/2141798-uhd_2560_1440_25fps.mp4') }}" type="video/mp4">
            <!-- Fallback if video doesn't load -->
        </video>
        
        <!-- Footer Video Overlay -->
        <div class="footer-video-overlay"></div>
        
        <!-- Footer Content -->
        <div class="footer-content">
            <div class="container">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5">
                    <div>
                        <h3 class="mb-2">GLOBECON<span class="gold-accent"> CONSTRUCTION</span></h3>
                        <p class="mb-0 text-muted">Building the future, shaping skylines</p>
                    </div>
                    <a href="/contact" class="btn btn-gold rounded-1 px-4 mt-3 mt-md-0">START A PROJECT</a>
                </div>

                <div class="row g-4 g-lg-5 mb-5">
                    <div class="col-6 col-md-3">
                        <h6 class="text-uppercase small fw-semibold mb-3 gold-accent">Company</h6>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><a href="/about">About Us</a></li>
                            <li class="mb-2"><a href="/leadership">Leadership</a></li>
                            <li class="mb-2"><a href="/sustainability">Sustainability</a></li>
                            <li class="mb-2"><a href="/careers">Careers</a></li>
                            <li class="mb-2"><a href="/contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3">
                        <h6 class="text-uppercase small fw-semibold mb-3 gold-accent">Services</h6>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><a href="/services">General Contracting</a></li>
                            <li class="mb-2"><a href="/services">Design & Build</a></li>
                            <li class="mb-2"><a href="/services">Project Management</a></li>
                            <li class="mb-2"><a href="/services">Infrastructure</a></li>
                            <li class="mb-2"><a href="/services">Sustainable Construction</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3">
                        <h6 class="text-uppercase small fw-semibold mb-3 gold-accent">Projects</h6>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><a href="/projects">Featured Projects</a></li>
                            <li class="mb-2"><a href="/projects/residential">Residential</a></li>
                            <li class="mb-2"><a href="/projects/commercial">Commercial</a></li>
                            <li class="mb-2"><a href="/projects/infrastructure">Infrastructure</a></li>
                            <li class="mb-2"><a href="/projects/international">International</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3">
                        <h6 class="text-uppercase small fw-semibold mb-3 gold-accent">Connect</h6>
                        <ul class="list-unstyled small mb-4">
                            <li class="mb-2"><i class="bi bi-geo-alt me-2 gold-accent"></i>PRIME BUSINESS CENTER Al Barsha South Office No.14th Floor A-1402, A-Block - Jumeirah Village Circle - Dubai - United Arab Emirates</li>
                            <li class="mb-2"><i class="bi bi-telephone me-2 gold-accent"></i><a href="tel:+97145800762">+971 4 580 0762</a></li>
                            <li class="mb-2"><i class="bi bi-envelope me-2 gold-accent"></i><a href="mailto:info@globeconconstruction.com">info@globeconconstruction.com</a></li>
                        </ul>
                        <div class="social-icons d-flex align-items-center gap-3">
                            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <hr class="my-4 footer-divider">

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 small text-white">
                    <div>&copy; {{ date('Y') }} GLOBECON CONSTRUCTION LLC. All Rights Reserved.</div>
                    <div class="d-flex gap-3">
                        <a href="/privacy">Privacy Policy</a>
                        <a href="/terms">Terms of Use</a>
                        <a href="/sitemap">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
      (function(){
        const onHome = {{ request()->is('/') ? 'true' : 'false' }};
        const header = document.getElementById('mainHeader');
        const spacer = document.getElementById('headerSpacer');

        const headerToggle = () => {
          const threshold = 50;
          if (onHome) {
            const solid = window.scrollY > threshold;
            header.classList.toggle('nav-solid', solid);
            header.classList.toggle('fixed-top', solid);
            header.classList.toggle('position-absolute', !solid);
            spacer.classList.toggle('d-none', !solid);
          } else {
            header.classList.add('nav-solid', 'fixed-top');
            header.classList.remove('position-absolute');
            spacer.classList.remove('d-none');
          }
        };

        // Initialize
        headerToggle();
        
        // Add scroll event listener
        window.addEventListener('scroll', () => {
          headerToggle();
        }, { passive: true });
        
        // Add animation class to elements when they come into view
        const observerOptions = {
          threshold: 0.1,
          rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('animate-fade-in-up');
            }
          });
        }, observerOptions);
        
        // Observe elements with animation class
        document.addEventListener('DOMContentLoaded', function() {
          const animatedElements = document.querySelectorAll('.animate-on-scroll');
          animatedElements.forEach(el => {
            observer.observe(el);
          });
        });

        // Video optimization for mobile
        const videos = document.querySelectorAll('.video-background, .footer-video-background');
        videos.forEach(video => {
          // Ensure video plays inline on mobile
          video.setAttribute('playsinline', '');
          video.setAttribute('muted', '');
          
          // Handle video loading
          video.addEventListener('loadeddata', function() {
            console.log('Video loaded successfully');
          });
          
          video.addEventListener('error', function() {
            console.log('Video failed to load, using fallback');
          });
        });
      })();
    </script>

</body>
</html>