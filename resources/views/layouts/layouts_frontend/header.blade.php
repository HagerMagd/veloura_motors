<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Veloura <span>Motors</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <!-- Cars Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Cars
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('cars.index') }}">
                                All Cars
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{route('featuredCars')}}">
                                Featured Cars
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{route('latestcar')}}">
                                Latest Cars
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                Luxury Cars
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Brands Dropdown -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Brands
                    </a>

                    <ul class="dropdown-menu">
                        @foreach ($all_brands as $brand)
                             <li><a class="dropdown-item" href="{{route('show.brand',$brand->id)}}"> {{$brand->name}}</a></li>
                        @endforeach

                       
                        

                    </ul>

                </li>

                <!-- Sell Your Car -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sellform')}}">
                        Sell Your Car
                    </a>
                </li>

                <!-- Reviews -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Reviews
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

            <!-- Right Button -->
            <a href="{{ route('cars.index') }}" class="btn btn-primary-custom">
                Explore Cars
            </a>

        </div>
    </div>
</nav>