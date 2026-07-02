@extends('layouts.layouts_frontend.app')
@section('title')
    Coctact -us
@endsection

@section('body')
    <section class="contact-section py-5">

        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5">
                <span class="contact-tag">Get In Touch</span>

                <h2 class="contact-title">
                    Contact {{$settings->site_name}}
                </h2>

                <p class="contact-subtitle">
                    We'd love to hear from you. Whether you're looking to buy, sell,
                    or simply ask a question, our team is here to help.
                </p>
            </div>

            <div class="row g-5">

                <!-- Contact Info -->
                <div class="col-lg-5">

                    <div class="contact-info">

                        <div class="info-box">
                            <i class="bi bi-geo-alt-fill"></i>

                            <div>
                                <h5>Address</h5>
                                <p>{{$settings->country}},{{$settings->city}},{{$settings->street}}</p>
                            </div>
                        </div>

                        <div class="info-box">
                            <i class="bi bi-telephone-fill"></i>

                            <div>
                                <h5>Phone</h5>
                                <p>{{$settings->phone}}</p>
                            </div>
                        </div>

                        <div class="info-box">
                            <i class="bi bi-envelope-fill"></i>

                            <div>
                                <h5>Email</h5>
                                <p>{{$settings->site_email}}</p>
                            </div>
                        </div>

                        <div class="info-box">
                            <i class="bi bi-clock-fill"></i>

                            <div>
                                <h5>Working Hours</h5>
                                <p>Mon - Sat : 9:00 AM - 8:00 PM</p>
                            </div>
                        </div>

                        <div class="social-icons">

                            <a href="{{$settings->facebook}}"><i class="bi bi-facebook"></i></a>

                            <a href="{{$settings->instagram}}"><i class="bi bi-instagram"></i></a>

                            <a href="{{$settings->whatsapp}}"><i class="bi bi-whatsapp"></i></a>

                           

                        </div>

                    </div>

                </div>

                <!-- Contact Form -->




                <div class="col-lg-7">

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="row g-4">

                            <div class="col-md-6">

                                <input type="text" class="form-control contact-input" placeholder="Full Name"
                                    name="name" value="{{ old('name') }}">

                            </div>

                            @error('name')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="col-md-6">

                                <input type="email" class="form-control contact-input" placeholder="Email" name="email"
                                    value="{{ old('email') }}">

                            </div>

                            @error('email')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror



                            <div class="col-md-6">

                                <input type="text" class="form-control contact-input" placeholder="Subject"
                                    name="subject" value="{{ old('subject') }}">

                            </div>
                            @error('subject')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="col-12">

                                <textarea rows="6" class="form-control contact-input" placeholder="Write your message..." name="message">{{ old('message') }}</textarea>

                            </div>
                            @error('message')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror


                            <div class="col-12">

                                <button class="contact-btn">

                                    Send Message

                                    <i class="bi bi-send-fill ms-2"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- Google Map -->

    <section class="map-section">

        <iframe src="https://www.google.com/maps?q=Dubai&output=embed" loading="lazy">
        </iframe>

    </section>
@endsection

@push('js')

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const boxes = document.querySelectorAll(".info-box,.contact-input,.contact-btn");

            const observer = new IntersectionObserver(entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.style.opacity = "1";

                        entry.target.style.transform = "translateY(0)";

                    }

                });

            });

            boxes.forEach(box => {

                box.style.opacity = "0";

                box.style.transform = "translateY(40px)";

                box.style.transition = ".7s";

                observer.observe(box);

            });

        });
    </script>
@endpush
