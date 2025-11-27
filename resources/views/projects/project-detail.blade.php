@extends('layouts.app')

@section('title', $title ?? 'Project Details')

@section('content')
<section class="relative h-[70vh] overflow-hidden">
  <img src="{{ $heroImage ?? asset('images/projects/default.jpg') }}" 
       alt="{{ $title ?? 'Project' }}" 
       class="absolute inset-0 w-full h-full object-cover object-center">
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>

  <div class="relative z-10 flex items-center justify-center h-full text-center text-white px-6">
    <div class="max-w-4xl">
      <h1 class="text-5xl md:text-6xl font-extrabold mb-4">{{ $title ?? 'Project Title' }}</h1>
      <p class="text-lg text-slate-200 mb-8">{{ $subtitle ?? 'A premium construction project by Globecon.' }}</p>
      <a href="{{ route('projects') }}" class="inline-flex items-center gap-3 px-6 py-3 rounded-full bg-yellow-400 text-slate-900 font-semibold hover:bg-yellow-300 transition">
        ← Back to Projects
      </a>
    </div>
  </div>
</section>

<section class="py-20 bg-slate-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 grid gap-12 lg:grid-cols-2 items-center">
    <div class="space-y-6">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">About the Project</h2>
      <p class="text-slate-700 leading-relaxed">{{ $description ?? 'Project details will go here.' }}</p>
      @if(!empty($highlights))
      <ul class="grid grid-cols-2 gap-4 text-slate-600 mt-6">
        @foreach($highlights as $point)
          <li class="flex items-center gap-2">
            <span class="text-yellow-500 text-lg">●</span> {{ $point }}
          </li>
        @endforeach
      </ul>
      @endif
    </div>

    @if(!empty($mainImage))
    <div class="rounded-2xl overflow-hidden shadow-2xl">
      <img src="{{ $mainImage }}" alt="{{ $title ?? 'Project' }}" class="w-full h-[480px] object-cover">
    </div>
    @endif
  </div>
</section>

@if(!empty($gallery))
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <h2 class="text-3xl md:text-4xl font-extrabold text-center text-slate-900 mb-12">Project Gallery</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($gallery as $img)
      <div class="overflow-hidden rounded-2xl shadow-lg group relative">
        <img src="{{ asset($img) }}" class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-700" alt="Project image">
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <span class="text-white text-sm font-medium tracking-wide">View</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<section class="py-20 bg-gradient-to-r from-slate-800 to-black text-white text-center">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Inspired by this Project?</h2>
    <p class="text-lg text-slate-300 mb-8">
      Let’s collaborate to build your next landmark — sustainable, iconic, and future-ready.
    </p>
    <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 px-8 py-3 rounded-full border border-yellow-400 text-yellow-400 font-semibold hover:bg-yellow-400 hover:text-black transition">
      Contact Globecon
    </a>
  </div>
</section>
@endsection
