@extends('frontend.layouts.app') 


@section('contents')


<div id="main-wrapper">
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="error-404-area d-flex align-items-center justify-content-center" style="min-height: 100vh">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="error-404-content text-center">
                                <div class="banner" data-aos="fade-up">
                                    <img src="{{ asset('frontend/src/img/errors/error-404.webp')}}" alt="">
                                </div>
                                <div class="error-text my-5" data-aos="fade-up">
                                    <h5>This Page is Not Found.</h5>
                                    <h2>We are sorry for this error.
                                        Can’t find this page.</h2>

                                    <div class="button-box mt-5" data-aos="fade-up">
                                        <a href="{{ route('home')}}" class="btn-outln"><i class="icofont-long-arrow-left mr-2"></i> Back To Home </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="error-area-shap">
                    <img src="{{ asset('frontend/src/img/errors/error-sharp.webp')}}" alt="">
                </div>
            </div>

        </div>
    </div>

</div>
@endsection