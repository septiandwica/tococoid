@extends('frontend.layouts.app')
@section('contents')
<article class="blogs pb-5">
    <hr class="hr" />

            <section class="container py-5 text-center">
               
                <div class="row">
                   
                    <div class="title text-start" data-aos="fade-down" data-aos-duration="1500">
                        <h1 >{{ $blogdetail->blog_title }}</h1>
                    </div>
                    <div class="d-flex align-items-center" data-aos="fade-right" data-aos-duration="1500">
                        <p class="author">{{ $blogdetail ->role }}</p>
                        <p class="date divider mx-2">{{ $blogdetail->created_at->format('M d, Y') }}</p>    
                        <p class="readtime">{{ $blogdetail->blog_readtime }}</p>
                    </div>

                    @if(!@empty($blogdetail->getImage()))
                    <figure data-aos="zoom-in" data-aos-duration="1500">
                        <img src="{{ $blogdetail->getImage()}}" class="img-fluid" alt="">
                    </figure>
                    @endif

                    <div class="blogcontent text-start" data-aos="fade-down" data-aos-duration="1500">
                        {!! $blogdetail->blog_content !!}
                    </div>
                </div>

            </section>
        </article>
    <hr class="hr" />

        <article class="featured py-5">
            <section class="container  text-center">
                <div class="title text-start" data-aos="fade-right" data-aos-duration="1500">
                    <h3 >Featured Blog</h3>
                </div>
                @if ($featuredBlog->isNotEmpty())
                <div class="row blogsinfo">
                    @foreach ($featuredBlog as $item)
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
                    <a href="" class="btn-outln mt-5">See More</a>
                </div>
                @else
                <div class="col-12">
                    <h4 class="text-center"> No Featured articles found. </h4>
                </div>
                 @endif
            </section>

        </article>
@endsection