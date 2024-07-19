<footer>

    <div class="mt-5 pt-5 pb-5 footer">
        <div class="container">
            <div class="footerlogo">
                <img src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            </div>
            <div class="row">
                
                <div class="col-lg-5 col-xs-12 about-company">
                    <h2>Tococo</h2>
                    <p class="pr-5 ">{!! Str::limit(strip_tags($general->about_description), 100) !!}
                    </p>
                    <p>
                        <a href="#">
                            <i class="fab fa-facebook-square mr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-amazon"></i>
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                    <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                    <ul class="m-0 p-0">
                        <li>
                            <a href="{{ route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('product')}}">Product</a>
                        </li>
                        <li>
                            <a href="{{ route('product')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                    <p>{{ $general->contact_location}}</p>
                    <p class="mb-0">
                        <i class="fa fa-phone mr-3"></i> {{ $general->contact_phone}}</p>
                    <p>
                        <i class="fas fa-envelope-open mr-3"></i>{{ $general->contact_email}}</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col copyright">
                    <p class="">
                        <small class="text-white-50">&copy; {{date('Y')}} All Rights Reserved. Developed and Maintenanced by <a class="text-decoration-none" target="_blank" href="https://tiancode.my.id">TianCode</a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>