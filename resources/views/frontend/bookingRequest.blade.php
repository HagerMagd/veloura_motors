@extends('layouts.layouts_frontend.app')
@section('title')
    Booking Request 
@endsection
@section('body')
    <section class="booking-section py-5">
    <div class="container">

        <div class="row g-5">

            <!-- Car Summary -->
            <div class="col-lg-5">

                <div class="car-summary-card">

                    <img src="{{ asset($car->carimages->first()->path) }}"
                        class="img-fluid rounded-4 mb-4 main-booking-img"
                        alt="Car Image">

                    <h2 class="car-title">
                        {{ $car->name }}
                    </h2>

                    <div class="car-info mt-4">

                        <div class="info-item">
                            <span>Brand:</span>
                            <strong>{{ $car->brand->name }}</strong>
                        </div>

                        <div class="info-item">
                            <span>Model:</span>
                            <strong>{{ $car->model }}</strong>
                        </div>

                        <div class="info-item">
                            <span>Year:</span>
                            <strong>{{ $car->year }}</strong>
                        </div>

                        <div class="info-item">
                            <span>Price:</span>
                            <strong>${{ $car->price }}</strong>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Booking Form -->
            <div class="col-lg-7">

                <div class="booking-form-card">

                    <h2 class="mb-4">
                        Request This Car
                    </h2>

                    <form action="" method="POST">

                        @csrf

                        <div class="row g-4">

                            <div class="col-md-6">
                                <label class="form-label">
                                    Full Name
                                </label>

                                <input type="text"
                                    class="form-control custom-input"
                                    placeholder="Enter your name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">
                                    Phone Number
                                </label>

                                <input type="text"
                                    class="form-control custom-input"
                                    placeholder="Enter your phone">
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    Email Address
                                </label>

                                <input type="email"
                                    class="form-control custom-input"
                                    placeholder="Enter your email">
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    Message
                                </label>

                                <textarea rows="5"
                                    class="form-control custom-input"
                                    placeholder="I want to book this car..."></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn booking-btn w-100">
                                    Send Request
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection