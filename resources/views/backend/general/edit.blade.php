@extends('backend.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendor/tagstyle/bootstrap-tagsinput.css')}}">

@endsection
@section('contents')

<div class="pagetitle">
    <h1>Edit General Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">General</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit General Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/general-settings/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputEmail4" value="{{ $general->title }}">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Home Img Background</label>
                            <br>
                            <img src="{{ $general->getImage()}}" width="200px" class="my-3" alt="">
                            <input type="file" name="home_img" class="form-control @error('home_img') is-invalid @enderror" id="inputEmail4">
                            @error('home_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <hr class="hr">
                        <h5 class="card-title">About Information</h5>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">About Description*</label>
                            <textarea class=" form-control" name="about_description" class="form-control @error('about_description') is-invalid @enderror">{{ $general->about_description }}</textarea>
                            @error('about_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">About Vission*</label>
                            <textarea class=" form-control" name="about_vission" class="form-control @error('about_vission') is-invalid @enderror">{{ $general->about_vission }}</textarea>
                            @error('about_vission')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">About Mission*</label>
                            <textarea class="tinymce-editor form-control" name="about_mission" class="form-control @error('about_mission') is-invalid @enderror">{{ $general->about_mission }}</textarea>
                            @error('about_mission')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr class="hr">
                        <h5 class="card-title">Contact Information</h5>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Contact Email*</label>
                            <textarea class="form-control" name="contact_email" class="form-control @error('contact_email') is-invalid @enderror">{{ $general->contact_email }}</textarea>
                            @error('contact_email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Contact Phone*</label>
                            <textarea class="form-control" name="contact_phone" class="form-control @error('contact_phone') is-invalid @enderror">{{ $general->contact_phone }}</textarea>
                            @error('contact_phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Contact Instagram*</label>
                            <textarea class="form-control" name="contact_ig" class="form-control @error('contact_ig') is-invalid @enderror">{{ $general->contact_ig }}</textarea>
                            @error('contact_ig')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Contact Tiktok*</label>
                            <textarea class="form-control" name="contact_tiktok" class="form-control @error('contact_tiktok') is-invalid @enderror">{{ $general->contact_tiktok }}</textarea>
                            @error('contact_tiktok')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Contact Linkedin*</label>
                            <textarea class="form-control" name="contact_linkedin" class="form-control @error('contact_linkedin') is-invalid @enderror">{{ $general->contact_linkedin }}</textarea>
                            @error('contact_linkedin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Contact Location*</label>
                            <textarea class="form-control" name="contact_location" class="form-control @error('contact_location') is-invalid @enderror">{{ $general->contact_location }}</textarea>
                            @error('contact_location')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                       


                        <hr class="hr">
                        <h5 class="card-title">SEO Optimization</h5>
                        <!-- Penambahan value pada input meta -->
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Title</label>
                            <input name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" id="" value="{{ $general->meta_title }}">
                            @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Description*</label>
                            <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" id="" cols="30" rows="3" style="resize: none;">{{ $general->meta_description }}</textarea>
                            @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" value="{{ $general->meta_keywords }}" class="form-control @error('meta_keywords') is-invalid @enderror" id="inputName4">
                            @error('meta_keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
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