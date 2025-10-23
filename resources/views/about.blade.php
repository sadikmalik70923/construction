@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="container">
    <div class="row align-items-center g-4">
        <div class="col-12 col-lg-6">
            <h1 class="display-6 fw-bold mb-3">About Our Construction Company</h1>
            <p class="text-muted mb-3">
                We deliver high‑quality residential, commercial, and infrastructure projects with a focus on safety,
                sustainability, and on‑time delivery. Our experienced team turns complex challenges into elegant solutions.
            </p>
            <ul class="list-unstyled mb-4">
                <li class="mb-2">✔ Experienced engineers and architects</li>
                <li class="mb-2">✔ End‑to‑end project management</li>
                <li class="mb-2">✔ Commitment to quality and safety</li>
            </ul>
            <a href="/services" class="btn btn-primary">Our Services</a>
        </div>
        <div class="col-12 col-lg-6">
            <img src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?q=80&w=1600&auto=format&fit=crop" 
                 alt="About Constructo" class="img-fluid rounded shadow">
        </div>
    </div>
    
    <div class="row mt-5 g-4">
        <div class="col-12 col-md-4">
            <div class="p-4 bg-white rounded shadow h-100">
                <h5 class="fw-bold">Mission</h5>
                <p class="mb-0 text-muted">Deliver durable, efficient, and affordable construction solutions.</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="p-4 bg-white rounded shadow h-100">
                <h5 class="fw-bold">Vision</h5>
                <p class="mb-0 text-muted">Shape skylines with sustainable and innovative designs.</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="p-4 bg-white rounded shadow h-100">
                <h5 class="fw-bold">Values</h5>
                <p class="mb-0 text-muted">Integrity, safety, excellence, and client success.</p>
            </div>
        </div>
    </div>
</section>
@endsection
