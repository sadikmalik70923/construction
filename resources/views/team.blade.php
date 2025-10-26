@extends('layouts.app')

@section('title', 'Our Team - GlobeCon Construction')

@section('content')
<!-- 👥 Our Team Section -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-12 text-center">
    <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Meet Our Expert Team</h2>
    <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
      Our strength lies in the dedication, experience, and professionalism of our team. Together, we build dreams into reality.
    </p>

    <!-- 🌀 Swiper Slider -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- 🧑‍🔧 Team Member 1 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-500">
            <img src="{{ asset('images/team1.jpg') }}" alt="John Smith"
                 class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">John Smith</h3>
              <p class="text-blue-600 font-medium mb-4">Chief Engineer</p>
              <div class="flex justify-center gap-4 text-gray-500">
                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- 👷 Team Member 2 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-500">
            <img src="{{ asset('images/team2.jpg') }}" alt="Sarah Johnson"
                 class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">Sarah Johnson</h3>
              <p class="text-blue-600 font-medium mb-4">Project Manager</p>
              <div class="flex justify-center gap-4 text-gray-500">
                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- 🧰 Team Member 3 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-500">
            <img src="{{ asset('images/team3.jpg') }}" alt="Michael Brown"
                 class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">Michael Brown</h3>
              <p class="text-blue-600 font-medium mb-4">Architect</p>
              <div class="flex justify-center gap-4 text-gray-500">
                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- 🏗️ Team Member 4 -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-500">
            <img src="{{ asset('images/team4.jpg') }}" alt="Emily Davis"
                 class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">Emily Davis</h3>
              <p class="text-blue-600 font-medium mb-4">Civil Supervisor</p>
              <div class="flex justify-center gap-4 text-gray-500">
                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slider Controls -->
      <div class="swiper-pagination mt-6"></div>
    </div>
  </div>
</section>

<!-- 🌀 Swiper & FontAwesome -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a2e0e6ad3b.js" crossorigin="anonymous"></script>

<script>
  new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: { delay: 2500, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination", clickable: true },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
</script>
@endsection
