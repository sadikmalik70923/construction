@extends('layouts.app')

@section('title', 'Our Masterpieces')

@section('content')

<!-- 🌆 Fixed Glass Navbar (same as modern page) -->

<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-lg bg-black/40 border-b border-yellow-400/30 text-white">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <h1 class="text-xl md:text-2xl font-bold tracking-wide text-yellow-400">GLOBECON</h1>
    <ul class="hidden md:flex space-x-8 text-sm uppercase font-medium">
      <li><a href="/" class="hover:text-yellow-400 transition">Home</a></li>
      <li><a href="/projects_modern" class="hover:text-yellow-400 transition">Modern Projects</a></li>
      <li><a href="/projects_new" class="text-yellow-400">Our Masterpieces</a></li>
    </ul>
  </div>
</nav>

<!-- 🏙️ Hero Section -->

<section class="relative h-[70vh] flex flex-col items-center justify-center text-center text-white bg-gradient-to-br from-black via-blue-950 to-gray-900 overflow-hidden">
  <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-40"></div>
  <div class="relative z-10 px-6 mt-20">
    <h2 class="text-5xl md:text-6xl font-bold mb-4 text-yellow-400" data-aos="fade-up">Our Masterpieces</h2>
    <p class="text-lg md:text-xl max-w-2xl mx-auto text-gray-200" data-aos="fade-up" data-aos-delay="150">
      Discover our signature projects built with innovation and excellence.
    </p>
  </div>
</section>

<!-- 🧱 Project Gallery -->

<section class="py-24 bg-gradient-to-b from-gray-950 via-black to-blue-950 text-white relative">
  <div class="max-w-7xl mx-auto px-6">
    <h3 class="text-3xl md:text-4xl font-semibold mb-10 text-center text-yellow-400" data-aos="fade-up">Architectural Highlights</h3>

```
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
  <!-- Card 1 -->
  <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up">
    <img src="https://images.unsplash.com/photo-1529429611273-43e3366dc121?auto=format&fit=crop&w=1000&q=80" alt="Luxury Tower" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
    <div class="absolute bottom-6 left-6">
      <h4 class="text-xl font-bold text-yellow-400">Skyline Tower</h4>
      <p class="text-sm text-gray-300">Dubai, UAE</p>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1000&q=80" alt="Resort Villa" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
    <div class="absolute bottom-6 left-6">
      <h4 class="text-xl font-bold text-yellow-400">Azure Resort</h4>
      <p class="text-sm text-gray-300">Maldives</p>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
    <img src="https://images.unsplash.com/photo-1586105251261-72a756497a12?auto=format&fit=crop&w=1000&q=80" alt="Business Center" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
    <div class="absolute bottom-6 left-6">
      <h4 class="text-xl font-bold text-yellow-400">Nova Business Center</h4>
      <p class="text-sm text-gray-300">London, UK</p>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
    <img src="https://images.unsplash.com/photo-1539894009-73b1cf0b0b8a?auto=format&fit=crop&w=1000&q=80" alt="Glass Office" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
    <div class="absolute bottom-6 left-6">
      <h4 class="text-xl font-bold text-yellow-400">Imperial Glass HQ</h4>
      <p class="text-sm text-gray-300">Singapore</p>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
    <img src="https://images.unsplash.com/photo-1536376072261-38c75010e6c9?auto=format&fit=crop&w=1000&q=80" alt="Seaside Villa" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
    <div class="absolute bottom-6 left-6">
      <h4 class="text-xl font-bold text-yellow-400">Gold Coast Residence</h4>
      <p class="text-sm text-gray-300">Australia</p>
    </div>
  </div>

  <!-- Card 6 -->
  <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
    <img src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?auto=format&fit=crop&w=1000&q=80" alt="Cityscape Tower" class="w-full h-72 object-cover transform group-hover:scale-110 transition duration-700">
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
    <div class="absolute bottom-6 left-6">
      <h4 class="text-xl font-bold text-yellow-400">Crown Cityscape</h4>
      <p class="text-sm text-gray-300">New York, USA</p>
    </div>
  </div>
</div>
```

  </div>
</section>
@endsection
