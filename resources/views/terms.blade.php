@extends('layouts.app')

@section('title', 'Terms of Use - GlobeCon Construction LLC')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-gray-900 via-amber-900 to-yellow-900 py-20 pt-32 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-32 w-80 h-80 bg-amber-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-yellow-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-orange-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-pulse delay-500"></div>
    </div>

    <div class="container relative z-10">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Enhanced Header -->
                <div class="text-center mb-12">
                    <div class="inline-block mb-4">
                        <div class="w-24 h-1 bg-gradient-to-r from-amber-400 to-yellow-500 mx-auto mb-3 rounded-full"></div>
                        <h1 class="display-4 fw-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-yellow-400 to-orange-400 mb-4">
                            Terms of Use
                        </h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-orange-400 to-amber-400 mx-auto mt-3 rounded-full"></div>
                    </div>
                    <p class="lead text-amber-100 text-lg">Last updated: {{ date('F j, Y') }}</p>
                </div>

                <!-- Enhanced Content Card -->
                <div class="card border-0 shadow-2xl bg-gray-900/80 backdrop-blur-2xl text-amber-50 overflow-hidden">
                    <!-- Card Header Gradient -->
                    <div class="card-header border-0 bg-gradient-to-r from-amber-900/30 to-yellow-900/30 py-4">
                        <div class="d-flex align-items-center">
                            <div class="w-3 h-3 bg-amber-500 rounded-full me-2 animate-pulse"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full me-2"></div>
                            <div class="w-3 h-3 bg-orange-500 rounded-full me-3"></div>
                            <h5 class="mb-0 text-white fw-semibold">Terms of Use Agreement</h5>
                        </div>
                    </div>

                    <div class="card-body p-5 p-lg-6">
                        <!-- Agreement to Terms -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-amber-500/20 p-2 rounded me-3">
                                    <i class="bi bi-file-earmark-text-fill text-amber-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">1. Agreement to Terms</h2>
                            </div>
                            <p class="mb-3 text-amber-100 leading-relaxed">By accessing and using GlobeCon Construction LLC's website, you accept and agree to be bound by the terms and provision of this agreement.</p>
                            <p class="text-amber-100 leading-relaxed">These Terms of Use govern your use of our website and services. Please read them carefully.</p>
                        </div>

                        <!-- Intellectual Property -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-yellow-500/20 p-2 rounded me-3">
                                    <i class="bi bi-c-circle-fill text-yellow-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">2. Intellectual Property Rights</h2>
                            </div>
                            <p class="mb-4 text-amber-100 leading-relaxed">Unless otherwise stated, GlobeCon Construction LLC and/or its licensors own the intellectual property rights for all material on this website.</p>
                            <p class="mb-4 text-amber-100 leading-relaxed">You may access this from GlobeCon Construction LLC for your own personal use subjected to restrictions set in these terms and conditions.</p>
                            
                            <div class="bg-amber-900/20 p-4 rounded-lg border-l-4 border-amber-500">
                                <h4 class="h5 text-amber-400 mb-3">Restrictions on Use</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-x-circle-fill text-amber-400 me-2 mt-1"></i>
                                            <span class="text-amber-100">You must not republish material from this website</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-x-circle-fill text-amber-400 me-2 mt-1"></i>
                                            <span class="text-amber-100">You must not sell, rent, or sub-license material</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-x-circle-fill text-amber-400 me-2 mt-1"></i>
                                            <span class="text-amber-100">You must not reproduce or duplicate material</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start">
                                            <i class="bi bi-x-circle-fill text-amber-400 me-2 mt-1"></i>
                                            <span class="text-amber-100">You must not redistribute our content</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User Responsibilities -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-orange-500/20 p-2 rounded me-3">
                                    <i class="bi bi-person-x-fill text-orange-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">3. User Responsibilities</h2>
                            </div>
                            <p class="mb-4 text-amber-100 leading-relaxed">You are specifically restricted from all of the following:</p>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bg-amber-900/20 p-3 rounded border border-amber-700/30">
                                        <i class="bi bi-shield-exclamation text-orange-400 me-2"></i>
                                        <span class="text-amber-100">Publishing website material in other media</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-amber-900/20 p-3 rounded border border-amber-700/30">
                                        <i class="bi bi-cash-coin text-yellow-400 me-2"></i>
                                        <span class="text-amber-100">Selling or commercializing website material</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-amber-900/20 p-3 rounded border border-amber-700/30">
                                        <i class="bi bi-eye-slash text-amber-400 me-2"></i>
                                        <span class="text-amber-100">Publicly performing website material</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-amber-900/20 p-3 rounded border border-amber-700/30">
                                        <i class="bi bi-hammer text-orange-400 me-2"></i>
                                        <span class="text-amber-100">Damaging use of this website</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-amber-900/20 p-3 rounded border border-amber-700/30">
                                        <i class="bi bi-exclamation-triangle text-yellow-400 me-2"></i>
                                        <span class="text-amber-100">Use contrary to applicable laws</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-amber-900/20 p-3 rounded border border-amber-700/30">
                                        <i class="bi bi-database-fill-down text-amber-400 me-2"></i>
                                        <span class="text-amber-100">Data mining or harvesting activities</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- No Warranties -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-yellow-500/20 p-2 rounded me-3">
                                    <i class="bi bi-shield-exclamation text-yellow-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">4. No Warranties</h2>
                            </div>
                            <div class="bg-amber-900/20 p-4 rounded-lg border border-amber-700/30">
                                <p class="text-amber-100 mb-0 leading-relaxed">
                                    <i class="bi bi-info-circle-fill text-yellow-400 me-2"></i>
                                    This website is provided "as is," with all faults, and GlobeCon Construction LLC expresses no representations or warranties of any kind related to this website or the materials contained on this website.
                                </p>
                            </div>
                        </div>

                        <!-- Limitation of Liability -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-orange-500/20 p-2 rounded me-3">
                                    <i class="bi bi-shield-slash-fill text-orange-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">5. Limitation of Liability</h2>
                            </div>
                            <div class="bg-amber-900/20 p-4 rounded-lg">
                                <p class="text-amber-100 mb-0 leading-relaxed">
                                    In no event shall GlobeCon Construction LLC, nor any of its officers, directors, and employees, be held liable for anything arising out of or in any way connected with your use of this website.
                                </p>
                            </div>
                        </div>

                        <!-- Indemnification -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-amber-500/20 p-2 rounded me-3">
                                    <i class="bi bi-shield-check-fill text-amber-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">6. Indemnification</h2>
                            </div>
                            <p class="text-amber-100 leading-relaxed">
                                You hereby indemnify to the fullest extent GlobeCon Construction LLC from and against any and all liabilities, costs, demands, causes of action, damages, and expenses arising in any way related to your breach of any of the provisions of these Terms.
                            </p>
                        </div>

                        <!-- Severability -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-yellow-500/20 p-2 rounded me-3">
                                    <i class="bi bi-scissors text-yellow-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">7. Severability</h2>
                            </div>
                            <p class="text-amber-100 leading-relaxed">
                                If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.
                            </p>
                        </div>

                        <!-- Variation of Terms -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-orange-500/20 p-2 rounded me-3">
                                    <i class="bi bi-arrow-repeat text-orange-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">8. Variation of Terms</h2>
                            </div>
                            <p class="text-amber-100 leading-relaxed">
                                GlobeCon Construction LLC is permitted to revise these Terms at any time as it sees fit, and by using this website you are expected to review these Terms on a regular basis.
                            </p>
                        </div>

                        <!-- Assignment -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-amber-500/20 p-2 rounded me-3">
                                    <i class="bi bi-arrow-left-right text-amber-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">9. Assignment</h2>
                            </div>
                            <p class="text-amber-100 leading-relaxed">
                                GlobeCon Construction LLC is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.
                            </p>
                        </div>

                        <!-- Entire Agreement -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-yellow-500/20 p-2 rounded me-3">
                                    <i class="bi bi-file-check-fill text-yellow-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">10. Entire Agreement</h2>
                            </div>
                            <p class="text-amber-100 leading-relaxed">
                                These Terms constitute the entire agreement between GlobeCon Construction LLC and you in relation to your use of this website and supersede all prior agreements and understandings.
                            </p>
                        </div>

                        <!-- Governing Law & Jurisdiction -->
                        <div class="mb-8">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-orange-500/20 p-2 rounded me-3">
                                    <i class="bi bi-building text-orange-400"></i>
                                </div>
                                <h2 class="h3 text-white mb-0">11. Governing Law & Jurisdiction</h2>
                            </div>
                            <div class="bg-amber-900/20 p-4 rounded-lg">
                                <p class="text-amber-100 mb-0 leading-relaxed">
                                    These Terms will be governed by and interpreted in accordance with the laws of the United Arab Emirates, and you submit to the non-exclusive jurisdiction of the state and federal courts located in UAE for the resolution of any disputes.
                                </p>
                            </div>
                        </div>

                        <!-- Enhanced Contact Information -->
                        <div class="mt-10 p-5 bg-gradient-to-r from-amber-900/30 to-yellow-900/30 rounded-2xl border border-amber-700/30 backdrop-blur-lg">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="h4 text-white mb-3">Questions About Our Terms?</h3>
                                    <p class="text-amber-100 mb-0">We're here to help you understand our terms and conditions.</p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <a href="{{ route('contact') }}" class="btn btn-warning btn-lg px-4 py-2 fw-semibold">
                                        <i class="bi bi-chat-dots-fill me-2"></i>
                                        Contact Legal
                                    </a>
                                </div>
                            </div>
                            <hr class="my-4 border-amber-700/50">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-amber-500/20 p-2 rounded me-3">
                                            <i class="bi bi-envelope-fill text-amber-400"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-amber-200 small">Legal Email</p>
                                            <p class="mb-0 text-white">legal@globeconconstruction.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-yellow-500/20 p-2 rounded me-3">
                                            <i class="bi bi-telephone-fill text-yellow-400"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-amber-200 small">Phone</p>
                                            <p class="mb-0 text-white">+971 4 580 0762</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-orange-500/20 p-2 rounded me-3">
                                            <i class="bi bi-geo-alt-fill text-orange-400"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-amber-200 small">Address</p>
                                            <p class="mb-0 text-white">PRIME BUSINESS CENTER A, Dubai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Acceptance Section -->
                        <div class="mt-6 text-center">
                            <div class="bg-gradient-to-r from-amber-500/10 to-yellow-500/10 p-4 rounded-lg border border-amber-500/20">
                                <h4 class="text-amber-300 mb-3">By using our website, you acknowledge that you have read and agree to these Terms of Use.</h4>
                                <p class="text-amber-200 mb-0 small">Last updated: {{ date('F j, Y') }}</p>
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
.bg-amber-900\/20:hover {
    background: rgba(120, 53, 15, 0.3) !important;
    transform: translateY(-2px);
    transition: all 0.3s ease;
    border-color: rgba(245, 158, 11, 0.4) !important;
}

/* Gold gradient text */
.gold-gradient {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Button enhancements */
.btn-warning {
    background: linear-gradient(135deg, #fbbf24, #f59e0b) !important;
    border: none !important;
    color: #1f2937 !important;
    font-weight: 600;
}

.btn-warning:hover {
    background: linear-gradient(135deg, #f59e0b, #d97706) !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3);
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

    // Add interactive hover effects
    const interactiveElements = document.querySelectorAll('.bg-amber-900\\/20');
    interactiveElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'all 0.3s ease';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>
@endsection