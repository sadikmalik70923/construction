@extends('layouts.app')

@section('title', 'Privacy Policy - GlobeCon Construction LLC')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 py-20 pt-32 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-32 w-80 h-80 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-blue-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-cyan-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-pulse delay-500"></div>
    </div>

    <div class="container relative z-10">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Enhanced Header -->
                <div class="text-center mb-12">
                    <div class="inline-block mb-4">
                        <div class="w-24 h-1 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto mb-3 rounded-full"></div>
                        <h1 class="display-4 fw-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 mb-4">
                            Privacy Policy
                        </h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-cyan-400 mx-auto mt-3 rounded-full"></div>
                    </div>
                    <p class="lead text-gray-200 text-lg">Last updated: {{ date('F j, Y') }}</p>
                </div>

                <!-- Enhanced Content Card -->
                <div class="card border-0 shadow-2xl bg-gray-900/80 backdrop-blur-2xl text-gray-100 overflow-hidden">
                    <!-- Card Header Gradient -->
                    <div class="card-header border-0 bg-gradient-to-r from-cyan-900/30 to-blue-900/30 py-4">
                        <div class="d-flex align-items-center">
                            <div class="w-3 h-3 bg-cyan-500 rounded-full me-2 animate-pulse"></div>
                            <div class="w-3 h-3 bg-blue-500 rounded-full me-2"></div>
                            <div class="w-3 h-3 bg-purple-500 rounded-full me-3"></div>
                            <h5 class="mb-0 text-white fw-semibold">Privacy Policy Document</h5>
                        </div>
                    </div>

                    <div class="card-body p-5 p-lg-6">
                        <!-- Introduction -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-cyan-500/20 p-2 rounded me-3">
                                    <i class="bi bi-file-text-fill text-cyan-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">1. Introduction</h2>
                            </div>
                            <p class="mb-3 text-gray-200 leading-relaxed">GlobeCon Construction LLC ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how your personal information is collected, used, and disclosed by GlobeCon Construction LLC.</p>
                            <p class="text-gray-200 leading-relaxed">This Privacy Policy applies to our website and its associated subdomains (collectively, our "Service") alongside our application, GlobeCon Construction LLC.</p>
                        </div>

                        <!-- Information Collection -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-blue-500/20 p-2 rounded me-3">
                                    <i class="bi bi-database-fill text-blue-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">2. Information We Collect</h2>
                            </div>
                            <p class="mb-4 text-gray-200 leading-relaxed">We collect information when you visit our website, register on our site, place an order, subscribe to our newsletter, respond to a survey, or fill out a form.</p>
                            
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="bg-gray-800/50 p-4 rounded-lg border-l-4 border-cyan-500">
                                        <h4 class="h5 text-cyan-400 mb-3">Personal Information</h4>
                                        <ul class="list-unstyled space-y-2">
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-cyan-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">Name and contact details</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-cyan-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">Company information</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-cyan-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">Project details and requirements</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-cyan-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">Communication preferences</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/50 p-4 rounded-lg border-l-4 border-blue-500">
                                        <h4 class="h5 text-blue-400 mb-3">Automatically Collected</h4>
                                        <ul class="list-unstyled space-y-2">
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-blue-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">IP address and browser type</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-blue-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">Device information</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-blue-400 me-2 mt-1"></i>
                                                <span class="text-gray-200">Website usage data</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Use of Information -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-purple-500/20 p-2 rounded me-3">
                                    <i class="bi bi-gear-fill text-purple-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">3. How We Use Your Information</h2>
                            </div>
                            <p class="mb-4 text-gray-200 leading-relaxed">We use the information we collect in various ways, including to:</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border border-gray-700/50">
                                        <i class="bi bi-laptop text-cyan-400 me-2"></i>
                                        <span class="text-gray-200">Provide, operate, and maintain our website</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border border-gray-700/50">
                                        <i class="bi bi-graph-up text-blue-400 me-2"></i>
                                        <span class="text-gray-200">Improve, personalize, and expand our website</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border border-gray-700/50">
                                        <i class="bi bi-bar-chart text-purple-400 me-2"></i>
                                        <span class="text-gray-200">Understand and analyze how you use our website</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border border-gray-700/50">
                                        <i class="bi bi-lightbulb text-cyan-400 me-2"></i>
                                        <span class="text-gray-200">Develop new products and services</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data Sharing -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-green-500/20 p-2 rounded me-3">
                                    <i class="bi bi-share-fill text-green-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">4. Sharing Your Information</h2>
                            </div>
                            <div class="space-y-4">
                                <div class="bg-gray-800/40 p-4 rounded-lg">
                                    <h5 class="text-green-400 mb-2">Business Transfers</h5>
                                    <p class="text-gray-200 mb-0">We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</p>
                                </div>
                                <div class="bg-gray-800/40 p-4 rounded-lg">
                                    <h5 class="text-blue-400 mb-2">Affiliates</h5>
                                    <p class="text-gray-200 mb-0">We may share your information with our affiliates, in which case we will require those affiliates to honor this Privacy Policy.</p>
                                </div>
                                <div class="bg-gray-800/40 p-4 rounded-lg">
                                    <h5 class="text-purple-400 mb-2">Business Partners</h5>
                                    <p class="text-gray-200 mb-0">We may share your information with our business partners to offer you certain products, services, or promotions.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cookies -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-yellow-500/20 p-2 rounded me-3">
                                    <i class="bi bi-cookie text-yellow-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">5. Cookies and Tracking Technologies</h2>
                            </div>
                            <p class="text-gray-200 leading-relaxed">We use cookies and similar tracking technologies to track the activity on our website and store certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>
                        </div>

                        <!-- Data Security -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-red-500/20 p-2 rounded me-3">
                                    <i class="bi bi-shield-lock-fill text-red-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">6. Data Security</h2>
                            </div>
                            <p class="text-gray-200 leading-relaxed">We implement appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, please also remember that we cannot guarantee that the internet itself is 100% secure.</p>
                        </div>

                        <!-- Your Rights -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-indigo-500/20 p-2 rounded me-3">
                                    <i class="bi bi-person-check-fill text-indigo-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">7. Your Data Protection Rights</h2>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border-l-4 border-indigo-500">
                                        <h6 class="text-indigo-400 mb-2">Right to Access</h6>
                                        <p class="text-gray-200 small mb-0">Access, update or delete your information</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border-l-4 border-purple-500">
                                        <h6 class="text-purple-400 mb-2">Right to Rectification</h6>
                                        <p class="text-gray-200 small mb-0">Correct inaccurate personal data</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border-l-4 border-cyan-500">
                                        <h6 class="text-cyan-400 mb-2">Right to Object</h6>
                                        <p class="text-gray-200 small mb-0">Object to processing of personal data</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-gray-800/30 p-3 rounded border-l-4 border-blue-500">
                                        <h6 class="text-blue-400 mb-2">Right to Portability</h6>
                                        <p class="text-gray-200 small mb-0">Transfer your data to another service</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Contact Information -->
                        <div class="mt-10 p-5 bg-gradient-to-r from-gray-800/60 to-gray-900/60 rounded-2xl border border-gray-700/30 backdrop-blur-lg">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="h4 text-white mb-3">Questions About Our Privacy Policy?</h3>
                                    <p class="text-gray-300 mb-0">We're here to help you understand how we protect and manage your data.</p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4 py-2">
                                        <i class="bi bi-chat-dots-fill me-2"></i>
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                            <hr class="my-4 border-gray-700">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-cyan-500/20 p-2 rounded me-3">
                                            <i class="bi bi-envelope-fill text-cyan-400"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-gray-300 small">Email</p>
                                            <p class="mb-0 text-white">info@globeconconstruction.ae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-blue-500/20 p-2 rounded me-3">
                                            <i class="bi bi-telephone-fill text-blue-400"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-gray-300 small">Phone</p>
                                            <p class="mb-0 text-white">+971 4 580 0762</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-purple-500/20 p-2 rounded me-3">
                                            <i class="bi bi-geo-alt-fill text-purple-400"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-gray-300 small">Address</p>
                                            <p class="mb-0 text-white">PRIME BUSINESS CENTER A, Dubai</p>
                                        </div>
                                    </div>
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
    background: rgba(15, 23, 42, 0.9) !important;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5) !important;
}

.leading-relaxed {
    line-height: 1.7;
}

.border-l-4 {
    border-left-width: 4px !important;
}

/* Smooth animations */
.fade-in {
    animation: fadeIn 0.8s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Hover effects */
.bg-gray-800\/30:hover {
    background: rgba(30, 41, 59, 0.5) !important;
    transform: translateY(-2px);
    transition: all 0.3s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add fade-in animation to sections
    const sections = document.querySelectorAll('.mb-8');
    sections.forEach((section, index) => {
        section.style.animationDelay = `${index * 0.1}s`;
        section.classList.add('fade-in');
    });
});
</script>
@endsection