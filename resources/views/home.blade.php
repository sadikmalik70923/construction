@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- 🏗️ Hero Video (Background) -->
@php
    // Configure hero content and video source
    $hero = [
        'title' => 'Building Your Future with GLOBECON CONSTRUCTION',
        'subtitle' => 'Quality engineered to last. Delivered on time.',
        'cta_text' => 'Explore Services',
        'cta_href' => '/services',
        // Temporary hosted demo video (replace with your own later in public/videos)
        'video_mp4' => 'https://www.w3schools.com/html/mov_bbb.mp4',
        'video_webm' => '',
    ];
@endphp

<section class="position-relative" style="height:100vh; overflow:hidden;">
    <video class="position-absolute top-0 start-0 w-100 h-100" autoplay muted loop playsinline
           poster="{{ asset('images/Aerial_1.webp') }}" style="object-fit:cover;">
        @if(!empty($hero['video_webm']))
            <source src="{{ $hero['video_webm'] }}" type="video/webm">
        @endif
        <source src="{{ $hero['video_mp4'] }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay for readability -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,.35);"></div>

    <!-- Bottom-left Caption -->
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-start px-3 pb-4 pb-md-5">
        <div class="text-start">
            <h1 class="fw-bold text-white" style="font-size:clamp(1.4rem, 2.2vw + 1rem, 3rem); line-height:1.2; text-shadow:0 2px 8px rgba(0,0,0,.6); max-width: 980px;">{{ $hero['title'] }}</h1>
            @if(!empty($hero['subtitle']))
                <p class="mt-2 mb-3 text-white-50" style="font-size:clamp(.95rem, .6vw + .7rem, 1.125rem); text-shadow:0 1px 4px rgba(0,0,0,.5)">{{ $hero['subtitle'] }}</p>
            @endif
            @if(!empty($hero['cta_text']))
                <a href="{{ $hero['cta_href'] ?? '#' }}" class="btn btn-primary btn-lg px-4">{{ $hero['cta_text'] }}</a>
            @endif
        </div>
    </div>
</section>

<!-- 🌟 Intro Section -->
<section class="container my-5 text-center">
    <h1 class="display-5 fw-bold mb-3">Welcome to Constructo</h1>
    <p class="text-muted mx-auto" style="max-width: 720px;">
        We specialize in residential, commercial, and infrastructure projects, delivering excellence with safety and sustainability.
    </p>
    <a href="/services" class="btn btn-primary btn-lg mt-3">Explore Services</a>
</section>

<!-- 📊 Counters Section (Dynamic, dark themed) -->
<section class="py-5 py-md-6" style="background:#000; position:relative;">
    <style>
      /* scoped styles for counters */
      .counter-number { color:#ffffff; font-weight:800; line-height:1; font-size:clamp(2.75rem, 7vw, 6.5rem); }
      .counter-label { color:#d4b06b; letter-spacing:.18em; text-transform:uppercase; font-weight:600; font-size:clamp(.78rem, 1.4vw, 1rem); }
      .counter-line { border-top:1px solid rgba(255,255,255,.28); }
      .counter-item { max-width:520px; }
      /* reveal animations */
      .reveal-left, .reveal-right { opacity:0; transition: transform .8s ease, opacity .8s ease; transition-delay: var(--delay, 0s); }
      .reveal-left { transform: translateX(-40px); }
      .reveal-right { transform: translateX(40px); }
      .reveal-left.in, .reveal-right.in { opacity:1; transform: translateX(0); }
      @media (max-width: 576px){
        .counter-item { max-width: 100%; }
      }
    </style>
    @php
        // Update these counters as needed or fetch from database later.
        $counters = [
            ['value' => 1, 'suffix' => '',   'label' => 'Tower',       'align' => 'center'],
            ['value' => 725, 'suffix' => '', 'label' => 'Meters',      'align' => 'start'],
            ['value' => 7, 'suffix' => '',   'label' => 'Star Hotel',  'align' => 'start'],
            ['value' => 140, 'suffix' => '+','label' => 'Floors',      'align' => 'end'],
        ];

        // Split into left and right columns (first 2 left, next 2 right)
        $leftCounters = array_slice($counters, 0, 2);
        $rightCounters = array_slice($counters, 2, 2);
    @endphp
    <div class="container-xl">
        <div class="row gy-5 py-2">
            <!-- Left column (2 items) -->
            <div class="col-12 col-md-6 d-flex flex-column gap-5">
                @foreach($leftCounters as $item)
                    <div class="counter-item reveal-left" style="--delay: {{ $loop->index * 0.15 }}s;">
                        <div class="counter-number">
                            <span class="countup" data-target="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-2">
                            <div class="counter-label">{{ $item['label'] }}</div>
                            <div class="flex-grow-1 counter-line"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Right column (2 items) -->
            <div class="col-12 col-md-6 d-flex flex-column gap-5">
                @foreach($rightCounters as $item)
                    <div class="counter-item {{ $item['align'] === 'end' ? 'ms-auto text-end' : '' }} reveal-right" style="--delay: {{ $loop->index * 0.15 + 0.15 }}s;">
                        <div class="counter-number">
                            <span class="countup" data-target="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-2 {{ $item['align'] === 'end' ? 'flex-row-reverse' : '' }}">
                            <div class="counter-label">{{ $item['label'] }}</div>
                            <div class="flex-grow-1 counter-line"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Count-up animation (lightweight) -->
    <script>
      (function(){
        const els = document.querySelectorAll('.countup');
        if(!('IntersectionObserver' in window)) return; // skip if not supported
        const ease = t => 1 - Math.pow(1 - t, 3);
        const animate = (el) => {
          const target = parseInt(el.getAttribute('data-target')) || 0;
          const dur = 1400; // ms
          const start = performance.now();
          const step = (ts) => {
            const p = Math.min(1, (ts - start) / dur);
            el.textContent = Math.floor(ease(p) * target).toLocaleString();
            if (p < 1) requestAnimationFrame(step);
          };
          requestAnimationFrame(step);
        };
        const io = new IntersectionObserver((entries) => {
          entries.forEach(e => {
            if(e.isIntersecting){
              animate(e.target);
              io.unobserve(e.target);
            }
          });
        }, { threshold: 0.4 });
        els.forEach(el => io.observe(el));

        // reveal left/right items when in view
        const revealEls = document.querySelectorAll('.reveal-left, .reveal-right');
        const ioReveal = new IntersectionObserver((entries) => {
          entries.forEach(e => {
            if (e.isIntersecting) {
              e.target.classList.add('in');
              ioReveal.unobserve(e.target);
            }
          })
        }, { threshold: 0.2 });
        revealEls.forEach(el => ioReveal.observe(el));
      })();
    </script>
</section>

<!-- 🧱 About Summary -->
<section class="container my-5">
    <div class="row align-items-center g-4">
        <div class="col-12 col-lg-6">
            <img src="https://images.unsplash.com/photo-1481018085669-2bc6e4f00eed?q=80&w=1600&auto=format&fit=crop"
                 alt="About summary" class="img-fluid rounded shadow">
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="h3 fw-bold mb-3">About Our Company</h2>
            <p class="text-muted mb-4">
                From planning to delivery, we manage every phase with strict quality control and safety standards.
            </p>
            <a href="/about" class="btn btn-outline-primary">Learn More</a>
        </div>
    </div>
</section>

<!-- 🧰 Services Preview -->
<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h3 fw-bold mb-0">Featured Services</h2>
        <a href="/services" class="btn btn-link">View all</a>
    </div>
    <div class="row g-4">
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1494145904049-0dca59b4bbad?q=80&w=1200&auto=format&fit=crop"
                     class="card-img-top" alt="Residential">
                <div class="card-body">
                    <h5 class="card-title">Residential</h5>
                    <p class="card-text text-muted">Homes and apartments built to last with modern finishes.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1486304873000-235643847519?q=80&w=1200&auto=format&fit=crop"
                     class="card-img-top" alt="Commercial">
                <div class="card-body">
                    <h5 class="card-title">Commercial</h5>
                    <p class="card-text text-muted">Workspaces designed for productivity and brand presence.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?q=80&w=1200&auto=format&fit=crop"
                     class="card-img-top" alt="Infrastructure">
                <div class="card-body">
                    <h5 class="card-title">Infrastructure</h5>
                    <p class="card-text text-muted">Civil works executed with durability and precision.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 📬 Contact Us Section -->
<section class="container my-5">
    <div class="row g-4">
        <div class="col-12 col-lg-6">
            <div class="p-4 p-md-5 bg-white rounded shadow">
                <h2 class="h3 fw-bold mb-3">Contact Us</h2>
                <p class="text-muted mb-4">Tell us about your project. Our team will get back to you shortly.</p>
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your name" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Project details..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="ratio ratio-4x3 rounded overflow-hidden shadow">
                <iframe
                    src="https://www.google.com/maps?q=India%20Gate%2C%20New%20Delhi&output=embed"
                    style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>
            <div class="mt-3 small text-muted">
                Our office: 123 Skyline Avenue, Sector 5, Business District, New Delhi 110001
            </div>
        </div>
    </div>
</section>

<!-- 🤝 Clients Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h3 fw-bold mb-0">Our Clients</h2>
            <a href="#" class="btn btn-link">View all</a>
        </div>
        <div class="row g-4 text-center align-items-center">
            <div class="col-6 col-md-3">
                <img src="https://dummyimage.com/180x60/cccccc/2b2b2b&text=Client+1" class="img-fluid opacity-75" alt="Client 1">
            </div>
            <div class="col-6 col-md-3">
                <img src="https://dummyimage.com/180x60/cccccc/2b2b2b&text=Client+2" class="img-fluid opacity-75" alt="Client 2">
            </div>
            <div class="col-6 col-md-3">
                <img src="https://dummyimage.com/180x60/cccccc/2b2b2b&text=Client+3" class="img-fluid opacity-75" alt="Client 3">
            </div>
            <div class="col-6 col-md-3">
                <img src="https://dummyimage.com/180x60/cccccc/2b2b2b&text=Client+4" class="img-fluid opacity-75" alt="Client 4">
            </div>
        </div>
    </div>
    </section>

@endsection
