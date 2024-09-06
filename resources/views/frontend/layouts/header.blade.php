<header >
    <nav class="navbar navbar-expand-lg container ">
        <div class="container">
            <div class="navbarlogo d-flex justify-content-center align-items-center">
                <img src="{{ asset('frontend/src/img/logo.png')}}" alt="" width="40px">
                <a class="navbar-brand me-auto" href="{{ route('home')}}">
                <img src="{{ asset('frontend/src/img/logo-txt.png')}}" alt="" width="90px">

                </a>
            </div>

            <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div class="navbarlogo d-flex justify-content-center align-items-center">
                        <img src="{{ asset('frontend/src/img/logo.png')}}" alt="" width="40px">
                        <a class="navbar-brand me-auto" href="{{ route('home')}}">
                            <img src="{{ asset('frontend/src/img/logo-txt.png')}}" alt="" width="90px">
            
                            </a>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ request()->is('product') ? 'active' : '' }}" href="{{ route('product')}}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="utils">
                @if(session('locale') == 'id')
                    <a href="{{ route('setLanguage', 'en') }}" class="languageToggler" onclick="translatePage('en'); return false;">EN</a>
                @else
                    <a href="{{ route('setLanguage', 'id') }}" class="languageToggler" onclick="translatePage('id'); return false;">ID</a>
                @endif
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            
        </div>
    </nav>
</header>
<script>
    function translatePage(lang) {
        let url = window.location.href;
        let translateUrl = 'https://translate.google.com/translate?hl=' + lang + '&sl=' + (lang === 'en' ? 'id' : 'en') + '&u=' + encodeURIComponent(url);
        window.location.href = translateUrl;
    }
</script>