@extends('frontend.layouts.app')
@section('contents')
<article
class="herobread container-fluid d-flex align-items-center justify-content-center">
<section class=" container">
    <div class=" text-center " data-aos="fade-up" data-aos-duration="1500">
        <h1>Tococo Blog</h1>
        <p class="mb-5">Insights, Stories, and Updates</p>

    </div>
</section>
</article>
<section class="container ">
<div class="row pt-5" data-aos="fade-right" data-aos-duration="1500">
    <div class="title">
        <h2>Find Our Posts</h2>
    </div>
    <div class="col-12">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </div>
</div>
<div class="input-group ">
    
  </div>
</section>
<article class="blogs pb-5">
<section class="container py-5 text-center">
    <div class="row blogsinfo">
        <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5" data-aos="fade-down" data-aos-duration="1500">
            <a href="./blogdetail.html">
                <figure class="text-center">
                    <img src="./src/img/banner.heic" alt="" class="img-fluid">
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
        <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5" data-aos="fade-down" data-aos-duration="1500">
            <a href="">
                <figure class="text-center">
                    <img src="./src/img/banner.heic" alt="" class="img-fluid">
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
        <div class=" col-md-4 d-flex justify-content-center align-items-center mb-5" data-aos="fade-down" data-aos-duration="1500">
            <a href="">
                <figure class="text-center">
                    <img src="./src/img/banner.heic" alt="" class="img-fluid">
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
</section>
</article>
@endsection