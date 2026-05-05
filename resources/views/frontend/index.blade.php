@extends('layouts.layouts_frontend.app')
@section('title')
    Veloura Motors
@endsection

@section('body')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate-fade-left">
                    <h1 class="hero-title">{{ $hero_section->title }}</h1>
                    <p class="hero-subtitle">{{ $hero_section->subtitle }}.</p>
                    <div class="hero-buttons">
                        <a href="#cars" class="btn btn-primary-custom">
                            <i class="bi bi-search me-2"></i>

                            {{ $hero_section->btn1_text }}
                        </a>
                        <a href="#sell" class="btn btn-outline-custom">
                            <i class="bi bi-car-front me-2"></i>{{ $hero_section->btn2_text }}
                        </a>
                        <a href="#contact" class="btn btn-outline-custom">
                            <i class="bi bi-telephone me-2"></i> {{ $hero_section->btn3_text }}
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 animate-fade-right">
                    <div class="hero-image">
                        <img src="{{ asset($hero_section->image) }}" alt="Luxury Sports Car">
                        <div class="hero-badge">
                            <h4><span class="counter" data-target="{{ $car_count }}">0</span>+</h4>
                            <p>Premium Vehicles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="about">
        <div class="container">
            <h2 class="section-title">Why Choose LuxeDrive</h2>
            <p class="section-subtitle">Experience automotive excellence with our premium services and handpicked
                selection of luxury vehicles.</p>
            <div class="row g-4">

                @foreach ($features as $feature)
                    <div class="col-md-4 animate-fade-up delay-1">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="{{ $feature->icon }}"></i>
                            </div>
                            <h4>{{ $feature->title }}</h4>
                            <p>{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        </div>
    </section>

    <!-- Latest Cars -->

    <section class="cars-section">
        <div class="container">
            <h2 class="section-title">Latest Arrivals</h2>
            <p class="section-subtitle">Freshly added premium vehicles waiting for their next owner.</p>
            <div class="row g-4">
                @foreach ($latest_cars as $car)
                    <div class="col-md-6 col-lg-3">
                        <div class="car-card">
                            <div class="car-image">
                                <img src="{{ asset($car->carimages->first()->path ?? 'assets/images/sell-car.jpg') }}"
                                    alt="BMW X7">
                                <span class="car-badge">Latest</span>
                            </div>
                            <div class="car-content">
                                <h4>{{ $car->name }}</h4>
                                <div class="car-price">{{ $car->price }}</div>
                                <div class="car-specs">
                                    <span class="car-spec"><i class="bi bi-fuel-pump"></i>
                                        {{ ucfirst($car->fuel_type) }}</span>
                                    <span class="car-spec"><i class="bi bi-speedometer"></i> {{ $car->mileage }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

    <!-- Why Choose Us -->

    <section class="why-section">
        <div class="container">
            <h2 class="section-title">The LuxeDrive Advantage</h2>
            <p class="section-subtitle">Discover why thousands of customers trust us for their luxury car purchases.</p>
            <div class="row g-4">
                @foreach ($advantages as $advantage)
                    <div class="col-md-6 col-lg-4">
                        <div class="why-card">
                            <div class="why-icon"><i class="{{ $advantage->icon }}"></i></div>
                            <div>
                                <h5>{{ $advantage->title }}</h5>
                                <p>{{ $advantage->description }} .</p>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
        </div>
    </section>


    <!-- Statistics / Numbers -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="stat-box">
                       <h2><span class="counter" data-target="{{ $car_count  }}">0</span>+</h2>
                        <p>Cars Sold</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h2><span class="counter" data-target="{{ $brand_count  }}">0</span>+</h2>
                        
                        <p>Luxury Brands</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h2><span class="counter" data-target="{{ $user_count }}">0</span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h2>24/7</h2>
                        <p>Customer Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cars Listing -->
    <section class="cars-section" id="cars">
        <div class="container">
            <h2 class="section-title">Featured Vehicles</h2>
            <p class="section-subtitle">Explore our handpicked selection of premium automobiles ready for you.</p>
            <div class="row g-4">

                @foreach ($featured_cars as $featured)
                    <div class="col-md-6 col-lg-4">

                        <div class="car-card">

                            <div class="car-image">

                                <img src="{{ asset($featured->carimages->first()->path ?? 'assets/images/sell-car.jpg') }}"
                                    alt="{{ $featured->name }}">

                                <span class="car-badge">Featured</span>

                            </div>

                            <div class="car-content">

                                <h4>{{ $featured->name }}</h4>

                                <div class="car-price">
                                    ${{ number_format($featured->price) }}
                                </div>

                                <div class="car-specs">

                                    <span class="car-spec">
                                        <i class="bi bi-fuel-pump"></i>
                                        {{ ucfirst($featured->fuel_type) }}
                                    </span>

                                    <span class="car-spec">
                                        <i class="bi bi-speedometer"></i>
                                        {{ $featured->mileage }} km/h
                                    </span>

                                    <span class="car-spec">
                                        <i class="bi bi-gear"></i>
                                        {{ ucfirst($featured->transmission) }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>


            <div class="text-center mt-5">
                <a href="{{route('cars.index')}}" class="btn btn-primary-custom btn-lg">
                    View All Cars <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Real experiences from our valued customers who found their dream cars with us.
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Exceptional service from start to finish. The team helped me find
                            the perfect Mercedes for my family. Highly recommend LuxeDrive!"</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/images/testimonial-1.jpg') }}" alt="James Wilson">
                            <div>
                                <h5>James Wilson</h5>
                                <p>Business Executive</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"The buying experience was seamless. No pressure sales, fair
                            pricing, and they delivered my Ferrari right to my doorstep. Amazing!"</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt="Sarah Mitchell">
                            <div>
                                <h5>Sarah Mitchell</h5>
                                <p>Entrepreneur</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Professional staff, beautiful showroom, and an incredible selection
                            of luxury vehicles. LuxeDrive made my dream car a reality."</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/images/testimonial-3.jpg') }}" alt="Robert Anderson">
                            <div>
                                <h5>Robert Anderson</h5>
                                <p>Retired Judge</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sell Your Car -->
    <section class="sell-section" id="sell">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate-fade-left">
                    <div class="sell-image">
                        <img src="{{ asset('assets/images/sell-car.jpg') }}" alt="Sell Your Car">
                    </div>
                </div>
                <div class="col-lg-6 animate-fade-right">
                    <div class="sell-content">
                        <h2>Want to Sell Your Car?</h2>
                        <p>Get the best value for your vehicle with our hassle-free selling process. We offer fair
                            market prices and instant payments.</p>
                        <ul class="sell-benefits">
                            <li><i class="bi bi-check"></i> Free vehicle valuation within 24 hours</li>
                            <li><i class="bi bi-check"></i> Instant payment upon agreement</li>
                            <li><i class="bi bi-check"></i> We handle all paperwork</li>
                            <li><i class="bi bi-check"></i> Free pickup from your location</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary-custom btn-lg">
                            Get Free Quote <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands -->
    <section class="brands-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Our Premium Brands</h2>

            <div class="row text-center g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-card">
                        <i class="bi bi-car-front-fill"></i>
                        <h6>Mercedes</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-card">
                        <i class="bi bi-speedometer2"></i>
                        <h6>BMW</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-card">
                        <i class="bi bi-lightning-charge-fill"></i>
                        <h6>Audi</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-card">
                        <i class="bi bi-trophy-fill"></i>
                        <h6>Porsche</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-card">
                        <i class="bi bi-fire"></i>
                        <h6>Ferrari</h6>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="brand-card">
                        <i class="bi bi-gem"></i>
                        <h6>Bentley</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sell-section">
        <div class="container text-center">
            <h2 class="section-title">Ready To Drive Your Dream Car?</h2>
            <p class="section-subtitle">Explore our full luxury collection and book your next ride today.</p>
            <a href="#cars" class="btn btn-primary-custom btn-lg">
                Browse All Vehicles
            </a>
        </div>
    </section>
    <!-- Call To Action -->
@endsection

@push('js')
    <script>
        const counters = document.querySelectorAll('.counter');

        const observer = new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    const counter = entry.target;

                    const target = +counter.dataset.target;

                    let current = 0;

                    const increment = target / 100;

                    const updateCounter = () => {

                        current += increment;

                        if (current < target) {

                            counter.innerText = Math.ceil(current);

                            requestAnimationFrame(updateCounter);

                        } else {

                            counter.innerText = target;

                        }
                    };

                    updateCounter();

                    observer.unobserve(counter);
                }

            });

        }, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    </script>
@endpush
