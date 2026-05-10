@extends('layouts.layouts_frontend.app')
@section('title')
   Featured Car Datails
@endsection
@section('body')

{{-- cars --}}
   
 <section class="cars-section" id="cars">
        <div class="container">
            <h2 class="section-title">Featured Vehicles</h2>
            <p class="section-subtitle">Explore our handpicked selection of premium automobiles ready for you.</p>
            <div class="row g-4">

                @foreach ($cars as $car)
                    <div class="col-md-6 col-lg-4">

                        <div class="car-card">

                            <div class="car-image">

                                <img src="{{ asset($car->carimages->first()->path ?? 'assets/images/sell-car.jpg') }}"
                                    alt="{{ $car->name }}">

                                

                            </div>

                            <div class="car-content">

                                <h4>{{ $car->name }}</h4>

                                <div class="car-price">
                                    ${{ number_format($car->price) }}
                                </div>

                                <div class="car-specs">

                                    <span class="car-spec">
                                        <i class="bi bi-fuel-pump"></i>
                                        {{ ucfirst($car->fuel_type) }}
                                    </span>

                                    <span class="car-spec">
                                        <i class="bi bi-speedometer"></i>
                                        {{ $car->mileage }} km/h
                                    </span>

                                    <span class="car-spec">
                                        <i class="bi bi-gear"></i>
                                        {{ ucfirst($car->transmission) }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>


          
        </div>
         {{$cars->links()}}
    </section>
@endsection