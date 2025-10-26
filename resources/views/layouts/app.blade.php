<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GLOBECON CONSTRUCTION LLC')</title>

    {{-- Laravel Vite + Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap + Icons CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- SEO Meta --}}
    <meta name="description" content="Constructo - Modern Construction Company Website built with Laravel, Tailwind, and Bootstrap.">
    <style>
      /* Header styles */
      .nav-base { transition: background-color .35s ease, backdrop-filter .35s ease, box-shadow .35s ease; }
.nav-solid { 
  background: rgba(23, 61, 165, 0.92); 
  backdrop-filter: saturate(130%) blur(6px); 
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.18); 
}
      .navbar .nav-link, .navbar .navbar-brand { color: #f8fafc !important; }
      .navbar .nav-link:hover { color: #ffffff !important; }
      .navbar .btn-outline-light { color: #e5e7eb; border-color: #e5e7eb; }
      .navbar .btn-outline-light:hover { color: #0f172a; background: #e5e7eb; }

      /* Footer behavior: transparent on home until scrolled */
      .footer-base { transition: background-color .35s ease, color .35s ease, backdrop-filter .35s ease; background: transparent; color: #0f172a; }
      .footer-solid { background: #0f172a; color: #e5e7eb; backdrop-filter: saturate(130%) contrast(105%); }
      .footer-solid a { color: #e5e7eb; text-decoration: none; }
      .footer-solid a:hover { color: #ffffff; text-decoration: underline; }
      .footer-divider { border-color: rgba(255,255,255,.12) !important; }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 font-sans">

    {{-- 🧭 Navbar --}}
    <nav id="mainHeader" class="navbar navbar-expand-lg navbar-dark nav-base position-absolute top-0 start-0 w-100 z-3 bg-transparent">
        <div class="container position-relative">
            {{-- Brand for mobile --}}
            <a class="navbar-brand mx-auto d-lg-none fw-bold" href="/">GLOBECON CONSTRUCTION LLC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Desktop layout --}}
            <div class="d-none d-lg-flex w-100 align-items-center justify-content-between">
                <ul class="navbar-nav d-none d-lg-flex flex-row gap-3">
            <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/about">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/services">Services</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/team">Our Team</a></li>
        </ul>

        <a class="navbar-brand position-absolute start-50 translate-middle-x fw-bold text-white text-center"
           href="/" style="white-space:nowrap; font-size:clamp(1rem,1.5vw,1.3rem); letter-spacing:1px;">
            GLOBECON CONSTRUCTION LLC
        </a>

        <ul class="navbar-nav d-none d-lg-flex flex-row gap-3 align-items-center ms-auto">
            <li class="nav-item"><a class="nav-link text-white" href="/projects">Our Projects</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/careers">Careers</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/news">News</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
        </ul>
            </div>
        </div>
    </nav>
    <!-- Spacer to avoid layout shift when header becomes fixed -->
    <div id="headerSpacer" style="height:64px;" class="d-none"></div>

    {{-- 🌆 Main Page Content --}}
    <main class="pt-0">
        @yield('content')
    </main>

    {{-- ⚙️ Footer --}}
    <footer id="siteFooter" class="footer-base mt-4 mt-md-5 pt-5 pb-4 {{ request()->is('/') ? '' : 'footer-solid' }}" aria-label="Site footer">
        <div class="container">
            <!-- Top CTA bar -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
                <strong class="fs-5">GLOBECON CONSTRUCTION LLC</strong>
                <a href="/contact" class="btn btn-outline-light rounded-pill px-3 mt-2 mt-md-0 border-1">ENQUIRE NOW</a>
            </div>

            <div class="row g-4 g-lg-5">
                {{-- Company --}}
                <div class="col-6 col-lg-3">
                    <p class="text-uppercase small fw-semibold mb-2 opacity-75">Company</p>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-1"><a href="/about">About Us</a></li>
                        <li class="mb-1"><a href="/careers">Careers</a></li>
                        <li class="mb-1"><a href="/contact">Contact</a></li>
                        <li class="mb-1"><a href="#">Terms & Conditions</a></li>
                        <li class="mb-1"><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                {{-- Services --}}
                <div class="col-6 col-lg-3">
                    <p class="text-uppercase small fw-semibold mb-2 opacity-75">Services</p>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-1"><a href="/services">General Contracting</a></li>
                        <li class="mb-1"><a href="/services">Design & Build</a></li>
                        <li class="mb-1"><a href="/services">Project Management</a></li>
                        <li class="mb-1"><a href="/services">Sustainability</a></li>
                    </ul>
                </div>

                {{-- Projects --}}
                <div class="col-6 col-lg-3">
                    <p class="text-uppercase small fw-semibold mb-2 opacity-75">Projects</p>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-1"><a href="/projects">Featured Projects</a></li>
                        <li class="mb-1"><a href="#">Residential</a></li>
                        <li class="mb-1"><a href="#">Commercial</a></li>
                        <li class="mb-1"><a href="#">Infrastructure</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div class="col-12 col-lg-3">
                    <p class="text-uppercase small fw-semibold mb-2 opacity-75">Contact</p>
                    <ul class="list-unstyled small mb-3 mb-lg-4">
                        <li class="mb-1"><i class="bi bi-geo-alt me-2"></i>Dubai, United Arab Emirates</li>
                        <li class="mb-1"><i class="bi bi-telephone me-2"></i><a href="tel:+97100000000">+971 00 000 0000</a></li>
                        <li class="mb-1"><i class="bi bi-envelope me-2"></i><a href="mailto:info@globecon.com">info@globecon.com</a></li>
                    </ul>
                    <div class="d-flex align-items-center gap-3" aria-label="Social media">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin fs-5"></i></a>
                        <a href="#" aria-label="X (Twitter)"><i class="bi bi-twitter-x fs-5"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube fs-5"></i></a>
                    </div>
                </div>
            </div>

            <hr class="my-4 footer-divider">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-2 small opacity-75">
                <div>
                    <a href="#" class="me-3">Sitemap</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div>&copy; {{ date('Y') }} GLOBECON CONSTRUCTION LLC. All Rights Reserved.</div>
            </div>
        </div>
    </footer>

    <script>
      (function(){
        const onHome = {{ request()->is('/') ? 'true' : 'false' }};
        const header = document.getElementById('mainHeader');
        const spacer = document.getElementById('headerSpacer');
        const footer = document.getElementById('siteFooter');

        // Header behavior: solid + fixed on non-home; on home becomes solid after scroll
        const headerToggle = () => {
          if (!header || !spacer) return;
          const threshold = 80; // px
          if (onHome) {
            const makeSolid = window.scrollY > threshold;
            header.classList.toggle('nav-solid', makeSolid);
            header.classList.toggle('fixed-top', makeSolid);
            header.classList.toggle('position-absolute', !makeSolid);
            header.classList.toggle('bg-transparent', !makeSolid);
            spacer.classList.toggle('d-none', !makeSolid);
          } else {
            header.classList.add('nav-solid', 'fixed-top');
            header.classList.remove('position-absolute', 'bg-transparent');
            spacer.classList.remove('d-none');
          }
        };

        // Footer behavior: transparent on home until scrolled
        const footerToggle = () => {
          if (!footer) return;
          if (!onHome) { footer.classList.add('footer-solid'); return; }
          const threshold = 120; // px
          if (window.scrollY > threshold) footer.classList.add('footer-solid');
          else footer.classList.remove('footer-solid');
        };

        headerToggle();
        footerToggle();
        window.addEventListener('scroll', () => { headerToggle(); footerToggle(); }, { passive: true });
      })();
    </script>

</body>
</html>
