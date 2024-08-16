<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tococo - Pionerr Coconut Product</title>
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
            rel="stylesheet">

        <!-- style assets -->
        <link rel="shortcut icon" href="{{ asset('frontend/src/img/favicon.ico')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-5.3.2-dist/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/fontawesome-free-6.5.1-web/css/all.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/aos/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/src/css/style.css')}}">
    </head>
    <body>
        @include('frontend.layouts.header')

        <main>
            @yield('contents')
        </main>
       
        @include('frontend.layouts.footer')
        <!-- script asset -->
        <script src="{{ asset('frontend/assets/fontawesome-free-6.5.1-web/js/all.js')}}"></script>
        <script src="{{ asset('frontend/assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js')}}"></script>
        <script src="{{ asset('frontend/assets/aos/aos.js')}}"></script>
        <script src="{{ asset('frontend/src/js/main.js')}}"></script>
    </body>
</html>