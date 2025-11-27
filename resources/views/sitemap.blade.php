@extends('layouts.app')

@section('title', 'Sitemap - GlobeCon Construction LLC')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 py-20 pt-32">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="display-4 fw-bold text-white mb-4">Sitemap</h1>
                    <p class="lead text-gray-300">Navigate through our website and find our office location</p>
                    <div class="w-100 h-1 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto rounded-full mt-4" style="max-width: 200px;"></div>
                </div>

                <div class="row g-5">
                    <!-- Website Pages -->
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-lg bg-gray-800/50 backdrop-blur-xl text-gray-300 h-100">
                            <div class="card-body p-5">
                                <h2 class="h3 text-white mb-4">Website Navigation</h2>
                                
                                <!-- Main Pages -->
                                <div class="mb-5">
                                    <h4 class="h5 text-cyan-400 mb-3">Main Pages</h4>
                                    <ul class="list-unstyled space-y-2">
                                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">🏠 Home</a></li>
                                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">ℹ️ About Us</a></li>
                                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">🛠️ Services</a></li>
                                        <li><a href="{{ route('projects') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">🏗️ Projects</a></li>
                                        <li><a href="{{ route('news') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">📰 News</a></li>
                                        <li><a href="{{ route('careers') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">💼 Careers</a></li>
                                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">📞 Contact</a></li>
                                    </ul>
                                </div>

                                <!-- Leadership -->
                                <div class="mb-5">
                                    <h4 class="h5 text-cyan-400 mb-3">Leadership</h4>
                                    <ul class="list-unstyled space-y-2">
                                        <li><a href="{{ route('founder') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">👑 Founder</a></li>
                                        <li><a href="{{ route('ceo') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">💼 Chief Executive Officer</a></li>
                                        <li><a href="{{ route('md') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">📊 Managing Director</a></li>
                                        <li><a href="{{ route('team') }}" class="text-gray-300 hover:text-white transition-colors d-block py-1">👥 Executive Team</a></li>
                                    </ul>
                                </div>

                                <!-- Services -->
                                <div class="mb-5">
                                    <h4 class="h5 text-cyan-400 mb-3">Services</h4>
                                    <ul class="list-unstyled space-y-2">
                                        <li><a href="/services#general-contracting" class="text-gray-300 hover:text-white transition-colors d-block py-1">📝 General Contracting</a></li>
                                        <li><a href="/services#design-build" class="text-gray-300 hover:text-white transition-colors d-block py-1">🎨 Design & Build</a></li>
                                        <li><a href="/services#project-management" class="text-gray-300 hover:text-white transition-colors d-block py-1">📋 Project Management</a></li>
                                        <li><a href="/services#infrastructure" class="text-gray-300 hover:text-white transition-colors d-block py-1">🏛️ Infrastructure</a></li>
                                        <li><a href="/services#sustainable" class="text-gray-300 hover:text-white transition-colors d-block py-1">🌱 Sustainable Construction</a></li>
                                    </ul>
                                </div>

                                <!-- Legal -->
                                <div>
                                    <h4 class="h5 text-cyan-400 mb-3">Legal & Information</h4>
                                    <ul class="list-unstyled space-y-2">
                                        <li><a href="/privacy" class="text-gray-300 hover:text-white transition-colors d-block py-1">🔒 Privacy Policy</a></li>
                                        <li><a href="/terms" class="text-gray-300 hover:text-white transition-colors d-block py-1">📄 Terms of Use</a></li>
                                        <li><a href="/sitemap" class="text-gray-300 hover:text-white transition-colors d-block py-1">🗺️ Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Location Map -->
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-lg bg-gray-800/50 backdrop-blur-xl text-gray-300 h-100">
                            <div class="card-body p-5">
                                <h2 class="h3 text-white mb-4">Our Office Location</h2>
                                
                                <!-- Address -->
                                <div class="mb-4">
                                    <h4 class="h5 text-cyan-400 mb-3">📍 Headquarters</h4>
                                    <div class="bg-gray-700/30 p-4 rounded-lg">
                                        <p class="mb-2"><strong>PRIME BUSINESS CENTER A</strong></p>
                                        <p class="mb-2">Al Barsha South Fourth A1402</p>
                                        <p class="mb-2">A-Block, Jumeirah Village Circle</p>
                                        <p class="mb-0">Dubai, United Arab Emirates</p>
                                    </div>
                                </div>

                                <!-- Contact Info -->
                                <div class="mb-4">
                                    <h4 class="h5 text-cyan-400 mb-3">📞 Contact Information</h4>
                                    <div class="space-y-2">
                                        <p class="mb-1"><i class="bi bi-telephone me-2 text-cyan-400"></i> <strong>Phone:</strong> +971 4 580 0762</p>
                                        <p class="mb-1"><i class="bi bi-envelope me-2 text-cyan-400"></i> <strong>Email:</strong> info@globeconconstruction.com</p>
                                        <p class="mb-0"><i class="bi bi-clock me-2 text-cyan-400"></i> <strong>Hours:</strong> Mon-Sat, 9:00 AM - 6:00 PM GST</p>
                                    </div>
                                </div>

                                <!-- Interactive Map -->
                                <div class="mt-4">
                                    <h4 class="h5 text-cyan-400 mb-3">🗺️ Interactive Map</h4>
                                    <div class="rounded-xl overflow-hidden border-2 border-gray-600/50 h-64">
                                        <iframe
                                            class="w-full h-full"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.536365331645!2d55.19741531500866!3d25.10162298393899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b9c9c9c9c9c%3A0x9c9c9c9c9c9c9c9c!2sPRIME%20BUSINESS%20CENTER%20A%2C%20Al%20Barsha%20South%20Fourth%20A1402%2C%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sae!4v1633084800000!5m2!1sen!2sae"
                                            style="border:0; filter: grayscale(0.3) contrast(1.1) hue-rotate(180deg);"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <a href="https://goo.gl/maps/your-map-link-here" target="_blank" class="btn btn-outline-light btn-sm">
                                            <i class="bi bi-arrow-up-right-square me-2"></i>Open in Google Maps
                                        </a>
                                    </div>
                                </div>

                                <!-- Directions -->
                                <div class="mt-4">
                                    <h4 class="h5 text-cyan-400 mb-3">🚗 Getting Here</h4>
                                    <ul class="list-unstyled space-y-2 text-sm">
                                        <li><i class="bi bi-car-front me-2 text-cyan-400"></i> <strong>By Car:</strong> Located in Al Barsha South, easily accessible from Sheikh Zayed Road</li>
                                        <li><i class="bi bi-bus-front me-2 text-cyan-400"></i> <strong>Public Transport:</strong> Close to Dubai Metro stations and major bus routes</li>
                                        <li><i class="bi bi-p-square me-2 text-cyan-400"></i> <strong>Parking:</strong> Ample parking available in the business center</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.card {
    background: rgba(30, 41, 59, 0.7) !important;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.hover-lift {
    transition: all 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-2px);
}
</style>
@endsection