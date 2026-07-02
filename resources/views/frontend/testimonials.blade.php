@extends('layouts.layouts_frontend.app')
@section('title')
    testimonials
@endsection

@section('body')
    <section class="testimonial-page py-5">

        <div class="container">

            <div class="text-center mb-5">
                <span class="section-tag">Testimonials</span>

                <h2 class="section-title">
                    What Our Clients Say
                </h2>

                <p class="section-subtitle">
                    Trusted by luxury car lovers across the country.
                </p>
            </div>

            <div class="row g-4">

                @foreach ($testimonials as $testimonial)

                    <div class="col-lg-4 col-md-6">

                        <div class="testimonial-card">

                            <div class="testimonial-header">

                                <img src="{{ asset($testimonial->image) }}" alt="">

                                <div>
                                    <h5>{{ $testimonial->name }}</h5>
                                    <span>{{ $testimonial->job_title }}</span>
                                </div>

                            </div>

                            <div class="testimonial-rating">
                                @for ($i=1;$i<=5;$i++)
                                    @if ($i <= $testimonial->rating)
                                        <i class="bi bi-star-fill"></i>
                                    @else
                                        <i class="bi bi-star"></i>
                                    @endif

                                @endfor
             

                
            </div>

            <p>{{ $testimonial->comment }}</p>

        </div>

        </div>

        @endforeach

        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $testimonials->links() }}
        </div>

        </div>

    </section>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const cards = document.querySelectorAll('.testimonial-card');

            const observer = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {
                        entry.target.classList.add('show-card');
                    }

                });

            });

            cards.forEach(card => observer.observe(card));

        });
    </script>
@endpush
