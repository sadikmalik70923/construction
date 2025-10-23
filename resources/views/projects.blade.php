@extends('layouts.app')

@section('title', 'Projects | GLOBECON CONSTRUCTION LLC')

@section('content')
<section class="container py-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 fw-bold mb-0">Our Projects</h1>
        <a href="/contact" class="btn btn-primary">Enquire Now</a>
    </div>
    <p class="text-muted">Explore a selection of our commercial, residential and infrastructure projects delivered with quality and precision.</p>

    <div class="row g-4 mt-1">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1486304873000-235643847519?q=80&w=1200&auto=format&fit=crop" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">High-Rise Commercial Tower</h5>
                    <p class="card-text small text-muted">Downtown business district • Delivered on schedule</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1494145904049-0dca59b4bbad?q=80&w=1200&auto=format&fit=crop" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">Premium Residential Community</h5>
                    <p class="card-text small text-muted">Sustainable design • Modern amenities</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?q=80&w=1200&auto=format&fit=crop" alt="Project 3">
                <div class="card-body">
                    <h5 class="card-title">Infrastructure Upgrades</h5>
                    <p class="card-text small text-muted">Roads, utilities and transport hubs</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
