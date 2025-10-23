@extends('layouts.app')

@section('title', 'News & Insights | GLOBECON CONSTRUCTION LLC')

@section('content')
<section class="container py-5">
    <h1 class="h3 fw-bold mb-3">News & Insights</h1>
    <p class="text-muted mb-4">Latest updates, announcements and industry insights from Globecon Construction LLC.</p>

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Groundbreaking on New Commercial Tower</h5>
                <small class="text-muted">This week</small>
            </div>
            <p class="mb-1 small text-muted">Our team begins construction on a 55-floor Class A office tower.</p>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Sustainability Report 2025</h5>
                <small class="text-muted">Last month</small>
            </div>
            <p class="mb-1 small text-muted">Highlights of our waste reduction and energy efficiency initiatives.</p>
        </a>
    </div>
</section>
@endsection
