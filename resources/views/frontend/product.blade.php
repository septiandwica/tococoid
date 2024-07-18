@extends('frontend.layouts.app')
@section('contents')
<article
class="herobread container-fluid d-flex align-items-center justify-content-center">
<section class=" container">
    <div class=" text-center " data-aos="fade-up" data-aos-duration="1500">
        <h1>Our Product</h1>
        <p class="mb-5">Natural Taste</p>
    </div>
</section>
</article>
<article class="product pb-5">
<section class="container py-5 text-center">
    <div class="title text-center" data-aos="fade-down" data-aos-duration="1500">
        <img src="./src/img/logo.png" width="80px" alt="">
        <h1>Natural Coconut Delights</h1>
        <p class="mb-5">Embrace Nature's Goodness for Strength and Vitality</p>
    </div>
    @if ($getProduct->isNotEmpty())
    <div class="productinfo d-flex flex-wrap align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1500">
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
</section>
</article>
@endsection