@extends('frontend.layouts.app')
@section('contents')
<article class="hero container-fluid">
    <section class=" container pt-lg-5">
        <div class=" text-center pt-lg-5 " data-aos="fade-up" data-aos-duration="1500">
            <img class="pt-5" src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            <h1 >Your Ultimate Coconut Product Haven</h1>
            <p class="mb-5">Experience the Joy of Our Premium Coconut Products: Each Taste
                and Swig Tells a Unique Tale.</p>
            <a href="" class="btn-outln">View Catalouge</a>
        </div>
    </section>
</article>
<article class="product pb-5">
    <section class="container py-5 text-center">
        <div class="title text-center" data-aos="fade-up" data-aos-duration="1800">
            <img src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            <h1>Natural Coconut Delights</h1>
            <p class="mb-5">Embrace Nature's Goodness for Strength and Vitality</p>
        </div>
        @if ($getProduct->isNotEmpty())
        <div class="productinfo d-flex flex-wrap align-items-center justify-content-center">
            @foreach ($getProduct as $item)
                <div class="  d-flex  justify-content-center align-items-center m-3" data-aos="fade-up"
                    data-aos-duration="2000">
                    <a href="{{ route('product.detail', $item->product_slug) }}">
                        <figure class="productimg text-center">
                            <img src="{{ $item->getImage(2) }}" alt="{{ $item->product_name }}" class="img-fluid">
                        </figure>
                        <figcaption class="text-center productname">
                            <h5 >{{ $item->product_name}}</h5>
                        </figcaption>
                    </a>
                </div>
            @endforeach
        </div>
        @endif
        <div class="buttons mt-5">
            <a href="" class="btn-outln mt-5">View All</a>
        </div>
    </section>
</article>
<article class="about py-5">
    <section class="container  py-5">
        <div class="title text-center" data-aos="fade-up"
data-aos-duration="2000">
            <img src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            <h1 >About Tococo</h1>
            <p class="mb-5">Some facts about us</p>
        </div>
        <div class="row">
            <div class="col-lg-5 text-center aboutsimple" data-aos="fade-right">
                <img src="{{ $general->getImage() }}" alt="">
            </div>
            <div class="col-lg-7  text-center text-lg-start pt-5 pt-lg-0" data-aos="fade-left">
                <p class="description mb-5">
                    {{ $general->about_description }}
                   
                </p>

                <a href="" class="btn-outln ">More Detail</a>
            </div>
        </div>
    </section>

</article>

<article class="blogs pb-5">
    <section class="container py-5 text-center">
        <div class="title text-center" data-aos="fade-up" data-aos-duration="2000">
            <img src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            <h1>Tococo Blog</h1>
            <p class="mb-5">Insights, Stories, and Updates</p>
        </div>
        <div class="row blogsinfo">
            <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5"  data-aos="fade-up" data-aos-duration="1500" data-aos-once=“true”>
                <a href="">
                    <figure class="text-center">
                        <img src="{{ asset('frontend/src/img/banner.heic')}}" alt="" class="img-fluid">
                    </figure>
                    <figcaption class="text-start ">
                        <h5 class="blogtitle">Tococo Chips</h5>
                        <p class="blogdesc15">Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                            maiores corrupti officia, sunt expedita ex?</p>
                        <button>Read More
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </figcaption>
                </a>
            </div>
            <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5"  data-aos="fade-up" data-aos-duration="1500" >
                <a href="">
                    <figure class="text-center">
                        <img src="{{ asset('frontend/src/img/banner.heic')}}" alt="" class="img-fluid">
                    </figure>
                    <figcaption class="text-start ">
                        <h5 class="blogtitle">Tococo Chips</h5>
                        <p class="blogdesc15">Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                            maiores corrupti officia, sunt expedita ex?</p>
                        <button>Read More
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </figcaption>
                </a>
            </div>
            <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5"  data-aos="fade-up" data-aos-duration="1500">
                <a href="">
                    <figure class="text-center">
                        <img src="{{ asset('frontend/src/img/banner.heic')}}" alt="" class="img-fluid">
                    </figure>
                    <figcaption class="text-start ">
                        <h5 class="blogtitle">Tococo Chips</h5>
                        <p class="blogdesc15">Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                            maiores corrupti officia, sunt expedita ex?</p>
                        <button>Read More
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </figcaption>
                </a>
            </div>
        </div>
        <div class="buttons mt-5"  data-aos="fade-down" data-aos-duration="1500">
            <a href="" class="btn-outln mt-5">See More</a>
        </div>
    </section>
</article>
@endsection