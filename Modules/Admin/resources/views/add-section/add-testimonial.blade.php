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
    <H3>ADD TESTIMONIAL</H3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/add-testimonial') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="reviewOverviewLabel" class="form-label">Review Overview</label>
                  <input type="text" class="form-control" id="reviewOverviewLabel" name="review_overview" required>
                </div>

                <div class="mb-3">
                    <label for="reviewMessageLabel" class="form-label">Review Message</label>
                    <textarea class="form-control" id="reviewMessageLabel" name="review_message" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label for="RatingValueLabel" class="form-label">Rating</label>
                    <select id="RatingValueLabel" class="form-select" name="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>                

                <div class="mb-3">
                    <label for="ClientNameLabel" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="ClientNameLabel" name="client_name" required>
                </div>

                <div class="mb-3">
                    <label for="ClientDesignationLabel" class="form-label">Client Designation</label>
                    <input type="text" class="form-control" id="ClientDesignationLabel" name="client_designation" required>
                </div>

                <div class="mb-3">
                    <label for="testimonialClientImage" class="form-label">Testimonial Client Image</label>
                    <input type="file" class="form-control" id="testimonialClientImage" name="testimonial_client_image" accept="image/*" required>
                </div>
                

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        
    </div>
</div>


@endsection