@extends('frontend.layouts.app')
@section('contents')
<article class="hero container-fluid">
    <section class=" container pt-lg-5">
        <div class=" text-center pt-lg-5 " data-aos="fade-up" data-aos-duration="1500">
            <img class="pt-5" src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            <h1 >Your Ultimate Coconut Product Haven</h1>
            <p class="mb-5">Experience the Joy of Our Premium Coconut Products: Each Taste
                and Swig Tells a Unique Tale.</p>
            <a href="{{ $general->getCatalouge() }}" class="btn-outln">View Catalouge</a>
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
                            <img src="{{ $item->getImage(1) }}" alt="{{ $item->product_name }}" class="img-fluid">
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
            <a href="{{ route('product')}}" class="btn-outln mt-5">View All</a>
        </div>
    </section>
</article>
<article class="about py-5">
    <section class="container  py-5">
        
        <div class="row">
            <div class="col-12 col-md-6" data-aos="fade-up"
            data-aos-duration="2000">
            <div class="text-center mb-5 ">
                <img src="{{ asset('frontend/src/img/logo.png')}}" width="80px" alt="">
            </div>
                <h1>Unlock Coconut Potential. Today.</h1>
                <p class="mb-5">{{ Str::limit($general->about_description, 118) }}</p>
                <a  href="{{ route('about')}}" class="btn-outln ">More Detail</a>
            </div>
            <div class="col-12 col-md-6 ">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators" style="list-style: none">
                        <li 
                            data-bs-target="#carouselId"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="First slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="1"
                            aria-label="Second slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="2"
                            aria-label="Third slide"
                        ></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class=" text-center aboutsimple" data-aos="fade-right">
                               <video src="https://drive.google.com/file/d/1Xoja-g2bGjLf17AJeeu3s8UcFtq9G50D/view?usp=drive_link"></video>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center aboutsimple" data-aos="fade-right">
                                <img src="{{ $general->getImage() }}" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="text-center aboutsimple" data-aos="fade-right">
                                <img src="{{ $general->getImage() }}" alt="">
                            </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="attack">

                </div>
                
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
        @if ($getArticle->isNotEmpty())
        <div class="row blogsinfo">
            @foreach ($getArticle as $item)
            <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5"  data-aos="fade-up" data-aos-duration="1500" data-aos-once=“true”>
                <a href="{{ route('blog.detail', $item->blog_slug) }}">
                    <figure class="text-center">
                        <img src="{{$item->getImage()}}" alt="" class="img-fluid">
                    </figure>
                    <figcaption class="text-start ">
                        <h5 class="blogtitle">{{ $item->blog_title}}</h5>
                        <p class="blogdesc15">{!! Str::limit(strip_tags($item->blog_content), 100) !!}</p>
                        <button>Read More
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </figcaption>
                </a>
            </div>
            @endforeach
        </div>
        <div class="buttons mt-5"  data-aos="fade-down" data-aos-duration="1500">
            <a href="{{ route('blog')}}" class="btn-outln mt-5">See More</a>
        </div>
        @else
        <div class="col-12">
            <h4 class="text-center"> No articles found Here. </h4>
        </div>
         @endif
    </section>
</article>
@endsection