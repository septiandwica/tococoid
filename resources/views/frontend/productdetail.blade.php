@extends('frontend.layouts.app')
@section('contents')
<main>
    <article
        class="herobread container-fluid d-flex align-items-center justify-content-center">
        <section class=" container">
            <div class=" text-center " data-aos="fade-up">
                <h1>Tococo Chips</h1>
                <p class="mb-5">Savory Delights of Coconut</p>
            </div>
        </section>
    </article>
    <article class="product pb-5">
        <section class="container py-5 text-center">
            <nav
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb" data-aos="fade-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('product')}}">Product</a>
                    </li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-5 text-center" >
                    <div
                        id="carouselExampleAutoplaying"
                        class="carousel slide"
                        data-bs-ride="carousel" data-aos="zoom-in" data-aos-duration="1500" >
                        <div class="carousel-inner csl">
                            <div class="carousel-item active">
                                <img src="{{ $productdetail->getImage(1)}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $productdetail->getImage(2)}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $productdetail->getImage(3)}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 text-start pt-lg-0 pt-4" data-aos="fade-right" data-aos-duration="1500">
                    <p class="subtitle">{{$productdetail->product_name}}</p>
                    <div class="title">
                        <h1>{{$productdetail->product_varian}}</h1>

                    </div>
                    <p>{{$productdetail->product_desc}}</p>
                </div>
            </div>

        </section>
    </article>
    <article class="faqsection py-5">
        <section class="container ">
            <div class="title text-center" data-aos="fade-down" data-aos-duration="1500">
                <img src="./src/img/logo.png" width="80px" alt="">
                <h1 >FAQ</h1>
                <p class="mb-5">Your Guide to Flavorful Nutrition</p>
            </div>
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                      <h2 class="accordion-header" >
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            {{$productdetail->faq_question_1}}
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{$productdetail->faq_answer_1}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-left" data-aos-duration="1500">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            {{ $productdetail->faq_question_2}}
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{$productdetail->faq_answer_2}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            {{$productdetail->faq_question_3}}
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{$productdetail->faq_answer_3}}
                            
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>

    </article>
    <article class="featured py-5">
        <section class="container ">
            <div class="title text-center" data-aos="fade-up" data-aos-duration="1500">
                <img src="./src/img/logo.png" width="80px" alt="">
                <h1 >Featured Product</h1>
                <p class="mb-5">Strength from Coconut</p>
            </div>
            <div class="row">
                <div class="productinfo d-flex flex-wrap align-items-center justify-content-center" data-aos="fade-down" data-aos-duration="1500">
                    @foreach ($featured as $item)
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
            </div>
        </section>

    </article>
</main>
@endsection