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
                    <h1 class="hero-title">Find Your Perfect <span>Luxury</span> Vehicle</h1>
                    <p class="hero-subtitle">Discover an exclusive collection of premium automobiles. From elegant
                        sedans to powerful sports cars, we bring you the finest in automotive excellence.</p>
                    <div class="hero-buttons">
                        <a href="#cars" class="btn btn-primary-custom">
                            <i class="bi bi-search me-2"></i>Browse Cars
                        </a>
                        <a href="#sell" class="btn btn-outline-custom">
                            <i class="bi bi-car-front me-2"></i>Sell Your Car
                        </a>
                        <a href="#contact" class="btn btn-outline-custom">
                            <i class="bi bi-telephone me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 animate-fade-right">
                    <div class="hero-image">
                        <img src="{{asset('assets/images/hero-car.jpg')}}" alt="Luxury Sports Car">
                        <div class="hero-badge">
                            <h4>500+</h4>
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
                <div class="col-md-4 animate-fade-up delay-1">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Certified Quality</h4>
                        <p>Every vehicle undergoes a rigorous 150-point inspection to ensure premium quality and
                            reliability.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-fade-up delay-2">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <h4>Best Price Guarantee</h4>
                        <p>We offer competitive pricing with transparent deals and no hidden fees on all vehicles.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-fade-up delay-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4>Premium Support</h4>
                        <p>Our dedicated team provides 24/7 assistance for all your automotive needs and queries.</p>
                    </div>
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
                <div class="col-md-6 col-lg-3">
                    <div class="car-card">
                        <div class="car-image">
                            <img src="{{asset('assets/images/car-1.jpg')}}" alt="BMW X7">
                            <span class="car-badge">Latest</span>
                        </div>
                        <div class="car-content">
                            <h4>BMW X7</h4>
                            <div class="car-price">$98,000</div>
                            <div class="car-specs">
                                <span class="car-spec"><i class="bi bi-fuel-pump"></i> Petrol</span>
                                <span class="car-spec"><i class="bi bi-speedometer"></i> 240 km/h</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-section">
        <div class="container">
            <h2 class="section-title">The LuxeDrive Advantage</h2>
            <p class="section-subtitle">Discover why thousands of customers trust us for their luxury car purchases.</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-star-fill"></i></div>
                        <div>
                            <h5>Premium Selection</h5>
                            <p>Handpicked collection of the finest luxury and performance vehicles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-truck"></i></div>
                        <div>
                            <h5>Home Delivery</h5>
                            <p>Convenient doorstep delivery anywhere in the country.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-credit-card"></i></div>
                        <div>
                            <h5>Easy Financing</h5>
                            <p>Flexible payment plans and quick loan approvals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <div>
                            <h5>Trade-In Options</h5>
                            <p>Fair valuations and hassle-free trade-in process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-patch-check"></i></div>
                        <div>
                            <h5>Extended Warranty</h5>
                            <p>Comprehensive coverage for your peace of mind.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-tools"></i></div>
                        <div>
                            <h5>Service Center</h5>
                            <p>State-of-the-art maintenance and repair facilities.</p>
                        </div>
                    </div>
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
                        <h2>500+</h2>
                        <p>Cars Sold</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h2>120+</h2>
                        <p>Luxury Brands</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <h2>98%</h2>
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
                <div class="col-md-6 col-lg-4">
                    <div class="car-card">
                        <div class="car-image">
                            <img src="{{asset('assets/images/car-2.jpg')}}" alt="Mercedes-Benz S-Class">
                            <span class="car-badge">Featured</span>
                        </div>
                        <div class="car-content">
                            <h4>Mercedes-Benz S-Class</h4>
                            <div class="car-price">$89,900</div>
                            <div class="car-specs">
                                <span class="car-spec"><i class="bi bi-fuel-pump"></i> Hybrid</span>
                                <span class="car-spec"><i class="bi bi-speedometer"></i> 250 km/h</span>
                                <span class="car-spec"><i class="bi bi-gear"></i> Auto</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="car-card">
                        <div class="car-image">
                            <img src="{{asset('assets/images/car-3.jpg')}}" alt="Ferrari Roma">
                            <span class="car-badge">New Arrival</span>
                        </div>
                        <div class="car-content">
                            <h4>Ferrari Roma</h4>
                            <div class="car-price">$245,000</div>
                            <div class="car-specs">
                                <span class="car-spec"><i class="bi bi-fuel-pump"></i> Petrol</span>
                                <span class="car-spec"><i class="bi bi-speedometer"></i> 320 km/h</span>
                                <span class="car-spec"><i class="bi bi-gear"></i> Auto</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="car-card">
                        <div class="car-image">
                            <img src="{{asset('assets/images/hero-car.jpg')}}" alt="Range Rover Sport">
                            <span class="car-badge">Popular</span>
                        </div>
                        <div class="car-content">
                            <h4>Range Rover Sport</h4>
                            <div class="car-price">$112,500</div>
                            <div class="car-specs">
                                <span class="car-spec"><i class="bi bi-fuel-pump"></i> Diesel</span>
                                <span class="car-spec"><i class="bi bi-speedometer"></i> 225 km/h</span>
                                <span class="car-spec"><i class="bi bi-gear"></i> Auto</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary-custom btn-lg">
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
                            <img src="{{asset('assets/images/testimonial-1.jpg')}}" alt="James Wilson">
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
                            <img src="{{asset('assets/images/testimonial-2.jpg')}}" alt="Sarah Mitchell">
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
                            <img src="{{asset('assets/images/testimonial-3.jpg')}}" alt="Robert Anderson">
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
                        <img src="{{asset('assets/images/sell-car.jpg')}}" alt="Sell Your Car">
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