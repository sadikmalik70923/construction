@extends('layouts.app')

@section('title', 'Services')

@section('content')
<section class="container">
    <h1 class="display-6 fw-bold mb-4">Our Construction Services</h1>
    <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Residential Construction">
                <div class="card-body">
                    <h5 class="card-title">Residential Construction</h5>
                    <p class="card-text text-muted">Custom homes, renovations, and extensions built with craftsmanship and care.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1528372444006-1bfc81acab02?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Commercial Projects">
                <div class="card-body">
                    <h5 class="card-title">Commercial Projects</h5>
                    <p class="card-text text-muted">Retail, office, and industrial spaces delivered on time and on budget.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1517059224940-d4af9eec41e5?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Infrastructure & Civil Works">
                <div class="card-body">
                    <h5 class="card-title">Infrastructure & Civil Works</h5>
                    <p class="card-text text-muted">Roads, bridges, and utilities executed with safety and durability.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Design & Planning">
                <div class="card-body">
                    <h5 class="card-title">Design & Planning</h5>
                    <p class="card-text text-muted">Architectural design, permits, and project management from start to finish.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1604147706289-06f634b40a3d?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Renovation & Remodeling">
                <div class="card-body">
                    <h5 class="card-title">Renovation & Remodeling</h5>
                    <p class="card-text text-muted">Upgrade existing spaces with modern materials and energy‑efficient solutions.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1562259949-e8e7689d782e?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Maintenance & Repairs">
                <div class="card-body">
                    <h5 class="card-title">Maintenance & Repairs</h5>
                    <p class="card-text text-muted">Preventive maintenance and emergency repairs to keep your assets sound.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
