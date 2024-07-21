@extends('backend.layouts.app') 
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendor/tagstyle/bootstrap-tagsinput.css')}}">

@endsection
@section('contents')

@include('backend.layouts.sessionmessage')

<div class="pagetitle">
    <h1>Add Blog</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Blog Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/blog/add') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Title *</label>
                            <input type="text" name="blog_title" class="form-control @error('blog_title') is-invalid @enderror" id="inputName4" value="">
                            @error('blog_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Blog Image*</label>
                            <p>
                            <i>Aspek Rasio gambar harus 16:9 (1920x1080, 1280x720, dst)</i>
                            </p>
                            <input type="file" name="blog_img" class="form-control @error('blog_img') is-invalid @enderror" id="inputEmail4">
                            @error('blog_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Description *</label>
                            <textarea class="tinymce-editor form-control @error('blog_content') is-invalid @enderror" name="blog_content"></textarea>
                            @error('blog_content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Read Time *</label>
                            <input type="text" name="blog_readtime" class="form-control @error('blog_readtime') is-invalid @enderror" id="readtimeinput" value="">
                            @error('blog_readtime')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <h5 class="card-title">Search Engine Optimization Data</h5>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" id="" cols="30" rows="3" style="resize: none;"></textarea>
                            @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" id="inputName4" value="">
                            @error('meta_keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
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