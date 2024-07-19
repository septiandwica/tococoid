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
        <form action="{{ route('blog') }}" class="d-flex" role="search" method="GET">
            <input class="form-control" type="search" name="title" value="{{ request()->input('title') }}">
            <div class="mx-2">
                <button type="submit" class="btn-outln">Search</button>
            </div>
            <div class="mx-2 d-flex align-items-center justify-content-center">
                <a href="{{ route('blog') }}" class="btn-outln-second">Reset</a>
            </div>
        </form>
    </div>
</div>
<div class="input-group ">
    
  </div>
</section>
<article class="blogs pb-5">
<section class="container py-5 text-center">
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
        <div class="col-12 mt-3">
            <div class="row justify-content-center">
                <div class="col-auto">
                    {!! $getArticle->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                </div>
            </div>
        </div>
        @else
        <div class="col-12">
            <h4 class="text-center"> No articles found Here. </h4>
        </div>
         @endif
</section>
</article>
@endsection