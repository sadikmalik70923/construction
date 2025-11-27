@extends('layouts.app')

@section('title', 'Our Projects | Globecon Construction')

@section('content')
<!-- 🌆 Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-24 text-center">
  <div class="absolute inset-0 bg-[url('/images/bg-pattern.png')] opacity-10"></div>
  <div class="relative container mx-auto px-6">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Our Projects</h1>
    <p class="text-gray-200 max-w-2xl mx-auto">Discover the landmark projects that define our legacy of quality, safety, and innovation.</p>
  </div>
</section>

<!-- 🧱 Project Categories -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 text-center mb-12">
    <div class="flex flex-wrap justify-center gap-4">
      <button class="filter-btn bg-blue-600 text-white px-5 py-2 rounded-full font-medium hover:bg-blue-700 transition" data-category="all">All</button>
      <button class="filter-btn bg-white text-gray-700 border border-gray-300 px-5 py-2 rounded-full font-medium hover:bg-blue-100" data-category="residential">Residential</button>
        </div>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-card" data-category="commercial">
      <div class="relative group overflow-hidden rounded-2xl shadow-lg bg-white">
        <img src="/images/projects/project2.jpg" alt="Corporate Tower" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <a href="#" class="text-white font-semibold text-lg">View Details</a>
        </div>
      </div>
      <div class="p-5">
        <h3 class="text-xl font-bold mb-2 text-gray-800">Corporate Tower</h3>
        <p class="text-gray-600">A 40-floor business hub in the city’s financial district.</p>
      </div>
    </div>

    <!-- Project 3 -->
    <div class="project-card" data-category="infrastructure">
      <div class="relative group overflow-hidden rounded-2xl shadow-lg bg-white">
        <img src="/images/projects/project3.jpg" alt="Highway Construction" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <a href="#" class="text-white font-semibold text-lg">View Details</a>
        </div>
      </div>
      <div class="p-5">
        <h3 class="text-xl font-bold mb-2 text-gray-800">Highway Construction</h3>
        <p class="text-gray-600">Smart infrastructure project improving regional connectivity.</p>
      </div>
    </div>

    <!-- Add More Projects -->
    <div class="project-card" data-category="residential">
      <div class="relative group overflow-hidden rounded-2xl shadow-lg bg-white">
        <img src="/images/projects/project4.jpg" alt="Luxury Villas" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <a href="#" class="text-white font-semibold text-lg">View Details</a>
        </div>
      </div>
      <div class="p-5">
        <h3 class="text-xl font-bold mb-2 text-gray-800">Premium Villas</h3>
        <p class="text-gray-600">Spacious luxury villas with scenic views and eco-friendly design.</p>
      </div>
    </div>

  </div>
</section>

<!-- JS: Filter Functionality -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".filter-btn");
    const projects = document.querySelectorAll(".project-card");

    buttons.forEach(btn => {
      btn.addEventListener("click", () => {
        const category = btn.getAttribute("data-category");
        buttons.forEach(b => b.classList.remove("bg-blue-600", "text-white"));
        btn.classList.add("bg-blue-600", "text-white");

        projects.forEach(card => {
          if (category === "all" || card.dataset.category === category) {
            card.classList.remove("hidden");
          } else {
            card.classList.add("hidden");
          }
        });
      });
    });
  });
</script>
@endsection
