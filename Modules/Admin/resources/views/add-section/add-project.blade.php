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
    <H3>ADD PROJECT</H3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/add-project') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="projectNameLabel" class="form-label">Project Name</label>
                  <input type="text" class="form-control" id="projectNameLabel" name="project_name" required>
                </div>

                <div class="mb-3">
                    <label for="projectOverviewLabel" class="form-label">Project Overview</label>
                    <input type="text" class="form-control" id="projectOverviewLabel" name="project_overview" required>
                </div>


                <div class="mb-3">
                    <label for="projectDescriptionLabel" class="form-label">Project Description</label>
                    <textarea class="form-control" id="summernote" name="project_description" rows="5"></textarea>

                </div>

                <div class="mb-3">
                    <label for="projectImage" class="form-label">Project Image</label>
                    <input type="file" class="form-control" id="projectImage" name="project_image" accept="image/*">
                </div>
                
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">

    <!-- include summernote css/js-->
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter product description...',
                tabsize: 2,
                height: 150
            });
        });
    </script>

@endsection