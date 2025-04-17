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
    <h3>ADD SERVICE</h3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/add-service') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="serviceNameLabel" class="form-label">Service Name</label>
                  <input type="text" class="form-control" id="serviceNameLabel" name="service_name" required>
                </div>

                <div class="mb-3">
                    <label for="serviceOverviewLabel" class="form-label">Service Overview</label>
                    <input type="text" class="form-control" id="serviceOverviewLabel" name="service_overview" required>
                </div>


                <div class="mb-3">
                    <label for="serviceDescriptionLabel" class="form-label">Service Description</label>
                    <textarea class="form-control" id="serviceDescriptionLabel" name="service_description" rows="5"></textarea>

                </div>

                <div class="mb-3">
                    <label for="serviceImage" class="form-label">Service Image</label>
                    <input type="file" class="form-control" id="serviceImage" name="service_image" accept="image/*">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
</div>

@endsection