@extends('layouts.layouts_frontend.app')

@section('title')
    Car Details
@endsection

@section('body')

<!-- Car Details Section -->
<section class="car-details-section">

    <div class="container">

        <div class="row g-5 align-items-center">

            <!-- Images -->
            <div class="col-lg-7">
                 @if ($car_datalis->carimages->count() > 0 )
                 <div class="main-car-image">
                    <img src="{{ asset($car_datalis->carimages->first()->path) }}" alt="Car Image">
                </div>
                <div class="row g-3 mt-3">
                    @foreach ($car_datalis->carimages as $image  )
                         <div class="col-3">
                        <img src="{{ asset($image->path) }}" class="gallery-img" alt="">
                    </div>
                    @endforeach
                    
                @else
                    <h3>No Images for this car</h3>
                @endif


                </div>

            </div>

            <!-- Content -->
            <div class="col-lg-5">

                <div class="car-details-content">

                    <span class="car-status">
                        Featured Vehicle
                    </span>

                    <h1 class="car-title">
                       {{$car_datalis->name}}
                    </h1>

                    <div class="car-price">
                        {{ $car_datalis->price }}
                    </div>

                    <p class="car-description">
                        {{ $car_datalis->desc }}
                    </p>

                    <!-- Specifications -->
                    <div class="car-specifications">

                        <div class="spec-box">
                            <i class="bi bi-calendar"></i>
                            <div>
                                <span>Year</span>
                                <h6>{{ $car_datalis->year }}</h6>
                            </div>
                        </div>

                        <div class="spec-box">
                            <i class="bi bi-speedometer2"></i>
                            <div>
                                <span>Mileage</span>
                                <h6>{{$car_datalis->mileage}}</h6>
                            </div>
                        </div>

                        <div class="spec-box">
                            <i class="bi bi-fuel-pump"></i>
                            <div>
                                <span>Fuel</span>
                                <h6>{{$car_datalis->fuel_type}}</h6>
                            </div>
                        </div>

                        <div class="spec-box">
                            <i class="bi bi-gear"></i>
                            <div>
                                <span>Transmission</span>
                                <h6>{{$car_datalis->transmission}}</h6>
                            </div>
                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="car-buttons">

                        <a href="{{route('booking.request',$car_datalis->id)}}" class="btn btn-dark btn-lg w-100">
                            Book Now
                        </a>

                        <a href="#" class="btn btn-outline-dark btn-lg w-100 mt-3">
                            Contact Dealer
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection