{{-- @include('admin::layouts.dashboard-header'); --}}
@extends('admin::layouts.dashboard-header')

@section('content')
    

@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
        @endif

        @if ($errors->any())
    <div class="alert alert-danger">
        <p>{{ $errors->first() }}</p>
    </div>
@endif


<div class="main-wrapper">
    <h3>ADD PRODUCT</h3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/add-product') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="productNameLabel" class="form-label">Product Name</label>
                  <input type="text" class="form-control" id="productNameLabel" name="product_name" required>
                </div>

                <div class="mb-3">
                    <label for="productOverviewLabel" class="form-label">Product Overview</label>
                    <input type="text" class="form-control" id="productOverviewLabel" name="product_overview" required>
                </div>


                <div class="mb-3">
                    <label for="productDescriptionLabel" class="form-label">Product Description</label>
                    <textarea class="form-control" id="productDescriptionLabel" name="product_description" rows="5"></textarea>

                </div>

                <div class="mb-3">
                    <label for="productImage" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="productImage" name="product_image" accept="image/*">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
</div>


@endsection