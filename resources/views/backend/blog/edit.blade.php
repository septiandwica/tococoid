@extends('backend.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendor/tagstyle/bootstrap-tagsinput.css')}}">

@endsection
@section('contents')

@include('backend.layouts.sessionmessage')
<div class="pagetitle">
    <h1>Edit Blog Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Blog Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/blog/edit', ['id' => $getArticle->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <!-- Blog Details -->
                        <div class="col-12 flex-column">
                            <label for="inputTitle4" class="form-label">Blog Title *</label>
                            <input type="text" value="{{ old('blog_title', $getArticle->blog_title) }}" name="blog_title" class="form-control @error('blog_title') is-invalid @enderror" id="inputTitle4">
                            @error('blog_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 flex-column">
                            <label for="inputImg1" class="form-label">Blog Image</label>
                            <br>
                            @if ($getArticle->blog_img)
                                <img class="my-3" src="{{ asset('upload/blogs/' . $getArticle->blog_img) }}" alt="Blog Image" width="100">
                            @endif
                            <input type="file" name="blog_img" class="form-control @error('blog_img') is-invalid @enderror" id="inputImg1" readonly>
                            @error('blog_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Description *</label>
                            <textarea class="tinymce-editor form-control @error('blog_content') is-invalid @enderror" name="blog_content">{{ old('blog_content', $getArticle->blog_content) }}</textarea>
                            @error('blog_content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputReadTime4" class="form-label">Read Time *</label>
                            <input type="text" value="{{ old('blog_readtime', $getArticle->blog_readtime) }}" name="blog_readtime" class="form-control @error('blog_readtime') is-invalid @enderror" id="inputReadTime4">
                            @error('blog_readtime')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <h5 class="card-title">Search Engine Optimization Data</h5>
                        <div class="col-12 flex-column">
                            <label for="inputMetaDesc4" class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" id="inputMetaDesc4" rows="3">{{ old('meta_description', $getArticle->meta_description) }}</textarea>
                            @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputMetaKeywords4" class="form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" id="inputMetaKeywords4" rows="3">{{ old('meta_keywords', $getArticle->meta_keywords) }}</textarea>
                            @error('meta_keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Blog</button>
                        </div>
                    </form>
                    
                    
                    

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/tagstyle/bootstrap-tagsinput.js')}}"></script>

    <script type="text/javascript">
        $("#tagsinput").tagsinput();
    </script>
@endsection