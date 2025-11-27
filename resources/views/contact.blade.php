@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 py-16 flex items-center justify-center relative overflow-hidden">
  <!-- Video Background -->
  <div class="absolute inset-0 overflow-hidden">
    <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-30">
      <source src="{{ asset('images/videos/WhatsApp Video 2025-11-23 at 6.40.36 PM.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <!-- Fallback gradient background if video doesn't load -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900"></div>
  </div>

  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-32 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
    <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse delay-500"></div>
  </div>

  <!-- Floating Particles -->
  <div class="absolute inset-0">
    <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full opacity-60 animate-float"></div>
    <div class="absolute top-1/3 right-1/4 w-1 h-1 bg-blue-300 rounded-full opacity-40 animate-float delay-700"></div>
    <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-cyan-400 rounded-full opacity-50 animate-float delay-1200"></div>
    <div class="absolute top-2/3 right-1/3 w-2 h-2 bg-purple-300 rounded-full opacity-60 animate-float delay-1800"></div>
  </div>

  <div class="max-w-6xl w-full px-6 relative z-10">
    
    <!-- Enhanced Header -->
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <div class="w-20 h-1 bg-gradient-to-r from-cyan-400 to-blue-500 mx-auto mb-2 rounded-full"></div>
        <h1 class="text-5xl md:text-7xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 mb-4 tracking-tight">
          GET IN TOUCH
        </h1>
        <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-cyan-400 mx-auto mt-2 rounded-full"></div>
      </div>
      <p class="text-gray-300 text-xl max-w-3xl mx-auto leading-relaxed">
        Ready to bring your vision to life? Let's create something extraordinary together. 
        <span class="block text-cyan-300 font-semibold mt-2">Your project, our passion.</span>
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      
      <!-- Enhanced Contact Form -->
      <div class="relative group">
        <!-- Glow Effect -->
        <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-700 rounded-3xl blur opacity-30 group-hover:opacity-50 transition duration-1000 group-hover:duration-200 animate-tilt"></div>
        
        <div class="relative bg-gray-900/80 backdrop-blur-xl rounded-2xl shadow-2xl p-8 border border-gray-700/50">
          <!-- Form Header -->
          <div class="flex items-center mb-8">
            <div class="w-3 h-3 bg-red-500 rounded-full mr-2 animate-pulse"></div>
            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
            <div class="w-3 h-3 bg-green-500 rounded-full mr-4"></div>
            <h2 class="text-2xl font-bold text-white">Send us a Message</h2>
          </div>

          <!-- Success/Error Messages -->
          @if(session('success'))
            <div class="mb-6 p-4 bg-green-900/50 border border-green-500 rounded-xl text-green-300 backdrop-blur-sm transform transition-all duration-300 scale-105">
              <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
              </div>
            </div>
          @endif

          @if($errors->any())
            <div class="mb-6 p-4 bg-red-900/50 border border-red-500 rounded-xl text-red-300 backdrop-blur-sm transform transition-all duration-300 scale-105">
              <ul class="list-disc list-inside space-y-1">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <!-- Contact Form -->
          <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
            @csrf

            <!-- Name Field -->
            <div class="relative group">
              <input type="text" id="name" name="name" value="{{ old('name') }}" required
                class="peer w-full bg-gray-800/50 border-2 border-gray-700 rounded-xl p-4 pt-6 text-white placeholder-transparent focus:outline-none focus:border-cyan-500 transition-all duration-300 focus:bg-gray-800/70"
                placeholder="Your Name" />
              <label for="name"
                class="absolute left-4 top-2 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-focus:top-2 peer-focus:text-xs peer-focus:text-cyan-400">
                <span class="flex items-center">
                  <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                  </svg>
                  FULL NAME
                </span>
              </label>
            </div>

            <!-- Email Field -->
            <div class="relative group">
              <input type="email" id="email" name="email" value="{{ old('email') }}" required
                class="peer w-full bg-gray-800/50 border-2 border-gray-700 rounded-xl p-4 pt-6 text-white placeholder-transparent focus:outline-none focus:border-blue-500 transition-all duration-300 focus:bg-gray-800/70"
                placeholder="you@example.com" />
              <label for="email"
                class="absolute left-4 top-2 text-gray-400 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-focus:top-2 peer-focus:text-xs peer-focus:text-blue-400">
                <span class="flex items-center">
                  <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                  EMAIL ADDRESS
                </span>
              </label>
            </div>

            <!-- Message Field -->
            <div class="relative group">
              <textarea id="message" name="message" rows="5" required
                class="peer w-full bg-gray-800/50 border-2 border-gray-700 rounded-xl p-4 pt-8 text-white placeholder-transparent focus:outline-none focus:border-purple-500 transition-all duration-300 focus:bg-gray-800/70 resize-none"
                placeholder="Your Message">{{ old('message') }}</textarea>
              <label for="message"
                class="absolute left-4 top-3 text-gray-400 text-sm transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-focus:top-3 peer-focus:text-xs peer-focus:text-purple-400">
                <span class="flex items-center">
                  <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                  </svg>
                  YOUR MESSAGE
                </span>
              </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
              class="w-full group relative overflow-hidden bg-gradient-to-r from-cyan-600 to-blue-700 text-white py-4 rounded-xl font-bold text-lg shadow-2xl transition-all duration-500 hover:from-cyan-500 hover:to-blue-600 transform hover:scale-[1.02] hover:shadow-cyan-500/25">
              <span class="relative z-10 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                LAUNCH MESSAGE
              </span>
              <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -skew-x-12 transform translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
            </button>
          </form>
        </div>
      </div>

      <!-- Enhanced Contact Info / Map -->
      <div class="flex flex-col space-y-8">

        <!-- Office Location -->
        <div class="relative group">
          <div class="absolute -inset-1 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl blur opacity-30 group-hover:opacity-50 transition duration-1000"></div>
          <div class="relative bg-gray-900/80 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50">
            <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
              <span class="w-3 h-3 bg-green-500 rounded-full mr-3 animate-pulse"></span>
              🏢 OUR HEADQUARTERS
            </h2>
            <p class="text-gray-300 mb-4 text-lg">
              PRIME BUSINESS CENTER A<br>
              Al Barsha South Fourth A1402
            </p>
            <div class="relative rounded-xl overflow-hidden border-2 border-gray-600/50 transform transition-all duration-500 hover:scale-[1.02] hover:border-cyan-500/50">
              <iframe
                class="w-full h-64"
                src="https://www.google.com/maps?q=Diamond%20Business%20Centre%20208%20A%20Arjaan%20Al%20Barsha%20South%203%20Arjaan%20Dubai&output=embed"
                style="border:0; filter: grayscale(0.3) contrast(1.1);"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
              <div class="absolute inset-0 bg-gradient-to-t from-gray-900/20 to-transparent pointer-events-none"></div>
            </div>
          </div>
        </div>

        <!-- Contact Details -->
        <div class="relative group">
          <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-30 group-hover:opacity-50 transition duration-1000"></div>
          <div class="relative bg-gradient-to-br from-purple-900/80 to-pink-800/80 backdrop-blur-xl p-6 rounded-2xl border border-purple-500/30 text-white shadow-2xl">
            <h2 class="text-2xl font-bold mb-4 flex items-center">
              <span class="w-3 h-3 bg-pink-500 rounded-full mr-3 animate-pulse"></span>
              📞 CONTACT CHANNELS
            </h2>
            
            <div class="space-y-4">
              <div class="flex items-center group/item hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover/item:bg-purple-500 transition-colors">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-purple-200">Email</p>
                  <p class="text-lg">info@globeconconstruction.ae</p>
                </div>
              </div>

              <div class="flex items-center group/item hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-12 h-12 bg-pink-600 rounded-xl flex items-center justify-center mr-4 group-hover/item:bg-pink-500 transition-colors">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-pink-200">Phone</p>
                  <p class="text-lg">+971 4 580 0762</p>
                </div>
              </div>
            </div>

            <div class="mt-6 p-4 bg-black/20 rounded-xl border border-white/10">
              <p class="text-sm text-purple-200 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Available Mon–Sat, 9:00 AM – 6:00 PM GST
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
@keyframes float {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(180deg); }
}
@keyframes tilt {
  0%, 100% { transform: rotate(0deg); }
  25% { transform: rotate(0.5deg); }
  75% { transform: rotate(-0.5deg); }
}
.animate-float {
  animation: float 6s ease-in-out infinite;
}
.animate-tilt {
  animation: tilt 10s ease-in-out infinite;
}
</style>
@endsection