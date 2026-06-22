@extends('layouts.layouts_frontend.app')
@section('title')
    Sell Request Form
@endsection
@section('body')
    <!-- Sell Your Car Section -->
    <section class="sell-request-section" id="sell-car">
        <div class="container">

            <div class="sell-request-wrapper">

                <div class="sell-request-header text-center">
                    <h2>Sell Your Luxury Car</h2>
                    <p>
                        Submit your vehicle details and our team will contact you with the best market offer.
                    </p>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        {{ session('error') }}

                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('sell.request.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">

                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control custom-input" placeholder="Enter your full name"
                                name="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control custom-input" placeholder="Enter your phone number"
                                name="phone" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-6">
                            <label class="form-label">Car Brand</label>
                            <select class="form-select custom-input" name="car_brand" value="{{ old('car_brand') }}">
                                <option selected disabled>Select car Brand</option>
                                @foreach ($all_brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach

                            </select>

                        </div>

                        @error('car_brand')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-6">
                            <label class="form-label">Car Model</label>
                            <input type="text" class="form-control custom-input" placeholder="X6, C200, A8..."
                                name="model" value="{{ old('model') }}">
                        </div>
                        @error('model')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror


                        <div class="col-md-6">
                            <label class="form-label">Car Name</label>
                            <input type="text" class="form-control custom-input" placeholder="X6, C200, A8..."
                                name="car_name" value="{{ old('car_name') }}">
                        </div>
                        @error('car_name')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror


                        <div class="col-md-4">
                            <label class="form-label">Year</label>
                            <input type="number" class="form-control custom-input" placeholder="2024" name="year"
                                value="{{ old('year') }}">
                        </div>

                        @error('year')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-4">
                            <label class="form-label">Mileage</label>
                            <input type="number" class="form-control custom-input" placeholder="15000 KM" name="maileage"
                                value="{{ old('maileage') }}">
                        </div>
                        @error('maileage')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-4">
                            <label class="form-label">Expected Price</label>
                            <input type="number" class="form-control custom-input" placeholder="$ 50,000" name="price"
                                value="{{ old('price') }}">
                        </div>
                        @error('price')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-6">
                            <label class="form-label">Transmission</label>
                            <select class="form-select custom-input" name="transmission" value="{{ old('transmission') }}">
                                <option selected disabled>Select transmission type</option>
                                <option value="automatic">Automatic</option>
                                <option value="manual">Manual</option>
                            </select>
                        </div>

                        @error('transmission')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-md-6">
                            <label class="form-label">Fuel Type</label>
                            <select class="form-select custom-input" name="fuel_type" value="{{ old('fuel_type') }}">
                                <option selected disabled>Select fuel type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="electric">Electric</option>
                            </select>
                        </div>

                        @error('fuel_type')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-12">
                            <label class="form-label">Car Image</label>
                            <input type="file" id="car_images" class="form-control custom-input" name="images[]"
                                accept="image/*" multiple>
                        </div>
                        @error('images')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-12">
                            <label class="form-label">Additional Details</label>
                            <textarea rows="5" class="form-control custom-input" placeholder="Tell us more about your car..."
                                name="message">{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="col-12 text-center">
                            <button type="submit" class="sell-btn">
                                Submit Request
                            </button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </section>
@endsection
@push('js')
    <script>
        $('#car_images').fileinput({
            theme: 'fa5',
            allowedFileTypes: ['image'],
            showUpload: false,
            maxFileCount: 5,
            overwriteInitial: false,
            browseClass: "btn btn-primary",
            removeClass: "btn btn-danger",

            showRemove: true,
            showCancel: true,
            showClose: true,

            initialPreviewAsData: true
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '  🎉 Your sell request has been submitted successfully. Our team will contact you shortly.',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
@endpush
