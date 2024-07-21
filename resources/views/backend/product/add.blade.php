@extends('backend.layouts.app') @section('contents')

<div class="pagetitle">
    <h1>Add Category</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Category</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Category Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('dashboard/product/add')}}" method="POST" enctype="multipart/form-data">      
                        @csrf              
                        <div class="col-12 flex-column">
                            <label for="inputProductName" class="form-label">Product Name *</label>
                            <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="inputProductName">
                            @error('product_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputProductVarian" class="form-label">Product Varian *</label>
                            <input type="text" name="product_varian" class="form-control @error('product_varian') is-invalid @enderror" id="inputProductVarian">
                            @error('product_varian')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputProductDesc" class="form-label">Product Description *</label>
                            <textarea name="product_desc" class="form-control @error('product_desc') is-invalid @enderror" id="inputProductDesc" cols="30" rows="3" style="resize: none;"></textarea>
                            @error('product_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputProductSelling" class="form-label">Estimate Total Product Selling *</label>
                            <input type="text" name="product_selling" class="form-control @error('product_selling') is-invalid @enderror" id="inputProductSelling">
                            @error('product_selling')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputFAQQuestion1" class="form-label">FAQ Question 1</label>
                            <input type="text" name="faq_question_1" class="form-control @error('faq_question_1') is-invalid @enderror" id="inputFAQQuestion1">
                            @error('faq_question_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputFAQAnswer1" class="form-label">FAQ Answer 1</label>
                            <input type="text" name="faq_answer_1" class="form-control @error('faq_answer_1') is-invalid @enderror" id="inputFAQAnswer1">
                            @error('faq_answer_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputFAQQuestion2" class="form-label">FAQ Question 2</label>
                            <input type="text" name="faq_question_2" class="form-control @error('faq_question_2') is-invalid @enderror" id="inputFAQQuestion2">
                            @error('faq_question_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputFAQAnswer2" class="form-label">FAQ Answer 2</label>
                            <input type="text" name="faq_answer_2" class="form-control @error('faq_answer_2') is-invalid @enderror" id="inputFAQAnswer2">
                            @error('faq_answer_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputFAQQuestion3" class="form-label">FAQ Question 3</label>
                            <input type="text" name="faq_question_3" class="form-control @error('faq_question_3') is-invalid @enderror" id="inputFAQQuestion3">
                            @error('faq_question_3')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputFAQAnswer3" class="form-label">FAQ Answer 3</label>
                            <input type="text" name="faq_answer_3" class="form-control @error('faq_answer_3') is-invalid @enderror" id="inputFAQAnswer3">
                            @error('faq_answer_3')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr class="hr">
                        <h5 class="card-title">Product Image must be 3</h5>
                        <p><i>Aspek Rasio gambar harus 3:2 (6000x4000,3000x2000, dst)</i></p>
                        
                        <div class="col-12 flex-column">
                            <label for="inputProductImg1" class="form-label">Product Image 1</label>
                            <input type="file" name="product_img_1" class="form-control @error('product_img_1') is-invalid @enderror" id="inputProductImg1">
                            @error('product_img_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputProductImg2" class="form-label">Product Image 2</label>
                            <input type="file" name="product_img_2" class="form-control @error('product_img_2') is-invalid @enderror" id="inputProductImg2">
                            @error('product_img_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputProductImg3" class="form-label">Product Image 3</label>
                            <input type="file" name="product_img_3" class="form-control @error('product_img_3') is-invalid @enderror" id="inputProductImg3">
                            @error('product_img_3')
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