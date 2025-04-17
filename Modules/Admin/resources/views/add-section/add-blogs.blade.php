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
    <h3>ADD NEWS</h3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/add-blog') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="newsHeading" class="form-label">News Heading</label>
                  <input type="text" class="form-control" id="newsHeading" name="news_heading" required>
                </div>


                <div class="mb-3">
                    <label for="newsDesccriptionLabel" class="form-label">News Description</label>
                    <textarea class="form-control" id="newsDesccriptionLabel" name="news_description" rows="10" required></textarea>

                </div>

                <div class="mb-3">
                    <label for="newsImage" class="form-label">News Image</label>
                    <input type="file" class="form-control" id="newsImage" name="news_image" accept="image/*" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
</div>

@endsection