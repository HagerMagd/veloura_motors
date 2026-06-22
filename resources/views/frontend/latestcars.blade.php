@extends('layouts.layouts_frontend.app')
@section('title')
   Latests Car Datails
@endsection
@section('body')

{{-- cars --}}
   
 <section class="cars-section" id="cars">
        <div class="container">
            <h2 class="section-title">OUR LATEST CARS </h2>
            <p class="section-subtitle">Explore our handpicked selection of premium automobiles ready for you.</p>
            <div class="row g-4">

                @foreach ($latest_cars as $latest_car)
                    <div class="col-md-6 col-lg-4">

                        <div class="car-card">

                            <div class="car-image">

                                <img src="{{ asset( $latest_car->carimages->first()->path ?? 'assets/images/sell-car.jpg') }}"
                                    alt="{{  $latest_car->name }}">

                                

                            </div>

                            <div class="car-content">

                                <h4>{{  $latest_car->name }}</h4>

                                <div class="car-price">
                                    ${{ number_format( $latest_car->price) }}
                                </div>

                                <div class="car-specs">

                                    <span class="car-spec">
                                        <i class="bi bi-fuel-pump"></i>
                                        {{ ucfirst( $latest_car->fuel_type) }}
                                    </span>

                                    <span class="car-spec">
                                        <i class="bi bi-speedometer"></i>
                                        {{  $latest_car->mileage }} km/h
                                    </span>

                                    <span class="car-spec">
                                        <i class="bi bi-gear"></i>
                                        {{ ucfirst( $latest_car->transmission) }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>


          
        </div>
         {{ $latest_cars->links()}}
    </section>
@endsection