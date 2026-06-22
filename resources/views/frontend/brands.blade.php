@extends('layouts.layouts_frontend.app')

@section('title')
    Brand Cars |  {{ $brands->name }}
@endsection

@section('body')

<!-- Brand Hero -->
<section class="brand-hero-section">
    <div class="container text-center">

        <h1 class="brand-title">
            {{ $brands->name }} Collection
        </h1>

        <p class="brand-subtitle">
            Explore premium {{ $brands->name }} vehicles available in our showroom.
        </p>

    </div>
</section>

<!-- Cars Section -->
<section class="cars-section py-5">

    <div class="container">

        <div class="row g-4">

            @forelse ($brands->cars as $car)

                <div class="col-md-6 col-lg-4">

                    <div class="car-card">

                        <!-- Image -->
                        <div class="car-image">

                            <img 
                                src="{{ asset($car->carimages->first()->path ?? 'assets/images/sell-car.jpg') }}"
                                alt="{{ $car->name }}"
                            >

                            <span class="car-badge">
                                {{ $brands->name }}
                            </span>

                        </div>

                        <!-- Content -->
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
                                    {{ $car->mileage }} KM
                                </span>

                                <span class="car-spec">
                                    <i class="bi bi-gear"></i>
                                    {{ ucfirst($car->transmission) }}
                                </span>

                            </div>

                            <a href="{{route('showcardatails',$car->id)}}" class="btn btn-dark w-100 mt-4">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">

                    <h4>No cars available for this brand.</h4>

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection