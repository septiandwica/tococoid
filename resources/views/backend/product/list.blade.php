@extends('backend.layouts.app')
@section('contents')

<div class="pagetitle">
    <h1>Product List</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Product</li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </nav>
</div>

<section class="section">   
    @include('backend.layouts.sessionmessage')

    <div class="row ">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body table-responsive">
                    <h5 class="card-title ">Product List
                        <a href="{{route('dashboard/product/add')}}" class="btn btn-primary float-end">Add New</a>
                    </h5>


                    <table class="table">
                        <div class="my-3">
                            <span>Total Product: </span><strong>{{ $getProduct->total() }}</strong>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getProduct as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    @if(!empty($value->product_img_1))
                                        <img src="{{ $value->getImage(1) }}" style="width: 200px" alt="">
                                    @endif
                                </td>
                                <td>{{ $value->product_name }}</td>
                                <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('dashboard/product/edit', ['id' => $value->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('dashboard/product/delete', ['id' => $value->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty  
                            <tr>
                                <td colspan="100%" class="text-center">Product Not Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $getProduct->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!} 
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
