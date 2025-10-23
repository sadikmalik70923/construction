@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<section class="container">
    <h1 class="display-6 fw-bold mb-4">Frequently Asked Questions</h1>

    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="q1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
                    What types of construction projects do you handle?
                </button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We manage residential, commercial, and infrastructure projects including new builds, renovations, and civil works.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
                    How long does a typical project take?
                </button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Timelines vary by scope. After a site visit and planning session, we provide a detailed schedule and milestones.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
                    Are your projects insured and compliant with safety standards?
                </button>
            </h2>
            <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes. We are fully insured and adhere to local building codes and rigorous on‑site safety protocols.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="q4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a4" aria-expanded="false" aria-controls="a4">
                    How can I request a quote or consultation?
                </button>
            </h2>
            <div id="a4" class="accordion-collapse collapse" aria-labelledby="q4" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Use the <a href="/contact">Contact</a> page to share project details. Our team will reach out to schedule a consultation.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
