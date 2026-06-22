 <footer class="footer" id="contact">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-brand">{{$settings->site_name}}</div>
                    <p class="footer-text">{{$settings->bio}}.</p>
                    <div class="footer-social">
                        <a href="{{$settings->facebook}}"><i class="bi bi-facebook"></i></a>
                        <a href="{{$settings->instagram}}"><i class="bi bi-instagram"></i></a>
                        <a href="{{$settings->whatsapp}}"><i class="bi bi-whatsapp"></i></a>
                       
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('cars.index')}}">Browse Cars</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="{{route('sellform')}}">Sell Your Car</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h5>Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Car Sales</a></li>
                        <li><a href="#">Financing</a></li>
                        <li><a href="#">Trade-In</a></li>
                        <li><a href="#">Service Center</a></li>
                        <li><a href="#">Insurance</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Contact Us</h5>
                    <ul class="footer-contact list-unstyled">
                        <li>
                            <i class="bi bi-geo-alt"></i>
                            <span>{{$settings->country}},{{$settings->city}},{{$settings->street}}</span>
                        </li>
                        <li>
                            <i class="bi bi-telephone"></i>
                            <span>{{$settings->phone}}</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <span>{{$settings->site_email}}</span>
                        </li>
                        <li>
                            <i class="bi bi-clock"></i>
                            <span>Mon - Sat: 9:00 AM - 8:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{$settings->year}} {{$settings->site_name}}. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>