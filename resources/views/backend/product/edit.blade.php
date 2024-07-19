@extends('backend.layouts.app') @section('contents')

<div class="pagetitle">
    <h1>Edit Product Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Products</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Product Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/product/edit', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                   
                    
                        <!-- Product Details -->
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Product Name *</label>
                            <input type="text" value="{{ old('product_name', $product->product_name) }}" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="inputName4">
                            @error('product_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12 flex-column">
                            <label for="inputVarian4" class="form-label">Product Varian *</label>
                            <input type="text" value="{{ old('product_varian', $product->product_varian) }}" name="product_varian" class="form-control @error('product_varian') is-invalid @enderror" id="inputVarian4">
                            @error('product_varian')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputDesc4" class="form-label">Product Description *</label>
                            <textarea name="product_desc" class="form-control @error('product_desc') is-invalid @enderror" id="inputDesc4" rows="3">{{ old('product_desc', $product->product_desc) }}</textarea>
                            @error('product_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputSelling4" class="form-label">Product Selling Price *</label>
                            <input type="number" value="{{ old('product_selling', $product->product_selling) }}" name="product_selling" class="form-control @error('product_selling') is-invalid @enderror" id="inputSelling4">
                            @error('product_selling')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- FAQ Section -->
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="col-12 flex-column">
                                <label for="inputFaqQuestion{{ $i }}" class="form-label">FAQ Question {{ $i }} *</label>
                                <input type="text" value="{{ old('faq_question_' . $i, $product->{'faq_question_' . $i}) }}" name="faq_question_{{ $i }}" class="form-control @error('faq_question_' . $i) is-invalid @enderror" id="inputFaqQuestion{{ $i }}">
                                @error('faq_question_' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 flex-column">
                                <label for="inputFaqAnswer{{ $i }}" class="form-label">FAQ Answer {{ $i }} *</label>
                                <input type="text" value="{{ old('faq_answer_' . $i, $product->{'faq_answer_' . $i}) }}" name="faq_answer_{{ $i }}" class="form-control @error('faq_answer_' . $i) is-invalid @enderror" id="inputFaqAnswer{{ $i }}">
                                @error('faq_answer_' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endfor
                    
                        <!-- Image Uploads -->
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="col-12 flex-column">
                                <label for="inputImg{{ $i }}" class="form-label">Product Image {{ $i }} *</label>
                                <br>
                                @if ($product->{'product_img_' . $i})
                                    <img class="my-3" src="{{ asset('upload/products/' . $product->{'product_img_' . $i}) }}" alt="Product Image {{ $i }}" width="100">
                                @endif
                                <input type="file" name="product_img_{{ $i }}" class="form-control @error('product_img_' . $i) is-invalid @enderror" id="inputImg{{ $i }}">
                                @error('product_img_' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endfor
                    
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</section>

@endsection